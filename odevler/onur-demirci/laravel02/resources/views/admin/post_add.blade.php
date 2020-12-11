@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <form method="POST" action="{{ route('posts.store') }}" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="title" name="title" type="text" class="validate" required>
                    <label for="title">Makale Başlığı</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="category" required>
                        <option value="" disabled selected>Kategori Seç</option>
                        @foreach($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <div id="tags" class="chips chips-autocomp"></div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="publish_date" type="text" placeholder="Yayınlanma tarihi seç" class="post-date">
                </div>
                <div class="input-field col s6">
                    <input name="publish_time" type="text" placeholder="Yayınlanma saati seç" class="post-time">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
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
                <textarea name="post-content" id="editor1" rows="10" cols="80" required>
            </textarea>
            </div>
            <hr>
            <button class="btn waves-effect waves-light" type="submit">Gönderiyi Kaydet
                <i class="material-icons right">send</i>
            </button>
       </form>
    </div>
@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>

        $(document).ready(function () {
            var tag_map = new Map([]);

            @foreach($tags as $item)
            tag_map.set('{{ $item->name }}', null);
            @endforeach

            var tags = Object.fromEntries(tag_map);

            $('.chips-autocomp').chips({
                autocompleteOptions: {
                    data: tags,
                },
                placeholder: 'Etiket ekle',
                secondaryPlaceholder: '+'
            });

            $('.post-time').timepicker();
            $('.post-date').datepicker();

            CKEDITOR.replace( 'editor1' );
        });
    </script>
@endsection
