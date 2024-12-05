@extends('admin.master')

@section('content')
    <div class="container">
        <h2>Contact Details</h2>

        <div class="card">
            <div class="card-body">
                <p><strong>First Name:</strong> {{ $contact->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $contact->last_name }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Contact Number:</strong> {{ $contact->contact_number }}</p>
                <p><strong>City:</strong> {{ $contact->city }}</p>
                <p><strong>Address:</strong> {{ $contact->address }}</p>
            </div>
        </div>

        <a href="{{ route('contact.index') }}" class="btn btn-primary mt-3">Back to Contacts</a>
    </div>
@endsection

