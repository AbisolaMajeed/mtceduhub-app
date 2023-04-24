@extends('layout.master')

@section('content')
    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                </ul>
                <h2>About MTCEduHub</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Experience Area -->
    <section class="experience-area ptb-100 bg-f5faf8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content left-content">
                        <span class="sub-title">About Us</span>
                        <h6>MTCEduHub has earned a reputation for providing training solutions to our clients with the
                            insights they need to dominate their niche in today’s hyper-competitive environment.</h6>
                        <p>
                            We formed a strategic alliance with VMEdu, a global training solutions provider, based in
                            Silicon
                            Valley, USA to provide world-class in-demand training solutions through online and classroom
                            platforms. We provide training solutions that modify the behaviour of participants at very
                            affordable rates. We work with our clients to help them attain their desired professional
                            certifications with ease. At MTCEduhub, we strive to be our Client’s lifelong career companions.
                        </p>
                        <p>
                            We are client-oriented professionals with over 10 years of experience in the field of training
                            and development. Our expertise in business best practice and passionate training delivery bring
                            tangible business results for our clients.
                        </p>

                        <div class="features-text">
                            <h5>
                                <i class='bx bx-planet'></i> When you partner with MTCEduHub, you will be working with a
                                company that is:
                            </h5>
                            <ul>
                                <li> Professional</li>
                                <li>Knowledgeable</li>
                                <li>Energetic</li>
                                <li>Fun</li>
                                <li>Well-Respected</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="experience-image">
                        <img src="{{ asset('assets/img/about.jpg') }}" alt="image">
                    </div>
                </div>
            </div>


        </div>


    </section>
    <!-- End Experience Area -->

    <!-- Start Partner Area -->
    @include('partials.partner-section')
    <!-- End Partner Area -->
@endsection
