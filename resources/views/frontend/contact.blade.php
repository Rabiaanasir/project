@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.contact_css')
@endsection

@section('content')

    <header>
        <div class="header-content">
         <h2 class="lg-heading text-light ">We are here to help</h2>
         <p class="text-light">Get in touch with us</p>
         <a href="#Req-more-info" class="btn btn-primary">Request More Information </a>
     </div>
    </header>
    <section>
    <div class="contact-box">

        <i class="fa-solid fa-circle-question fa-2x"></i>
        <div class="text">
        <p>To order now or for more Information,<br>Please contact us at</p>
        <div class="contact-info">
            <a href="tel:+1234567890">Call us at +1 (234) 567-890</a>
            <a href="mailto:sunsourcesolutions@gmail.com">Email us at sunsourcesolutions@gmail.com</a>
        </div>
        </div>
     </div>
    </section>
    <section id="form-section">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="container">
            <h2>Request More Information</h2>
            <p>Complete the below form and our team will contact you shortly</p>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <form action="{{ route('contact.store') }}#form-section" method="post">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
               
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" id="contact_number" name="contact_number" required>
                </div>
            
                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                {{-- ✅ Auto-fill Product Name if passed in URL --}}
   <div>
    <label for="product">Product of Interest:</label>
    <input type="text" id="product" name="product" 
           value="{{ request('product') }}">
</div>
<div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4"></textarea>
    </div>
                <button type="submit" class="btn btn-primary submit">Submit</button>
            </form>
<div id="successMessage" style="display:none; color: green;">
    Contact request submitted successfully!
</div>
        </div>
    </section>
@endsection
