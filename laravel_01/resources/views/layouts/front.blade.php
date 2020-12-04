<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/themes.css")}}">
    @yield('css')
    <script src="https://kit.fontawesome.com/ff5bd45ddd.js" crossorigin="anonymous"></script>
</head>
<body>

@include('front.navbar')
<div class="container">
@yield('content')
</div>

<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/plugins.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
@yield('js')
</body>
</html>
