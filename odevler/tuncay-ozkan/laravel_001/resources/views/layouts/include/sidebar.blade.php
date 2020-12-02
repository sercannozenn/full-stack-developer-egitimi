<aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
    <!-- Sidebar search -->
    <form id="sidebar-search" action="page_search_results.html" method="post">
        <div class="input-group">
            <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Search..">
            <button><i class="fa fa-search"></i></button>
        </div>
    </form>
    <!-- END Sidebar search -->

    <!-- Primary Navigation -->
    <nav id="primary-nav">
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{Route::is('home')?'active':''}}"><i class="fa fa-fire"></i>Dashboard</a>
            </li>
            <li>
                <a href="#" class="{{Route::is('articles.index')?'active':''}}"><i class="fa fa-table"></i>Makaleler</a>
                <ul style="display: none;">
                    <li>
                        <a href="{{route('articles.index')}}" class="{{Route::is('articles.index')?'active':''}}"><i class="fa fa-archive"></i>Makale Listesi</a>
                    </li>
                    <li>
                        <a href="{{route('articles.add')}}"><i class="{{Route::is('articles.index')?'active':''}}fa fa-plus-circle"></i>Makale  Ekle</a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
    <!-- END Primary Navigation -->


</aside>
