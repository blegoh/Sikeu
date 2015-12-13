<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 05/11/15
 * Time: 9:51
 */

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Tagihan;
use App\Models\TagihanPendaftar;
use App\Models\TagihanUKT;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function show($fakultasID = 0,$thnAkademik = 0){
        $tagihans = new TagihanUKT();
        $thnExist = DB::table('Tagihan')->select('ThnAkademik')->distinct()->get();
        if($thnAkademik != 0){
            $tagihans->setTahunAkademik($thnAkademik);
        }
        if($fakultasID != 0){
            $tagihans->setFakultas($fakultasID);
        }
        $fakultas = Fakultas::all();

        return view('tagihan.ukt',[
            'tagihans' => $tagihans->getTagihan(),
            'fakultas' => $fakultas,
            'pilihan' => $fakultasID,
            'thnExist' => $thnExist,
            'thn' => $thnAkademik,
            'user' => $this->user,
            'belum' => $tagihans->getBelum(),
            'sudah' => $tagihans->getSudah()
        ]);
    }

    public function filter(Request $request){
        $fakultas = $request->input('fakultas');
        $thnAkademik = $request->input('thn');
        return redirect('tagihan/ukt/'.$fakultas.'/'.$thnAkademik);
    }


    public function showWisuda(){
        $tgl = Carbon::today();
        $smt = ($tgl->month > 6)? 1 : 2;
        $thn = ($smt == 1)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        $tagihans = Tagihan::where('SmtAkademik',$smt)
            ->where('ThnAkademik',$thn)
            ->where('JenisTagihanID','2')
            ->get();

        return view('tagihan.wisuda',[
            'tagihans' => $tagihans
        ]);
    }

    public function addTagihanUKT(){
        DB::table('Mahasiswa')
            ->update(['Aktif' => 0]);
        //looping semua mahasiswa
        $mhs = Mahasiswa::all();
        $tgl = Carbon::today();
        $smt = ($tgl->month > 6)? 1 : 2;
        $thn = ($smt == 1)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        foreach ($mhs as $mhs) {
            $tagihan = new Tagihan();
            $tagihan->NIM = $mhs->NIM;
            $tagihan->JenisTagihanID = 1;
            $tagihan->ThnAkademik = $thn;
            $tagihan->SmtAkademik = $smt;
            $tagihan->Nominal = $mhs->ukt->Nominal;
            $tagihan->save();
        }
        return redirect('tagihan/ukt');
    }

    public function showUM(){
        $tgl = Carbon::today();
        $thn = $tgl->year.$tgl->year+1;
        $tagihans = TagihanPendaftar::where('ThnAkademik',$thn)
            ->get();
        return view('tagihan.um',[
            'tagihans' => $tagihans
        ]);
    }

    private function test(){

    }

}