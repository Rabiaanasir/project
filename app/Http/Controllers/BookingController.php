<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class BookingController extends Controller
{
    public function index()
{
    // Retrieve only the latest booking for the authenticated user
    $latestBooking = Booking::where('user_id', auth()->id())
                    ->latest('created_at') // Order by latest updated record
                    ->first(); // Retrieve only the latest record

    return view('frontend.bookingsOverview', compact('latestBooking'));
}


    // Method to show the booking form
    public function create()
    {
        return view('frontend.booking');
    }
     // Admin booking DataTable view and form (includes booking date, status)
     public function adminIndex()
     {
        return view('admin.Booking.index'); // Admin DataTable view
     }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'address' => 'required|string|max:255',
    //         'phone_number' => 'required|string|max:20',
    //         'backup_power' => 'required|boolean',
    //         'backup_hour' => 'nullable|integer|required_if:backup_power,true',
    //         'consumption_watts' => 'required|integer',
    //     ]);

    //     // Create the booking
    //     Booking::create([
    //         'user_id' => Auth::id(),
    //         'username' => $request->username,
    //         'address' => $request->address,
    //         'phone_number' => $request->phone_number,
    //         'backup_power' => $request->backup_power,
    //         'backup_hour' => $request->backup_power ? $request->backup_hour : null,
    //         'consumption_watts' => $request->consumption_watts,
    //     ]);

    //     return redirect()->back()->with('success', 'Booking request submitted successfully.');
    // }

    // Fetch data for DataTable (for admin only)
// public function getData(Request $request)
// {
//     if ($request->ajax()) {
//         // Fetch bookings with user relation, selecting only necessary columns
//         $bookings = Booking::with('user:id,email')->select('bookings.*');

//         return DataTables::of($bookings)
//             // Adding user email from related user model
//             ->addColumn('user_email', function ($booking) {
//                 return $booking->user ? $booking->user->email : 'N/A';
//             })
//             // Format status to capitalize the first letter
//             ->editColumn('status', function ($booking) {
//                 return ucfirst($booking->status);
//             })
//             // Format booking date as Y-m-d or display 'N/A' if null
// ->editColumn('booking_date', function ($booking) {
//     return $booking->booking_date ? $booking->booking_date->format('Y-m-d') : 'N/A';
// })
//             // Add actions column for each row with view, edit, delete buttons
//             ->addColumn('actions', function ($booking) {
//                 // return '<a href="' . route('admin.bookings.show', $booking->id) . '" class="btn btn-sm btn-primary">View</a> ' .
//                 //        '<a href="' . route('admin.bookings.edit', $booking->id) . '" class="btn btn-sm btn-warning">Edit</a> ' .
//                 //        '<button data-id="' . $booking->id . '" class="btn btn-sm btn-danger delete-booking">Delete</button>';
//             })
//             ->rawColumns(['actions']) // Allow HTML in actions column
//             ->make(true);
//     }

//     return response()->json(['message' => 'Invalid request'], 400); // Return error if not AJAX
// }

public function getData(Request $request)
{
    if ($request->ajax()) {
        $bookings = Booking::with('user:id,email')->select('bookings.*');

        return DataTables::of($bookings)
            ->addColumn('user_email', function ($booking) {
                return $booking->user ? $booking->user->email : 'N/A';
            })
            ->editColumn('status', function ($booking) {
                return ucfirst($booking->status);
            })
            ->editColumn('booking_date', function ($booking) {
                // Display the booking date with an editable field for admins
                return '<input type="date" class="form-control update-booking-date" value="' .
                        ($booking->booking_date ? $booking->booking_date->format('Y-m-d') : '') .
                        '" data-id="' . $booking->id . '">';
            })
            ->addColumn('actions', function ($booking) {
                // return '<a href="' . route('admin.bookings.show', $booking->id) . '" class="btn btn-sm btn-primary">View</a> ' .
                //        '<a href="' . route('admin.bookings.edit', $booking->id) . '" class="btn btn-sm btn-warning">Edit</a> ' .
                //        '<button data-id="' . $booking->id . '" class="btn btn-sm btn-danger delete-booking">Delete</button>';
            })
            ->rawColumns(['booking_date', 'actions'])
            ->make(true);
    }

    return response()->json(['message' => 'Invalid request'], 400);
}


     // Store method to handle booking submissions from both users and admin
    //  public function store(Request $request)
    //  {
    //      // Check if user is admin and set different validation rules and fields accordingly
    //      $rules = [
    //          'username' => 'required|string|max:255',
    //          'address' => 'required|string|max:255',
    //          'phone_number' => 'required|string|max:20',
    //          'backup_power' => 'required|boolean',
    //          'backup_hour' => 'nullable|integer|required_if:backup_power,true',
    //          'consumption_watts' => 'required|integer',
    //      ];

    //      if (Auth::user()->is_admin) {
    //          $rules['booking_date'] = 'required|date';
    //      }

    //      $request->validate($rules);

    //      // Populate fields based on user role
    //      $data = [
    //          'user_id' => Auth::id(),
    //          'username' => $request->username,
    //          'address' => $request->address,
    //          'phone_number' => $request->phone_number,
    //          'backup_power' => $request->backup_power,
    //          'backup_hour' => $request->backup_power ? $request->backup_hour : null,
    //          'consumption_watts' => $request->consumption_watts,
    //      ];

    //      if (Auth::user()->is_admin) {
    //          $data['booking_date'] = Carbon::parse($request->booking_date);
    //          $data['status'] = 'pending';
    //      }

    //      Booking::create($data);

    //      $redirectRoute = Auth::user()->is_admin ? 'admin.bookings.index' : 'user.booking.create';

    //      return redirect()->route($redirectRoute)->with('success', 'Booking created successfully.');
    //  }
//     public function store(Request $request)
// {
//     // Check if the user is an admin and set different validation rules and fields accordingly
//     $rules = [
//         'username' => 'required|string|max:255',
//         'address' => 'required|string|max:255',
//         'phone_number' => 'required|string|max:20',
//         'backup_power' => 'required|boolean',
//         'backup_hour' => 'nullable|integer|required_if:backup_power,true',
//         'consumption_watts' => 'required|integer',
//     ];

//     // Admin-specific validation: booking_date is required only for admins
//     if (Auth::user()->is_admin) {
//         $rules['booking_date'] = 'required|date';
//     }

//     // Validate the incoming request data
//     $request->validate($rules);

//     // Prepare the data for saving to the database
//     $data = [
//         'user_id' => Auth::id(),
//         'username' => $request->username,
//         'address' => $request->address,
//         'phone_number' => $request->phone_number,
//         'backup_power' => $request->backup_power,
//         'backup_hour' => $request->backup_power ? $request->backup_hour : null,
//         'consumption_watts' => $request->consumption_watts,
//         'booking_date' => Carbon::parse($request->booking_date),
//     ];

//     // If the user is an admin, include booking_date and status
//     if (Auth::user()->is_admin) {
//         $data['booking_date'] = Carbon::createFromFormat('Y-m-d', $request->booking_date);  // Ensure correct date format
//         $data['status'] = 'pending';  // Default status for admin
//     }

//     // Store the booking in the database
//     Booking::create($data);

//     // Redirect user or admin after the booking is saved
//     $redirectRoute = Auth::user()->is_admin ? 'admin.bookings.index' : 'bookings.create';
//     return redirect()->route($redirectRoute)->with('success', 'Booking created successfully.');
// }

// public function store(Request $request)
//     {
//         // Define validation rules for the request
//         $rules = [
//             'username' => 'required|string|max:255',
//             'address' => 'required|string|max:255',
//             'phone_number' => 'required|string|max:20',
//             'backup_power' => 'required|boolean',
//             'backup_hour' => 'nullable|integer|required_if:backup_power,true', // backup_hour is required only if backup_power is true
//             'consumption_watts' => 'required|integer',
//         ];

//         // Admin-specific validation: booking_date is required only for admins
//         if (Auth::user()->is_admin) {
//             $rules['booking_date'] = 'required|date';  // Booking date is required for admins
//         } else {
//             // Allow the booking_date to be null for users (non-admins)
//             $rules['booking_date'] = 'nullable|date';
//         }

//         // Validate the incoming request data
//         $request->validate($rules);

//         // Prepare the data for storing in the database
//         $data = [
//             'user_id' => Auth::id(),
//             'username' => $request->username,
//             'address' => $request->address,
//             'phone_number' => $request->phone_number,
//             'backup_power' => $request->backup_power,
//             'backup_hour' => $request->backup_power ? $request->backup_hour : null, // If backup_power is false, set backup_hour to null
//             'consumption_watts' => $request->consumption_watts,
//             'booking_date' => Auth::user()->is_admin ? Carbon::parse($request->booking_date) : null, // Set booking_date if admin, otherwise null
//             'status' => Auth::user()->is_admin ? 'pending' : 'submitted',  // Default status based on user type
//         ];

//         // Create the booking record in the database
//         Booking::create($data);

//         // Redirect the user to the appropriate page based on whether they are an admin or not
//         $redirectRoute = Auth::user()->is_admin ? 'admin.bookings.index' : 'bookings.create';
//         return redirect()->route($redirectRoute)->with('success', 'Booking created successfully.');
//     }


public function store(Request $request)
{
    // Define validation rules for the request
    $rules = [
        'username' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'backup_power' => 'nullable|boolean', // Make backup_power optional
        'backup_hour' => 'nullable|integer|required_if:backup_power,true', // Required only if backup_power is true
        'consumption_watts' => 'required|integer',
    ];

    // Additional validation for admins
    if (Auth::user()->is_admin) {
        $rules['booking_date'] = 'required|date';
    } else {
        $rules['booking_date'] = 'nullable|date';
    }

    // Validate the request data
    $request->validate($rules);

    // Prepare the data for storing in the database
    $data = [
        'user_id' => Auth::id(),
        'username' => $request->username,
        'address' => $request->address,
        'phone_number' => $request->phone_number,
        'backup_power' => $request->backup_power ?? false, // Default to false if not provided
        'backup_hour' => $request->backup_power ? $request->backup_hour : null, // Only set if backup_power is true
        'consumption_watts' => $request->consumption_watts,
        'booking_date' => Auth::user()->is_admin ? Carbon::parse($request->booking_date) : null,
        'status' => 'pending',  // Set to a valid enum value
    ];

    // Create the booking record in the database
    Booking::create($data);

    // Redirect based on user role
    $redirectRoute = Auth::user()->is_admin ? 'admin.bookings.index' : 'bookings.create';
    return redirect()->route($redirectRoute)->with('success', 'Booking created successfully.');
}

// Method to update the booking date
// public function updateBookingDate(Request $request, $id)
// {
//     // Validate the input
//     $request->validate([
//         'booking_date' => 'required|date',
//     ]);

//     // Find the booking by ID
//     $booking = Booking::findOrFail($id);

//     // Update the booking_date
//     $booking->update([
//         'booking_date' => Carbon::parse($request->booking_date)
//     ]);

//     // Optionally, update the status to 'pending' if necessary
//     $booking->status = 'pending';  // Example: set status as pending when booking date is updated
//     $booking->save();

//     return response()->json(['success' => true]);
// }

public function updateBookingDate(Request $request, $id)
{
    // Validate the booking_date input
    $request->validate([
        'booking_date' => 'required|date',
    ]);

    // Find the booking by ID and update the booking date
    $booking = Booking::findOrFail($id);
    $booking->booking_date = Carbon::parse($request->booking_date);
    $booking->save();

    return response()->json(['success' => true]);
}



// Method to update the status
// public function updateStatus(Request $request, $id)
// {
//     // Validate the incoming request
//     $request->validate([
//         'status' => 'required|in:pending,accepted,declined',
//     ]);

//     // Find the booking by ID
//     $booking = Booking::findOrFail($id);

//     // Update the status
//     $booking->status = $request->status;
//     $booking->save();

//     return response()->json(['success' => true]);
// }
public function updateStatus(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'status' => 'required|in:pending,accepted,declined',
    ]);

    // Find the booking by ID
    $booking = Booking::findOrFail($id);

    // Update the status
    $booking->status = $request->status;
    $booking->save();

    return response()->json(['success' => true]);
}


}
