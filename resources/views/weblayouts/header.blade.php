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
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light fixed-top" id="ftco-navbar">
    <div class="col-md-9">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <a class="navbar-brand" href="/"> <img
                        src="{{ asset('/images/uploads/logo').'/'. $siteSetting['logo_image'] ?? '' }}">
                </a>
                <li class="nav-item active"><a href="/tax-return" class="nav-link">Individual Tax</a></li>
                <li class="nav-item"><a href="/business-services" class="nav-link">Business Services</a></li>
                <li class="nav-item"><a href="/financial-services" class="nav-link">Financial Services</a></li>
                <li class="nav-item"><a href="/resources" class="nav-link">Resources</a></li>


                {{--  <li class="nav-item dropdown">
                      <a class="nav-link "
                         id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services <i class="fa fa-caret-down" aria-hidden="true"></i>


                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: -30px">

                          @foreach ($services as $item)
                              <li><a class="dropdown-item" href="/service?id={{$item->id}}">{{$item->title}}</a></li>
                          @endforeach

                      </ul>
                  </li>--}}
                <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3">
        <a style="float: right; margin-right: 20px; color: black" href="tel://{{ $siteSetting['phone'] ?? '' }}"> <span
                class="fa fa-phone mr-1"></span> {{ $siteSetting['phone'] ?? '' }}</a>
        <a style="float: right; margin-right: 20px; color: black" href="mailto:{{ $siteSetting['email'] ?? '' }}"><span
                class="fa fa-paper-plane mr-1"></span> {{ $siteSetting['email'] ?? '' }}</a>
    </div>

    <div id="overlay1">
        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <img
                        width="80" height="80" alt="Book with your local office"
                        src="https://pubweb-kentico.s3.ap-southeast-2.amazonaws.com/hrb/files/21/212a6447-697d-4414-af93-78562da8abc3.png">
                </div>

                <div style="top:-14px;" class="col-md-6">
                    <a href="/lodge-in-person"><h3>Book with your local office</h3></a>

                    <p>
                        Have a Tax Expert handle everything, from start to finish. Meet in person at one of our
                        400+
                        offices nationwide.</p>
                </div>


            </div>

        </div>
        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <img
                        width="80" height="80" alt="Book with your local office"
                        src="https://pubweb-kentico.s3.ap-southeast-2.amazonaws.com/hrb/files/21/212a6447-697d-4414-af93-78562da8abc3.png">
                </div>

                <div style="top:-14px;" class="col-md-6">
                    <a href="/online"><h3>Online with an expert</h3></a>

                    <p>
                        Our Tax Experts will complete your tax return online with you, so you can stay at home..</p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-7">
                    <a href="/tax-review">
                        <h3>Second Look Assessment</h3>
                    </a>
                    <p>We will review your tax return and check that you have received the maximum refund.</p>
                </div>


            </div>

        </div>


    </div>
    <div id="overlay2">
        <div class="overlay-item-box">
            <div class="row">
                <div style="top:-14px;" class="col-md-6">

                    <a href="/small-business">
                        <h3>
                            Sole Trader & Partnership
                        </h3>
                    </a>

                    <p>
                        If your business is set up as a sole trader or partnership, we can help you.
                    </p>
                </div>


            </div>

        </div>
        <div class="overlay-item-box">
            <div class="row">
                <div style="top:-14px;" class="col-md-6">
                    <a href="/bas"><h3> Sole Trader BAS
                        </h3>
                    </a>
                    <p>
                        FREE Business Activity Statement* to all first time H&R Block BAS clients.
                    </p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-7">

                    <a href="/company-accounting">
                        <h3> Company & Trust
                        </h3>
                    </a>

                    <p> Let us help you navigate the accounting and tax responsibilities that comes with running a
                        business.
                    </p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-7">
                    <a href="/bookkeeping">
                        <h3> Bookkeeping
                        </h3>
                    </a>

                    <p> Expert set up and support, we'll take the time and hassle out of managing your books.
                    </p>
                </div>


            </div>

        </div>

    </div>
    <div id="overlay3">
        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <img
                        width="80" height="80" alt="Book with your local office"
                        src="https://pubweb-kentico.s3.ap-southeast-2.amazonaws.com/hrb/files/74/741668be-e210-45e5-b373-eae213df216a.png">
                </div>

                <div style="top:-14px;" class="col-md-6">
                    <a href="/smsf">
                        <h3>Self Managed Super Funds</h3>
                    </a>
                    <p>
                        Get more control over your super and retirement planning with H&R Block.</p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <img
                        width="80" height="80" alt="Book with your local office"
                        src="https://pubweb-kentico.s3.ap-southeast-2.amazonaws.com/hrb/files/74/741668be-e210-45e5-b373-eae213df216a.png">
                </div>

                <div style="top:-14px;" class="col-md-6">
                    <a href="/financial-planning">
                        <h3>Financial Planning & Advice</h3>
                    </a>
                    <p>
                        Let us assist you with all your financial requirements.</p>
                </div>


            </div>

        </div>
    </div>
    <div id="overlay4">

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <img
                        width="80" height="80" alt="Book with your local office"
                        src="https://pubweb-kentico.s3.ap-southeast-2.amazonaws.com/hrb/files/74/741668be-e210-45e5-b373-eae213df216a.png">
                </div>

                <div style="top:-14px;" class="col-md-6">
                    <a href="/tax-calculator">
                        <h3>Tax Calculator</h3>
                    </a>

                    <p>
                        Calculate your tax return quickly with our easy to use tax calculator.</p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <img
                        width="80" height="80" alt="Book with your local office"
                        src="https://pubweb-kentico.s3.ap-southeast-2.amazonaws.com/hrb/files/74/741668be-e210-45e5-b373-eae213df216a.png">
                </div>

                <div style="top:-14px;" class="col-md-6">
                    <a href="/tax-checklist">
                        <h3>Tax Checklist</h3>
                    </a>

                    <p>
                        Prepare for a quick and efficient tax return experience with our checklist.</p>
                </div>


            </div>

        </div>


    </div>


</nav>
<!-- END nav -->
<script>


</script>

<body style="color: black">
