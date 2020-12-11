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
                    <form id="PostForm">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="title" name="title" type="text">
                                <label for="name3">Başlık</label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div class="row">
                                <div class="col s8 m3">
                                    <select name="category_id" >
                                        <option value="" disabled selected>Lütfen Kategori Seçin</option>
                                        @foreach($category as  $key=>$value)
                                            <option name="category_id" value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col s4">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="switch">
                                                <label
                                                    style="font-size: 20px;color: #0b0b0b;  margin-left: 18px;   margin-top: -6%; font: message-box; ">Durum</label>
                                                <label>
                                                    Pasif
                                                    <input name="status" checked type="checkbox">
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
                                    <div>
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
                                    <input name="image" class="file-path validate" type="text" placeholder="Resim Seçimi Yapın">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col s12 l4">
                                <div class="card x-small">
                                    <div class="card-content">
                                        <h5 class="card-title activator">Etiket
                                        </h5>
                                        <h6 class="card-subtitle">Etiket Eklemek İçin Enter Tuşuna Basın </h6>
                                        <div class="chips" name="tags_id" id="tagPostSearch"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right btn-block PostCreate"
                                        type="submit">
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

      const myForm=document.getElementById("PostForm");

      myForm.addEventListener("submit",(e)=>{

          e.preventDefault();

          const  request=new XMLHttpRequest();
          request.open("post","/admin/post/add");
          request.onload=function () {
              console.log(request.responseText);

          }
          request.send(new FormData(myForm));

      });

    </script>


    <script src="{{asset('/assets/backEnd/extra-libs/prism/prism.js')}}"></script>
    <script src="{{asset('/assets/backEnd/libs/jquery-match-height/dist/jquery.matchHeight-min.js')}}"></script>

    <script>
        CKEDITOR.replace('posts');
    </script>

@endsection
