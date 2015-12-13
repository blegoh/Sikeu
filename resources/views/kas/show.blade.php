@extends('master')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Tanggal</th>
            <th>No</th>
            <th>Uraian</th>
            <th>Penerimaan</th>
            <th>Pengeluaran</th>
            <th>Saldo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        ?>
        @foreach($kas as $kas)
            <tr>
                <td>{{$kas->tanggal}}</td>
                <td>{{$no++}}</td>
                <td>{{$kas->uraian}}</td>
                <td>{{$kas->nominal}}</td>
                <td>{{$kas->nominal}}</td>
                <td>{{$kas->nominal}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection