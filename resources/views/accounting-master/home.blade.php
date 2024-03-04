@extends('weblayouts.app')

@section('content_box')
    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">

            <div class="col-md-6 ">
                <div class="home-row">
                        <span class="header">
                             {{$CMS['home_header1']}} </span>

                    <div class="header-text">
                        <br>
                        <p> {!! $CMS['home_content1'] !!}</p></div>

                    <a href="/contactus#hero">
                        <button class="header-button"> Book an appointment</button>
                    </a>

                </div>
            </div>
            <div class="col-md-6">
                <img class="home-image"
                     src="{{ asset('/images/uploads/cms/' . $CMS['home_image1']) }}" width="500px"
                     height="auto">
            </div>
        </div>

    </section>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-6">
                <img class="tax-image" src="{{ asset('/images/uploads/cms/' . $CMS['home_image2']) }}" width="500px"
                     height="400px">
            </div>
            <div class="col-md-6">
                <div class="header-text">
                    <p>Income Tax - Calculator, 2023</p></div>
                <div class="header-tax">Check how your refund could be like
                    <span id="refresh"> <i style="color: orange; float: right; cursor: pointer; margin-right:40px;"
                                           class="fa fa-refresh" onclick="refresh()"></i>
                       </span>

                </div>
                <form class="form-inline" id="taxForm">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="income">Income:</label>
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input id="income" type="number" class="form-control" placeholder="Income" value="0"
                                       aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="extraincome">Extra Income:</label>
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input id="extraIncome" type="number" class="form-control" placeholder="Extra Income"
                                       aria-label="Username" aria-describedby="basic-addon1" value="0" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <label for="frequency">Frequency:</label>
                            <select style="background-color: orange; width: 225px; height:50px;" id="frequency">
                                <option value="weekly">Weekly</option>
                                <option value="fortnightly">Fortnightly</option>
                                <option value="monthly">Monthly</option>
                                <option value="annually">Annually</option>
                            </select><br><br>
                        </div>

                        <div class="col-md-6">
                            <br><br>
                            <button type="button" class="header-button" onclick="calculateTax()">Calculate Tax</button>

                        </div>
                    </div>


                </form>
                <div id="result">


                </div>
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
                    <span class="header"> {{$CMS['home_header2']}} </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {{$CMS['home_header3']}}</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!! $CMS['home_content3'] !!}</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {{$CMS['home_header4']}}</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span>{!!$CMS['home_content4']  !!}</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block"> {{$CMS['home_header5']}}</span>

                            <ul class="pricing-text mb-5">
                                <li><span class="fa fa-check mr-2"></span> {!! $CMS['home_content5'] !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <script>
        function calculateTax() {
            document.getElementById("result").classList.add("show");

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
<table >
    <tr>
        <th>Your taxable income:</th>
        <td class="right-align">$<span class="currency">${totalIncome.toFixed(2)}</span></td>
    </tr>
    <tr>
        <th>Income tax payable:</th>
        <td class="right-align">$<span class="currency">${taxDue.toFixed(2)}</span></td>
    </tr>
    <tr>
        <th>Medicare levy payable:</th>
        <td class="right-align">$<span class="currency">${medicareLevy.toFixed(2)}</span></td>
    </tr>
    <tr>
        <th>Your income after tax & Medicare levy:</th>
        <td class="right-align">$<span class="currency">${afterTaxIncome.toFixed(2)}</span></td>
    </tr>
    <tr>
        <th>Your marginal tax rate:</th>
        <td class="right-align">${marginalTaxRate.toFixed(1)}%</td>
    </tr>
</table>

<p>This means for an annual income of $<span class="currency">${totalIncome.toFixed(2)}</span> you pay:</p>

<table>
    <tr>
        <th>Income Range</th>
        <th>Tax Rate</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td>No tax on income between $1 - $18,200</td>
        <td class="right-align">0%</td>
        <td class="right-align">$<span class="currency">0</span></td>
    </tr>
    <tr>
        <td>19c for every dollar between $18,201 - $45,000</td>
        <td class="right-align">19%</td>
        <td class="right-align">$<span class="currency">${(0.19 * (45000 - 18200)).toFixed(2)}</span></td>
    </tr>
    <tr>
        <td>32.5c for every dollar between $45,001 - $120,000</td>
        <td class="right-align">32.5%</td>
        <td class="right-align">$<span class="currency">${(0.325 * (120000 - 45000)).toFixed(2)}</span></td>
    </tr>
</table>

<p class="right-align"><b>Total Income tax payable:</b> $<span class="currency">${taxDue.toFixed(2)}</span></p>






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

        function refresh() {
            alert("hero");
            document.getElementById("result").classList.remove("show");
            document.getElementById("result").classList.add("hide");
        }


    </script>

@endsection
