<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Carousel Template for Bootstrap</title>

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
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                <br>
                    <a class="titelbezeichnung" href="/">MyClub</a>
                    <hr>
                    <!--<hr>
                    <label for="inputUser" class="sr-only">Benutzername</label><br>
                    <input type="user" id="inputUser" class="form-control" placeholder="Benutzername" required autofocus>
                    <label for="inputPassword" class="sr-only">Passwort</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
                    <div class="checkbox">-->
                        <form class="form-signin">
                           
                            <h3 class="form-signin-heading">Melde deinen Verein an.</h3>

                            <label for="inputClub" class="sr-only">Vereinsname</label>
                            <input type="register" id="inputClub" class="form-control" placeholder="Vereinsname" required autofocus>

                            <label for="inputChiefprename" class="sr-only">Vorname Präsident</label>
                            <input type="register" id="inputChiefprename" class="form-control" placeholder="Vorname Präsident" required autofocus>

                            <label for="inputChieflastname" class="sr-only">Nachname Präsident</label>
                            <input type="register" id="inputChieflastname" class="form-control" placeholder="Nachname Präsident" required autofocus>

                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="register" id="inputPassword" class="form-control" placeholder="Passwort" required>

                            <label for="inputEmail" class="sr-only">E-Mail</label>
                            <input type="register" id="inputEmail" class="form-control" placeholder="E-Mail" required>

                            <label for="inputEmailagain" class="sr-only">E-Mail bestätigen</label>
                            <input type="register" id="inputEmailagain" class="form-control" placeholder="E-Mail bestätigen" required>

                            <label for="inputYears" class="sr-only">Gründungsjahr</label>
                            <input type="register" id="inputYears" class="form-control" placeholder="Gründungsjahr" required>

                            <br>                                  
                            <button class="btn btn-primary btn-m rount" type="submit">Registrieren</button>
                            
                            <div class="checkbox">
                            </div>
                            <p class="primary"> Du hast bereits ein Konto? <a id="register-link-login" data-section="login" href="login">Anmelden</a>
                    </form>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <!-- Marketing messaging and featurettes
        ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
            <!-- FOOTER -->
            
        </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
