@extends('layouts.admin')
@section('title')
    Makale Listesi
@endsection
@section('css')

@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Makale Listesi</h5>
                    <a href="{{route('admin.post')}}" class="btn-floating waves-effect waves-light teal"
                       title="Yeni Makale Ekle">
                        <i class="material-icons">add</i>
                    </a>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>İşlem</th>
                            <th>ID</th>
                            <th>Başlık</th>
                            <th>Kullanıcı Adı</th>
                            <th>Aktif/Pasif</th>
                            <th>Slug</th>
                            <th>Kategori</th>
                            <th>Paylaşım Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $item)
                            <tr id="row{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deleteCategory" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editPostList" class="editPostList modal-trigger"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->getUser->name }}</td>
                                <td>
                                    @if ($item->status)
                                        <a class="waves-effect waves-light btn green changeStatus"
                                           data-id="{{ $item->id }}">Aktif</a>
                                    @else
                                        <a class="waves-effect waves-light btn red changeStatus"
                                           data-id="{{ $item->id }}">Pasif</a>
                                    @endif
                                </td>

                                <td>{{ $item->slug}}</td>
                                <td>{{ $item->getCate->name}}</td>

                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s') }}</td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="editPostList" class="modal modalEdit">
        <div class="modal-content">
            <div class="row" >
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title activator">Makale Düzenleme</h5>
                            <form id="postEditForm" action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input name="title" id="titleEdit" type="text">
                                        <label for="titleEdit">Makale Adı</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col s12">
                                        <div class="form-group">

                        <textarea  name="content" id="ckeditor" cols="50" rows="15" class="ckeditor">


                        </textarea>



                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
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
                                <div class="row">
                                    <div class="input-field col s6">
                                        <button id="btnEdit" class="btn green waves-effect btn-block" type="button">
                                            Değişiklikleri Kaydet
                                        </button>
                                    </div>
                                    <div class="input-field col s6">
                                        <button class="btn red waves-effect btn-block modal-close" type="button">
                                            Vazgeç
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/samples/js/sample.js')}}"></script>

    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.deleteCategory').click(function () {
                let dataID = $(this).data('id');
                let self = $(this);
                Swal.fire({
                    title: 'Uyarı',
                    text: `${dataID} ID'li kategoriyi silmek istediğinize emin misiniz?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{route('admin.post.delete')}}',
                            method: 'POST',
                            data: {
                                id: dataID,
                            },
                            async: false,
                            success: function (response) {
                                $('#row' + dataID).remove();

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Uyarı',
                                    text: dataID + " id'li kategorinin silindi",
                                    confirmButtonText: 'Tamam'

                                })
                            },
                            error: function () {

                            }
                        })
                    }
                })

            });

            $('.changeStatus').click(function () {
                let dataID = $(this).data('id');
                let self = $(this);

                $.ajax({
                    url: '{{route('admin.post.changeStatus')}}',
                    method: 'POST',
                    data: {
                        id: dataID,
                    },
                    async: false,
                    success: function (response) {
                        if (response.status == 1) {
                            self[0].classList.remove('red');
                            self[0].classList.add('green');
                            self[0].innerText = "Aktif";
                        } else {
                            self[0].classList.remove('green');
                            self[0].classList.add('red');
                            self[0].innerText = "Pasif";
                        }

                        Swal.fire({
                            icon: 'success',
                            title: 'Uyarı',
                            text: dataID + " id'li kategorinin durumu şu anda " + self[0].innerText
                                + " olarak güncellendi.",
                            confirmButtonText: 'Tamam'

                        })
                    },
                    error: function () {

                    }
                })
            });


            $('.editPostList').click(function () {
                let dataID = $(this).data('id');
                let titleEdit = $('#titleEdit');
                let contentEdit = $('#ckeditor');
                let status = $('#statusEdit');


                let route = '{{route('admin.post.edit',['list'=>'listEdit']) }}';
                let routeUpdate = '{{route('admin.post.update',['list'=>'listEdit']) }}';

                route = route.replace('listEdit', dataID);
                routeUpdate = routeUpdate.replace('listEdit', dataID);

                $('#postEditForm').attr('action', routeUpdate);

                $.ajax({
                    url: route,
                    method: 'GET',
                    data: {
                        id: dataID,
                    },
                    async: false,
                    success: function (response) {

                        $('label[for="titleEdit"]').addClass('active');

                        let list = response.list;


                        titleEdit.val(list.title);


                        if (list.status) {
                            status.attr('checked', true);
                        } else {
                            status.attr('checked', false);
                        }
                    },
                    error: function () {

                    }
                })


            });


            $('#btnEdit').click(function () {
                var titleEdit = $('#titleEdit').val();

                if (titleEdit.trim() == '') {
                    Swal.fire({
                        title: 'Uyarı',
                        text: `İlgili Alanlar Boş Bırakılamaz`,
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Tamam',
                    })
                } else {
                    $('#postEditForm').submit();
                }
            });

        });
    </script>
@endsection
