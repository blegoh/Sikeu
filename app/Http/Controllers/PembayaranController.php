<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 12/12/15
 * Time: 7:54
 */

namespace App\Http\Controllers;


use App\Models\Soap;
use App\Soap\InquiryRequest;
use App\Soap\PaymentRequest;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        return view('pembayaran.index');
    }

    public function ukt(){
        return view('pembayaran.ukt');
    }

    public function showTagihanUkt(Request $request){
        $a = new Soap();
        $req = new InquiryRequest();
        $req->billKey1 = $request->input('nim');
        $req->billKey2 = '1';
        $data = [
            'request' => $req
        ];
        $response = $a->call('inquiry',$data);
        return view('pembayaran.tagihanukt',[
            'response' => $response
        ]);
    }

    public function bayar($jenis,$id){
        $a = new Soap();
        $req = new PaymentRequest();
        $req->billKey1 = $id;
        $req->billKey2 = $jenis;
        $data = [
            'request' => $req
        ];
        $response = $a->call('payment',$data);
        //return var_dump($response);
        return redirect('/pembayaran');
    }
}