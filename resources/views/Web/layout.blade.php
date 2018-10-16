<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>weFossa - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Power Cheung"/>
    <!-- public css -->
    <link href="{{ asset('js/app.js') }}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="header">
    <a href="{{ url('/login') }}">登陆</a>
    <a href="{{ url('/register') }}">注册</a>
</div>
@section('container')
    这里是侧边栏
@show
</body>
</html>
