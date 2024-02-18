@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                           Assisting you with your Company & Trust Accounting </span>

                    <div class="header-text">
                        <br>
                        <p>We can help you navigate the accounting and tax responsibilities that come with running a business.
                           </div>
                    <button class="header-button"> Enquire now</button>

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


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="header">We have an extensive range of services to assist your business  </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Accounting Services

</span>


                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Setting up a Business</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">ASIC Compliance

</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Financial Reporting
</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Single Touch Payroll</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Performance & KPI-Tracking</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Cashflow & Budgets</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Business-Plans</span>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


@endsection


