@extends('layouts.admin')

@section('meta')

@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="{{asset('assets/backEnd/dist/css/pages/materialize-select2.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('title')
    {{$post->title}}
@endsection

@section('content')
    <div class="row">
        <form id="postForm" method="POST" action="{{route('admin.post.edit',$post->id)}}" class="col s12" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input id="title" name="title" type="text" class="validate active" value="{{$post->title}}">
                    <label for="title">Makale Başlığı</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select id="category" name="category">
                        @foreach($categories as $item)
                            <option value="{{ $item->id }}" {{$item->id==$post->category_id ? 'selected':'' }} >{{ $item->name }}</option>
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
                        <input class="file-path validate" type="text" value="{{ $post->image }}">
                    </div>
                </div>
                @if($post->image && file_exists('storage/'.$post->image))
                    <div class="input-field col s6">
                        <img src="{{ asset('storage/'. $post->image) }}" alt="Post Image" style="width: 100px;">
                        <small>Seçilen Resim</small>
                    </div>
                @endif
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
                    <input id="publish_date" type="datetime-local"
                           class="post-date"
{{--                           min="{{\Carbon\Carbon::parse($post->publish_date)->format('Y-m-d\TH:i:s')}}"--}}
                           {{--                           value="{{str_replace(" ","T",$post->publish_date)}}"--}}
                           value="{{\Carbon\Carbon::parse($post->publish_date)->format('Y-m-d\TH:i:s')}}"
                           name="publish_date">
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
                            <input name="status" id="statusEdit"
                                   type="checkbox" @if($post->status==1) {{'checked'}} @endif>
                            <span class="lever"></span>
                            Aktif
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <textarea name="post_content" id="editor1" rows="10" cols="80">{!! $post->content !!}</textarea>
            </div>
            <hr>
            <button class="btn waves-effect waves-light" id="btnSave" type="button">Değişiklikleri Kaydet
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script>
        var route='{{ route('post.getTags') }}';
    </script>
    <script src="{{asset('assets/js/posts.js')}}"></script>
    <script>
        $(document).ready(function () {
            var now = new Date();
            now = Date.parse(now);
            var publish_date = Date.parse("{{$post->publish_date}}");

            if (publish_date < now) {
                $("label[for='publishNow']").html(' Zaten Yayında\n' +
                    '                            <input name="publishNow" id="publishNow" type="checkbox" checked disabled>\n' +
                    '                            <span class="lever"></span>');
                $('#publish_date').prop('disabled', 'true');

            } else {
                //
            }


            var selected_tags = [{{json_decode($post->tags_id)}}];
            var tag_names = [
                @foreach($tags as $tag)
                        @if(in_array($tag->id,explode(",",json_decode($post->tags_id))))
                                '{{$tag->name}}',
                        @endif
                @endforeach
            ];

            for (let i = 0; i < selected_tags.length; i++) {
                var newOption = new Option(tag_names[i], selected_tags[i], true, true);
                $('#tags').append(newOption).trigger('change');
            }
        });
    </script>
@endsection