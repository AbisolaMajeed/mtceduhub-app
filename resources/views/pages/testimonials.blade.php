@extends('layout.master')

@section('content')
    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Feedback</li>
                </ul>
                <h2>Feedback</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Testimonials Area -->
    <section class="testimonials-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Testimonials</span>
                <h2>What Students Say</h2>
            </div>

            <div class="testimonials-slides owl-carousel owl-theme">
                <div class="single-testimonials-item">
                    <p>I am happy to say in the first quarter of 2018, I became both PMP and SMC certified! Though I
                        attended the PMP course earlier, I was not comfortable applying for the PMP exam until I
                        came to MTCEduHub's session. Their delivery is on point and their post-training support is
                        fantastic.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/Ayo.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>Ayokunle Enikanoselu, PMP, SMC</h3>
                        <span>Key Account Executive at Nigerian Breweries</span>
                    </div>
                </div>

                <div class="single-testimonials-item">
                    <p>Thank you Ayo for your great session. Your delivery is the only reason I was able to master
                        the material so fast and build confidence to attempt the exam soonest. Your ability to apply
                        real-world experiences to the concepts helped me translate the information into scenarios I
                        can easily relate to. I felt well prepared for the exam.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/morenike.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>Morenike Fatile, PMP</h3>
                        <span>Loan Verification Consultant at Stanbic Bank</span>
                    </div>
                </div>

                <div class="single-testimonials-item">
                    <p>I did both Scrum Master and Project Management Professional certifications with MTCEduHub. I
                        got fantastic support from the team throughout the processes that led to both
                        certifications. Iencourage everyone interested in any of the certifications they offer to leverage
                        on their
                        platform.</p>

                    <div class="info">
                        <img src="{{ asset('assets/img/folarin.jpg') }}" class="shadow rounded-circle" alt="image">
                        <h3>Folarin G. Moritiwon PMP, SMC</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/zuPAjJBjrF0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/tk9hs0wFJQw" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/84Y2bVX3NXI" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/cPosyfWiRnA" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/dd-z8619jNk" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/5IMvU_mKU34" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                    <iframe src="https://www.youtube.com/embed/JgfrdYXt_9U" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->
    <!-- Start Partner Area -->
    @include('partials.partner-section')
    <!-- End Partner Area -->
@endsection
