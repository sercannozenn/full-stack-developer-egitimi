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
                    <a class="btn-floating waves-effect waves-light teal  modal-trigger" title="Yeni Makale Ekle"
                       href="{{ route('admin.post.add') }}">
                        <i class="material-icons">add</i>
                    </a>
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>İşlem</th>
                            <th>ID</th>
                            <th>Makale Adı</th>
                            <th>Açıklama</th>
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
                                    <a href="javascript:void(0)" class="deletePost" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editPost" class="editPost modal-trigger"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->content}}</td>
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
    <div id="editPost" class="modal modalEdit">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title activator">Kategori Düzenleme</h5>
                            <form id="editPostForm" action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input name="name" id="nameEdit" type="text">
                                        <label for="nameEdit">Makale Adı</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input name="description" id="descriptionEdit" type="text">
                                        <label for="descriptionEdit">Açıklama</label>
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
@endsection
