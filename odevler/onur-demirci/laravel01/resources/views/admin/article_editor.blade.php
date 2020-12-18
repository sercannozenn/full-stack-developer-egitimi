@extends('layouts.front')
@foreach($edit_article as $article)
@section('css')

@endsection

@section('title')
    {{$article->article_title}}
@endsection

@section('content')

        <h3>Makale Düzenleme</h3>
        <form action="" method="POST"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="article_id" value="{{$article->articleID}}">
            <input class="form-control" type="text" name="new_article_title" placeholder="Makale Başlığı" value="{{$article->article_title}}">
            <hr>
            <h4 for="a_image">Makale Resmi <small>Maksimum boyut 5MB</small></h4>
            <span>
                @if($article->article_image)
                <img height="50" src="{{asset('assets/img/article_images/' . $article->article_image)}}" alt="Article Icon">
                @else
                <small>Makale Resmi Yok</small>
                @endif
            </span>
            <input style="display: inline;padding-left: 5px" type="file" id="a_image" name="new_article_image" accept="image/*">
            <hr>
            <h4>Yayınlanma Zamanı</h4>
            <br>
            {{--        <hr style="margin-top:0">--}}
            <input id="now" name="new_publish_now" type="checkbox"><label id="publish_now" for="now"> &nbsp; Şimdi Yayınla</label>
            <br>
            <br>
            <label for="date">Yayınlanma Tarihi &nbsp; </label>
            <input id="date" type="datetime-local" name="new_publish_time" min="{{str_replace(" ","T",$article->publish_time)}}"
                   value="{{str_replace(" ","T",$article->publish_time)}}">
            <hr>
            <textarea class="ckeditor" name="new_article_content" id="ckedit" cols="30" rows="10">{{$article->article_content}}</textarea>
            <hr>
            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Değişiklikleri Kaydet</button>
        </form>

@endsection

@section('js')
    <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        var now  = new Date();
        now = Date.parse(now);
        var publish_date = Date.parse("{{$article->publish_time}}");
        if (publish_date < now) {
            document.getElementById('now').disabled=true;
            document.getElementById('publish_now').innerHTML = "Makale zaten yayında";
            document.getElementById('publish_now').style.marginLeft = "5px";

        }
        else {
           //
        }
    </script>
@endsection
@endforeach