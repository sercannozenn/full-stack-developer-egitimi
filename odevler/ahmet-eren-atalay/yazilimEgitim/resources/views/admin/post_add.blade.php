@extends('layouts.admin')
@section('title')

    <?php
    if ($post) {
        $title = "Makale Düzenleme";
        $route= route('admin.post.edit', ['id' => $post->id]);
    } else {
        $title = "Makale Ekleme";
        $route= route('admin.posts.add');
    }
    ?>

    {{ $title }}
@endsection
@section('css')
@endsection
@section('content')
    <div class="l12">
        <div class="row">
            <form id="frmPost" action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">{{ $title }}</h5>
                            <div class="row">


                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input name="title" id="icon_prefix2"
                                              class="titlePost materialize-textarea" value="{{ $post ? $post->title : '' }}" />
                                    <label for="icon_prefix2">Başlık alanı</label>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Kategori Ekleyiniz</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="category" name="category_id">
                                        <option value="" disabled selected>Kategori Seçiniz</option>
                                        @foreach($PostCategory as $categoryItem)
                                            <option value="{{ $categoryItem->id }}"
                                                {{ $post ? ($post->category_id == $categoryItem->id ? 'selected' : '') :'' }}> {{$categoryItem->name}}

                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card x-small" style="overflow: visible;">
                        <div class="card-content">
                            <h5 class="card-title activator">Etiket Girebilirsiniz<i
                                    class="material-icons right tooltipped" data-position="left" data-delay="50"
                                    data-tooltip="Get Code">more_vert</i></h5>
                            <h6 class="card-subtitle">Etiket otomatik olabilir yazılacak</h6>
                            <div class="chips chips-autocomplete input-field"><input class="input" name="tags" value="">
                                <ul id="" class="autocomplete-content dropdown-content" tabindex="0" style=""></ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col s12">
                    <div class="form-group">
                        <textarea name="content" id="ckeditor" cols="50" rows="15" class="ckeditor contentpost">
                            {!! $post ? $post->content : '' !!}
                        </textarea>
                    </div>
                </div>
                <div class="col s12 m-t-10">
                    <input class="btn btn-block blue" type="button" id="btnSave" name="btnSave" value="Kaydet">
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/samples/js/sample.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#btnSave').click(function () {

                var title = $('.titlePost').val();
                var content = $('.contentpost').val();


                if (title.trim() == '') {
                    Swal.fire({
                        title: 'Uyarı',
                        text: `İlgili Alanlar Boş Bırakılamaz`,
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Tamam',
                    })
                } else {

                    $('#frmPost').submit();
                }


            });
        });
    </script>
@endsection
