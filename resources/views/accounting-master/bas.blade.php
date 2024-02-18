@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            First BAS with H&R Block FREE* </span>

                    <div class="header-text">
                        <br>
                        <p>You've trusted us with your tax in the past, now give us a chance to show how we can help with your Business Activity Statements. H&R Block are the small business & sole trader experts. Whether you are looking for more expertise or more time back for your business, we are here for you.</p></div>


                    <p style="font-weight: bold">
                        To prove our commitment to you, we are offering a FREE BAS* to all first time H&R Block BAS clients. *T&C's Apply
                    </p>
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
                    <span class="header">What we offer ? </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">BAS agent lodgment extension

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>If you work with a registered tax agent like H&R Block you are automatically given an extension on your BAS due date.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">First BAS free & 20% off your tax return if you lodge all 4 BAS with us

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>We are so confident that our expertise will shine through that we want to show you for free. We are the experts in tax with over 50 years of Australian tax expertise and offer sole trader tax returns from $349 - tax deductible of course.

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">BAS pricing from $99</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> We have a number of BAS packages to suit your business. See package pricing below. But don't forget, your first BAS is free.

                                    .
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Sole trader and small business tax experts

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> Whether you are a tradie, consultant, freelancer, hairstylist, taxi or ride share driver, we are here to get you back to business.

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
                                <li><span class="fa fa-check mr-2"></span>We will be your trusted partner, providing advice year round & setting your business up to get the best outcome at tax time. We offer bookkeeping, payroll & business tax return services so you can get more out of your business by doing less!


                                    .
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



            </div>
        </div>
    </section>


@endsection


