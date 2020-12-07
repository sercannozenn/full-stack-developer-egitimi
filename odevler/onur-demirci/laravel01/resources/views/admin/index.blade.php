@extends('layouts.front')
@section('title')
    Admin Sayfası
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <!-- Column 1 of Row 3 -->
        <div class="col-sm-6">
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div id="example-advanced-daterangepicker" class="btn btn-default">
                            <i class="fa fa-calendar"></i>
                            <span>December 3, 20 - December 3, 20</span>
                            <b class="caret"></b>
                        </div>
                    </div>
                    <i class="fa fa-bar-chart-o"></i> Site İstatistikleri
                </div>
                <div class="dash-tile-content">
                    <div id="dash-example-stats" class="dash-tile-content-inner"
                         style="padding: 0px; position: relative;">
                        <canvas class="flot-base" width="466" height="330"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 466px; height: 330px;"></canvas>
                        <div class="flot-text"
                             style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                            <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                 style="position: absolute; inset: 0px; display: block;">
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 30px; text-align: center;">
                                    0
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 58px; text-align: center;">
                                    2
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 86px; text-align: center;">
                                    4
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 115px; text-align: center;">
                                    6
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 143px; text-align: center;">
                                    8
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 168px; text-align: center;">
                                    10
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 197px; text-align: center;">
                                    12
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 225px; text-align: center;">
                                    14
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 253px; text-align: center;">
                                    16
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 282px; text-align: center;">
                                    18
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 310px; text-align: center;">
                                    20
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 338px; text-align: center;">
                                    22
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 367px; text-align: center;">
                                    24
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 395px; text-align: center;">
                                    26
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 423px; text-align: center;">
                                    28
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; max-width: 29px; top: 312px; left: 452px; text-align: center;">
                                    30
                                </div>
                            </div>
                            <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                 style="position: absolute; inset: 0px; display: block;">
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 299px; left: 21px; text-align: right;">0
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 249px; left: 8px; text-align: right;">500
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 199px; left: 2px; text-align: right;">1000
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 150px; left: 2px; text-align: right;">1500
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 100px; left: 2px; text-align: right;">2000
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 50px; left: 2px; text-align: right;">2500
                                </div>
                                <div class="flot-tick-label tickLabel"
                                     style="position: absolute; top: 0px; left: 2px; text-align: right;">3000
                                </div>
                            </div>
                        </div>
                        <canvas class="flot-overlay" width="466" height="330"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 466px; height: 330px;"></canvas>
                        <div class="legend">
                            <div style="position: absolute; width: 82px; height: 32px; top: 13px; left: 38px; background-color: rgb(246, 246, 246); opacity: 0.8;"></div>
                            <table style="position:absolute;top:13px;left:38px;;font-size:smaller;color:#999999">
                                <tbody>
                                <tr>
                                    <td class="legendColorBox">
                                        <div style="border:1px solid #ccc;padding:1px">
                                            <div style="width:4px;height:0;border:5px solid rgb(85,85,85);overflow:hidden"></div>
                                        </div>
                                    </td>
                                    <td class="legendLabel">Tüm Ziyaretler</td>
                                </tr>
                                <tr>
                                    <td class="legendColorBox">
                                        <div style="border:1px solid #ccc;padding:1px">
                                            <div style="width:4px;height:0;border:5px solid rgb(219,74,57);overflow:hidden"></div>
                                        </div>
                                    </td>
                                    <td class="legendLabel">Tekil Ziyaretler</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Column 1 of Row 3 -->

        <!-- Column 2 of Row 3 -->
        <div class="col-sm-6">
            <!-- Users Tile -->
            <div class="dash-tile dash-tile-2x remove-margin">
                <div class="dash-tile-header">
                    <i class="fa fa-user"></i> Kullanıcılar
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner-fluid">
                        <!-- Users tabs links -->
                        <ul id="dash-example-tabs" class="nav nav-tabs" data-toggle="tabs">
                            <li class="active"><a href="#dash-example-tabs-admin">Adminler</a></li>
                            <li class=""><a href="#dash-example-tabs-mods">Modlar</a></li>
                            <li class=""><a href="#dash-example-tabs-newusers">Yeni Kullanıcılar</a></li>
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
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin1</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin2</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin3</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin4</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin5</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin6</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Admin7</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" alt="fakeimg">
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
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod1</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod2</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod3</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod4</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod5</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod6</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">Mod7</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-rounded"
                                                 alt="fakeimg">
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
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User1</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User2</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User3</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User4</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User5</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User6</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail thumbnail-borderless text-center">User7</a>
                                    </li>
                                    <li>
                                        <div class="thumbnails-options">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="thumbnail">
                                            <img src="{{asset('assets/img/placeholders/image_light_64x64.png')}}" class="img-circle"
                                                 alt="fakeimg">
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
    <div class="dash-tiles row">
        <!-- Column 1 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Users Tile -->
            <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                               data-original-title="Manage Users"><i class="fa fa-cog"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                               data-original-title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Kullanıcı Sayısı
                </div>
                <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
                <div class="dash-tile-text">265k</div>
            </div>
            <!-- END Total Users Tile -->

            <!-- Total Profit Tile -->
            <div class="dash-tile dash-tile-leaf clearfix animation-pullDown">
                <div class="dash-tile-header">
                                    <span class="dash-tile-options">
                                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="popover"
                                           data-placement="top" data-content="$500 (230 Sales)" title=""
                                           data-original-title="Today's profit"><i class="fa fa-credit-card"></i></a>
                                    </span>
                    Reklam Geliri
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
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                               data-original-title="View new orders"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                               data-original-title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Makale Sayısı
                </div>
                <div class="dash-tile-icon"><i class="fa fa-tags"></i></div>
                <div class="dash-tile-text">300k</div>
            </div>
            <!-- END Total Sales Tile -->

            <!-- Total Downloads Tile -->
            <div class="dash-tile dash-tile-fruit clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                           data-original-title="View popular downloads"><i class="fa fa-asterisk"></i></a>
                    </div>
                    Toplam Paylaşım
                </div>
                <div class="dash-tile-icon"><i class="fa fa-cloud-upload"></i></div>
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
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                               data-original-title="What's changed?"><i class="fa fa-fire"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                               data-original-title="Share"><i class="fa fa-share-square-o"></i></a>
                        </div>
                    </div>
                    Popülerlik
                </div>
                <div class="dash-tile-icon"><i class="fa fa-globe"></i></div>
                <div class="dash-tile-text">+90%</div>
            </div>
            <!-- END Popularity Tile -->

            <!-- Server Downtime Tile -->
            <div class="dash-tile dash-tile-dark clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                           data-original-title="Monthly report"><i class="fa fa-bar-chart-o"></i></a>
                    </div>
                    Sunucu Kesintileri
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
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                           data-original-title="Manage subscribers"><i class="fa fa-cog"></i></a>
                    </div>
                    RSS Aboneleri
                </div>
                <div class="dash-tile-icon"><i class="fa fa-rss"></i></div>
                <div class="dash-tile-text">160k</div>
            </div>
            <!-- END RSS Subscribers Tile -->

            <!-- Total Tickets Tile -->
            <div class="dash-tile dash-tile-doll clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title=""
                           data-original-title="Open tickets"><i class="fa fa-file-o"></i></a>
                    </div>
                    Destek Ticketları
                </div>
                <div class="dash-tile-icon"><i class="fa fa-wrench"></i></div>
                <div class="dash-tile-text">1.5k</div>
            </div>
            <!-- END Total Tickets Tile -->
        </div>
        <!-- END Column 4 of Row 1 -->
    </div>
