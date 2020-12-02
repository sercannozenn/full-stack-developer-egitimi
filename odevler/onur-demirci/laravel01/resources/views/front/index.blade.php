@extends('layouts.front')

@section('meta')

@endsection

@section('css')

@endsection

@section('title')
    Ana Sayfa
@endsection

@section('navbar-widgets')
    @guest()
        <li>
            <a href="{{route('login')}}"><i class="fa fa-user"></i> Giriş Yap</a>
        </li>
        <li class="divider-vertical"></li>
        <li>
            <a href="{{route('register')}}"><i class="fa fa-key"></i> Kayıt Ol</a>
        </li>
    @else
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
    @endguest
@endsection

@section('sidebar')

@endsection

@section('nav-dash')

@endsection

@section('page-content')

@endsection

@section('js')

@endsection