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
                <img src="{{ asset('images/removebg-preview.png') }}" alt="logo">
    </a>
                <ul class="nav-items">
                    <!-- <li class="nav-item"><a href="{{ route('home') }}">Home</a></li> -->
                    <li class="nav-item"><a href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a href="{{ route('frontend.listings') }}">Solar Accessories</a></li>
                       <li class="nav-item"><a href="{{ route('frontend.projects') }}">Projects</a></li>
                    <li class="nav-item"><a href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item">
            <a href="{{ route('packages') }}">Solar Packages</a>
        </li>
    @if (Auth::check())
    <li class="nav-item">
        <a href="#">{{ Auth::user()->username }}</a>
        <ul class="dropdown">

            @if (auth()->user()->role == 'admin')
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            @else
            <li><a href="{{ route('user.profile') }}">Profile</a></li>
            @endif

            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </li>
@else
    <li class="nav-item login">
        <a href="{{ route('registeration') }}">LOG IN</a>
    </li>
@endif
                </ul>
            </div>
        </nav>
        @yield('content')
        <footer>
    <div class="left-section">
        <ul>
          <li><a href="{{ route('contact') }}">Contact</a></li>
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
        @yield('js')

    </body>
</html>
