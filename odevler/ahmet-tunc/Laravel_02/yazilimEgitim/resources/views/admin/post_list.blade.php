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
                    <h5 class="card-title">Gönderi Listesi</h5>
                    <a class="btn-floating waves-effect waves-light teal" href="{{route('admin.post.addview')}}"
                       title="Yeni Gönderi Ekle">
                        <i class="material-icons">add</i>
                    </a>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>İşlem</th>
                            <th>Resim</th>
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
                        @foreach($Post as $item)
                            <tr id="row{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deletePost" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash red-text"></i>
                                    </a>
                                    <a href="#editPost" class="editPost" data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  blue-text"></i>
                                    </a>
                                </td>
                                <td>
                                    <img name="image" id="image" src="{{asset($item->image)}}" width="50px" alt="">
                                </td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->getUser->name}}</td>
                                <td>
                                    @if ($item->status)
                                        <a class="waves-effect waves-light btn green changeStatus"
                                           data-id="{{ $item->id }}">Aktif</a>
                                    @else
                                        <a class="waves-effect waves-light btn red changeStatus"
                                           data-id="{{ $item->id }}">Pasif</a>
                                    @endif
                                </td>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->getCategory->name}}</td>
                                <td>{{$item->publish_date}}</td>
                                <td>{{$item->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="updateModal" class="modal fade" aria-hidden="true">
        <div class="">
            <div class="row">
                <h5 class="card-title activator center bg-info p-t-10 p-b-10" style="color: #FFFFFF">Makale Düzenle</h5>
            </div>
        </div>
        <div class="modal-content">
            <div class="row">
                <form id="editPostForm" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col s12 col-sm-12 m6">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">title</i>
                                        <input id="title" name="title" type="text">
                                        <label for="title">Makale Başlığı</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">local_offer</i>
                                        <select id="category" name="category_id">
                                            <option value="" disabled selected>Kategori Seçiniz</option>
                                        @foreach($category as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">local_offer</i>
                                        <select id="tag" name="tags_id[]" multiple>
                                            <option value="" disabled selected>Etiket Seçiniz</option>
                                        @foreach($tag as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 col-sm-12 m6">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="file-field input-field col s12">
                                        <i class="material-icons prefix">add_a_photo</i>

                                        <div class="btn white darken-1">
                                            <input name="image" type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate imgText" type="text"
                                                   placeholder="Makale resmi seçiniz..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="datetime" name="publish_date" type="text" onfocus="this.type='datetime-local'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field-field input-field col s12 m-l-5">
                                        <label class="form-control">
                                            <input id="status" name="status" type="checkbox" checked="checked"/>
                                            <span>Aktif / Pasif</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="form-group">
                        <textarea name="ckeditor" id="ckeditor" cols="50" rows="15" class="ckeditor">
                        </textarea>
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
@endsection
@section('js')
    <script src="{{asset('assets/backEnd/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backEnd/libs/ckeditor/samples/js/sample.js')}}"></script>
    <script>
        $(document).ready(function ()
        {


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.deletePost').click(function ()
            {
                let dataID = $(this).data('id');
                console.log(dataID);
                Swal.fire({
                    title: 'Uyarı',
                    text: `${dataID} ID'li gönderiyi silmek istediğinize emin misiniz?`,
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
                            url: '{{route('admin.post.delete')}}',
                            method: 'POST',
                            data: {
                                id: dataID
                            },
                            async: false,
                            success: function (response)
                            {
                                $('#row' + dataID).remove();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Başarılı',
                                    text: dataID + " id'li gönderi başarıyla silindi",
                                    confirmButtonText: 'Tamam'

                                })
                            },
                            error: function ()
                            {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Başarısız',
                                    text: dataID + " id'li gönderi silme işlemi başarısızlıkla sonuçlandı",
                                    confirmButtonText: 'Tamam'

                                })
                            }
                        });
                    }
                });

            });


            $('.editPost').click(function(){
                let dataID = $(this).data('id');
                let route = '{{ route('view.edit', ['view' => 'viewEdit']) }}';
                let routeUpdate = '{{ route('view.update', ['view' => 'viewEdit']) }}';
                route = route.replace('viewEdit', dataID);
                routeUpdate = routeUpdate.replace('viewEdit', dataID);
                $('#editPostForm').attr('action', routeUpdate);
                $.ajax({
                    url: route,
                    method: 'GET',
                    data: {
                        id: dataID,
                    },
                    async: false,
                    success: function (response)
                    {
                        $('label[for="title"]').addClass('active');
                        $('#title').val(response.post.title);
                        $('.imgText').val(response.post.image);
                        CKEDITOR.instances['ckeditor'].setData(response.post.content);
                        $("#datetime").val(response.post.publish_date);


                        if(response.post.status){
                            $('#status').attr('checked',true);
                        }else{
                            $('#status').attr('checked',false);
                        }
                    },
                    error: function ()
                    {

                    }

                })
                $('#updateModal').modal('open');



            });


            $('#btnEdit').click(function ()
            {
                if (!$('#title').val())
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Uyarı',
                        text: 'Makale adı boş bırakılamaz',
                        confirmButtonText: 'Tamam'
                    });
                }
                else
                {
                    $('#editPostForm').submit();
                }

            });


            $('.changeStatus').click(function ()
            {
                let dataID = $(this).data('id');
                let self = $(this);
                $.ajax({
                    url: '{{route('admin.post.changeStatus')}}',
                    method: 'POST',
                    data: {
                        id: dataID,
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
                            text: dataID + " id'li makalenin durumu şu anda " + self[0].innerText
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
