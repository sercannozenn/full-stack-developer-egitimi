<header class="clearfix trans">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{asset('assets/FrontEnd/images/logo.png')}}" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navigate-section">
                    <li class="drop"><a class="active" href="/">Anasayfa</a></li>
                    <li><a href="{{route('about')}}">Hakkımızda</a></li>

                    {{--                    <li class="drop"><a href="portfolio.html">Portfolio</a>--}}
                    {{--                        <ul class="dropdown">--}}
                    {{--                            <li><a href="portfolio.html">Portfolio 3 Col</a></li>--}}
                    {{--                            <li><a href="portfolio-col4.html">Portfolio 4 Col</a></li>--}}
                    {{--                            <li><a href="portfolio-col2.html">Portfolio 2 Col</a></li>--}}
                    {{--                            <li><a href="single-project.html">Single Project</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">İletişim</a></li>

                    <li>
                        <a href="{{route('login')}}"><i class="fas fa-sign-in-alt fa-lg "></i>Giriş Yap</a>

                    </li>
                    <li>
                        <a href="{{route('register')}}"><i class="fas fa-users fa-lg"></i>Kayıt Ol</a>
                    </li>




                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
