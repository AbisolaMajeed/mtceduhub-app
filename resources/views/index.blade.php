@extends('layout.master')

@section('content')

    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Main Banner -->
    <div class="hero-banner bg-white">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="hero-banner-content black-color">
                                <span class="sub-title">There is confidence to stand alone</span>
                                <h1>Becoming leaders by actions and quality of intent</h1>
                                <p>We provide great experience for Students</p>
                                <div class="btn-box">
                                    <a href="{{ url('courses') }}" class="default-btn"><i
                                            class='bx bx-move-horizontal icon-arrow before'></i><span class="label">View
                                            Courses</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>
                                    <!-- <a href="contact.html" class="optional-btn">Get Started Free</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="hero-banner-image text-center">
                                <img src="assets/img/mtc-now-pics-1.jpg" alt="image" style="height: 100%;width: 100%;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner -->

    @include('partials.about-section')
    @include('partials.funfacts-section')
    @include('partials.courses-section')
    @include('partials.offer-section')
    @include('partials.partner-section')
    @include('partials.testimonials-section')
@endsection
