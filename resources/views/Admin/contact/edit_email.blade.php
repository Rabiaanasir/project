@extends('Admin.master')

@section('content')
<div class="container my-5">
    <h2>Send Response to {{ $contact->name }}</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.send-email', $contact->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
    <a href="{{ route('contact.index') }}" class="btn btn-secondary mt-3">Back</a>

</div>
@endsection
