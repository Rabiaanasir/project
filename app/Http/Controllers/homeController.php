<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Appliance;
use App\Models\Booking;
use App\Models\Feedback;


class homeController extends Controller
{

    public function index()
{
    $data = [
        'userCount' => User::count(),
        'completedProjectsCount' => Project::count(),
        'totalBookingsCount' => Booking::count(),
        'totalCalculationsCount' => Appliance::count(),
    ];

    $data['feedbacks'] = Feedback::with('user')->latest()->take(5)->get();

    return view('frontend.home', $data);
}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
