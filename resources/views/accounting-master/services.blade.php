@extends('weblayouts.app')

@section('content_box')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Services</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                {!! $CMS['services_content'] !!}
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">Welcome to Accounting</span>
                        <h2 class="mb-4">We Are the Best Accounting Agency</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wealth"></span></div>
                        <div class="text pl-4">
                            <h4>Market Analysis</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
                        <div class="text pl-4">
                            <h4>Accounting Advisor</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
                        <div class="text pl-4">
                            <h4>General Consultancy</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accounting"></span></div>
                        <div class="text pl-4">
                            <h4>Structured Assestment</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Price &amp; Plans</span>
                    <h2>Affordable Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Personal</span>
                            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Business</span>
                            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Ultimate</span>
                            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Premium</span>
                            <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                            </ul>

                            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
