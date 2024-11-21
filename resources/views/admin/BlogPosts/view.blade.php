{{-- @extends('admin.master')

@section('content')
    <h3 class="i-name">View Blog Posts</h3>

    <div class="card">
        <div class="card-header">
            <h4>{{ $post->title }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Brand:</strong> {{ $listing->brand->name }}</p>
            <p><strong>Price:</strong> ${{ $listing->price }}</p>
            <p><strong>Watts:</strong> {{ $listing->watts }}W</p>
            <p><strong>Description:</strong> {{ $listing->description }}</p>

            @if($listing->image)
                <img src="{{ asset('storage/images/' . $listing->image) }}"
                     alt="{{ $listing->title }}" width="200" height="150" />
            @else
                <img src="{{ asset('images/default.png') }}"
                     alt="Default Image" width="200" height="150" />
            @endif
        </div>
    </div>

    <a href="{{ route('listings.index') }}" class="btn btn-secondary mt-3">Back to Listings</a>
@endsection --}}

@extends('admin.master')

@section('content')
    <h3 class="i-name">View Blog Post</h3>

    <div class="card">
        <div class="card-header">
            <h4>{{ $post->title }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $post->description }}</p>

            <img src="{{ asset('storage/images/' . $post->image) }}"
                 alt="{{ $post->title }}" width="200" height="150" />
            {{-- @if($post->image)
            @else
                <img src="{{ asset('images/default.png') }}"
                     alt="Default Image" width="200" height="150" />
            @endif --}}
        </div>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
@endsection
