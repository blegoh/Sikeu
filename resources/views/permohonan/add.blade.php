@extends('master')
@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" role="form" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label class="control-label col-sm-2" for="nomer">No Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="noPermohonan" id="noPermohonan" placeholder="Nomor Permohonan">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection