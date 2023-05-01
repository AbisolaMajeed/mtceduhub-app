@extends('layout.master')

@section('content')
    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-two item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Courses</li>
                </ul>
                <h2>Courses Available</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Courses Area -->
    <section class="courses-area ptb-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ url('courses/aws-cloud') }}" class="d-block"><img
                                    src="{{ asset('assets/img/courses/AWS-Cloud-Practitioner.jpg') }}" alt="image" class="courses-img-size"></a>

                            <div class="courses-tag">
                                <a href="{{ url('courses/aws-cloud') }}" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ url('courses/aws-cloud') }}" class="d-inline-block">AWS Cloud Practitioner</a>
                            </h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="rating-total">
                                    5.0 (1 rating)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ url('courses/aws-solutions') }}" class="d-block"><img src="{{ asset('assets/img/courses/AWS Solutions-Architect-Associate.png') }}"
                                    alt="image"  class="courses-img-size"></a>

                            <div class="courses-tag">
                                <a href="{{ url('courses/aws-solutions') }}" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ url('courses/aws-solutions') }}" class="d-inline-block">AWS Solutions Architect Associate</a>
                            </h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="rating-total">
                                    5.0 (1 rating)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ url('courses/aws-sysops') }}" class="d-block"><img src="{{ asset('assets/img/courses/AWS-SysOps-Administrator-Associate.png') }}"
                                    alt="image"  class="courses-img-size"></a>

                            <div class="courses-tag">
                                <a href="{{ url('courses/aws-sysops') }}" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ url('courses/aws-sysops') }}" class="d-inline-block">AWS SysOps Administrator Associate</a>
                            </h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>

                                <div class="rating-total">
                                    4.5 (2 rating)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ url('courses/aws-develop') }}" class="d-block"><img src="{{ asset('assets/img/courses/AWS-Developer-Associate.png') }}"
                                    alt="image"  class="courses-img-size"></a>

                            <div class="courses-tag">
                                <a href="{{ url('courses/aws-develop') }}" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ url('courses/aws-develop') }}" class="d-inline-block">AWS Developer Associate</a></h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>

                                <div class="rating-total">
                                    4.0 (1 rating)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ url('courses/aws-solution') }}" class="d-block"><img src="{{ asset('assets/img/courses/AWS-Solution-Architect-Professional.png') }}"
                                    alt="image"  class="courses-img-size"></a>

                            <div class="courses-tag">
                                <a href="{{ url('courses/aws-solution') }}" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ url('courses/aws-solution') }}" class="d-inline-block">AWS Solution Architect
                                    Professional</a></h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="rating-total">
                                    5.0 (1 rating)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ url('courses/aws-devops') }}" class="d-block"><img src="{{ asset('assets/img/courses/AWS-DevOps-Engineer-Professional.png') }}"
                                    alt="image"  class="courses-img-size"></a>

                            <div class="courses-tag">
                                <a href="{{ url('courses/aws-devops') }}" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ url('courses/aws-devops') }}" class="d-inline-block">AWS DevOps Engineer Professional</a>
                            </h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="rating-total">
                                    5.0 (1 rating)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->

    @include('partials.testimonials-section')


    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <!-- Dark version -->
    <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Dark version -->
@endsection
