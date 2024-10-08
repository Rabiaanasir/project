<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings using DataTables
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Listing::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<button class="btn btn-info btn-sm view-btn" data-id="'.$row->id.'">View</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.listings.index');
    }

    // Show the specified listing
    public function show($id)
    {
        $listing = Listing::find($id);
        return response()->json($listing);
    }
}
