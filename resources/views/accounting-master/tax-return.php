@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            Second Look Assessment </span>

                    <div class="header-text">
                        <br>
                        <p>Is your tax refund lower than expected this year?
                            <br>

                            Not sure if you got your maximum refund? Book an appointment with H&R Block for a free
                            Second Look®..</p></div>
                    <button class="header-button"> Book an appointment</button>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/home/second-look.jpg') }}" width="500px"
                     height="400px" style="margin-top: 120px;">
            </div>


            <div style="align-items: center" class="col-md-6 ">
                <p> The government and the ATO have made a number of changes to the tax system this year which will pile
                    downward pressure on the size of tax refunds.

                <p> The end of the LMITO (low and middle income tax offset) means anyone earning up to $126,000 may see
                    their tax refund reduced by up to $1,500.

                <p> The ATO’s new changes to working from home deductions will also negatively impact millions of
                    taxpayers. The impact of the lower deductions available and the inconvenience of increased
                    compliance requirements means many taxpayers will struggle to make a claim this year and of those
                    that do, the majority will see much smaller claims.


                <p> This is why it’s even more important this year to seek expert help. Talk to a Tax Expert at H&R
                    Block to see what you can do to get the size of your refund back up again by simply claiming all the
                    deductions you are legally entitled to.
            </div>

            <div style="align-items: center" class="col-md-6">

                <p>If you didn't use a tax accountant or you disagree with your tax assessment, bring in a print-out of your current and/or past years' tax return(s) for a free Second Look®. We will review your tax return and check you received the maximum tax refund. If we find any deductions, offsets or benefits that you are entitled to, we can lodge a tax return amendment and get you the extra money.

                <p>At H&R Block nothing is too complicated. We can assist you, no matter who lodged your tax return.

                <p> Fees apply for corrected or amended returns, however these fees are tax deductible.
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


