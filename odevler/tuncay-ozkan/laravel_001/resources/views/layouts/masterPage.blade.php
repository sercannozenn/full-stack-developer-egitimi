<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
@include('layouts.include.head')

<!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
<!-- <body class="fixed"> -->
<body>
<!-- Page Container -->
<div id="page-container">
    <!-- Header -->
    <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
    <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
    @include('layouts.include.header')
    <!-- END Header -->

    <!-- Inner Container -->
    <div id="inner-container">
        <!-- Sidebar -->
        @include('layouts.include.sidebar')
        <!-- END Sidebar -->


        <!-- Page Content -->
        <div id="page-content">
            <!-- Navigation info -->
            <ul id="nav-info" class="clearfix">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li class="active"><a href="">@yield('pagetitle')</a></li>
            </ul>
            <!-- END Navigation info -->
        @yield('content')
        </div>
        <!-- END Page Content -->

        <!-- Footer -->
      @include('layouts.include.footer')
        <!-- END Footer -->
    </div>
    <!-- END Inner Container -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, check main.js - scrollToTop() -->
<a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>

<!-- User Modal Settings, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
@include('layouts.include.modal')
<!-- END User Modal Settings -->

@include('layouts.include.scripts')
<!-- alert test -->

@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])



