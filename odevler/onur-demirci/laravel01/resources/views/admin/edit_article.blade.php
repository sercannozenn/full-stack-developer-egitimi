@extends('layouts.front')

@section('css')
    <style>
        .dash-tile-dark {
            width: 100%;
        }

        .dash-tile-text {
            font-size: 15px !important;
            float:left;
        }
        .article-dates {
            float: right;
        }
        .article-details {
            list-style: none;
            color: #FFFFFF;
            padding: 48px 0 0 0;
            text-align: right;
        }
        .article-content {
            font-size: 18px;
            margin-top: 10px;
            margin-left: 10px;
            text-align: left !important;
        }
        .article_icon {
            width: 100%;
            padding-right: 5px;
        }
    </style>
@endsection

@section('title')
    Makale Düzenleme
@endsection

@section('content')
    @foreach ($articles as $article)
        <div class="dash-tiles row">
            <div class="col-sm-12 col-lg-12">
                <div class="row dash-tile dash-tile-dark clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div class="btn-group">
                                <a href="{{route('article_editor',$article->articleID)}}" class="btn btn-default" data-toggle="tooltip"
                                   title="Makaleyi Düzenle"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                        {{$article->article_title}}
                    </div>

                    <div class="col-sm-1 col-lg-1 dash-tile-icon text-center">
                        @if($article->article_image)
                            <img class="article_icon" src="{{asset('assets/img/article_images/'.$article->article_image)}}" alt="Article Image">
                        @else
                        <i class="fa fa-file-text-o"></i>
                        @endif
                    </div>
                    <div class="col-sm-5 col-lg-6 dash-tile-text text-white">
                            <p class="article-content">{!! \Illuminate\Support\Str::limit(strip_tags($article->article_content),20,'...') !!}</p>
                    </div>
                    <div class="col-sm-6 col-lg-5 article-dates">
                        <ul class="article-details text-white">
                            <li><small>Yayınlanma Tarihi : {{\Carbon\Carbon::parse($article->publish_time)->translatedFormat('j F Y l H:i')}}</small></li>
                            <li><small>Oluşturulma Tarihi : {{\Carbon\Carbon::parse($article->article_created)->translatedFormat('j F Y l H:i')}}</small></li>
                            <li><small>Son Düzenlenme Tarihi: {{\Carbon\Carbon::parse($article->article_updated)->translatedFormat('j F Y l H:i')}}</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('js')

@endsection