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
                        @foreach ($userappointment as $userappoinmentline)
                            @foreach ($users as $user)
                                @if ($userappoinmentline->fk_users == $user->id & $userappoinmentline->confirmed == 1)
                                <div><p>Name: {{ $user->name }}</p></div>
                                @endif
                            @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection