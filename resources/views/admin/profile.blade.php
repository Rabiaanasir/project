
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

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-card h3 {
            font-size: 26px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .profile-card p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
        }

        .profile-card p strong {
            color: #4CAF50;
        }

        /* Edit Profile Button */
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

        .action-btn:hover {
            background-color: #F4511E;
            transform: scale(1.05);
        }



    </style>
    @endsection

    @section('content')
    <!-- Main Content -->
    <div class="main-content">
        <!-- Profile Card -->
        <div class=" m-5 profile-card">
            <h3>Admin Profile</h3>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            {{-- <button class="action-btn">Edit Profile</button> --}}
        </div>

        <!-- Additional Content Here (optional) -->
    </div>

 @endsection
