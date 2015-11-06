@extends('master')
@section('content')
    @if($tagihans->count() == 0)
        Tagihan untuk semester ini belum dibuat
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Nominal</th>
                <th>Status Bayar</th>
            </tr>
            </thead>
            <tbody>
        @foreach($tagihans as $tagihan)
            <tr>
                <td>{{$tagihan->NIM}}</td>
                <td>{{$tagihan->nama->Nama}}</td>
                <td>{{$tagihan->Nominal}}</td>
                <td>{{($tagihan->TglBayar == "")?"Belum":"Lunas"}}</td>
            </tr>
        @endforeach
            </tbody>
        </table>
    @endif

@endsection