@extends('layouts.front')

@section('meta')

@endsection

@section('css')

@endsection

@section('title')
Admin Sayfası
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

@section('sidebar')

@endsection

@section('nav-dash')
    @guest()
    @else()
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" class="animation-fadeIn text-center">
                    <i class="gemicon-medium-add-article"></i>
                </a>
                <p>Makale Ekle</p>
            </li>
    @endguest()

@endsection

@section('page-content')

@endsection

@section('js')

@endsection