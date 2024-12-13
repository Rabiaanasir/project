

 @extends('Admin.master')
 @section('css')
 <style>
    .profile-card {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .profile-card h2 {
        font-size: 26px;
        color: #4CAF50;
        margin-bottom: 30px;
    }

    .profile-card p {
        font-size: 16px;
        color: #555;
        margin: 10px 0;
    }

    .profile-card p strong {
        color: #4CAF50;
    }

    .action-btn {
        padding: 12px 30px;
        background-color: #FF7043;
        color: white;
        border-radius: 25px;
        border: none;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease-in-out;
    }
    .alert {
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }


</style>
@endsection
@section('content')



<div class="profile-container profile-card">
    <h2>Admin Profile</h2>

    <div class="alerts">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    <div id="profile-view" class="profile-view ">
        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>


        <button id="edit-profile" class="btn btn-primary">Edit Profile</button>

    </div>

    <div id="profile-edit" class="profile-edit" style="display: none;">
        <form action="{{ route('admin.updateprofile') }}" method="POST" >
            @csrf

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">

            <label for="showAdminPassword">
                <input type="checkbox" id="showAdminPassword"> Show Password
            </label>
            <button type="submit">Update Profile</button>



        </form>
        <a href="#" id="cancel-edit" class="btn btn-secondary">Cancel</a>

    </div>
</div>
<script>

document.addEventListener('DOMContentLoaded', function() {
    const errorAlert = document.querySelector('.alert-danger');
    const successAlert = document.querySelector('.alert-success');

    if (errorAlert || successAlert) {
        document.getElementById('profile-edit').style.display = 'block';
        document.getElementById('profile-view').style.display = 'none';
    }
});


    document.getElementById('showAdminPassword').addEventListener('change', function() {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('password_confirmation');

    if (this.checked) {
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
    } else {
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
    }
});
    </script>
@include('js.userprofile_js')
@endsection
