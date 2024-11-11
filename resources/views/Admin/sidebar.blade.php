<section id="menu">
    <div class="logo">
        <img src="{{ asset('images/logo.jpeg') }}" alt="">
        <h2>Sun Source Solutions</h2>
    </div>

    <div class="items">


        <a href="{{ route('admin.dashboard') }}"><li><i class="fa-solid fa-table-columns"></i>Dashboard</li></a>
        <a href="{{ route('brands.index') }}"><li><i class="fab fa-uikit"></i>Brands</li></a>
        <a href="{{ route('listings.index') }}"><li><i class="fas fa-th-large"></i>Listings</li></a>
        <a href="{{ route('projects.index') }}"><li><i class="fas fa-edit"></i>Projects</li></a>
        <a href="{{ route('contact.index') }}"><li><i class="fas fa-th-large"></i>Contact</li></a>
        <li><i class="fab fa-cc-visa"></i><a href="#">Cards</a></li>
        <li><i class="fas fa-hamburger"></i><a href="#">Model</a></li>
        <li><i class="fas fa-chart-line"></i><a href="#">Blank</a></li>
    </div>
</section>
