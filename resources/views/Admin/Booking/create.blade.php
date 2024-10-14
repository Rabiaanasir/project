@extends('admin.master')

@section('content')
    <h1>{{ isset($booking) ? 'Edit Booking' : 'Create Booking' }}</h1>

    <form action="{{ isset($booking) ? route('bookings.update', $booking->id) : route('bookings.store') }}" method="POST">
        @csrf
        @if(isset($booking))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="user_id">User</label>
            <input type="number" class="form-control" id="user_id" name="user_id" value="{{ old('user_id', $booking->user_id ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="booking_code">Booking Code</label>
            <input type="text" class="form-control" id="booking_code" name="booking_code" value="{{ old('booking_code', $booking->booking_code ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="booking_date">Booking Date</label>
            <input type="datetime-local" class="form-control" id="booking_date" name="booking_date" value="{{ old('booking_date', $booking->booking_date ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($booking) ? 'Update' : 'Create' }}</button>
    </form>
@endsection
