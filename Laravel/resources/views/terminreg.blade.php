@extends('layouts.app')

@section('content')

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('img/13974352545_9b48cb20e9_o.jpg'); background-size: cover;">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Erstelle einen Termin</h1>
                        </br>
                        <form class="form-signin" role="form" method="POST" action="{{ url('/terminreg') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Termin</label>
                                <input id="name" type="text" class="form-control" placeholder="Termin" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Date</label>
                                <input id="date" type="date" class="form-control" placeholder="Datum" name="date" value="{{ old('date') }}" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Time</label>
                                <input id="time" type="time" class="form-control" placeholder="Zeit" name="time" value="{{ old('time') }}" required autofocus>

                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Place</label>
                                <input id="place" type="text" class="form-control" placeholder="Ort" name="place" value="{{ old('place') }}" required autofocus>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Location</label>
                                <input id="location" type="text" class="form-control" placeholder="Standort" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('leader') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Leader</label>
                                <input id="leader" type="text" class="form-control" placeholder="Leiter" name="leader" value="{{ old('leader') }}" required autofocus>

                                @if ($errors->has('leader'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('leader') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="appointmentclub" id="appointmentclub">
                                    @foreach ($club as $cluby)
                                        <option value="{{ $cluby->id }}">{{ $cluby->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-m btn-primary btn-block rount" type="submit">Termin erstellen</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div><!-- /.carousel -->

@endsection