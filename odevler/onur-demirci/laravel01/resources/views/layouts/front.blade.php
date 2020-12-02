<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
@include('layouts.head')

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
        <!-- Mobile Navigation, Shows up  on smaller screens -->
        <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
            <li class="divider-vertical"></li>
            <li>
                <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
        <!-- END Mobile Navigation -->

        <!-- Logo -->
        <a href="{{route('index')}}" class="navbar-brand"><img class="logo" src="{{asset('assets/img/template/logo.png')}}" alt="logo"></a>

        <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
        <div id="loading" class="pull-left"><i class="fa fa-certificate fa-spin"></i></div>

        <!-- Header Widgets -->
        <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
        <ul id="widgets" class="navbar-nav-custom pull-right">
            <!-- Just a divider -->
            <li class="divider-vertical"></li>

           @yield('navbar-widgets')

            <li class="divider-vertical"></li>

            <!-- User Menu -->

            <!-- END User Menu -->
        </ul>
        <!-- END Header Widgets -->
    </header>
    <!-- END Header -->

    <!-- Inner Container -->
    <div id="inner-container">
        <!-- Sidebar -->
        <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
            <!-- Sidebar search -->
            <form id="sidebar-search" method="post">
                <div class="input-group">
                    <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Ara...">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </form>
            <!-- END Sidebar search -->

            <!-- Primary Navigation -->
            <nav id="primary-nav">
                <ul>
                    <li>
                        <a href="index.html" class="active"><i class="fa fa-fire"></i>Dashboard</a>
                    </li>
                    @yield('sidebar')
                </ul>
            </nav>
            <!-- END Primary Navigation -->
        </aside>
        <!-- END Sidebar -->

        <!-- Page Content -->
        <div id="page-content">
            <!-- Navigation info -->
            <ul id="nav-info" class="clearfix">
                <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
                @yield('nav-info')
            </ul>
            <!-- END Navigation info -->

            <!-- Nav Dash -->
            <ul class="nav-dash">
                @yield('nav-dash')
            </ul>
            @yield('page-content')
        <footer>
            <strong>Onur Demirci</strong>
        </footer>
        <!-- END Footer -->
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
                                    <img src="{{asset('assets/img/placeholders/image_dark_120x120.png')}}" alt="image" class="img-responsive push">
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
<script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>

<script>!window.jQuery && document.write(decodeURI('%3Cscript src="{{asset('assets/js/vendor/jquery.min.js')}}"%3E%3C/script%3E'));</script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<!-- Bootstrap.js -->
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<!-- Jquery plugins and custom javascript code -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('js')
<!-- Javascript code only for this page -->
<script>
    $(function () {

        // Create and bind tooltip
        var previousPoint = null;
        dashChart.bind("plothover", function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0],
                        y = item.datapoint[1];

                    $('<div id="tooltip" class="chart-tooltip"><strong>' + y + '</strong> visits</div>')
                        .css({top: item.pageY - 30, left: item.pageX + 5})
                        .appendTo("body")
                        .show();
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });
    });
</script>
</body>
</html>