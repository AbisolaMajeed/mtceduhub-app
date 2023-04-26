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
                    <li><a href="{{ url('courses') }}">Courses</a></li>
                    <li>AWS Cloud Practitioner</li>
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
                            <h2>AWS Cloud Practitioner</h2>
                            {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p> --}}
                        </div>

                        <div class="courses-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Category</span>
                                    <a href="#">AWS</a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>Students Enrolled</span>
                                    <a href="#">541,214</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Last Updated</span>
                                    <a href="#">26/04/2023</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="courses-price">
                            <div class="courses-review">
                                <div class="review-stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="reviews-total d-inline-block">(3 reviews)</span>
                            </div>

                            {{-- <div class="price">$150</div>
                                <a href="#" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Buy Course</span><i class="bx bx-paper-plane icon-arrow after"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-details-image text-center">
                        <img src="{{ asset('assets/img/courses/3.jpg') }}" alt="image">
                    </div>

                    <div class="courses-details-desc">
                        <h3>Description</h3>
                        <p><strong>Hi! Welcome to AWS Cloud Practitioner, </strong></p>

                        <p>This course covers the foundational principles of the AWS Cloud, as well as best practices for
                            designing and deploying applications on the AWS platform, and prepares you for the AWS Cloud
                            Practitioner exam</p>

                        <h3>Learning Objectives:</h3>

                        <div class="why-you-learn">
                            <ul>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Understand the basic concepts and benefits of the AWS Cloud
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Learn how to design and deploy scalable, highly available, and fault-tolerant systems on the AWS platform
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Gain a comprehensive understanding of AWS services, including compute, storage, and networking
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Understand AWS security and compliance policies and best practices
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Prepare for the AWS Cloud Practitioner exam
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <h3>Learning Outcomes:</h3>
                        <ul class="audience-list">
                            <li> Pass the AWS Cloud Practitioner exam on your first attempt</li>
                            <li>Understand the foundational principles of the AWS Cloud and its benefits</li>
                            <li>Design and deploy scalable, highly available, and fault-tolerant systems on the AWS platform</li>
                            <li>Adhere to AWS security and compliance policies and best practices</li>
                        </ul>

                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="courses-sidebar-information">
                        <img src="{{ asset('assets/img/side-pics.png') }}" alt="" style="width:100%;">
                        {{-- <ul>
                            <li>
                                <span><i class='bx bx-group'></i> Lectures:</span>
                                40
                            </li>
                            <li>
                                <span><i class='bx bx-video-recording'></i> Video:</span>
                                200
                            </li>
                            <li>
                                <span><i class='bx bx-time'></i> Duration:</span>
                                200 Hours
                            </li>
                            <li>
                                <span><i class='bx bxs-graduation'></i> Subject:</span>
                                Photography
                            </li>
                            <li>
                                <span><i class='bx bx-atom'></i> Quizzes:</span>
                                Yes
                            </li>
                            <li>
                                <span><i class='bx bxs-badge-check'></i> Level:</span>
                                Introductory
                            </li>
                            <li>
                                <span><i class='bx bx-support'></i> Language:</span>
                                English
                            </li>
                            <li>
                                <span><i class='bx bx-text'></i> Video Subtitle:</span>
                                English
                            </li>
                            <li>
                                <span><i class='bx bx-certification'></i> Certificate:</span>
                                Yes
                            </li>
                        </ul> --}}
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
