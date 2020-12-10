@php
    //dd($data)
@endphp
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
                    <h5 class="card-title">Makale Liste</h5>
                    <a href="/admin/post/add" class="btn-floating waves-effect waves-light teal" title="Yeni Makale Ekle">
                        <i class="material-icons">add</i>
                    </a>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>İşlemler</th>
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
                        @foreach ($data as $key=>$value)

                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="deleteCategory" data-id="{{ $value->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editCategory" class="editCategory modal-trigger"
                                       data-id="{{ $value->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td><img src="{{asset($value->image)}}" width="100" height="100"></td>
                                <td>{{$value->id}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->getPostUser->name}}</td>
                                <td>
                                    @if($value->status==1)
                                        <a class="waves-effect waves-light btn green changeStatus"
                                           data-id="{{ $value->id }}">Aktif</a>
                                    @else
                                        <a class="waves-effect waves-light btn red changeStatus"
                                           data-id="{{ $value->id }}">Pasif</a>
                                    @endif
                                </td>
                                <td>{{$value->slug}}</td>
                                <td>{{$value->getCategory->name}}</td>
                                <td>{{$value->publish_date	}}</td>
                                <td>{{$value->updated_at}}</td>
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
            $('.changeStatus').click(function () {
                // const btnStatus = document.getElementsByClassName('changeStatus');
                const dataId = $(this).data('id');
                var self = $(this)[0];
                $.ajax({
                    url: '{{route('admin.post.changeStatus')}}',
                    method: 'POST',
                    data: {
                        id: dataId,
                        '_token': '{{ csrf_token() }}'
                    },
                    async: false,
                    success: function (response) {


                        if (response.status == 1) {
                            self.classList.remove('red');
                            self.classList.add('green');
                            self.innerText = "Aktif"
                        } else {
                            self.classList.remove('green');
                            self.classList.add('red');
                            self.innerText = "Pasif"
                        }

                        // for ($i=0;$i<btnStatus.length;$i++){
                        // console.log(btnStatus);}
                    },
                })
            })
        })

    </script>
@endsection
