@extends('frontend.app')
@section('css')
@include('css.common_css')
<style>
    .card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        font-family: 'Montserrat', sans-serif;
    }

    .card:hover {
        transform: scale(1.05); /* Slight zoom on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Elevated shadow */
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
        transition: color 0.3s ease;
    }

    .card:hover .card-title {
        color: #007bff; /* Change title color on hover */
    }

    .card-img-top {
        transition: opacity 0.3s ease;
    }

    .card:hover .card-img-top {
        opacity: 0.85; /* Slight fade effect on image hover */
    }

    .card-body {
        padding: 1rem;
    }

    .card-footer button {
        font-size: 1rem;
    }

</style>
@endsection

@section('content')
<div class="container">
    <h1 class="text-center my-5">Product Listings</h1>
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
    <a href="/product/${listing.id}" class="card-link" style="text-decoration: none; color: inherit;">
        <div class="card h-100">
            <img src="${listing.image ? '{{ asset('storage/images') }}/' + listing.image : '{{ asset('images/default.png') }}'}"
                 class="card-img-top"
                 alt="${listing.title}"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">${listing.title}</h5>
                <p class="card-text">${listing.description.substring(0, 80)}...</p>
                <p class="text-muted">Brand: ${listing.brand.name}</p>
                <p class="fw-bold">$${listing.price}</p>
            </div>
        </div>
    </a>
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
