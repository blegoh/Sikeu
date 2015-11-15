<!DOCTYPE html>
<html>
<head>
    <title>SIKEU</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div id="sidemenu">
    <div class="logo">
        <img src="img/logo unej.png">
        <h3>Sistem Informasi Keuangan</h3>
    </div>
    <ul>
        <li><a href="dashboardsidemenu.blade.php">Home</a></li>
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
                <li><a href="">SSP</a></li>
                <li><a href="">SPTJM</a></li>
                <li><a href="">SPPR</a></li>
                <li><a href="">SSP</a></li>
                <li><a href="">SP2D</a></li>
            </ul>
        </li>
    </ul>
</div>

<div id="container">
    <h1>Daftar Pegawai</h1>
    <div class="daftar-pegawai">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li>
                        <a href="" style="margin-top: 0px">
                            <h4>Nama : Helma Daniar</h4>
                            <p>NIP : 132410101076</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4>Helma Daniar</h4>
                            <p>NIP  : 132410101076</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4>Helma Daniar</h4>
                            <p>132410101076</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4>Helma Daniar</h4>
                            <p>132410101076</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4>Helma Daniar</h4>
                            <p>132410101076</p>
                        </a>
                    </li>
                </ul>
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">1</button>
                    <button type="button" class="btn btn-default">2</button>
                    <button type="button" class="btn btn-default">3</button>
                </div>
            </div>
        </div>
    </div>
    <div class="gaji">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li><a href="">SSP</a></li>
                    <li><a href="">SPM</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <p>NIP</p>
                <p>Nama</p>
                <p>Golongan</p>
            </div>
            <div class="col-sm-1">
                <p>:</p>
                <p>:</p>
                <p>:</p>
            </div>
            <div class="col-sm-4">
                <p>192838291838292</p>
                <p>Putri Damayanti</p>
                <p>IVA</p>
            </div>
            <div class="col-sm-10">
                <table>
                    <tr>
                        <th>Uraian</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>Gaji Pokok</td>
                        <td>Rp 3,000,000,-</td>
                    </tr>
                    <tr>
                        <td>Tunjangan Suami/Istri</td>
                        <td>Rp <input type="text"></td>
                    </tr>
                    <tr>
                        <td>Tunjangan Anak</td>
                        <td>Rp <input type="text"></td>
                    </tr>
                    <tr>
                        <td>Uang Makan</td>
                        <td>Rp <input type="text"></td>
                    </tr>
                    <tr>
                        <td>Uang Lembur</td>
                        <td>Rp <input type="text"></td>
                    </tr>
                    <tr>
                        <td>Potongan</td>
                        <td>Rp <input type="text"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>