@extends('weblayouts.app')

@section('content_box')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Services</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                @foreach ($services as $item)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="excerpt d-block">{{$item->title}}</span>
                                {!!$item->description!!}
                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div
                        class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url(images/about.jpg);">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">Welcome to Accounting</span>
                        <h2 class="mb-4">We Are the Best Accounting Agency</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wealth"></span></div>
                        <div class="text pl-4">
                            <h4>Market Analysis</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accountant"></span></div>
                        <div class="text pl-4">
                            <h4>Accounting Advisor</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-teamwork"></span></div>
                        <div class="text pl-4">
                            <h4>General Consultancy</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accounting"></span></div>
                        <div class="text pl-4">
                            <h4>Structured Assestment</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
