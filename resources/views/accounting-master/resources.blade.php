@extends('weblayouts.app')

@section('content_box')

    <div class="row">
                <span class="header" style="margin-top: 100px">
                    Resources
                </span>
        <br>
        <br>
        <br>
        <br>
    </div>

    <div class="row">
            <span class="header-text" style="text-align: center">
                <p style="width: 40%; margin-left: 30%">All the tax tools & knowledge you need.
            </span>

        <br>
    </div>



    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div class="home-row">
                        <span class="header">
                   Tax Calculator
 </span>

                    <div class="header-text">
                        <br>
                        <p>Calculate the tax refund you could receive after tax deductions with H&R Block's easy-to-use,
                            accurate income tax calculator.

                        </p></div>

                    <a href="/tax-calculator">
                        <button class="header-button">Launch Calculator</button>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/home/second-look.jpg') }}" width="500px"
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
                <img class="tax-image" src="{{ asset('/public/images/uploads/home/second-look.jpg') }}" width="500px"
                     height="400px" style="margin-top: 120px;">
            </div>
            <div class="col-md-6 ">

                <div class="home-row">
                        <span class="header">
                            Tax Checklist

 </span>

                    <div class="header-text">
                        <br>
                        <p>We have prepared a checklist to make your tax return experience is convenient and hassle
                            free.

                        </p></div>

                    <a href="/tax-chec">
                        <button class="header-button"> Check this out</button>
                    </a>

                </div>
            </div>


        </div>
    </section>
@endsection


