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
                    <a href="{{route('admin.tag.add')}}" class="btn-floating waves-effect waves-light teal"
                       title="Yeni Tag Ekle">
                        <i class="material-icons">add</i>
                    </a>
                    <p>Add <code>class="responsive-table"</code> to the table tag to make the table horizontally
                        scrollable on smaller screen widths.</p>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>İşlemler</th>
                            <th>ID</th>
                            <th>Etiket Adı</th>
                            <th>Aktif/Pasif</th>
                            <th>Kullanıcı Adı</th>
                            <th>Oluşturma Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key=>$value )
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="deleteTags" data-id="{{ $value->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editTag" class="editTag modal-trigger"
                                       data-id="{{ $value->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>{{$value->id}}</td>
                                <td><code> {!!$value->name!!}</code></td>
                                <td>
                                    <a class="btn btn-danger">Aktif</a>

                                </td>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>{{$value->updated_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
                            <h5 class="card-title activator">Tag Düzenleme</h5>
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
                                    <div class="input-field col s6">
                                        <button id="btnEdit" class="btn green waves-effect btn-block" type="button">
                                            Güncelle
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
{{--    Tag Delete  JS--}}
    <script>
        $('.deleteTags').click(function ()
        {
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
            }).then((result) =>
            {
                if (result.isConfirmed)
                {
                    $.ajax({
                        url: '{{route('admin.tag.delete')}}',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
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
                                text: dataID + " id'li kategorinin silindi",
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
    </script>
{{--    Tag Edit - Update  Js --}}
    <script>
        $('.editTag').click(function ()
        {   let dataID = $(this).data('id');
            let nameEdit = $('#nameEdit');
            //let self = $(this);
            let route = '{{ route('admin.tag.edit') }}';
            let routeUpdate = '{{ route('admin.tag.update', ['Tag' => 'TagEdit']) }}';
            route = route.replace('TagEdit', dataID);
            console.log(route);
          routeUpdate = routeUpdate.replace('TagEdit', dataID);
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
                   // console.log(response);
                    $('label[for="nameEdit"]').addClass('active');
                    let tag = response.tag;
                    nameEdit.val(tag.name);
                },
                error: function ()
                {

                }
            })


        });
    </script>


@endsection
