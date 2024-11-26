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
            $data = Listing::with('brand')->get(); // Eager load related brand data
            return Datatables::of($data)
                ->addColumn('image', function ($row) {
                    // Handle image rendering with default fallback
                    return '<img src="' . asset('storage/images/' . $row->image) . '" width="70" height="50" />';
                    // $imageUrl = $row->image ? asset('storage/images/' . $row->image) : '';
                    // return '<img src="' . $imageUrl . '" class="listing-image" width="70" height="50" alt="Listing Image" />';
                })
                ->addColumn('action', function ($row) {
                    // View button
                    $viewBtn = '<a href="' . route('listings.view', $row->id) . '"
                    data-href="' . route('listings.view', $row->id) . '"
                    data-container_view=".view_modal"
                    class="btn btn-sm btn-success modal_view">View</a>';
                    // Edit button with modal support
                    $editBtn = '<a href="' . route('listings.edit', $row->id) . '"
                                    data-href="' . route('listings.edit', $row->id) . '"data-container_edit=".edit_modal" class="btn btn-sm btn-primary modal_edit">Edit</a>';

                    // Delete button
                    $deleteBtn = '<button data-id="' . $row->id . '"
                                    class="btn btn-sm btn-danger deleteListing">Delete</button>';

                    return $viewBtn . ' ' . $editBtn . ' ' . $deleteBtn;
                })
                ->addColumn('description', function ($row) {
                    // Truncate description to 50 characters and append '...' if it's too long
                    $truncatedDescription = strlen($row->description) > 50
                        ? substr($row->description, 0, 35) . '...'
                        : $row->description;

                    return $truncatedDescription; // Return truncated description
                })
                ->rawColumns(['image', 'action']) // Allow rendering raw HTML
                ->make(true);
        }
        return view('admin.listings.index'); // Load view for DataTables
    }

    public function view($id)
        {
            // Fetch the listing with the specified ID along with its related brand
            $listing = Listing::with('brand')->findOrFail($id);

            // Return the view with the listing data
            return view('admin.listings.view', compact('listing'));
        }

    public function create()
    {
        $brands = Brand::pluck('name', 'id')->toArray(); // Fetch available brands
        // dd($brands);
        return view('admin.listings.create', compact('brands')); // Pass brands to view
    }

    public function store(Request $request)
    {

        // Validate request input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric|min:0',
            'watts' => 'required|integer|min:0',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image upload if present
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName); // Save to storage/app/public/images
        }

        // Save new listing with validated data
        Listing::create(array_merge($validated, ['image' => $imageName]));

        return response()->json(['success' => 'Listing created successfully.']);
    }

    public function edit($id)
    {
        $listing = Listing::findOrFail($id); // Find listing by ID or fail
        $brands = Brand::pluck('name', 'id')->toArray(); // Get brands
        return view('admin.listings.edit', compact('listing', 'brands')); // Pass data to view
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id); // Get listing

        // Validate request input
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric|min:0',
            'watts' => 'required|integer|min:0',
            'description' => 'required|string|max:1000',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName); // Store new image
            $data['image'] = $imageName;
        }

        // Update listing
        $listing->update($data);

        return response()->json(['message' => 'Listing updated successfully.']);
    }

    public function destroy($id)
    {
        $listing = Listing::findOrFail($id); // Find listing or 404
        $listing->delete(); // Delete the listing
        return response()->json(['success' => 'Listing deleted successfully.']);
    }

    public function show($id)
{
    $listing = Listing::with('brand')->findOrFail($id); // Fetch product with brand details
    return view('frontend.product_detail', compact('listing')); // Pass product to the view
}
    public function showUserListings()
    {
        return view('frontend.listings'); // Load user listings view
    }

    public function getUserListings()
   {
    $listings = Listing::with('brand')->get(); // Eager load the brand relationship
    return response()->json(['data' => $listings]); // Return listings as JSON
   }
}


