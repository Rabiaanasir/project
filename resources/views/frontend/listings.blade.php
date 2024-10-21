@extends('frontend.app')
@section('css')
@include('css.common_css')
<style>
    .card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.card-footer button {
    font-size: 1rem;
}

    </style>
  {{-- @include('css.nm_css') --}}
@endsection

@section('content')
<div class="container">
    <h1 class="text-center">Product Listings</h1>
    <div id="productGrid" class="row">
        <!-- Products will be dynamically inserted here -->
    </div>
</div>

<script>
$(document).ready(function() {
    fetchListings();

    function fetchListings() {
        $.ajax({
            url: "{{ route('frontend.listings.data') }}",
            method: "GET",
            success: function(response) {
                console.log('Response:', response); // For debugging
                renderProducts(response.data); // Pass the listings to the render function
            },
            error: function(xhr, status, error) {
                console.error('Error:', xhr.responseText);
                $('#productGrid').html('<p class="text-center">Failed to load products.</p>');
            }
        });
    }

    function renderProducts(listings) {
        $('#productGrid').empty(); // Clear existing products
        if (listings.length > 0) {
            $.each(listings, function(index, listing) {
                $('#productGrid').append(`
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="${listing.image ? '{{ asset('storage/images') }}/' + listing.image : '{{ asset('images/default.png') }}'}" class="card-img-top" alt="${listing.title}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">${listing.title}</h5>
                                <p class="card-text">${listing.description.substring(0, 80)}...</p>
                                <p class="text-muted">Brand: ${listing.brand.name}</p> <!-- Display brand name -->
                                <p class="fw-bold">$${listing.price}</p>
                            </div>
                        </div>
                    </div>
                `);
            });
        } else {
            $('#productGrid').html('<p class="text-center">No products found.</p>');
        }
    }
});
</script>
@endsection
