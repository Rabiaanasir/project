{{-- @extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.packages_css')
@endsection --}}

{{-- @section('content')
    <header>
        <div class="header-content">
            <h2 class="lg-heading text-light ">SOLAR PACKAGES</h2>
            <!-- <p class="text-light">Storing The Sun's Power For A Sustainable Future.</p>
             <a href="#Req-more-info" class="btn btn-primary md-heading">Request More Information </a> -- -->
        </div>
    </header>
    <section>
        <h1>Residential On-Grid Packages</h1>
    <div class="package">
        <div class="side-block">
            <h3>5 kW<br>SOLAR<br>ON-GRID<br>SYSTEM</h3>
        </div>
        <div class="details">
            <div class="inverter">
                <img src="{{ asset('images/Chint-10-KTL-On-Grid-Inverter.jpg') }}" alt="Inverter">
                <p>5 kW Inverter</p>
            </div>
            <div class="panel">
                <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                <p>5.265 kW</p>
            </div>
            <div class="icon-price">
                <i class="fa-solid fa-sack-dollar fa-4x"></i>
                <p class="price">Rs. 789,400</p>
            </div>
            <div class="icon-saving">
                <i class="fa-solid fa-hand-holding-dollar fa-4x"></i>
                <p class="savings">30,600 Monthly Savings</p>
            </div>
            <div class="order">
                <a href="#">ORDER NOW</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="package">
        <div class="side-block">
            <h3>10 kW<br>SOLAR<br>ON-GRID<br>SYSTEM</h3>
        </div>
        <div class="details">
            <div class="inverter">
                <img src="{{ asset('images/Chint-10-KTL-On-Grid-Inverter.jpg') }}" alt="Inverter">
                <p>10 kW Inverter</p>
            </div>
            <div class="panel">
                <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                <p>9.945 kW</p>
            </div>
            <div class="icon-price">
                <i class="fa-solid fa-sack-dollar fa-4x"></i>
                <p class="price">Rs. 1,157,000</p>
            </div>
            <div class="icon-saving">
                <i class="fa-solid fa-hand-holding-dollar fa-4x"></i>
                <p class="savings">58,000 Monthly Savings</p>
            </div>
            <div class="order">
                <a href="#">ORDER NOW</a>
            </div>
        </div>
    </div>
    <hr>

    <div class="package">
        <div class="side-block">
            <h3>15 kW<br>SOLAR<br>ON-GRID<br>SYSTEM</h3>
        </div>
        <div class="details">
            <div class="inverter">
                <img src="{{ asset('images/Chint-10-KTL-On-Grid-Inverter.jpg') }}" alt="Inverter">
                <p>15kW Inverter</p>
            </div>
            <div class="panel">
                <img src=".{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                <p>15.21 kW</p>
            </div>
            <div class="icon-price">
                <i class="fa-solid fa-sack-dollar fa-4x"></i>
                <p class="price">Rs. 1,581,200</p>
            </div>
            <div class="icon-saving">
                <i class="fa-solid fa-hand-holding-dollar fa-4x"></i>
                <p class="savings">88,900 Monthly Savings</p>
            </div>
            <div class="order">
                <a href="#">ORDER NOW</a>
            </div>
        </div>
    </div>
    <hr>

    <div class="package">
        <div class="side-block">
            <h3>20 kW<br>SOLAR<br>ON-GRID<br>SYSTEM</h3>
        </div>
        <div class="details">
            <div class="inverter">
                <img src="{{ asset('images/Chint-10-KTL-On-Grid-Inverter.jpg') }}" alt="Inverter">
                <p>20 kW Inverter</p>
            </div>
            <div class="panel">
                <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                <p>19.89 kW</p>
            </div>
            <div class="icon-price">
                <i class="fa-solid fa-sack-dollar fa-4x"></i>
                <p class="price">Rs. 1,987,500</p>
            </div>
            <div class="icon-saving">
                <i class="fa-solid fa-hand-holding-dollar fa-4x"></i>
                <p class="savings">1,16,300 Monthly Savings</p>
            </div>
            <div class="order">
                <a href="#">ORDER NOW</a>
            </div>
        </div>
    </div>
</section>

<section>
    <h1>Residential Hybrid Packages</h1>
    <h3>(Li-Ion Batteries)</h3>
    <h4>5 Years Warranty</h4>
    <div class="package">
        <div class="side-block">
            <h3>1 A/C<br>Solution</h3>
            <h5>(Net Metering)</h5>
        </div>
        <div class="details">
            <div class="inverter">
                <img src=".{{ asset('images/images.png') }}" alt="Inverter">
                <p>6 kW Inverter</p>
            </div>
            <div class="panel">
                <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                <p>5.85 kW</p>
            </div>
            <div class="batteries">
                <img src="{{ asset('images/li-battery.jpeg') }}"alt="Battery">
                <p class="savings">Lithium Ion Batteries 4.8 KWH</p>
            </div>
            <div class="icon-price">
                <i class="fa-solid fa-sack-dollar fa-4x"></i>
                <p class="price">Rs. 1,496,459</p>
            </div>
            <div class="order">
                <a href="#">ORDER NOW</a>
            </div>
        </div>
    </div>
<hr>

<div class="package">
    <div class="side-block">
        <h3>3 A/C<br>Solution</h3>
        <h5>(Net Metering)</h5>
    </div>
    <div class="details">
        <div class="inverter">
            <img src="{{ asset('images/images.png') }}" alt="Inverter">
            <p>12 kW Inverter</p>
        </div>
        <div class="panel">
            <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
            <p>10.53 kW</p>
        </div>
        <div class="batteries">
            <img src="{{ asset('images/li-battery.jpeg') }}"alt="Battery">
            <p class="savings">Lithium Ion Batteries 9.6 KWH</p>
        </div>
        <div class="icon-price">
            <i class="fa-solid fa-sack-dollar fa-4x"></i>
            <p class="price">Rs. 2,973,818</p>
        </div>
        <div class="order">
            <a href="#">ORDER NOW</a>
            </div>
    </div>
</div>

<div class="key-diff">
<h3>COMPARISON</h3>
        <table>
            <tr id="diff">
                <th>SYSTEM NAME</th>
                <th>FANS</th>
                <th>LIGHTBULB</th>
                <th>FREEZERS</th>
                <th>LED-TV's</th>
                <th>AC's</th>
                <th>Starting from PKR</th>
            </tr>
            <tr>
                <td>Basic Home</td>
                <td>4</td>
                <td>12</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>421,918</td>
            </tr>
            <tr>
                <td>Classic Home</td>
                <td>5</td>
                <td>18</td>
                <td>2</td>
                <td>2</td>
                <td>0</td>
                <td>620,294</td>
            </tr>
            <tr>
            <td>1A/C Solution</td>
                <td>5</td>
                <td>18</td>
                <td>1</td>
                <td>3</td>
                <td>1</td>
                <td>965,400</td>
            </tr>
            <tr>
                <td>1A/C Solution(NM)</td>
                <td>5</td>
                <td>18</td>
                <td>1</td>
                <td>3</td>
                <td>1</td>
                <td>1,496,459</td>
            </tr>
            <tr>
                <td>3A/C Solution(NM)</td>
                <td>5</td>
                <td>18</td>
                <td>2</td>
                <td>2</td>
                <td>3</td>
                <td>2,973,818</td>
            </tr>

        </table>
</div>
</section>

<section>
<h1>Residential Hybrid Packages</h1>
    <h3>(Tubular Batteries)</h3>
    <h4>2 Years Warranty</h4>
    <div class="package">
        <div class="side-block">
            <h3>BASIC<br>HOME</h3>
        </div>
        <div class="details">
            <div class="inverter">
                <img src="{{ asset('images//images.png') }}" alt="Inverter">
                <p>2.5 kW Inverter</p>
            </div>
            <div class="panel">
                <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
                <p>1.76 kW</p>
            </div>
            <div class="batteries">
                <img src="{{ asset('images/images (2).jpeg') }}"alt="Battery">
                <p class="savings">Tubular Batteries 1.7 KWH</p>
            </div>
            <div class="icon-price">
                <i class="fa-solid fa-sack-dollar fa-4x"></i>
                <p class="price">Rs. 421,918</p>
            </div>
            <div class="order">
                <a href="#">ORDER NOW</a>
            </div>
        </div>
    </div>
<hr>

<div class="package">
    <div class="side-block">
        <h3>CLASSIC<br>HOME</h3>
    </div>
    <div class="details">
        <div class="inverter">
            <img src="{{ asset('images/images.png') }}" alt="Inverter">
            <p>3.2 kW Inverter</p>
        </div>
        <div class="panel">
            <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
            <p>2.93 kW</p>
        </div>
        <div class="batteries">
            <img src=".{{ asset('images/images (2).jpeg') }}"alt="Battery">
            <p class="savings">Tubular Batteries 2.2 KWH</p>
        </div>
        <div class="icon-price">
            <i class="fa-solid fa-sack-dollar fa-4x"></i>
            <p class="price">Rs. 620,294</p>
        </div>
        <div class="order">
            <a href="#">ORDER NOW</a>
        </div>
    </div>
</div>
<hr>

<div class="package">
    <div class="side-block">
        <h3>1 A/C<br>Solution</h3>
        <h5>(+N.M)</h5>
    </div>
    <div class="details">
        <div class="inverter">
            <img src="{{ asset('images/images.png') }}" alt="Inverter">
            <p>5.2 kW Inverter</p>
        </div>
        <div class="panel">
            <img src="{{ asset('images/Trina-Solar-Panel-Monocrystalline-380390395400410-watts.jpg') }}" alt="Panel">
            <p>3.51 kW</p>
        </div>
        <div class="batteries">
            <img src="{{ asset('images/8ba86ba2-30e5-4312-bab0-08904f9eecd9-1-e1714461596883.webp') }}"alt="Battery">
            <p class="savings">Tubular Batteries 5.5 KWH</p>
        </div>
        <div class="icon-price">
            <i class="fa-solid fa-sack-dollar fa-4x"></i>
            <p class="price">Rs. 965,400</p>
        </div>
        <div class="order">
        <a href="#">ORDER NOW</a>
        </div>
    </div>
</div>
</section>
<section class="finance">
<div class="text">
<p>**Flexible <a href="{{ route('financing') }}">Financing</a> options available to make your transition to solar energy affordable and hassle-free!**</p>
</div>
</section>
@endsection --}}
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
                <div class="icon-price">
                    <i class="fa-solid fa-sack-dollar fa-4x"></i>
                    <p class="price">Rs. {{ number_format($package->price, 0) }}</p>
                </div>
                <div class="batteries">
                    <img src="{{ asset('images/images (2).jpeg') }}"alt="Battery">
                    <p>{{ $package->battery}}</p>
                </div>
                <div class="order">
                    <a href="#">ORDER NOW</a>
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
