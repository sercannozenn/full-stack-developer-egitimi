<!doctype html>
<html lang="tr">
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
    @yield('css')
    <script src="{{asset('assets/js/vendor/modernizr-respond.min.js')}}"></script>
</head>
<!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
<!-- <body class="fixed"> -->
<body>
<!-- Page Container -->
<div id="page-container">
    <!-- Header -->
    <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
    <header class="navbar navbar-inverse">
        <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
            <li class="divider-vertical"></li>
            <li>
                <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
        <a href="{{route('index')}}" class="navbar-brand"><img class="small-logo"
                                                               src="{{asset('assets/img/template/logo.png')}}"
                                                               alt="logo"></a>
        <div id="loading" class="pull-left"><i class="fa fa-certificate fa-spin"></i></div>
        <li class="divider-vertical"></li>
        <ul id="widgets" class="navbar-nav-custom pull-right">
            <!-- User Menu -->
            <li class="divider-vertical"></li>
            <li class="dropdown pull-right dropdown-user">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img
                            src="{{asset('assets/img/template/avatar.png')}}" alt="avatar"> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <!-- Just a button demostrating how loading of widgets could happen, check main.js- - uiDemo() -->
                    <li>
                        <a href="javascript:void(0)" class="loading-on"><i class="fa fa-refresh"></i> Refresh</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <!-- Modal div is at the bottom of the page before including javascript code -->
                        <a href="#modal-user-settings" role="button" data-toggle="modal"><i class="fa fa-user"></i> User
                            Profile</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-wrench"></i> App Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="page_login.html"><i class="fa fa-lock"></i> Log out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- END Header -->

    <!-- Inner Container -->
    <div id="inner-container">
        <!-- Sidebar -->
        <aside id="page-sidebar">
        <?php
           public function handle($request, Closure $next)
            {
                if ($request->route()->named('index')) {

            }

            return $next($request);
}

            ?>
        </aside>
        <!-- END Sidebar -->

        <!-- Page Content -->
        <div id="page-content">
        </div>
        <!-- END Page Content -->

        <!-- Footer -->
        <footer>

        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Inner Container -->
</div>
<!-- END Page Container -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"
        integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="{{asset('assets/js/vendor/jquery-1.11.1.min.js')}}"%3E%3C/script%3E'));</script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
<!-- END Body -->
</html><!-- Body -->

