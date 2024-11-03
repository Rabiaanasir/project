{{--

  @include('css.userprofile_css')

    <div class="profile-container">
        <h2>User Profile</h2>

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="profile-photo">
        @if($user->profile_photo)
              <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}" alt="Profile Photo">
            @else
                <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Photo">
            @endif
        </div>


         <!-- Profile View Section -->
    <div id="profile-view" class="profile-view">
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
        <!--p><strong>Username:</strong> {{ $user->username }} <a href="#" id="edit-username" class="edit-icon">✎</a></p>
        <p><strong>Email:</strong> {{ $user->email }} <a href="#" id="edit-email" class="edit-icon">✎</a></p -->
        <button id="edit-profile" class="btn btn-primary">Edit Profile</a>
</div>
    <!-- Edit Profile Form (hidden initially) -->
    <div id="profile-edit" class="profile-edit" style="display: none;">
        <form action="{{ route('user.profile.update') }}" method="POST">
            @csrf

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label for="password">Password (leave blank to keep current password):</label>
            <input type="password" id="password" name="password">

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">

            <button type="submit">Update Profile</button>
        </form>
    <a href="#" id="cancel-edit" class="btn btn-secondary">Cancel</a>
    </div>
</div>

@include('js.userprofile_js') --}}



  @include('css.userprofile_css')

<div class="profile-container">
    <h2>User Profile</h2>

    <!-- Profile Information -->
    <div class="profile-photo">
        @if($user->profile_photo)
            <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}" alt="Profile Photo">
        @else
            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Photo">
        @endif
    </div>

    <div class="profile-view">
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <button id="edit-profile" class="btn btn-primary">Edit Profile</button>
    </div>

    {{-- <!-- System Requirements Section -->
    <div class="requirements-container">
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
                <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} (585W each)</p>
                <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }} kWh</p>
            </div>
        </div>
    </div> --}}
    <!-- System Requirements Section -->
<div class="requirements-container">
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
            <p><strong>Number of Panels:</strong> {{ $requiredSystemSize['onGridPanels'] }} (585W each)</p>
            <p><strong>Estimated Annual Generation:</strong> {{ $requiredSystemSize['onGridAnnualGeneration'] }} kWh</p>
        </div>
    </div>
</div>

</div>

@include('js.userprofile_js')
