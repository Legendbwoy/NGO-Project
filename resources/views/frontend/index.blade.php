@extends('frontend.layouts.main')
@section('title')
    CIFGH
@endsection
@section('content')
<div class="header-height"></div>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h4>Join Us Today</h4>
            <h1>Give a little. Change a lot.</h1>
            <p>Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see
                what you can give.</p>
            <a href="" class="default-btn icon icon-chevron-right-thick btn--light animate--parallax">Learn more</a>
        </div>
    </div>
</section><!-- /Hero Section -->

<section class="promo-section-2 padding bd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="promo-content">
                    <img src="img/icon-1.png" alt="prmo icon">
                    <h3>Make Donetion</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="promo-content">
                    <img src="img/icon-2.png" alt="prmo icon">
                    <h3>Fundrising</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 xs-padding">
                <div class="promo-content">
                    <img src="img/icon-3.png" alt="prmo icon">
                    <h3>Become A Volunteer</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Promo Section -->

<section class="causes-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Recent Causes</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div class="causes-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="img/causes-1.jpg" alt="causes">
                        <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">25%</span></div>
                        </div>
                    </div>
                    <div class="causes-details">
                        <h3>First charity activity of this summer.</h3>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <div class="donation-box">
                            <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                            <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div><!-- /Causes-1 -->
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="img/causes-2.jpg" alt="causes">
                        <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">45%</span></div>
                        </div>
                    </div>
                    <div class="causes-details">
                        <h3>Big charity: build school for poor children.</h3>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <div class="donation-box">
                            <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                            <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div><!-- /Causes-2 -->
            <div class="col-md-4 xs-padding">
                <div class="causes-content">
                    <div class="causes-thumb">
                        <img src="img/causes-3.jpg" alt="causes">
                        <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">75%</span></div>
                        </div>
                    </div>
                    <div class="causes-details">
                        <h3>Building clean-water system for rural poor.</h3>
                        <p>Help today because tomorrow you may be the one who needs more helping!</p>
                        <div class="donation-box">
                            <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                            <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                        </div>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div><!-- /Causes-3 -->
        </div>
    </div>
</section><!-- /Causes Section -->

<section class="about-section bd-bottom shape circle padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 xs-padding">
                <div class="profile-wrap">
                    <img class="profile" src="img/profile.jpg" alt="profile">
                    <h3>Jonathan Smith <span>CEO & Founder of Charitify.</span></h3>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                        make in the lives of the poor, the abused and the helpless.</p>
                    <img src="img/sign.png" alt="sign">
                </div>
            </div>
            <div class="col-md-8 xs-padding">
                <div class="about-wrap row">
                    <div class="col-md-6 xs-padding">
                        <img src="img/history.jpg" alt="about-thumb">
                        <h3>Our History</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                            can make in the lives of the poor.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <img src="img/mission.jpg" alt="about-thumb">
                        <h3>Our Mission</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                            can make in the lives of the poor.</p>
                        <a href="#" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Causes Section -->

<section class="campaigns-section bd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 xs-padding">
                <div class="campaigns-wrap">
                    <h4>Featured Campaigns</h4>
                    <h2>Featured project to built a School.</h2>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                        make in the lives of the poor, the abused and the helpless.</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"><span
                                class="wow cssanimation fadeInLeft">35%</span></div>
                    </div>
                    <div class="donation-box">
                        <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                        <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                    </div>
                    <a href="#" class="default-btn">Donate Now</a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="video-wrap">
                    <img src="img/video.jpg" alt="video">
                    <div class="play">
                        <a class="img-popup" data-autoplay="true" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Featured Campaigns Section -->

<section class="team-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Meet Out Volunteers</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div class="team-wrapper row">
            <div class="col-lg-12 sm-padding">
                <div class="team-wrap row">
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                            <img src="img/team-1.jpg" alt="team">
                            <div class="hover">
                                <h3>Jonathan Smith <span>Communicator</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-1 -->
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                            <img src="img/team-2.jpg" alt="team">
                            <div class="hover">
                                <h3>Angelina Rose <span>Certified Reader</span></h3>
                            </div>
                        </div>

                    </div><!-- /Team-2 -->
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                            <img src="img/team-3.jpg" alt="team">
                            <div class="hover">
                                <h3>Taylor Swift <span>Event Creator</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-3 -->
                    <div class="col-md-3 xs-padding">
                        <div class="team-details">
                            <img src="img/team-4.jpg" alt="team">
                            <div class="hover">
                                <h3>Michel Brown <span>Internet Specialist</span></h3>
                            </div>
                        </div>
                    </div><!-- /Team-4 -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /Team Section -->

