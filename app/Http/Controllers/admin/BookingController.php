<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables; // For DataTables functionality
use App\Models\Booking;
use App\Models\User;

class BookingController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Booking::all();
            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $editBtn = '<a href="' . route('bookings.edit', $row->id) . '"
                                data-href="' . route('bookings.edit', $row->id) . '"
                                data-container_edit=".edit_modal"
                                class="btn btn-primary btn-sm modal_edit">Edit</a>';

                    $deleteBtn = '<a href="' . route('bookings.destroy', $row->id) . '"
                                data-href="' . route('bookings.destroy', $row->id) . '"
                                class="btn btn-danger btn-sm deleteBooking">
                                Delete
                              </a>';

                    return $editBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('admin.booking.index');
    }

    public function create()
    {
        // dd(123);
        //     $bookings = Booking::pluck('user','email',)->toArray();
        // // Store a newly created booking

        // $booking = Booking::pluck('user','email' , 'booking_date' , 'status' , 'booking_code' )->toArray();
        // //  dd($brands);
        return view('admin.booking.create');
    }


    // public function store(Request $request)
    // {
    //     dd($request->all());
    //     try {
    //         // Validation logic
    //         $validated = $request->validate([
    //             'user' => 'required|string|max:255',
    //             'email' => 'required|email|max:255',
    //             'booking_date' => 'required|date',
    //             'status' => 'required|in:pending,confirmed,completed,canceled',
    //             'booking_code' => 'required|string|unique:bookings,booking_code',
    //         ]);

    //         // Storing booking data
    //         Booking::create($validated);

    //         return redirect()->back()->with('success', 'Booking saved successfully!');
    //     } catch (\Exception $e) {
    //         // Log the error for further investigation
    //         \Log::error('Error occurred while storing booking: ' . $e->getMessage());

    //         return redirect()->back()->with('error', 'Error occurred while storing booking. Please try again.');
    //     }

    // $request->validate([
    //     'user' => 'required|string|max:255',
    //     'email' => 'required|email|max:255',
    //     'booking_date' => 'required|date',
//         'status' => 'required|in:pending,confirmed,completed,canceled',
//         'booking_code' => 'required|string|unique:bookings,booking_code',
//     ]);
// }

public function store(Request $request)
{
    // dd($request->all());
    dd($request->ajax());
   if($request->ajax())
    $request->validate([
        'user' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'booking_date' => 'required|date',
        'status' => 'required|in:pending,confirmed,completed,canceled',
        'booking_code' => 'required|string|unique:bookings,booking_code',
    ]);

    Booking::create([
        'user' => $request->user,
        'email' => $request->email,
        'booking_date' => $request->booking_date,
        'status' => $request->status,
        'booking_code' => $request->booking_code,
    ]);

    return response()->json(['success' => 'Booking created successfully.']);
}

public function edit($id)
{
    // Fetch the booking to edit
    $booking = Booking::findOrFail($id);

    // Fetch additional data if needed, such as available users or statuses
    // Assuming you have users and need to fetch them, you can do something like:
    $users = User::pluck('name', 'id');

    // If statuses are dynamic, you can pull them from a table, otherwise you can hardcode them
    $statuses = ['pending', 'confirmed', 'completed', 'canceled'];

    // Pass data to the view
    return view('admin.bookings.edit', compact('booking', 'users', 'statuses'));
}


public function update(Request $request, $id)
{
    // Fetch the booking by its ID
    $booking = Booking::findOrFail($id);

    // Validate the request data
    $data = $request->validate([
        'user' => 'required',
        'email' => 'required|email',
        'booking_date' => 'required|date',
        'status' => 'required|in:pending,confirmed,completed,canceled',
        'booking_code' => 'required|string',
    ]);


    // Update the booking with validated data
    $booking->update($data);

    // Return a success response
    return response()->json(['message' => 'Booking updated successfully.']);
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

//         return response()->json(['error' => 'Failed to delete booking.'], 500);
//     }
// }
public function destroy($id)
{
    // Find the booking or return 404 if not found
    $booking = Booking::findOrFail($id);

    // Delete the booking
    $booking->delete();

    // Return success response
    return response()->json(['success' => 'Booking deleted successfully.']);
}
}
