{{-- @extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.blog_css')
@endsection
@section('content')
<header>
    <div class="header-content">
        <h1 >From the Blog</h1>
        <h2>Get Sun Source Solutions & never lose power day and night</h2>
       </div>


</header>
<br>
<br>
<section>
    <div class="blog-heading">
        {{-- <h1>My Recent Post</h1> --}
        <h3>BLOGS</h3>
      </div>
      </section>
     <section class="row">
        <!-- <div class="row">--->
        <div class="imgwrapper">
        <img class="img" src="{{ asset('images/blog1.jpg') }}">
           <div class="text">
        <h1>For Everyday Inverter Problems and how to Solve Them</h1>
        Here are four common inverter problems and practical solutions to resolve them.
        <h2>1. Overheating</h2>
        <h2>Problem:</h2>
        Overheating occur due to continuous operation or insufficient ventilation.
        <h2>Solution:</h2>
         Ensure proper ventilation around the inverter by keeping it in a well-ventilated area. Avoiding placing it near heat-producing appliances. If the inverter become too hot, turn it off and allow it to cool before resuming operations. Consider installing a fan to improve airflow.
        <h2>2. Blaring Alarms and Beeps</h2>
        <h2>Problem:</h2>
        Alarming sound from the inverter are typically warning signal indicating faults or issues.
        <h2>Solution:</h2>
        Low battery voltage is a common cause of alarms. Monitor the battery voltage, and if it’s below the recommended level, charge or replace the battery. Inspect the wiring for any damages, loose connections, or short circuits. Correcting wiring issues can resolve alarms.
    </div>
</div>
            </section>
            <section class="row">
                <!-- <div class="row">--->
        <div class="imgwrapper">
    <img class="img2" src="{{ asset('images/blog5.webp') }}">
   <div class="text2">
    <h1> Why Solar Energy is Most Preferred</h1>
    <h1> Why Solar Energy is Most Preferred</h1>
    Here are some key points:
    <h2>Sustainability:</h2>
    One of the primary reasons why solar energy is preferred is its ‘sustainability’. Unlike fossil energies, which are finite and contribute to dangerous greenhouse gas emissions, solar power is an infinite resource that leaves no carbon footprint. By harnessing the sun’s energy, we not only reduce our dependence on non-renewable resources but also contribute to the fight against climate change.
    <h2>Environmental Benefits:</h2>
    One of the primary reasons for the growing preference for solar panels is their positive impact on the climate. Unlike fossil energies, which release harmful greenhouse gases into the atmosphere, solar energy production is clean and produces no air or water pollution.
    <h2>Cost Savings:</h2>
    While the initial investment in solar panel installation may seem high, but the long-term cost savings are substantial. Solar panels can significantly reduce or even exclude electricity bills, as they generate power independently from the grid.

</div>
</div>
</section>
<section class="row">
 <!-- <div class="row">--->
 <div class="imgwrapper">
<img class="img3" src="{{ asset('images/blog6.png') }}">
<div class="text3">
<h1>Step-by-Step Guide on How Solar Panels are Installed</h1>
    Here are some key points:
    <h2>Step 1: Site Assesment:</h2>
    The first crucial step in installing solar panels is conducting a thorough site assessment. This involves evaluating the location’s solar potential, considering factors such as sunlight exposure, shading, and the orientation of the roof. Professionals may use tools like solar pathfinders and shade analysis software to determine the optimal placement for the solar panels.
    <h2>Step 2: Designing The Solar System:</h2>
    Once the site assessment is complete, the next step is designing the solar system. This involves determining the number of solar panels needed, their placement on the roof or ground, and the electrical configuration.
    <h2>Step 3: Intalling Mounting Structure:</h2>
    The solar panels are then supported by mounting structures like racks or frames that are installed in the roof or the ground. These structures are intended to safely hold the panels in place while guaranteeing legitimate ventilation to prevent overheating.

</div>
</div>

</section>
<section class="row">
    <!-- <div class="row">--->
<div class="imgwrapper">
<img class="img4" src="{{ asset('images/blog9.jpg') }}">
<div class="text4">
<h1>A Positive Impact on The Environment Through Solar Energy</h1>
Here are some points:
<h2>1. Reducing Greenhouse Gas Emissions:</h2>
One of the main natural advantages of solar power is its job in moderating environmental change. Unlike to conventional petroleum fuels, which discharge harmful gases like carbon dioxide into the air, solar energy creation is basically outflows free.
<h2>2. Energy Independence and Security:</h2>
Solar power adds to energy freedom by broadening the energy blend and decreasing dependence on imported petroleum products. This upgrades public safety as well as balances out energy costs.
<h2>3. Clean and Renewable Energy Source:</h2>
Solar power is a clean and sustainable energy source since it doesn’t harm ecosystems or deplete finite resources. Unlike fossil fuels, which need to be mined, transported, and burned, solar power is produced by converting sunlight into electrical energy.


 </div>
</div>
</section>

<section class="videos">
    <h1>5KW Solar system complete installation guide</h1>
    <video width="900px" controls
    poster="{{ asset('images/blog5.webp') }}" class="video-player">
        <source src="{{ asset('videos/5KW Solar system complete installation guide.mp4') }}" type="video/mp4">
    </video>
    <h1>7 Basic rules and principles before solar system installation</h1>
    <video width="900px" controls
    poster="{{ asset('images/7 steps.webp') }}" class="video-player">
        <source src="{{ asset('videos/7 Basic rules and principles before solar system installation.mp4') }}" type="video/mp4">
    </video>
    <h1>Solar panel system components explain</h1>
    <video width="900px" controls
    poster="{{ asset('images/sys.png') }}" class="video-player">
        <source src="{{ asset('videos/Solar panel system components explain.mp4') }}" type="video/mp4">
    </video>
  </section>
@endsection
@section('js')
@include('js.blog_js')
@endsection --}}


@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.blog_css')

@section('css')
<style>
    a{
        text-decoration: none;
    }
    .card {
        position: relative; /* Positioning context for absolute elements */
        overflow: hidden; /* Ensure no overflow from the card */
        border: none; /* Remove default border */
    }

    .card-title {
        font-size: 1.5rem; /* Larger title */
        font-weight: bold;
        text-align: center; /* Center align title */
        margin-bottom: 10px; /* Spacing below the title */
    }

    .card-text {
        font-size: 0.9rem; /* Font size for description */
        color: #555;
        text-align: center; /* Center align description */
    }

    .image-container {
        position: absolute; /* Position image over other content */
        top: 0;
        left: 0;
        right: 0;
        height: 200px; /* Fixed height for consistency */
        overflow: hidden; /* Prevent overflow */
    }

    .image-container img {
        width: 100%; /* Full width of container */
        height: 100%; /* Full height of container */
        object-fit: cover; /* Maintain aspect ratio */
        object-position: center; /* Center the image */
    }

    .content {
        padding: 220px 0 0; /* Top padding to avoid overlap with image */
        text-align: center; /* Center content when no image exists */
    }

    .placeholder {
        height: 200px; /* Same height as image */
        background-color: #f0f0f0; /* Light grey background for placeholder */
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0; /* No margin */
    }

    .placeholder img {
        width: 50%; /* Width for placeholder image */
        opacity: 0.5; /* Slightly transparent */
    }

    /* .container {
        padding-top: 50px; /* Add spacing to the top *
    } */
</style>

@endsection
@section('content')
<header>
    <div class="header-content">
        <h1 >From the Blog</h1>
        <h2>Get Sun Source Solutions & never lose power day and night</h2>
       </div>


</header>
<div class="container mt-5">
    <h1 class="text-center mb-4">Blog Posts</h1>
    <div class="row">
        @foreach($blogPosts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm"> <!-- Add shadow for depth -->
                    <div class="image-container">
                        @if($post->image)
                            <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}">
                        @else

                        @endif
                    </div>
                    <div class="content">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ ($post->description) }} <!-- Limit description to 100 characters -->
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
