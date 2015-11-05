@extends('master')
@section('content')
    <form action="" method="post">
        {!! csrf_field() !!}
        <select name="jalur">
            @foreach($jalurs as $jalur)
                <option value="{{$jalur->JalurID}}">{{$jalur->NamaJalur}}</option>
            @endforeach
        </select>
        <button>Tampilkan UKT</button>
    </form>
    @if(isset($isShow))
        Ukt untuk {{$jalurSelected->NamaJalur}}
        <br />
        @if($ukts->count() == 0)
            Belum Ada UKT untuk tahu akademik tahun ini
            <a href="/ukt/add/{{$jalurSelected->JalurID}}">Isi UKT</a>
        @else
            @foreach($ukts as $ukt)
                {{$ukt->golongan->NamaGolongan}}
                {{$ukt->Nominal}}
                <br />
            @endforeach
        @endif

    @endif
@endsection