<aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
    <!-- Sidebar search -->
    <!-- END Sidebar search -->
    <div class="col-12">
        <div class="col-12 text-center" style="margin-top:20px">
            <img src="{{asset('assets/img/template/avatar.png')}}" alt="">
        </div>
        @guest
            <script>
                window.location.href = "login";
            </script>
        @else
            <div class="col-12 text-center">
                <h4>Hoşgeldiniz</h4>
                <p>{{auth()->user()->name}}</p>
            </div>
        @endguest
    </div>
    <!-- Primary Navigation -->
    <nav id="primary-nav">
        <ul>
            <li>
                <a href="{{route('admin.index')}}"><i class="fa fa-user"></i>Anasayfa</a>
            </li>

            <li>
                <a href="{{route('admin.addPost')}}"><i class="fa fa-file-text"></i>Yeni Post Ekle</a>
            </li>
            <li>
                <a href="{{route('admin.getAllPost')}}"><i class="fa fa-list"></i>Post Listesi</a>
            </li>

            <li>
                <a href="{{route('login')}}" onclick="
                event.preventDefault();
                document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out"></i>Çıkış Yap</a>

                <form action="{{route('logout')}}" id="logoutForm" method="POST">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</aside>
