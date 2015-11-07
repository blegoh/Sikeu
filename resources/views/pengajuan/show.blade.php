@extends('master')
@section('content')
    <a href="/pengajuan/add" class="btn btn-primary" role="button">Tambah Pengajuan</a>
    <br />
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nomer Pengajuan</th>
            <th>Bulan</th>
            <th>TahunAnggaran</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pengajuans as $pengajuan)
            <tr>
                <td>{{$pengajuan->NomerPengajuan}}</td>
                <td>{{$bulan[$pengajuan->Bulan - 1]}}</td>
                <td>{{$pengajuan->TahunAnggaran}}</td>
                <td><a href="/pengajuan/detail/{{$pengajuan->NomerPengajuan}}" class="btn btn-primary">Detail</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection