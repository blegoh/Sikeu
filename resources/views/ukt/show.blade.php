@extends('master')
@section('content')
    <form action="" method="post">
        {!! csrf_field() !!}
        <select name="jalur"  class="form-control">
            @foreach($jalurs as $jalur)
                <option value="{{$jalur->JalurID}}">{{$jalur->NamaJalur}}</option>
            @endforeach
        </select>
        <br />
        <button class="btn btn-primary">Tampilkan UKT</button>
    </form>
    @if(isset($isShow))
        <br />
        @if($ukts->count() == 0)
            <h2>Belum Ada UKT untuk tahun akademik tahun ini</h2>
            <a href="/ukt/add/{{$jalurSelected->JalurID}}" class="btn btn-primary">Isi UKT</a>
        @else
            <table class="table">
                @foreach($ukts as $ukt)
                    <tr>
                        <td>{{$ukt->golongan->NamaGolongan}}</td>
                        <td>{{$ukt->Nominal}}</td>
                    </tr>
                @endforeach
            </table>
        @endif

    @endif
@endsection