<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/11/15
 * Time: 6:59
 */

namespace App\Models;

use DB;

class DanaUKT
{
    public static function getDana(){
        return DB::table('Fakultas')
            ->join('Prodi', 'Fakultas.FakultasID', '=', 'Prodi.FakultasID')
            ->leftjoin('Mahasiswa', 'Prodi.ProdiID', '=', 'Mahasiswa.ProdiID')
            ->leftjoin(DB::raw('(SELECT * FROM Tagihan t WHERE t.JenisTagihanID = 1 AND t.ThnAkademik = \'20152016\' AND t.SmtAkademik = \'1\' AND t.TglBayar IS NOT NULL ) t'), function($join){
                $join->on('Mahasiswa.NIM', '=', 't.NIM');
            })
            ->select(DB::raw('Fakultas.NamaFakultas, IFNULL(SUM(t.Nominal),0) dana'))
            ->groupBy('Fakultas.NamaFakultas')
            ->get();
    }

    public static function validasi($prodiID, $jalurMasuk){
        DB::table('UKT')
            ->where('ProdiID', $prodiID)
            ->where('JalurID', $jalurMasuk)
            ->update(['isValidated' => 1]);
    }
}