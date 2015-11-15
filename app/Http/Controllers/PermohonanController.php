<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/11/15
 * Time: 10:38
 */

namespace App\Http\Controllers;


use App\Models\PermohonanBelanja;

class PermohonanController extends Controller
{
    public function show(){
        $permohonans = PermohonanBelanja::all();
        return view('permohonan.show',[
            'permohonans' => $permohonans
        ]);
    }
}