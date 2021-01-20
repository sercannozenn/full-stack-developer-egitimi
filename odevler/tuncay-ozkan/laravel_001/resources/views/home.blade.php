@extends('layouts.masterPage')
@section('pagetitle','Anasayfa')

@section('content')


        <!-- Nav Dash -->
        <ul class="nav-dash">
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                    <i class="fa fa-user"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Comments" class="animation-fadeIn">
                    <i class="fa fa-comments"></i> <span class="badge badge-success">3</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Calendar" class="animation-fadeIn">
                    <i class="fa fa-calendar"></i> <span class="badge badge-inverse">5</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Photos" class="animation-fadeIn">
                    <i class="fa fa-camera-retro"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Projects" class="animation-fadeIn">
                    <i class="fa fa-paperclip"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Tasks" class="animation-fadeIn">
                    <i class="fa fa-tasks"></i> <span class="badge badge-warning">1</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Reader" class="animation-fadeIn">
                    <i class="fa fa-book"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" title="Settings" class="animation-fadeIn">
                    <i class="fa fa-cogs"></i>
                </a>
            </li>
        </ul>
        <!-- END Nav Dash -->

        <!-- Tiles -->
        <!-- Row 1 -->
        <div class="dash-tiles row">
            <!-- Column 1 of Row 1 -->
            <div class="col-sm-3">
                <!-- Total Users Tile -->
                <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div class="btn-group">
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage Users"><i class="fa fa-cog"></i></a>
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                            </div>
                        </div>
                        Total Users
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
                    <div class="dash-tile-text">265k</div>
                </div>
                <!-- END Total Users Tile -->

                <!-- Total Profit Tile -->
                <div class="dash-tile dash-tile-leaf clearfix animation-pullDown">
                    <div class="dash-tile-header">
                                    <span class="dash-tile-options">
                                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="popover" data-placement="top" data-content="$500 (230 Sales)" title="Today's profit"><i class="fa fa-credit-card"></i></a>
                                    </span>
                        Total Profit
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-money"></i></div>
                    <div class="dash-tile-text">$5M</div>
                </div>
                <!-- END Total Profit Tile -->
            </div>
            <!-- END Column 1 of Row 1 -->

            <!-- Column 2 of Row 1 -->
            <div class="col-sm-3">
                <!-- Total Sales Tile -->
                <div class="dash-tile dash-tile-flower clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div class="btn-group">
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="View new orders"><i class="fa fa-shopping-cart"></i></a>
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                            </div>
                        </div>
                        Total Sales
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-tags"></i></div>
                    <div class="dash-tile-text">300k</div>
                </div>
                <!-- END Total Sales Tile -->

                <!-- Total Downloads Tile -->
                <div class="dash-tile dash-tile-fruit clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="View popular downloads"><i class="fa fa-asterisk"></i></a>
                        </div>
                        Total Downloads
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-cloud-download"></i></div>
                    <div class="dash-tile-text">360k</div>
                </div>
                <!-- END Total Downloads Tile -->
            </div>
            <!-- END Column 2 of Row 1 -->

            <!-- Column 3 of Row 1 -->
            <div class="col-sm-3">
                <!-- Popularity Tile -->
                <div class="dash-tile dash-tile-oil clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div class="btn-group">
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="What's changed?"><i class="fa fa-fire"></i></a>
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Share"><i class="fa fa-share-square-o"></i></a>
                            </div>
                        </div>
                        Popularity
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-globe"></i></div>
                    <div class="dash-tile-text">+90%</div>
                </div>
                <!-- END Popularity Tile -->

                <!-- Server Downtime Tile -->
                <div class="dash-tile dash-tile-dark clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Monthly report"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                        Server Downtime
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-hdd-o"></i></div>
                    <div class="dash-tile-text">0.1%</div>
                </div>
                <!-- END Server Downtime Tile -->
            </div>
            <!-- END Column 3 of Row 1 -->

            <!-- Column 4 of Row 1 -->
            <div class="col-sm-3">
                <!-- RSS Subscribers Tile -->
                <div class="dash-tile dash-tile-balloon clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage subscribers"><i class="fa fa-cog"></i></a>
                        </div>
                        RSS Subscribers
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-rss"></i></div>
                    <div class="dash-tile-text">160k</div>
                </div>
                <!-- END RSS Subscribers Tile -->

                <!-- Total Tickets Tile -->
                <div class="dash-tile dash-tile-doll clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Open tickets"><i class="fa fa-file-o"></i></a>
                        </div>
                        Total Tickets
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-wrench"></i></div>
                    <div class="dash-tile-text">1.5k</div>
                </div>
                <!-- END Total Tickets Tile -->
            </div>
            <!-- END Column 4 of Row 1 -->
        </div>
        <!-- END Row 1 -->

        <!-- Row 2 -->
        <div class="row">
            <!-- Column 1 of Row 2 -->
            <div class="col-sm-6">
                <!-- Statistics Tile -->
                <div class="dash-tile dash-tile-2x">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div id="example-advanced-daterangepicker" class="btn btn-default">
                                <i class="fa fa-calendar"></i>
                                <span></span>
                                <b class="caret"></b>
                            </div>
                        </div>
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="dash-tile-content">
                        <div id="dash-example-stats" class="dash-tile-content-inner"></div>
                    </div>
                </div>
                <!-- END Statistics Tile -->
            </div>
            <!-- END Column 1 of Row 2 -->

            <!-- Column 2 of Row 2 -->
            <div class="col-sm-3">
                <!-- Projects Tile -->
                <div class="dash-tile dash-tile-2x">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage projects"><i class="fa fa-cog"></i></a>
                        </div>
                        Projects
                    </div>
                    <div class="dash-tile-content">
                        <div class="dash-tile-content-inner scrollable-tile-2x">
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#1 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 100%"><i class="fa fa-check"></i> Done!</div>
                            </div>
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#2 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 75%">75%</div>
                            </div>
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#3 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" style="width: 50%">50%</div>
                            </div>
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#4 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" style="width: 20%">20%</div>
                            </div>
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#5 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 85%">85%</div>
                            </div>
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#6 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 95%">95%</div>
                            </div>
                            <h5 class="page-header-sub"><a href="javascript:void(0)">#7 - Project</a></h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" style="width: 60%">60%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Projects Tile -->
            </div>
            <!-- END Column 2 of Row 2 -->

            <!-- Column 3 of Row 2 -->
            <div class="col-sm-3">
                <!-- Alerts Tile -->
                <div class="dash-tile dash-tile-2x">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div class="btn-group">
                                <a href="javascript:void(0)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                <a href="javascript:void(0)" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:void(0)" class="btn btn-success"><i class="fa fa-cog"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">System</a></li>
                                    <li><a href="javascript:void(0)">Projects</a></li>
                                    <li><a href="javascript:void(0)">Users</a></li>
                                </ul>
                            </div>
                        </div>
                        Alerts
                    </div>
                    <div class="dash-tile-content">
                        <div class="dash-tile-content-inner scrollable-tile-2x">
                            <h5 class="page-header-sub">Today</h5>
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-barcode"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <div class="alert alert-success">
                                <i class="fa fa-unlock"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-bell-o"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <div class="alert alert-info">
                                <i class="fa fa-signal"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <h5 class="page-header-sub">Yesterday</h5>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-barcode"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <div class="alert alert-warning">
                                <i class="fa fa-barcode"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <i class="fa fa-facebook"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                            <div class="alert alert-danger">
                                <i class="fa fa-align-justify"></i> <strong>Check out!</strong> This is a notification!
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Alerts Tile -->
            </div>
            <!-- END Column 3 of Row 2 -->
        </div>
        <!-- END Row 2 -->

        <!-- Row 3 -->
        <div class="row">
            <!-- Column 1 of Row 3 -->
            <div class="col-sm-6">
                <!-- Datatables Tile -->
                <div class="dash-tile dash-tile-2x">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage Orders"><i class="fa fa-cogs"></i></a>
                        </div>
                        <i class="fa fa-shopping-cart"></i> New Orders
                    </div>
                    <div class="dash-tile-content">
                        <div class="dash-tile-content-inner-fluid">
                            <table id="dash-example-orders" class="table table-striped table-bordered table-condensed">
                                <thead>
                                <tr>
                                    <th class="cell-small"></th>
                                    <th class="hidden-xs hidden-sm hidden-md">#</th>
                                    <th><i class="fa fa-shopping-cart"></i> Order</th>
                                    <th class="hidden-xs hidden-sm hidden-md"><i class="fa fa-user"></i> User</th>
                                    <th><i class="fa fa-bolt"></i> Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">1</td>
                                    <td><a href="javascript:void(0)">Order#1</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User1</a></td>
                                    <td><span class="label label-warning">Pending..</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">2</td>
                                    <td><a href="javascript:void(0)">Order#2</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User2</a></td>
                                    <td><span class="label label-success">Sent!</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">3</td>
                                    <td><a href="javascript:void(0)">Order#3</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User3</a></td>
                                    <td><span class="label label-danger">Canceled!</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">4</td>
                                    <td><a href="javascript:void(0)">Order#4</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User4</a></td>
                                    <td><span class="label label-success">Sent!</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">5</td>
                                    <td><a href="javascript:void(0)">Order#5</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User5</a></td>
                                    <td><span class="label label-success">Sent!</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">6</td>
                                    <td><a href="javascript:void(0)">Order#6</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User6</a></td>
                                    <td><span class="label label-danger">Canceled!</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">7</td>
                                    <td><a href="javascript:void(0)">Order#7</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User7</a></td>
                                    <td><span class="label label-default">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">8</td>
                                    <td><a href="javascript:void(0)">Order#8</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User8</a></td>
                                    <td><span class="label label-danger">Canceled!</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">9</td>
                                    <td><a href="javascript:void(0)">Order#9</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User9</a></td>
                                    <td><span class="label label-info">Manual process..</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">10</td>
                                    <td><a href="javascript:void(0)">Order#10</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User10</a></td>
                                    <td><span class="label label-default">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">11</td>
                                    <td><a href="javascript:void(0)">Order#11</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User11</a></td>
                                    <td><span class="label label-info">Manual process..</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Process" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Cancel" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                    <td class="hidden-xs hidden-sm hidden-md">12</td>
                                    <td><a href="javascript:void(0)">Order#12</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)">User12</a></td>
                                    <td><span class="label label-info">Manual process..</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Datatables Tile -->
            </div>
            <!-- END Column 1 of Row 3 -->

            <!-- Column 2 of Row 3 -->
            <div class="col-sm-6">
                <!-- Users Tile -->
                <div class="dash-tile dash-tile-2x remove-margin">
                    <div class="dash-tile-header">
                        <i class="fa fa-user"></i> Users
                    </div>
                    <div class="dash-tile-content">
                        <div class="dash-tile-content-inner-fluid">
                            <!-- Users tabs links -->
                            <ul id="dash-example-tabs" class="nav nav-tabs" data-toggle="tabs">
                                <li class="active"><a href="#dash-example-tabs-admin">Admins</a></li>
                                <li><a href="#dash-example-tabs-mods">Mods</a></li>
                                <li><a href="#dash-example-tabs-newusers">New Users</a></li>
                            </ul>
                            <!-- END Users tabs links -->

                            <!-- User tabs content -->
                            <div class="tab-content">
                                <!-- Admins Tab -->
                                <div class="tab-pane active" id="dash-example-tabs-admin">
                                    <ul class="thumbnails clearfix remove-margin" data-toggle="gallery-options">
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin1</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin2</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin3</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin4</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin5</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin6</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin7</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin8</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Admins Tab -->

                                <!-- Mods Tab -->
                                <div class="tab-pane" id="dash-example-tabs-mods">
                                    <ul class="thumbnails clearfix remove-margin" data-toggle="gallery-options">
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod1</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod2</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod3</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod4</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod5</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod6</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod7</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-rounded" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod8</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Mods Tab -->

                                <!-- New Users Tab -->
                                <div class="tab-pane" id="dash-example-tabs-newusers">
                                    <ul class="thumbnails clearfix remove-margin" data-toggle="gallery-options">
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User1</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User2</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User3</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User4</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User5</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User6</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User7</a>
                                        </li>
                                        <li>
                                            <div class="thumbnails-options">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="thumbnail">
                                                <img src="img/placeholders/image_light_64x64.png" class="img-circle" alt="fakeimg">
                                            </a>
                                            <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User8</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END New Users Tab -->
                            </div>
                            <!-- END User tabs content -->
                        </div>
                    </div>
                </div>
                <!-- END Users Tile -->
            </div>
            <!-- END Column 2 of Row 3 -->
        </div>
        <!-- END Row 3 -->
        <!-- END Tiles -->

@endsection
