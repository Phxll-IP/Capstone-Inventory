<style>
    .pmv-header {
        background: linear-gradient(to right, #e91e63, #fb8c00),
                    url('{{ asset('frontend/assets/images/logo/BG 1.png') }}');
        background-blend-mode: overlay;
        background-size: cover;
        padding: 80px 0;
        text-align: center;
        color: white;
    }
    .pmv-header h5 {
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
        margin-bottom: 10px;
    }
    .pmv-header h1 {
        font-weight: 700;
        font-size: 2.5rem;
    }
    .pmv-content-section {
        padding: 80px 0;
        background-color: #fdfdfd;
    }
    .pmv-title {
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 20px;
        color: #333;
    }
    .pmv-text {
        color: #777;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 30px;
    }
    .pmv-accordion-item {
        background: #f8f9fa;
        border: none;
        border-radius: 8px !important;
        margin-bottom: 15px;
        overflow: hidden;
    }
    .pmv-accordion-button {
        background: #f8f9fa !important;
        color: #333 !important;
        font-weight: 600;
        padding: 20px;
        box-shadow: none !important;
        display: flex;
        align-items: center;
    }
    .pmv-accordion-button i {
        margin-right: 15px;
        color: #e91e63; /* Pink icons as seen in the image */
    }
    .school-building-img {
        width: 100%;
        border-radius: 4px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
</style>

<div class="pmv-header">
    <div class="container">
        <h5>About</h5>
        <h1>Philosophy, Mission, and Vision</h1>
    </div>
</div>

<section id="pmv" class="pmv-content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr-lg-5">
                <h2 class="pmv-title">Our <strong>Philosophy, Mission,</strong> and <strong>Vision</strong></h2>
                <p class="pmv-text">
                    At the core of <strong>St. Vincent de Ferrer College of Camarin, Inc.</strong>, our Philosophy shapes our beliefs,
                    our Mission directs our daily endeavors, and our Vision propels us towards a future guided by innovation,
                    integrity, and positive societal impact.
                </p>

                <div class="accordion" id="pmvAccordion">
                    <div class="pmv-accordion-item">
                        <button class="btn btn-block text-left pmv-accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne">
                            <i class="fas fa-book-open"></i> Philosophy
                            <span class="ml-auto"><i class="fas fa-chevron-down fa-xs"></i></span>
                        </button>
                        <div id="collapseOne" class="collapse show" data-parent="#pmvAccordion">
                            <div class="card-body bg-white text-muted">
                                SVFC believes in the holistic development of the human person through quality and innovative education.
                            </div>
                        </div>
                    </div>

                    <div class="pmv-accordion-item">
                        <button class="btn btn-block text-left pmv-accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                            <i class="fas fa-lightbulb"></i> Vision
                            <span class="ml-auto"><i class="fas fa-chevron-down fa-xs"></i></span>
                        </button>
                        <div id="collapseTwo" class="collapse" data-parent="#pmvAccordion">
                            <div class="card-body bg-white text-muted">
                                To be a leading institution of learning that produces globally competitive and values-oriented individuals.
                            </div>
                        </div>
                    </div>

                    <div class="pmv-accordion-item">
                        <button class="btn btn-block text-left pmv-accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                            <i class="fas fa-graduation-cap"></i> Mission
                            <span class="ml-auto"><i class="fas fa-chevron-down fa-xs"></i></span>
                        </button>
                        <div id="collapseThree" class="collapse" data-parent="#pmvAccordion">
                            <div class="card-body bg-white text-muted">
                                To provide accessible, quality, and relevant education through innovative teaching and community involvement.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="lonyo-content-thumb" data-aos="fade-left">
                    <img src="{{ asset('frontend/assets/images/logo/svfc-building.png') }}" alt="SVFC Building" class="school-building-img">
                </div>
            </div>
        </div>
    </div>
</section>
