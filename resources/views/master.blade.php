<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mini Tennra</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <header>
    @include('partials.header')
  </header>
  <body>
    <div class="nav">
    <div class="container">
      <ul>
        <li class="pull-left"> 
        <a href="{{ url('/')  }}">
        <img src="http://s13.postimg.org/xuft29ljn/mail_google_com.png" height="60" width="100"/img>
        </li></a>
          <li class="pull-right"><a href="{{ url('/project/create') }}">Start</a></li>
          <li class="pull-right"><a href="{{ url('/projects/') }}">Discover</a></li>
          <li class="pull-right"><a href="{{ url('/') }}">Home</a></li>
        </ul>
      </div>
      </div>

      <div class="container">
      <main>
       @yield('content')
      </main>
      </div>
  </body>

  <footer padding-top="60px">    
  @include('partials.footer')
  </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>



</html>








    
        
        
    