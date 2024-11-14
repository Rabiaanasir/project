@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.panels_css')
@endsection

@section('content')
<header>
    <div class="header-content">
        <h2 class="lg-heading text-light ">SOLAR PANELS</h2>
    </div>
</header>
<section class="section1">
    <div class="text-box">
    <h2> SOLAR PANELS</h2>
    <p>
        We use top-quality solar panels from international brands for all our solar installations in Pakistan, be it for homes, businesses, farms or industries. The efficiency of these solar panels directly influences your electricity savings – the higher the efficiency, the more you save. At Sun Source Solutions, we understand how crucial it is to stay updated with the advancements in solar technology. That’s why our engineers and experts closely monitor emerging technologies and their efficiency to ensure our customers always receive the best available products.<br></p>
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
  <h2 style="margin-bottom: 60px;">DIFFERENT TYPES OF HIGHLY EFFICIENT SOLAR PANELS</h2>
    <div class="imgwrapper">
        <img class="img" src="{{ asset('images/solar-panel1.webp') }}">
        <div class="text">
            <h2>BIFACIAL SOLAR PANELS</h2>
            <p>Bifacial solar panels have the ability to generate electricity from both sides of the module, making them the most popular solar panels in Pakistan at the moment. They are highly efficient and produce more electricity per watt compared to other technologies in the market. While the price of bifacial solar panels in Pakistan is a bit higher than mono panels, their high production rate makes them the top choice for many..</p>
        </div>
    </div>

    <div class="imgwrapper">
        <img class="img2" src="{{ asset('images/solar-panels2.png') }}">
        <div class="text2">
            <h2>MONOCRYSTALLINE SOLAR PANELS</h2>
            <p>Monocrystalline solar panels, despite generating electricity from only one side facing the sun, continue to dominate the solar landscape in Pakistan due to their exceptional electricity production. Recognized for their superior efficiency, these panels feature a single crystal structure of high-purity silicon. This technology guarantees reliable and effective energy generation, making them a popular and enduring choice in the country.</p>
        </div>
    </div>
</section>
<section class="row">
  <h2 style="margin-bottom: 60px;">Sun Source Solutions’s Top Brands: Trusted by Millions</h2>
    <div class="imgwrapper">
        <img class="img" src="{{ asset('images/canadian_solar_panel_review.jpg') }}">
        <div class="text">
            <h2>CANADIAN SOLAR PANELS</h2>
            <p>The company has revolutionized the panels industry with the introduction of their bifacial solar panels, highly efficient and capable of generating more electricity by producing power from both ends. Sun Source Solutions always prioritizes the latest and advanced PV modules in its installations, with Canadian solar panels being our top choice. Even their monocrystalline panels are very efficient and have a solid track record for durability.</p>
        </div>
    </div>

    <div class="imgwrapper">
        <img class="img2" src="{{ asset('images/longi.png') }}">
        <div class="text2">
            <h2>LONGI SOLAR PANELS</h2>
            <p>Longi solar panels are widely recognized as among the best in Pakistan for their remarkable quality and ability to withstand the country’s diverse weather conditions. Popular not only in Pakistan but also globally, Longi is the preferred choice of Sun Source Solutions due to their long lifespan and warranty. Longi panels degrade slowly and are available in a variety of wattages, allowing you to select the ideal one for your unique demands and preferences..</p>
        </div>
    </div>

    <div class="imgwrapper">
        <img class="img" src="{{ asset('images/jinko.webp') }}">
        <div class="text">
            <h2>JINKO SOLAR PANELS</h2>
            <p>Jinko Solar panels stand out as leaders in manufacturing top-quality photovoltaic solar panels worldwide. Their success in the renewable sector is driven by excellent customer service and reliable modules with a high efficiency rate. Notably, Jinko panels perform exceptionally well even in cold weather conditions. Similar to Canadian solar panels, Jinko also manufactures bifacial panels and mono-crystalline cells, showcasing their commitment to incorporating the latest technology while maintaining competitive market prices. This is why Jinko Solar has secured a spot on Sun Source Solutions list for both domestic and commercial solar system installations.</p>
        </div>
    </div>

    <div class="imgwrapper">
        <img class="img2" src="{{ asset('images/JA.png') }}">
        <div class="text2">
            <h2>JA SOLAR PANELS</h2>
            <p>The company was founded in 2005, and in just a few years, it gained prominence for manufacturing high-quality panels that meet international standards, along with providing excellent services to its customers. JA Solar panels are widely used in Pakistan across various installations, including residential, commercial, agriculture, industries and farms. The JA Solar panel price in Pakistan is relatively low compared to other top-tier 1 brands in the country, yet they never compromise on the quality of their products.</p>
        </div>
    </div>

    <div class="imgwrapper">
        <img class="img" src="{{ asset('images/SunPower-solar-panels.jpg') }}">
        <div class="text">
            <h2>SUNPOWER SOLAR PANELS</h2>
            <p>SunPower made it's name for offering the highest efficiency  solar panels, better performance and top quality installations. It all translates to better solar panels, more savings, and happier customers. Designed to work with SunPower Equinox home energy system, SunPower’s high-quality standards ensure that the solar cell technology makes more energy from every drop of sunshine. Factor in the elegant styling and durability, it’s no wonder our company has been leading the industry the longest.</p>
        </div>
    </div>
</section>



@endsection
