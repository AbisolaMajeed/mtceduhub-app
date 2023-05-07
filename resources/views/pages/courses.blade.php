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

                @foreach ($courses as $course)
                <div class="col-lg-4 col-md-6 mix AWS">
                    <div class="single-courses-box mb-30">
                        <div class="courses-image">
                            <a href="{{ route('a-course', $course->title) }}" class="d-block"><img
                                    src="{{ $course->cover }}" alt="image"
                                    class="" style=" "></a>

                            <div class="courses-tag">
                                <a href="{{ route('a-course', $course->title) }}" class="d-block">{{ $course->category }}</a>
                            </div>
                        </div>

                        <div class="courses-content">
                            <h3><a href="{{ route('a-course', $course->title) }}" class="d-inline-block">{{ $course->title }}</a></h3>

                            <div class="courses-rating">
                                <div class="review-stars-rated">
                                    @for ($i=0; $i<$course->rating;$i++)
                                        <i class='bx bxs-star'></i>
                                    @endfor
                                </div>

                                <div class="rating-total">
                                    {{ $course->rating }}.0
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
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
