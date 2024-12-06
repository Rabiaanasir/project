<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Project::select('id', 'title', 'image')->get();

        return DataTables::of($data)
            ->addColumn('image', function ($row) {
                return '<img src="' . asset('storage/images/' . $row->image) . '" width="70" height="50" />';
            })
            ->addColumn('action', function ($row) {
                $editBtn = '<a href="' . route('projects.edit', $row->id) . '"
                                data-href="' . route('projects.edit', $row->id) . '"data-container_edit=".edit_modal" class="btn btn-sm btn-primary modal_edit">Edit</a>';

                $deleteBtn = '<button data-id="' . $row->id . '"
                                class="btn btn-sm btn-danger deleteprojects">Delete</button>';

                return $editBtn . ' ' . $deleteBtn;
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }

    return view('admin.projects.index');
}

    public function create()
    {
        return view('admin.projects.create');
    }

public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('public/images', $imageName);
    }

    Project::create(array_merge($validated, ['image' => $imageName]));

    return response()->json(['success' => 'Project created successfully.']);
}
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));

    }

public function update(Request $request, $id)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image|max:2048',
    ]);


    $project = Project::findOrFail($id);

    if ($request->hasFile('image')) {
        if ($project->image) {
            \Storage::delete('public/images/' . $project->image);
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        $validated['image'] = $imageName;
    } else {
        $validated['image'] = $project->image;
    }

    $project->update($validated);

    return response()->json(['success' => 'Project updated successfully.']);
}

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return response()->json(['success' => 'Project deleted successfully.']);
    }

    public function frontendProjects()
{
    $projects = Project::all();

    return view('frontend.projects', compact('projects'));
}

}
