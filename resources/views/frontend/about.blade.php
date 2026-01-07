@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.about_css')
@endsection
 @section('content')
        <header>
    <div class="header-content">
        <h1>Green Innovation for Clean Energy</h1>
    </div>
    </header>
    <section>
        <div class="About">
            <br>
            <div class="icon">
                <div style="display: flex; align-items: flex-start;">
                    <i style="margin-right: 10px; margin-left:40px;" class="fa-regular fa-sun fa-2x"></i>
                    <div>
                        <h1 style="color: #000000;">Our Mission</h1>
                        <p>To make clean energy universally available by building a distributed and intelligent solar and energy storage grid, managed via the internet, across the world. Advancing this business by satisfying our customers and generating measurable value for them. Progressing with the large-scale utilization of green energy with our entrepreneurial push, engaging our own expertise and joining hands, as well as providing information to local stakeholders for the implementation of PV initiatives in selected emerging markets.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="About">
            <div class="icon2">
                <div style="display: flex; align-items: flex-start;">
                    <i style="margin-right: 10px; margin-left:40px;" class="fa-solid fa-bolt-lightning fa-2x"></i>
                    <div>
                        <h1 style="color:#000000">Our Vision</h1>
                        <p>To make clean, reliable, and affordable energy available to the developing world through energy innovation. Over the last few decades, sustainable energy has evolved out of the incubation process and has emerged as an economically competitive, environmentally superior, efficient, clean, and stable energy source. We understand that solar energy is evolving as a key source of energy supply technologies and can make a major contribution to the potential energy mix around the world.</p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container1">
            <div class="box">
                <h3>Why Choose Sun Source Solutions</h3>
                <p>Choosing Sun Source Solutions as your solar panel solutions provider should offer several benefits. Here are some potential reasons: They might have a proven track record in the solar industry with a team of experts who can ensure efficient and effective installation of solar panels. A solar panel calculator is a critical feature for potential customers to estimate their solar energy needs and savings. Sun Source Solutions, being a specialized provider, may offer accurate algorithms and data for the calculator, ensuring that users get reliable estimates. <span id="dots">...</span> <span id="invisible-text"> Partnering with Sun Source Solutions aligns with the environmentally friendly ethos of solar energy. By promoting sustainable energy solutions on your website, you contribute to raising awareness about environmental issues and encourage the adoption of renewable energy technologies. They likely offer end-to-end services, from initial consultation and design to installing, monitoring, and maintenance, ensuring a seamless experience for customers.</span></p>
                <button id="btn" onclick="MoreLess()">Read More</button>
            </div>
        </div>
    </section>


<section id="form-section">
    <div class="container my-5">
        <h1 class="text-center mb-4">Feedback</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('feedback.store') }}#form-section" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text" id="username" name="username" class="form-control" 
                       value="{{ Auth::check() ? auth()->user()->username : '' }}" 
                       {{ Auth::check() ? 'readonly' : '' }} required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" 
                       value="{{ Auth::check() ? auth()->user()->email : '' }}" 
                       {{ Auth::check() ? 'readonly' : '' }} required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" placeholder="Your Feedback" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
        </form>

        @if (!Auth::check())
            <div class="alert alert-warning text-center mt-3" role="alert">
        Please <a href="{{ route('login') }}" class="alert-link">log in</a> to submit your feedback.
    </div>
        @endif
    </div>
</section>

@endsection
@section('js')
@include('js.js')
@endsection
