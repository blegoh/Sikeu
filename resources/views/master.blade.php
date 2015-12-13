<!DOCTYPE html>
<html>
<head>
    <title>SIKEU</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
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
                <label style="font-size: 11px">Welcome</label>
                <label><strong>@yield('user')</strong></label>
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
                <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Tagihan<i class="fa fa-caret-right"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="/tagihan/ukt">UKT</a></li>
                    <li><a href="/tagihan/wisuda">Wisuda</a></li>
                    <li><a href="/tagihan/sp">SP</a></li>
                    <li><a href="/tagihan/um">UM</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div id="content">
        @yield('content')
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#content").hide();
            $("#content").fadeIn('slow');
        });
    </script>
</div>
</body>
</html>