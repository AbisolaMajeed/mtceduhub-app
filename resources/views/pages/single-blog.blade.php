@extends('layout.master')

@section('content')
    @include('partials.preloader')
    @include('partials.search-box-layout')

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                    </ul>
                    <h2>{{ $blog->title }}</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <img src="{{ asset('assets/img/blog.png') }}" alt="image" style="width: auto;">
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class='bx bx-folder-open'></i>
                                            <span>Category</span>
                                            <a href="#">{{ $blog->category }}</a>
                                        </li>
                                        <li>
                                            <i class='bx bx-calendar'></i>
                                            <span>Last Updated</span>
                                            <a href="#">{{ $blog->updated_at }}</a>
                                        </li>
                                    </ul>
                                </div>

                                <h3>{{ $blog->title }}</h3>

                                @if(null != $blog->content_1)
                                <p>{{ $blog->content_1 }}</p>
                                @endif

                                @if(null != $blog->content_2)
                                <p>{{ $blog->content_2 }}</p>
                                @endif

                                @if($blog->quote)
                                    <blockquote class="wp-block-quote">
                                        <p>{{ $blog->quote }}.</p>

                                        <cite>{{ $blog->cite }}</cite>
                                    </blockquote>
                                @endif

                                @if(null != $blog->content_3)
                                <p>{{ $blog->content_3 }}</p>
                                @endif

                                @if(null != $blog->content_4)
                                <p>{{ $blog->content_4 }}</p>
                                @endif

                                {{-- <ul class="wp-block-gallery columns-3">
                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <img src="assets/img/blog/8.jpg" alt="image">
                                        </figure>
                                    </li>

                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <img src="assets/img/blog/7.jpg" alt="image">
                                        </figure>
                                    </li>

                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <img src="assets/img/blog/9.jpg" alt="image">
                                        </figure>
                                    </li>
                                </ul> --}}

                                {{-- <h3>Four major elements that we offer:</h3>

                                <ul class="features-list">
                                    <li><i class='bx bx-check-double'></i> Scientific Skills For getting a better result</li>
                                    <li><i class='bx bx-check-double'></i> Communication Skills to getting in touch</li>
                                    <li><i class='bx bx-check-double'></i> A Career Overview opportunity Available</li>
                                    <li><i class='bx bx-check-double'></i> A good Work Environment For work</li>
                                </ul>

                                <h3>Setting the mood with incense</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                                <h3>The Rise Of Smarketing And Why You Need It</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> --}}
                            </div>
{{-- 
                            <div class="article-footer">
                                <div class="article-tags">
                                    <span><i class='bx bx-purchase-tag'></i></span>

                                    <a href="#">Fashion</a>,
                                    <a href="#">Games</a>,
                                    <a href="#">Travel</a>
                                </div>

                                <div class="article-share">
                                    <ul class="social">
                                        <li><span>Share:</span></li>
                                        <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                        <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                        <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="article-author">
                                <div class="author-profile-header"></div>
                                <div class="author-profile">
                                    <div class="author-profile-title">
                                        <img src="assets/img/user1.jpg" class="shadow-sm rounded-circle" alt="image">

                                        <div class="author-profile-title-details d-flex justify-content-between">
                                            <div class="author-profile-details">
                                                <h4>Chris Orwig</h4>
                                                <span class="d-block">Photographer, Author, Teacher</span>
                                            </div>

                                            <div class="author-profile-raque-profile">
                                                <a href="single-instructor.html" class="d-inline-block">View Profile on Raque</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Chris Orwig is a celebrated photographer, author, and teacher who brings passion to everything he does.</p>
                                </div>
                            </div>

                            <div class="raque-post-navigation">
                                <div class="prev-link-wrapper">
                                    <div class="info-prev-link-wrapper">
                                        <a href="{{ route('single-blog', $popular_post->title) }}">
                                            <span class="image-prev">
                                                <img src="assets/img/blog/2.jpg" alt="image">
                                                <span class="post-nav-title">Prev</span>
                                            </span>
        
                                            <span class="prev-link-info-wrapper">
                                                <span class="prev-title">Don't buy a tech gift until you read these rules</span>
                                                <span class="meta-wrapper">
                                                    <span class="date-post">January 21, 2022</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
        
                                <div class="next-link-wrapper">
                                    <div class="info-next-link-wrapper">
                                        <a href="{{ route('single-blog', $popular_post->title) }}">
                                            <span class="next-link-info-wrapper">
                                                <span class="next-title">The golden rule of buying a phone as a gift</span>
                                                <span class="meta-wrapper">
                                                    <span class="date-post">January 21, 2022</span>
                                                </span>
                                            </span>
        
                                            <span class="image-next">
                                                <img src="assets/img/blog/3.jpg" alt="image">
                                                <span class="post-nav-title">Next</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="comments-area">
                                <h3 class="comments-title">2 Comments:</h3>

                                <ol class="comment-list">
                                    <li class="comment">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="assets/img/user1.jpg" class="avatar" alt="image">
                                                    <b class="fn">John Jones</b>
                                                    <span class="says">says:</span>
                                                </div>

                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time>April 24, 2022 at 10:59 am</time>
                                                    </a>
                                                </div>
                                            </footer>

                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                            </div>

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>

                                        <ol class="children">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img src="assets/img/user2.jpg" class="avatar" alt="image">
                                                            <b class="fn">Steven Smith</b>
                                                            <span class="says">says:</span>
                                                        </div>
            
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time>April 24, 2022 at 10:59 am</time>
                                                            </a>
                                                        </div>
                                                    </footer>
            
                                                    <div class="comment-content">
                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                    </div>
            
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>

                                            <ol class="children">
                                                <li class="comment">
                                                    <article class="comment-body">
                                                        <footer class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <img src="assets/img/user3.jpg" class="avatar" alt="image">
                                                                <b class="fn">Sarah Taylor</b>
                                                                <span class="says">says:</span>
                                                            </div>
                
                                                            <div class="comment-metadata">
                                                                <a href="#">
                                                                    <time>April 24, 2022 at 10:59 am</time>
                                                                </a>
                                                            </div>
                                                        </footer>
                
                                                        <div class="comment-content">
                                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                        </div>
                
                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ol>
                                        </ol>
                                    </li>

                                    <li class="comment">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="assets/img/user4.jpg" class="avatar" alt="image">
                                                    <b class="fn">John Doe</b>
                                                    <span class="says">says:</span>
                                                </div>

                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time>April 24, 2022 at 10:59 am</time>
                                                    </a>
                                                </div>
                                            </footer>

                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                            </div>

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </article>

                                        <ol class="children">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img src="assets/img/user5.jpg" class="avatar" alt="image">
                                                            <b class="fn">James Anderson</b>
                                                            <span class="says">says:</span>
                                                        </div>
            
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time>April 24, 2022 at 10:59 am</time>
                                                            </a>
                                                        </div>
                                                    </footer>
            
                                                    <div class="comment-content">
                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                                    </div>
            
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>

                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply</h3>

                                    <form class="comment-form">
                                        <p class="comment-notes">
                                            <span id="email-notes">Your email address will not be published.</span>
                                            Required fields are marked 
                                            <span class="required">*</span>
                                        </p>
                                        <p class="comment-form-author">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" id="author" placeholder="Your Name*" name="author" required="required">
                                        </p>
                                        <p class="comment-form-email">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" id="email" placeholder="Your Email*" name="email" required="required">
                                        </p>
                                        <p class="comment-form-url">
                                            <label>Website</label>
                                            <input type="url" id="url" placeholder="Website" name="url">
                                        </p>
                                        <p class="comment-form-comment">
                                            <label>Comment</label>
                                            <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                                        </p>
                                        <p class="comment-form-cookies-consent">
                                            <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                            <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                        <p class="form-submit">
                                            <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                                        </p>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            {{-- <section class="widget widget_search">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit"><i class="bx bx-search-alt"></i></button>
                                </form>
                            </section> --}}

                            <section class="widget widget_raque_posts_thumb">
                                <h3 class="widget-title">Popular Posts</h3>

                                @foreach ($popular_posts as $popular_post)
                                    <article class="item">
                                        <a href="{{ route('single-blog', $popular_post->title) }}" class="thumb">
                                            <span class="fullimage cover bg1" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <time datetime="{{ Carbon\Carbon::parse($popular_post->updated_at)->format('y-m-d') }}">{{ Carbon\Carbon::parse($popular_post->updated_at)->format('y-m-d') }}</time>
                                            <h4 class="title usmall"><a href="{{ route('single-blog', $popular_post->title) }}">{{ $popular_post->title }}</a></h4>
                                        </div>

                                        <div class="clear"></div>
                                    </article>
                                @endforeach
                            </section>

                            {{-- <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                                    <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                                    <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                                    <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                                    <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                                </ul>
                            </section> --}}

                            {{-- <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Raque Tags</h3>

                                <div class="tagcloud">
                                    <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                                    <a href="#">Raque <span class="tag-link-count"> (3)</span></a>
                                    <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                                </div>
                            </section> --}}

                            {{-- <section class="widget widget_instagram">
                                <h3 class="widget-title">Instagram</h3>

                                <ul>
                                    <li>
                                        <a href="#" class="d-block">
                                            <img src="assets/img/blog/1.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-block">
                                            <img src="assets/img/blog/2.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-block">
                                            <img src="assets/img/blog/3.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-block">
                                            <img src="assets/img/blog/4.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-block">
                                            <img src="assets/img/blog/5.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-block">
                                            <img src="assets/img/blog/6.jpg" alt="image">
                                        </a>
                                    </li>
                                </ul>
                            </section> --}}

                            <section class="widget widget_contact">
                                <div class="text">
                                    <div class="icon">
                                        <i class='bx bx-phone-call'></i>
                                    </div>
                                    <span>Emergency</span>
                                    <a href="#">+0987-9876-8753</a>
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->

        {{-- @include('partials.partner-section') --}}
        <!-- End Partner Area -->
    @endsection
    