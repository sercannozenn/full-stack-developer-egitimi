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
                                    <a href="javascript:void(0)" class="deleteTag" data-id="{{ $item->id }}">
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
@endsection
