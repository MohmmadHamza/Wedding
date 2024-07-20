


<html lang="en" class="js no-touch cssanimations csstransitions">

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
    <style type="text/css">
        .fancybox-margin {
            margin-right: 17px;
        }

        .text-sm {
            color: red;

        }
    </style>
</head>




<body class="color3">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <div class="preloader" style="display: none;">
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


        <section class="wpo-contact-section-s6 section-padding" id="rsvp">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-12 col-md-12 col-12">
                        <div class="wpo-contact-section-wrapper">
                            <div class="wpo-contact-section-inner">
                                <div class="wpo-contact-form-area">
                                    <div class="wpo-section-title">
                                        <h2>Please Register WithUs</h2>
                                        <i><img src="assets/images/title.png" alt=""></i>

                                    </div>
                                    

                                    <form method="post" action="{{ route('register') }}"
                                        class="contact-validation-active" id="contact-form-main"
                                        novalidate="novalidate">
                                        @csrf

                                        <div>
                                      
                                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required
                                                placeholder="Name" autofocus autocomplete="name">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                        </div>
                                        <div>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                                                placeholder="Email" autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>
                                        <div>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        </div>
                                        <div>
                                            <input class="form-control" name="password_confirmation"
                                                autocomplete="new-password" type="password" id="password_confirmation"
                                                placeholder="Confrom Password Date">
                                            <x-input-error :messages="$errors->get('password_confirmation')"
                                                class="mt-2" />

                                        </div>


                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn">Submit</button>
                                            <div id="c-loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-img"><img src="assets/images/contact/img-1.jpg" alt=""></div>
            <div class="right-img"><img src="assets/images/contact/img-2.jpg" alt=""></div>
        </section>


    </div>
</body>

</html>