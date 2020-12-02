<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kullanıcı Kaydı</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset("assets/css/signin.css")}}" rel="stylesheet">
</head>
<body class="text-center">



<form class="form-signin" action="{{route('register')}}" method="POST">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Please Register </h1>

    <label for="İnputName" class="sr-only">Full Name</label>

    <input type="text" name="name" id="İnputName" class="form-control" placeholder="Full Name" required autofocus>

    <label for="inputEmail" class="sr-only">Email address</label>

    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required >
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>  <label for="inputPassword" class="sr-only">Password</label>
    <label for="inputPasswordConfirmation" class="sr-only">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control" placeholder="Password Confirmation" required>







    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
</body>
</html>
