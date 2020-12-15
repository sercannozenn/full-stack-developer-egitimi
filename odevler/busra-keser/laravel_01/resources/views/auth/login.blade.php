{{--@extends('layouts.front')--}}
{{--@section('title')--}}
{{--    Giriş--}}
{{--@endsection--}}
{{--@section('css')--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    <!-- Login Container -->--}}
{{--    <div id="login-container">--}}
{{--        <div id="login-logo">--}}
{{--            <a href="">--}}
{{--                <img src="{{ asset('assets/img/template/uadmin_logo.png') }}" alt="logo">--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <!-- Login Buttons -->--}}
{{--        <div id="login-buttons">--}}
{{--            <h5 class="page-header-sub">Login with..</h5>--}}
{{--            <button id="login-btn-facebook" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</button>--}}
{{--            <button id="login-btn-twitter" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</button>--}}
{{--            <button id="login-btn-email" class="btn btn-default">or Email <i class="fa fa-envelope"></i></button>--}}
{{--        </div>--}}
{{--        <!-- END Login Buttons -->--}}

{{--        <!-- Login Form -->--}}
{{--        <form id="login-form" action="" method="post" class="form-horizontal">--}}
{{--            <div class="form-group">--}}
{{--                <a href="javascript:void(0)" class="login-back"><i class="fa fa-arrow-left"></i></a>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" id="login-email" name="login-email" placeholder="Email.." class="form-control">--}}
{{--                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="password" id="login-password" name="login-password" placeholder="Password.." class="form-control">--}}
{{--                        <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="clearfix">--}}
{{--                <div class="btn-group btn-group-sm pull-right">--}}
{{--                    <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="fa fa-lock"></i></button>--}}
{{--                    <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Login</button>--}}
{{--                </div>--}}
{{--                <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip" title="Remember me"><input type="checkbox"><span></span></label>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <!-- END Login Form -->--}}
{{--    </div>--}}
{{--    <!-- END Login Container -->--}}


{{--    </body>--}}
{{--@endsection--}}
{{--@section('js')--}}
{{--    <script>--}}
{{--        $(function () {--}}
{{--            var loginButtons = $('#login-buttons');--}}
{{--            var loginForm = $('#login-form');--}}

{{--            // Reveal login form--}}
{{--            $('#login-btn-email').click(function () {--}}
{{--                loginButtons.slideUp(600);--}}
{{--                loginForm.slideDown(450);--}}
{{--            });--}}

{{--            // Hide login form--}}
{{--            $('.login-back').click(function () {--}}
{{--                loginForm.slideUp(450);--}}
{{--                loginButtons.slideDown(600);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
{{--    <!DOCTYPE html>--}}
{{--<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->--}}
{{--<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}

{{--    <title>uAdmin - Professional, Responsive and Flat Admin Template</title>--}}

{{--    <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">--}}
{{--    <meta name="author" content="pixelcave">--}}
{{--    <meta name="robots" content="noindex, nofollow">--}}

{{--    <meta name="viewport" content="width=device-width,initial-scale=1">--}}

{{--    <!-- Icons -->--}}
{{--    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->--}}
{{--    <link rel="shortcut icon" href="{{'assets/img/favicon.ico'}}">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon57.png'}}" sizes="57x57">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon72.png'}}" sizes="72x72">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon76.png'}}" sizes="76x76">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon114.png'}}" sizes="114x114">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon120.png'}}" sizes="120x120">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon144.png'}}" sizes="144x144">--}}
{{--    <link rel="apple-touch-icon" href="{{'assets/img/icon152.png'}}" sizes="152x152">--}}
{{--    <!-- END Icons -->--}}

{{--    <!-- Stylesheets -->--}}
{{--    <!-- Bootstrap is included in its original form, unaltered -->--}}
{{--    <link rel="stylesheet" href="{{'assets/css/bootstrap.css'}}">--}}

{{--    <!-- Related styles of various javascript plugins -->--}}
{{--    <link rel="stylesheet" href="{{'assets/css/plugins.css'}}">--}}

{{--    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->--}}
{{--    <link rel="stylesheet" href="{{'assets/css/main.css'}}">--}}
{{--    <!-- END Stylesheets -->--}}

{{--    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->--}}
{{--    <script src="{{'assets/js/vendor/modernizr-respond.min.js'}}"></script>--}}
{{--</head>--}}
{{--<body class="login">--}}
{{--<!-- Login Container -->--}}
{{--<div id="login-container">--}}
{{--    <div id="login-logo">--}}
{{--        <a href="">--}}
{{--            <img src="{{'assets/img/template/uadmin_logo.png'}}" alt="logo">--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <!-- Login Buttons -->--}}
{{--    <div id="login-buttons">--}}
{{--        <h5 class="page-header-sub">Login with..</h5>--}}
{{--        <button id="login-btn-facebook" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</button>--}}
{{--        <button id="login-btn-twitter" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</button>--}}
{{--        <button id="login-btn-email" class="btn btn-default">or Email <i class="fa fa-envelope"></i></button>--}}
{{--    </div>--}}
{{--    <!-- END Login Buttons -->--}}

{{--    <!-- Login Form -->--}}
{{--    <form id="login-form" action="index.html" method="post" class="form-horizontal">--}}
{{--        <div class="form-group">--}}
{{--            <a href="javascript:void(0)" class="login-back"><i class="fa fa-arrow-left"></i></a>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="col-xs-12">--}}
{{--                <div class="input-group">--}}
{{--                    <input type="text" id="login-email" name="login-email" placeholder="Email.." class="form-control">--}}
{{--                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="col-xs-12">--}}
{{--                <div class="input-group">--}}
{{--                    <input type="password" id="login-password" name="login-password" placeholder="Password.." class="form-control">--}}
{{--                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="clearfix">--}}
{{--            <div class="btn-group btn-group-sm pull-right">--}}
{{--                <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="fa fa-lock"></i></button>--}}
{{--                <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Login</button>--}}
{{--            </div>--}}
{{--            <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip" title="Remember me"><input type="checkbox"><span></span></label>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    <!-- END Login Form -->--}}
{{--</div>--}}
{{--<!-- END Login Container -->--}}

{{--<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->--}}
{{--<script src=http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
{{--<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>--}}

{{--<!-- Bootstrap.js -->--}}
{{--<script src="{{'assets/js/vendor/bootstrap.min.js'}}"></script>--}}

{{--<!-- Jquery plugins and custom javascript code -->--}}
{{--<script src="{{'assets/js/plugins.js'}}"></script>--}}
{{--<script src="{{'assets/js/main.js'}}"></script>--}}

{{--<!-- Javascript code only for this page -->--}}
{{--<script>--}}
{{--    $(function () {--}}
{{--        var loginButtons = $('#login-buttons');--}}
{{--        var loginForm = $('#login-form');--}}

{{--        // Reveal login form--}}
{{--        $('#login-btn-email').click(function () {--}}
{{--            loginButtons.slideUp(600);--}}
{{--            loginForm.slideDown(450);--}}
{{--        });--}}

{{--        // Hide login form--}}
{{--        $('.login-back').click(function () {--}}
{{--            loginForm.slideUp(450);--}}
{{--            loginButtons.slideDown(600);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/themes.css")}}">

    <script src="https://kit.fontawesome.com/ff5bd45ddd.js" crossorigin="anonymous"></script>
    <script src="{{asset("assets/js/vendor/modernizr-respond.min.js")}}"></script>
</head>
<body class="login">

<!-- Login Container -->
<div id="login-container">

    <div id="login-logo">
        <a href="">
            <img src="{{asset("assets/img/template/uadmin_logo.png")}}" alt="logo">
        </a>
    </div>

    <!-- Login Buttons -->
    <div id="login-buttons">
        <h5 class="page-header-sub">Login with..</h5>
        <button id="login-btn-facebook" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</button>
        <button id="login-btn-twitter" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</button>
        <button id="login-btn-email" class="btn btn-default">or Email <i class="fa fa-envelope"></i></button>
    </div>
    <!-- END Login Buttons -->

    <!-- Login Form -->
    <form id="login-form" action="{{route('login')}}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
            <a href="javascript:void(0)" class="login-back"><i class="fa fa-arrow-left"></i></a>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <input type="text" id="login-email" name="email" placeholder="Email.." class="form-control">
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <input type="password" id="login-password" name="password" placeholder="Password.." class="form-control">
                    <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="btn-group btn-group-sm pull-right">
                <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="fa fa-lock"></i></button>
                <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Login</button>
            </div>
            <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip" title="Remember me"><input type="checkbox"><span></span></label>
        </div>
    </form>
    <!-- END Login Form -->
</div>
<!-- END Login Container -->


<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/plugins.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
<!-- Javascript code only for this page -->
<script>
    $(function () {
        var loginButtons = $('#login-buttons');
        var loginForm = $('#login-form');
        // Reveal login form
        $('#login-btn-email').click(function () {
            loginButtons.slideUp(600);
            loginForm.slideDown(450);
        });
        // Hide login form
        $('.login-back').click(function () {
            loginForm.slideUp(450);
            loginButtons.slideDown(600);
        });
    });
</script>
</body>
