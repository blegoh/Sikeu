@extends('master')
@section('content')
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nomer">No Pengajuan :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="noPengajuan" placeholder="Nomor Pengajuan">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Bulan:</label>
            <div class="col-sm-10">
                <select class="form-control" name="bulan">
                    @foreach($bulans as $bulan)
                        <option value="{{$bulan[0]}}">{{$bulan[1]}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection