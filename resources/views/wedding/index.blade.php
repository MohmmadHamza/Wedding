<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/title-2.png">
    <title> Safina And Aftab</title>

    <link href="assets/css/themify-icons.css" rel="stylesheet">
    
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    
    <link href="assets/sass/style.css" rel="stylesheet">
    
</head>

<body>

    <style>
        .preview-middle-items .preview-middle-img-wrap {
            max-width: 570px;
            margin: 0 auto;
            position: relative;
            z-index: 11;
            margin-top: 160px;
        }

        .preview-middle-items .preview-middle-img-wrap .preview-middle-img {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .preview-middle-items .preview-middle-img-wrap .preview-middle-img:before {
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            top: 0;
            width: 330px;
            height: 330px;
            background: #EEF4F6;
            border-radius: 50%;
            content: "";
            z-index: -1;
        }

        .preview-middle-items .preview-middle-img-wrap .preview-middle-img .f-shape {
            position: absolute;
            left: 0;
            top: -120px;
            z-index: -1;
            -webkit-animation: circle2 60s linear infinite;
            animation: circle2 60s linear infinite;
        }

        .preview-middle-items .preview-middle-img-wrap .preview-middle-img {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 1199px) {
            .preview-middle-items .preview-middle-img-wrap .preview-middle-img:before {
                width: 300px;
                height: 300px;
            }
        }

        @media (max-width: 575px) {
            .preview-middle-items .preview-middle-img-wrap .preview-middle-img .f-shape {
                top: -54px;
                min-width: 400px;
                /* left: -50px; */
                left: -26px;
            }
        }

        @media (max-width: 1199px) {
            .preview-middle-items .preview-middle-img-wrap .preview-middle-img .f-shape {
                /* top: -80px; */
                top: -55px;
            }
        }

        @media (max-width: 575px) {
            .preview-middle-items .preview-middle-img-wrap {
                max-width: 290px;
                margin-top: 50px;
            }
        }

        @media (max-width: 1199px) {
            .preview-middle-items .preview-middle-img-wrap {
                font-size: 45px;
                margin-top: 70px;
                max-width: 450px;
            }
        }

        @media (max-width: 1440px) {
            .preview-middle-items .preview-middle-img-wrap {
                margin-top: 100px;
            }
        }

        .search-icon{
                    height: 40px;
                    width : 40px;
                }
                
    </style>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.gif" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header">
                
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.html">Safina & Aftab</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a href="{{route('wedding')}}">Home</a>
                                        </li>
                                        <li><a href="#couple">Couple</a></li>
                                        <li><a href="#story">Story</a></li>
                                        <li><a href="#rsvp">Rsvp</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{route('invitation')}}">Invitation</a>

                                        </li>
                                         
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                    <div class="col-lg-2 col-md-2 col-2">
                                        
                                    
                            </div>
                                </div><!-- end of nav-collapse -->
                            </div>

                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                    
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn">
                                            <img src="assets/images/logoforlogin.png" alt="Search Icon" class="search-icon" style="max-width: none;">
                                            <div class="header-search-form">
                                                @if (Route::has('login'))
                                        <nav class="-mx-3 flex flex-1 justify-end">

                                            @auth
                                                <a style="color: black;"
                                                    href="{{ url('/dashboard') }}"
                                                >
                                                    Go To Ivent
                                                </a>
                                            @else

                                                <a style="color: black;"
                                                    href="{{ route('login') }}"
                                                >
                                                    Login 
                                                </a>
                                                
                                                Or

                                                @if (Route::has('register'))
                                                    <a style="color: black;"
                                                        href="{{ route('register') }}"
                                                    >
                                                        Register
                                                    </a>
                                                @endif
                                            @endauth

                                        </nav>
                                    @endif
                                                    
                                         </div>
                                        </div>
                                    </div>
                            
                        </div>
                    </div><!-- end of container -->
                </nav>
                
            </div>
        </header>
        <!-- end of header -->
        <!-- start of hero -->
        <section class="static-hero-s5">
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container-fluid">
                        <div class="hero-inner-wrap">
                            <div class="row align-items-center">
                                <div class="col col-xl-6 col-lg-6 col-12">
                                    <div class="wpo-static-hero-inner">
                                        <div class="slide-title wow fadeInUp" data-wow-duration="1500ms">
                                            <h2>Safina & Aftab</h2>
                                        </div>
                                        <div data-swiper-parallax="400" class="slide-text wow fadeInUp"
                                            data-wow-duration="1600ms">
                                            <p>Our Big Day is November 09,2024</p>
                                        </div>
                                        <span class="shape wow fadeInUp" data-wow-duration="1400ms"><img
                                                src="assets/images/slider/date-shape.png" alt=""> </span>
                                        <div class="wpo-wedding-date wow fadeInUp" data-wow-duration="1700ms">
                                            <div class="clock-grids">
                                                <div id="clock"></div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="preview-middle-items">
                                        <div class="preview-middle-img-wrap">
                                            <div class="preview-middle-img wow zoomIn" data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-name: zoomIn;">
                                                <img src="assets/images/slider/middle.png" alt="">
                                                <div class="f-shape"><img src="assets/images/slider/shape.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-frame">
                    <img src="assets/images/slider/frame.png" alt="">
                </div>
            </div>
        </section>
        <!-- end of hero slider -->
        <!-- start wpo-wedding-countdown -->
        <section class="wpo-wedding-countdown-s2 section-padding">
            <h2 class="hidden">countdown</h2>
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1600ms">
                    <div class="col col-xs-12">
                        <div class="clock-grids">
                            <div id="clock2"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-wedding-countdown -->
        <!-- start wpo-couple-section -->
        <section class="wpo-couple-section-s6 section-padding" id="couple">
            <div class="container">
                <div class="couple-area clearfix">
                    <div class="row align-items-center">
                        <div class="col col-xl-3 col-lg-4 col-12">
                            <div class="text-grid wow fadeInLeftSlow" data-wow-duration="800ms">
                                <h3>Aftab Shaikh</h3>
                                <p>Welcome to Aftab Shaikh's side of our wedding journey:
                                    A celebration of love and cherished memories.</p>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-lg-4 col-12">
                            <div class="middle-couple-pic-wrap">
                                <div class="middle-couple-pic wow zoomIn" data-wow-duration="1000ms">
                                    <div class="middle-couple-pic-inner">
                                        <img src="assets/images/couple/7.png" alt="">
                                    </div>
                                    <div class="couple-shape"><img src="assets/images/couple/couple-shape2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-3 col-lg-4 col-12">
                            <div class="text-grid wow fadeInRightSlow" data-wow-duration="800ms">
                                <h3>Safina Shaikh</h3>
                                <p>Step into Safina Shaikh's realm of love and laughter:
                                    Where every moment is a cherished chapter in our story of joy.</p>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-couple-section -->

        <!-- start wpo-video-section -->
        <section class="wpo-hero-slider-s3">
            <h2 class="hidden">some</h2>
            <div class="video-bg">
                <video muted="" autoplay="" loop="">
                    <source src="assets/images/story/wedding.mp4" type="video/mp4">
                </video>
            </div>
            <div class="hero-inner-text">
                <h2>Everything is Better with Flowers.</h2>
                
            </div>
        </section>
        <!-- end wpo-video-section-->
        <!-- start wpo-story-section -->
        <section class="wpo-story-section-s6 section-padding" id="story">
            <div class="container">
                <div class="wpo-section-title">
                    <span>Our Story</span>
                    <h2>How It Happened</h2>
                </div>
                <div class="wpo-story-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-story-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-story-img">
                                    <div class="wpo-story-img-inner">
                                        <img src="assets/images/story/4.png" alt="">
                                    </div>
                                    <div class="flower-shape">
                                        <img src="assets/images/story/story-shape.png" alt="">
                                    </div>
                                </div>
                                <div class="wpo-story-content">
                                    <span>15 June, 2021</span>
                                    <h2>How we meet</h2>
                                    <p>This is the moment we first met each other. The beginning of this partnership
                                        marks a special moment in our lives, binding us together in marriage.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-story-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-story-img">
                                    <div class="wpo-story-img-inner">
                                        <img src="assets/images/story/5.png" alt="">
                                    </div>
                                    <div class="flower-shape">
                                        <img src="assets/images/story/story-shape.png" alt="">
                                    </div>
                                </div>
                                <div class="wpo-story-content">
                                    <span>02 Nov, 2020</span>
                                    <h2>Our Journey Continues</h2>
                                    <p>This marks the moment our commitment to each other began in the journey of our
                                        arranged marriage.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-story-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-story-img">
                                    <div class="wpo-story-img-inner">
                                        <img src="assets/images/story/6.png" alt="">
                                    </div>
                                    <div class="flower-shape">
                                        <img src="assets/images/story/story-shape.png" alt="">
                                    </div>
                                </div>
                                <div class="wpo-story-content">
                                    <span> 9 Nov, 2024</span>
                                    <h2>Our Special Day Approaches</h2>
                                    <p>As we look forward to our blessed union in the tradition of Muslim weddings, we
                                        reflect on our journey together.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end story-section -->

        <!-- start wpo-partners-section -->
        <section class="wpo-partners-section section-padding pt-0">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel">
                            <div class="grid">
                                <img src="assets/images/partners/1.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/2.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/3.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/4.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/5.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-partners-section-->

        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section-s4 section-padding" id="rsvp">
            <div class="wpo-contact-section-inner"
                style="background: url(./assets/images/rsvp/bg2.jpg) no-repeat center center;  background-size: cover;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col col-xl-5 col-lg-5 col-md-12 col-12">
                            <div class="wpo-contact-section-wrapper wow fadeInLeftSlow" data-wow-duration="1700ms">
                                <div class="wpo-contact-form-area">
                                    <div class="wpo-section-title">
                                        <h2>Are You Attending?</h2>
                                    </div>
                                    <form method="post" class="contact-validation-active" id="contact-form-main">
                                        <div>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                        </div>
                                        <div>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="radio-buttons">
                                            <p>
                                                <input type="radio" id="attend" name="radio-group" checked>
                                                <label for="attend">Yes, I will be there</label>
                                            </p>
                                            <p>
                                                <input type="radio" id="not" name="radio-group">
                                                <label for="not">Sorry, I can’t come</label>
                                            </p>
                                        </div>
                                        <div>
                                            <select name="guest" class="form-control">
                                                <option disabled="disabled" selected>Number Of Guests</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" name="what" id="what"
                                                placeholder="What Will You Be Attending">
                                        </div>
                                        <div>
                                            <select name="meal" class="form-control last">
                                                <option disabled="disabled" selected>Meal Preferences</option>
                                                <option>Chicken Soup</option>
                                                <option>Motton Kabab</option>
                                                <option>Chicken BBQ</option>
                                                <option>Mix Salad</option>
                                                <option>Beef Ribs </option>
                                            </select>
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn">RSVP</button>
                                            <div id="c-loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you</div>
                                            <div id="error"> Error occurred while sending email. Please try again later.
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-contact-section -->


        <!-- start wpo-blog-section -->
        <section class="wpo-event-section-s3 section-padding" id="event">
            <div class="container">
                <div class="wpo-section-title">
                    <span>Our Wedding</span>
                    <h2>When &amp; Where</h2>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms"
                                style="visibility: visible; animation-duration: 1000ms; animation-name: fadeInUp;">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/images/event/7.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>The Haldi</h2>
                                    </div>
                                    <ul>
                                        <li> 1:00 PM – 2:30 PM</li>
                                        <li>Near Champa masjid Gomtipur-380021</li>
                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms"
                                style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/images/event/8.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>The Ceremony</h2>
                                    </div>
                                    <ul>
                                        <li> 9:00 PM – 10:30 PM</li>
                                        <li>Bhagat Singh Holl Gomtipur-380021</li>
                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms"
                                style="visibility: visible; animation-duration: 1400ms; animation-name: fadeInUp;">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/images/event/9.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>The Party</h2>
                                    </div>
                                    <ul>
                                        <li> 9:00 PM – 11:30 PM</li>
                                        <li>Juhapura Iqbal Hall</li>
                                        <li> <a class="popup-gmaps"
                                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-section -->

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer-s2">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div>
                                <div class="link-wrap">
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="rsvp.html">RSVP</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="index.html">Get Quote</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <a class="logo" href="index.html">Safina & Aftab</a>
                                </div>
                                <p>We can’t wait to see all of our beloved friends
                                    and relative s at our wedding.</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <p>shaikh.mo.hamza18@gmail.com</p>
                                    <p>Champa Masjid Near
                                        Gomtipur 380021 Ahmedabad </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> &copy; Copyright 2024 | <a href="index.html">Safina & Aftab</a> | All
                                right
                                reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-shape-1">
                <img src="assets/images/footer-shape-1.svg" alt="">
            </div>
            <div class="ft-shape-2">
                <img src="assets/images/footer-shape-2.svg" alt="">
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->
        <!-- color-switcher -->
        <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                    <li class="btn btn13" id="Button13"></li>
                    <li class="btn btn14" id="Button14"></li>
                    <li class="btn btn15" id="Button15"></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.pointparallax.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/moving-animation.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>