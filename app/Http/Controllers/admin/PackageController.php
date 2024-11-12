<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Yajra\DataTables\DataTables;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Package::select('id', 'title', 'description', 'inverter', 'plates', 'battery', 'price')->get();

        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                // Edit button with modal support
                $editBtn = '<a href="' . route('packages.edit', $row->id) . '"
                                data-href="' . route('packages.edit', $row->id) . '"
                                data-container_edit=".edit_modal"
                                class="btn btn-sm btn-primary modal_edit">Edit</a>';

                // Delete button
                $deleteBtn = '<button data-id="' . $row->id . '"
                                class="btn btn-sm btn-danger deletepackages">Delete</button>';

                return $editBtn . ' ' . $deleteBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    return view('admin.packages.index');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'inverter' => 'required|string|max:50',  // Example format like '12kW'
        'plates' => 'required|string|max:255',
        'battery' => 'required|string|max:50',   // Example format like '24V'
        'price' => 'required|numeric|min:0',
    ]);

    // Create a new package using the validated data
    Package::create($validated);

    // Return a success response
    return response()->json(['success' => 'Package created successfully.']);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit', compact('package'));  // Return an edit view with project data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Find the package by ID
    $package = Package::findOrFail($id);

    // Validate the request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'inverter' => 'required|string|max:50',  // Example format like '12kW'
        'plates' => 'required|string|max:255',
        'battery' => 'required|string|max:50',   // Example format like '24V'
        'price' => 'required|numeric|min:0',
    ]);

    // Update the package with the validated data
    $package->update($validated);

    // Return a success response
    return response()->json(['success' => 'Package updated successfully.']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        $package->delete();  //Delete the project

        return response()->json(['success' => 'Package deleted successfully.']);
    }

    public function frontendPackages()
    {
        // Fetch all projects to display on the frontend
        $packages = Package::all();

        // Return the frontend view with the projects data
        return view('frontend.packages', compact('packages'));
    }
}
