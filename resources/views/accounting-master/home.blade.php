@extends('weblayouts.app')

@section('content_box')

    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            @foreach ($gal as $item)
                <div class="slider-item"
                     style="background-image:url({{'/images/uploads/home/sliders/'.$item->gal_image}})">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-8 ftco-animate">
                                <div class="text w-100 text-center">
                                    <h2>We Business Grow</h2>
                                    <h1 class="mb-4">We Help You Businesses Innovate and Grow</h1>
                                    <p><a href="#" class="btn btn-white">Connect with us</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="hero">
                        <h1>Australian Tax Calculator</h1>
                        <form id="taxForm">
                            <label for="income">Income:</label>
                            <input type="number" id="income" required><br><br>

                            <label for="extraIncome">Extra Income:</label>
                            <input type="number" id="extraIncome" required><br><br>

                            <label for="frequency">Frequency:</label>
                            <select id="frequency">
                                <option value="weekly">Weekly</option>
                                <option value="fortnightly">Fortnightly</option>
                                <option value="monthly">Monthly</option>
                                <option value="annually">Annually</option>
                            </select><br><br>

                            <button type="button" onclick="calculateTax()">Calculate Tax</button>
                        </form>

                        <div id="result"></div>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <h2 class="mb-4"> {{ $CMS['home_title'] }}</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="text pl-4">
                            <p>{!! $CMS['home_content'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--
        <section class="ftco-section bg-light ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block">
                            <div class="icon d-flex mr-2">
                                <span class="flaticon-accounting-1"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Accounting</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block">
                            <div class="icon d-flex mr-2">
                                <span class="flaticon-tax"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Tax, Compliance &amp; Payroll</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block">
                            <div class="icon d-flex mr-2">
                                <span class="flaticon-loan"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Financial Services</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block">
                            <div class="icon d-flex mr-2">
                                <span class="flaticon-budget"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Growth &amp; Funding Access</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    --}}

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

    {{--
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
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
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
    --}}
    {{--TODO--}}
    {{--<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-faqs w-100">
                        <div class="img mb-4 mb-sm-0" style="background-image:url(images/uploads/aboutus/about-2.jpg);">
                        </div>
                        <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/uploads/aboutus/about.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
                        <span class="subheading">FAQs</span>
                        <h2 class="mb-3">Frequently Asks Questions</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0">
                                    <button href="#collapseOne"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                            aria-controls="collapseOne">
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
                                    <button href="#collapseTwo"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseTwo">
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
                                    <button href="#collapseThree"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseThree">
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
                                    <button href="#collapseFour"
                                            class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                            data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        <p class="mb-0">What are those requirements for businesses?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    {{-- <section class="ftco-section">
         <div class="container">
             <div class="row justify-content-center pb-5 mb-3">
                 <div class="col-md-7 heading-section text-center ftco-animate">
                     <span class="subheading">News &amp; Blog</span>
                     <h2>Latest news from our blog</h2>
                 </div>
             </div>
             <div class="row d-flex">
                 <div class="col-md-4 d-flex ftco-animate">
                     <div class="blog-entry align-self-stretch">
                         <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('images/post12.jpg');">
                         </a>
                         <div class="text p-4">
                             <div class="meta mb-2">
                                 <div><a href="#">March 31, 2020</a></div>
                                 <div><a href="#">Admin</a></div>
                                 <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                             </div>
                             <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                     blind texts</a></h3>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 d-flex ftco-animate">
                     <div class="blog-entry align-self-stretch">
                         <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('images/post3.jpg');">
                         </a>
                         <div class="text p-4">
                             <div class="meta mb-2">
                                 <div><a href="#">March 31, 2020</a></div>
                                 <div><a href="#">Admin</a></div>
                                 <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                             </div>
                             <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                     blind texts</a></h3>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 d-flex ftco-animate">
                     <div class="blog-entry align-self-stretch">
                         <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('images/image_3.jpg');">
                         </a>
                         <div class="text p-4">
                             <div class="meta mb-2">
                                 <div><a href="#">March 31, 2020</a></div>
                                 <div><a href="#">Admin</a></div>
                                 <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                             </div>
                             <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                     blind texts</a></h3>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <section class="ftco-section bg-light">
         <div class="container">
             <div class="row justify-content-center pb-5 mb-3">
                 <div class="col-md-7 heading-section text-center ftco-animate">
                     <span class="subheading">Price &amp; Plans</span>
                     <h2>Affordable Packages</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6 col-lg-3 ftco-animate">
                     <div class="block-7">
                         <div class="text-center">
                             <span class="excerpt d-block">Personal</span>
                             <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>

                             <ul class="pricing-text mb-5">
                                 <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                 <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                 <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                             </ul>

                             <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3 ftco-animate">
                     <div class="block-7">
                         <div class="text-center">
                             <span class="excerpt d-block">Business</span>
                             <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>

                             <ul class="pricing-text mb-5">
                                 <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                 <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                 <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                             </ul>

                             <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3 ftco-animate">
                     <div class="block-7">
                         <div class="text-center">
                             <span class="excerpt d-block">Ultimate</span>
                             <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>

                             <ul class="pricing-text mb-5">
                                 <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                 <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                 <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                             </ul>

                             <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3 ftco-animate">
                     <div class="block-7">
                         <div class="text-center">
                             <span class="excerpt d-block">Premium</span>
                             <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>

                             <ul class="pricing-text mb-5">
                                 <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                                 <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                                 <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                                 <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                             </ul>

                             <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>--}}
    <script>
        function calculateTax() {
            const income = parseFloat(document.getElementById("income").value);
            const extraIncome = parseFloat(document.getElementById("extraIncome").value);
            const frequency = document.getElementById("frequency").value;

            let totalIncome;
            switch (frequency) {
                case 'weekly':
                    totalIncome = (income + extraIncome) * 52;
                    break;
                case 'fortnightly':
                    totalIncome = (income + extraIncome) * 26;
                    break;
                case 'monthly':
                    totalIncome = (income + extraIncome) * 12;
                    break;
                case 'annually':
                    totalIncome = income + extraIncome;
                    break;
            }

            let taxDue = 0;

            if (totalIncome <= 18200) {
                taxDue = 0;
            } else if (totalIncome <= 45000) {
                taxDue = 0.19 * (totalIncome - 18200);
            } else if (totalIncome <= 120000) {
                taxDue = 5092 + 0.325 * (totalIncome - 45000);
            } else if (totalIncome <= 180000) {
                taxDue = 29467 + 0.37 * (totalIncome - 120000);
            } else {
                taxDue = 51667 + 0.45 * (totalIncome - 180000);
            }

            const medicareLevy = 0.02 * totalIncome; // Assuming the Medicare Levy is 2% for simplicity
            const afterTaxIncome = totalIncome - taxDue - medicareLevy;
            const marginalTaxRate = getMarginalTaxRate(totalIncome);

            const result = `
    Your taxable income: $${totalIncome.toFixed(2)}<br>
    Income tax payable: $${taxDue.toFixed(2)}<br>
    Medicare levy payable: $${medicareLevy.toFixed(2)}<br>
    Your income after tax & Medicare levy: $${afterTaxIncome.toFixed(2)}<br>
    Your marginal tax rate: ${marginalTaxRate.toFixed(1)}%<br>
    This means for an annual income of $${totalIncome.toFixed(2)} you pay:<br>
    No tax on income between $1 - $18,200 $0<br>
    19c for every dollar between $18,201 - $45,000 $${(0.19 * (45000 - 18200)).toFixed(2)}<br>
    32.5c for every dollar between $45,001 - $120,000 $${(0.325 * (120000 - 45000)).toFixed(2)}<br>
    Income tax payable $${taxDue.toFixed(2)}<br>
    `;

            document.getElementById("result").innerHTML = result;
        }

        function getMarginalTaxRate(income) {
            if (income <= 18200) {
                return 0;
            } else if (income <= 45000) {
                return 19;
            } else if (income <= 120000) {
                return 32.5;
            } else if (income <= 180000) {
                return 37;
            } else {
                return 45;
            }
        }


    </script>

@endsection
