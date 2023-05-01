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
                    <li>AWS DevOps Engineer Professional</li>
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
                            <h2>AWS DevOps Engineer Professional</h2>
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
                        <img src="{{ asset('assets/img/courses/AWS-DevOps-Engineer-Professional.png') }}" alt="image">
                    </div>

                    <div class="courses-details-desc">
                        <h3>Description</h3>
                        <p><strong>Hi! Welcome to AWS DevOps Engineer Professional, </strong></p>

                        <p>This course covers the principles and practices of DevOps on the AWS platform, including
                            continuous integration, delivery, and deployment, and prepares you for the AWS DevOps Engineer
                            Professional exam.</p>

                        <h3>Learning Objectives:</h3>

                        <div class="why-you-learn">
                            <ul>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Understand the principles and practices of DevOps on the AWS platform
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Learn how to design and implement continuous integration, delivery, and deployment pipelines using AWS services
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Develop a comprehensive understanding of AWS services for monitoring, logging, and automation
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Learn how to troubleshoot common issues and optimize performance in AWS DevOps environments
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <i class='bx bx-check'></i>
                                        Prepare for the AWS DevOps Engineer Professional exam
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <h3>Learning Outcomes:</h3>
                        <ul class="audience-list">
                            <li>Pass the AWS DevOps Engineer Professional exam on your first attempt</li>
                            <li>Demonstrate expertise in designing and implementing DevOps pipelines on the AWS platform</li>
                            <li>Use AWS services for monitoring, logging, and automation to optimize performance and reduce costs</li>
                            <li>Troubleshoot common issues and resolve them in AWS DevOps environments</li>
                            <li>Apply DevOps principles and practices to meet business needs using AWS services and best practices.</li>
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
