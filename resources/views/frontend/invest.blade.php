@extends('frontend.app')
@section('css')
  @include('css.common_css')
  @include('css.invest_css')
@endsection

@section('content')
<header>
    {{-- <div class="header-content">
    <h2 class="lg-heading text-light ">INVEST</h2>
    </div> --}}
</header>
<section class="font">
    <section id="hero">
        <div class="container hero-content">
            <h2>Invest in a Sustainable Future</h2>
            <p>Be part of a revolution in clean energy. Your investment can drive the solar energy sector and secure a greener planet for generations to come.</p>
            <a href="#form" class="cta-button">Invest Now</a>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <h2>About Our Company</h2>
            <p>Sun Source Solutions is a leading provider of solar power solutions. We are committed to innovation, sustainability, and bringing clean energy to communities worldwide. Join us as an investor and contribute to the green energy movement while earning substantial returns.</p>
        </div>
    </section>

    <section id="benefits" class="section benefits-section">
        <div class="container">
            <h2>Why Invest in Sun Source Solutions?</h2>
            <div class="benefits">
                <div class="benefit-card">
                    {{-- <img src="https://via.placeholder.com/100" alt="Benefit 1"> --}}
                    <h3>High ROI</h3>
                    <p>Our solar projects deliver excellent returns on investment due to the growing demand for renewable energy.</p>
                </div>
                <div class="benefit-card">
                    {{-- <img src="https://via.placeholder.com/100" alt="Benefit 2"> --}}
                    <h3>Sustainable Growth</h3>
                    <p>Investing in solar energy supports long-term environmental goals, reducing carbon footprints worldwide.</p>
                </div>
                <div class="benefit-card">
                    {{-- <img src="https://via.placeholder.com/100" alt="Benefit 3"> --}}
                    <h3>Government Support</h3>
                    <p>Benefit from subsidies and incentives offered by governments around the globe for solar energy projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="section form-section">
        <div class="container">
            <h2>Interested in Investing?</h2>
            <p>Fill out the form below, and our team will get back to you with more information on how to join us as an investor.</p>
            <form action="submit_investment.php" method="post" class="investment-form">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="amount">Amount You Want to Invest (PKR)</label>
                <input type="number" id="amount" name="amount" required>

                <label for="message">Message (Optional)</label>
                <textarea id="message" name="message" rows="5" placeholder="Let us know if you have any questions or comments"></textarea>

                <button type="submit" class="submit-button">Submit Investment Interest</button>
            </form>
        </div>
    </section>
</section>
@endsection