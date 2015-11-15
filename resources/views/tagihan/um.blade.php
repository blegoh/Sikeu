@extends('master')
@section('content')
    <h2>Daftar Pembayar Ujian Mandiri</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>NoHp</th>
            <th>Nominal</th>
            <th>Status Bayar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tagihans as $tagihan)
            <tr>
                <td>{{$tagihan->NoHP}}</td>
                <td>{{$tagihan->Nominal}}</td>
                <td>{{($tagihan->TglBayar == "")?"Belum":"Lunas"}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection