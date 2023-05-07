    <!-- Start Courses Area -->
    <section class="courses-area pt-100 pb-70">
        <div class="container">
            @if ($courses->count() > 0)
            <div class="section-title text-left">
                <span class="sub-title">Discover Courses</span>
                <h2>Our Popular Online Courses</h2>
            </div>
            @endif

            {{-- <div class="shorting-menu">
                <button class="filter" data-filter="all">All (06)</button>
                <button class="filter" data-filter=".AWS">AWS (02)</button>
                <button class="filter" data-filter=".PMI">PMI (01)</button>
                <button class="filter" data-filter=".IIBA">IIBA (02)</button>
                <button class="filter" data-filter=".CompTIA">CompTIA (01)</button>
                <button class="filter" data-filter=".ISTQB">ISTQB (00)</button>
                <button class="filter" data-filter=".people-cert">PEOPLE CERT (00)</button>
            </div> --}}

            <div class="shorting">
                <div class="row">

                    @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 mix AWS">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ route('a-course', $course->title) }}" class="d-block"><img
                                        src="{{ $course->cover }}" alt="image"
                                        class="resize_img" style=" "></a>

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


            @if ($courses->count() > 0)
            <center><a href="{{ url('courses') }}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span
                class="label">All Courses</span><i class="bx bx-show-alt icon-arrow after"></i></a></center>
            @endif
            
        </div>
    </section>
    <!-- End Courses Area -->
