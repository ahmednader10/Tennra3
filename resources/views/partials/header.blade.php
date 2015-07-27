<nav class="avbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/projects') }}">Projects</a></li>
        <!-- <li><a href="{{ url('/users/showUser') }}">Users</a></li> -->
        <li><a href="{{ url('/users/signIn') }}">Sign in</a></li>
        <li><a href="{{ url('/users/createUser') }}">Sign up</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>