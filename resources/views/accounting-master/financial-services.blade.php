@extends('weblayouts.app')

@section('content_box')

    <div class="row">
                <span class="header" style="margin-top: 100px">
                    Financial Services
                </span>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="row">
            <span class="header-text" style="text-align: center">
                <p style="width: 40%; margin-left: 30%">We have a range of financial services available to assist with your needs.
            </span>

        <br>
    </div>



    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div class="home-row">
                        <span class="header">
                    Self Managed Super Funds (SMSF)
 </span>

                    <div class="header-text">
                        <br>
                        <p>Get more control over your super and retirement planning with H&R Block.
                        </p></div>

                    <a href="/small-business">
                        <button class="header-button"> Learn More</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/images/uploads/home/second-look.jpg') }}" width="500px"
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
                <img class="tax-image" src="{{ asset('/images/uploads/home/second-look.jpg') }}" width="500px"
                     height="400px" style="margin-top: 120px;">
            </div>
            <div class="col-md-6 ">

                <div class="home-row">
                        <span class="header">
                            Loans and Financial Advice


 </span>

                    <div class="header-text">
                        <br>
                        <p>Are you looking to apply for a new mortgage or refinance an existing mortgage at a better rate? Would you like to develop your retirement pathway plan? We have good news for you!
                        </p></div>

                    <a href="/company-accounting">
                        <button class="header-button"> Learn More</button>
                    </a>

                </div>
            </div>


        </div>
    </section>

@endsection


