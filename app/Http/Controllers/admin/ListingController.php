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
            $data = Listing::with('brand')->get();
            return Datatables::of($data)
                ->addColumn('image', function ($row) {
                    return '<img src="' . asset('storage/images/' . $row->image) . '" width="70" height="50" />';
                })
                ->addColumn('action', function ($row) {
                    $viewBtn = '<a href="' . route('listings.view', $row->id) . '"
                    data-href="' . route('listings.view', $row->id) . '"
                    data-container_view=".view_modal"
                    class="btn btn-sm btn-success modal_view">View</a>';
                    $editBtn = '<a href="' . route('listings.edit', $row->id) . '"
                                    data-href="' . route('listings.edit', $row->id) . '"data-container_edit=".edit_modal" class="btn btn-sm btn-primary modal_edit">Edit</a>';

                    $deleteBtn = '<button data-id="' . $row->id . '"
                                    class="btn btn-sm btn-danger deleteListing">Delete</button>';

                    return $viewBtn . ' ' . $editBtn . ' ' . $deleteBtn;
                })
                ->addColumn('description', function ($row) {
                    $truncatedDescription = strlen($row->description) > 50
                        ? substr($row->description, 0, 35) . '...'
                        : $row->description;

                    return $truncatedDescription;
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }
        return view('admin.listings.index');
    }

    public function view($id)
        {
            $listing = Listing::with('brand')->findOrFail($id);

            return view('admin.listings.view', compact('listing'));
        }

    public function create()
    {
        $brands = Brand::pluck('name', 'id')->toArray();
        // dd($brands);
        return view('admin.listings.create', compact('brands'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric|min:0',
            'watts' => 'required|integer|min:0',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
        }

        Listing::create(array_merge($validated, ['image' => $imageName]));

        return response()->json(['success' => 'Listing created successfully.']);
    }

    public function edit($id)
    {
        $listing = Listing::findOrFail($id);
        $brands = Brand::pluck('name', 'id')->toArray();
        return view('admin.listings.edit', compact('listing', 'brands'));
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric|min:0',
            'watts' => 'required|integer|min:0',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $imageName);
            $data['image'] = $imageName;
        }

        $listing->update($data);

        return response()->json(['message' => 'Listing updated successfully.']);
    }

    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete();
        return response()->json(['success' => 'Listing deleted successfully.']);
    }

    public function show($id)
{
    $listing = Listing::with('brand')->findOrFail($id);
    return view('frontend.product_detail', compact('listing'));
}
//     public function showUserListings()
//     {
//         return view('frontend.listings');
//     }

//     public function getUserListings()
//    {
//     $listings = Listing::with('brand')->get();
//     return response()->json(['data' => $listings]);
//    }
 public function showUserListings()
    {
        $listings = Listing::all();
        return view('frontend.listings', compact('listings'));
    }
}


