@extends('layouts.admin')
@section('title')
    Etiket Listesi
@endsection
@section('css')
    <style>
        .tags:focus {
            border: none !important;
            box-shadow: unset !important;
        }

        .tags-input-div {
            border: none;
            border-bottom: 1px solid #9e9e9e;
            box-shadow: none;
            margin: 0 0 8px 0;
            min-height: 45px;
            outline: none;
            transition: all .3s;
        }

        .tags-input-field {
            position: relative !important;
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .tags-input-div .tags {
            background: none;
            border: 0 !important;
            color: rgba(0, 0, 0, 0.6);
            display: inline-block;
            font-size: 16px;
            height: 3rem;
            line-height: 32px;
            outline: 0;
            margin: 0;
            padding: 0 !important;
            width: 120px !important;
        }

        .tags-list {
            cursor: pointer;
            display: block;
            opacity: 1;
            transform: scaleX(1) scaleY(1);
            width: 100%;
            left: 0;
            top: 0;
            height: 50px;
            transform-origin: 0 0;
        }

        .tags-list-absolute {
            background-color: #fff;
            margin: 0;
            min-width: 100px;
            overflow-y: auto;
            opacity: 1;
            position: absolute;
            left: 0;
            top: 55px !important;
            z-index: 9999;
            transform-origin: 0 0;
        }

        .tags-list-item {
            clear: both;
            color: rgba(0, 0, 0, 0.87);
            cursor: pointer;
            min-height: 50px;
            line-height: 1.5rem;
            width: max-content;
            text-align: left;
            display: inline-block;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.07), 0 3px 1px -2px rgba(0, 0, 0, 0.02), 0 1px 5px 0 rgba(0, 0, 0, 0.02);
        }

        .tags-list-item:hover {
            background-color: #eeeeee;
        }

        .tags-list-item span {
            font-size: 16px;
            color: #5e35b1;
            display: inline-block;
            line-height: 22px;
            padding: 14px 16px;
        }

        .tags-margin {
            margin-top: 0;
            margin-bottom: 0;
        }

        .tags-select-item {
            display: inline-block;
            height: 32px;
            font-size: 13px;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.6);
            line-height: 32px;
            padding: 0 12px;
            border-radius: 16px;
            background-color: #e4e4e4;
            margin-bottom: 5px;
            margin-right: 5px;
        }

        div.tags-input-div:focus-within {
            border-bottom: 10px solid #5e35b1 !important;
        }
    </style>

@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Kategori Listesi</h5>
                    <a class="btn-floating waves-effect waves-light teal  modal-trigger" title="Yeni Makale Ekle"
                       href="#newTag">
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
                        @foreach($list as $item)
                            <tr id="row{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deleteTag" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editCategory" class="editCategory modal-trigger"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->getUser->name }}</td>
                                {{--                                <td>{{ $item->userName }}</td>--}}
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
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="newTag" class="modal">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title activator">Etiket Ekleme Formu</h5>
                            <form id="frmTag" action="{{route('tag.store')}}" method="POST">
                                @csrf
                                {{--chips--}}
                                <div class="row">
                                    <div class="input-field col s12">

                                        <div class="tags-input-div tags-input-field">
                                            <input name="tagName" type="text" class="tags input"  id="tags_id" placeholder="Etiket Giriniz">
                                            <ul class="tags-list tags-list-absolute tags-margin">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="switch">
                                            <label for="status">
                                                Pasif
                                                <input class="changeStatus" name="status" id="status" type="checkbox">
                                                <span class="lever"></span>
                                                Aktif
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <button id="btnSave" class="btn green waves-effect btn-block" type="button">
                                            Kaydet
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


    <div id="editCategory" class="modal modalEdit">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title activator">Etiket Ekleme</h5>
                            <form id="editTagForm" action="" method="POST">
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
                                           Kaydet
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
        $(document).ready(function(){
           $('#btnSave').click(function(){

             $('#frmTag').submit();
           });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.deleteTag').click(function ()
        {
            let dataID = $(this).data('id');
            let self = $(this);
            Swal.fire({
                title: 'Uyarı',
                text: `${dataID} ID'li etiketi silmek istediğinize emin misiniz?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet',
                cancelButtonText: 'Hayır'
            }).then((result) =>
            {
                if (result.isConfirmed)
                {
                    $.ajax({
                        url: '{{route('admin.tag.delete')}}',
                        method: 'POST',
                        data: {
                            id: dataID,
                        },
                        async: false,
                        success: function (response)
                        {
                            $('#row' + dataID).remove();

                            Swal.fire({
                                icon: 'success',
                                title: 'Uyarı',
                                text: dataID + " id'li etiket silindi",
                                confirmButtonText: 'Tamam'

                            })
                        },
                        error: function ()
                        {

                        }
                    })
                }
            })

        });

        $('.changeStatus').click(function ()
        {
            let dataID = $(this).data('id');
            let self = $(this);
            $.ajax({
                url: '{{route('admin.tag.changeStatus')}}',
                method: 'POST',
                data: {
                    id: dataID,
                    {{--//'_token': '{{ csrf_token() }}'--}}
                },
                async: false,
                success: function (response)
                {
                    if (response.status == 1)
                    {
                        self[0].classList.remove('red');
                        self[0].classList.add('green');
                        self[0].innerText = "Aktif";
                    }
                    else
                    {
                        self[0].classList.remove('green');
                        self[0].classList.add('red');
                        self[0].innerText = "Pasif";
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Uyarı',
                        text: dataID + " id'li etiketin durumu şu anda " + self[0].innerText
                            + " olarak güncellendi.",
                        confirmButtonText: 'Tamam'

                    })
                },
                error: function ()
                {

                }
            })
        });
        });
    </script>
@endsection
