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
            <div class="courses-topbar">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="topbar-result-count">
                            <p>Showing 1 – 6 of 54</p>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                        <div class="topbar-ordering-and-search">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-5 offset-lg-4 offset-md-1 col-sm-6">
                                    <div class="topbar-ordering">
                                        <select>
                                            <option>Sort by popularity</option>
                                            <option>Sort by latest</option>
                                            <option>Default sorting</option>
                                            <option>Sort by rating</option>
                                            <option>Sort by new</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="topbar-search">
                                        <form>
                                            <label><i class="bx bx-search"></i></label>
                                            <input type="text" class="input-search" placeholder="Search here...">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="single-courses.html" class="d-block"><img src="assets/img/courses/1.jpg"
                                    alt="image"></a>

                            <div class="courses-tag">
                                <a href="#" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            {{-- <div class="course-author d-flex align-items-center">
                                <img src="assets/img/user1.jpg" class="rounded-circle mr-2" alt="image">
                                <span>Steven Smith</span>
                            </div> --}}

                            <h3><a href="single-courses.html" class="d-inline-block">AWS Cloud Practitioner</a></h3>

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

                        {{-- <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bx-user'></i> 10 students
                                </li>

                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> 6 lessons
                                </li>

                                <li class="courses-price">
                                    Free
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="single-courses.html" class="d-block"><img src="assets/img/courses/6.jpg"
                                    alt="image"></a>

                            <div class="courses-tag">
                                <a href="#" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            {{-- <div class="course-author d-flex align-items-center">
                                <img src="assets/img/user6.jpg" class="rounded-circle mr-2" alt="image">
                                <span>David Warner</span>
                            </div> --}}

                            <h3><a href="single-courses.html" class="d-inline-block">AWS Solutions Architect Associate</a>
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

                        {{-- <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bx-user'></i> 10 students
                                </li>

                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> 6 lessons
                                </li>

                                <li class="courses-price">
                                    $500
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="single-courses.html" class="d-block"><img src="assets/img/courses/2.jpg"
                                    alt="image"></a>

                            <div class="courses-tag">
                                <a href="#" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            {{-- <div class="course-author d-flex align-items-center">
                                <img src="assets/img/user2.jpg" class="rounded-circle mr-2" alt="image">
                                <span>Sarah Taylor</span>
                            </div> --}}

                            <h3><a href="single-courses.html" class="d-inline-block">AWS SysOps Administrator Associate</a>
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

                        {{-- <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bx-user'></i> 15 students
                                </li>

                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> 10 lessons
                                </li>

                                <li class="courses-price">
                                    $250
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="single-courses.html" class="d-block"><img src="assets/img/courses/3.jpg"
                                    alt="image"></a>

                            <div class="courses-tag">
                                <a href="#" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            {{-- <div class="course-author d-flex align-items-center">
                                <img src="assets/img/user3.jpg" class="rounded-circle mr-2" alt="image">
                                <span>James Anderson</span>
                            </div> --}}

                            <h3><a href="single-courses.html" class="d-inline-block">AWS Developer Associate</a></h3>

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

                        {{-- <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bx-user'></i> 5 students
                                </li>

                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> 5 lessons
                                </li>

                                <li class="courses-price">
                                    $150
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="single-courses.html" class="d-block"><img src="assets/img/courses/4.jpg"
                                    alt="image"></a>

                            <div class="courses-tag">
                                <a href="#" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            {{-- <div class="course-author d-flex align-items-center">
                                <img src="assets/img/user4.jpg" class="rounded-circle mr-2" alt="image">
                                <span>Liam King</span>
                            </div> --}}

                            <h3><a href="single-courses.html" class="d-inline-block">AWS Solution Architect
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

                        {{-- <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bx-user'></i> 10 students
                                </li>

                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> 6 lessons
                                </li>

                                <li class="courses-price">
                                    <span>$200</span>
                                    $195
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="single-courses.html" class="d-block"><img src="assets/img/courses/5.jpg"
                                    alt="image"></a>

                            <div class="courses-tag">
                                <a href="#" class="d-block">AWS</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            {{-- <div class="course-author d-flex align-items-center">
                                <img src="assets/img/user5.jpg" class="rounded-circle mr-2" alt="image">
                                <span>Lina D'Souza</span>
                            </div> --}}

                            <h3><a href="single-courses.html" class="d-inline-block">AWS DevOps Engineer Professional</a>
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

                        {{-- <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bx-user'></i> 10 students
                                </li>

                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> 6 lessons
                                </li>

                                <li class="courses-price">
                                    $178
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="page-numbers">5</a>
                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
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