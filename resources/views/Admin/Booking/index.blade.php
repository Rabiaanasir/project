@extends('layouts.admin')

@section('content')
    <h1>Bookings</h1>

    <a href="{{ route('bookings.create') }}" class="btn btn-primary">Add New Booking</a>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Booking Code</th>
                <th>User</th>
                <th>Status</th>
                <th>Booking Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->booking_code }}</td>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $bookings->links() }}
@endsection
