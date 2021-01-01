@extends('layouts.front')
@section('title')
@endsection
@section('css')
@endsection
@section('sections')
    <section class="banner-page-section">
        <div class="container">
            <h1>{{ $post->title }}</h1>
            <p>{{ strip_tags(substr($post->content, 0, 50)) }}</p>
        </div>
    </section>
    <section class="blog-page-section">
        <div class="container">
            <div class="title-section">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-page-box single-post">
                        <div class="blog-post">
                            <div class="post-gallery">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
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
                                        <a href="{{ route('blog.category', [ 'category' =>  $post->getCategory->slug]) }}">
                                            {{ $post->getCategory->name }}
                                        </a>
                                    </li>
                                </ul>
                               {!! $post->content !!}
                            </div>
                        </div>


                        <div class="prev-next-post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="prev-post-blog">
                                        <a href="#"><span aria-hidden="true" class="arrow_carrot-left_alt2"></span></a>
                                        <img src="upload/blog/t1.jpg" alt="">
                                        <span>Previous post</span>
                                        <h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="next-post-blog">
                                        <a href="#"><span aria-hidden="true" class="arrow_carrot-right_alt2"></span></a>
                                        <img src="upload/blog/t2.jpg" alt="">
                                        <span>next post</span>
                                        <h2><a href="single-post.html">Vestibulum commodo felis</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-area-box">
                            <h1>Yorumlar</h1>
                            <ul class="comment-tree">
                                <li>
                                    <div class="comment-box">
                                        <div class="comment-content">
                                            <h4>Kate Howston</h4>
                                            <span>May 12, 2015</span>
                                            <a href="javascript:void(0)">Reply</a>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu
                                                pulvinar nunc sapien ornare nisl. </p>
                                        </div>
                                    </div>
                                    <ul class="depth">
                                        <li>
                                            <div class="comment-box">
                                                <div class="comment-content">
                                                    <h4>Jess Pinkman</h4>
                                                    <span>May 12, 2015</span>
                                                    <a href="#">Reply</a>
                                                    <p>Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing
                                                        in, lacinia vel, tellus. Suspendisse ac urna. </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="contact-form-box">
                            <h1>Leave a Comment</h1>
                            <span>Required fields are marked *</span>
                            <form id="comment-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="name" id="name" type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="mail" id="mail" type="text" placeholder="Email*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="website" id="website" type="text" placeholder="Website">
                                    </div>
                                </div>
                                <textarea name="comment" id="comment" placeholder="Message*"></textarea>
                                <input type="submit" id="submit-contact" value="Submit Comment">
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        @include('front.layouts.blog_sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
@endsection
