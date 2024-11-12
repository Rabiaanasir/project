@extends('admin.master')

@section('content')
<h3 class="i-name">Feedback Details</h3>
<div class="board">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="username"><strong>User Name</strong></label>
                <p id="username">{{ $feedback->username }}</p>
            </div>

            <div class="form-group">
                <label for="email"><strong>Email</strong></label>
                <p id="email">{{ $feedback->user ? $feedback->user->email : 'N/A' }}</p>
            </div>

            <div class="form-group">
                <label for="message"><strong>Message</strong></label>
                <p id="message">{{ $feedback->message }}</p>
            </div>

            <div class="form-group">
                <a href="{{ route('feedback.index') }}" class="btn btn-secondary">Back to Feedback List</a>
            </div>
        </div>
    </div>
</div>
@endsection
