@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.heaters_css')
@endsection
@section('content')
    <header>
        <div class="header-content">
            <h2 class="lg-heading">SOLAR WATER HEATERS</h2>
            <p>Capturing the sun's warmth for an eco-friendly future.</p>
        </div>
    </header>
    <section class="section1">
        <div class="text-box">
        <h2> SOLAR WATER HEATERS IN PAKISTAN</h2>
        <p>
            Solar water heater looks like regular solar-panels but with an extra insulated water tank. Solar geyser consists of solar collectors – a series of pipes- that capture sunlight and convert it into heat to warm the water. A solar water heater, also called a home solar water heating system, is the best and most affordable way to generate hot water for your home. The cool thing about solar water heaters is that they work well in every season, using sunlight as their fuel.<br></p>

           <p> The water tank that often comes with a solar water heater is equipped with features that enhance its performance and safety. The tanks are insulated to prevent heat loss. Additionally, the tank also comes with anti-freeze features, a pressure relief valve, and a thermostat that helps control the water temperature. These features are the reasons why the water in the tank remains warm and cozy, even on cold nights.<br></p>

           <p>You have the option to choose a solar water heater that runs solely on solar energy or opt for the hybrid option, which uses grid electricity to warm the water when there isn’t enough sunlight.
           </p>

           <p>Sun Source Solutions provides technological advancements and state-of-the-art solar geysers that not only deliver warm water throughout the winter but also offer significant savings and cut carbon emissions. Our solar water heater even works efficiently in cold areas.</p>

           <h2>HOW DO THEY WORK?</h2>

           <p>The solar collector panel, a key component of the solar water heating system, captures the Sun’s rays. Within the collectors, a black absorbing surface (absorber) absorbs solar radiation and transfers the resulting heat energy to the flowing water. The heated water accumulates in an insulated tank to prevent heat loss. The circulation of water from the tank through the collectors and back is automatic, facilitated by the thermo-siphon system. Solar water heaters come in two types based on the collector system. They typically consist of a collector for gathering solar energy and an insulated storage tank for storing the heated water. This stored hot water is readily available for use at any time.</p>
           <div class="heater-img">
           <img src="{{ asset('images/figure-5-1.webp') }}">
           </div>
       </div>

        <div class="box">
            <hr>
            <h3>Speak To An Expert</h3>
        <p>Not sure what’s best for you? Get a free consultation from our experts.</p>
        <p>Contact: 1234-567890<br>
            Email: sales@sunsourcesolutions.com.pk</p>
        <button><a href= "{{ route('contact-us') }}">REQUEST A CALL</a></button>
        </div>
        <div class="text-box2">
            <h2>COMPONENTS OF SOLAR WATER HEATER/ SOLAR WATER GEYSERS</h2>
            <ul>
                <li>Solar Collector (to collect solar energy)</li>
                <li>Insulated water tank (to store hot water)</li>
                <li>Relief valve</li>
                <li>Supporting stand</li>
                <li>Connecting pipes and instrumentation etc.</li>
            </ul>
            <h2>TYPES OF SOLAR WATER HEATERS IN PAKISTAN</h2>
            <p>There are two main types of solar geysers commonly used in Pakistan:</p>
            <ol>
                <li>Flat Plate Solar Water Heaters:</li>
                <li>Evacuated Tube Solar Water Heaters:</li>
            </ol>
        </div>
    </section>
<section class="row">
            <div class="imgwrapper">
                <img class="img1" src="{{ asset('images/245-e1523683177395.jpg') }}">
                <div class="text">
                    <h2>FLAT PLATE SOLAR WATER HEATERS IN PAKISTAN</h2>
                <p>Flat Plate solar water heaters are the most common type of solar water heater in Pakistan. They are made up of a series of flat, absorber plates that are covered with a transparent cover, typically glass. The plates absorb sunlight and heat the water that flows through them. Flat plate collectors are relatively inexpensive and can be installed on roofs or on the ground. They are also relatively efficient, especially in sunny climates like Pakistan.</p>
                </div>
            </div>

            <div class="imgwrapper">
                <img class="img2" src="{{ asset('images/gm-9953768c-b926-4da2-a9d9-3a093c4ee30b-evacuated-solar-tube-system-446476.jpg') }}">
                <div class="text2">
                    <h2>EVACUATED TUBE SOLAR WATER HEATERS IN PAKISTAN</h2>
                <p>These are a type of solar water heater that uses evacuated tubes to capture and transfer heat. The tubes are made of two layers of glass that are sealed together, creating a vacuum. This vacuum helps to insulate the water and prevent heat loss. Evacuated tube collectors are more efficient than flat plate collectors, but they are also more expensive. They are a good choice for areas with cold winters, as they can provide hot water even when the sun is not shining.</p>
                </div>
            </div>
        </div>
</section>
<section class="key-diff">
    <h2>Here Is a Table Summarizing the Key Differences Between the Two Types of Solar Water Heaters/ Solar geysers:</h2>
    <table>
        <tr id="diff">
            <th>Feature</th>
            <th>Flat Plate Solar Water Heater</th>
            <th>Evacuated Tube Solar Water Heater</th>
        </tr>


        <tr>
            <td>Cost</td>
            <td>Less expensive</td>
            <td>More expensive</td>
        </tr>
        <tr>
            <td>Efficiency</td>
            <td>Less efficient</td>
            <td>More efficient</td>
        </tr>
        <tr>
            <td>Insulated</td>
            <td>Less insulated</td>
            <td>More insulated</td>
        </tr>
        <tr>
            <td>Suitable for</td>
            <td>Sunny climates</td>
            <td>Cold climates</td>
        </tr>
        <tr>
            <td>Installation</td>
            <td>Easy to install</td>
            <td>More difficult to install</td>
        </tr>

    </table>
    <p>What is best for you depends on your needs and budget. If you live in an area with sunny weather and have a limited budget, a flat plate solar geyser is a good option. If you live in an area with cold winters and are willing to pay more for a more efficient system, an evacuated tube solar geyser is a better choice. </p>

    <p>For any information or queries related to solar water heaters, solar geysers, solar panels, solar inverters, etc., feel free to contact us at the provided number or leave us a message by filling out the quotation form. Our representatives will be in touch with you as soon as possible.</p>
</section>

@endsection
