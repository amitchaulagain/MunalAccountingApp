@extends('weblayouts.app')

@push('title')
    {{ $CMS['about_title'] }}
@endpush
@push('meta')
    {{ $CMS['about_meta'] }}
@endpush

@section('content_box')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{ asset('/public/images/uploads/cms/' . $CMS['about_image']) }});">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="heading-section pl-md-4 pt-md-5">
                    <h2 class="mb-4"> {{ $CMS['about_title'] }}</h2>
                    {!! $CMS['about_content'] !!}
                </div>
            </div>
        </div>
    </div>
</section>

{{--
<section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="50">0</strong>
                    </div>
                    <div class="text">
                        <span>Years of Experienced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="8500">0</strong>
                    </div>
                    <div class="text">
                        <span>Cases Completed</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="20">0</strong>
                    </div>
                    <div class="text">
                        <span>Awards Won</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="50">0</strong>
                    </div>
                    <div class="text">
                        <span>Expert Consultant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}}



<section class="ftco-section testimony-section bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Testimonies</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">"Choosing Munal Accounting service was one of the best decisions we made for our financial needs. Their team's expertise in taxation and their proactive approach have been invaluable to us. They genuinely care about our success and always go the extra mile to ensure we're well-informed and on the right track. Their commitment to excellence is evident in every interaction. Highly recommended!"</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/uploads/home/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Sam Mendes</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">"My individual tax return was a stress-free experience. Their attention to detail and knowledge of the latest tax regulations ensured that I maximized my returns while staying compliant. The team was responsive, thorough, and made the entire process seamless. I'll definitely be returning next year and would recommend them to anyone seeking reliable tax services."</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/uploads/home/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">IT Assistant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">"Entrusting Munal Accounting  with our company's accounting and salary management was one of the best decisions we've made. Their meticulous approach ensures that our finances are in order and that our employees are paid accurately and on time.Their expertise has been instrumental in streamlining our processes and providing invaluable financial insights." </p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/uploads/home/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Shubarna Sharma</p>
                                        <span class="position">Manager,Oporto</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--
<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-faqs w-100">
                    <div class="img mb-4 mb-sm-0" style="background-image:url(images/uploads/home/about-2.jpg);">
                    </div>
                    <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="heading-section mb-5 mt-5 mt-lg-0">
                    <span class="subheading">FAQs</span>
                    <h2 class="mb-3">Frequently Asks Questions</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="mb-0">How to fixed a problem?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    <p class="mb-0">How to manage your business loans?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                    <p class="mb-0">How to grow your investments funds?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0" id="headingFour" role="tab">
                            <h2 class="mb-0">
                                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                    <p class="mb-0">What are those requirements for businesses?</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
@endsection

{{--

<div class="container">
    <div class="py-5">
        <div class="row">
            @if (!empty($CMS['about_image']))
                <div class="col-md-5">
                    <img width="500px" class="h-auto mb-2" src="{{ asset('/storage/cms/' . $CMS['about_image']) }}"
                         alt="Error">
                </div>
            @endif
            @if (empty($CMS['about_image']))
                <div class="col-md-12" style="text-align: justify">
                    {!! $CMS['about_content'] !!}
                </div>
            @else
                <div class="col-md-7" style="text-align: justify">
                    {!! $CMS['about_content'] !!}
                </div>
            @endif
        </div>
    </div>
</div>--}}
