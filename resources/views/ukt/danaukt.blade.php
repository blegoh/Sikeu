@extends('master')
@section('content')
    <h1>Daftar Penerimaan Dana UKT</h1>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Fakultas', 'Dana']
                @foreach($dana as $dn)
                    ,['{{$dn->NamaFakultas}}',{{$dn->dana}}]
                @endforeach
            ]);

            var options = {
                title: 'Dana UKT'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fakultas</th>
                <th>Total Dana</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dana as $dana)
                <tr>
                    <td>{{$dana->NamaFakultas}}</td>
                    <td>{{$dana->dana}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection