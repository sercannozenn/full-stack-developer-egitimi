@extends('layouts.admin')
@section('title')
    Makale Listesi
    <?php
    if (isset($post))
    {

        $postIsset = true;

    }
    else
    {

        $postIsset = false;

    }


    ?>
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Makale Listesi</h5>
                    <a class="btn-floating waves-effect waves-light teal" title="Yeni Makale Ekle"
                       href="{{ route('post.create') }}">
                        <i class="material-icons">add</i>
                    </a>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>İşlem</th>
                            <th>Başlık</th>
                            <th>Kullanıcı Adı</th>
                            <th>Aktif/Pasif</th>
                            <th>Slug</th>
                            <th>Kategori</th>
                            <th>Resim</th>
                            <th>Paylaşım Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr id="post{{ $item->id }}">

                                <td>{{ $item->id }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="deletePost" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="{{ route('post.edit', $item->id) }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
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
                                <td>
                                    {{ $item->slug }}
                                </td>
                                <td>
                                    {{$item->getCategory->name}}
                                </td>
                                <td>
                                    @if ($item->image && file_exists('storage/' .  $item->image))
                                        <img src="{{ asset('storage/'.  $item->image) }}" width="100">
                                    @else
                                        <img src="{{ asset('assets/images/default.jpg') }}" width="100">
                                    @endif
                                    {{--                                    <img src="{{ asset('storage/'.$item->image) }}" width="100" alt="">--}}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s')}}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s')}}</td>
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
                let route = '{{route('post.destroy', 'postID')}}';
                route = route.replace('postID', dataID);
                Swal.fire({
                    title: 'Uyarı',
                    text: `${dataID} ID'li postu silmek istediğinize emin misiniz?`,
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
                            url: route,
                            method: 'POST',
                            data: {
                                '_method': 'DELETE'
                            },
                            async: false,
                            success: function (response)
                            {
                                document.getElementById("post" + dataID).remove();

                                Swal.fire({
                                    title: 'Başarılı',
                                    text: `${dataID} ID'li post silinmiştir.`,
                                    icon: 'success',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Tamam',
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
                            title: 'Uyarı',
                            text: dataID + " id'li kategorinin durumu şu anda " + self[0].innerText
                                + " olarak güncellendi.",
                            confirmButtonText: 'Tamam'

                        })
                    },
                    error: function ()
                    {

                    }
                })

            });

            {{--$('.changeStatus').click(function ()--}}
            {{--{--}}
            {{--    let dataID = $(this).data('id');--}}
            {{--    let self = $(this);--}}
            {{--    let route = '{{route('admin.post.changeStatus')}}';--}}

            {{--    $.ajax({--}}
            {{--        url: route,--}}
            {{--        method: 'POST',--}}
            {{--        data: {--}}
            {{--            id: dataID--}}
            {{--        },--}}
            {{--        async: false,--}}
            {{--        success: function (response)--}}
            {{--        {--}}

            {{--            let changeStatusVal = response.status;--}}



            {{--            if (changeStatusVal == 1)--}}
            {{--            {--}}
            {{--                self[0].classList.remove('red');--}}
            {{--                self[0].classList.add('green');--}}
            {{--                self[0].innerText = "Aktif";--}}
            {{--            }--}}
            {{--            else--}}
            {{--            {--}}
            {{--                self[0].classList.remove('green');--}}
            {{--                self[0].classList.add('red');--}}
            {{--                self[0].innerText = "Pasif";--}}
            {{--            }--}}

            {{--            Swal.fire({--}}
            {{--                title: 'Başarılı',--}}
            {{--                text: dataID + "'li postun durumu " + (changeStatusVal ? 'pasiften aktif ' : 'aktiften pasif ') + ' olarak güncellenmiştir.',--}}
            {{--                icon: 'success',--}}
            {{--                confirmButtonColor: '#3085d6',--}}
            {{--                confirmButtonText: 'Tamam',--}}
            {{--            });--}}

            {{--            // self[0].textContent = changeStatusVal ? "Aktif" : "Pasif";--}}
            {{--            // let finalStatus = [changeStatusVal ? 'red' : 'green', changeStatusVal ? 'green' : 'red'];--}}
            {{--            // self[0].className= self[0].className.replace(finalStatus[0], finalStatus[1]);--}}

            {{--            // if ($degisim == 1)--}}
            {{--            // {--}}
            {{--            //     self[0].className = self[0].className.replace('red', 'green');--}}
            {{--            // }--}}
            {{--            // else if ($degisim == 0)--}}
            {{--            // {--}}
            {{--            //     self[0].className = self[0].className.replace('green', 'red');--}}
            {{--            //--}}
            {{--            // }--}}


            {{--                },--}}
            {{--        error: function ()--}}
            {{--        {--}}

            {{--        }--}}
            {{--    })--}}


            {{--});--}}


        });


    </script>
@endsection
