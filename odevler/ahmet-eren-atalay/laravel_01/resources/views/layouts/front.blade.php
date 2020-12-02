<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon57.png')}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon72.png')}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon76.png')}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon114.png')}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon120.png')}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon144.png')}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon152.png')}}" sizes="152x152">
    <!-- END Icons -->
    <script src="https://kit.fontawesome.com/ff5bd45ddd.js" crossorigin="anonymous"></script>
    @yield('css')
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/themes.css")}}">
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

        <div/>

        <footer class="container-fluid bg-dark ml-5">
            <p class="text-center text-white">
                &copy; {{@date("Y")}} Tüm Hakları Saklıdır.
            </p>
        </footer>

    </div>


    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/plugins.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
@yield('js')


</body>
</html>
