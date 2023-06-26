<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from wphix.com/template/klenar-prev/klenar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 13:25:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title")</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/')}}/assets/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/custom-animation.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/venobox.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/backToTop.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/default.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/main.css">
</head>

<body>
    

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <header>
        <div class="tp-header-area">
            <div class="tp-header-top theme-dark-bg pt-20 pb-50 d-none d-xl-block">
                <div class="tp-custom-container">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-xl-5">
                            <div class="tp-header-top-info">
                                <div class="tp-header-top-info-single pr-40 mr-40 border-right-1">
                                    <div class="tp-header-top-info-single-icon mr-10">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">Adres</span>
                                        <span class="tp-header-top-info-single-content font-medium">{{$headers->location}}</span>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single">
                                    <div class="tp-header-top-info-single-icon mr-15">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">Email</span>
                                        <a href="mailto:{{ $headers->email }}" 
                                        class="tp-header-top-info-single-content font-medium"><span class="__cf_email__" 
                                        data-cfemail="630a0d050c23080f060d02114d000c0e">[{{$headers->email}}]</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-2">
                            <div class="header-logo text-center">
                                <a href="index.html"><img src="{{asset('front/')}}/assets/img/logo/{{$headers->image1}}" class="img-fluid" alt="logo not found"></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5">
                            <div class="tp-header-top-info justify-content-end">
                                <div class="tp-header-top-info-single mr-85">
                                    <div class="tp-header-top-info-single-icon tp-header-top-info-single-icon-call mr-10">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">Telefon</span>
                                        <a href="tel:{{ $headers->phone }}" class="tp-header-top-info-single-content font-medium">{{$headers->phone}}</a>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single">
                                    <div class="tp-header-top-info-single-btn">
                                        <a href="{{ route('contact') }}" class="yellow-btn"><i class="flaticon-enter"></i> Ücretsiz Servis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tp-header-menu-area tp-transparent-header-menu header-sticky">
                <div class="container">
                    <div class="row justify-content-xl-center align-items-center">
                        <div class="col-xl-2 col-8 tp-sticky-column">
                            <div class="tp-sticky-logo">
                                <a href="index.html"><img src="{{asset('front/')}}/assets/img/logo/{{$headers->image2}}" class="img-fluid" alt="logo not found"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-4">
                            <div class="tp-main-menu-bg">
                                <div class="tp-main-menu">
                                    <nav id="tp-mobile-menu">
                                        <ul class="text-center">
                                            <li class="menu-item-has-children"><a href="{{route('homepage')}}" class="active">ANASAYFA</a></li>
                                            <li class="menu-item-has-children"><a href="{{route('about')}}">HAKKIMIZDA</a>
                                            <li class="menu-item-has-children"><a href="{{route('service')}}">HİZMETLER</a></li>
                                            <li class="menu-item-has-children"><a href="{{route('price')}}">FİYATLAR</a></li>
                                            <li class="menu-item-has-children"><a href="{{route('blog')}}">BLOG</a></li>
                                            <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu activation -->
                                <div class="side-menu-icon d-xl-none text-end">
                                    <button class="side-toggle"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 tp-sticky-column-btn">
                            <div class="tp-sticky-btn text-end">
                                <a href="{{ route('contact') }}" class="theme-btn justify-content-end"><i class="flaticon-enter"></i> Ücretsiz Servis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu info -->
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="tp-mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><i class="flaticon-pin"></i>28/4 Palmal, London</li>
                            <li><i class="flaticon-email"></i><a href="https://wphix.com/cdn-cgi/l/email-protection#2c45424a436c474049424d5e024f4341"><span class="__cf_email__" data-cfemail="8fe6e1e9e0cfe4e3eae1eefda1ece0e2">[email&#160;protected]</span></a></li>
                            <li><i class="flaticon-phone-call"></i><a href="tel:33388820055">333 888 200 - 55</a></li>
                        </ul>
                        <div class="sidebar__menu--social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- mobile menu info -->

    <main>