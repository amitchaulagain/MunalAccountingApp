@extends('weblayouts.app')

@section('content_box')


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                           {!! $CMS['online_header1'] !!} </span>

                    <div class="header-text">
                        <br>
                        <p>{!! $CMS['online_content1'] !!}</p></div>

                    <a href="/contactus#hero">
                        <button class="header-button"> Connect with us </button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="home-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['online_image1']) }}" width="500px"
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
    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-10 header-text" style="float: left">
                        <p> {!! $CMS['online_content2'] !!}</p>
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img src="{{ asset('/public/images/uploads/cms/' . $CMS['online_image2']) }}" width="500px" height="auto" style="margin-left: 10px">
                </div>
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


