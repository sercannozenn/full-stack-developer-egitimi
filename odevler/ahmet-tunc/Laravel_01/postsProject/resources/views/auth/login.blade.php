<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>uAdmin - Professional, Responsive and Flat Admin Template</title>

    <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1">

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

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Related styles of various javascript plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="{{asset('assets/js/vendor/modernizr-respond.min.js')}}"></script>
</head>
<body class="login">
<!-- Login Container -->
<div id="login-container">
    <div id="login-logo">
        <a href="">
            <img src="{{asset('assets/img/template/uadmin_logo.png')}}" alt="logo">
        </a>
    </div>

    <!-- Login Buttons -->
    <div id="login-buttons">
        <h5 class="page-header-sub">Giriş İşlemleri</h5>
    </div>
    <!-- END Login Buttons -->

    <!-- Login Form -->
    <form id="loginForm" action="{{route('login')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <input type="text" id="login-email" name="email" placeholder="Email.." class="form-control" required>
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <input type="password" id="login-password" name="password" placeholder="Parola.." class="form-control" required>
                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="form-group">
                <div class="col-xs-12">
                <button type="submit" class="btn btn-success btn-block"><i class="fa fa-arrow-right"></i> Giriş Yap</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <a href="{{route('register')}}">Henüz bir hesabın yok mu? Kayıt Ol</a>
            </div>
        </div>
    </form>

    <!-- END Login Form -->
</div>
<!-- END Login Container -->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js -->
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<!-- Jquery plugins and custom javascript code -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
