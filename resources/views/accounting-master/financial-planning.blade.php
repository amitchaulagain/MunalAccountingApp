@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                           {!! $CMS['financial_planning_header1'] !!}
 </span>

                    <div class="header-text">
                        <br>
                        <p> {!! $CMS['financial_planning_content1'] !!}

                        </p></div>
                    <a href="/contactus#hero">
                        <button class="header-button"> Enquire Now</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['financial_planning_image1']) }}" width="500px"
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
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
 {!! $CMS['financial_planning_header2'] !!} </span>

                    <div class="header-text">
                        <br>
                        <p> {!! $CMS['financial_planning_content2'] !!}

                        </p></div>
                    <a href="/contactus#hero">
                        <button class="header-button"> Enquire Now</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['financial_planning_image2']) }}" width="500px"
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
                    <span class="header"> {!! $CMS['financial_planning_header3'] !!}  </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['financial_planning_header4'] !!}

</span>


                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['financial_planning_header5'] !!}</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['financial_planning_header6'] !!}

</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['financial_planning_header7'] !!}
</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['financial_planning_header8'] !!}</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {!! $CMS['financial_planning_header9'] !!}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


