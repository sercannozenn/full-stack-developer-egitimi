<nav class="navbar navbar-expand-lg navbar-light second-bg-color-dark  fixed-top">
    <a class="navbar-brand text-white font-weight-bold" href="#"><img class="logo mr-2"
                                                                      src="{{asset('assets/images/logo/logoWhite.png')}}"
                                                                      alt=""></a>
    <button class="navbar-toggler border-light mr-2" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active second-bg-color">
                <a class="nav-link text-white" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Hakkımızda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Dersler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Ekibimiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">İletişim</a>
            </li>
        </ul>
{{--        <form class="form-inline my-2 my-lg-0 search-form">--}}
{{--            <div class="search-bar">--}}
{{--                <input class="searchInput form-control mr-sm-2" type="search" placeholder="Ara..." aria-label="Search">--}}
{{--                <i class="fas fa-search"></i>--}}
{{--            </div>--}}
{{--            --}}{{--            <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>--}}
{{--        </form>--}}
        <div class="input-group mb-3 my-2 my-lg-0 search-bar">
            <input type="text" class="form-control searchInput" placeholder="Ara..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn first-bg-color-dark text-white search-button" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>


</nav>

