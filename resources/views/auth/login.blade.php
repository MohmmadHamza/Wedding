
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
        .text-sm{
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
                              

                                        <h2>Please Login</h2><br>
                                        <i><img src="assets/images/title-3.png" alt=""></i>

                                    </div>

                                    <form method="POST" action="{{ route('login') }}" class="contact-validation-active"
                                        id="contact-form-main" novalidate="novalidate">
                                        @csrf

                                        <div>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                                                placeholder="Email">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div>
                                            <input type="password" class="form-control" name="password" id="password"value="{{ old('password') }}"
                                                placeholder="Password">
                                                
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                         <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                                    name="remember">
                                                <span class="ms-2  text-gray-600 dark:text-gray-400">
                                                    {{ __('Remember me') }}
                                                </span>
                                            </label>
                                            <div style="float: inline-end;">
                                            @if (Route::has('password.request'))
                                                <a style="color:#1e8267;" class="underline  text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                            </div>
                                        </div>

            
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn">Submit</button>
                                            <div id="c-loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </form>
                                    <a style="color:#1e8267;" class="underline  text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('register') }}">
                                                    {{ __('Create Account  -->') }}
                                                </a>

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