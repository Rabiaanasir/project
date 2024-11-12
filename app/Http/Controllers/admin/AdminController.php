<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Appliance;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        // Count the number of users
        $userCount = User::count();

        // // Count users who logged in today (example for counting logins)
        // $todayLoginsCount = User::whereDate('last_login_at', now()->toDateString())->count();

        // Count completed projects
        $completedProjectsCount = Project::count();

        // Count total bookings
        $totalBookingsCount = Booking::count();

        // Count total installations
        $totalCalculationsCount = Appliance::count();

        // Pass data to the dashboard view
        return view('admin.dashboard', compact(
            'userCount',
            'completedProjectsCount',
            'totalCalculationsCount',
            'totalBookingsCount'
        ));
    }
}

