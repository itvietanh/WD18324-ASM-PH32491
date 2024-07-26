<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 08:56:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('client/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/main.css')}}">

    <link rel="shortcut icon" href="{{asset('client/')}}assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="{{asset('client/')}}assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3 ">
                        <span class="cate">Login</span>
                        <h2 class="title"></h2>
                    </div>
                    <form class="account-form" action="{{route('auth.verify')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email2"> Username<span>*</span></label>
                            <input type="text" placeholder="Enter Your Username" id="email2" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="pass3">Password<span>*</span></label>
                            <input type="password" placeholder="Password" id="pass3" name="password" required>
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal2" required checked>
                            <label for="bal2">remember password</label>
                            <a href="#0" class="forget-pass">Forget Password</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="log in" name="btnSubmit">
                        </div>
                    </form>
                    <div class="option">
                        Don't have an account? <a href="sign-up.html">sign up now</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <script src="{{asset('client/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('client/assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('client/assets/js/plugins.js')}}"></script>
    <script src="{{asset('client/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('client/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('client/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('client/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('client/assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('client/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('client/assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('client/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('client/assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from pixner.net/boleto/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 08:56:19 GMT -->
</html>