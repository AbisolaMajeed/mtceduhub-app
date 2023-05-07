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
                    <li><a href="{{ route('courses') }}">Courses</a></li>
                    <li>{{ $courses[0]->title }}</li>
                </ul>
                <h2>Courses</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Courses Details Area -->
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="courses-details-header">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="courses-title">
                            <h2>{{ $courses[0]->title }}</h2>
                        </div>

                        <div class="courses-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Category</span>
                                    <a href="#">{{ $courses[0]->category }}</a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>Students Enrolled</span>
                                    <a href="#">{{ number_format($courses[0]->student_enrolled) }}</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Last Updated</span>
                                    <a href="#">{{ date('Y-m-d') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="courses-price">
                            <div class="courses-review">
                                <div class="review-stars">
                                    @for ($i=0; $i < $courses[0]->rating; $i++)
                                        <i class='bx bxs-star'></i>
                                    @endfor
                                </div>
                                <span class="reviews-total d-inline-block">({{ $courses[0]->rating }} reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-details-image">
                        <img src="{{ $courses[0]->cover }}" alt="image">
                    </div>

                    <div class="courses-details-desc">
                        <h3>Description</h3>
                        <p><strong>{{ $courses[0]->course_description_title }} </strong></p>

                        <p>{{ $courses[0]->course_content }}</p>

                        <h3>Learning Objectives:</h3>

                        <div class="why-you-learn">
                            <ul>
                                @for($j=1; $j <20; $j++)
                                <?php $learning_objective = "learning_objectives_"; ?>

                                    @if(null != $courses[0]->learning_objectives_.$j)
                                    <?php $learning_objective = "learning_objectives_".$j; ?>

                                        @if(strlen($courses[0]->$learning_objective) > 4)
                                            <li>
                                                <span>
                                                    <i class='bx bx-check'></i>
                                                    {{ $courses[0]->$learning_objective }}
                                                </span>
                                            </li>
                                        @endif

                                    @endisset

                                @endfor
                            </ul>
                        </div>

                        <h3>Learning Outcomes:</h3>
                        <ul class="audience-list">
                            @for($k=1; $k < 20; $k++)
                            <?php $learning_outcome = "learning_outcomes_"; ?>

                                @if(null != $courses[0]->learning_outcomes_.$k)
                                <?php $learning_outcome = "learning_outcomes_".$k; ?>

                                    @if(strlen($courses[0]->$learning_outcome) > 4)
                                        <li>
                                            <span>
                                                <i class='bx bx-check'></i>
                                                {{ $courses[0]->$learning_outcome }}
                                            </span>
                                        </li>
                                    @endif

                                @endisset
                            @endfor
                        </ul>

                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="row align-items-center">
                            <div class="courses-title">
                                <h2>Related Courses</h2>
                                <br>
                            </div>
                            @foreach ($coursestags as $coursestag)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-courses-box mb-30">
                                    <div class="courses-image">
                                        <a href="{{ route('a-course', $coursestag->title) }}" class="d-block"><img
                                                src="{{ $coursestag->cover }}" alt="image"
                                                class="" style=" "></a>
        
                                        <div class="courses-tag">
                                            <a href="{{ route('a-course', $coursestag->title) }}" class="d-block">{{ $coursestag->category }}</a>
                                        </div>
                                    </div>
        
                                    <div class="courses-content">
                                        <h3><a href="{{ route('a-course', $coursestag->title) }}" class="d-inline-block">{{ $coursestag->title }}</a></h3>
        
                                        <div class="courses-rating">
                                            <div class="review-stars-rated">
                                                @for ($i=0; $i<$coursestag->rating;$i++)
                                                    <i class='bx bxs-star'></i>
                                                @endfor
                                            </div>
        
                                            <div class="rating-total">
                                                {{ $coursestag->rating }}.0
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach
                        </div>

                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="courses-sidebar-information">
                        <img src="{{ asset('assets/img/side-pics.png') }}" alt="" style="width:100%;">
                    </div>

                    <div class="courses-sidebar-syllabus">
                       <img src="{{ asset('assets/img/GET-THAT.png') }}" alt="" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Details Area -->
@endsection
