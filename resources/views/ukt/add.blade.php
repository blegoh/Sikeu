@extends('master')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" role="form" method="post">
        {!! csrf_field() !!}
        @for ($i = 0; $i < 6; $i++)
        <div class="form-group">
            <label for="gol1">Golongan {{$i+1}}</label>
            <input type="text" name="gol[]" value="{{old("gol.$i")}}">
        </div>
        @endfor
        <input type="submit" class="btn btn-primary" value="Simpan">
    </form>
@endsection