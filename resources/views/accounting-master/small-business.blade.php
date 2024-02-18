@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            Sole Trader & Small Business Tax Returns </span>

                    <div class="header-text">
                        <br>
                        As Australia’s leading taxation experts, we’re on top of every tax change that can shape or break your small business. If your business is set up as a sole trader or partnership, we can help you. We offer a number of small business services to help streamline your finances.
                           </p></div>
                    <button class="header-button"> Book an appointment</button>

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
                    <span class="header">What we offer Small Business? </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Sole trader and small business experts
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Don't let opportunities to claim pass you by,
                                    we offer year round support. We are more than just your one stop tax shop
                                    .
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Less time on tax, more time for your business
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>Say goodbye to paper receipts and take
                                    advantage of ReceiptHub (our receipt tracker app)
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">In office, over the phone or via email convenience</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> Convenience is the key. We work with you to
                                    fit your lifestyle and schedule. We can help automate processes to ensure maximum
                                    efficiency.
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Business Tax returns from $349 (tax deductible)</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> Take advantage of the instant asset write off and book your tax appointment today
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">First BAS free* with H&R Block for sole traders
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> Plus, if you complete all 4 BASs with us in a financial year, you will receive 20% off* that year’s tax return!
                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">We can help you control your cash with professional bookkeeping & BAS services</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> By using the small business services that H&R Block has to offer you can streamline your finances

                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


@endsection


