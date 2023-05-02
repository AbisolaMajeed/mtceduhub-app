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
                    <li>Contact</li>
                </ul>
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>

                        <h3>Email Here</h3>
                        <p>
                            <a href="mailto:info@mtceduhub.com">
                                <span>info@mtceduhub.com</span>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>

                        <h3>Location Here</h3>
                        <p><a href="https://goo.gl/maps/vnvq6cRbmj1ufDcC6" target="_blank">12, Eletu Odibo Street, Abule
                                Ijesha, Yaba, Lagos.</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>

                        <h3>Call Here</h3>
                        <p>+234 802 989 4444</p>
                        {{-- <p><a href="tel:2414524526">+241 452 4526</a></p> --}}
                    </div>
                </div>
            </div>
        </div>

        <div id="particles-js-circle-bubble-2"></div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Contact Us</span>
                <h2>Drop us Message for any Query</h2>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
            </div>

            <div class="contact-form">
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="successMsg"
                    style="display: none">
                    Thanks for your message. We will get back to you soon!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <form id="contactForm" action="contact" method="post" role="form">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error="Please enter your name" placeholder="Your Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required
                                    data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                    data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                    data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn btn-submit"><i
                                    class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send
                                    Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="particles-js-circle-bubble-3"></div>
        <div class="contact-bg-image"><img src="{{ asset('assets/img/map.png') }}" alt="image"></div>
    </section>
    <!-- End Contact Area -->

    <!-- Maps -->
    <div id="map">
        <iframe scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.007171819619!2d3.3783834758244087!3d6.520773923193335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8cff10dc5199%3A0x4b07dc9640eb0185!2s12%20Eletu%20Odibo%20St%2C%20Yaba%20101245%2C%20Lagos!5e0!3m2!1sen!2sng!4v1683062718666!5m2!1sen!2sng"
            aria-label="ABC Bus Stop, Ikeja, Lagos." frameborder="0"></iframe>
    </div>
    <!-- End Maps -->
@endsection
