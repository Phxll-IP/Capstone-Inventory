<style>
    html {
        scroll-behavior: smooth;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                    url('{{ asset('frontend/assets/images/logo/BG 1.png') }}');
        background-size: cover;
        background-position: center;
        height: 120vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ffffff;
        position: relative;
    }

    .SVFC {
        font-family: 'Old English Text MT', serif;
        color: #ffffff !important;
        font-size: 4.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .Inventory {
        font-family: 'Old English Text MT', serif;
        color: #ffffff !important;
        font-size: 4.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 30px;
        letter-spacing: 1px;
    }

    .btn-get-started {
        background-color: rgba(0, 0, 0, 0.5);
        color: #ffffff;
        border: 2px solid #ff00ff;
        border-radius: 50px;
        padding: 12px 40px;
        font-weight: bold;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-get-started:hover {
        background-color: #ff00ff;
        color: #ffffff;
        text-decoration: none;
    }
</style>

<section class="hero-section">
    <div class="container">
        <div class="logo-container">
    <span class="SVFC">SVFC</span>
    <span class="Inventory">-Inventory</span>
</div>

        <p class="hero-subtitle">The Home of Quality and Innovative Education</p>

        <a href="#history" class="btn-get-started">Get Started</a>
    </div>
</section>
