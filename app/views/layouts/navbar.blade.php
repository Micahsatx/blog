<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {{-- icon/link on navbar that takes user to my github page --}}
        <a class="navbar-brand" onclick="location.href='https://github.com/Micahsatx/blog';" href="#"><i class="fa fa-gamepad fa-2x"></i> MicahSATX</a>
    </div>

    <!-- Links on navbar. -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
           {{-- if the user is logged on they see these 3 links, else they see those 3 --}}
            @if(Auth::check())
                <li><a href="{{{ action('PostsController@index') }}}">Show All Posts</a></li>
                <li><a href="{{{ action('PostsController@create') }}}">New Blog Entry</a></li>
                <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
            @else
                {{-- links seen when NOT logged in --}}
                <li><a href="{{{ action('PostsController@index') }}}">Show All Posts</a></li>
                <li><a href="{{{ action('HomeController@makeNewUserPage') }}}">Create New User</a></li>
                <li><a href="{{{ action('HomeController@loginForm') }}}">Login</a></li>
            @endif
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>