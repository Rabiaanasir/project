

@extends('frontend.app')
@section('css')
@include('css.common_css')
@endsection
@section('content')
<div class="container">
    <h2>Your Latest Booking</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($latestBooking)
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Backup Power</th>
                    <th>Consumption (Watts)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $latestBooking->booking_date ? $latestBooking->booking_date->format('Y-m-d') : 'Not set' }}</td>
                    <td>{{ ucfirst($latestBooking->status) }}</td>
                    <td>{{ $latestBooking->address }}</td>
                    <td>{{ $latestBooking->backup_power ? 'Yes' : 'No' }}</td>
                    <td>{{ $latestBooking->consumption_watts }}</td>
                    <td>
                        <!-- Actions like view or cancel -->
                        {{-- <a href="{{ route('bookings.view', $latestBooking->id) }}" class="btn btn-primary btn-sm">View</a> --}}
                        <a href="#" class="btn btn-danger btn-sm">Cancel</a> {{-- Example button --}}
                    </td>
                </tr>
            </tbody>
        </table>
    @else
        <p>You have no bookings at the moment.</p>
    @endif
</div>
@endsection
