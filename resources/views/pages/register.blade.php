@extends('layout.master')

@section('content')

    @include('partials.preloader')
    @include('partials.search-box-layout')

    <!-- Start Register Area -->
    <section class="register-area">
        <div class="row m-0">

            <div class="col-lg-6 col-md-12 p-0">
                <div class="register-image">
                    <img src="assets/img/register-bg.jpg" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="register-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="register-form">

                                <h3 style="text-align: left;">Register</h3>
                                <p style="text-align:left;">
                                    Register for Free and Get a Call Back from Our Admissions Team Today.
                                    <br>
                                    Fill out the form below to get access to our courses and receive a call back from our admissions team:
                                </p>

                                @if(Session::has('status'))
                                    <br>
                                    <div class="alert alert-success">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif

                                @if($errors->any())
                                    <br>
                                    <div class="alert alert-danger">
                                        Something went wrong
                                    </div>
                                @endif

                                <form action="{{ route('course.register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}" placeholder="Your fullname"
                                            class="form-control">
                                        @error('fullname')
                                            <p class="text-danger" style="text-align: left;">Kindly provide a valid Full name</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your email address"
                                            class="form-control">
                                            @error('email')
                                                <p class="text-danger" style="text-align: left;">Kindly provide a valid email</p>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" placeholder="Your phone number"
                                            class="form-control">
                                            @error('phone_number')
                                                <p class="text-danger" style="text-align: left;">Kindly provide a valid Phone number</p>
                                            @enderror
                                    </div>

                                    <br>
                                    <p style="text-align: left">
                                        By clicking "Register for Free and Get a Call Back Today", you agree to our Terms of Service and Privacy Policy. You also agree to receive a call back from our admissions team today to discuss your education goals and answer any questions you may have.
                                    </p>
                                    <br>
                                    <br>
                                    <button type="submit">Register for Free and Get a Call Back Today</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Register Area -->
@endsection
