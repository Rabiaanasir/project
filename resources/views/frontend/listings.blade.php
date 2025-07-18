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
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
        transition: color 0.3s ease;
    }

    .card:hover .card-title {
        color: #007bff;
    }

    .card-img-top {
        transition: opacity 0.3s ease;
    }

    .card:hover .card-img-top {
        opacity: 0.85;
    }

    .card-body {
        padding: 1rem;
    }

    .card-footer button {
        font-size: 1rem;
    }
.box{
       box-sizing: border-box;
       background-color: navy;
       margin:5rem 7rem;
       color: #fff;
       padding: 1rem 3rem;
   }
   hr {
       border: 1px solid rgb(8, 255, 255);
       width: 50%;
       margin: 10px 2px;
   }
   h3{
       font-weight: 700;
       font-size: 25px;
       margin-top: 20px;
   }
   .box p{
       margin-top: 1rem;
       color: #fff;
   }
   button {
        padding: 15px 20px;
        background-color:darkcyan;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
      }
   button:hover {
       background-color:#fff;
       color: #000;
     }
</style>
@endsection

@section('content')

<div class="container">
    <h1 class="text-center my-5">Product Listings</h1>
    {{-- <div id="productGrid" class="row"> --}}
        <div id="productGrid" class="row">
    @forelse ($listings as $listing)
        <div class="col-md-4 mb-4">
            <a href="{{ url('product/' . $listing->id) }}" class="card-link" style="text-decoration: none; color: inherit;">
                <div class="card h-100">
                    <img src="{{ asset('storage/images/' . $listing->image) }}"
                         class="card-img-top"
                         alt="{{ $listing->title }}"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $listing->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($listing->description, 80) }}</p>
                        <p class="text-muted">Brand: {{ $listing->brand->name }}</p>
                        <p class="fw-bold">Rs {{ number_format($listing->price) }}</p>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <p class="text-center">No products found.</p>
    @endforelse
</div>

    </div>
</div>
<div class="box">
    <hr>
    <h3>Speak To An Expert</h3>
<p>Not sure what’s best for you? Get a free consultation from our experts.</p>
<p>Contact: 1234-567890<br>
    Email: sales@sunsourcesolutions.com.pk</p>
    <a href="{{ route('contact') }}">
        <button>REQUEST A CALL</button>
    </a>
</div>
{{-- <script>
$(document).ready(function() {
    fetchListings();

    function fetchListings() {
        $.ajax({
            url: "{{ route('frontend.listings.data') }}",
            method: "GET",
            success: function(response) {
                console.log('Response:', response);
                renderProducts(response.data);
            },
            error: function(xhr, status, error) {
                console.error('Error:', xhr.responseText);
                $('#productGrid').html('<p class="text-center">Failed to load products.</p>');
            }
        });
    }

    function renderProducts(listings) {
        $('#productGrid').empty();
        if (listings.length > 0) {
            $.each(listings, function(index, listing) {
                $('#productGrid').append(`
                    <div class="col-md-4 mb-4">
    <a href="/product/${listing.id}" class="card-link" style="text-decoration: none; color: inherit;">
        <div class="card h-100">
            <img src="${listing.image ? '{{ asset('storage/images') }}/' + listing.image : ''}"
                 class="card-img-top"
                 alt="${listing.title}"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">${listing.title}</h5>
                <p class="card-text">${listing.description.substring(0, 80)}...</p>
                <p class="text-muted">Brand: ${listing.brand.name}</p>
                <p class="fw-bold">Rs ${listing.price}</p>
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
</script> --}}
@endsection
