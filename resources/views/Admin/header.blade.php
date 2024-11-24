<section id="interface">
    <div class="navigation">
        <div class="n1">
            <div>
                <i id="menu-btn" class="fas fa-bars"></i>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <div class="profile">
    <i class="far fa-bell"></i>
    <a href="{{ route('admin.profile') }}"><img src="{{ asset('images/client.png') }}" alt="My Profile"></a>

    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit" class="logout-button" style="background: #d7fada; border-radius:40px; color:#000; font-size:16px; cursor:pointer; padding:10px;margin:0px 10px 0px 10px;border:none;">
            <!-- <i class="fas fa-sign-out-alt"></i>  -->
            Logout
        </button>
    </form>
</div>
</div>
