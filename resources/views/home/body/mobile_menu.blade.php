<style>
  .mobile-logo img {
    height: 40px !important;
    width: auto !important;
    margin: 0 auto;
  }
</style>

<div class="lonyo-menu-wrapper">
  <div class="lonyo-menu-area text-center">
    <div class="lonyo-menu-mobile-top">
      <div class="mobile-logo">
        <a href="index.html">
          <img src="{{ asset('frontend/assets/images/logo/SVFC LOGO.png') }}" alt="logo">
        </a>
      </div>
      <button class="lonyo-menu-toggle mobile">
        <i class="ri-close-line"></i>
      </button>
    </div>

    <div class="lonyo-mobile-menu">
      <ul>
        <li>
          <a href="index.html">Home</a>
        </li>

        <li class="menu-item-has-children">
          <a href="#">About</a>
          <ul class="sub-menu">
            <li><a href="about-us.html">SVFC History</a></li>
            <li><a href="pricing.html">College Seal</a></li>
            <li class="menu-item-has-children">
              <a class="no-border" href="#">Philosophy, Mission, and Vision</a>
              <ul class="sub-menu">
                <li><a href="integration.html">Philosophy</a></li>
                <li><a href="single-integration.html">Mission</a></li>
                <li><a href="single-integration.html">Vision</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li>
          <a href="#footer">Team</a>
        </li>

        <li>
          <a href="contact-us.html">Contact</a>
        </li>
      </ul>
    </div>

    <div class="lonyo-mobile-menu-btn">
      <a class="lonyo-default-btn sm-size outline-btn" href="sign-in.html" data-text="Log in">
        <span class="btn-wraper">Log in</span>
      </a>
      <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Book a demo">
        <span class="btn-wraper">Book a demo</span>
      </a>
    </div>
  </div>
</div>
