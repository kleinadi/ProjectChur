@extends('layouts.app')

@section('content')

    <!-- Carousel
  ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('{{URL::asset('img/pink-1635387.jpg')}}'); background-size: cover;" >
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Teilnehmerliste</h1>
                        <p>Name</p>
                        <p>Name</p>
                        <p>Name</p>
                        <p>Name</p>
                        <p>Name</p>
                        <p>Name</p>
                        <p>Name</p>
                        </br>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection