@extends('layouts.front')
@section('title')
@endsection
@section('css')
@endsection
@section('content')
    <div id="page-content">


    @guest

        <!-- Nav Dash -->
            <ul class="nav-dash">
                <li>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
            </ul>
                <form class="form-signin" action="{{route('login')}}" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label  for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
                @else

            <ul class="nav-dash">
                <li>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Users" class="animation-fadeIn">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
            </ul>
                @endguest





    </div>
@endsection
@section('js')
@endsection
