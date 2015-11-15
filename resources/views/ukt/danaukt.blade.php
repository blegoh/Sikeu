@extends('master')
@yield('content')
    <h1>Daftar Penerimaan Dana UKT</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fakultas</th>
                <th>Total Dana</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dana as $dana)
                <tr>
                    <td>{{$dana->NamaFakultas}}</td>
                    <td>{{$dana->dana}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection