@extends('master')
@section('content')
    <a href="/permohonan/add" class="btn btn-primary" role="button">Tambah Permohonan</a>
    <br />
    <br />
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Nomer Permohonan</th>
            <th>TahunAnggaran</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permohonans as $permohonan)
            <tr>
                <td>{{$permohonan->Nomerpermohonan}}</td>
                <td>{{$permohonan->TahunAnggaran}}</td>
                <td>
                    <a href="/permohonan/detail/{{$permohonan->Nomerpermohonan}}" class="btn btn-primary">Detail</a>
                    @if($permohonan->Selesai == 0)
                        <a href="/permohonan/finish/{{$permohonan->Nomerpermohonan}}" class="btn btn-success">Selesai</a>
                    @else
                        Menunggu Validasi
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection