@extends('layout.master')

@section('content')

    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
                <h2>Gallery</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Gallery Area -->
    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item mb-30">
                        <img src="{{ asset('assets/img/mtc-now-pics-1.jpg' )}}" alt="Gallery Image" data-original="{{ asset('assets/img/mtc-now-pics-1.jpg' )}}">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item mb-30">
                        <img src="{{ asset('assets/img/about.jpg')}}" alt="Gallery Image" data-original="{{ asset('assets/img/about.jpg')}}">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item mb-30">
                        <img src="{{ asset('assets/img/Mtc-Group-pics.jpg')}}" alt="Gallery Image" data-original="{{ asset('assets/img/Mtc-Group-pics.jpg')}}">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item mb-30">
                        <img src="{{ asset('assets/img/Mtc-another-pics.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/Mtc-another-pics.jpg') }}">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item mb-30">
                        <img src="{{ asset('assets/img/Mtc-another-pics-1.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/Mtc-another-pics-1.jpg') }}">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item mb-30">
                        <img src="{{ asset('assets/img/about.jpg') }}" alt="Gallery Image" data-original="{{ asset('assets/img/about.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->

@endsection