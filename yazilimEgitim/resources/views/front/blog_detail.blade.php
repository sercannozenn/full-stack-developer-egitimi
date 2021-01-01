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
                                @foreach($comments as $comment)
                                    <li>
                                        <div class="comment-box">
                                            <div class="comment-content">
                                                <h4>{{ $comment->name }}</h4>
                                                <span>{{ \Carbon\Carbon::parse($comment->created_at)->translatedFormat('j F Y') }}</span>
                                                <a href="javascript:void(0)" data-id="{{ $comment->id }}"
                                                   class="replyComment">Cevapla</a>
                                                <p>{{ $comment->message }}</p>
                                            </div>
                                        </div>
                                        @if (count($comment->children) > 0)
                                            <ul class="depth">
                                                @foreach($comment->children as $child)
                                                    @include('front.layouts.comments_children', ['child' => $child])
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="contact-form-box">
                            <h1>Yorum Yap</h1>
                            <form id="comment-form" action="{{ route('blog.addComment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <input type="hidden" name="parent" id="parent" value="0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="name" id="name" type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="email" id="email" type="text" placeholder="Email*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="website" id="website" type="text" placeholder="Website">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Message*"></textarea>
                                <input type="submit" id="submit-contact" value="Gönder">
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
    <script>
        $(document).ready(function ()
        {
            $('.replyComment').click(function ()
            {
                let dataID = $(this).data('id');
                $('#parent').val(dataID);
            });
        });
    </script>
@endsection
