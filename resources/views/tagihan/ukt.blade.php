@extends('master')
@section('user')
{{$user->name}}
@endsection
@section('content')
    @if($tagihans->count() == 0 && $pilihan ==0)
        <h3>Tagihan untuk semester ini belum dibuat</h3>
        <a href="/tagihan/ukt/add" class="btn btn-primary">Buat Tagihan</a>
    @else
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <div class="col-md-12">
            <form class="form-inline" role="form" method="post" action="/filter/tagihan/ukt">
                {!! csrf_field() !!}
                <div class="form-group">
                    <select class="form-control" id="sel1" name="fakultas">
                        <option value="0">Fakultas</option>
                        @foreach($fakultas as $fakultas)
                            <option value="{{$fakultas->FakultasID}}" {{($pilihan == $fakultas->FakultasID)?"selected":""}}>{{$fakultas->NamaFakultas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" id="sel1" name="thn">
                        <option value="0">Tahun Akademik</option>
                        @foreach($thnExist as $thn)
                            <option {{($thn == $thn->ThnAkademik)?"selected" : ""}}>{{$thn->ThnAkademik}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Filter</button>
            </form>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Nominal</th>
                <th>Status Bayar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tagihans as $tagihan)
                <tr>
                    <td>{{$tagihan->NIM}}</td>
                    <td>{{$tagihan->nama->Nama}}</td>
                    <td>{{$tagihan->Nominal}}</td>
                    <td>{{($tagihan->TglBayar == "")?"Belum":"Lunas"}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $tagihans->render() !!}
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Status', 'Jumlah'],
                    ['Sudah Membayar',{{$sudah}}],
                    ['Belum Membayar',{{$belum}}]
                ]);

                var options = {
                    title: 'My Daily Activities'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>

    @endif
@endsection