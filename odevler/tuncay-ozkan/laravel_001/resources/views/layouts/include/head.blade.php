<head>
    <meta charset="utf-8">

    <title>Full Stack | @yield('pagetitle')</title>

    <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('img/icon57.png')}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{asset('img/icon72.png')}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{asset('img/icon76.png')}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{asset('img/icon114.png')}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{asset('img/icon120.png')}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{asset('img/icon144.png')}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{asset('img/icon152.png')}}" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Related styles of various javascript plugins -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{asset('css/themes.css')}}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="{{asset('js/vendor/modernizr-respond.min.js')}}"></script>
    @toastr_css
    @yield('css')
</head>
