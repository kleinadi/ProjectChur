@extends('layouts.app')

@section('content')
 
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('img/13974352545_9b48cb20e9_o.jpg'); background-size: cover;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Wilkommen bei MyClub</h1>
			  <p>Melde Dich mit deinem Benutzernamen an oder Registriere dich oder deinen Verein kostenlos.</p>
			  </br>
              <form class="form-signin" method="post" action="./Main.html">
			   <label for="inputEmail" class="sr-only">Email address</label>
						<input type="email" id="inputEmail" class="form-control" placeholder="E-Mail" required autofocus><br>
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Anmeldedaten Erinnern
						</label>
					</div>
           
				<button class="btn btn-m btn-primary btn-block rount" type="submit">Anmelden</button>
                  </form>
            </div>
          </div>
        </div>
        
      </div>

    </div><!-- /.carousel -->


       <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="{{URL::asset('img/Spielplan.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Spiele Planen</h2>
                <p>Mit MyClub kannst du und deine Vereinsmitglieder ganz einfach Spiele, Trainings oder sonstige Veranstaltungen planen. Du kannst deine Kollegen ganz einfach zu einem Termin einladen und so sehen wer Zeit hat zu kommen oder wer nicht.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="{{URL::asset('img/Register-Icon.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Registrieren</h2>
                <p>Du kannst dich oder deinen Verein ganz einfach und Kostenlos Registrieren und dann sofort mit MyClub loslegen.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="{{URL::asset('img/Partypeople.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Spass</h2>
                <p>Du kannst MyClub auch nur für Spass verwenden und in gar keinem Verein sein. Du kannst mit MyClub zum Beispiel ganz einfach und bequem eine Party organisieren indem du dich und deine Freunde Registrierst.</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->