@extends('master')
@section('content')
    <form action="" role="form" method="post">
        {!! csrf_field() !!}
        @for ($i = 0; $i < 6; $i++)
        <div class="form-group">
            <label for="gol1">Golongan {{$i+1}}</label>
            <input type="text" name="gol[]">
        </div>
        @endfor
        <input type="submit" class="btn btn-default" value="Submit">
    </form>
@endsection