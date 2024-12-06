@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.nm_css')
@endsection

@section('content')
<header>
        <div class="header-content">
            <h1 >Net Metering In Pakistan</h1>
           </div>
        </header>


            <div class="net">
                 <h1>Net Metering</h1>
                 <p>Who doesn’t want to make the most of their solar panels and enjoy all the benefits they offer? Well, one great way to do that is by adding net metering to your existing solar system. Sun Source Solutions is expert at it by providing high quality and yet affordable net metering rates in Pakistan. Here’s how it works: during the day, when your solar panels produce more electricity than you need, you can sell the extra power back to the national grid. In return, you earn credits. Later, when your solar panels aren’t producing energy at night, you can use those credits to cover your electricity needs. It’s a smart process that not only boosts your profits but also cuts down on your electricity bills.</p>
             </div>
                <div class="box">
                    <hr>
                    <h3>Speak To An Expert</h3>
                <p>Not sure what’s best for you? Get a free consultation from our experts.</p>
                <p>Contact: 1234-567890<br>
                    Email: sales@sunsourcesolutions.com.pk</p>
                    <a href="{{ route('contact') }}">
                <button>Contact</button></a>;
                </div>
                  <section class="row">
                    <!-- <div class="row">--->
                    <div class="imgwrapper">
                    <img class="img" src="{{ asset('images/net 5.jpg') }}">
                       <div class="text">
                    <h2>HOW NET METERING WORKS IN PAKISTAN? </h2>
                    <p>The net metering in Pakistan is available for only grid tied system: on grid or hybrid, because the requirement to install a net meter is you must be connected to the main grid in order to get the benefit of net metering.The power company installs a special meter called net meter or green meter at your place, and this meter can measure both the electricity you use and the extra electricity your panels send back to the grid. There’s a possibility they might use two separate meters for this. In most cases, there will be only one meter that checks both the import and export of your electricity. You get compensated for this extra electricity you send back to the grid. If your solar panels produce more electricity than you actually use, the extra power goes back to the national grid.</p>
                        </div>
                    </div>
                        </section>
                        <div class="content">
                            <h1> COMPENSATION METHODS</h1>
                              <div id="container">
                              <div><h1> NET BILLING</h1>
                                      <p>This is the most common method. At the end of each billing cycle, your electricity meter readings are compared. You are only charged for the net difference between the electricity you consumed from the grid and the surplus you fed back.</p></div>
                                         <div> <h1>FEED-IN TARIFF</h1>
                                            <p>In most cases, you will receive a fixed rate per unit of electricity exported to the grid.</p><br></div>
                       </div>
                        </div>
                                            <div class="net1">
                            <h1>SUN SOURCE SOLUTIONS NET METERING PROCESS</h1>
                            <p>Net metering is an incredible device that lets you share surplus energy with the power grid. Here’s how it works: when your solar panels produce more electricity than you require during the day, the excess power is sent back to the grid. Then, during nighttime when your solar panels aren’t generating electricity, you can draw energy from the grid using the credits earned from your exported energy, effectively reducing your costs. With a properly installed system, you can generate sufficient solar energy to meet all of your electricity needs throughout the year, eliminating the need to pay electricity bills. It’s a fantastic way to both save money and contribute to a greener future.</p>
                        <img src="{{ asset('images/net2.webp') }}" alt="">
                        </div>
                        <div class="content">
                            <h1> BENEFITS OF INSTALLING NET METERING IN PAKISTAN</h1>

                          {{-- </div> --}}
                              <div id="container">
                              <div><h1> Less Cost, Most Benefits</h1>
                                      <p>The upfront cost for getting net metering installed might seem a bit high, but it’s actually a pretty smart investment when you think about the long-term benefits. The good news is, Alpha Solar, a company with years of experience and certified by AEDB in Pakistan, offers reasonable net metering rates in Pakistan. So, even though there’s a cost at the start, the benefits in the long run make it a wise and affordable choice.</p></div>
                                         <div> <h1>
                                            Sell and Earn</h1>
                                            <p>With the help of a net meter, you can sell the extra generated electricity back to the grid. This results in earning credits, which can be used at night or during power outages, further reducing your electricity bill and potentially making you a zero-bill person.</p><br></div>
                                <div> <h1> 20-40 ration of utilization</h1>
                             <p>Solar panels installed at your home mostly produce 20-40 percent more electricity than your actual needs, which goes to waste if you haven’t installed net meters. After installing a net meter, you can sell that extra 20-40 percent of generated energy to grid to earn more units from the grid to further reduce your energy bills.</p>
                          </div>
                      </div>
                    </div>
                      <!-- FAQ Section -->
<section class="section-faq">
    <h1>Frequently Asked Questions</h1>
    <div class="faq-item">
        <div class="faq-question">
            <h3>Will a client get paid by the Distribution Company in PKR for his export of excess power to the grid through net metering?</h3>
            <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>The power company, WAPDA or NEPRA , will never pay you in PKR against the electricity you sell to the grid through net metering.</p>
            <p>You will only be compensated through adjustments in your electricity bills, and this will also be based on power company’s predefined rates, terms, and conditions.</p>
        </div>
    </div>
    <div class="faq-item">
        <div class="faq-question">
            <h3>How can you apply for net Metering in Pakistan?</h3>
            <span class="faq-toggle">+</span>
        </div>
        <div class="faq-answer">
            <p>As per the NEPRA directions, the user can not directly apply for net metering in Pakistan. Therefore, client have to connect with an AEDB registered solar company to get the net metering facilities.</p>
            <p>AEDB companies like <a href="{{ route('home') }}">Sun Source Solutions</a>, take the responsibility of preparing and approving the application from the relevent department on behalf of the consumer.</p>
            <p>Sun Source Solutions, with years of experience in the solar industry, has the expertise to install a net meter in your existing system, ranging from 5 kW to 1 MW. All of this is offered at affordable net metering rates in Pakistan.</p>
        </div>
    </div>

</section>

@endsection
@section('js')
@include('js.faq_js')
@endsection
