@extends('layouts.masterPage')
@section('pagetitle','Makaleler')
@section('content')
    <h3 class="page-header page-header-top">@yield('pagetitle') </h3>
    <table class="table">
        <thead>
        <tr>
            <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Makale Başlık</th>
            <th class="hidden-xs hidden-sm">Makale Özet</th>
            <th class="hidden-xs hidden-sm">Makale Durum</th>
            <th class="text-center"><i class="fa fa-bolt"></i> İşlemler</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $data as $key=>$value)
            <tr>
                <td class="hidden-xs hidden-sm">{{$value->articlesName}}</td>
                <td class="hidden-xs hidden-sm">{!! $value->articlesPost !!}</td>
                <td class="hidden-xs hidden-sm">
                    @if ($value->articlesStatus==1)
                        <span class="badge badge-success">Aktif</span>
                    @else <span class="badge badge-danger">Pasif</span>
                    @endif

                </td>
                <td class="text-center">

                    <a href="/articles/edit/{{$value->id}}" class="btn btn-success">Düzenle</a>
                    <a href="/articles/delete/{{$value->id}}" class="btn btn-danger">Sil</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
