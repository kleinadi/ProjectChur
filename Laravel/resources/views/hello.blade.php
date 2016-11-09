@extends('layouts.app')

@section('content')

<!-- Carousel
  ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('{{URL::asset('img/pink-1635387.jpg')}}'); background-size: cover;" >
            <div class="container">
                <div class="carousel-caption">
                    <h1>Wilkommen bei MyClub</h1>
                    <p>Entdecke, was in deinem Verein gerade los ist.</p>
                    </br>

                    <p><a class="btn btn-m btn-primary btn-block rount" href="login" role="button">Login</a></p>
                    <p><a class="btn btn-m btn-primary btn-block rount" href="register" role="button">Mitglied Registrieren</a></p>

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

@endsection