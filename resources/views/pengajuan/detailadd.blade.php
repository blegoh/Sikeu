@extends('master')
@section('content')
    <form class="form-horizontal" role="form" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label class="control-label col-sm-2" >Kode Mak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kodeMak" id="kodeMak" placeholder="Kode Mak"
                    value="{{isset($detail)?$detail->KodeMak : ''}}"
                    {{isset($detail)?'readonly' : ''}}
                >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Uraian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian"
                   value="{{isset($detail)?$detail->Uraian : ''}}"
                >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Nominal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Nominal"
                       value="{{isset($detail)?$detail->Nominal : ''}}"
                >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Jenis</label>
            <div class="col-sm-10">
                <select name="jenis" class="form-control">
                    <option {{(isset($detail) && $detail->Jenis == 'LS')?'selected':''}}>LS</option>
                    <option {{(isset($detail) && $detail->Jenis == 'UP')?'selected':''}}>UP</option>
                    <option {{(isset($detail) && $detail->Jenis == 'TUP')?'selected':''}}>TUP</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="/pengajuan/detail/{{$back}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@endsection