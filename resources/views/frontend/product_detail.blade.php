@extends('frontend.app')

@section('css')
@include('css.common_css')
<style>
    .container{
        font-family: 'Montserrat', sans-serif;
    }
    .product-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .product-details {
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .product-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 1.5rem;
        color: #28a745;
        margin-bottom: 15px;
    }

    .product-description {
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    .btn-back {
        background-color: #007bff;
        color: white;
    }

    .btn-back:hover {
        background-color: #0056b3;
    }
</style>
@endsection

@section('content')
<div class="container mt-5">
    <a href="{{ url()->previous() }}" class="btn btn-back mb-3 text-white text-decoration-none">Back to Listings</a>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ $listing->image ? asset('storage/images/' . $listing->image) : asset('images/default.png') }}"
                 class="product-image"
                 alt="{{ $listing->title }}">
        </div>
        <div class="col-md-6">
            <div class="product-details">
                <h1 class="product-title">{{ $listing->title }}</h1>
                <p class="product-price">Rs {{ $listing->price }}</p>
                <p class="text-muted">Brand: {{ $listing->brand->name }}</p>
                <p class="product-description">{{ $listing->description }}</p>
                <p><strong>Power:</strong> {{ $listing->watts }} watts</p>
            
                <a href="{{ route('contact', ['product' => $listing->title]) }}" class="btn btn-secondary mt-3">Inquire Now</a>

            </div>
        </div>
    </div>
</div>
@endsection
