@extends('layouts.front')

@section('css')
    <style>
        .dash-tile-dark {
            width: 100%;
        }

        .dash-tile-text {
            font-size: 15px !important;
            width: 94%;
            padding-top: 25px !important;
        }

        .article-details {
            list-style: none;
            padding-right: 5px;
        }
        .article-content {
            font-size: 18px;
            margin-top: 10px;
            text-align: left !important;
            float: left !important;
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
                <div class="dash-tile dash-tile-dark clearfix animation-pullDown">
                    <div class="dash-tile-header">
                        <div class="dash-tile-options">
                            <div class="btn-group">
                                <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip"
                                   title="Makaleyi Düzenle"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                        {{$article->article_title}}
                    </div>
                    <div class="dash-tile-icon"><i class="fa fa-file-text-o"></i></div>
                    <div class="dash-tile-text">
                            <p class="article-content">{{ \Illuminate\Support\Str::limit(strip_tags($article->article_content),20,'...') }}</p>
                        <ul class="article-details">
                            <li><small>Yayınlanma Tarihi : {{$article->publish_time}}</small></li>
                            <li><small>Oluşturulma Tarihi : {{$article->created_at}}</small></li>
                            <li><small>Son Düzenlenme Tarihi: {{$article->updated_at}}</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('js')

@endsection