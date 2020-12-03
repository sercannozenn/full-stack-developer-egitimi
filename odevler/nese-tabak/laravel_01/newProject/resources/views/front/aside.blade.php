<nav id="primary-nav">

    <ul>
        <li>
            <a href="/" class="active"><i class="fa fa-home"></i>Home</a>
        </li>
        @guest
            <li>
                <a href="{{route('login')}}"><i class="fas fa-play"></i>Login</a>
            </li>

            <li>
                <a href="{{route('register')}}"><i class="fas fa-users"></i>Register</a>
            </li>
        @else
            <li>
                <a href="" role="button" data-toggle="modal">
                    <i class="fa fa-user"></i>
                    {{auth()->user()->name}}
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin.addPost')}}">
                    <i class="fa fa-file-text"></i>
                    New Post
                </a>
            </li>

            <li>
                <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"><i class="fa fa-lock"></i> Log out</a>
            </li>
            <form method="POST" action="{{route('logout')}}" id="logoutForm">@csrf</form>
        @endguest
    </ul>
</nav>
<!-- END Primary Navigation -->


