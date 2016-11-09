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
            <form class="form-signin" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
            <hr>
            <button class="btn btn-primary btn-m round" type="submit">Mit Facebook anmelden</button>
            <form class="form-signin">
                <br>
                <p>oder</p>
                <h3 class="form-signin-heading">Melde dich mit deiner E-Mail Addresse an</h3>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="inputUserid" class="sr-only">Benutzername</label>
                    <!-- <input type="register" id="inputUserid" class="form-control" placeholder="Benutzername" required autofocus> -->
                    <input id="name" type="text" class="form-control" placeholder="Benutzername" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>

                <!-- <label for="inputUserprename" class="sr-only">Vorname</label>
                <input type="register" id="inputUserprename" class="form-control" placeholder="Vorname" required autofocus>

                <label for="inputUserlastname" class="sr-only">Nachname</label>
                <input type="register" id="inputUserlastname" class="form-control" placeholder="Nachname" required autofocus> -->

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="inputPassword" class="sr-only">Password</label>
                <!-- <input type="register" id="inputPassword" class="form-control" placeholder="Passwort" required> -->
                    <input id="password" type="password" placeholder="Passwort" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="sr-only">Password-Confirm</label>
                    <input id="password-confirm" type="password" placeholder="Passwort bestätigen" class="form-control" name="password_confirmation" required>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="inputEmail" class="sr-only">E-Mail</label>
                <!-- <input type="register" id="inputEmail" class="form-control" placeholder="E-Mail" required> -->
                    <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <br>
                <button class="btn btn-primary btn-m rount" type="submit">Registrieren</button>

                <div class="checkbox">
                </div>
                <p class="primary"> Du hast bereits ein Konto? <a id="register-link-login" data-section="login" href="login">Anmelden</a>
            </form>
        </div>
        </form>
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
