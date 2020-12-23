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
                            <tr id="tag{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deleteTag" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editTag" class="editTag modal-trigger"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
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


    <div id="editTag" class="modal modalEdit">
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
            function inputValidation(inputArray, formID)
            {
                let validation = true;
                for (let i = 0; i < inputArray.length; i++)
                {
                    var inputInfo = inputArray[i];
                    var input = $('#' + inputInfo.id ).val();
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
            $('#btnSave').click(function (){
                let inputArray = [
                    {
                        id: 'name',
                        alertTextAttr: 'Etiket Adı',
                        alertTitle: "Uyarı",
                    }
                ];
                inputValidation(inputArray, 'frmTag');
            })

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

        $('.editTag').click(function ()
        {
            let dataID = $(this).data('id');
            let nameEdit = $('#nameEdit');
            let status = $('#statusEdit');
            let self = $(this);

            let route = '{{ route('tag.edit', ['tag' => 'tagEdit']) }}';
            let routeUpdate = '{{ route('tag.update', ['tag' => 'tagEdit']) }}';
            route = route.replace('tagEdit', dataID);
            routeUpdate = routeUpdate.replace('tagEdit', dataID);
            $('#editTagForm').attr('action', routeUpdate);
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
                    let tag = response.tag;
                    nameEdit.val(tag.name);
                    if (tag.status)
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


        });

        $('#btnEdit').click(function ()
        {
            $('#editTagForm').submit();

        });
    </script>
@endsection
