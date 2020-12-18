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

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    @yield('css')
</head>
<body>

@include('front.navbar')

<div class="container min-vh-100">
    @yield('content')
</div>

<footer class="container-fluid bg-primary">
    <p class="text-center text-white" style="margin-bottom:0 ">
        &copy; {{ date('Y') }} Tüm hakları saklıdır.
    </p>
</footer>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
@yield('js')
</body>
</html>
