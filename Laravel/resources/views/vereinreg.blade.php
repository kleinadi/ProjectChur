@extends('layouts.app')

@section('content')

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('img/13974352545_9b48cb20e9_o.jpg'); background-size: cover;">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Registriere dein Verein</h1>
                        </br>
                        <form class="form-signin" role="form" method="POST" action="{{ url('/vereinreg') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="inputUserid" class="sr-only">Vereinsname</label>
                                <input id="name" type="text" class="form-control" placeholder="Vereinsname" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            @foreach ($users as $user)
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">{{ $user->name }}</label>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <button class="btn btn-m btn-primary btn-block rount" type="submit">Verein erstellen</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div><!-- /.carousel -->

@endsection