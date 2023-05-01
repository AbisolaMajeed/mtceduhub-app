    <!-- Start Courses Area -->
    <section class="courses-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-left">
                <span class="sub-title">Discover Courses</span>
                <h2>Our Popular Online Courses</h2>
                <a href="{{ url('courses') }}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                        class="label">All Courses</span><i class="bx bx-show-alt icon-arrow after"></i></a>
            </div>

            <div class="shorting-menu">
                <button class="filter" data-filter="all">All (06)</button>
                <button class="filter" data-filter=".AWS">AWS (02)</button>
                <button class="filter" data-filter=".PMI">PMI (01)</button>
                <button class="filter" data-filter=".IIBA">IIBA (02)</button>
                <button class="filter" data-filter=".CompTIA">CompTIA (01)</button>
                <button class="filter" data-filter=".ISTQB">ISTQB (00)</button>
                <button class="filter" data-filter=".people-cert">PEOPLE CERT (00)</button>
            </div>

            <div class="shorting">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mix AWS">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('courses/aws-cloud') }}" class="d-block"><img
                                        src="{{ asset('assets/img/courses/AWS-Cloud-Practitioner.jpg') }}" alt="image"
                                        class="courses-img-size" style=" "></a>

                                <div class="courses-tag">
                                    <a href="{{ url('courses/aws-cloud') }}" class="d-block">AWS</a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <h3><a href="{{ url('courses/aws-cloud') }}" class="d-inline-block">AWS Cloud Practitioner</a></h3>

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

                    <div class="col-lg-4 col-md-6 mix PMI">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('courses/pmi-capm') }}" class="d-block"><img src="{{ asset('assets/img/courses/PMI-CAPM.png') }}"
                                        alt="image" class="courses-img-size"></a>

                                <div class="courses-tag">
                                    <a href="{{ url('courses/pmi-capm') }}" class="d-block">PMI</a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <h3><a href="{{ url('courses/pmi-capm') }}" class="d-inline-block">PMI-CAPM</a></h3>

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

                    <div class="col-lg-4 col-md-6 mix CompTIA">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('courses/comptia-network') }}" class="d-block"><img
                                        src="{{ asset('assets/img/courses/CompTia-Network+.png') }}" alt="image"
                                        class="courses-img-size"></a>

                                <div class="courses-tag">
                                    <a href="{{ url('courses/comptia-network') }}" class="d-block">CompTIA</a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <h3><a href="{{ url('courses/comptia-network') }}" class="d-inline-block">CompTIA Network+</a></h3>

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

                    <div class="col-lg-4 col-md-6 mix AWS">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('courses/aws-develop') }}" class="d-block"><img
                                        src="{{ asset('assets/img/courses/AWS-Developer-Associate.png') }}" alt="image"
                                        class="courses-img-size"></a>

                                <div class="courses-tag">
                                    <a href="{{ url('courses/aws-develop') }}" class="d-block">AWS</a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <h3><a href="{{ url('courses/aws-develop') }}" class="d-inline-block">AWS Developer Associate</a>
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

                    <div class="col-lg-4 col-md-6 mix IIBA">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('courses/iiba-ecba') }}" class="d-block"><img
                                        src="{{ asset('assets/img/courses/ECBA-IIBA.jpg') }}" alt="image"
                                        class="courses-img-size"></a>

                                <div class="courses-tag">
                                    <a href="{{ url('courses/iiba-ecba') }}" class="d-block">IIBA</a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <h3><a href="{{ url('courses/iiba-ecba') }}" class="d-inline-block">IIBA - ECBA</a>
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

                    <div class="col-lg-4 col-md-6 mix IIBA">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('courses/iiba-cbap') }}" class="d-block"><img
                                        src="{{ asset('assets/img/courses/CBAP-IIBA.jpg') }}" alt="image"
                                        class="courses-img-size"></a>

                                <div class="courses-tag">
                                    <a href="{{ url('courses/iiba-cbap') }}" class="d-block">IIBA</a>
                                </div>
                            </div>

                            <div class="courses-content">
                                <h3><a href="{{ url('courses/iiba-cbap') }}" class="d-inline-block">IIBA - CBAP</a></h3>

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
        </div>
    </section>
    <!-- End Courses Area -->
