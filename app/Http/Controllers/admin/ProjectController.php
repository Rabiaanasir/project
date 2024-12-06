<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;  // Use the Project model
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;  // Ensure DataTables is imported
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the completed projects.
     */
    public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Project::select('id', 'title', 'image')->get();

        return DataTables::of($data)
            ->addColumn('image', function ($row) {
                // Ensure to return the correct path for the image
                return '<img src="' . asset('storage/images/' . $row->image) . '" width="70" height="50" />';
            })
            ->addColumn('action', function ($row) {
                // Edit button with modal support
                $editBtn = '<a href="' . route('projects.edit', $row->id) . '"
                                data-href="' . route('projects.edit', $row->id) . '"data-container_edit=".edit_modal" class="btn btn-sm btn-primary modal_edit">Edit</a>';

                // Delete button
                $deleteBtn = '<button data-id="' . $row->id . '"
                                class="btn btn-sm btn-danger deleteprojects">Delete</button>';

                return $editBtn . ' ' . $deleteBtn;
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }

    return view('admin.projects.index');
}



    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('admin.projects.create');  // Return a create view (you need to design it)
    }

    /**
     * Store a newly created project in storage.
     */

public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
    ]);

    // Initialize imageName to null
    $imageName = null;

    // Check if an image file was uploaded
    if ($request->hasFile('image')) {
        // Generate a unique filename based on the current time and the image's extension
        $imageName = time() . '.' . $request->image->extension();

        // Store the image in the public/images directory
        $request->image->storeAs('public/images', $imageName);
    }

    // Create a new project using the validated data and the image name
    Project::create(array_merge($validated, ['image' => $imageName]));

    // Return a success response
    return response()->json(['success' => 'Project created successfully.']);
}



/**
     * Show the form for editing the specified project.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));  // Return an edit view with project data

    }

    /**
     * Update the specified project in storage.
     */

public function update(Request $request, $id)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|max:2048', // Laravel will automatically verify valid image types
    ]);


    // Find the project by ID or throw an exception
    $project = Project::findOrFail($id);

    // Handle image upload if a new one is provided
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($project->image) {
            \Storage::delete('public/images/' . $project->image);
        }

        // Store the new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        // Update the validated data with the new image name
        $validated['image'] = $imageName;
    } else {
        // If no new image is uploaded, retain the old image
        $validated['image'] = $project->image;
    }

    // Update the project with the validated data
    $project->update($validated);

    // Return a success response
    return response()->json(['success' => 'Project updated successfully.']);
}


    /**
     * Remove the specified project from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();  //Delete the project

        return response()->json(['success' => 'Project deleted successfully.']);
    }

    public function frontendProjects()
{
    // Fetch all projects to display on the frontend
    $projects = Project::all();

    // Return the frontend view with the projects data
    return view('frontend.projects', compact('projects'));
}

}
