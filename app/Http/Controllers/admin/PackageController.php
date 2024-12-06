<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Yajra\DataTables\DataTables;


class PackageController extends Controller
{
    public function index(Request $request)
{
    if ($request->ajax()) {
        $data = Package::select('id', 'title', 'description', 'inverter', 'plates', 'battery', 'price')->get();

        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                $editBtn = '<a href="' . route('packages.edit', $row->id) . '"
                                data-href="' . route('packages.edit', $row->id) . '"
                                data-container_edit=".edit_modal"
                                class="btn btn-sm btn-primary modal_edit">Edit</a>';

                $deleteBtn = '<button data-id="' . $row->id . '"
                                class="btn btn-sm btn-danger deletepackages">Delete</button>';

                return $editBtn . ' ' . $deleteBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    return view('admin.packages.index');
}

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
{

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'inverter' => 'required|string|max:50',
        'plates' => 'required|string|max:255',
        'battery' => 'required|string|max:50',
        'price' => 'required|numeric|min:0',
    ]);

    Package::create($validated);

    return response()->json(['success' => 'Package created successfully.']);
}

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, string $id)
{
    $package = Package::findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'inverter' => 'required|string|max:50',
        'plates' => 'required|string|max:255',
        'battery' => 'required|string|max:50',
        'price' => 'required|numeric|min:0',
    ]);

    $package->update($validated);

    return response()->json(['success' => 'Package updated successfully.']);
}

    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        $package->delete();

        return response()->json(['success' => 'Package deleted successfully.']);
    }

    public function frontendPackages()
    {
        $packages = Package::all();

        return view('frontend.packages', compact('packages'));
    }
}
