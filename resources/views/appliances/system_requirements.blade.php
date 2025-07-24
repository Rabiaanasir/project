
@extends('frontend.app')

@section('css')
@include('css.common_css')
<style>
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

    .system-types {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 20px;
    }

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

    <div class="info-box">
        <p>Total Wattage of Appliances: <strong>{{ $totalWattage }} W</strong></p>
    </div>

    <div class="info-box">
        <p>System Required: <strong>{{ $requiredSystemSize['systemRequired'] }}</strong></p>
    </div>

    <div class="info-box">
        <p>Solar Capacity Recommendation: <strong>{{ $recommendedSolarCapacity }}</strong></p>
    </div>

    {{-- 🚨 Insert Warning Here --}}
    {{-- @if ($requiredSystemSize['recommendedInverter'] === 'Please contact support for a custom solar solution.')
        <div class="alert alert-warning text-center">
            Your wattage is too high for standard systems. Please <a href="{{ route('contact') }}">contact our team</a> for a custom solution.
        </div>
    @endif --}}
    @if ($requiredSystemSize['recommendedInverter'] === 'Please contact support for a custom solar solution.')
    <div class="alert alert-warning text-center">
        Your wattage is too high for standard systems. Please <a href="{{ route('contact') }}">contact our team</a> for a custom solution.
    </div>
{{-- @else
    <div class="system-types">
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
        <div class="system-card">
            <h2>On-Grid System</h2>
            <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['onGridInverterSize'] }}</p>
            <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} </p>
            <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }}</p>
        </div>
    </div>
    <div class="alert alert-warning text-center">
        For a quotation or pricing details, feel free to contact our team.
    </div>
@endif --}}
@elseif ($recommendedSolarCapacity !== 'Your current usage is very low. A basic solar setup under 1 kW may be sufficient. Consider a small backup or plug-and-play solar kit.')
    <div class="system-types">
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
        <div class="system-card">
            <h2>On-Grid System</h2>
            <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['onGridInverterSize'] }}</p>
            <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} </p>
            <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }}</p>
        </div>
    </div>
    @endif
    <div class="alert alert-warning text-center">
        For a quotation or pricing details, feel free to <a href="{{ route('contact') }}">contact </a>our team.
    </div>


    {{-- <div class="system-types">
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
        <div class="system-card">
            <h2>On-Grid System</h2>
            <p><strong>Inverter Size:</strong> {{ $requiredSystemSize['onGridInverterSize'] }}</p>
            <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} </p>
            <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }}</p>
        </div>
    </div> --}}
    <a href="{{ route('appliances.index') }}" class="btn btn-primary btn-back">Back to Appliance Selection</a>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary btn-back">Book Now</a>
</div>
@endsection
