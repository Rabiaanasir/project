@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.agri_css')
@endsection
@section('content')
    <header>
        <div class="header-content">
            <h1>AGRICULTURE SOLAR SOLUTION</h1>
           </div>
        </header>
        <br>
        <br>
        <section>
            <div class="commercial">
                <h1>AGRICULTURE SOLAR SOLUTION</h1>
                <p>The agriculture sector in Pakistan contributes about 23% to the country’s GDP. This sector heavily depends on major crops like wheat, rice, cotton, and also on farms. Almost half of the people in Pakistan are directly or indirectly financially connected to the agriculture sector. However, this sector is still vulnerable, especially when it comes to the availability of power for farmers to irrigate their crops and power their farms for better production.
                    Top of Form

                    At Sun Source Solutions, we understand the unique challenges that farmers in Pakistan face. Electricity is still unavailable in some areas, and farmers have to rely on alternative sources like generators or diesel engines. Even where electricity is available, the high prices pose a challenge.</p>
            </div>
            <section class="row">
                <!-- <div class="row">--->
                <div class="imgwrapper">
                <img class="img" src="{{ asset('images/agri.webp') }}">
                   <div class="text">
                <h2>A RELIABLE AND SUSTAINABLE<br> SOLAR TUBE WELL SYSTEM</h2>
                <p>Dealing with water scarcity and the sky-high prices of diesel and petrol for pumping water from the earth makes it a real challenge for farmers to keep their lands well-irrigated. But here at Alpha Solar, we have a team of experts who specialize in setting up customized solar tube well solutions. Our solar tube well systems come with 2 years of after-sales services and a whopping 25-year panel warranty. We aim to make sure our farming community keeps their lands lush and fruitful without the headache of crazy expensive electricity bills.</p>
                    </div>
                </div>
                    </section>
                    <section class="row">
                        <!-- <div class="row">--->
                <div class="imgwrapper">
            <img class="img2" src="{{ asset('images/agri 1.png') }}">
           <div class="text2">
          <h2>SOLAR PV SOLUTION FOR FARMS</h2>
          <p>Sun Source Solutions offers sustainable and cost-effective electric solutions for all types of farms, including dairy, fish and poultry farms. Our solar solutions for farms can save up to 70% on their electricity bills. Customer satisfaction is our top priority, and that’s why our clients report achieving Return on Investment (ROI) in just 4-5 years.

            Our solar sheds also provide a fantastic energy option with dual benefits. With our solar shed solutions, we design systems to harness energy from the sun, providing electricity while also offering shelter for your livestock.</p>
      </div>
     </div>
     </section>
    <div class="content">
      <h1> OUR PROJECT WORKFLOW PROCESS</h1>

    </div>
        <div id="container">
        <div><h1> Site Assessment and Designing</h1>
                <p>Our workflow starts with a face-to-face consultation with the client, followed by a site assessment to determine whether your property is suitable for solar panel installation. Then, our team provides you with a detailed CAD drawing of your system. Our expert designer creates a design with your location and weather conditions in mind. The design is then approved by the client before the actual installation process begins.</p></div>
                   <div> <h1>System Installation</h1>
                      <p>Every installation, regardless of the system size, big or small, is carried out by our certified and professional installers. Our solar system installation occurs in four separate stages:<br>

           1. Fasten structure to the roof<br>
           2. Secure panels to the structure<br>
           3. Complete external wiring to connect panels to the inverter<br>
           4. Wire the inverter to the home’s power supply</p><br></div>
          <div> <h1>After Sales Services</h1>
       <p>After we’ve set up your system, we don’t just leave you hanging. Our installation services include a 2-year after-sales package. This covers online system monitoring and maintenance in case you encounter any issues. It’s all part of our commitment to keeping you satisfied and making sure your solar system keeps performing well for the long haul.</p>
    </div>
</div>
        <section>
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

@endsection
