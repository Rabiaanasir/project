
@extends('frontend.app')

@section('css')
    @include('css.common_css')
    @include('css.packages_css')
@endsection

@section('content')
<header>
    <div class="header-content">
        <h2 class="lg-heading text-light">SOLAR PACKAGES</h2>
    </div>
</header>

<section>

    <!-- Loop through each package -->
    @foreach($packages as $package)
    <h1>{{ $package->title }}</h1>
        <div class="package">
            <div class="side-block">
                <h3>{{ $package->description }}</h3>
            </div>
            <div class="details">
                <div class="inverter">
                    <img src="{{ asset('images/Chint-10-KTL-On-Grid-Inverter.jpg') }}" alt="Inverter">
                    <p>{{ $package->inverter }} Inverter</p>
                </div>
                <div class="panel">
                    <img src=".{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                    <p>{{ $package->plates}}</p>
                </div>
                <div class="batteries">
                    <img src="{{ asset('images/images (2).jpeg') }}"alt="Battery">
                    <p>{{ $package->battery}}</p>
                </div>
                <div class="icon-price">
                    <i class="fa-solid fa-sack-dollar fa-4x"></i>
                    <p class="price">Rs. {{ number_format($package->price, 0) }}</p>
                </div>
                <div class="order">

                    <a href="{{ route('contact') }}">Get A Quote</a>
                </div>
            </div>
        </div>
    @endforeach
</section>

<section class="finance">
    <div class="text">
        <p>**Flexible <a href="{{ route('financing') }}">Financing</a> options available to make your transition to solar energy affordable and hassle-free!**</p>
    </div>
</section>
@endsection
