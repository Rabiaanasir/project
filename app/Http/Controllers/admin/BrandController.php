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
        $brandWithListing = Brand::with('listing');
        $brands = Brand::all();
        return view('admin.Brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Brand::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Brand added successfully.');
    }


    public function edit($id)
{
    $brand = Brand::find($id);
    return response()->json($brand);
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->update(['name' => $request->name]);
    return response()->json(['id' => $brand->id, 'name' => $brand->name, 200]);
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }
}
