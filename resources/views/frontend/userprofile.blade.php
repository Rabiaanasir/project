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
            <h3>Your Latest Booking</h3>

    @if($latestBooking)
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Consumption (Watts)</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $latestBooking->booking_date ? $latestBooking->booking_date->format('Y-m-d') : 'Not set' }}</td>
                    <td>{{ ucfirst($latestBooking->status) }}</td>
                    <td>{{ $latestBooking->consumption_watts }}</td>

                </tr>
            </tbody>
        </table>
    @else
        <p>You have no bookings at the moment.</p>
    @endif
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


        @if($latestBooking)
        <h3>Your Latest Booking</h3>
            <div class="booking-details">
                <div class="booking-item">
                    <strong>Booking Date:</strong>
                    <span>{{ $latestBooking->booking_date ? $latestBooking->booking_date->format('Y-m-d') : 'Not set' }}</span>
                </div>
                <div class="booking-item">
                    <strong>Status:</strong>
                    <span>{{ ucfirst($latestBooking->status) }}</span>
                </div>
                <div class="booking-item">
                    <strong>Consumption (Watts):</strong>
                    <span>{{ $latestBooking->consumption_watts }}</span>
                </div>
            </div>
        @else
            {{-- <p>You have no bookings at the moment.</p> --}}
        @endif

        <button id="edit-profile" class="btn btn-primary">Edit Profile</button>
        <a href="{{ route('home') }}" id="" class="btn btn-secondary">Cancel</a>

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

@include('js.userprofile_js')
