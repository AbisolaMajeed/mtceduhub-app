    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget mb-30">
                        <h3>Contact Us</h3>

                        <ul class="contact-us-link">
                            <li>
                                <i class='bx bx-map'></i>
                                <a href="#" target="_blank">12, Eletu Odibo Street, Abule Ijesha, Yaba, Lagos</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="#">+234 802 989 4444</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:info@mtceduhub.com">
                                    <span>info@mtceduhub.com</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="social-link">
                            <li><a href="http://facebook.com/mtcedhub" class="d-block" target="_blank"><i
                                        class='bx bxl-facebook'></i></a></li>
                            <li><a href="http://twitter.com/mtccareerhub" class="d-block" target="_blank"><i
                                        class='bx bxl-twitter'></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCSI4ZDkvinhBz7PZxa3PG0w" class="d-block"
                                    target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="https://www.linkedin.com/company/5356659/admin/" class="d-block"
                                    target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="http://mtceduhub/" class="d-block" target="_blank"><i
                                        class='bx bxl-skype'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget mb-30">
                        <h3>Featured Links</h3>

                        <ul class="support-link">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('courses') }}">Courses</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('testimonials') }}">Testimonial</a></li>
                            <li><a href="{{ route('view-register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget mb-30">
                        <h3>Newsletter</h3>

                        <div class="newsletter-box">
                            <p>To get the latest news and latest updates from us.</p>

                            <form class="newsletter-form" data-bs-toggle="validator" action="newsletter-subscriber" method="post" role="form">
                                <label>Your e-mail address:</label>
                                <input type="email" class="input-newsletter" placeholder="Enter your email"
                                    name="email" id="email" required autocomplete="off">
                                <button type="submit" class="btn-submit">Subscribe</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="logo">
                    <a href="{{ url('/') }}" class="d-inline-block"><img src="{{ asset('assets/img/MTC-EDU-log.png') }}"
                            alt="image"></a>
                </div>
                <p><i class='bx bx-copyright'></i>
                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <a href="{{ url('/') }}" target="_blank">MTCEduHub</a> | All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <!-- Dark version -->
    <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Dark version -->

    <a href="https://api.whatsapp.com/send?phone=2348029894444&text=Hello%20MTCEDUHUB" target="_BLANK">
        <img src="{{ asset('assets/img/wchat.png') }}" style="position: fixed; bottom: 40px; z-index: 10000; width: 200px; left: 40px;">
    </a>