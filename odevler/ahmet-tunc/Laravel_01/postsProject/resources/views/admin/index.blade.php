@extends('layouts.front')

@section('title')
    Anasayfa
@endsection


@section('css')
@endsection

@section('content')
    <ul id="nav-info" class="clearfix">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Anasayfa</a></li>
    </ul>
    <h3 class="page-header page-header-top"><i class="fa fa-home"></i> Anasayfa <small>Grafiksel Veriler</small></h3>


    <!-- Row 1 -->
    <div class="dash-tiles row">
        <!-- Column 1 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Users Tile -->
            <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                <div class="dash-tile-header">
                    Post Sayısı
                </div>
                <div class="dash-tile-icon"><i class="fa fa-list-alt"></i></div>
                <div class="dash-tile-text">265k</div>
            </div>
        </div>
        <!-- END Column 1 of Row 1 -->

        <!-- Column 2 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Sales Tile -->
            <div class="dash-tile dash-tile-flower clearfix animation-pullDown">
                <div class="dash-tile-header">
                    Kategori Sayısı
                </div>
                <div class="dash-tile-icon"><i class="fa fa-bookmark"></i></div>
                <div class="dash-tile-text">300k</div>
            </div>
            <!-- END Total Sales Tile -->

        </div>
        <!-- END Column 2 of Row 1 -->


    </div>
@endsection


@section('js')
@endsection

