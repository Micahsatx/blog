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
      <a class="navbar-brand" onclick="location.href='https://github.com/Micahsatx/blog';" href="#"><i class="fa fa-gamepad fa-2x"></i> My Logo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mynav" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{{ action('PostsController@index') }}}">Show All Posts</a></li>
        <li><a href="{{{ action('PostsController@create') }}}">New Blog Entry</a></li>
        <li><a href="">About Me</a></li>
        <button type="button" class="btn btn-default" onclick="location.href='SEARCH PAGE';">Search</button>
        <button type="button" class="btn btn-default" onclick="location.href='NEED A LOGIN USER PAGE';">Login</button>
        <button type="button" class="btn btn-default" onclick="location.href='NEED A CREATE USER PAGE';">Create User</button>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
