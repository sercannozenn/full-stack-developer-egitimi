@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="{{asset('assets/backEnd/dist/css/pages/materialize-select2.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <form id="postForm" method="POST" action="" enctype="multipart/form-data" class="col s12">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input id="title" name="title" type="text" class="validate">
                    <label for="title">Makale Başlığı</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select id="category" name="category">
                        <option value="" disabled selected>Kategori Seç</option>
                        @foreach($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col s6">
                    <div class="btn">
                        <span>Makale Resmi Seç</span>
                        <input type="file" accept="image/*" name="postImage" id="post-image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select multiple="multiple" id="tags" class="browser-default js-data-example-ajax">
                    </select>
                    <input type="hidden" name="tag_ids" id="tagIds">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <h5>Yayınlanma Tarihi Seç</h5>
                    <input id="publish_date" type="datetime-local" placeholder="Yayınlanma tarihi seç"
                           class="post-date" name="publish_date">
                </div>
                <div class="input-field col s6">
                    <div class="switch">
                        <label for="publishNow">
                            Şimdi Yayınla
                            <input name="publishNow" id="publishNow" type="checkbox">
                            <span class="lever"></span>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="input-field col s6 m-t-5">
                    <div class="switch">
                        <label for="statusEdit">
                            Pasif
                            <input name="status" id="statusEdit" type="checkbox">
                            <span class="lever"></span>
                            Aktif
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <textarea name="post_content" id="editor1" rows="10" cols="80">
            </textarea>
            </div>
            <hr>
            <button class="btn waves-effect waves-light" id="btnSave" type="button">Gönderiyi Kaydet
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/posts.js')}}"></script>
    <script>

        var route = '{{route('post.getTags')}}';
        // var d = new Date();
        // const ye = new Intl.DateTimeFormat('tr', { year: 'numeric' }).format(d);
        // const mo = new Intl.DateTimeFormat('tr', { month: 'numeric' }).format(d);
        // const da = new Intl.DateTimeFormat('tr', { day: '2-digit' }).format(d);
        // var today = `${ye}-${mo}-${da}`;
        // today+= "T"+d.toString().substring(16,21);
        // document.getElementById("publish_date").min = today;
        // console.log(today);
    </script>
@endsection
