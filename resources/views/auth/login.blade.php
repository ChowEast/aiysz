@extends('layouts.app')
@section('title', '登录')
@section('content')
        <!DOCTYPE HTML>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

</head>
<body>
<div class="login">

    <div class="login-top">
        <h1>登 录</h1>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-md-6">
                    <input id="email" type="text"  value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-6">

                    <input id="password" type="password" value="password" class="form-control" name="password" requi redvalue="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="forgot">

                <input type="submit" value="确认" >


            </div>
</div>
    <div class="login-bottom">
        <h3>没有账号？ &nbsp;<a href="{{ route('register') }}"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
    </div>
</div>


</body>
</html>

@endsection
