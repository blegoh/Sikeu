<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 31/10/15
 * Time: 7:47
 */

namespace App\Http\Controllers;


use App\Models\Prodi;
use App\Models\Jalur;
use App\Models\UKT;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UKTController extends Controller
{
    public function show(){
        $prodi = Prodi::all();
        $jalur = Jalur::all();
        $tgl = Carbon::today();
        $thnAkademik = ($tgl->month > 6)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        return view('ukt.show',[
            'prodis' => $prodi,
            'jalurs' => $jalur,
            'tgl' => $tgl,
            'thnAkademik' => $thnAkademik
        ]);
    }

    public function showUKT(Request $request){
        $jalurID = $request->input('jalur');
        $jalurs = Jalur::all();
        $jalur = Jalur::find($jalurID);
        $tgl = Carbon::today();
        $thnAkademik = ($tgl->month > 6)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        $ukts = UKT::where('TahunAkademik',$thnAkademik)
            ->where('ProdiID','1')
            ->where('JalurID', $jalurID)
            ->get();
        $data['isShow'] = true;
        $data['jalurs'] = $jalurs;
        $data['jalurSelected'] = $jalur;
        $data['ukts'] = $ukts;
        return view('ukt.show',$data);
    }

    public function add($jalurID){
        return view('ukt.add');
    }

    public function prosesAdd($jalurID, Request $request){
        $inputs = $request->input('gol');
        $tgl = Carbon::today();
        $thnAkademik = ($tgl->month > 6)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        $prodiID = 1;
        $i = 1;
        foreach ($inputs as $input) {
            $ukt = new UKT();
            $ukt->ProdiID = $prodiID;
            $ukt->JalurID = $jalurID;
            $ukt->GolID = $i++;
            $ukt->TahunAkademik = $thnAkademik;
            $ukt->Nominal = $input;
            $ukt->save();
        }

        return redirect('ukt');
    }
}