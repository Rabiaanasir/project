<section id="menu">
    <div class="logo">
        <img src="{{ asset('images/logo.jpeg') }}" alt="">
        <h2>Sun Source Solutions</h2>
    </div>

    <div class="items">


        <a href="{{ route('admin.dashboard') }}"><li><i class="fa-solid fa-table-columns"></i>Dashboard</li></a>
        <a href="{{ route('users.index') }}"><li><i class="fa-solid fa-table-columns"></i>Users</li></a>
        <a href="{{ route('brands.index') }}"><li><i class="fab fa-uikit"></i>Brands</li></a>
        <a href="{{ route('listings.index') }}"><li><i class="fas fa-th-large"></i>Listings</li></a>
        <a href="{{ route('projects.index') }}"><li><i class="fas fa-edit"></i>Projects</li></a>
        <a href="{{ route('bookings.index') }}"><li><i class="fas fa-th-large"></i>Booking</li></a>
        <a href="{{ route('admin.appliances') }}"><li><i class="fab fa-cc-visa"></i>Requests</li></a>
        <a href="{{ route('posts.index') }}"><li><i class="fab fa-cc-visa"></i>Posts</li></a>
        <a href="{{ route('packages.index') }}"><li><i class="fas fa-hamburger"></i>Packages</li></a>
        <li><i class="fas fa-chart-line"></i><a href="#">Blank</a></li>
    </div>
</section>
