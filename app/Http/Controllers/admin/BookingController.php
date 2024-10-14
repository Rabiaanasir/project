<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Display a listing of the bookings
    public function index()
    {
        $bookings = Booking::with('user')->paginate(10); // Pagination and eager loading
        return view('admin.bookings.index', compact('bookings'));
    }

    // Show the form for creating a new booking
    public function create()
    {
        return view('admin.bookings.create');
    }

    // Store a newly created booking in the database
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'booking_code' => 'required|unique:bookings',
            'booking_date' => 'required|date',
        ]);

        Booking::create($request->all());

        return redirect()->route('admin.bookings.index')->with('success', 'Booking created successfully');
    }

    // Show the form for editing the specified booking
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings.edit', compact('booking'));
    }

    // Update the specified booking in the database
    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'booking_code' => 'required|unique:bookings,booking_code,'.$id,
            'booking_date' => 'required|date',
        ]);

        $booking->update($request->all());

        return redirect()->route('admin.bookings.index')->with('success', 'Booking updated successfully');
    }

    // Remove the specified booking from the database
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully');
    }
}
