<section id="menu">
    <div class="logo">
        <img src="{{ asset('images/logo.jpeg') }}" alt="">
        <h2>Sun Source Solutions</h2>
    </div>

    <div class="items">
        <li><i class="fa-solid fa-table-columns"></i><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><i class="fab fa-uikit"></i><a href="{{ route('brands.index') }}">Brands</a></li>
        <li><i class="fas fa-th-large"></i><a href="{{ route('listings.index') }}">Listings</a></li>
        <li><i class="fas fa-edit"></i><a href="#">Forms</a></li>
        
        <li><i class="fab fa-cc-visa"></i><a href="#">Cards</a></li>
        <li><i class="fas fa-hamburger"></i><a href="#">Model</a></li>
        <li><i class="fas fa-chart-line"></i><a href="#">Blank</a></li>
    </div>
</section>
