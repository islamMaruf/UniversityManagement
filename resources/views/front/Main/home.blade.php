@extends('master')

@section('Title')
    Home
@endsection

@section('Content')

    <!-- Header Area End -->
    <!-- Background Area Start -->
    <section id="slider-container" class="slider-area three">
        <div class="slider-owl owl-theme owl-carousel">
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url({{asset('/')}}front/img/slider/slider3.png)">
                <!-- Start Slider Content -->
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content">
                                        <h3>EDUCATION MAKES </h3>
                                        <h2>PROPER HUMANITY </h2>
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Start Slider Content -->
            </div>
            <!-- End Slingle Slide -->
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url({{asset('/')}}front/img/slider/slider2.png)">
                <!-- Start Slider Content -->
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content">
                                        <h3>EDUCATION MAKES </h3>
                                        <h2>PROPER HUMANITY </h2>
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Start Slider Content -->
            </div>

        </div>
    </section>
    <!-- Background Area End -->
    <!-- Courses Area Start -->
    <div class="courses-area pt-150 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <img src="{{asset('/')}}front/img/icon/section.png" alt="section-title">
                        <h2>COURSES WE OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.html"><img src="{{asset('/')}}front/img/course/course3.jpg" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.html">CSE ENGINEERING</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="course-details.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Area End -->
    <!-- Notice Start -->
    <section class="notice-area two three pt-140 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-right-wrapper mb-25 pb-25">
                        <h3>TAKE A VIDEO TOUR</h3>
                        <div class="notice-video">
                            <div class="video-icon video-hover">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=to6Ghf8UL7o">
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-left-wrapper">
                        <h3>notice board</h3>
                        <div class="notice-left">
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>5, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>

                            <div class="single-notice-left pb-70">
                                <h4>3, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice End -->
    <!-- About Start -->

    <!-- Event Area Start -->
    <div class="event-area three text-center pt-100 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <img src="{{asset('/')}}front/img/icon/section.png" alt="section-title">
                        <h2>UPCOMMING EVENTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('/')}}front/img/event/event5.jpg" alt="event"></a>
                            <div class="event-date">
                                <h3>20 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">ADVANCE PHP WORKSHOP</a></h4>
                            <ul>
                                <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                <li><span>venue</span> New Yourk City</li>
                            </ul>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">join now</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Event Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial-area three pt-110 pb-105 text-center">
        <div class="container">
            <div class="row">
                <div class="testimonial-owl owl-theme owl-carousel">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="{{asset('/')}}front/img/testimonial/testimonial.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                                    <h4>David Morgan</h4>
                                    <h5>Student, CSE</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->

@endSection
