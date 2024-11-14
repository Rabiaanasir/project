@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.inverters_css')
@endsection

@section('content')
<header>
    <div class="header-content">
    <h2 class="lg-heading text-light ">SOLAR INVERTERS</h2>
    </div>
</header>
    <section class="section1">
        <div class="text-box">
        <h2> SOLAR INVERTERS</h2>
        <p>
            In recent times, due to soaring electricity bills and prolonged hours of load shedding, people in Pakistan are increasingly turning to renewable sources for electricity production and solar energy has emerged as a leading choice.<br></p>

           <p> The efficiency of solar energy relies heavily on the components and products involved in the process, and one such crucial component is the solar inverter. Solar inverters not only convert the DC electricity produced by the panels into usable AC for home appliances, but they also monitor system performance, notifying users of errors or maintenance needs.<br></p>

            <p>Since the efficiency and conversion rate of inverters play a big role, Sun Source Solutions, in all its solar system installations, includes top of the line inverters from leading brands. These inverters are highly efficient, come with a strong warranty and are budget-friendly.
        </p>
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
    </section>
    <section class="row">
        <div class="imgwrapper">
            <img class="img" src="{{ asset('images/Chint-10-KTL-On-Grid-Inverter.jpg') }}">
            <div class="text">
                <h2>ON-GRID INVERTERS</h2>
            <p>Grid-tied inverters are connected to the grid, and net metering is mandatory for this inverter type. When they convert DC to AC, the generated electricity is first used for household appliances. If the system produces surplus electricity, these inverters feed the excess back into the grid. With net metering, you can track the units you use and the units you return to the grid.</p>
            </div>
        </div>

        <div class="imgwrapper">
            <img class="img2" src="{{ asset('images/High-Frequency-Off-grid-Solar-power-Inverter.webp') }}">
            <div class="text2">
                <h2>HYBRID SOLAR INVERTERS</h2>
            <p>Hybrid inverters are the most commonly installed types in Pakistan because they provide the advantage of incorporating a battery backup system and optional net metering. These solar inverters are designed to smoothly convert DC into AC for household usage, storing excess produced energy in batteries for later use. This feature enhances the financial benefits for consumers. Additionally, they can easily switch between solar power, grid energy and the battery backup system, making them versatile and efficient for various energy scenarios.</p>
            </div>
        </div>
    </section>

<!-- FAQ Section -->
<section class="section-faq">
    <h1>Frequently Asked Questions</h1>
    <div class="faq-item">
        <div class="faq-question">
            <h3>Can an on-grid solar system work during power outages?</h3>
            <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>Typically, on-grid solar systems shut down during power outages to ensure the safety of utility workers. Hybrid solar system is recommended for uninterrupted power during outages.</p>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-question">
            <h3>Are on-grid solar inverters suitable for residential use?</h3>
            <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>If you have a backup energy plan for when the grid shuts down, then on-grid solar inverters are suitable for your home. However, for most homes, we recommend the hybrid solution because it provides you with a battery backup storage option to keep your appliances running even during a power outage.</p>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-question">
                <h3>Can I use an on-grid solar inverter for off-grid applications?</h3>
                <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>On-grid inverters are specifically designed for grid-tied systems and cannot be used with off-grid applications. For off-grid scenarios, off-grid inverters with battery storage are more suitable.</p>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-question">
                <h3>What maintenance is required for solar inverters?</h3>
                <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>Regular inspection and cleaning of solar panels, along with occasional checks on the inverter, are essential maintenance steps. Professional servicing may be required periodically.</p>
        </div>
    </div>

</section>

@endsection
@section('js')
@include('js.faq_js')
@endsection
