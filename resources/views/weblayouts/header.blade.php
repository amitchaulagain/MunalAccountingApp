<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
          rel="stylesheet">

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
                        <div class="col-md-8 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
                                <a href="#" class="mr-2"><span
                                        class="fa fa-map-marker"></span> {{ $siteSetting['office_address'] ?? '' }}</a>
                                <a href="tel://{{ $siteSetting['phone'] ?? '' }}" class="mr-2"> <span
                                        class="fa fa-phone mr-1"></span> {{ $siteSetting['phone'] ?? '' }}</a>
                                <a href="mailto:{{ $siteSetting['email'] ?? '' }}"><span
                                        class="fa fa-paper-plane mr-1"></span> {{ $siteSetting['email'] ?? '' }}</a>
                            </p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-md-end">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="{{ $siteSetting['facebook_url'] ?? '' }}"
                                       class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"><i class="sr-only"
                                                                      target="_blank">Facebook</i></span></a>
                                    <a href="{{ $siteSetting['twitter_url'] ?? '' }}"
                                       class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"><i class="sr-only" target="_blank">Twitter</i></span></a>
                                    <a href="{{ $siteSetting['instagram_url'] ?? '' }}"
                                       class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-instagram"><i class="sr-only"
                                                                       target="_blank">Instagram</i></span></a>
                                    <a href="{{ $siteSetting['youtube_url'] ?? '' }}"
                                       class="d-flex align-items-center justify-content-center"><span
                                            class="fa fa-youtube"><i class="sr-only" target="_blank">Youtube</i></span></a>


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
        <a class="navbar-brand" href="/"> <img
                src="{{ asset('/images/uploads/logo').'/'. $siteSetting['logo_image'] ?? '' }}">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/aboutus" class="nav-link">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link "
                       id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services <i class="fa fa-caret-down" aria-hidden="true"></i>


                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: -30px">

                        @foreach ($services as $item)
                            <li><a class="dropdown-item" href="/service?id={{$item->id}}">{{$item->title}}</a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>


            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<script>
    $(document).ready(function () {
        var path = window.location.pathname;
        $('.nav-item').each(function (index, element) {
            var url = $(element).children().attr("href");
            $(element).removeClass('active');
            if (url == path) {
                $(element).addClass('active');
            }
        });

        /*$('.nav-item').click(function (event) {
            event.preventDefault();
            alert($(this).children().attr("href"));
            $('.nav-item ').removeClass('active');
            $(this).addClass('active');
            window.location.href = $(this).children().attr("href");

        });*/
    });

</script>

<body style="color: black">
