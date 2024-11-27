<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Mail\BookingStatusMail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
//     public function index()
// {
//     // Retrieve only the latest booking for the authenticated user
//     $latestBooking = Booking::where('user_id', auth()->id())
//                     ->latest('created_at') // Order by latest updated record
//                     ->first(); // Retrieve only the latest record

//     return view('frontend.bookingsOverview', compact('latestBooking'));
// }


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


public function getData(Request $request)
{
    if ($request->ajax()) {
        $bookings = Booking::with('user:id,email')->select('bookings.*');

        return DataTables::of($bookings)
            ->addColumn('user_email', function ($booking) {
                return $booking->user ? $booking->user->email : 'N/A';
            })
            ->editColumn('status', function ($booking) {
                $selectedStatus = ucfirst($booking->status); // Capitalize the first letter
                return '
                    <select class="form-control status-dropdown" data-id="' . $booking->id . '">
                        <option value="pending" ' . ($booking->status === 'pending' ? 'selected' : '') . '>Pending</option>
                        <option value="accepted" ' . ($booking->status === 'accepted' ? 'selected' : '') . '>Accepted</option>
                        <option value="declined" ' . ($booking->status === 'declined' ? 'selected' : '') . '>Declined</option>
                    </select>';
            })
            ->editColumn('booking_date', function ($booking) {
                // Display the booking date with an editable field for admins
                return '<input type="date" class="form-control update-booking-date" value="' .
                        ($booking->booking_date ? $booking->booking_date->format('Y-m-d') : '') .
                        '" data-id="' . $booking->id . '">';
            })

            ->rawColumns(['status','booking_date'])
            ->make(true);
    }

    return response()->json(['message' => 'Invalid request'], 400);
}

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

public function destroy($id)
{
    $booking = Booking::findOrFail($id);

    $booking->delete();  //Delete the project

    return response()->json(['success' => 'Booking deleted successfully.']);
}

public function sendEmail($id)
{
    $booking = Booking::with('user')->findOrFail($id);

    // Send email
    Mail::to($booking->user->email)->send(new BookingStatusMail($booking));

    return response()->json(['success' => 'Email sent successfully.']);
}

}
