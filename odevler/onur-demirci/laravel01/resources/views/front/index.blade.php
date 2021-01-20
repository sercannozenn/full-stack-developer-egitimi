@extends('layouts.front')
@section('title')
    Ana Sayfa
@endsection

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="col-sm-6 col-lg-6 grid-container" id="column-1">
        @foreach($articles as $article)

            @if($loop->index<6)
                <div class="grid-item">
                    @if($article->article_image)
                        <div class="background-holder" style="background-image: url('{{asset('assets/img/article_images/'.$article->article_image)}}')"></div>
                        <div class="background-overlay"></div>
                    @endif
                    <article class="home-page-article">
                        <section class="article-title">
                            <h2>{{$article->article_title}}</h2>
                        </section>
                        <section class="article-summary">
                            <p class="article-content">{!! strip_tags($article->article_content)!!}</p> <span><a href=#>Devamını Oku</a></span>
                        </section>
                        <section class="article-date">
                            <small><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($article->publish_time)->translatedFormat('j F Y')}}</small>
                        </section>
                    </article>
                </div>
            @endif
        @endforeach
    </div>
    <div class="col-sm-6 col-lg-6 grid-container" id="column-2">
        @foreach($articles as $article)
            @if($loop->index>5)
                <div class="grid-item">
                    @if($article->article_image)
                        <div class="background-holder" style="background-image: url('{{asset('assets/img/article_images/'.$article->article_image)}}')"></div>
                        <div class="background-overlay"></div>
                    @endif
                        <article class="home-page-article">
                            <section class="article-title">
                                <h2>{{$article->article_title}}</h2>
                            </section>
                            <section class="article-summary">
                                <p class="article-content">{!! strip_tags($article->article_content)!!}</p> <span><a href=#>Devamını Oku</a></span>
                            </section>
                            <section class="article-date">
                                <small><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($article->publish_time)->translatedFormat('j F Y')}}</small>
                            </section>
                        </article>
                </div>
            @endif
        @endforeach
    </div>

    <div class="row">

    </div>

@endsection

@section('js')
    <script>
        var article_contents = document.querySelectorAll('.article-content');
        console.log(article_contents);
        for (i=0;article_contents.length;i++) {
            article_contents[i].innerHTML = article_contents[i].innerHTML.slice(0,25) + "...";
        }
    </script>
@endsection