<section id="footer" class="svfc-footer">
    <footer class="svfc-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <h2 class="footer-title-main">St. Vincent de Ferrer College of Camarin, Inc.</h2>
                <div class="contact-info">
                    <span class="contact-label">School Address</span>
                    <p>SVFC Compound,<br>San Vicente Ferrer Road,<br>Area D, Brgy. 178,<br>Camarin, Caloocan City</p>
                    <span class="contact-label">The Developer Team</span>
                    <p>Pascua, Phillip Caesar B.</p>
                    <p>Estores, Randy E.</p>
                </div>
            </div>

            <div class="col-lg-2 mb-4">
                <h5 class="footer-heading">Programs</h5>
                <ul class="footer-link-group">
                    <li><i class="fas fa-chevron-right"></i><a href="#">Preparatory</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">Elementary</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">Junior High</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">Senior High</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">College</a></li>
                </ul>
            </div>

            <div class="col-lg-3 mb-4">
                <h5 class="footer-heading">Admissions</h5>
                <ul class="footer-link-group">
                    <li><i class="fas fa-chevron-right"></i><a href="#">Special Education Department</a></li>
                    <li><i class="fas fa-chevron-right"></i><a href="#">Homeschooling</a></li>
                </ul>
                <h5 class="footer-heading mt-4">Follow Us:</h5>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <h5 class="footer-heading">Our Newsletter</h5>
                <p style="font-size: 0.9rem; color: #e0e0e0;">Subscribe to our newsletter to get the latest news and updates.</p>
                <div class="newsletter-input-group">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address...">
                    <button type="submit" class="btn-subscribe">Subscribe</button>
                </div>
            </div>
        </div>

        <div class="copyright-bar">
            <p>© Copyright <span style="font-family: 'UnifrakturMaguntia', cursive; color: #fff;">St. Vincent de Ferrer College of Camarin, Inc.</span> All Rights Reserved</p>
        </div>
    </div>
</footer>

<style>
    .svfc-footer {
        background-color: #3d4a4a; /* Matches the dark slate in provided images */
        color: #ffffff;
        padding: 60px 0 20px 0;
        font-family: Arial, sans-serif;
    }
    .footer-title-main {
        font-family: 'UnifrakturMaguntia', cursive;
        font-size: 1.8rem;
        line-height: 1.2;
        margin-bottom: 20px;
        color: #ffffff;
    }
    .footer-heading {
        font-weight: bold;
        font-size: 1.1rem;
        margin-bottom: 20px;
        color: #ffffff;
    }
    .footer-link-group {
        list-style: none;
        padding: 0;
    }
    .footer-link-group li {
        margin-bottom: 12px;
        display: flex;
        align-items: center;
    }
    .footer-link-group li a {
        color: #ffffff;
        text-decoration: none;
        transition: 0.3s;
    }
    .footer-link-group li i {
        color: #ff00ff; /* Pink arrow icons */
        margin-right: 10px;
        font-size: 0.8rem;
    }
    .contact-info p {
        margin-bottom: 5px;
        font-size: 0.9rem;
        line-height: 1.5;
        color: #e0e0e0;
    }
    .contact-label {
        text-decoration: underline;
        font-weight: bold;
        display: block;
        margin-top: 15px;
        color: #ffffff;
    }

    /* --- Newsletter Unit Fix --- */
    .newsletter-input-group {
        display: flex;
        margin-top: 20px;
        border-radius: 4px;
        overflow: hidden;
        height: 45px; /* Fixed height for the unit */
    }

    .newsletter-input {
        flex: 1;
        padding: 0 15px;
        border: none;
        background-color: #ffffff !important;
        color: #333333;
        outline: none;
        height: 100%;
        font-size: 0.9rem;

        /* VERTICAL ALIGNMENT FIX */
        display: flex;
        align-items: center; /* Centers text vertically */
        text-align: left;    /* Keeps text on the left */
        line-height: 45px;   /* Backup for standard input rendering */
    }

    .newsletter-input::placeholder {
        color: #888888;
        text-align: left; /* Ensures placeholder stays left-aligned */
        opacity: 1;
    }

    .btn-subscribe {
        background-color: #ff00ff; /* Signature pink button */
        color: white;
        border: none;
        padding: 0 25px;
        font-weight: bold;
        cursor: pointer;
        height: 100%;
        white-space: nowrap;
        transition: background 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .btn-subscribe:hover {
        background-color: #d400d4;
    }

    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        margin-right: 10px;
        text-decoration: none;
    }
    .copyright-bar {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        margin-top: 40px;
        text-align: center;
        font-size: 0.85rem;
        color: #cccccc;
    }
</style>


</section>
