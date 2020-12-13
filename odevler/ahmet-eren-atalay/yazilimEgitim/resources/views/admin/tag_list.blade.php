@extends('layouts.admin')
@section('title')
    Etiket Listesi
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Etiket Listesi</h5>
                    <a class="btn-floating waves-effect waves-light teal  modal-trigger" title="Yeni Etiket Ekle"
                       href="#newTags">
                        <i class="material-icons">add</i>
                    </a>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>İşlem</th>
                            <th>ID</th>
                            <th>Etiket Adı</th>
                            <th>Kullanıcı Adı</th>
                            <th>Aktif/Pasif</th>
                            <th>Oluşturma Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $item)
                            <tr id="row{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deleteTag" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editTagsList" class="editPostList modal-trigger"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->name}}</td>
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

                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s') }}</td>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="newTags" class="modal">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title activator">Etiket Ekleme Formu</h5>
                            <form id="formTags" action="{{route('tags.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input name="name" id="name" type="text">
                                        <label for="name">Etiket Adı</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
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
                                    <div class="input-field col s6">
                                        <button id="btnSave" class="btn green waves-effect btn-block" type="button">
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

    <div id="editTagsList" class="modal modalEdit">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title activator">Kategori Düzenleme</h5>
                            <form id="editTagList" action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input name="name" id="nameEdit" type="text">
                                        <label for="nameEdit">Etiket Adı</label>
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
    <script>
        $(document).ready(function () {

            $('#btnSave').click(function () {

                var tagName = $('#name').val();

                if (tagName.trim() == "") {
                    Swal.fire({
                        title: 'Uyarı',
                        text: `İlgili Alanlar Boş Bırakılamaz`,
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Tamam',
                    })
                } else {
                    $('#formTags').submit();
                }


            })

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.changeStatus').click(function () {
                let dataID = $(this).data('id');
                let self = $(this);

                $.ajax({
                    url: '{{route('admin.tags.changeStatus')}}',
                    method: 'POST',
                    data: {
                        id: dataID,
                        {{--//'_token': '{{ csrf_token() }}'--}}
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

            })

            $('.deleteTag').click(function () {
                let dataID = $(this).data('id');
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
                            url: '{{route('admin.tags.delete')}}',
                            method: 'POST',
                            data: {
                                id: dataID
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

            })


            $('.editPostList').click(function () {

                let dataID = $(this).data('id');
                let nameEdit = $('#nameEdit');
                let status = $('#statusEdit');

                let route = '{{ route('tags.edit', ['tag' => 'tagsEdit']) }}';
                let routeUpdate = '{{ route('tags.update', ['tag' => 'tagsEdit']) }}';

                route = route.replace('tagsEdit',dataID);
                routeUpdate = routeUpdate.replace('tagsEdit',dataID);
                $('#editTagList').attr('action', routeUpdate);

                $.ajax({
                    url: route,
                    method: 'GET',
                    data: {
                        id: dataID,
                    },
                    async: false,
                    success: function (response)
                    {
                        $('label[for="nameEdit"]').addClass('active');
                        let tags = response.tags;

                        nameEdit.val(tags.name);
                        if (tags.status)
                        {
                            status.attr('checked', true);
                        }
                        else
                        {
                            status.attr('checked', false);
                        }
                    },
                    error: function ()
                    {

                    }
                })


            })

            $('#btnEdit').click(function () {
                var nameEdit = $('#nameEdit').val();

                if (nameEdit.trim() == '') {
                    Swal.fire({
                        title: 'Uyarı',
                        text: `İlgili Alanlar Boş Bırakılamaz`,
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Tamam',
                    })
                } else {
                    $('#editTagList').submit();
                }
            });

        });

    </script>
@endsection
