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
        $userCount = User::count();

        $completedProjectsCount = Project::count();

        $totalBookingsCount = Booking::count();

        $totalCalculationsCount = Appliance::count();

        return view('admin.dashboard', compact(
            'userCount',
            'completedProjectsCount',
            'totalCalculationsCount',
            'totalBookingsCount'
        ));
    }
}

