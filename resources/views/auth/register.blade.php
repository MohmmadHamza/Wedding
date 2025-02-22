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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Add Toastr CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name') }}" required placeholder="Name" autofocus
                                                autocomplete="name">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div style="display: flex;">
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ old('email') }}" required placeholder="Email"
                                                autocomplete="new-password">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                            <a type="button" onclick="sendOtp()" class="btn-icon">
                                                <img src="assets/images/pngwing.com.png" alt="" style="height: 32px;">
                                            </a>
                                        </div>
                                        <div id="otp-timer" style="margin-top: 10px; color: red; font-weight: bold;">
                                        </div>






                                        <div>
                                            <input type="text" class="form-control" name="otp" id="otp"
                                                placeholder="Enter OTP">
                                            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
                                        </div>

                                        <div>
                                            <input type="password" class="form-control" name="password" id="password"
                                                required placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div>
                                            <input class="form-control" name="password_confirmation"
                                                autocomplete="new-password" type="password" id="password_confirmation"
                                                required placeholder="Confirm Password">
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

                                    <script>
                                        function sendOtp() {
                                            let email = document.getElementById('email').value;

                                            if (email) {
                                                fetch('{{ route('send-otp') }}', {
                                                    method: 'POST',
                                                    headers: {
                                                        'Content-Type': 'application/json',
                                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                    },
                                                    body: JSON.stringify({ email: email })
                                                })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        toastr.success(data.message);  
                                                        startOtpTimer();
                                                    })
                                                    .catch(error => {
                                                        console.error('Error:', error);
                                                        toastr.error('Failed to send OTP.');  
                                                    });
                                            } else {
                                                toastr.warning('Please enter your email first.'); 
                                            }
                                        }

                                        function startOtpTimer() {
                                            let timer = 60;
                                            const timerElement = document.getElementById('otp-timer');

                                            timerElement.textContent = `Resend OTP in 1:00`;

                                            const interval = setInterval(() => {
                                                timer--;
                                                let minutes = Math.floor(timer / 60);
                                                let seconds = timer % 60;
                                                timerElement.textContent = `Resend OTP in ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                                                if (timer <= 0) {
                                                    clearInterval(interval);
                                                    timerElement.textContent = '';
                                                }
                                            }, 1000);
                                        }

                                    </script>
                                    <a style="color:#1e8267;"
                                        class="underline  text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('login') }}">
                                        {{ __('Login Account  -->') }}
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