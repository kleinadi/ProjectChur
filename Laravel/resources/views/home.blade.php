@extends('layouts.app')

@section('content')

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday" style="border: 0px solid black; box-shadow: 1px; background: rgba(0,128,255,0.3);
                                    -webkit-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);
                                    -moz-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);
                                    box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.75);
                                    ">
                                <p><span style="font-size: 28px;">Termin:</span> Fussballspiel</p>
                                <p><span style="font-size: 28px;">Datum:</span> 01. Januar 2017</p>
                                <p><span style="font-size: 28px;">Ort:</span> Chur</p>
                                <p><span style="font-size: 28px;">Standort:</span> Obere Au</p>
                                <p><span style="font-size: 28px;">Leiter:</span> Geo Bontognali</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="item">
            <!--<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">-->
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday">
                                <p><span style="font-size: 28px;">Termin:</span> Fussballspiel</p>
                                <p><span style="font-size: 28px;">Datum:</span> 01. Januar 2017</p>
                                <p><span style="font-size: 28px;">Ort:</span> Chur</p>
                                <p><span style="font-size: 28px;">Standort:</span> Obere Au</p>
                                <p><span style="font-size: 28px;">Leiter:</span> Geo Bontognali</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <!--<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">-->
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday">
                                <p><span style="font-size: 28px;">Termin:</span> Fussballspiel</p>
                                <p><span style="font-size: 28px;">Datum:</span> 01. Januar 2017</p>
                                <p><span style="font-size: 28px;">Ort:</span> Chur</p>
                                <p><span style="font-size: 28px;">Standort:</span> Obere Au</p>
                                <p><span style="font-size: 28px;">Leiter:</span> Geo Bontognali</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->



@endsection
