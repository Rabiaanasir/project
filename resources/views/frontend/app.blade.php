<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('frontend.cs')
        @yield('css')
    </head>
    <body class="font-sans antialiased">
        <nav class="navbar">
            <div class="container">
              <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.jpeg') }}">
    </a>
                <ul class="nav-items">
                    <!-- <li class="nav-item"><a href="{{ route('home') }}">Home</a></li> -->
                    <li class="nav-item"><a href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a href="">Solar Accessories
                        <ul class="dropdown">
                          <li><a href="{{ route('panels') }}">Solar Panels</a></li>
                            <li><a href="{{ route('inverters') }}">Solar Inverters</a></li>
                            <li><a href="{{ route('batteries') }}">Solar Batteries</a></li>
                            <li><a href="{{ route('heaters') }}">Solar Water Heaters</a></li>
                        </ul>
                       </li>
                    <li class="nav-item"><a href="">Solutions
                        <ul class="dropdown">
                            <li><a href="{{ route('commercial') }}">Commercial</a></li>
                            <li><a href="{{ route('agriculture') }}">Agriculture</a></li>
                        </ul>
                       </li>
                    <li class="nav-item"><a href="{{ route('blog') }}">Blog</a></li>
                    
        

                   
                  
                    
                </ul>
            </div>
        </nav>
        @yield('content')
        <footer>
    <div class="left-section">
        <ul>
          <li><a href="{{ route('contact-us') }}">ContactUs</a></li>
          <li><a href="{{ route('invest') }}">Invest</a></li>
          <li><a href="#">Terms and Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li>Sun source solutions &copy; 2024 </li>
        </ul>
      </div>
      <div class="right-section">
        <ul>
          <li> <i class="fab fa-facebook fa-2x"></i></li>
            <li><i class="fab fa-twitter fa-2x"></i></li>
            <li><i class="fab fa-instagram fa-2x"></i></li>
          
        </ul>
      </div>
</footer>
        {{-- @include('frontend.js') --}}
        @yield('js')
    </body>
</html>
