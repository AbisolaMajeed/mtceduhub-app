@extends('layout.master')

@section('content')
    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Blog</li>
                </ul>
                <h2>Blog</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">

                    @if ($blogs->count() > 0)
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog-post mb-30">
                                    <div class="post-image">
                                        <a href="{{ route('single-blog', $blog->title) }}" class="d-block">
                                            <img src="{{$blog->cover ?? asset('assets/img/blog.png')}}" alt="image">
                                        </a>

                                        <div class="tag">
                                            <a href="#">{{$blog->category}}</a>
                                        </div>
                                    </div>

                                    <div class="post-content">
                                        <ul class="post-meta">
                                            <li class="post-author">
                                                <img src="{{ asset('assets/img/MTC-EDU-log.png') }}" class="d-inline-block rounded-circle mr-2" alt="image">
                                                By: <a href="#" class="d-inline-block">Author</a>
                                            </li>
                                            <li><a href="#">{{$blog->created_at}}</a></li>
                                        </ul>
                                        <h3><a href="{{ route('single-blog', $blog->title) }}" class="d-inline-block">{{$blog->title}}</a></h3>
                                        <a href="{{ route('single-blog', $blog->title) }}" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                    </div>
                                </div>
                            </div> 
                        @endforeach
                    @else
                        No blog update yet
                    @endif

                    {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="pagination-area text-center">
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

           <!-- Start Partner Area -->
    @include('partials.partner-section')
    <!-- End Partner Area -->
@endsection
