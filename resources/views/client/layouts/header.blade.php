<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 08:54:32 GMT -->
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
    <link rel="stylesheet" href="{{asset('client/assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/main.css')}}">

    <link rel="shortcut icon" href="{{asset('client/assets/images/favicon.png')}}" type="image/x-icon">

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
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('client/assets/images/logo/logo.png')}}" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="#0" class="active">Trang chủ</a>
                        <ul class="submenu">
                            <li>
                                <a href="#0" class="active">Home One</a>
                            </li>
                            <li>
                                <a href="index-2.html">Home Two</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Phim</a>
                        <ul class="submenu">
                            <li>
                                <a href="movie-grid.html">Movie Grid</a>
                            </li>
                            <li>
                                <a href="movie-list.html">Movie List</a>
                            </li>
                            <li>
                                <a href="movie-details.html">Movie Details</a>
                            </li>
                            <li>
                                <a href="movie-details-2.html">Movie Details 2</a>
                            </li>
                            <li>
                                <a href="movie-ticket-plan.html">Movie Ticket Plan</a>
                            </li>
                            <li>
                                <a href="movie-seat-plan.html">Movie Seat Plan</a>
                            </li>
                            <li>
                                <a href="movie-checkout.html">Movie Checkout</a>
                            </li>
                            <li>
                                <a href="popcorn.html">Movie Food</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Liên hệ</a>
                        <ul class="submenu">
                            <li>
                                <a href="events.html">Events</a>
                            </li>
                            <li>
                                <a href="event-details.html">Event Details</a>
                            </li>
                            <li>
                                <a href="event-speaker.html">Event Speaker</a>
                            </li>
                            <li>
                                <a href="event-ticket.html">Event Ticket</a>
                            </li>
                            <li>
                                <a href="event-checkout.html">Event Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Xem thêm</a>
                        <ul class="submenu">
                            <li>
                                <a href="sports.html">Sports</a>
                            </li>
                            <li>
                                <a href="sport-details.html">Sport Details</a>
                            </li>
                            <li>
                                <a href="sports-ticket.html">Sport Ticket</a>
                            </li>
                            <li>
                                <a href="sports-checkout.html">Sport Checkout</a>
                            </li>
                        </ul>
                    </li>
                    @if(session('user'))
                    <a href="">Xin Chào, {{ session('user')->name }}</a>
                    <div>
                        <a href="{{ route('auth.logout') }}">Đăng xuất</a>
                    </div>
                    @else
                    <li class="header-button pr-0">
                        <a href="{{ route('auth.login') }}">Đăng nhập</a>
                    @endif
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->