@php
    //dd($category)
@endphp
@extends('layouts.admin')

@section('title')
    Makale Ekleme
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <style>
        input.select-dropdown.dropdown-trigger {
            display: none;
        }
    </style>


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
                            <div class="col s6 14 ">
                                <div class="card ">
                                    <div class="card-content">
                                        <h5 class="card-title activator">Etiket
                                        </h5>
                                        <select id="searc-tag" class="searc-tag"></select>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>

      const myForm=document.getElementById("PostForm");

      myForm.addEventListener("submit",(e)=>{

          e.preventDefault();

          const  request=new XMLHttpRequest();
          request.open("post","/admin/post/add");
          request.onload=function () {
              console.log(request.responseText);

          };
          request.send(new FormData(myForm));

      });

    </script>

<script>
    {{--$(document).ready(function () {--}}
    {{--    $("#tagPostSearch").keyup(function () {--}}
    {{--        const post=$('#tagPostSearch').val();--}}
    {{--        console.log(post);--}}
    {{--        $.ajax(--}}
    {{--            {--}}
    {{--                url: '{{route('admin.post.search')}}',--}}
    {{--                method: 'GET',--}}
    {{--                data: {--}}

    {{--                    data: post--}}
    {{--                },--}}
    {{--                async: false,--}}
    {{--                success: function (response) {--}}
    {{--                    console.log(response);--}}
    {{--                    // Swal.fire({--}}
    {{--                    //     icon: 'success',--}}
    {{--                    //     title: 'Uyarı',--}}
    {{--                    //     text: "Kayıt İşlemi  Başarılı",--}}
    {{--                    //     confirmButtonText: 'Tamam'--}}
    {{--                    //--}}
    {{--                    // })--}}
    {{--                },--}}
    {{--                // error:function () {--}}
    {{--                //     Swal.fire({--}}
    {{--                //         icon: 'danger',--}}
    {{--                //         title: 'Uyarı',--}}
    {{--                //         text: "Kayıt İşlemi  Başarısız",--}}
    {{--                //         confirmButtonText: 'Tamam'--}}
    {{--                //--}}
    {{--                //     })--}}
    {{--                // }--}}
    {{--            },--}}
    {{--        )--}}
    {{--    });--}}

    {{--})--}}
</script>

 <script>
     $('#searc-tag').select2({
         ajax: {
            // url: '{{route('admin.post.search')}}',
            url: '{{route('admin.post.search')}}',
             dataType: 'json',
             delay: 250,
             data: function (params) {
                 return {
                     q: params.term, // search term
                     page: params.page,
                 };
             },
         },
         async:false,
         succes:function(response){
             console.log(response);
         },

         placeholder: 'Etiket Yazın',
         minimumInputLength: 1 +'Karakter Girin',
     });
 </script>


    <script>
        CKEDITOR.replace('posts');
    </script>

@endsection
