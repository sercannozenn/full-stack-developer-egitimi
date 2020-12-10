<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/backEnd/images/favicon.png')}}">
    <title>@yield('title')</title>
{{--    <link href="{{ asset('assets/backEnd/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('assets/backEnd/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/backEnd/dist/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/backEnd/dist/css/pages/dashboard1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/sweet-alert/sweetalert2.min.css')}}">
    @yield('css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper" id="main-wrapper">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Yazılım Eğitim Admin Panel</p>
        </div>
    </div>
    <header class="topbar">

        <nav>
            <div class="nav-wrapper">
                <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="{{asset('assets/backEnd/images/logo-light-icon.png')}}">
                            <img class="dark-logo" src="{{asset('assets/backEnd/images/logo-icon.png')}}">
                        </span>
                    <span class="text">
                            <img class="light-logo" src="{{asset('assets/backEnd/images/logo-light-text.png')}}">
                            <img class="dark-logo" src="{{asset('assets/backEnd/images/logo-text.png')}}">
                        </span>
                </a>
                <ul class="left">
                    <li class="hide-on-med-and-down">
                        <a href="javascript: void(0);" class="nav-toggle">
                            <span class="bars bar1"></span>
                            <span class="bars bar2"></span>
                            <span class="bars bar3"></span>
                        </a>
                    </li>
                    <li class="hide-on-large-only">
                        <a href="javascript: void(0);" class="sidebar-toggle">
                            <span class="bars bar1"></span>
                            <span class="bars bar2"></span>
                            <span class="bars bar3"></span>
                        </a>
                    </li>
                </ul>
                <ul class="right">
                    <li>
                        <a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown">
                            <img src="{{asset('assets/backEnd/images/users/2.jpg')}}" alt="user"
                                 class="circle profile-pic">
                        </a>
                        <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <img src="{{asset('assets/backEnd/images/users/2.jpg')}}" alt="user">
                                    </div>
                                    <div class="u-text">
                                        <h4>{{ auth()->user()->name }}</h4>
                                        <p>{{ auth()->user()->email }}</p>
                                        <a href="{{route('admin.viewProfile')}}"
                                           class="waves-effect waves-light btn-small red white-text">
                                            Profilim
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{route('logout')}}">
                                    <i class="material-icons">power_settings_new</i>
                                    Çıkış Yap
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

    </header>

    <aside class="left-sidebar">
        <ul id="slide-out" class="sidenav">
            <li>
                @include('admin.navbar')
            </li>
        </ul>
    </aside>
    <div class="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer class="center-align m-b-30">Tüm hakları saklıdır. &copy; {{ date('Y') }}  </footer>
    </div>
    <a href="#" data-target="right-slide-out"
       class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i
            class="material-icons">settings</i></a>
    <aside class="right-sidebar">
        <ul id="right-slide-out" class="sidenav right-sidenav p-t-10">
            <li>
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s4"><a href="#settings" class="active"><span
                                        class="material-icons">build</span></a></li>
                        </ul>
                    </div>
                    <div id="settings" class="col s12">
                        <div class="m-t-10 p-10 b-b">
                            <h6 class="font-medium">Layout Settings</h6>
                            <ul class="m-t-15">
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="theme-view" id="theme-view"/>
                                        <span>Dark Theme</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" class="nav-toggle" name="collapssidebar"
                                               id="collapssidebar"/>
                                        <span>Collapse Sidebar</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="sidebar-position" id="sidebar-position"/>
                                        <span>Fixed Sidebar</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="header-position" id="header-position"/>
                                        <span>Fixed Header</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="boxed-layout" id="boxed-layout"/>
                                        <span>Boxed Layout</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="p-10 b-b">
                            <h6 class="font-medium">Logo Backgrounds</h6>
                            <ul class="m-t-15 theme-color">
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-logobg="skin1"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-logobg="skin2"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-logobg="skin3"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-logobg="skin4"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-logobg="skin5"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-logobg="skin6"></a></li>
                            </ul>
                        </div>
                        <div class="p-10 b-b">
                            <h6 class="font-medium">Navbar Backgrounds</h6>
                            <ul class="m-t-15 theme-color">
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-navbarbg="skin1"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-navbarbg="skin2"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-navbarbg="skin3"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-navbarbg="skin4"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-navbarbg="skin5"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-navbarbg="skin6"></a></li>
                            </ul>
                        </div>
                        <div class="p-10 b-b">
                            <h6 class="font-medium">Sidebar Backgrounds</h6>
                            <ul class="m-t-15 theme-color">
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-sidebarbg="skin1"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-sidebarbg="skin2"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-sidebarbg="skin3"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-sidebarbg="skin4"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-sidebarbg="skin5"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link"
                                                          data-sidebarbg="skin6"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </aside>
    <div class="chat-windows"></div>
</div>

<script src="{{asset('assets/backEnd/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{asset('assets/backEnd/dist/js/materialize.min.js') }}"></script>
<script src="{{asset('assets/backEnd/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>

<script src="{{asset('assets/backEnd/dist/js/app.js') }}"></script>
<script src="{{asset('assets/backEnd/dist/js/app.init.js') }}"></script>
<script src="{{asset('assets/backEnd/dist/js/app-style-switcher.js') }}"></script>

<script src="{{asset('assets/backEnd/dist/js/custom.min.js') }}"></script>

{{--<script src="{{asset('assets/backEnd/libs/chartist/dist/chartist.min.js') }}"></script>--}}
{{--<script src="{{asset('assets/backEnd/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>--}}
<script src="{{asset('assets/backEnd/extra-libs/sparkline/sparkline.js') }}"></script>
<script src="{{asset('assets/backEnd/dist/js/pages/dashboards/dashboard1.js') }}"></script>
<script src="{{ asset('assets/sweet-alert/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')
<script>
    @php
        if ($errors->any())
       {
           $swalText = '';
           foreach ($errors->all() as $error)
           {
               $swalText .= $error . '<br>';
           }
       }
    @endphp

    @if($errors->any())
    Swal.fire({
        icon: 'error',
        title: 'Hata',
        html: '{!!  $swalText !!}',
    });
    @endif
</script>
@yield('js')
</body>
</html>
