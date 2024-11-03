@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.finance_css')
@endsection

@section('content')
    <header>
        <div class="header-content">
        <h2>BANK FINANCING</h2>
        </div>
    </header>
    <section class="showcase">
        <div class="container">
            <div class="row row1">
                <div class="img-box">
                    <img src="{{ asset('images/Solar-Leasing-Financing-768x768.jpg') }}" alt="">
                </div>
                <div class="text-box">
                    <h2 class="lg-heading text-black">Solar Financing</h2>
                    <p class="text-gray">Having trouble making the payment upfront?
                        No problem we have got you covered with solar financing. Install solar system at your desired place with easy installments through banks.
                        At Sun Source Solutions, we offer the customers to pay for their solar panels at a later date with the help of “Solar Financing”.
                        This enables them to get solar panel but pay for it in monthly installments of your choice.
                        </p>
                </div>
            </div>
            <div class="row row2">
                <div class="img-box">
                    <img src="{{ asset('images/file-20211007-15-1g1bk8.avif') }}" alt ="">
                </div>
                <div class="text-box">
                    <h2 class="lg-heading text-black">Requirements</h2>
                    <p class="text-gray">1. Down Payment of 30% of the total project size.<br>
                        2. Roof top or any other space for solar panels to be installed.<br>
                        3. PDC (postdated cheques) along the initial down payment are required.</p>
                </div>
        </div>
        <div class="row row3">
            <div class="img-box">
                <img src="{{ asset('images/DIY-Solar-AdobeStock_501934306-scaled.jpeg') }}" alt="">
            </div>
            <div class="text-box">
                <h2 class="lg-heading text-black">Benefits of  SSS Lease plans</h2>
                <p class="text-gray">1. Start getting complete benefits of solar without even spending any capital.<br>
                    2. Pay easy installments monthly.<br>
                    3. Eligible for carbon credit incentives.<br>
                    4. Independent of dollar exchange rate and markup fluctuations.
                    </p>
            </div>
        </div>
        <div class="row row4">
            <div class="img-box">
                <img src="{{ asset('images/beautiful-female-hand-holds-black-wallet-with-dollar-bills-which-she-holds-close-sun_359031-33910.avif') }}" alt ="">
            </div>
            <div class="text-box">
                <h2 class="lg-heading text-black">Bank Financing</h2>
                <p class="text-gray">It is our pleasure to announce the Revised Financial Scheme for Solar Energy launched by the State Bank of Pakistan. With this beneficial offer, all prospects including domestic, commercial and industrial clients shall be allowed to benefit from solar system installation at easy monthly installments and at a markup of 2+4=6% only.

                    Please note that the said 4% is further negotiable depending upon the prospect’s relationship with their respective banks. The said loan is available on a 10 years term whilst allowing you to reap a guaranteed return of 25%.

                    With the successful implementation of this scheme, solar energy now has been made affordable for all. As a service provider, we at SSS shall facilitate you throughout the process of loan attainment. Almost all Leading Banks are offering Solar financing.
                    Please feel absolutely free to ask any question regarding the proposal or any other thing regarding our services. It would be a delight to take your queries in this regard.
                    <!-- https://ngle.pk/wp-content/uploads/2021/08/inner_service_04-1.jpg -->
                    </p>
            </div>
    </div>
    <div class="row5">
        <p>Sun Source Solutions offering Bank Financing now partnering with</p>
        <a href="https://www.abl.com/personal/loans/allied-solar-system-finance/" target="_blank">
            <button id="payButton">
                <img src="{{ asset('images/IMG2594Allied-Bank.jpg') }}" alt="Allied Bank Logo">
            </button>
        </a>
        <p>Click on the logo to go directly to ABL Bank website</p>
    </div>
</div>
</section>

@endsection
