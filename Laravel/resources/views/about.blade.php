@extends('layouts.app')

@section('content')
 
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('{{URL::asset('img/9692192857_9aa0743183_o.jpg')}}'); background-size: cover;">
          <div class="container">
            <div class="carousel-caption">
              <h1>MyClub</h1>
			  <p>Unsere Vision ist es Dir und deinen Freunden eine einfache und entspannte möglichkeit zu geben, Termine zu Organisieren und zu veranstalten.</p>
			  </br>
            </div>
          </div>
        </div>
        
      </div>
    </div><!-- /.carousel -->




    <div class="container marketing">

      <!-- Three columns of text below the carousel with image  -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="{{URL::asset('img/email.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Kontakt</h2>
                <p>Email an: <a href="mailto:adriano.barra@ntb.ch">Adriano Barra</a> <a href="mailto:robert.panzer@ntb.ch">Robert Panzer</a></p><br>
                <p>adriano.barra@ntb.ch</p><br>
                <p>robert.panzer@ntb.ch</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="{{URL::asset('img/Register-Icon.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Technische Leitung </h2>
                <p>Adriano Barra CEO Sporties.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="{{URL::asset('img/Partypeople.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Design und Auftritt</h2>
                <p>Robert Panzer CEO Sporties</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

