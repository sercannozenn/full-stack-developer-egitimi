@extends('layouts.front')
@section('title','Blog Page')

@section('sections')
    <section class="banner-page-section">
        <div class="container">
            <h1>Blog</h1>
            <p>Our Latest news</p>
        </div>
    </section>
    <!-- End banner-page-section -->

    <!-- blog-page-section
        ================================================== -->
    <section class="blog-page-section">
        <div class="container">
            <div class="title-section">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-page-box iso-call">
                        @foreach($posts as $post)
                            <div class="blog-post">
                                <div class="post-gallery">
                                    <img src="{{ asset('storage/'. $post->image) }}" alt="">
                                </div>
                                <div class="post-content">
                                    <h2>
                                        <a href="{{ route('blog.post', ['category' => $post->getCategory->slug, 'post' => $post->slug]) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <ul class="post-meta">
                                        <li>{{ \Carbon\Carbon::parse($post->publish_date)->translatedFormat('j F Y') }}</li>
                                        <li>
                                            <a href="{{ route('blog', ['q' => 'user', 'text' => $post->user_id]) }}">
                                                {{ $post->getUser->name }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog.category', [ 'category' =>  $post->getCategory->slug]) }}">{{ $post->getCategory->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="sidebar">

                        @include('front.layouts.blog_sidebar')

                    </div>
                </div>
            </div>
            <div class="pagination-box">
                {{ $posts->links('vendor.pagination.myPaginate') }}
            </div>
        </div>
    </section>
@endsection


