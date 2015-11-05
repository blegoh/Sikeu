<html>
<head>
    <title>SIKEU</title>
    {!! HTML::style('css/font-awesome.min.css') !!}
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/style2.css') !!}
</head>
<body>


<div id="login-page">
    <div id="content" style="margin-bottom: 110px">
        <div id="wrapper">
            <center>
                <div id="login">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! HTML::image('img/logo%20unej.png') !!}
                    <h2>Sistem Informasi Keuangan</h2>
                    <form action="" method="post">
                        {!! csrf_field() !!}
                        <div class="login">
                            <i class="fa fa-user"></i>
                            <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
                        </div>
                        <div class="login" style="margin-top: 20px">
                            <i class="fa fa-unlock-alt"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <input type="submit" value="Login">
                    </form>
                </div>
            </center>
        </div>
    </div>
</div>
</body>
</html>