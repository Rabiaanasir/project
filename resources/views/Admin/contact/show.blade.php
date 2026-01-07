@extends('admin.master')

@section('content')
    <div class="container">
        <h2>Contact Details</h2>

        <div class="card">
            <div class="card-body">
            <p><strong>Name:</strong> {{ $contact->name ?? ($contact->first_name . ' ' . $contact->last_name) }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Contact Number:</strong> {{ $contact->contact_number }}</p>
            <p><strong>Address:</strong> {{ $contact->address }}</p>
            <p><strong>Product of Interest:</strong> {{ $contact->product ?? 'N/A' }}</p>
            <p><strong>Message:</strong> {{ $contact->message ?? 'No message provided' }}</p>
            <p><strong>Submitted At:</strong> {{ $contact->created_at->format('d M Y, h:i A') }}</p>
        </div>
        </div>

        <a href="{{ route('contact.index') }}" class="btn btn-primary mt-3">Back to Contacts</a>
    </div>
@endsection