<section id="counter" class="counter-section">
    <div class="container">
        <ul class="row counters">
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-money"></i>
                    <h3 class="counter">85389</h3>
                    <h4 class="text-white">Money Donated</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-face-smile"></i>
                    <h3 class="counter">10693</h3>
                    <h4 class="text-white">Volunteer Around The World</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-user"></i>
                    <h3 class="counter">50177</h3>
                    <h4 class="text-white">People Impacted</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-comments"></i>
                    <h3 class="counter">669</h3>
                    <h4 class="text-white">Positive Feedbacks</h4>
                </div>
            </li>
        </ul>
    </div>
</section><!-- Counter Section -->

<section class="events-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Upcoming Events</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="event-carousel" class="events-wrap owl-Carousel">
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-1.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Let's talk about the poor children.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-1 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-2.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Insure clean water to everyone in Africa.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-2 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="img/events-3.jpg" alt="events">
                </div>
                <div class="event-details">
                    <h3>Nepal Earthquake Clean Water Initiative.</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                    </div>
                    <p>Help today because tomorrow you may be the one who needs more helping!</p>
                    <a href="#" class="default-btn">Read More</a>
                </div>
            </div><!-- Event-3 -->
        </div>
    </div>
</section><!-- Events Section -->

<section class="testimonial-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>What People Say</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                    in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-1.jpg" alt="profile">
                    <h4>Jonathan Smith <span>Marketer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                    in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-2.jpg" alt="profile">
                    <h4>Angelina Rose <span>Designer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                    in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-3.jpg" alt="profile">
                    <h4>Taylor Swift <span>Developer</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make
                    in the lives of the poor, the abused and the helpless.</p>
                <div class="testi-footer">
                    <img src="img/team-4.jpg" alt="profile">
                    <h4>Michel Brown <span>Programer</span></h4>
                </div>
            </div>
        </div>
    </div>
</section><!-- Testimonial Section -->

<section class="blog-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Recent Stories</h2>
            <span class="heading-border"></span>
            <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
        </div><!-- /Section Heading -->
        <div class="row">
            <div class="col-lg-12 xs-padding">
                <div class="blog-items grid-list row">
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="img/home-blog-1.jpg" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                <h3><a href="#">The History of Donation Told</a></h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the
                                    difference YOU can make in the lives of the poor, the abused and the helpless.
                                </p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 1 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="img/home-blog-2.jpg" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                <h3><a href="#">Help the Comunity</a></h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the
                                    difference YOU can make in the lives of the poor, the abused and the helpless.
                                </p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 2 -->
                    <div class="col-md-4 padding-15">
                        <div class="blog-post">
                            <img src="img/home-blog-3.jpg" alt="blog post">
                            <div class="blog-content">
                                <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                <p>The secret to happiness lies in helping others. Never underestimate the
                                    difference YOU can make in the lives of the poor, the abused and the helpless.
                                </p>
                                <a href="#" class="post-meta">Read More</a>
                            </div>
                        </div>
                    </div><!-- Post 3 -->
                </div>
            </div><!-- Blog Posts -->
        </div>
    </div>
</section><!-- Blog Section -->

<div class="sponsor-section bd-bottom">
    <div class="container">
        <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
            <li class="sponsor-item">
                <img src="img/sponsor-1.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-2.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-3.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-4.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-5.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-6.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-7.png" alt="sponsor-image">
            </li>
            <li class="sponsor-item">
                <img src="img/sponsor-8.png" alt="sponsor-image">
            </li>
        </ul>
    </div>
</div><!-- ./Sponsor Section -->

<section class="widget-section padding">
    <div class="container">
        <div class="widget-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <img src="img/logo-light.png" alt="logo">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                        make in the lives of the poor</p>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>Recent Campaigns</h3>
                    <ul class="widget-link">
                        <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a>
                        </li>
                        <li><a href="#">Big charity: build school for poor children. <span>-2 Year
                                    Ago</span></a></li>
                        <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                        <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>Charitify Location</h3>
                    <ul class="address">
                        <li><i class="ti-email"></i> Info@YourDomain.com</li>
                        <li><i class="ti-mobile"></i> +(333) 052 39876</li>
                        <li><i class="ti-world"></i> Www.YourWebsite.com</li>
                        <li><i class="ti-location-pin"></i> 60 Grand Avenue. Central New Road 0708, USA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./Widget Section -->




@endsection


