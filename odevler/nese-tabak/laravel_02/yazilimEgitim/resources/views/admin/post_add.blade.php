@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/backEnd/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backEnd/libs/ckeditor/samples/css/samples.css') }}">

@endsection
@section('content')
    <div class="row" id="newPost">
        <div class="col s12 ">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Makale Ekle<i class="material-icons right tooltipped"
                                                                   data-position="left" data-delay="50"
                                                                   data-tooltip="Get Code">more_vert</i></h5>
                    <form id="frm-post" action="{{route('post.store')}}" method="post">
                        @csrf
                        {{--name--}}
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name" name="name" type="text">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        {{--kategori adı--}}
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">clear_all</i>
                                <select name="category_id">
                                    <option value="" disabled selected>Lütfen Seçim Yapın</option>
                                    @foreach($category as $value)

                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <label>Kategori Adı</label>
                            </div>
                        </div>
                        {{--chips--}}
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">bookmark_border</i>

                                <div class="chips autocomplete-content input-field">
                                    <input class="input" id="tags_id"
                                           placeholder="Etiket Giriniz">
                                </div>

                            </div>
                        </div>
                        {{--makale  adı--}}
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">assignment</i>
                                <input id="post-name" name="title" type="text">
                                <label for="post-name">Makale Adı</label>
                            </div>
                        </div>
                        {{--ckeditör--}}
                        <div class="row">
                            <div class="row">
                                <div class="col s12">
                                    <div class="card">
                                        <div class="card-content">
                                            <h4 class="card-title">Ekle</h4>
                                            <div id="editor">
                                                 <textarea name="text" cols="50" rows="15" class="ckeditor">
                                                 </textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--status--}}
                        <div class="row">
                            <div class="input-field col s12 ">
                                <div class="switch">
                                    <label for="status">
                                        Pasif
                                        <input name="status" id="status" type="checkbox">
                                        <span class="lever"></span>
                                        Aktif
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button id="btnSave" class="btn green waves-effect btn-block" type="button">
                                    Kaydet
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/samples/js/sample.js') }}"></script>

    <script>
        <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    $('#frm-post').submit();
    </script>
    <script>
        $(document).ready(function ()
        {
            function inputValidation(inputArray, formID)
            {
                let validation = true;
                for (let i = 0; i < inputArray.length; i++)
                {
                    var inputInfo = inputArray[i];
                    var input = $('#' + inputInfo.id).val();
                    if (input.trim() == "")
                    {
                        Swal.fire({
                            icon: 'error',
                            title: inputInfo.alertTitle,
                            text: inputInfo.alertTextAttr + ' boş bırakılamaz!',
                            confirmButtonText: 'Tamam'
                        });
                        validation = false;
                    }
                }
                validation ? $('#' + formID).submit() : '';
            }

            $('#btnSave').click(function ()
            {
                let inputArray = [
                    {
                        id: 'name',
                        alertTextAttr: 'Makele Adı',
                        alertTextAttr: 'Makele Adı',
                        alertTitle: "Uyarı",
                    }
                ];
                inputValidation(inputArray, 'frm-post');
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });


        });


    </script>

@endsection
