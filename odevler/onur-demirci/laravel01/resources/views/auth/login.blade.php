@extends('layouts.auth')

@section('css')
@endsection

@section('title')
    Giriş Yap
@endsection

@section('form-title')
    Giriş Yap
@endsection

@section('form-inputs')
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group">
                <input type="text" id="login-email" name="email" placeholder="Email" class="form-control">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <div class="input-group">
                <input type="password" id="login-password" name="password" placeholder="Şifre" class="form-control">
                <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
            </div>
        </div>
    </div>
@endsection