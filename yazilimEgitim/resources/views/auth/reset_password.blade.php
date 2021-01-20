<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/backEnd/images/favicon.png">
    <title>Şifremi Unuttum</title>

    <link href="{{ asset('assets/backEnd/dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backEnd/dist/css/pages/authentication.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/sweet-alert/sweetalert2.min.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Yazılım Eğitim</p>
        </div>
    </div>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         style="background:url('{{ asset('assets/backEnd/images/big/auth-bg.jpg') }}') no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db"><img src="{{ asset('assets/backEnd/images/logo-icon.png') }}" alt="logo"/></span>
                    <h5 class="font-medium m-b-20">Şifremi Unuttum</h5>
                </div>
                <div class="row">
                    <form class="col s12" action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        @if (request()->token)
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password">
                                    <label for="password">Parola</label>
                                </div>
                            </div>
                        @endif
                        <div class="row m-t-40">
                            <div class="col s12">
                                <button class="btn-large w100 blue accent-4" type="submit">Şifremi Sıfıla</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

<script src="{{ asset('assets/backEnd/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backEnd/dist/js/materialize.min.js') }}"></script>
<script src="{{ asset('assets/sweet-alert/sweetalert2.all.min.js') }}"></script>
@include('sweetalert::alert')

<script>
    $('.tooltipped').tooltip();
    $('#to-recover').on("click", function ()
    {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $(function ()
    {
        $(".preloader").fadeOut();
    });

</script>
</body>

</html>
