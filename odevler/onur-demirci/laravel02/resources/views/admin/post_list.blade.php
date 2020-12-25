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
                    <a href="{{route('admin.post.add')}}" class="btn-floating waves-effect waves-light teal" title="Yeni Makale Ekle">
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
                            <th>Yayınlanma Tarihi</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $item)
                            <tr id="row{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deletePost" data-id="{{ $item->id }}" data-name="{{$item->title}}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="{{route('admin.post.edit',$item->id)}}" class="editPost"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>@if($item->image && file_exists('storage/'.$item->image))
                                            <img src="{{ asset('storage/'. $item->image) }}" alt="Post Image" style="width: 50px;">
                                    @else
                                        <small>Resim Seçilmedi</small>
                                    @endif
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->title}}</td>
                                <td>{{ $item->getUser->name }}</td>

                                <td>
                                    @if ($item->status)
                                        <a class="waves-effect waves-light btn green changePostStatus"
                                           data-id="{{ $item->id }}" data-name="{{$item->title}}">Aktif</a>
                                    @else
                                        <a class="waves-effect waves-light btn red changePostStatus"
                                           data-id="{{ $item->id }}" data-name="{{$item->title}}">Pasif</a>
                                    @endif
                                </td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->getCategory->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->publish_date)->format('d-m-Y H:i:s') }}</td>
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
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.changePostStatus').click(function ()
            {
                let dataID = $(this).data('id');
                let dataName = $(this).data('name');
                let self = $(this);
                $.ajax({
                    url: '{{route('admin.post.changeStatus')}}',
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
                            title: 'İşlem Başarılı',
                            text: dataName + " adlı makalenin durumu " + self[0].innerText
                                + " olarak güncellendi.",
                            confirmButtonText: 'Tamam'

                        })
                    },
                    error: function ()
                    {

                    }
                })

            });

            $('.deletePost').click(function ()
            {
                let dataID = $(this).data('id');
                let dataName = $(this).data('name');
                let self = $(this);
                Swal.fire({
                    title: 'Uyarı',
                    text: `${dataName} adlı makaleyi silmek istediğinize emin misiniz?`,
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
                                id: dataID,
                            },
                            async: false,
                            success: function (response)
                            {
                                $('#row' + dataID).remove();

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Uyarı',
                                    text: dataName + " adlı makale silindi",
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
        })
    </script>
@endsection
