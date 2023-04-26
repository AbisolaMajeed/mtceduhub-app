    <!-- Start Header Area -->
    <header class="header-area p-relative">

        <div class="top-header top-header-style-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-header-contact-info">
                            <li>
                                Call:
                                <a href="tel:502464674">+234 802 989 4444</a>
                            </li>
                        </ul>

                        <div class="top-header-social">
                            <span>Follow us:</span>
                            <a href="http://facebook.com/mtcedhub" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="http://twitter.com/mtccareerhub" target="_blank"><i class='bx bxl-twitter'></i></a>
                            <a href="https://www.linkedin.com/company/5356659/admin/" target="_blank"><i
                                    class='bx bxl-linkedin'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                            <a href="https://www.youtube.com/channel/UCSI4ZDkvinhBz7PZxa3PG0w" target="_blank"><i
                                    class='bx bxl-youtube'></i></a>
                            <a href="http://mtceduhub/" target="_blank"><i class='bx bxl-skype'></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <ul class="top-header-login-register">
                            <li><a href="#"><i class='bx bx-log-in-circle'></i> Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-style-three">
            <div class="raque-responsive-nav">
                <div class="container">
                    <div class="raque-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/MTC-EDU-log.png') }}" class="black-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="raque-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/MTC-EDU-log.png') }}" class="black-logo" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('/') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" class="nav-link">
                                        Register
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('courses') ? 'active' : '' }}" href="{{ route('courses') }}">
                                        Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}" class="nav-link">
                                        Testimonial
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}" class="nav-link">
                                        Gallery
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" class="nav-link">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                            <div class="others-option">
                                <div class="search-box d-inline-block">
                                    <i class='bx bx-search'></i>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>
    <!-- End Header Area -->
