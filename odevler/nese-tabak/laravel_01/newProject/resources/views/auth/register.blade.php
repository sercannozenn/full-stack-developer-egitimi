<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Register</title>

    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">

    <link href="{{asset("assets/css/register.css")}}" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-register" action="{{route('register')}}" method="post">
    @csrf

    <img class="mb-4" src="{{asset("assets/img/template/uadmin_logo.png")}}" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Create New Account</h1>

{{--user name--}}
    <label for="inputName" class="sr-only ">Full Name</label>
    <input type="text"  name="name" id="inputName" class="form-control" placeholder="Full Name" required autofocus>


    {{--   email--}}
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
{{--    password--}}
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
{{--    Password Confirmation   --}}
    <label for="inputPasswordConfirmation" class="sr-only">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control" placeholder="Password Confirmation" required>


    <button class="btn btn-lg btn-danger btn-block" type="submit">Register</button>

    <p class="mt-5 mb-3 text-muted">&copy;{{date('Y')}}</p>

</form>
</body>
</html>
