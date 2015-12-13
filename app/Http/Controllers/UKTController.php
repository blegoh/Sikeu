<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 31/10/15
 * Time: 7:47
 */

namespace App\Http\Controllers;

use DB;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Jalur;
use App\Models\DanaUKT;
use App\Models\UKT;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UKTController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $fakultas = Fakultas::all();
        return view('ukt.show',[
            'fakultas' => $fakultas
        ]);
    }

    /**
     * @param $jalurID
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add($prodiId,$jalurID){
        return view('ukt.add');
    }

    /**
     * @param $jalurID
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function prosesAdd($prodiId, $jalurId, Request $request){
        $messages = [
            'required' => 'Golongan Harus Diisi',
            'integer' => 'Harus berupa bilangan'
        ];
        $validator = Validator::make($request->all(),[
            'gol.0' => 'required|integer',
            'gol.1' => 'required|integer',
            'gol.2' => 'required|integer',
            'gol.3' => 'required|integer',
            'gol.4' => 'required|integer',
            'gol.5' => 'required|integer'
        ],$messages);

        if($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $inputs = $request->input('gol');
        $tgl = Carbon::today();
        $thnAkademik = ($tgl->month > 6)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        $i = 1;
        foreach ($inputs as $input) {
            $ukt = new UKT();
            $ukt->ProdiID = $prodiId;
            $ukt->JalurID = $jalurId;
            $ukt->GolID = $i++;
            $ukt->TahunAkademik = $thnAkademik;
            $ukt->Nominal = $input;
            $ukt->save();
        }
        return redirect('ukt/'.$prodiId)
            ->with('pesan','Berhasil ditambahkan');
    }

    public function detailUKT($prodiId){
        $prodi = Prodi::find($prodiId);
        $tgl = Carbon::today();
        $thnAkademik = ($tgl->month > 6)? $tgl->year.$tgl->year+1 : ($tgl->year-1).$tgl->year;
        $snmptn = UKT::where('ProdiID',$prodiId)
            ->where('JalurID',1)
            ->where('TahunAkademik',$thnAkademik)
            ->get();
        $sbmptn = UKT::where('ProdiID',$prodiId)
            ->where('JalurID',2)
            ->where('TahunAkademik',$thnAkademik)
            ->get();
        $um = UKT::where('ProdiID',$prodiId)
            ->where('JalurID',3)
            ->where('TahunAkademik',$thnAkademik)
            ->get();
        return view('ukt.detail',[
            'prodi' => $prodi,
            'snmptn' => $snmptn,
            'sbmptn' => $sbmptn,
            'um' => $um
        ]);
    }

    /**
     * menampilkan total pendapatan dari dana UKT per fakultas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function danaUKT(){
        $dana = DanaUKT::getDana();
        //return $dana;
        return view('ukt.danaukt',[
            'dana' => $dana
        ]);
    }

    /**
     * @param Request $request
     * digunakan untuk ajax edit nominal UKT
     * @return array|string
     */
    public function editUKT(Request $request){
        $validator = Validator::make($request->all(),[
            'nominal' => 'required|integer',
        ]);

        if($validator->fails()) return "gagal";

        $uktId = $request->input('uktId');
        $nominal = $request->input('nominal');
        $nominal = $request->input('nominal');
        $ukt = UKT::find($uktId);
        if($ukt->Nominal != $nominal){
            $ukt->Nominal = $nominal;
            $ukt->update();
        }
        return $nominal;
    }

    public function validasi($jalurMasuk){
        if (! $this->authorize('validasi.ukt')) {
            return "Not Authorize";
        }
        $fakultas = Fakultas::all();
        $user = Auth::user();
        $jalur = Jalur::all();
        return view('ukt.validasi',[
            'fakultas' => $fakultas,
            'user' => $user,
            'jalurPilihan' => $jalurMasuk,
            'jalurs' => $jalur
        ]);
    }

    public function prosesValidasi($prodiID,$jalurMasuk){
        DanaUKT::validasi($prodiID,$jalurMasuk);
        return redirect('ukt/validasi/'.$jalurMasuk);
    }

    public function pdf(){
        $pdf = PDF::loadView('pdf.invoice', "test");
        return $pdf->download('invoice.pdf');
    }
}