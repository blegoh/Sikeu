@extends('master')
@section('content')
    <form action="" class="form-horizontal" role="form" method="post">
        {!! csrf_field() !!}
        @for ($i = 0; $i < 6; $i++)
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Golongan {{$i+1}}</label>
                <div class="col-sm-5">
                    <input type="text" name="gol[]" class="form-control" value="{{old("gol.$i")}}">
                    <?php
                        if($errors->first("gol.$i")){
                            echo "<div class=\"alert alert-danger\">".$errors->first("gol.$i")."</div>";
                        }
                    ?>
                </div>
            </div>
        @endfor
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </div>
    </form>
@endsection