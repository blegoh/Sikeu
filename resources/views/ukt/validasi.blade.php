@extends('master')
@section('content')

    <div class="row">
        <div class="col col-lg-12">
            @foreach($jalurs as $jalur)
                <a href="{{($jalur->JalurID == $jalurPilihan)? '#': '/ukt/validasi/'.$jalur->JalurID }}"
                   class="btn btn-{{($jalur->JalurID == $jalurPilihan)? 'default': 'primary' }}">{{$jalur->NamaJalur}}</a>
            @endforeach
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th rowspan="2">Fakultas</th>
            <th rowspan="2">Program Studi</th>
            <th colspan="6">Golongan</th>
        </tr>
        <tr>
            @for($i=1;$i<7;$i++)
                <th>{{$i}}</th>
            @endfor
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
                    <?php
                        $ukts = $prodi->ukts()->where('JalurID',$jalurPilihan)->where('TahunAkademik','20152016')->get();
                    ?>
                    @if($ukts->count()>0)
                        @foreach($ukts as $ukt)
                            <td>{{$ukt->Nominal or ''}}</td>
                        @endforeach
                    @else
                        @for($i=0;$i<6;$i++)
                            <td></td>
                        @endfor
                    @endif
                    <td>
                        @if($ukts->count()>0)
                            @if($ukts[0]->IsValidated == 0)
                                <a href="/ukt/validasi/{{$prodi->ProdiID}}/1" class="btn btn-primary">Validasi </a>
                            @else
                                Tervalidasi
                            @endif
                        @else
                            Menunggu
                        @endif </td>
                    <?=($n !== 1)?'</tr>':''?>
                    <?php $n++;?>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection