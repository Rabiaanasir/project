@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.home_css')
@endsection
 @section('content')

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/slider1.jpeg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Harness the Power of the Sun</h5>
          <p>Transform sunlight into savings and sustainability with our cutting-edge solar panels.</p>
          {{-- <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p> --}}
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slider2.jpg') }}" class="d-block w-100 mt-3" alt="...">
        <div class="carousel-caption">
          <h5>Powering Your Business with Solar</h5>
          <p>Maximize efficiency and savings with our commercial and industrial solar solutions.</p>
          <p><a href="{{ route('commercial') }}" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slider3.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Solar Solutions for Agriculture</h5>
          <p>Power your farm sustainably and efficiently</p>
          <p><a href="{{ route('agriculture') }}" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Floating buttons -->
  <div class="floating-buttons">
    <a href="{{ route('calculator') }}" class="floating-button">Calculator</a>
    <a href="{{ route('contact-us') }}"class="floating-button">Contact Us</a>
</div>

  <!-- ---------About Section ------------>
  <div class="about-section">
    <div class="about-container">
      <div class="content-section">
        <div class="title">
          <h1>About Us</h1>
        </div>
        <div class="content">
          <h3>Our mission is:</h3>
          <p>to illuminate Pakistan through the power of the sun. With a deep-rooted understanding of the energy challenges faced by our nation, we are committed to making solar energy available to all by offering budget-friendly and technologically advanced solar solutions.</p>
          <div class="button">
             <a href="{{ route('about') }}">Read More</a>
          </div>
        </div>
        <div class="social">
          <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
        </div>
      </div>
      <div class="img-section">
        <img src="{{ asset('images/about-sec.jpg') }}">
      </div>
    </div>
  </div>

  <!---------- Services section -------->
<div class="container">
  <h1 class="section-heading">Our Services</h1>
  <div class="services-cards">
    <div class="services-card">
      <!-- <i class="fab fa-facebook fa-2x"></i> -->
      <h2>Net Metering</h2>
      <p>The excess electricity produced by your solar system isn’t wasted but it is fed into the grid.</p>
    </div>
    <div class="services-card">
      <!-- <i class="fab fa-instagram fa-2x"></i> -->
      <h2>Skillful Team</h2>
      <p>Highly experienced and qualified personnel are employed in our team. From engineers to sales team our employees are the best in the field.</p>
    </div>
    <div class="services-card">
      <!-- <i class="fab fa-twitter fa-2x"></i> -->
      <h2>Solar Panel Installation</h2>
      <p>Seamless solar panel installation that integrates cutting-edge technology with superior craftsmanship, delivering clean energy with minimal disruption.</p>
    </div>
  </div>
</div>

<!----------- Working ------>

<div class="working">
    <h2>HOW SOLAR POWER WORKS</h2>
<p>Solar power works by using photovoltaic (PV) cells in <a href="{{ route('panels') }}">solar panels</a> to capture sunlight and convert it into direct current (DC) electricity. This DC electricity is then transformed into alternating current (AC) electricity by a  <a href="{{ route('inverters') }}">inverter</a>, making it suitable for use in homes and businesses. The AC electricity is distributed through the electrical panel to power various devices. Excess electricity can be sent back to the grid for credits through net metering, and optional <a href="{{ route('batteries') }}">battery</a> storage systems can store surplus energy for use during non-sunny periods. This process provides a renewable, cost-effective, and environmentally friendly source of energy.</p>
<img src="{{ asset('images/how-solar-system-works.jpg') }}">
</div>

<!-------- counter --------->
<div class="counter-box">
<div class="counter-container">
  <div class="counter-item">
      <div class="counter" data-target="{{ $userCount }}">0</div>
            <p>Total Users</p>
  </div>
  <div class="counter-item">
      <div class="counter" data-target="{{ $completedProjectsCount }}">0</div>
            <p>Projects Completed</p>
  </div>
  <div class="counter-item">
      <div class="counter customer-counter" data-target="{{ $totalCalculationsCount }}">0</div>
      <p>Customer Quoted</p>
  </div>

</div>
</div>
</div>


<!-------- Contact-us Section -------->
<div class="contact">
<div class="contact-section">
  <div class="inner-container">
    <h1>A Solar Solution for All Markets Across The Globe</h1>
    <p class="text">
      Solar power has been adopted globally for multiple reasons, including grid independence, adoption of clean energy, net-metering, and lower electricity bills. For countries in the developing world with un-stable grids, such as Pakistan, India, Bangladesh, Nigeria & various countries in Africa, the main purpose of Solar Solutions is to provide continuous electricity amidst frequent power outages. Sun Source Solutions solves the problem of load-shedding along with the benefits of solar solutions that homes and businesses enjoy in the West.
    </p>
  <div class="button">
    <a href="{{ route('contact-us') }}">Contact Us</a>
 </div>
  </div>
</div>
</div>
<!-- Financing Section -->
{{-- <div class="card-container">
  <div class="card">
      <img src=".{{ asset('images/fina.jpg') }}">
      <div class="card-content">
          <h1>Bank Financing</h1>
          <p> This means that regardless of your bank affiliation for solar financing, Sun Source Solution will be at your doorstep for solar panel installation. We install solar panel systems in accordance with the policies and financing schemes of your chosen bank. The system could be installed from 5 KW for homes to 100 KW for businesses. The panels we use for installation under the Allied Bank financing scheme are durable and highly efficient and can last for more than 25 years.</p>
       <a href="{{ route('financing') }}" class="card-button">More Details</a>
      </div>
  </div>
<div class="card">
      <img src="{{ asset('images/emi.jpg') }}" >
      <div class="card-content">
          <h1>EMI Plan</h1>
          <p>
              We firmly believe that green energy is the future and we are committed to helping you make the switch with confidence Our installment program is designed to provide you with personalized, accessible, and cost-effective options to invest in green energy and reduce your electricity bills. We also offer net metering, which will further decrease your electricity bills. Furthermore, our plan is entirely self-financed, which means you do not need to partner with a bank.
          </p>
          <a href="{{ route('emi') }}" class="card-button">Apply Here</a>
      </div>
</div> --}}
<!-- Net Metering -->
<div class="row">
              <!-- <div class="row">--->
  <div class="imgwrapper">
  <img class="img" src="{{ asset('images/buildings.jpg') }}">
      <div class="text">
      <h2>HOW NET METERING WORKS IN PAKISTAN?</h2>
      <p> The power company installs a special meter called net meter or green meter at your place, and this meter can measure both the electricity you use and the extra electricity your panels send back to the grid. There’s a possibility they might use two separate meters for this. In most cases, there will be only one meter that checks both the import and export of your electricity. So, one meter keeps track of the electricity you buy from the power company, and the other one monitors the electricity your panels send back. If your solar panels produce more electricity than you actually use, the extra power goes back to the national grid.
      </p>
      <a href="{{ route('net-metering') }}" class="cards-button">Read More</a>
      </div>
    </div>
</div>
<!-- Testimonials -->
{{-- <div class="container2">
  <h2>What Our Customers Say...</h2>
  <div class="slide-container active">
    <div class="slide">
    <i class="fas fa-quote-right icon"></i>
        <div class="user">
        <img src="{{ asset('images/client2.jpg') }}" alt="">
          <div class="user-info">
          <h3>Ahmed</h3>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            </div>
          </div>
        </div>
        <p class="text">I reached out to Sun Source Solutions through their social media platform just for information, but their professional behavior, guidance of their skills and experience in dealing with customers was phenomenal. It made me not look anywhere else for my solar panel installation. The system they installed is working perfectly and producing the exact amount they promised it would.</p>
      </div>
    </div>
    <div class="slide-container">
      <div class="slide">
      <i class="fas fa-quote-right icon"></i>
        <div class="user">
        <img src="{{ asset('images/client2.jpg') }}" alt="">
          <div class="user-info">
          <h3>Sara</h3>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            </div>
          </div>
        </div>
        <p class="text">Sun Source Solutions answered all my questions about solar panel installation, product brands. They provided detailed guidance on how the system works and its benefits. Their knowledgeable, and educated team did a great job with my installation. Sun Source Solutions offers prices for their products, and the system has helped me save on my monthly bills.</p>
      </div>
    </div>
    <div class="slide-container">
      <div class="slide">
      <i class="fas fa-quote-right icon"></i>
        <div class="user">
        <img src="{{ asset('images/client2.jpg') }}" alt="">
          <div class="user-info">
          <h3>Ali</h3>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            </div>
          </div>
        </div>
        <p class="text">I had a great experience working with Sun Source Solutions. They’re a very professional and honest team. They gave me really good advice right from the beginning, which made the whole process really easy. They also paid attention. I’m really happy with everything they did  and I would definitely recommend them to anyone.</p>
      </div>
    </div>
    <div id="next" class="fas fa-chevron-right" onclick="next()"></div>
      <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
  </div>
</div> --}}


 {{-- <div class="container">
     <h3 class="text-center my-4">User Feedback</h3>
     <div class="feedback-grid">
         @foreach ($feedbacks as $feedback)
             <div class="card">
                 <div class="card-header">
                     {{ $feedback->name }}
                     <!-- Check if the feedback is from a registered user -->
                     <span class="badge">{{ $feedback->user ? 'Verified' : 'Guest' }}</span>
                 </div>
                 <div class="card-body">
                     <p><strong>Email:</strong> {{ $feedback->user ? $feedback->user->email : 'N/A' }}</p>
                     <p><strong>Message:</strong> {{ Str::limit($feedback->message, 100) }}</p>
                     <a href="{{ route('feedback.show', $feedback->id) }}" class="view-details">View Details</a>
                 </div>
             </div>
         @endforeach
     </div>
 </div> --}}
 <div class="container2">
    <h2 class="text-center">What Our Customers Say...</h2>
    {{-- <h3  my-4">User Feedback</h3> --}}
    <div class="feedback-grid">
        <!-- Display only the first 3 feedback items -->
        @foreach ($feedbacks->slice(0, 3) as $feedback)
            <div class="card">
                <div class="card-header">
                    {{ $feedback->name }}
                    <!-- Display 'Verified' if the feedback is from a registered user -->
                    <span class="badge">{{ $feedback->user ? 'Verified' : 'Guest' }}</span>
                </div>
                <div class="card-body">
                    <p><strong>Name: {{ $feedback->username }}</strong></p> <!-- Display full message -->
                    <p><strong>Message:</strong> {{ $feedback->message }}</p> <!-- Display full message -->
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
@section('js')
  @include('js.home_js');
@endsection