@endsection

@section('js')
    <script>
        {{--    @if(Session::has('success'))--}}
        @if(session('success'))

        alert("{{session('success')}}");
        {{--alert("{{Session::get('')}}");--}}

        @endif
        $(function () {
            // Initialize dash Datatables
            $('#dash-example-orders').dataTable({
                columnDefs: [{orderable: false, targets: [0]}],
                pageLength: 6,
                lengthMenu: [[6, 10, 30, -1], [6, 10, 30, "All"]]
            });
            $('.dataTables_filter input').attr('placeholder', 'Search');

            // Dash example stats
            var dashChart = $('#dash-example-stats');

            var dashChartData1 = [
                [0, 200],
                [1, 250],
                [2, 360],
                [3, 584],
                [4, 1250],
                [5, 1100],
                [6, 1500],
                [7, 1521],
                [8, 1600],
                [9, 1658],
                [10, 1623],
                [11, 1900],
                [12, 2100],
                [13, 1700],
                [14, 1620],
                [15, 1820],
                [16, 1950],
                [17, 2220],
                [18, 1951],
                [19, 2152],
                [20, 2300],
                [21, 2325],
                [22, 2200],
                [23, 2156],
                [24, 2350],
                [25, 2420],
                [26, 2480],
                [27, 2320],
                [28, 2380],
                [29, 2520],
                [30, 2590]
            ];
            var dashChartData2 = [
                [0, 50],
                [1, 180],
                [2, 200],
                [3, 350],
                [4, 700],
                [5, 650],
                [6, 700],
                [7, 780],
                [8, 820],
                [9, 880],
                [10, 1200],
                [11, 1250],
                [12, 1500],
                [13, 1195],
                [14, 1300],
                [15, 1350],
                [16, 1460],
                [17, 1680],
                [18, 1368],
                [19, 1589],
                [20, 1780],
                [21, 2100],
                [22, 1962],
                [23, 1952],
                [24, 2110],
                [25, 2260],
                [26, 2298],
                [27, 1985],
                [28, 2252],
                [29, 2300],
                [30, 2450]
            ];

            // Initialize Chart
            $.plot(dashChart, [
                    {
                        data: dashChartData1,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.05}, {opacity: 0.05}]}},
                        points: {show: true},
                        label: 'Tüm Ziyaretler'
                    },
                    {
                        data: dashChartData2,
                        lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.05}, {opacity: 0.05}]}},
                        points: {show: true},
                        label: 'Tekil Ziyaretler'
                    }],
                {
                    legend: {
                        position: 'nw',
                        backgroundColor: '#f6f6f6',
                        backgroundOpacity: 0.8
                    },
                    colors: ['#555555', '#db4a39'],
                    grid: {
                        borderColor: '#cccccc',
                        color: '#999999',
                        labelMargin: 5,
                        hoverable: true,
                        clickable: true
                    },
                    yaxis: {
                        ticks: 5
                    },
                    xaxis: {
                        tickSize: 2
                    }
                }
            );

            // Create and bind tooltip
            var previousPoint = null;
            dashChart.bind("plothover", function (event, pos, item) {

                if (item) {
                    if (previousPoint !== item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0],
                            y = item.datapoint[1];

                        $('<div id="tooltip" class="chart-tooltip"><strong>' + y + '</strong> ziyaret</div>')
                            .css({top: item.pageY - 30, left: item.pageX + 5})
                            .appendTo("body")
                            .show();
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
        });
    </script>
@endsection