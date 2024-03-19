@extends('weblayouts.app')

@section('content_box')

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="row main">
            <div class="col-md-10">
                <div class="header-text" style="margin-top: 150px">
                    <p>Income Tax - Calculator, 2024</p></div>
                <div class="header-tax">Check how your refund could be like
                    <span id="refresh"> <i style="color: orange; float: right; cursor: pointer; margin-right:40px;"
                                           class="fa fa-refresh" onclick="refresh()"></i>
                       </span>

                </div>
                <form class="form-inline" id="taxForm">

                    <div class="col-md-6">
                        <label for="income">Income:</label>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input id="income" type="number" class="form-control" placeholder="Income"
                                   aria-label="Username" aria-describedby="basic-addon1" value="0" required>
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
            let taxBreakdown = []; // Array to store tax breakdown in each range

            if (totalIncome <= 18200) {
                taxDue = 0;
                taxBreakdown.push({ range: '$1 - $18,200', rate: '0%', amount: 0 });
            } else if (totalIncome <= 45000) {
                taxDue = 0.19 * (totalIncome - 18200);
                taxBreakdown.push({ range: '$1 - $18,200', rate: '0%', amount: 0 });
                taxBreakdown.push({ range: '$18,201 - $45,000', rate: '19%', amount: 0.19 * (totalIncome - 18200) });
            } else if (totalIncome <= 120000) {
                taxDue = 5092 + 0.325 * (totalIncome - 45000);
                taxBreakdown.push({ range: '$1 - $18,200', rate: '0%', amount: 0 });
                taxBreakdown.push({ range: '$18,201 - $45,000', rate: '19%', amount: 0.19 * (45000 - 18200) });
                taxBreakdown.push({ range: '$45,001 - $120,000', rate: '32.5%', amount: 0.325 * (totalIncome - 45000) });
            } else if (totalIncome <= 180000) {
                taxDue = 29467 + 0.37 * (totalIncome - 120000);
                taxBreakdown.push({ range: '$1 - $18,200', rate: '0%', amount: 0 });
                taxBreakdown.push({ range: '$18,201 - $45,000', rate: '19%', amount: 0.19 * (45000 - 18200) });
                taxBreakdown.push({ range: '$45,001 - $120,000', rate: '32.5%', amount: 0.325 * (120000 - 45000) });
                taxBreakdown.push({ range: '$120,001 - $180,000', rate: '37%', amount: 0.37 * (totalIncome - 120000) });
            } else {
                taxDue = 51667 + 0.45 * (totalIncome - 180000);
                taxBreakdown.push({ range: '$1 - $18,200', rate: '0%', amount: 0 });
                taxBreakdown.push({ range: '$18,201 - $45,000', rate: '19%', amount: 0.19 * (45000 - 18200) });
                taxBreakdown.push({ range: '$45,001 - $120,000', rate: '32.5%', amount: 0.325 * (120000 - 45000) });
                taxBreakdown.push({ range: '$120,001 - $180,000', rate: '37%', amount: 0.37 * (180000 - 120000) });
                taxBreakdown.push({ range: 'Over $180,000', rate: '45%', amount: 0.45 * (totalIncome - 180000) });
            }

            const medicareLevy = 0.02 * totalIncome; // Assuming the Medicare Levy is 2% for simplicity
            const afterTaxIncome = totalIncome - taxDue - medicareLevy;
            const marginalTaxRate = getMarginalTaxRate(totalIncome);

            let taxBreakdownHTML = '';
            taxBreakdown.forEach(item => {
                taxBreakdownHTML += `
        <tr>
            <td>${item.range}</td>
            <td class="right-align">${item.rate}</td>
            <td class="right-align">$${item.amount.toFixed(2)}</td>
        </tr>`;
            });

            const result = `
<table>
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

<p>This means for an annual income of $<span class="currency" style="color: orange; font-weight: bold;">${totalIncome.toFixed(2)}</span> you pay:</p>
<table>
    <tr>
        <th>Income Range</th>
        <th>Tax Rate</th>
        <th>Amount</th> <!-- Added column for amount -->
    </tr>
    ${taxBreakdownHTML}
</table>
<p class="right-align"><b>Total Income tax payable:</b> $<span class="currency">${taxDue.toFixed(2)}</span></p>
`;

            // CSS for the highlighting
            const style = `
<style>
    .highlight {
        background-color: yellow; /* You can change the highlighting color here */
    }
</style>
`;
            document.getElementById("result").innerHTML = style + result;
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
            document.getElementById("result").classList.remove("show");
            document.getElementById("result").classList.add("hide");
            document.getElementById("income").value = 0; // Clear the value of the input field with the id "income"
            document.getElementById("extraIncome").value = 0; // Clear the value of the input field with the id "income"


        }

    </script>

@endsection


