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
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/black-logo.png" class="black-logo"
                                            alt="image"></a>
                                    <a href="index.html"><img src="assets/img/logo.png" class="white-logo"
                                            alt="image"></a>
                                </div>

                                <h3>Open up your Raque Account now</h3>
                                <p>Already signed up? <a href="login.html">Log in</a></p>

                                <form>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Your email address"
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" id="password"
                                            placeholder="Create a password" class="form-control">
                                    </div>

                                    <button type="submit">Sign Up</button>

                                    <div class="connect-with-social">
                                        <span>Or</span>
                                        <button type="submit" class="facebook"><i class='bx bxl-facebook'></i> Connect with
                                            Facebook</button>
                                        <button type="submit" class="twitter"><i class='bx bxl-twitter'></i> Connect with
                                            Twitter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register Area -->
    <!-- Start Partner Area -->
    @include('partials.partner-section')
    <!-- End Partner Area -->
@endsection
