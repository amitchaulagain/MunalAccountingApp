@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                           {!! $CMS['individual_tax_header1'] !!} </span>

                    <div class="header-text">
                        <br>
                        <p>{!!$CMS['individual_tax_content1']!!} </p></div>
                    <button class="header-button"> Book an appointment</button>

                </div>
            </div>

            <div class="col-md-6">
                <img class="home-image"
                     src="{{ asset('/public/images/uploads/cms/' . $CMS['individual_tax_image1']) }}">
            </div>
        </div>

       {{-- {!!-- <div class="col-md-6 pl-md-5 py-md-5">
             <div class="heading-section pl-md-4 pt-md-5">
                 <h2 class="mb-4"> {!! $CMS['home_title'] !!}</h2>
             </div>
             <div class="services-2 w-100 d-flex">
                 <div class="text pl-4">
                     <p>{!! $CMS['home_content'] !!}</p>
                 </div>
             </div>
         </div>--!!}--}}

    </section>


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="header">{!!$CMS['individual_tax_header2']!!}</span>
                </div>
            </div>
        </div>
        <div class="row main">
            <div class="col-lg-6">
                <div class="row" style="margin-bottom: 40px">
                    <div class="col-lg-2" style="float: left">
                        <div class="circle-box">1</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text">{!!$CMS['individual_tax_header3']!!}</span>
                        <p class="header-text">{!!$CMS['individual_tax_content3']!!}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 40px">

                <div class="col-lg-2" style="float: left">
                        <div class="circle-box">2</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text">{!!$CMS['individual_tax_header4']!!}</span>
                        <p class="header-text">{!!$CMS['individual_tax_content4']!!}</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 40px">

                <div class="col-lg-2" style="float: left">
                        <div class="circle-box">3</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text"> {!!$CMS['individual_tax_header5']!!}</span>
                        <p class="header-text"> {!!$CMS['individual_tax_content5']!!}</p>
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img class="main-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['individual_tax_image2']) }}">
                </div>
            </div>
        </div>


    </section>

@endsection


