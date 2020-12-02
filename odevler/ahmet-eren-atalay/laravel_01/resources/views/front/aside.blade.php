

    <!-- Primary Navigation -->
    <nav id="primary-nav">
        <ul>



        @guest
            <li>
                <a href="{{route('login')}}"><i class="fas fa-play"></i>Login</a>
            </li>

            <li>
                <a href="{{route('register')}}"><i class="fas fa-users"></i>Register</a>
            </li>


            @else
                <li>
                    <a href="/" class="active"><i class="fa fa-fire"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-list"></i>Makale</a>
                    <ul>
                        <li>
                            <a href="{{route('admin.addPost')}}"><i class="fa fa-file-text"></i>Makale Ekle</a>
                        </li>


                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"><i class="fa fa-lock"></i> Log out</a>
                </li>
                <form method="POST" action="{{route('logout')}}" id="logoutForm">@csrf</form>
            @endguest
        </ul>
    </nav>
    <!-- END Primary Navigation -->


