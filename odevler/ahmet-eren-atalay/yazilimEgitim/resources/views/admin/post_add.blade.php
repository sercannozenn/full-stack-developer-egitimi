@extends('layouts.admin')
@section('title')
    Makale Ekleme
@endsection
@section('css')
    <
@endsection
@section('content')
    <div class="l12">
        <div class="row">
            <form id="frmPost" action="{{route('admin.posts.add')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Yeni Makale Ekleme</h5>
                            <div class="row">


                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="title" id="icon_prefix2" class="titlePost materialize-textarea"></textarea>
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
                                    @foreach($PostCategory ?? '' as $categoryItem)
                                        <option value="{{$categoryItem->id}}">{{$categoryItem->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Etiket Ekleyiniz</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="tags" name="tags_id">
                                        <option value="" disabled selected>Etiket Seçiniz</option>
                                        @foreach($Tags ?? '' as $tagsItem)
                                            <option value="{{$tagsItem->id}}">{{$tagsItem->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="form-group">
                        <textarea name="content" id="ckeditor" cols="50" rows="15" class="ckeditor contentpost">
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
                }else if(content.trim() == '')
                {
                    Swal.fire({
                        title: 'Uyarı',
                        text: `İlgili Alanlar Boş Bırakılamaz`,
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Tamam',
                    })
                }
                else {

                    $('#frmPost').submit();
                }


            });
        });
    </script>
@endsection
