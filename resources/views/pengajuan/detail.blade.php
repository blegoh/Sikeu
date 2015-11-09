@extends('master')
@section('content')
    <h1>Detail Pengajuan</h1>
    <h3>Pengajuan nomer {{$pengajuan->NomerPengajuan}}</h3>
    @if($pengajuan->Selesai == 0)
        <a href="/pengajuan/detail/{{$pengajuan->NomerPengajuan}}/add" class="btn btn-primary">Tambah Detail</a>
        <br />
        <br />
    @endif
    <h4>Pengajuan Dana UP/GUP {{$up}}</h4>
    <h4>Pengajuan Dana TUP {{$tup}}</h4>
    <h4>Pengajuan Dana LS {{$ls}}</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th rowspan="2">Kode Mak</th>
            <th rowspan="2">Uraian</th>
            <th colspan="3">Pengajuan Dana</th>
            @if($pengajuan->Selesai == 0)
                <th rowspan="2">Action</th>
            @endif
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
                @if($pengajuan->Selesai == 0)
                    <td>
                        <a href="/pengajuan/detail/{{$detail->KodeMak}}/edit">Edit</a>
                        <a href="/pengajuan/detail/{{$detail->KodeMak}}/delete">Hapus</a>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    <br />
    <a href="/pengajuan" class="btn btn-primary">Back</a>
@endsection