<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

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

    <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{asset('assets/css/themes.css')}}">
    @yield('css')
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
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
    @include('layouts.navbar')
    <!-- END Header -->

    <!-- Inner Container -->
    <div id="inner-container">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- END Sidebar -->

        <!-- Page Content -->
        <div id="page-content">
{{--            <ul id="nav-info" class="clearfix">--}}
{{--                <li><a href="index.html"><i class="fa fa-home"></i></a></li>--}}
{{--                <li><a href="javascript:void(0)">Pages</a></li>--}}
{{--                <li class="active"><a href="">Blank</a></li>--}}
{{--            </ul>--}}
{{--            <h3 class="page-header page-header-top"><i class="fa fa-circle-o"></i> Start here <small>Create your page</small></h3>--}}
        @yield('content')
        </div>
        <!-- END Page Content -->

        @include('layouts.footer')
    </div>
    <!-- END Inner Container -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, check main.js - scrollToTop() -->
<a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>

<!-- User Modal Settings, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
<div id="modal-user-settings" class="modal">
    <!-- Modal Dialog -->
    <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Profile Settings</h4>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Content -->
            <div class="modal-body">
                <!-- Tab links -->
                <ul id="example-user-tabs" class="nav nav-tabs" data-toggle="tabs">
                    <li class="active"><a href="#example-user-tabs-account"><i class="fa fa-cogs"></i> Account</a></li>
                    <li><a href="#example-user-tabs-profile"><i class="fa fa-user"></i> Profile</a></li>
                </ul>
                <!-- END Tab links -->

                <!-- END Tab Content -->
                <div class="tab-content">
                    <!-- First Tab -->
                    <div class="tab-pane active" id="example-user-tabs-account">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> Password changed!
                        </div>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Username</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">administrator</p>
                                    <span class="help-block">You can't change your username!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-pass">Password</label>
                                <div class="col-md-9">
                                    <input type="password" id="example-user-pass" name="example-user-pass" class="form-control">
                                    <span class="help-block">if you want to change your password enter your current for confirmation!</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-newpass">New Password</label>
                                <div class="col-md-9">
                                    <input type="password" id="example-user-newpass" name="example-user-newpass" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END First Tab -->

                    <!-- Second Tab -->
                    <div class="tab-pane" id="example-user-tabs-profile">
                        <h4 class="page-header-sub">Image</h4>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <img src="img/placeholders/image_dark_120x120.png" alt="image" class="img-responsive push">
                                </div>
                                <div class="col-md-9">
                                    <form action="index.html" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal">
                            <h4 class="page-header-sub">Details</h4>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-firstname">Firstname</label>
                                <div class="col-md-9">
                                    <input type="text" id="example-user-firstname" name="example-user-firstname" class="form-control" value="John">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-lastname">Lastname</label>
                                <div class="col-md-9">
                                    <input type="text" id="example-user-lastname" name="example-user-lastname" class="form-control" value="Doe">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-gender">Gender</label>
                                <div class="col-md-9">
                                    <select id="example-user-gender" name="example-user-gender" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-bio">Bio</label>
                                <div class="col-md-9">
                                    <textarea id="example-user-bio" name="example-user-bio" class="form-control textarea-elastic" rows="3">Bio Information..</textarea>
                                </div>
                            </div>
                            <h5 class="page-header-sub">Social</h5>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-fb">Facebook</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-fb" name="example-user-fb" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-facebook fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-twitter">Twitter</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-twitter" name="example-user-twitter" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-twitter fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-pinterest">Pinterest</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-pinterest" name="example-user-pinterest" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-pinterest fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="example-user-github">Github</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="example-user-github" name="example-user-github" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-github fa-fw"></i></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Second Tab -->
                </div>
                <!-- END Tab Content -->
            </div>
            <!-- END Modal Content -->

            <!-- Modal footer -->
            <div class="modal-footer remove-margin">
                <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button class="btn btn-success"><i class="fa fa-spinner fa-spin"></i> Save changes</button>
            </div>
            <!-- END Modal footer -->
        </div>
        <!-- END Modal Content -->
    </div>
    <!-- END Modal Dialog -->
</div>
<!-- END User Modal Settings -->

<!-- Excanvas for canvas support on IE8 -->
<!--[if lte IE 8]><script src="{{asset('assets/js/helpers/excanvas.min.js')}}"></script><![endif]-->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="{{asset('assets/http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>


<!-- Bootstrap.js -->
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<!-- Jquery plugins and custom javascript code -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('js')
</body>
</html>
