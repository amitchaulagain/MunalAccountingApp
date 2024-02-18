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
    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="header">How does online with an expert work?</span>
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
                        <span class="bolder-text"> You fill out our secure form
</span>
                        <p class="header-text">Fill in your details, upload your tax documents and one of our tax agents will contact you. Your tax consultant is always ready to answer your questions online.
                        </p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 40px">

                    <div class="col-lg-2" style="float: left">
                        <div class="circle-box">2</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text">Our experts work on your return</span>
                        <p class="header-text"> Once we’ve all your information, we carefully prepare your return to make sure we don’t miss any deductions or offsets. After the hard work is done for you, just review your tax return online. Once you’re happy, just give us the go-ahead to lodge it.</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 40px">

                    <div class="col-lg-2" style="float: left">
                        <div class="circle-box">3</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text"> You can expect a rapid return</span>
                        <p class="header-text">With a quick turnaround on your returns and refund from the ATO, there are no long waiting periods.</p>
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="row">
                    <img src="{{ asset('/images/uploads/home/second-look.jpg') }}">
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


