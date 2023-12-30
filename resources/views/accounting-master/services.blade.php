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

@endsection
