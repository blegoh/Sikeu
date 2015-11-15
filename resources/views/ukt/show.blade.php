@extends('master')
@section('content')

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Fakultas</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($fakultas as $fakultas)
                <tr>
                    <td rowspan="{{$fakultas->prodi->count()}}">{{$fakultas->NamaFakultas}}</td>
                    <?php $n = 1; ?>
                    @foreach($fakultas->prodi as $prodi)
                        <?=($n !== 1)?'<tr>':''?>
                        <td>{{$prodi->NamaProdi}}</td>
                        <td><a href="/ukt/{{$prodi->ProdiID}}" class="btn btn-primary">Detail</a></td>
                        <?=($n !== 1)?'</tr>':''?>
                        <?php $n++;?>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection