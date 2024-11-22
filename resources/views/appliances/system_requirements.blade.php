


{{-- @extends('frontend.app')

@section('css')
@include('css.common_css')
<style>
    /* Container styling */
    .requirements-container {
        max-width: 900px;
        margin: auto;
        padding: 30px;
        background: #fefefe;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        text-align: center;
        transition: box-shadow 0.3s ease;
        font-family: 'Montserrat', sans-serif;
    }
    .requirements-container:hover {
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2);
    }

    /* Header styling */
    .requirements-header {
        color: #009688;
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }
    .requirements-header:hover {
        transform: scale(1.05);
    }

    /* Info box styling */
    .info-box {
        padding: 15px;
        margin: 15px 0;
        background: #d7f2e3;
        border-radius: 10px;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .info-box:hover {
        transform: scale(1.04);
    }
    .info-box img {
        width: 50px;
        height: 50px;
    }

    /* System types layout */
    .system-types {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* System card styling */
    .system-card {
        flex: 1;
        max-width: 400px;
        padding: 25px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, background-color 0.3s ease;
        text-align: left;
    }
    .system-card:hover {
        transform: translateY(-4px);
        background-color: #e8f7f3;
    }
    .system-card h2 {
        font-size: 1.7rem;
        color: #00796b;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* Button styling */
    .btn-back {
        font-size: 1.2rem;
        padding: 12px 28px;
        margin-top: 25px;
        border-radius: 8px;
        background-color: #00796b;
        color: white;
        transition: background-color 0.3s ease;
    }
    .btn-back:hover {
        background-color: #004d40;
        color: #e0f2f1;
    }
</style>
@endsection

@section('content')
<div class="container requirements-container">
    <h1 class="requirements-header">Solar System Requirements</h1>

    <!-- Total wattage info box -->
    <div class="info-box">
        <p>Total Wattage of Appliances: <strong>{{ $totalWattage }} W</strong></p>
    </div>

    <!-- System requirement info box -->
    <div class="info-box">
        <p>System Required: <strong>{{ $requiredSystemSize['systemRequired'] }}</strong></p>
    </div>

    <!-- Solar capacity recommendation info box -->
    <div class="info-box">
        <p>Solar Capacity Recommendation: <strong>{{ $recommendedSolarCapacity }}</strong></p>
    </div>

    <!-- System Types -->
    <div class="system-card">
        <h2>Hybrid System</h2>
        @if(isset($requiredSystemSize['hybridInverterSize']) && $requiredSystemSize['hybridInverterSize'] !== 'Not applicable')
            <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['hybridInverterSize'] }}</p>
            <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['hybridPanels'] ?? 'Not calculated' }}</p>
            <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['hybridAnnualGeneration'] ?? 'Not calculated' }}</p>
        @else
            <p>This hybrid system is not suitable based on the current requirements.</p>
        @endif

    </div>

     <!-- On-Grid System Card -->
     <div class="system-card">
        <h2>On-Grid System</h2>
        <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['onGridInverterSize'] }}</p>
        <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} (585W each)</p>
        <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }} kWh</p>
    </div>
</div>


    <a href="{{ route('appliances.index') }}" class="btn btn-primary btn-back">Back to Appliance Selection</a>
</div>
@endsection --}}


@extends('frontend.app')

@section('css')
@include('css.common_css')
<style>
    /* Container styling */
    .requirements-container {
        max-width: 900px;
        margin: auto;
        padding: 30px;
        background: #fefefe;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        text-align: center;
        transition: box-shadow 0.3s ease;
        font-family: 'Montserrat', sans-serif;
    }
    .requirements-container:hover {
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2);
    }

    /* Header styling */
    .requirements-header {
        color: #009688;
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }
    .requirements-header:hover {
        transform: scale(1.05);
    }

    /* Info box styling */
    .info-box {
        padding: 15px;
        margin: 15px 0;
        background: #d7f2e3;
        border-radius: 10px;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .info-box:hover {
        transform: scale(1.04);
    }
    .info-box img {
        width: 50px;
        height: 50px;
    }

    /* System types layout */
    .system-types {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    /* System card styling */
    .system-card {
        flex: 1;
        max-width: 400px;
        padding: 25px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, background-color 0.3s ease;
        text-align: left;
    }
    .system-card:hover {
        transform: translateY(-4px);
        background-color: #e8f7f3;
    }
    .system-card h2 {
        font-size: 1.7rem;
        color: #00796b;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* Button styling */
    .btn-back {
        font-size: 1.2rem;
        padding: 12px 28px;
        margin-top: 25px;
        border-radius: 8px;
        background-color: #00796b;
        color: white;
        transition: background-color 0.3s ease;
    }
    .btn-back:hover {
        background-color: #004d40;
        color: #e0f2f1;
    }
</style>
@endsection

@section('content')
<div class="container requirements-container">
    <h1 class="requirements-header">Solar System Requirements</h1>

    <!-- Total wattage info box -->
    <div class="info-box">
        <p>Total Wattage of Appliances: <strong>{{ $totalWattage }} W</strong></p>
    </div>

    <!-- System requirement info box -->
    <div class="info-box">
        <p>System Required: <strong>{{ $requiredSystemSize['systemRequired'] }}</strong></p>
    </div>

    <!-- Solar capacity recommendation info box -->
    <div class="info-box">
        <p>Solar Capacity Recommendation: <strong>{{ $recommendedSolarCapacity }}</strong></p>
    </div>

    <!-- System Types -->
    <div class="system-types">
        <!-- Hybrid System Card -->
        <div class="system-card">
            <h2>Hybrid System</h2>
            @if(isset($requiredSystemSize['hybridInverterSize']) && $requiredSystemSize['hybridInverterSize'] !== 'Not applicable')
                <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['hybridInverterSize'] }}</p>
                <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['hybridPanels'] ?? 'Not calculated' }}</p>
                <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['hybridAnnualGeneration'] ?? 'Not calculated' }}</p>
            @else
                <p>This hybrid system is not suitable based on the current requirements.</p>
            @endif
        </div>

        <!-- On-Grid System Card -->
        <div class="system-card">
            <h2>On-Grid System</h2>
            <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['onGridInverterSize'] }}</p>
            <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} </p>
            <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }}</p>
        </div>
    </div>

    <!-- Button inside container -->
    <a href="{{ route('appliances.index') }}" class="btn btn-primary btn-back">Back to Appliance Selection</a>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary btn-back">Book Now</a>
</div>
@endsection
