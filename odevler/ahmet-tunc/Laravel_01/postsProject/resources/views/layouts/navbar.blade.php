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

    <!-- Header Widgets -->
    <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
    <ul id="widgets" class="navbar-nav-custom pull-right">
        <li class="dropdown pull-right dropdown-user">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/template/avatar.png')}}" alt="avatar"> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <!-- Modal div is at the bottom of the page before including javascript code -->
                    <a href="#modal-user-settings" role="button" data-toggle="modal"><i class="fa fa-user"></i> Kullanıcı Ayarları</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="page_login.html"><i class="fa fa-sign-out"></i> Çıkış</a>
                </li>
            </ul>
        </li>
        <!-- END User Menu -->
    </ul>
    <!-- END Header Widgets -->
</header>
