<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/themes.css")}}">
    <script src="https://kit.fontawesome.com/ff5bd45ddd.js" crossorigin="anonymous"></script>

    <title>@yield("title")</title>
</head>
<body>
<div id="page-container">
    <header class="navbar navbar-inverse">
        @include('front.navbar');
    </header>
    <div id="inner-container">
        <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
            @include('front.aside');
        </aside>

        <div id="inner-container">
            @yield('content');
        </div>


    </div>
</div>


    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
</body>
</html>
