@extends('layouts.admin')
@section('title')
    Makale Ekleme
@endsection
@section('css')
@endsection
@section('content')

    <div class="l12">
        <div class="row">
            <form id="frmPost" action="{{route('admin.post.add')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Makale Başlığı</h5>
                            <div class="row">


                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="title" id="title" class="titlePost materialize-textarea"></textarea>
                                    <label for="title">Başlık</label>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Yeni Makale</h5>
                            <div class="row">


                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="content" id="content" class="titlePost materialize-textarea"></textarea>
                                    <label for="content">İçerik</label>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Kategori</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="category" name="category_id">

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Etiket</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="tags" name="tags_id">

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <div class="switch">
                            <label for="statusPost">
                                Pasif
                                <input name="status" id="statusPost" type="checkbox">
                                <span class="lever"></span>
                                Aktif
                            </label>
                        </div>
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

    <script>
        $(document).ready(function (){
           $('#btnSave').click(function (){

               var title= $('#title').val();
               var content= $("#content").val();

               if(title.trim()==""){
                   Swal.fire({
                       icon: 'warning',
                       title: 'Uyarı',
                       text: 'Makale Başlığı Boş Bırakılamaz',
                       confirmButtonText: 'Tamam'
                   });
               }
               else if(content.trim()==""){
                   Swal.fire({
                       icon: 'warning',
                       title: 'Uyarı',
                       text: 'Makale içeriği Boş Bırakılamaz',
                       confirmButtonText: 'Tamam'
                   });
               }

               else {
                   $('#frmPost').submit();

               }
           });



        });

    </script>
@endsection

