@extends('admin.master')

@section('content')
    <h3 class="i-name">View Listing</h3>

    <div class="card">
        <div class="card-header">
            <h4>{{ $listing->title }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Brand:</strong> {{ $listing->brand->name }}</p>
            <p><strong>Price:</strong> ${{ $listing->price }}</p>
            <p><strong>Watts:</strong> {{ $listing->watts }}W</p>
            <p><strong>Description:</strong> {{ $listing->description }}</p>

            <img src="{{ asset('storage/images/' . $listing->image) }}"
                 alt="{{ $listing->title }}" width="200" height="150" />
        </div>
    </div>

    <a href="{{ route('listings.index') }}" class="btn btn-secondary mt-3">Back to Listings</a>
@endsection
