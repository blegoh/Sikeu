@extends('master')
@section('content')
    <a href="/pengajuan/add" class="btn btn-primary" role="button">Tambah Pengajuan</a>
    <br />
    <br />
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Nomer Pengajuan</th>
            <th>Perihal</th>
            <th>TahunAnggaran</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pengajuans as $pengajuan)
            <tr>
                <td>{{$pengajuan->NomerPengajuan}}</td>
                <td>{{$pengajuan->Perihal}}</td>
                <td>{{$pengajuan->TahunAnggaran}}</td>
                <td>
                    <a href="/pengajuan/detail/{{$pengajuan->NomerPengajuan}}" class="btn btn-primary">Detail</a>
                    @if($pengajuan->Selesai == 0)
                        <a href="/pengajuan/finish/{{$pengajuan->NomerPengajuan}}" class="btn btn-success">Selesai</a>
                    @else
                        Menunggu Validasi
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection