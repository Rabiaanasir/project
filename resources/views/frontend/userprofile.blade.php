
@section('css')
  @extends('css.userprofile_css')
@endsection

    <div class="profile-container">
        <h2>Edit Profile</h2>

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
    </div>
 