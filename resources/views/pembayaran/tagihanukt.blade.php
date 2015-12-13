<html>
<head>

</head>
<body>
<h5>Nim : {{$response->billInfo1}}</h5>
<h5>Nama : {{$response->billInfo2}}</h5>
<h5>tagihan : {{$response->billDetails->BillDetail->billName}}</h5>
<h5>Nominal : {{$response->billDetails->BillDetail->billAmount}}</h5>
<a href="/pembayaran/bayar/1/{{$response->billInfo1}}">Bayar</a>
</body>
</html>