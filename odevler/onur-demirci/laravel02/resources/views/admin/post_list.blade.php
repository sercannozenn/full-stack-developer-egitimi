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
                    <a class="btn-floating waves-effect waves-light teal" title="Yeni Makale Ekle">
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
                            <th>Yayınlanma Tarihi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post_list as $item)
                            <tr id="row{{$item->id}}">
                                <td>
                                    <a href="javascript:void(0)" class="deleteTag" data-id="{{ $item->id }}" data-name="{{$item->name}}">
                                        <i class="fas fa-trash  red-text"></i>
                                    </a>
                                    <a href="#editTag" class="editTag modal-trigger"
                                       data-id="{{ $item->id }}">
                                        <i class="fas fa-edit  yellow-text"></i>
                                    </a>
                                </td>
                                <td></td>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->title}}</td>
                                <td>{{ $item->getUser->name }}</td>

                                <td>
                                    @if ($item->status)
                                        <a class="waves-effect waves-light btn green changeTagStatus"
                                           data-id="{{ $item->id }}" data-name="{{$item->name}}">Aktif</a>
                                    @else
                                        <a class="waves-effect waves-light btn red changeTagStatus"
                                           data-id="{{ $item->id }}" data-name="{{$item->name}}">Pasif</a>
                                    @endif
                                </td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->getCategory->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->publish_time)->format('d-m-Y H:i:s') }}</td>
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
@endsection