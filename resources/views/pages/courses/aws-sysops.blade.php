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
                    <li>AWS SysOps Administrator Associate</li>
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
                            <h2>AWS SysOps Administrator Associate</h2>
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-details-image text-center">
                        <img src="{{ asset('assets/img/courses/AWS-SysOps-Administrator-Associate.png') }}" alt="image">
                    </div>

                    <div class="courses-details-desc">
                        <h3>Description</h3>
                        <p><strong>Hi! Welcome to AWS SysOps Administrator Associate, </strong></p>

                        <p>This course covers AWS operations principles, as well as best practices for managing and
                            deploying systems on the AWS platform, and prepares you for the AWS SysOps Administrator
                            Associate exam.</p>

                        <h3>Learning Objectives:</h3>

                        <div class="why-you-learn">
                            <ul>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Understand AWS operations principles and best practices
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Learn how to manage and deploy systems on the AWS platform
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Develop a comprehensive understanding of AWS services, including compute, storage, and networking
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Learn how to automate common tasks and use AWS tools for monitoring and troubleshooting
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Prepare for the AWS SysOps Administrator Associate exam
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <h3>Learning Outcomes:</h3>
                        <ul class="audience-list">
                            <li> Pass the AWS SysOps Administrator Associate exam on your first attempt</li>
                            <li>Demonstrate expertise in managing and deploying systems on the AWS platform</li>
                            <li>Use AWS services and tools effectively for monitoring, troubleshooting, and automation</li>
                            <li>Apply AWS operations principles and best practices to meet business needs</li>
                            <li>Use AWS skills and knowledge to optimize performance and reduce costs</li>
                        </ul>

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
