<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backEnd/images/favicon.png') }}">
    <title>Materialart Admin Template</title>
    <link href="{{ asset('assets/backEnd/dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backEnd/dist/css/pages/authentication.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/sweet-alert/sweetalert2.min.css')}}">

</head>

<body class="rtl">
<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Material Admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="assets/backEnd/images/logo-icon.png"  alt="logo" /></span>
                    <h5 class="font-medium m-b-20">Register to Admin</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <form class="col s12" action="{{ route('register') }}" method="POST">
                    @csrf
                        <!-- email -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" class="form-control" required>
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <!-- email -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email"  name="email"  type="email" class="form-control" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="form-control" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="cpassword" name="password_confirmation" type="password" class="form-control" required>
                                <label for="cpassword">Password</label>
                            </div>
                        </div>

                        <div class="row m-t-40">
                            <div class="col s12">
                                <button class="btn-large w100 red" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="center-align m-t-20 db">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{ asset('assets/backEnd/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backEnd/dist/js/materialize.min.js') }}"></script>
<script src="{{ asset('assets/sweet-alert/sweetalert2.all.min.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();


    });
</script>
</body>

</html>
