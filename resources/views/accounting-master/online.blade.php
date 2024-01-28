@extends('weblayouts.app')

@section('content_box')


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            Lodge Tax Online with an Expert </span>

                    <div class="header-text">
                        <br>
                        <p>Want your return prepared by an experienced tax consultant, but can’t make it into the office? Online Tax Adviser has you covered. Get the same service you expect in person, but through the convenience of our secure online portal..</p></div>
                    <button class="header-button"> Lodge with an expert</button>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/images/uploads/home/online.jpg') }}" width="500px"
                     height="400px" style="margin-top: 120px;">
            </div>

        </div>
        {{-- <div class="col-md-6 pl-md-5 py-md-5">
             <div class="heading-section pl-md-4 pt-md-5">
                 <h2 class="mb-4"> {{ $CMS['home_title'] }}</h2>
             </div>
             <div class="services-2 w-100 d-flex">
                 <div class="text pl-4">
                     <p>{!! $CMS['home_content'] !!}</p>
                 </div>
             </div>
         </div>--}}

    </section>


@endsection


