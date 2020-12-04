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
    <a href="/" class="navbar-brand"><img src="{{asset('assets/img/template/logo.png')}}" alt="logo"></a>

    <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
    <div id="loading" class="pull-left"><i class="fa fa-certificate fa-spin"></i></div>


    <!-- END Header Widgets -->
</header>
