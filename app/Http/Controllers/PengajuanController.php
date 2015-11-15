<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/11/15
 * Time: 21:29
 */

namespace App\Http\Controllers;


use App\Models\DetailPengajuan;
use App\Models\PengajuanDIPA;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuanController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $pengajuans = PengajuanDIPA::all();
        return view('pengajuan.show',[
            'pengajuans' => $pengajuans
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        return view('pengajuan.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function prosesAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'noPengajuan' => 'required',
            'perihal' => 'required'
        ]);

        if($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $tgl = Carbon::today();
        $pengajuan = new PengajuanDIPA();
        $pengajuan->NomerPengajuan = $request->input('noPengajuan');
        $pengajuan->Perihal =  $request->input('perihal');
        $pengajuan->TahunAnggaran= $tgl->year;
        $pengajuan->save();
        return redirect('pengajuan');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($id){
        $pengajuan = PengajuanDIPA::find($id);
        $ls = 0;
        $up = 0;
        $tup = 0;
        foreach ($pengajuan->details as $detail) {
            $ls = ($detail->Jenis == "LS") ? $ls + $detail->Nominal : $ls;
            $up = ($detail->Jenis == "UP") ? $up + $detail->Nominal : $up;
            $tup = ($detail->Jenis == "TUP") ? $tup + $detail->Nominal : $tup;
        }
        return view('pengajuan.detail',[
            'pengajuan' => $pengajuan,
            'ls' => $ls,
            'up' => $up,
            'tup' => $tup
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function finish($id){
        $pengajuan = PengajuanDIPA::find($id);
        $pengajuan->Selesai = 1;
        $pengajuan->update();
        return redirect('pengajuan');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detailAdd($id){
        return view('pengajuan.detailadd',['back' => $id]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function prosesDetailAdd($id, Request $request){
        $kodeMak = $request->input('kodeMak');
        $uraian = $request->input('uraian');
        $nominal = $request->input('nominal');
        $jenis = $request->input('jenis');

        $detail = new DetailPengajuan();
        $detail->KodeMak = $kodeMak;
        $detail->NomerPengajuan = $id;
        $detail->Uraian = $uraian;
        $detail->Nominal = $nominal;
        $detail->Jenis = $jenis;
        $detail->save();
        return redirect('/pengajuan/detail/'.$id);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function detailDelete($id){
        $detail = DetailPengajuan::find($id);
        $np = $detail->NomerPengajuan;
        $detail->delete();
        return redirect('pengajuan/detail/'.$np);
    }

    public function detailEdit($id){
        $detail = DetailPengajuan::find($id);
        return view('pengajuan.detailadd',[
            'detail' => $detail,
            'back' => $detail->NomerPengajuan
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function prosesDetailEdit(Request $request){
        $kodeMak = $request->input('kodeMak');
        $uraian = $request->input('uraian');
        $nominal = $request->input('nominal');
        $jenis = $request->input('jenis');
        $detail = DetailPengajuan::find($kodeMak);
        $detail->Uraian = $uraian;
        $detail->Nominal = $nominal;
        $detail->Jenis = $jenis;
        $detail->update();

        return redirect('/pengajuan/detail/'.$detail->NomerPengajuan);
    }
}