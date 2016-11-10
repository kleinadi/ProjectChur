<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyClub</title>
    <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon"\>

    <!-- Scripts -->
    <script>
      window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
      ]); ?>
    </script>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}"   rel="stylesheet">

      <!--New Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->


    <link href="{{URL::asset('css/carousel.css')}}"   rel="stylesheet">
    <link href="{{URL::asset('css/meincss.css')}}" rel="stylesheet">


  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand titelbezeichnung" href="/">MyClub</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class=""><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li>
                  @if (Auth::guest())

                  @else
                  <li><a href="vereinreg">Verein erstellen</a></li>
                </li>
                @endif
                <li>
                @if (Auth::guest())

                @else
                  <a href="{{ url('/logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


  @yield('content')

      
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Sporties, Inc. &middot;</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</html>
