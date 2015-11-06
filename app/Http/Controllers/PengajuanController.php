<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/11/15
 * Time: 21:29
 */

namespace App\Http\Controllers;


class PengajuanController extends Controller
{
    public function show(){
        return view('pengajuan.show');
    }

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
}