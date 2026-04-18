<style>
    .header-logo1 img {
        height: 50px !important;
        width: auto !important;
    }
</style>

<header class="site-header lonyo-header-section light-bg" id="sticky-menu">
    <div class="container">
      <div class="row gx-3 align-items-center justify-content-between">
        <div class="col-8 col-sm-auto ">
          <div class="header-logo1 ">
            <a href="index.html">
              <img src="{{ asset('frontend/assets/images/logo/SVFC LOGO.png') }}" alt="logo">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="lonyo-main-menu-item">
            <nav class="main-menu menu-style1 d-none d-lg-block menu-left">
              <ul>
                <li class="">
                  <a href="#">Home</a>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">About</a>
                  <ul class="sub-menu">
                    <li><a href="#history">SVFC History</a></li>
                    <li><a href="#">College Seal</a></li>
                    <li class="menu-item-has-children">
                      <a class="no-border" href="#">Philosophy, Mission, and Vision</a>
                      <ul class="sub-menu">
                        <li><a href="#philosophy">Philosophy</a></li>
                        <li><a href="#mission">Mission</a></li>
                        <li><a href="#vision">Vision</a></li>

                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="">
                  <a href="#footer">Team</a>
                </li>
                <li>
                  <a href="#footer">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
@auth
<div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
    <div class="lonyo-header-info-content">
              <ul>
                <li><a href="{{ route('dashboard') }}">SVFC-Inventory</a></li>
              </ul>
            </div>
@else
<div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
    <div class="lonyo-header-info-content">
              <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
              </ul>
            </div>
@endauth

@auth
<a class="lonyo-default-btn lonyo-header-btn" href="#">Book Now</a>
          </div>
          <div class="lonyo-header-menu">
            <nav class="navbar site-navbar justify-content-between">
              <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                <span></span>
              </button>
            </nav>
        </div>
@else
<a class="lonyo-default-btn lonyo-header-btn" href="{{ route("register") }}">Sign Up</a>
          </div>
          <div class="lonyo-header-menu">
            <nav class="navbar site-navbar justify-content-between">
              <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                <span></span>
              </button>
            </nav>
        </div>

@endauth


        </div>
      </div>
    </div>
</header>
