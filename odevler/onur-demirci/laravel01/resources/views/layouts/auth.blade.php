<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themes.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @yield('css')
    <script src="{{asset('assets/js/vendor/modernizr-respond.min.js')}}"></script>
</head>
<body class="login">
<!-- Login Container -->
<div id="login-container">
    <div id="login-logo">
        <a href="{{route('index')}}" data-toggle="tooltip" title="Ana Sayfaya Dön">
            <h1 class="brand">OnurD.Blog</h1>
        </a>
    </div>
    <!-- Login Form -->
    <form id="login-form" action="" method="POST" class="form-horizontal">
        @csrf
        <h2>@yield('form-title')</h2>
        <hr>
        @yield('form-inputs')
        <div class="clearfix">
            <div class="btn-group btn-group-sm pull-right">
                @if(url()->current()=="http://localhost:8000/login")
                    <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip"
                            title="Şifrenizi mi unuttunuz?"><i class="fa fa-lock"></i></button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Giriş Yap</button>
            </div>

            <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip"
                   title="Beni Hatırla"><input type="checkbox" name="remember"><span></span></label>
            @elseif(url()->current()=="http://localhost:8000/register")
                <button type="submit" class="btn btn-success"><i class="fa fa-user"></i> Kayıt Ol</button>
        </div>
    @endif
</div>
</form>

<!-- END Login Form -->
</div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"
        integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="{{asset('assets/js/vendor/jquery-1.11.1.min.js')}}"%3E%3C/script%3E'));</script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    window.onload = function () {
        var loginForm = $('#login-form');
        loginForm.slideDown(450);
    };
</script>
</body>
</html>