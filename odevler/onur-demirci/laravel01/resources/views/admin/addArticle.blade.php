@extends('layouts.front')

@section('meta')

@endsection

@section('css')

@endsection
@section('title')
    Makale Ekle
@endsection

@section('navbar-widgets')
    <li class="dropdown pull-right dropdown-user">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/template/avatar.png')}}" alt="avatar"> {{auth()->user()->name}} <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-lock"></i>Çıkış Yap</a>

                <form action="{{route('logout')}}" id="logout-form" method="POST">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
@endsection


@section('nav-dash')

@endsection
@section('nav-info')
    <li class="active"><a href="{{route('admin.addArticle')}}">Makale Ekle</a></li>
@endsection

@section('page-content')
<h3>Makale Ekle</h3>

<textarea id="example-textarea-ckeditor" name="example-textarea-ckeditor" class="ckeditor"></textarea>
@endsection

@section('js')
    <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
@endsection