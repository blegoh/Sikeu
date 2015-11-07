@extends('master')
@section('content')
    <h1>Detail Pengajuan</h1>
    <h3>Pengajuan nomer {{$pengajuan->NomerPengajuan}}</h3>
    <a href="/pengajuan/detail/{{$pengajuan->NomerPengajuan}}/add" class="btn btn-primary">Tambah Detail</a>
    <br />
    <table class="table table-striped">
        <thead>
        <tr>
            <th rowspan="2">Kode Mak</th>
            <th rowspan="2">Uraian</th>
            <th colspan="3">Pengajuan Dana</th>
        </tr>
        <tr>
            <th>LS</th>
            <th>UP/GUP</th>
            <th>TUP</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pengajuan->details as $detail)
            <tr>
                <td>{{$detail->KodeMak}}</td>
                <td>{{$detail->Uraian}}</td>
                <td>{{($detail->Jenis == 'LS') ? $detail->Nominal : ''}}</td>
                <td>{{($detail->Jenis == 'UP') ? $detail->Nominal : ''}}</td>
                <td>{{($detail->Jenis == 'TUP') ? $detail->Nominal : ''}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection