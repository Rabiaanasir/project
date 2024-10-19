<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Listing;
use App\Models\Brand;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Listing::all();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    // $editBtn = '<a href="" data-id="'.$row->id.'" class="edit btn btn-primary btn-sm editListing">Edit</a>';
                    // $deleteBtn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-danger btn-sm deleteListing">Delete</a>';
                    // return $editBtn . ' ' . $deleteBtn;
                    // $editRoute = route('listings.edit', $row->id); // Generate the edit route
                // $editBtn = '<a href="' . $editRoute . '" data-id="' . $row->id . '" class="edit btn btn-primary btn-sm editListing">Edit</a>';
                $editBtn = '<a href="' . route('listings.edit', $row->id) . '"
                                data-href="' . route('listings.edit', $row->id) . '"
                                data-container_edit=".edit_modal"
                                class="btn btn-primary btn-sm modal_edit">Edit</a>';
                // $deleteBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteListing">Delete</a>';
                $deleteBtn = '<a href="' . route('listings.destroy', $row->id) . '"
                data-href="' . route('listings.destroy', $row->id) . '"
                class="btn btn-danger btn-sm deleteListing">
                Delete
              </a>';


                return $editBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.listings.index');
    }

    public function create()
    {
        $brands = Brand::pluck('name','id')->toArray();
        //  dd($brands);
        return view('admin.listings.create', compact(['brands']));
    }

    public function store(Request $request)
    {

         // Validate and store the new listing
    $request->validate([
        'title' => 'required|string|max:255',
        'brand_id' => 'required|integer',
        'price' => 'required|numeric',
        'watts' => 'required|integer',
        'description' => 'required|string',
        'image' => 'required|image|max:2048',
    ]);
// dd($request->hasFile('image'));
    // Handle file upload
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    } else {
        $imageName = null;
    }

    // Save the listing
   $Listing = Listing::create([
    'brand_id' => $request->brand_id,
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imageName,
        'watts' => $request->watts,
        'price' => $request->price,

    ]);
// dd($Listing);
    return response()->json(['success' => 'Listing created successfully.']);
}

    public function edit($id)
    {
        $listing = Listing::findOrFail($id); // Fetch the listing to edit
        // dd($listing);
        $brands = Brand::pluck('name', 'id'); // Fetch available brands
        return view('admin.listings.edit', compact('listing', 'brands'));
    }

    public function update(Request $request, $id)
    {$listing = Listing::findOrFail($id);

        $data = $request->validate([
            'title' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'watts' => 'required',
            'description' => 'required',
            'image' => 'image|nullable',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $listing->update($data);

        return response()->json(['message' => 'Listing updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     */



// public function destroy($id)
// {
//     try {
//         // Find the listing with related records (if any)
//         $listing = Listing::findOrFail($id);

//         // Optional: Delete related records, if necessary
//         // Example: $listing->relatedModel()->delete();

//         $listing->delete(); // Delete the listing

//         return response()->json(['success' => 'Listing deleted successfully.']);
//     } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
//         // If the listing is not found, return 404 response
//         return response()->json(['error' => 'Listing not found.'], 404);
//     } catch (\Exception $e) {
//         // Log the real error message for debugging
//         \Log::error('Listing Deletion Error: ' . $e->getMessage());

//         return response()->json(['error' => 'Failed to delete listing.'], 500);
//     }
// }
public function destroy($id)
{
    // Find the listing or return 404 if not found
    $listing = Listing::findOrFail($id);

    // Delete the listing
    $listing->delete();

    // Return success response
    return response()->json(['success' => 'Listing deleted successfully.']);
}

}
