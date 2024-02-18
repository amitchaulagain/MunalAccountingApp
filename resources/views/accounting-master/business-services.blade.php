@extends('weblayouts.app')

@section('content_box')

        <div class="row">
                <span class="header" style="margin-top: 100px">
                    Business Services
                </span>
            <br>
            <br>
            <br>
            <br>
        </div>

        <div class="row">
            <span class="header-text" style="text-align: center">
                <p style="width: 40%; margin-left: 30%">We can help you navigate the accounting and tax responsibilities that come with running a business.
            </span>

            <br>
        </div>



    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div class="home-row">
                        <span class="header">
                            Sole Trader & Partnership
 </span>

                    <div class="header-text">
                        <br>
                        <p>If your business is set up as a sole trader or partnership, we can help you..</p></div>

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
                            Company & Trust

 </span>

                    <div class="header-text">
                        <br>
                        <p>Let us help you navigate the accounting and tax responsibilities that comes with running a
                            business.
                        </p></div>

                    <a href="/company-accounting">
                        <button class="header-button"> Learn More</button>
                    </a>

                </div>
            </div>


        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div class="home-row">
                        <span class="header">
                           Bookkeeping & Payroll

 </span>

                    <div class="header-text">
                        <br>
                        <p>Expert set up and support, we'll take the time and hassle out of managing your books.
                            .</p></div>

                    <a href="/bookkeeping">
                        <button class="header-button"> Learn More</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/images/uploads/home/second-look.jpg') }}" width="500px"
                     height="400px" style="margin-top: 120px;">
            </div>
        </div>
    </section>

@endsection


