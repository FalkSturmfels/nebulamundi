<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href={{url('/')}}>Nebula Mundi</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class={{ Request::segment(1) === 'worlds' ? 'active' : null }}>
                    <a href={{ url('worlds') }}>Schleier</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class={{ Request::segment(1) === 'worlddefs' ? 'active' : null }}>
                    <a href={{ action('WorldDefController@index') }}>Nebelkammer</a>
                </li>
                @can('user-index')
                <li class={{ Request::segment(1) === 'users' ? 'active' : null }}>
                    <a href={{ url('users') }}>User</a>
                </li>
                @endcan
                @if(Auth::check())
                    <li><a href={{url('/logout')}}><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                @else
                    <li><a href={{url('/login')}}><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>