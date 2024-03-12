@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                             {!! $CMS['small_business_header1'] !!} </span>

                    <div class="header-text">
                        <br>
                        {!! $CMS['small_business_content1'] !!}
                        </p></div>
                    <a href="/contactus#hero">
                        <button class="header-button"> Book an appointment</button>
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <img class="home-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['small_business_image1']) }}" >
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
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['small_business_header3'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['small_business_content3'] !!}
                                    .
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['small_business_header4'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['small_business_content4'] !!}
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
             {{--   <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['small_business_header5'] !!} </span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>  {!! $CMS['small_business_content5'] !!}
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['small_business_header6'] !!} </span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>  {!! $CMS['small_business_content6'] !!}
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['small_business_header7'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>  {!! $CMS['small_business_content7'] !!}
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['small_business_header8'] !!} </span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>  {!! $CMS['small_business_content8'] !!}
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>--}}



            </div>
        </div>
    </section>


@endsection


