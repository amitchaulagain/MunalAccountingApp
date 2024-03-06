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
                        src="{{ asset('/public/images/uploads/logo').'/'. $siteSetting['logo_image'] ?? '' }}">
                </a>
                <li class="nav-item active"><a href="/tax-return" class="nav-link">Individual Tax</a></li>
                <li class="nav-item"><a href="/business-services" class="nav-link">Business Services</a></li>
                <li class="nav-item"><a href="/financial-services" class="nav-link">Financial Services</a></li>
                <li class="nav-item"><a href="/tax-calculator" class="nav-link"><span style="color: orange">Calculator</span>
                        <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
                            <path
                                d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path
                                d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        </svg>

                    </a></li>


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
                <li class="nav-item"><a href="/contactus" class="nav-link"><span style="color: orange">Talk Now</span>

                        <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                    </a></li>
                <li class="nav-item"><a href="/blogs" class="nav-link">Blog</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3">
        <a style="float: right; margin-right: 20px; color: black" href="tel://{{ $siteSetting['phone'] ?? '' }}"> <span
                style="color: orange" class="fa fa-phone mr-1"></span> {{ $siteSetting['phone'] ?? '' }}</a>
        <a style="float: right; margin-right: 20px; color: black" href="mailto:{{ $siteSetting['email'] ?? '' }}"><span
                style="color: orange" class="fa fa-paper-plane mr-1"></span> {{ $siteSetting['email'] ?? '' }}</a>
    </div>

    <div id="overlay1">
        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                        <path
                            d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
                    </svg>
                </div>

                <div style="top:-14px;" class="col-md-6 hovered-text">
                    <a href="/lodge-in-person"><h3>Book with our office</h3></a>


                    <p>
                        Let a tax professional help you take care of everything, guiding you through the entire process.</p>
                </div>


            </div>

        </div>
        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                        <path
                            d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5M12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0M1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25"/>
                    </svg>
                </div>

                <div style="top:-14px;" class="col-md-6 hovered-text">
                    <a href="/online"><h3>Online with an expert</h3></a>

                    <p>
                        Let a tax professional help you of completing your tax return online,allowing you to conveniently handle the process from the comfort of your home.</p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">

                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-journal-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                        <path
                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                        <path
                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                    </svg>
                </div>

                <div style="top:-14px;" class="col-md-6 hovered-text">
                    <a href="/tax-review">
                        <h3>Tax Review</h3>
                    </a>
                    <p>We will review your tax return and check that you have received the maximum refund.</p>
                </div>


            </div>

        </div>


    </div>
    <div id="overlay2">
        <div class="overlay-item-box">
            <div class="row">
                <div style="top:-14px;" class="col-md-6 hovered-text">

                    <a href="/small-business">
                        <h3>
                            Sole Trader & Partnership
                        </h3>
                    </a>

                    <p>
                        If you're running a business as a sole trader or in partnership, we've got the expertise to support you.

                    </p>
                </div>


            </div>

        </div>
        <div class="overlay-item-box">
            <div class="row">
                <div style="top:-14px;" class="col-md-6 hovered-text">
                    <a href="/bas"><h3> Sole Trader BAS
                        </h3>
                    </a>
                    <p>
                        We help you in preparing Business Activity Statement. We've got that expertise to assist you.
                    </p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-7 hovered-text">

                    <a href="/company-accounting">
                        <h3> Company & Trust
                        </h3>
                    </a>

                    <p> Allow us to guide you through the accounting and tax responsibilities that come with managing a business.
                    </p>
                </div>


            </div>

        </div>

        <div class="overlay-item-box">

            <div class="row">
                <div class="col-md-1">
                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-journals" viewBox="0 0 16 16">
                        <path
                            d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2"/>
                        <path
                            d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0"/>
                    </svg>

                </div>

                <div style="top:-14px;" class="col-md-6 hovered-text">
                    <a href="/bookkeeping">
                        <h3> Bookkeeping
                        </h3>
                    </a>

                    <p>Let our experts handle the setup and provide ongoing support, making bookkeeping a seamless and hassle-free experience for you.
                    </p>
                </div>


            </div>

        </div>

    </div>
    <div id="overlay3">
        <div class="overlay-item-box">
            <div class="row">
                <div class="col-md-1">
                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                        <path
                            d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                        <path
                            d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                    </svg>
                </div>

                <div style="top:-14px;" class="col-md-6 hovered-text">
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
                    <svg color="orange" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                         class="bi bi-calendar-week" viewBox="0 0 16 16">
                        <path
                            d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                    </svg>

                </div>

                <div style="top:-14px;" class="col-md-6 hovered-text">
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

                <div style="top:-14px;" class="col-md-6 hovered-text">
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

                <div style="top:-14px;" class="col-md-6 hovered-text">
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
