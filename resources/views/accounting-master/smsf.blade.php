@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            {!! $CMS['smsf_header1'] !!} </span>

                    <div class="header-text">
                        <br>
                        <p>{!! $CMS['smsf_content1'] !!}

                        </p></div>

                    <a href="/contactus#hero">
                        <button class="header-button"> Book an appointment</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image"  src="{{ asset('/public/images/uploads/cms/' . $CMS['smsf_image1']) }}" width="500px"
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




    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="header">{!! $CMS['smsf_header2'] !!} </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header3'] !!} </span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['smsf_content3'] !!}</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header4'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['smsf_content4'] !!}
                                    .</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header5'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['smsf_content5'] !!}
                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header6'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['smsf_content6'] !!}
                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header7'] !!}

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['smsf_content7'] !!}

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header8'] !!}

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['smsf_content8'] !!}

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header9'] !!}

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['smsf_content9'] !!}

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header10'] !!}
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['smsf_content10'] !!}
                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header11'] !!}

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['smsf_content11'] !!}

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">{!! $CMS['smsf_header12'] !!}

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['smsf_content12'] !!}

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


@endsection


