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
                    @foreach($menu as $item)
                        <?php
                        if ($item->route_type == 1)
                        {
                            $route = route($item->route);
                            $active = Route::is($item->route) ? 'active' : '';
                        }
                        else if ($item->route_type == 2)
                        {
                            $route = url($item->route);
                            $active = request()->is($item->route) ? 'active' : '';
                        }
                        ?>
                        <li class="drop">
                            <a class="{{ $active }}" href="{{ $route }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
