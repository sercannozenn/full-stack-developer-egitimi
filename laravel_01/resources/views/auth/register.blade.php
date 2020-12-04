@extends('layouts.front')
@section('title')
    Kayıt Ol
@endsection
@section('css')
@endsection
@section('content')
    <form id="basic-wizard" action="page_form_wizard.html" method="post" class="form-horizontal form-box">
        <!-- Form Header -->
        <h4 class="form-box-header"><i class="fa fa-magic"></i> Basic Wizard</h4>

        <!-- Form Content -->
        <div class="form-box-content">

            <!-- First Step -->
            <div id="first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row">
                    <div class="col-md-4 text-center active">1. Account</div>
                    <div class="col-md-4 text-center">2. Personal</div>
                    <div class="col-md-4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-username">Username</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="example-username" name="example-username" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-email">Email</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="example-email" name="example-email" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-password">Password</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="password" id="example-password" name="example-password" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-password2">Retype Password</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="password" id="example-password2" name="example-password2" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <form/>
@endsection
@section('js')
@endsection
