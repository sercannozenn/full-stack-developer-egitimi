@extends('layouts.front')
@section('title')
    Kayıt Ol
@endsection
@section('css')
    <style>
        .rgBtn {
            margin-left: 240px;
        }
    </style>
@endsection
@section('content')
    <form id="basic-wizard" action="" method="POST" class="form-horizontal form-box">
    @csrf
    <!-- Form Header -->
        <h4 class="form-box-header"><i class="fa fa-magic"></i> Basic Wizard</h4>

        <!-- Form Content -->
        <div class="form-box-content">

            <!-- First Step -->
            <div id="first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center active">1. Account</div>

                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="inputName">Username</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="inputName" name="inputName" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <label class="control-label col-md-2" for="inputEmail">Email</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="email" id="inputEmail" name="email" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="inputPassword">Password</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="password" id="inputPassword" name="password" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="password_confirmation">Retype Password</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-md-3 rgBtn ">
                        <button class="btn btn-lg btn-danger btn-block" type="submit">Register</button>

                    </div>

                </div>
            </div>
            <form/>
@endsection
@section('js')
@endsection
{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}
{{--    <link rel="icon" href="{{'assets/img/favicons/favicon.ico'}}">--}}

{{--    <title>Register</title>--}}

{{--    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">--}}

{{--    <link href="{{asset("assets/css/register.css")}}" rel="stylesheet">--}}
{{--</head>--}}
{{--s--}}
{{--<body class="text-center">--}}
{{--<form class="form-register" action="" method="POST">--}}
{{--    @csrf--}}

{{--    <img class="mb-4" src="{{asset("assets/img/template/uadmin_logo.png")}}" alt="" width="72" height="72">--}}
{{--    <h1 class="h3 mb-3 font-weight-normal">Create New Account</h1>--}}

{{--    --}}{{--user name--}}
{{--    <label for="inputName" class="sr-only ">Full Name</label>--}}
{{--    <input type="text"  name="name" id="inputName" class="form-control" placeholder="Full Name" required autofocus>--}}


{{--    --}}{{--   email--}}
{{--    <label for="inputEmail" class="sr-only">Email address</label>--}}
{{--    <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>--}}
{{--    --}}{{--    password--}}
{{--    <label for="inputPassword" class="sr-only">Password</label>--}}
{{--    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>--}}
{{--    --}}{{--    Password Confirmation   --}}
{{--    <label for="inputPasswordConfirmation" class="sr-only">Password Confirmation</label>--}}
{{--    <input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control" placeholder="Password Confirmation" required>--}}


{{--    <button class="btn btn-lg btn-danger btn-block" type="submit">Register</button>--}}


{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
