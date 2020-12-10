@php
    //dd($category)
@endphp
@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css"
          href="{{asset('/assets/backEnd/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/backEnd/libs/ckeditor/samples/css/samples.css')}}">
    <link href="{{asset('/assets/backEnd/extra-libs/prism/prism.css')}}" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col s12 ">
            <div class="card">
                <div class="card-content">
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="title" type="text">
                                <label for="name3">Başlık</label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="row">
                                <div class="input-field col s5 m3">
                                    <select>
                                        <option value="" disabled selected>Lütfen Kategori Seçin</option>
                                        @foreach($category as  $key=>$value)
                                            <option value="{{$value->category_id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="input-field col s3 m3">
{{--                                    <select multiple>--}}
{{--                                        <option value="" disabled >Etiket Seçimi Yapın  </option>--}}
{{--                                        @foreach($category as  $key=>$value)--}}
{{--                                            <option value="{{$value->category_id}}">{{$value->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
                                    <h5 class="card-title ">Form Initial Chips
                                        <i class="material-icons right tooltipped"data-position="left" data-delay="50" data-tooltip="Get Code">more_vert</i>
                                    </h5>
                                        <h6 class="card-subtitle">Set initial tags.</h6>
                                        <div class="chips chips-initial"></div>

                            </div>
                            <div class="col s3">
                                <div class="card">
                                    <div class="card-content">

                                        <div class="switch">
                                            <label
                                                style="font-size: 20px;color: #0b0b0b;  margin-left: 18px;   margin-top: -6%; font: message-box; ">Durum</label>
                                            <label>
                                                Pasif
                                                <input checked type="checkbox">
                                                <span class="lever"></span> Aktif
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">İçerik</h4>
                            <div >
                                <textarea name="posts"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Resim Ekle</span>
                            <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Resim Seçimi Yapın">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right btn-block PostCreate" type="button">
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

    <script>

        $(document).ready(function () {
            $(".PostCreate").click(function () {

            })
        })

    </script>

    <script src="{{asset('/assets/backEnd/extra-libs/prism/prism.js')}}"></script>
    <script src="{{asset('/assets/backEnd/libs/jquery-match-height/dist/jquery.matchHeight-min.js')}}"></script>

    <script>
        CKEDITOR.replace( 'posts' );
    </script>
    <script>
        $(function(){
            // Match the height of each card in a row
            setTimeout(function(){
                $('.row.match-height').each(function() {
                    $(this).find('.card').not('.card .card').matchHeight(); // Not .card .card prevents collapsible cards from taking height
                });
            },500);
        });
    </script>
@endsection
