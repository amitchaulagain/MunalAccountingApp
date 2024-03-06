@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6 ">
                <div style="margin-top: 120px;" class="home-row">
                        <span class="header">
                            Tax Return Checklist
 </span>

                    <div class="header-text">
                        <br>
                        <p>To assist in getting you your maximum refund, it’s important to be prepared with some items of information, which we’ve outlined in our tax return checklist
                        </p></div>
                    <button class="header-button"> Download Checklist</button>

                </div>
            </div>

            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/public/images/uploads/home/checklist.png') }}" width="500px"
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


