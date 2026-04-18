<div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/SVFC LOGO.png') }}" alt="SVFC Logo" height="50">
                                </span>
                            </a>
                        </div>

<ul id="side-menu">

    <li class="menu-title">Menu</li>

    <li>
        <a href="{{ route('dashboard') }}" class="tp-link">
            <i data-feather="home"></i>
            <span> Dashboard </span>
        </a>
    </li>

    <li class="menu-title">Pages</li>

    <li>
        <a href="#sidebarAuth" data-bs-toggle="collapse">
            <i data-feather="users"></i>
            <span> Brand Manage </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarAuth">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.brand') }}" class="tp-link">All Brands</a>
                </li>

        </div>
    </li>

    <li>
        <a href="#StockRooms" data-bs-toggle="collapse">
            <i data-feather="users"></i>
            <span> StockRooms Manage </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="StockRooms">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.stockrooms') }}" class="tp-link">All StockRooms</a>
                </li>

        </div>
    </li>

    <li>
        <a href="#Origin" data-bs-toggle="collapse">
            <i data-feather="users"></i>
            <span> Manage Origin </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Origin">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.origin') }}" class="tp-link">Origin</a>
                </li>

        </div>
    </li>

    <li>
        <a href="#Borrower" data-bs-toggle="collapse">
            <i data-feather="users"></i>
            <span> Manage Borrower </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Borrower">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('all.borrower') }}" class="tp-link">Borrower</a>
                </li>

        </div>
    </li>

</ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>
