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

class PengajuanController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $pengajuans = PengajuanDIPA::all();
        $bulan = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'Novemeber',
            'Desember'
        ];
        return view('pengajuan.show',[
            'pengajuans' => $pengajuans,
            'bulan' => $bulan
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        $bulan = [
            [1,'Januari'],
            [2,'Februari'],
            [3,'Maret'],
            [4,'April'],
            [5,'Mei'],
            [6,'Juni'],
            [7,'Juli'],
            [8,'Agustus'],
            [9,'September'],
            [10,'Oktober'],
            [11,'November'],
            [12,'Desember'],
        ];
        return view('pengajuan.add',[
            'bulans' => $bulan
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function prosesAdd(Request $request){
        $tgl = Carbon::today();
        $pengajuan = new PengajuanDIPA();
        $pengajuan->NomerPengajuan = $request->input('noPengajuan');
        $pengajuan->Bulan =  $request->input('bulan');
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
        return view('pengajuan.detail',[
            'pengajuan' => $pengajuan
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detailAdd($id){
        return view('pengajuan.detailadd');
    }

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
}