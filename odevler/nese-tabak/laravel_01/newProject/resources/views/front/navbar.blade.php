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
    <!-- Just a divider -->
    <li class="divider-vertical"></li>

    <!-- RSS Widget -->
    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
    <li id="rss-widget" class="dropdown dropdown-left-responsive">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-rss"></i>
            <span class="badge badge-warning display-none"></span>
        </a>
        <!-- By adding the class .widget-fluid, dropdown width will be set to auto with min value 180px and max value 250px -->
        <ul class="dropdown-menu dropdown-menu-right widget widget-fluid">
            <li class="widget-heading text-center">Web Design</li>
            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-umbrella"></i>This is
                    a headline</a></li>
            <li class="divider"></li>
            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-trophy"></i>Another
                    headline</a></li>
            <li class="divider"></li>
            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-suitcase"></i>Headlines
                    keep coming!</a></li>
            <li class="widget-heading text-center">Web Developent</li>
            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-phone"></i>New
                    headline</a></li>
            <li class="divider"></li>
            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-pencil"></i>Another
                    one</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)" class="text-center">All News</a></li>
        </ul>
    </li>
    <!-- END RSS Widget -->

    <li class="divider-vertical"></li>

    <!-- Twitter Widget -->
    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
    <li id="twitter-widget" class="dropdown dropdown-left-responsive">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-twitter"></i>
            <span class="badge badge-info display-none"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right widget">
            <li class="widget-heading"><i class="fa fa-comments-o pull-right"></i>Latest Tweets</li>
            <li class="li-hover">
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_dark_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">Michael</a><span
                                class="label label-info">just now</span></h6>
                        <div class="media">Web design all the way!</div>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li class="li-hover">
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_dark_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">Monica</a><span class="label label-info">3 min ago</span>
                        </h6>
                        <div class="media">Download free PSDs at <a href="http://bit.ly/YUs4SQ" target="_blank">http://bit.ly/YUs4SQ</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li class="li-hover">
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_dark_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">Steven</a><span class="label label-info">45 min ago</span>
                        </h6>
                        <div class="media">Be sure to check out my portfolio!</div>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li class="li-hover">
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_dark_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">Tim</a><span class="label label-info">1 hour ago</span>
                        </h6>
                        <div class="media">Get all our themes for free for the next 2 hours! <a
                                href="javascript:void(0)">#freebies</a></div>
                    </div>
                </div>
            </li>
        </ul>
    </li>
    <!-- END Twitter Widget -->

    <li class="divider-vertical"></li>

    <!-- Messages Widget -->
    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
    <li id="messages-widget" class="dropdown dropdown-left-responsive">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope"></i>
            <!-- If the <span> element with .badge class has no content it will disappear (not in IE8 and below because of using :empty in CSS) -->
            <span class="badge badge-success">1</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right widget">
            <li class="widget-heading"><i class="fa fa-comment pull-right"></i>Latest Messages</li>
            <li class="new-on">
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_light_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">George</a><span
                                class="label label-success">2 min ago</span></h6>
                        <div class="media">Thanks for your help! The tutorial really helped me a lot!</div>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_light_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">Mike</a><span
                                class="label label-default">6 hours ago</span></h6>
                        <div class="media">The logo is ready, have a look and let me know what you think!</div>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li>
                <div class="media">
                    <a class="pull-left" href="javascript:void(0)">
                        <img src="assets/img/placeholders/image_light_64x64.png" alt="fakeimg">
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading"><a href="javascript:void(0)">Julia</a><span
                                class="label label-default">1 day ago</span></h6>
                        <div class="media">We should better consider our social media marketing strategy!</div>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <li class="text-center"><a href="page_inbox.html">View All Messages</a></li>
        </ul>
    </li>
    <!-- END Messages Widget -->

    <li class="divider-vertical"></li>

    <!-- Notifications Widget -->
    <!-- Add .dropdown-center-responsive class to align the dropdown menu center (so its visible on mobile) -->
    <li id="notifications-widget" class="dropdown dropdown-center-responsive">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag"></i>
            <span class="badge badge-danger">1</span>
            <span class="badge badge-warning">2</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right widget">
            <li class="widget-heading"><a href="javascript:void(0)" class="pull-right widget-link"><i
                        class="fa fa-cog"></i></a><a href="javascript:void(0)" class="widget-link">System</a></li>
            <li>
                <ul>
                    <li class="label label-danger">20 min ago</li>
                    <li class="text-danger">Support system is down for maintenance!</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="label label-warning">3 hours ago</li>
                    <li class="text-warning">PHP upgrade started!</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="label label-warning">5 hours ago</li>
                    <li class="text-warning"><a href="javascript:void(0)" class="widget-link">1 support ticket</a> just
                        opened!
                    </li>
                </ul>
            </li>
            <li class="widget-heading"><a href="javascript:void(0)" class="pull-right widget-link"><i
                        class="fa fa-bookmark"></i></a><a href="javascript:void(0)" class="widget-link">Project #3</a>
            </li>
            <li>
                <ul>
                    <li class="label label-success">3 weeks ago</li>
                    <li class="text-success">Project #3 <a href="javascript:void(0)" class="widget-link">published</a>
                        successfully!
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="label label-info">1 month ago</li>
                    <li class="text-info">Milestone #3 achieved!</li>
                    <li class="text-info"><a href="javascript:void(0)" class="widget-link">John Doe</a> joined the
                        project!
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="label label-default">1 year ago</li>
                    <li class="text-muted">This is an old notification</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="text-center"><a href="javascript:void(0)">View All Notifications</a></li>
        </ul>
    </li>
    <!-- END Notifications Widget -->

    <li class="divider-vertical"></li>

    <!-- User Menu -->
    <li class="dropdown pull-right dropdown-user">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img
                src="{{asset('assets/img/template/avatar.png')}}" alt="avatar"> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="divider"></li>
            @guest()
                <li>
                    <!-- Modal div is at the bottom of the page before including javascript code -->
                    <a href="#modal-user-settings" role="button" data-toggle="modal"><i
                            class="fa fa-user"></i>Misafir </a>
                </li>
            @else

                <li>
                    <a href="#modal-user-settings" role="button" data-toggle="modal">
                        <i class="fa fa-user"></i>
                        {{auth()->user()->name}}
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="javascript:void(0)"
                       onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                        <i class="fa fa-lock"></i>
                        Log Out
                    </a>
                </li>
                <form method="POST" action="{{route('logout')}}" id="logoutForm">
                    @csrf
                </form>
            @endguest
        </ul>
    </li>
    <!-- END User Menu -->
</ul>

