<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('Title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('/')}}front/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/et-line-icon.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/reset.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/responsive.css">
    <script src="{{asset('/')}}front/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

    <header class="top">
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="logo">
                            <a href="#"><img src="{{asset('/')}}front/img/logo/logo2.png" alt="eduhome" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-6">
                        <div class="content-wrapper text-right">
                            <!-- Main Menu Start -->
                            <div class="main-menu">
                                <nav>
                                    <ul>

                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('courses')}}">courses</a>
                                            <ul>
                                                <li><a href="{{route('courses')}}">courses</a></li>
                                                <li><a href="#">courses details</a></li>
                                            </ul>
                                        </li>

                                        <li class="hidden-sm"><a href="{{route('teacher')}}">teacher</a>
                                            <ul>
                                                <li><a href="{{route('teacher')}}">teacher</a></li>
                                                <li><a href="#">teacher details</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{route('contract')}}">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!--Search Form Start-->
                            <div class="search-btn">
                                <ul data-toggle="dropdown" class="header-search search-toggle">
                                    <li class="search-menu">
                                        <i class="fa fa-search"></i>
                                    </li>
                                </ul>
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="#">
                                            <input type="search" placeholder="Search here..." name="search" />
                                            <button type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of Search Form-->
                            <!-- Main Menu End -->
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('Content')

    <!-- Subscribe Start -->
    <div class="subscribe-area pt-60 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="subscribe-content section-title text-center">
                        <h2>subscribe our newsletter</h2>
                        <p>I must explain to you how all this mistaken idea </p>
                    </div>
                    <div class="newsletter-form mc_embed_signup">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                            target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address"
                                    required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                        tabindex="-1" value=""></div>
                                <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button>
                            </div>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
    <!-- Footer Start -->
    <footer class="footer-area three">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>why eduhome</h3>
                            <ul>
                                <li><a href="#">great campus</a></li>
                                <li><a href="#">various faculty</a></li>
                                <li><a href="#">low cost</a></li>
                                <li><a href="#">transport support</a></li>
                                <li><a href="#">nice hostel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>information</h3>
                            <ul>
                                <li><a href="#">addmission</a></li>
                                <li><a href="#">Academic Calender</a></li>
                                <li><a href="event.html">Event List</a></li>
                                <li><a href="#">Hostel &amp; Dinning</a></li>
                                <li><a href="#">TimeTable</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>useful links</h3>
                            <ul>
                                <li><a href="course.html">our courses</a></li>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="teacher.html">teachers &amp; faculty</a></li>
                                <li><a href="#">teams &amp; conditions</a></li>
                                <li><a href="event.html">our events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>get in touch</h3>
                            <p>Your address goes here, Street<br>City, Roadno 785 New York</p>
                            <p>+880 548 986 898 87<br>+880 659 785 658 98</p>
                            <p>info@eduhome.com<br>www.eduhome.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom two text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-logo text-center">
                            <a href="index.html"><img src="{{asset('/')}}front/img/logo/footer-logo.png" alt="eduhome"></a>
                        </div>
                        <p>Copyright © <a>HasTech</a> 2017. All Right Reserved By Hastech.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="{{asset('/')}}front/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="{{asset('/')}}front/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}front/js/jquery.meanmenu.js"></script>
    <script src="{{asset('/')}}front/js/jquery.magnific-popup.js"></script>
    <script src="{{asset('/')}}front/js/ajax-mail.js"></script>
    <script src="{{asset('/')}}front/js/owl.carousel.min.js"></script>
    <script src="{{asset('/')}}front/js/jquery.mb.YTPlayer.js"></script>
    <script src="{{asset('/')}}front/js/jquery.nicescroll.min.js"></script>
    <script src="{{asset('/')}}front/js/plugins.js"></script>
    <script src="{{asset('/')}}front/js/main.js"></script>
</body>

</html>
