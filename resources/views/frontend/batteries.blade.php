@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.batteries_css')
@endsection

@section('content')
    <header>
        <div class="header-content">
            {{-- <h2 class="lg-heading">SOLAR BATTERIES</h2> --}}
            <p>Storing The Sun's Power For A Sustainable Future.</p>
        </div>
    </header>
    <section class="section1">
        <div class="text-box">
        <h2> SOLAR BATTERIES</h2>
        <p>
            During the day, solar panels do an excellent job of supplying energy. But for a system that works really well on its own, especially at night or during power outages, you need a backup. That’s where solar batteries come in – they’re like the superheroes of storage. Solar batteries store the energy produced by the panels for use at night or during power outages. And if you’ve incorporated net metering, excess electricity can be sold back to the grid, maximizing the benefits from the solar system<br></p>

           <p> At Sun Source  Solutions, we go above and beyond. We use top-notch, super-efficient and reliable batteries in every installation. Because when it comes to saving your solar power, we only believe in the best.<br></p>
       </div>
        <div class="box">
            <hr>
            <h3>Speak To An Expert</h3>
        <p>Not sure what’s best for you? Get a free consultation from our experts.</p>
        <p>Contact: 1234-567890<br>
            Email: sales@sunsourcesolutions.com.pk</p>
            <a href="{{ route('contact') }}">
                <button>Contact</button>
        </div>
        <div class="text-box">
            <h2>SUN SOURCE SOLUTION’S TRUSTED SOLAR BATTERIES BRAND</h2>
            <p>Sun Source Solutions installs a range of solar batteries, from tubular batteries to lithium-ion batteries.</p>
        </div>
    </section>
    <section class="row">
            <div class="imgwrapper">
                <img class="img" src="{{ asset('images/8ba86ba2-30e5-4312-bab0-08904f9eecd9-1-e1714461596883.webp') }}">
                <div class="text">
                    <h2>TUBULAR BATTERIES</h2>
                <p>Tubular batteries, a type of lead-acid battery with tubular positive plates, are perfect for Inverter/UPS use as they can hold more acid and water. Also known as Deep Cycle batteries, they are suitable for power backup in Inverter/UPS and Solar systems. These are the most common and affordable battery options. They’re reliable and durable but have a shorter lifespan, requiring more maintenance compared to lithium batteries. However, their prices are quite low and accessible to most customers.</p>
                <h3>Here is the list of solar batteries Sun Source Solution prefers to add in its installations:</h3>
                <ul>
                    <li>Osaka</li>
                    <li>AGS</li>
                    <li>Phoenix</li>
                </ul>
                </div>
            </div>

            <div class="imgwrapper">
                <img class="img2" src="{{ asset('images/pylontech_battery.png') }}">
                <div class="text2">
                    <h2>LITHIUM ION BATTERIES</h2>
                <p>Lithium-ion batteries stand out as the preferred choice among rechargeable batteries. Comprising one or more lithium-ion cells with a protective circuit board, these batteries are renowned for their extended lifespan, increased efficiency and lightweight design. Lithium Ion Batteries are becoming increasingly popular due to their longer lifespan, higher efficiency and lighter weight. However, they come at a slightly higher initial cost.</p>
            <ul>
                <li>Narada</li>
                <li>Pylon Tech</li>
            </ul>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2>WHY CHOOSE SOLAR BATTERIES FROM SUN SOURCE SOLUTION?</h2>
                <div class="box-wrapper">
                    <div class="box-1 benefits">
                        <h4>Customized Solutions</h4>
                        <p>We design solar battery solutions based on your energy requirements, ensuring you get the right system for your home or business.</p>
                    </div>
                    <div class=" box-2 benefits">
                        <h4>Top-Quality Products</h4>
                        <p>We source our batteries from reputable manufacturers, offering you cutting-edge technology and durability that stands the test of time.</p>
                    </div>
                    <div class="box-3 benefits">
                        <h4>Expert Installation</h4>
                        <p>Our skilled technicians ensure seamless installation, optimizing the performance of your solar battery system.</p>
                    </div>
                    <div class="box-4 benefits">
                        <h4>Cost-Effective Packages</h4>
                        <p>We believe in making clean energy accessible to all. Our packages are designed to provide maximum benefits without breaking the bank.</p>
                    </div>
                </div>
            </div>
        </section>

<!-- FAQ Section -->
<section class="section-faq">
    <h1>Frequently Asked Questions</h1>
    <div class="faq-item">
        <div class="faq-question">
            <h3>Can I install a solar battery myself?</h3>
            <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>Installing a solar battery requires expertise to ensure proper integration with your solar system and adherence to safety standards. It is recommended to consult with professionals like Sun Source Solutions for a safe and efficient installation.</p>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-question">
            <h3>What maintenance do solar batteries require?</h3>
            <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>Maintenance requirements vary by battery type. Tubular batteries may need regular water topping, while lithium-ion batteries generally require minimal maintenance. Sun Source Solutions provides guidance on proper upkeep for each battery type.</p>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-question">
                <h3>How much space do I need for a solar battery installation? </h3>
                <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>The space required depends on the battery type and capacity. Tubular batteries typically require more space than compact lithium-ion batteries. Sun Source Solutions  assesses your space and recommends the most suitable option based on your needs.</p>
        </div>
    </div>
</section>

@endsection
@section('js')
@include('js.faq_js')
@endsection
