@php
    //dd($category)
@endphp
@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
    <link rel="stylesheet" type="text/css"
          href="{{asset('/assets/backEnd/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/backEnd/libs/ckeditor/samples/css/samples.css')}}">
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
                                    <select multiple>
                                        <option value="" disabled >Etiket Seçimi Yapın  </option>
                                        @foreach($category as  $key=>$value)
                                            <option value="{{$value->category_id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
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
                            <div id="editor" style="visibility: hidden; display: none;">
                                <h6>Makale Yaz</h6>
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

    <script src="{{asset('/assets/backEnd/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('/assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/assets/backEnd/libs/ckeditor/samples/js/sample.js')}}"></script>
    <script>
        //default
        initSample();

        //inline editor
        // We need to turn off the automatic editor creation first.
        CKEDITOR.disableAutoInline = true;

        CKEDITOR.inline('editor2', {
            extraPlugins: 'sourcedialog',
            removePlugins: 'sourcearea'
        });

        var editor1 = CKEDITOR.replace('editor1', {
            extraAllowedContent: 'div',
            height: 460
        });
        editor1.on('instanceReady', function () {
            // Output self-closing tags the HTML4 way, like <br>.
            this.dataProcessor.writer.selfClosingEnd = '>';

            // Use line breaks for block elements, tables, and lists.
            var dtd = CKEDITOR.dtd;
            for (var e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
                this.dataProcessor.writer.setRules(e, {
                    indent: true,
                    breakBeforeOpen: true,
                    breakAfterOpen: true,
                    breakBeforeClose: true,
                    breakAfterClose: true
                });
            }
            // Start in source mode.
            this.setMode('source');
        });
    </script>
@endsection
