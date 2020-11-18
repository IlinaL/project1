@extends('layouts.app')

@section('title', 'Restaurant')

@section('content')

<header>
    <div id="carouselExampleCaptions" class="carousel slide " style="position:relative" data-ride="carousel"><!-- Sliders -->
        <div class="carousel-inner">
            <div class="carousel-item active"> <!-- Slider/Our Menu -->
                <div class="banner1"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animated fadeInLeft" style="animation-delay: 1s; animation-duration:3s">Fresh and
                        Delicious Food</h2>
                    <p class="animated fadeInRight" style="animation-delay: 2s; animation-duration:3s"><a class=""
                            href="{{route('menu.index')}}">Our Menu</a></p>
                </div>
            </div> <!-- END Slider/Our Menu -->

            <div class="carousel-item"> <!-- Slider/Book now -->
                <div class="banner2"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animated fadeInLeft" style="animation-delay: 1s; animation-duration:3s">Book a table</h2>
                    <p class="animated fadeInRight" style="animation-delay: 2s; animation-duration:3s"><a
                            href="{{route('reservation.index')}}">Book now</a></p>
                </div>
            </div> <!-- END Slider/Book now -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- END Sliders -->
</header>
@endsection