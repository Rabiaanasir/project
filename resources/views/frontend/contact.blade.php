@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.contact_css')
@endsection

@section('content')
<!-- Display Success Message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
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
    <section>
        <div class="container">
            <h2>Request More Information</h2>
            <p>Complete the below form and our team will contact you shortly</p>
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div>
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div>
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" required>
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
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary submit">Submit</button>
            </form>
            <!-- Success Message -->
<div id="successMessage" style="display:none; color: green;">
    Contact request submitted successfully!
</div>

                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            {{-- <a href="#Request-a-meeting"class="btn btn-secondary">REQUEST A MEETING</a> --}}
        </div>
    </section>
@endsection
