@extends('weblayouts.app')

@section('content_box')


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            Book with your local H&R Block office </span>

                    <div class="header-text">
                        <br>
                        <p>As Australia’s largest preparer of personal tax returns, we’re all about expertise and convenience. That means our offices are open all year round, and even on nights and weekends at tax time. With over 400 offices nationwide, you won’t have far to go to lodge your tax return with one of our tax experts.</p></div>
                    <button class="header-button"> Book an appointment</button>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/images/uploads/home/tax-image.jpg') }}" width="500px"
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
                    <span class="header">How does it work  ? </span>
                </div>
            </div>
        </div>
        <div class="row main">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-2" style="float: left">
                        <div class="circle-box">1</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text"> Book an appointment</span>
                        <p> Simply go to our Find an Office and book a time in a location that suits you</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2" style="float: left">
                        <div class="circle-box">2</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text">We will email you a confirmation and checklist</span>
                        <p> We will send you an email confirmation with a tax checklist of all what you need to bring to your appointment</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2" style="float: left">
                        <div class="circle-box">3</div>
                    </div>
                    <div class="col-lg-10" style="float: left">
                        <span class="bolder-text"> You attend your appointment with our tax expert</span>
                        <p> Attend your appointment with our tax expert and we'll get you a maximum refund guarantee in no time.. it's that simple .</p>
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


