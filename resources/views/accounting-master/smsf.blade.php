@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            Self Managed Super Fund Setup and Audit Solutions </span>

                    <div class="header-text">
                        <br>
                        <p>Discover the power of H&R Block's SMSF setup and management solutions! Our experts will manage the complexities, relieving you of stress. Rest easy knowing that your SMSF is in capable hands.

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
                    <span class="header">What we offer ? </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Establishing SMSF</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>H&R Block simplifies the SMSF establishment process by providing a hassle free, execution only service. We prepare all legal documents, undertake registrations with ASIC and the ATO and will guide you through the entire setup process until you are ready to invest from your SMSF.</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Monitoring Contributions and Rollovers
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>H&R Block will assist ongoing SMSF clients my monitoring contributions and assessing them against the relevant thresholds. We can also assist with the facilitation of rollovers/contributions into the SMSF by providing your SMSF with an active electronic service address (ESA) to adhere to Superstream regulations.
                                    .</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Establishing and Managing SMSF Pension Accounts
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> H&R Block can assist SMSF clients by setting up Account Based Pensions, calculating minimum pension drawdowns and providing all legal documents. We will monitor pension drawdowns for ongoing clients to ensure minimum annual payments are being met in accordance with SISR regulations.
                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Establishing and Managing SMSF Pension Accounts
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> H&R Block can assist SMSF clients by setting up Account Based Pensions, calculating minimum pension drawdowns and providing all legal documents. We will monitor pension drawdowns for ongoing clients to ensure minimum annual payments are being met in accordance with SISR regulations.
                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Borrowing to Purchase Property in your SMSF

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>H&R Block can assist with establishing the relevant structure to enable your SMSF to undertake a limited recourse borrowing arrangement with a lender (including related party lending) to facilitate property purchases with your SMSF.

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Tax, Financial & Statutory Reporting Requirements

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> H&R Block can assist in preparing and completing the annual SMSF financial & member statements, annual taxation and statutory returns and the independent audit. We can also assist with all other ATO compliance obligations that may arise including BAS & PAYG lodgements and TBAR reporting requirements.

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Real-time Data & Reporting

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> H&R Block can provide you access to our secure online reporting platform where you can view and keep track of your SMSF data in real time. Transactions are updated regularly and a variety of member and investment reports can be generated to help you better manage your SMSF’s investment and performance.

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Establishing and Managing SMSF Pension Accounts
</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> H&R Block can assist SMSF clients by setting up Account Based Pensions, calculating minimum pension drawdowns and providing all legal documents. We will monitor pension drawdowns for ongoing clients to ensure minimum annual payments are being met in accordance with SISR regulations.
                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Winding up a SMSF & Estate Planning

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> H&R Block can assist in SMSF exit strategies and winding up a SMSF including the preparation and completion of the final tax return and facilitating the cancellation of the Fund’s registrations with the ATO. We can also provide assistance in the proration of SMSF estate documentation including death benefit nominations.

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Specialist Support

</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> Ongoing clients will have the support of our team of qualified SMSF specialists who can assist with a variety of tax and compliance related superannuation queries and strategies. We can also provide specific superannuation tax advice and assist with ATO audits.

                                    .</li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


@endsection


