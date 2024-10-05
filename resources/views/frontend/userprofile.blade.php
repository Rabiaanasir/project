

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

@include('js.userprofile_js')
