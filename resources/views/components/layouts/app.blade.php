<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Discover<span>Angola</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="destination.html" class="nav-link">Destinations</a></li>
                    <li class="nav-item"><a href="hotel.html" class="nav-link">Accommodation</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Travel Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>

                    <!-- Language Selector -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            🌐 Language
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="?lang=en">🇬🇧 English</a>
                            <a class="dropdown-item" href="?lang=pt">🇦🇴 Português</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}
    <!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
			<script src="{{asset('js/popper.min.js')}}"></script>
			<script src="{{asset('js/bootstrap.min.js')}}"></script>
			<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
			<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
			<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
			<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
			<script src="{{asset('js/scrollax.min.js')}}"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="{{asset('js/google-map.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
