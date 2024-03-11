@extends('weblayouts.app')

@section('content_box')

    <div class="row">
                <span class="header" style="margin-top: 100px">
                    {!! $CMS['financial_services_header1'] !!}
                </span>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="row">
            <span class="header-text" style="text-align: center">
                <p style="width: 40%; margin-left: 30%">
                {!! $CMS['financial_services_content1'] !!}

            </span>

        <br>
    </div>



    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div class="home-row">
                        <span class="header">
                                    {!! $CMS['financial_services_header2'] !!}

 </span>

                    <div class="header-text">
                        <br>
                        <p>                {!! $CMS['financial_services_content2'] !!}

                        </p></div>

                    <a href="/smsf">
                        <button class="header-button"> Learn More</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['financial_services_image1']) }}" width="500px"
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
            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/cms/' . $CMS['financial_services_image2']) }}" width="500px"
                     height="400px" style="margin-top: 120px;">
            </div>
            <div class="col-md-6 ">

                <div class="home-row">
                        <span class="header">
                                            {!! $CMS['financial_services_header3'] !!}

                        </span>

                    <div class="header-text">
                        <br>
                        <p>                {!! $CMS['financial_services_content3'] !!}

                        </p></div>

                    <a href="/financial-planning">
                        <button class="header-button"> Learn More</button>
                    </a>

                </div>
            </div>


        </div>
    </section>

@endsection


