@extends('layouts.front')
@section('title')
    Giriş
@endsection
@section('css')
@endsection
@section('content')
    <!-- Login Container -->
    <div id="login-container">
        <div id="login-logo">
            <a href="">
                <img src="{{ asset('assets/img/template/uadmin_logo.png') }}" alt="logo">
            </a>
        </div>

        <!-- Login Buttons -->
        <div id="login-buttons">
            <h5 class="page-header-sub">Login with..</h5>
            <button id="login-btn-facebook" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</button>
            <button id="login-btn-twitter" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</button>
            <button id="login-btn-email" class="btn btn-default">or Email <i class="fa fa-envelope"></i></button>
        </div>
        <!-- END Login Buttons -->

        <!-- Login Form -->
        <form id="login-form" action="" method="post" class="form-horizontal">
            <div class="form-group">
                <a href="javascript:void(0)" class="login-back"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <input type="text" id="login-email" name="login-email" placeholder="Email.." class="form-control">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <input type="password" id="login-password" name="login-password" placeholder="Password.." class="form-control">
                        <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="btn-group btn-group-sm pull-right">
                    <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Forgot pass?"><i class="fa fa-lock"></i></button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Login</button>
                </div>
                <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip" title="Remember me"><input type="checkbox"><span></span></label>
            </div>
        </form>
        <!-- END Login Form -->
    </div>
    <!-- END Login Container -->

    </script>
    </body>
@endsection
@section('js')
@endsection
