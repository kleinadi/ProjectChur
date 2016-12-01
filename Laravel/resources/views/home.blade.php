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
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach ($userapp as $myappointment)
            @if ($myappointment->fk_users == Auth::id())
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday">
                                        <tbody>
                                            <tr>
                                                <td class="table-text">
                                                <div><h2>{{ $myappointment->name }}</h2></div>
                                                <div><h2>{{ $myappointment->date }}</h2></div>
                                                <div><h2>{{ $myappointment->time }}</h2></div>
                                                <div><h2>{{ $myappointment->location }}</h2></div>
                                                <div><h2>{{ $myappointment->place }}</h2></div>
                                                <div><h2>{{ $myappointment->leader }}</h2></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endif
        @endforeach

        <div class="item">
            <!--<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">-->
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday">
                                @if (count($appointment) > 1)
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h2>{{ $appointment[1]->name }}</h2></div>
                                            <div><h2>{{ $appointment[1]->date }}</h2></div>
                                            <div><h2>{{ $appointment[1]->time }}</h2></div>
                                            <div><h2>{{ $appointment[1]->location }}</h2></div>
                                            <div><h2>{{ $appointment[1]->place }}</h2></div>
                                            <div><h2>{{ $appointment[1]->leader }}</h2></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @else
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h1>Kein Termin vorhanden</h1></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endif
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
                                @if (count($appointment) > 2)
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h2>{{ $appointment[2]->name }}</h2></div>
                                            <div><h2>{{ $appointment[2]->date }}</h2></div>
                                            <div><h2>{{ $appointment[2]->time }}</h2></div>
                                            <div><h2>{{ $appointment[2]->location }}</h2></div>
                                            <div><h2>{{ $appointment[2]->place }}</h2></div>
                                            <div><h2>{{ $appointment[2]->leader }}</h2></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @else
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h1>Kein Termin vorhanden</h1></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday">
                                @if (count($appointment) > 3)
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h2>{{ $appointment[3]->name }}</h2></div>
                                            <div><h2>{{ $appointment[3]->date }}</h2></div>
                                            <div><h2>{{ $appointment[3]->time }}</h2></div>
                                            <div><h2>{{ $appointment[3]->location }}</h2></div>
                                            <div><h2>{{ $appointment[3]->place }}</h2></div>
                                            <div><h2>{{ $appointment[3]->leader }}</h2></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @else
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h1>Kein Termin vorhanden</h1></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <div id="Matchday" class="matchday">
                                @if (count($appointment) > 4)
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h2>{{ $appointment[4]->name }}</h2></div>
                                            <div><h2>{{ $appointment[4]->date }}</h2></div>
                                            <div><h2>{{ $appointment[4]->time }}</h2></div>
                                            <div><h2>{{ $appointment[4]->location }}</h2></div>
                                            <div><h2>{{ $appointment[4]->place }}</h2></div>
                                            <div><h2>{{ $appointment[4]->leader }}</h2></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @else
                                    <tbody>
                                    <tr>
                                        <td class="table-text">
                                            <div><h1>Kein Termin vorhanden</h1></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
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
