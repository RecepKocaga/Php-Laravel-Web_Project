@extends('front.layouts.master')
@section('title','Hakkımızda')
@section('content')
     
        
<div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="{{asset('front/')}}/assets/img/slider/breadcrumb-bg-1.jpg" style="background-image: url(&quot;{{asset('front/')}}/assets/img/slider/breadcrumb-bg-1.jpg&quot;);">
            <div class="tp-custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-page-title z-index">
                            <h2 class="breadcrumb-title"> <span>@yield('title')</span></h2>
                            <div class="breadcrumb-menu">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="{{route('homepage')}}">Anasayfa</a>
                                        </li>
                                        <li class="trail-item trail-end"><span>@yield('title')</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
        <!-- about area start here -->
        <section class="tp-about-area position-relative pt-120 pb-90 fix">
            <div class="tp-about-shape">
                <img src="{{asset('front/')}}/assets/img/about/about-shape-1.jpg" class="img-fluid" alt="img not found">
            </div>
            <div class="container">
                <div class="row justify-content-xl-between justify-content-md-center">
                    <div class="col-xl-5 col-12">
                        <div class="tp-about-img z-index wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{asset('front/')}}/assets/img/about/{{ $abouts->image}}" alt="img not found">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-10">
                        <div class="tp-about-text z-index wow fadeInUp" data-wow-delay=".6s">
                            <div class="section-title-wrapper mb-30">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-20">{{ $abouts->title}}</h5>
                                <h2 class="tp-section-title">{{ $abouts->subtitle}}</h2>
                            </div>
                            <p class="mb-40">{!! $abouts->content !!}</p>
                            <div class="row mb-10">
                                <div class="col-sm-6">
                                    <div class="tp-about-service mb-30">
                                        <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                        <i class="fas fa-washer"></i> 
                                        </div>
                                        <div class="tp-about-service-text">
                                            <h4 class="tp-about-service-text-title mb-15 hover-theme-color"><a href="service.html">{!! $abouts->title1 !!}</a></h4>
                                            <p>{!! $abouts->content1 !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="tp-about-service mb-30">
                                        <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                        <i class="fas fa-hands-wash"></i>
                                        </div>
                                        <div class="tp-about-service-text">
                                            <h4 class="tp-about-service-text-title mb-15 hover-theme-color"><a href="service.html">{!! $abouts->title2 !!}</a></h4>
                                            <p>{!! $abouts->content2 !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="tp-about-author mb-30">
                                        <div class="tp-about-author-img">
                                            <img src="{{asset('front/')}}/assets/img/service/{{ $teamss->image }}" class="img-fluid" alt="img not found">
                                        </div>
                                        <div class="tp-about-author-text">
                                            <h4 class="tp-about-author-text-title">{{ $teamss->full_name }}</h4>
                                            <span>{{ $teamss->job }} - {{ $teamss->province }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="tp-about-number mb-30">
                                        <div class="tp-about-number-icon">
                                            <i class="flaticon-phone-call-1"></i>
                                        </div>
                                        <div class="tp-about-number-text">
                                            <span>Ücretsiz Danışmanlık</span>
                                            <a href="tel:02(552)6620808" >02 (552) 662 0808</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->
    
        
        <!-- testimonial area start here -->
        <section class="tp-testimonial-area position-relative">
            <div class="container">
                <div class="tp-testimonial-bg white-bg z-index">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="tp-testimonial-img">
                                <img src="{{asset('front/')}}/assets/img/testimonial/{{ $satisfactions->image }}" alt="img bot found">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="tp-testimonial ml-70">
                                <div class="section-title-wrapper">
                                    <h5 class="tp-section-subtitle common-yellow-shape mb-20">{!! $satisfactions->title !!}</h5>
                                    <h2 class="tp-section-title mb-20">{!! $satisfactions->subtitle !!}</h2>
                                </div>
                                <div class="tp-testimonial-active swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="tp-testimonial-single swiper-slide z-index">
                                            <p class="mb-45">{!! $satisfactions->content !!}</p>
                                            <div class="tp-testimonial-author">
                                                <div class="tp-testimonial-author-text">
                                                    <a href="{{ route('homepage') }}" class="btn btn-warning px-4 me-2 mb-3 mb-md-0" title="Nevşehir Kuru Temizleme Ücretsiz Servis" itemprop="url">
							                           <i class="fas fa-long-arrow-alt-right me-3"></i>Ücretsiz Servis
						                            </a>
                                                    <a href="{{ route('contact') }}" title="Bursa Kuru Temizleme İletişim" class="btn" itemprop="url">
							                           <i class="fas fa-long-arrow-alt-right me-3"></i>Bize Ulaşın
						                            </a>
                                                </div>
                                            </div>
                                            <div class="tp-testimonial-qoute">
                                                <img src="{{asset('front/')}}/assets/img/icon/test-qoute.png" alt="img not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-testimonial-shape"></div>
        </section>
        <!-- testimonial area end here -->


         <!-- Choose area start here -->
         <section class="tp-choose-area position-relative pt-120 pb-90">
            <div class="tp-choose-yellow-bg"></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-8">
                        <div class="tp-choose z-index">
                            <div class="tp-section-title-wrapper mb-105 wow fadeInUp" data-wow-delay=".2s">
                                <h5 class="tp-section-subtitle common-yellow-shape common-white-shape mb-20">{!! $votes->title !!}</h5>
                                <h1 class="tp-section">{!! $votes->subtitle !!}</h1>
                            </div>
                            <div class="tp-choose-img mb-40 z-index d-block d-xl-none">
                                <img src="{{asset('front/')}}/assets/img/about/choose-img-1.jpg" alt="img not found">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="tp-choose-timeline ml-15 mb-30">
                                        <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".4s">
                                            <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">{!! $votes->title1 !!}</a></h4>
                                            <p>{!! $votes->content1 !!} </p>
                                        </div>
                                        <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".6s">
                                            <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">{!! $votes->title2 !!}</a></h4>
                                            <p>{!! $votes->content2 !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="tp-choose-timeline ml-15 mb-30">
                                        <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay="1s">
                                            <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">{!! $votes->title3 !!}</a></h4>
                                            <p>{!! $votes->content3 !!} </p>
                                        </div>
                                        <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay="1.2s">
                                            <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a href="service-details.html">{!! $votes->title4 !!}</a></h4>
                                            <p>{!! $votes->content4 !!} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12">
                        <div class="tp-choose-img mb-30 z-index d-none d-xl-block wow fadeInUp" data-wow-delay=".6s">
                            <img src="{{asset('front/')}}/assets/img/about/{{ $votes->image }}" alt="img not found">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose area end here -->

        <!-- progress area start here -->
        <section class="tp-progress-area pt-90">
            <div class="tp-progress-area-inner position-relative pt-25">
                <div class="tp-progress-shape">
                    <img src="{{asset('front/')}}/assets/img/project/progress-bg.jpg" alt="img not found">
                </div>
                <div class="container z-index">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tp-progress-img pt-75 mb-30">
                                <img src="{{asset('front/')}}/assets/img/project/progress-img-1.jpg" alt="img not found">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-progress-text mb-30">
                                <div class="section-title-wrapper">
                                    <h5 class="tp-section-subtitle common-yellow-shape mb-25">{!! $experiences->title !!}</h5>
                                    <h2 class="tp-section-title mb-25">{!! $experiences->subtitle !!}</h2>
                                </div>
                                <p class="mb-40">{!! $experiences->content !!}</p>
                                <div class="tp-skill--content">
                                    <div class="tp-skill__wrapper mb-45">
                                        <div class="tp-skill--title__wrapper">
                                            <h5 class="tp-skill--title">Onarım Kalitesi</h5>
                                            <span style="left:{{ $experiences->number1 }}%">{{ $experiences->number1 }}%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: {{ $experiences->number1 }}%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                        </div>
                                    </div>
                                    <div class="tp-skill__wrapper mb-45">
                                        <div class="tp-skill--title__wrapper">
                                            <h5 class="tp-skill--title">mutlu müşteri</h5>
                                            <span style="left:{{ $experiences->number2 }}%">{{ $experiences->number2 }}%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: {{ $experiences->number2 }}%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                        </div>
                                    </div>
                                    <div class="tp-skill__wrapper">
                                        <div class="tp-skill--title__wrapper">
                                            <h5 class="tp-skill--title">Destek Merkezi</h5>
                                            <span style="left:{{ $experiences->number3 }}%">{{ $experiences->number3 }}%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" role="progressbar" style="width: {{ $experiences->number3 }}%; visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- progress area end here -->



        <!-- Choose team start here -->
        <section class="tp-service-area-two pt-120 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper-two mb-55 text-center wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Ekip Üyemiz</h5>
                            <h2 class="tp-section-title heading-color-black">Her Zaman Garantili Kaliteli Temizlik <br>Hizmeti</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                 @foreach($teams as $team)
                    <div class="col-xl-3 col-md-6">
                        <div class="tp-service-two text-center mb-45 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <div class="tp-service-two-img mb-35">
                                <div class="tp-service-two-img-box">
                                    <img src="{{asset('front/')}}/assets/img/service/{{ $team->image }}" class="img-fluid" alt="img not found">
                                </div>
                                <div class="tp-service-two-icon-wrapper">
                                    <div class="tp-service-two-icon">
                                        <ul>
                                            <li><a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <a href="javascript:void(0)" class="share-icon"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-service-two-content">
                                <h4 class="tp-service-two-title"><a href="team-details.html">{{ $team->full_name }}</a></h4>
                                <span>{{ $team->job }}</span>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
        <!-- Choose team end here -->


@endsection