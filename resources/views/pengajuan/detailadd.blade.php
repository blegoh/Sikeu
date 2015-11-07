@extends('master')
@section('content')
    <form class="form-horizontal" role="form" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label class="control-label col-sm-2" >Kode Mak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kodeMak" id="kodeMak" placeholder="Kode Mak">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Uraian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Nominal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Nominal">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Jenis</label>
            <div class="col-sm-10">
                <select name="jenis" class="form-control">
                    <option>LS</option>
                    <option>UP</option>
                    <option>TUP</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection