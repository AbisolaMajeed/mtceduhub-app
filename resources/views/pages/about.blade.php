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
                        <h2><span class="sub-title">About Us</span></h2>
                        <p>MTCEduHub is a leading provider of training solutions for individuals and organizations seeking
                            to stay ahead in today's hyper-competitive environment. We have built a strong reputation for
                            providing insights and training that help our clients dominate their niche, while our strategic
                            alliance with VMEdu, a global training solutions provider based in Silicon Valley, USA, ensures
                            that we offer world-class training solutions through online and classroom platforms.
                        </p>
                        <p>
                            At MTCEduHub, we are passionate about helping our clients attain their desired professional
                            certifications with ease. We work closely with our clients to understand their unique needs and
                            tailor our training solutions to fit those needs. Our client-oriented professionals have over 10
                            years of experience in the field of training and development, and their expertise in business
                            best practices, combined with their passion for training delivery, bring tangible business
                            results for our clients.
                        </p>
                        <p>
                            We offer a wide range of training solutions that modify the behaviour of participants at very
                            affordable rates. Our courses cover a variety of topics, including project management, IT
                            service management, cybersecurity, and more. We believe that education should be accessible to
                            everyone, and that's why we offer flexible course schedules and competitive pricing to ensure
                            that our services are within reach of all aspiring professionals.
                        </p>
                        <p>
                            At MTCEduHub, we strive to be our clients' lifelong career companions. We understand that our
                            clients' success is our success, and we are committed to providing the insights, training, and
                            support that they need to achieve their goals. Thank you for choosing MTCEduHub, and we look
                            forward to working with you to achieve your professional aspirations.
                        </p>
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
