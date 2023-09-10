<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        </head>

<!-- START nav -->

<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-wrap">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
                                <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> {{ $siteSetting['phone'] ?? '' }}</a>
                                <a href="#"><span class="fa fa-paper-plane mr-1"></span> {{ $siteSetting['email'] ?? '' }}</a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="{{ $siteSetting['facebook_url'] ?? '' }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only" target="_blank">Facebook</i></span></a>
                                    <a href="{{ $siteSetting['twitter_url'] ?? '' }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only" target="_blank">Twitter</i></span></a>
                                    <a href="{{ $siteSetting['instagram_url'] ?? '' }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only" target="_blank">Instagram</i></span></a>
                                    <a href="{{ $siteSetting['youtube_url'] ?? '' }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only" target="_blank">Youtube</i></span></a>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Accounting</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/aboutus" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="contactus" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


<body>
