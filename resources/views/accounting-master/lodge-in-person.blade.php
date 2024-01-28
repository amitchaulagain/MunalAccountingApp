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


@endsection


