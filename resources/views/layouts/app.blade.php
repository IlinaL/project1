<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dine | @yield('title', '')</title>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{URL::asset('/css/main.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Magnific - Popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" />

    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">

</head>

<body>
    <section id="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark"> <!-- Navbar -->
                <div class="container">
                    <div class="logo">
                        <a href="/">
                            <h2>DINE</h2>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{route('home.index')}}" class="nav-link">Home </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('menu.index')}}" class="nav-link">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('gallery.index')}}" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item active-item">
                                <a href="{{route('reservation.index')}}" class="nav-link reservation">Reservation </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!-- END Navbar -->
        </div>
    </section>


    @yield('content')
    @yield('style')
    @yield('script')

    <footer>
        <div class="footer-container">
            <div class="container-fluid">
                <div class="footer-distributed">
                    <div class="footer-center">
                        <p class="footer-links">
                            <a href="{{route('home.index')}}">Home</a>
                            <a href="{{route('menu.index')}}">Menu</a>
                            <a href="{{route('gallery.index')}}">Gallery</a>
                            <a href="{{route('reservation.index')}}">Reservation</a>
                        </p>
                        <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="/">Dine</a></p>
                    </div>
                </div>
            </div><!--END container -->
        </div><!-- END  footer-container -->
        </footer>

</body>

</html>