@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.commercial_css')
@endsection
@section('content')
<header>
        <div class="header-content">
            <h1 >Smart Solar Solution for commercial <br>& Industrial Sectors</h1>
           </div>
        </header>

        <section>
           <div class="commercial">
                <h1>COMMERCIAL SOLAR SOLUTIONS</h1>
                <p>Sun Source Solutions understands that every business has its own unique energy requirements. Therefore, we offer customized and comprehensive commercial solar solutions tailored to their energy needs, assisting them in reducing energy costs by up to 75%, minimizing carbon footprints and enhancing their market reputation. Our highly efficient and cutting edge commercial solar solutions provide energy security for your business, ensuring financial success. From small<br> and medium-sized businesses to large-scale enterprises, we design solar PV solutions for businesses that significantly reduce their operational costs. Our dedication to providing state-of-the-art and cost-effective solar solutions, along with expertise in handling megawatt projects, makes us a prominent player in <br>the solar industry.</p>
            </div>
            <section class="row">
                <!-- <div class="row">--->
                <div class="imgwrapper">
                <img class="img" src="{{ asset('images/comm 7.webp') }}">
                   <div class="text">
                <h2>POWERING YOUR BUSINESS<br> WITH CLEAN ENERGY</h2>
                <p>Businesses can contribute to a healthier environment and cut down on energy expenses at the same time. Here at Sun Source Solutions, our commitment is to assist businesses in adopting sustainable energy solutions through our tailored commercial solar options. Our solutions provide clean, green and affordable energy source, making your business stand out. By choosing our solar solutions, you can benefit from long-term savings, lower your carbon footprint and eliminate disruptions caused by load shedding and power outages, ultimately boosting your business productivity. Our solutions are budget-friendly, ensuring that businesses of all sizes can easily switch to a more sustainable and affordable electricity source.</p>
                    </div>
                </div>
                    </section>
                    <section class="row">
                        <!-- <div class="row">--->
                <div class="imgwrapper">
            <img class="img2" src="{{ asset('images/comm 1.png') }}">
           <div class="text2">
          <h2>WE DESIGN STRONG SOLAR SOLUTIONS WITH FINANCIAL BENEFITS</h2>
          <p>We understand the significance of profits for businesses and the impact of high energy bills on your bottom line. Our expertise lies in designing and installing commercial solar solutions, specifically aimed at reducing your electricity costs. Our solar solutions focus on delivering substantial financial benefits to your business Our state-of-the-art solutions, along with after-sales services and online monitoring, provide complete visibility into your solar system’s performance.</p>
      </div>
     </div>
     </section>
     <section class="row">
         <!-- <div class="row">--->
         <div class="imgwrapper">
       <img class="img3" src="{{ asset('images/comm 8.png') }}">
        <div class="text3">
     <h2>BENEFITS OF COMMERCIAL SOLAR SOLUTION</h2>
        <p>Commercial solar solutions offer a more cost-effective, efficient and cost effective way to generate electricity for businesses. Not only does it bring financial relief for businesses, but it also promotes energy independence, enhances brand reputation, cuts down on carbon emissions, and safeguards the environment by reducing reliance on fossil fuels. Here are some advantages to consider when opting for solar solutions for your business:<br>
       . Uninterrupted Power Supply<br>
      . Customized solar solutions tailored to your energy requirements and needs<br>
         . Reliable with a High Return on Investment<br>
          . Reduction in energy bills<br>
         . Reduced carbon footprint<br>
       </p>
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
