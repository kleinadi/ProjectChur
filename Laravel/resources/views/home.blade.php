@extends('layouts.app')

@section('content')




<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

    <div class="carousel-inner cont-slider" role="listbox">

        <!-- display all appointments which are important for the logged user -->
        @foreach ($appointment as $appointmentline)
            @foreach ($userappointment as $myappointment)
                @if ($myappointment->fk_users == Auth::id())
                    @if ($appointmentline->id == $myappointment->fk_appointment)
                        <?php
                                $appointmentTimestamp = strtotime("$appointmentline->date $appointmentline->time +0000");
                                $timeNow = strtotime("+1 hours");
                                ?>
                            @if($appointmentTimestamp >= $timeNow)


        <div class="item">
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
                                                <div><h2>{{ $appointmentline->name }}</h2></div>
                                                <div><h2>{{ $appointmentline->date }}</h2></div>
                                                <div><h2>{{ $appointmentline->time }}</h2></div>
                                                <div><h2>{{ $appointmentline->location }}</h2></div>
                                                <div><h2>{{ $appointmentline->place }}</h2></div>
                                                <div><h2>{{ $appointmentline->leader }}</h2></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </div>
                            <!-- Buttons to confirm or deny the appointment and show the invited users -->
                            <div class="col-lg-4">
                            <form class="form-inline" role="form" method="GET" action="{{ url('/confirm/'.$appointmentline->id) }}">
                            <button type="submit" class="btn btn-success btn-circle btn-xl"><i class="glyphicon glyphicon-ok"></i></button>
                                </form>
                            </div>
                            <div class="col-lg-4">
                            <form class="form-inline" role="form" method="GET" action="{{ url('/liste/'.$appointmentline->id) }}">
                            <button type="submit" class="btn btn-primary btn-circle btn-xl"><i class="glyphicon glyphicon-list"></i></button>
                                </form>
                            </div>
                            <div class="col-lg-4">
                            <form class="form-inline" role="form" method="GET" action="{{ url('/deny/'.$appointmentline->id) }}">
                            <button type="submit" class="btn btn-danger btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        @endif
                    @endif
                @endif
            @endforeach
        @endforeach

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
