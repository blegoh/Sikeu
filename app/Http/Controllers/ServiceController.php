<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 12/12/15
 * Time: 6:40
 */

namespace App\Http\Controllers;


use App\Models\Soap;
use App\Soap\InquiryRequest;

class ServiceController extends Controller
{
    public function show(){
        $a = new Soap();
        //return $a->functions();
        $req = new InquiryRequest();
        $req->billKey1 = '132410101052';
        $req->billKey2 = '1';
        $data = [
            'request' => $req
        ];
        return var_dump($a->call('inquiry',$data)->billDetails->BillDetail);
    }
}