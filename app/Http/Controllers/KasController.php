<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/12/15
 * Time: 21:05
 */

namespace App\Http\Controllers;


use App\Models\Kas;
use App\Models\PengajuanSarpras;

class KasController extends Controller
{
    public function show(){
        $kas = new Kas();
        //return $kas->getKas();
        return view('kas.show',[
            'kas' => $kas->getKas()
        ]);
    }
}