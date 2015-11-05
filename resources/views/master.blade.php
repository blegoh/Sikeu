<!DOCTYPE html>
<html>
<head>
    <title>SIKEU</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        });
    </script>
</head>
<body>

<header id="header">
    <div class="row">
        <div class="col-sm-6">
            <div class="col-sm-1">
                <img src="/img/logo%20unej.png">
            </div>
            <div class="col-sm-8">
                <h3>Sistem Informasi Keuangan</h3>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="col-sm-8">
                <label style="font-size: 11px">1324939232323</label>
                <label><strong>Putri Damayanti</strong></label>
            </div>
            <div class="col-sm-2">
                <a href="/auth/logout"><i class="fa fa-sign-out"></i></a>
            </div>
        </div>
    </div>
</header>

<div id="container">
    <div id="sidemenu">
        <ul>
            <li><a href="dashboard.blade.php">Home</a></li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Gaji<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="pembayarangaji.blade.php">Pembayaran Gaji</a></li>
                    <li><a href="">Pembayaran Gaji 13</a></li>
                    <li><a href="">Uang Makan</a></li>
                    <li><a href="">Kekurangan Gaji</a></li>
                    <li><a href="">Gaji Terusan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Pegawai<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="">Pegawai Pensiun dan Cuti</a></li>
                    <li><a href="">Sertifikasi Dosen</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Mahasiswa<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="">Golongan UKT</a></li>
                    <li><a href="">Penurunan UKT</a></li>
                    <li><a href="">Pembayaran SP</a></li>
                    <li><a href="">Ujian Mandiri</a></li>
                    <li><a href="">Wisuda</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Honor<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="pembayarangaji.blade.php">Pembayaran Gaji</a></li>
                    <li><a href="">Pembayaran Gaji 13</a></li>
                    <li><a href="">Uang Makan</a></li>
                    <li><a href="">Kekurangan Gaji</a></li>
                    <li><a href="">Gaji Terusan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Belanja<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="">Perjalanan Dinas</a></li>
                    <li><a href="">Uang Duka</a></li>
                    <li><a href="">Honorarium</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Penunjang<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="">Pembukuan Keuangan</a></li>
                    <li><a href="">SPTB</a></li>
                    <li><a href="">Penerimaan Dana SP</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Surat Penunjang<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="ssp.blade.php">SSP</a></li>
                    <li><a href="">SPTJM</a></li>
                    <li><a href="">SPPR</a></li>
                    <li><a href="">SSP</a></li>
                    <li><a href="">SP2D</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div id="content">
        @yield('content')
    </div>

</div>
</body>
</html>