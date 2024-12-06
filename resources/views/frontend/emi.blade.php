@extends('frontend.app')
@section('css')
  @include('css.common_css')
  @include('css.emi_css')
@endsection

@section('content')
<header>
    <div class="header-content">
    <h2 class="lg-heading text-light ">EASY MONTHLY INSTALLMENT PLAN</h2>
    </div>
</header>

    <section id="emi-info" class="section">
        <div class="container">
            <h2>What is EMI?</h2>
            <p>EMI (Easy Monthly Installments) is a flexible way to finance your investment in solar energy. With our EMI options, you can spread the cost of your solar system over a period of time that suits your budget, while still enjoying the benefits of clean energy immediately.</p>
            <ul class="emi-benefits">
                <li>Low-interest rates</li>
                <li>Flexible tenure from 6 to 60 months</li>
                <li>Minimal documentation</li>
                <li>No hidden charges</li>
            </ul>
        </div>
    </section>

    <section id="calculator" class="section calculator-section">
        <div class="container">
            <h2>EMI Calculator</h2>
            <p>Use our easy EMI calculator to determine your monthly payments based on the loan amount, interest rate, and repayment period.</p>

            <form id="emiForm" class="emi-form">
                <label for="loanAmount">Loan Amount (RS)</label>
                <input type="number" id="loanAmount" name="loanAmount" placeholder="Enter loan amount" required>

                <label for="tenure">Loan Tenure (months)</label>
                <input type="number" id="tenure" name="tenure" placeholder="Enter tenure in months" required>

                <button type="button" id="calculateEmi" class="calculate-button">Calculate EMI</button>
            </form>

            <div id="emiResult" class="emi-result">
                <h3>Your Monthly EMI:</h3>

                <p id="emiAmount">Rs0.00</p>

            </div>
        </div>
    </section>
<script>
    function calculateEMI(loanAmount, tenure) {
        const fixedInterestRate = 22; // Fixed interest rate at 22%
        const monthlyInterestRate = fixedInterestRate / 12 / 100;

        let emi = loanAmount * monthlyInterestRate * tenure / 10;
        return emi.toFixed(2);
    }

    document.getElementById('calculateEmi').addEventListener('click', function () {
        let loanAmount = parseFloat(document.getElementById('loanAmount').value);
        let tenure = parseInt(document.getElementById('tenure').value);

        if (loanAmount > 0 && tenure > 0) {
            let emiAmount = calculateEMI(loanAmount, tenure);
            document.getElementById('emiAmount').innerText = `RS${emiAmount}`;
        } else {
            alert('Please enter valid values for loan amount and tenure.');
        }
    });
</script>



@endsection
@section('js')
  @include('js.install_js')

@endsection
