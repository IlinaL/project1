@extends('layouts.app')

@section('title', 'Reservation')

@section('content')

<div class="background-image-reservation"><!-- Background-image -->
    <h2 class="animated fadeInLeft" style="animation-delay: 1s">Book a table </h2>
</div><!-- END Background-image -->


<form class="lg-form text-center" method="POST" action="reservation"> <!-- Reservation  -->

    @csrf
    <div>
        @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message')}}
        </div>
        @endif
        <h1 class="mb-5 font-weight-light text-uppercase text-dark">Reservation</h1>

        <div class="form-group"> <!-- First Name -->
            <input type="text" id="forms" class="form-control" name="first-name" value="{{ old('first-name') }}"
                required autocomplete="first-name" placeholder="First Name">
            <div>{{$errors->first('first-name')}}</div>
        </div>

        <div class="form-group"> <!-- Last Name -->
            <input type="text" id="forms" class="form-control" name="last-name" value="{{ old('last-name') }}" required
                placeholder="Last Name">
            <div>{{$errors->first('last-name')}}</div>
        </div>
        <div class="form-group"> <!-- Email Address -->
            <input type="email" id="forms" class="form-control" name="email" type="email" value="{{ old('email') }}"
                required autocomplete="email" placeholder="Email Address">
            <div>{{$errors->first('email')}}</div>
        </div>

        <div class="form-group"> <!-- Phone Number -->
            <input type="number" id="forms" class="form-control" name="tel" value="{{ old('tel') }}" required min="0"
                placeholder="Phone Number">
            <div>{{$errors->first('tel')}}</div>
        </div>

        <div class="form-group"> <!-- Number of Guests -->
            <input type="number" id="forms" class="form-control" name="number" value="{{ old('number') }}" required
                placeholder="Number of Guests" min="1" max="20">
            <div>{{$errors->first('number')}}</div>
        </div>

        <div class="form-group"> <!-- Date -->
            <input type="date" id="forms" class="form-control" name="date" value="{{ old('date') }} " min="2020-01-01"
                required>
            <div>{{$errors->first('date')}}</div>
        </div>

        <div class="form-group"> <!-- Time -->
            <input type="time" id="forms" class="form-control" name="time" value="{{ old('time') }}" required>
            <div>{{$errors->first('time')}}</div>
        </div>

        <button type="submit" id="btn-form" class="btn mt-5  btn-lg btn-block text-uppercase"
            value="Make a reservation">Make a reservation</button>

</form> <!-- END Reservation -->
</div>
@endsection