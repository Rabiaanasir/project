
@extends('Admin.master')

@section('content')
    <h3 class="i-name">Dashboard</h3>

    <div class="values">
        <div class="val-box">
            <i class="fas fa-users"></i>
            <div>
                <h3>{{ $userCount }}</h3>
                <span>Total Users</span>
            </div>
        </div>

        <div class="val-box">
            <i class="fas fa-tasks"></i>
            <div>
                <h3>{{ $completedProjectsCount }}</h3>
                <span>Projects Completed</span>
            </div>
        </div>

        <div class="val-box">
            <i class="fas fa-calendar-check"></i>
            <div>
                <h3>{{ $totalBookingsCount }}</h3>
                <span>Total Bookings</span>
            </div>
        </div>

        <div class="val-box">
            <i class="fas fa-tools"></i>
            <div>
                <h3>{{ $totalCalculationsCount }}</h3>
                <span>Total Calculations</span>
            </div>
        </div>
    </div>
@endsection
