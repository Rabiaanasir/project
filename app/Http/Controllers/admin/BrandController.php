<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Brand;


class BrandController extends Controller
{

    public function index()
    {
        // Fetch all brands
        $brandWithListing = Brand::with('listing');
        // dd( $brandWithListing);
        $brands = Brand::all();
        return view('admin.Brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create new brand
        Brand::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Brand added successfully.');
    }


    public function edit($id)
{
    // $brand = Brand::findOrFail($id); // Fetch the brand by ID
    // return view('admin.brands.edit-modal', compact('$brand')); // Pass $brand to the modal view
    $brand = Brand::find($id);
    return response()->json($brand);
}


    public function update(Request $request, $id)
    {
        // dd($id);
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->update(['name' => $request->name]);
    // $brand->name = $request->name;
    // $brand->save();
    // return redirect('')->with('success', 'Brand updated successfully.');
    return response()->json(['id' => $brand->id, 'name' => $brand->name, 200]);
    }

    public function destroy($id)
    {
        // Find the brand and delete
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }
}
