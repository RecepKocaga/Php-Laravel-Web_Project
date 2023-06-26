@extends('front.layouts.master')
@section('title','Anasayfa | Kuru Temizleme Sitesi')
@section('content')

        <!-- hero area start here -->
        <section class="tp-slider-area fix">
            <div class="tp-slider-active swiper-container common-dots">
                <div class="swiper-wrapper">
                  @foreach($sliders as $slider)
                    <div class="tp-single-slider tp-slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                        <div class="slide-bg" data-background="{{asset('front/')}}/assets/img/slider/slider-bg-1.jpg"></div>
                        <div class="slider-img">
                            <img src="{{asset('front/')}}/assets/img/slider/{{$slider->image}}" class="img-fluid" alt="img not found">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tp-slider-wrapper mt-60 position-relative">
                                        <div class="tp-slider-video-btn play_btn">
                                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$slider->url}}"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="tp-slider z-index">
                                            <h5 class="tp-slider-subtitle common-yellow-shape w-80 mb-35" data-animation="fadeInUp" data-delay=".5s">{{$slider->title}}</h5>
                                            <h1 class="tp-slider-title mb-45" data-animation="fadeInUp" data-delay=".8s">{!! $slider->subtitle !!}</h1>
                                            <div class="tp-slider-btn" data-animation="fadeInUp" data-delay="1.1s">
                                                <a href="{{route('about')}}" class="theme-btn"><i class="flaticon-enter"></i>Daha fazla bilgi edin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach

                    

                </div>
                <!-- If we need pagination -->
                <div class="swiper-paginations slide-dots"></div>
            </div>
        </section>
        <!-- hero area end here -->

        <!-- cta area start here -->
        <section id="hedef-bolum" class="tp-appoint-cta-area yellow-dark-bg pt-80 pb-65">
            <div class="container">
            <form  method="post" action="{{route('post.send')}}" role="form">
              @csrf
                <div class="row align-items-center custom-mar-20">
                    <div class="col-xl-2 col-lg-12 custom-pad-20">
                        <div class="tp-appoint wow fadeInUp" data-wow-delay=".1s">
                            <h4 class="tp-appoint-title">Ücretsiz Servis </h4>
                            <p>Nevşehir merkez ve ilçelerine servis talebinizi şimdi iletin.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 custom-pad-20">
                        <div class="row align-items-center custom-mar-20">
                            <div class="col-lg-4 custom-pad-20">
                                <div class="tp-appoint wow fadeInUp" data-wow-delay=".3s">
                                    <input type="text" name="full_name" placeholder="Ad Soyad" required>
                                </div>
                            </div>
                            <div class="col-lg-4 custom-pad-20">
                                <div class="tp-appoint wow fadeInUp" data-wow-delay=".5s">
                                    <input type="tel" name="phone"  placeholder="Telefon" required>
                                </div>
                            </div>
                            <div class="col-lg-4 custom-pad-20">
                                <div class="tp-appoint select-field-arrow wow fadeInUp" data-wow-delay=".7s">
                                    <select name="istek" required>
                                    <option value="">Hizmet Seçiniz</option>
                                        @foreach($services as $service)
                                        <option value="{{ $service->title }}">{{ $service->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 custom-pad-20">
                        <div class="tp-appoint text-end wow fadeInUp" data-wow-delay=".9s">
                            <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Talep Gönder</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </section>
        <!-- cta area end here -->

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
                                            <img src="{{asset('front/')}}/assets/img/service/{{ $teams->image }}" class="img-fluid" alt="img not found">
                                        </div>
                                        <div class="tp-about-author-text">
                                            <h4 class="tp-about-author-text-title">{{ $teams->full_name }}</h4>
                                            <span>{{ $teams->job }} - {{ $teams->province }}</span>
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

        <!-- fact area start here -->
        <section class="tp-fact-area theme-dark-bg pt-75 pb-20">
            <div class="container">
                <div class="row">
                  @foreach($proces as $proce)
                    <div class="col-lg-3 col-sm-6">
                        <div class="tp-fact mb-50 text-center wow fadeInUp" data-wow-delay=".2s">
                            <div class="tp-fact-icon mb-40">
                                <img src="{{asset('front/')}}/assets/img/icon/feature-bg.png" class="img-fluid" alt="img not found">
                                <i class="icon">
                                   <img src="{{asset('front/')}}/assets/img/ikon/{{ $proce->image }}" class="img-fluid" alt="img not found">
                                </i> 
                            </div>
                            <div class="tp-fact-text">
                                <h2 class="tp-fact-text white-color mb-20 text-warning">{{ $proce->title }}</h2>
                                <h5 class="tp-fact-text-subtitle white-color">{{ $proce->subtitle }}</h5>
                            </div>
                        </div>
                    </div>
                  @endforeach

                    
                </div>
            </div>
        </section>
        <!-- fact area end here -->

        <!-- service area start here -->
        <section class="tp-services-area theme-dark-bg">
            <div class="tp-custom-container">
                <div class="tp-services-bg grey-bg pt-120 pb-90 z-index">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="tp-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".1s">
                                    <h5 class="tp-section-subtitle common-yellow-shape mb-25">Kuru Temizleme, Çamaşır Yıkama ve Ütüleme</h5>
                                    <h2 class="tp-section-title">Sizin için tasarlanmış bir çamaşırhane hizmeti</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                         @foreach($services as $service)
                            <div class="col-xl-4 col-sm-6">
                                <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="tp-services-icon yellow-circle-shape">
                                    <img class="lazy" src="{{asset('front/')}}/assets/img/hizmet/{{ $service->icon }}" alt="{{ $service->title }}" style="">
                                    </div>
                                    <div class="tp-services-text fix">
                                        <h4 class="tp-services-text-title mb-15 hover-theme-color"><a href="service-details.html">{!! $service->title !!}</a></h4>
                                        <p class="mb-20">{!! $service->content !!}</p>
                                        <div class="tp-services-text-link">
                                            <a href="service-details.html"><i class="flaticon-enter"></i>  Detaylar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

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
                                                    <a href="#hedef-bolum" class="btn btn-warning px-4 me-2 mb-3 mb-md-0" title="Nevşehir Kuru Temizleme Ücretsiz Servis" itemprop="url">
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

        <!-- project area start here -->
        <section class="tp-project-area white-bg position-relative">
            <div class="tp-project-shape"></div>
            <div class="tp-project-wrapper grey-bg pt-120 wow fadeInUp" data-wow-delay=".2s">
                <div class="section-title-wrapper text-center mb-55 grey-bg">
                    <h5 class="tp-section-subtitle common-yellow-shape mb-20">Kuru Temizleme, Çamaşır Yıkama ve Ütüleme</h5>
                    <h2 class="tp-section-title mb-20">Sektörel Çözümlerimiz</h2>
                </div>
                <div class="tp-project-active swiper-container">
                    <div class="swiper-wrapper">
                      @foreach($prices as $price)
                        <div class="tp-project z-index swiper-slide mb-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="tp-project-img">
                                <img src="{{asset('front/')}}/assets/img/project/{{ $price->image }}" class="img-fluid" alt="img not found">
                            </div>
                            <div class="tp-project-text">
                                <div class="tp-project-text-content">
                                    <span class="tp-project-subtitle">{{$price->getCategory->name}}</span>
                                    <h4 class="tp-project-title"><a href="project-details.html">{{ $price->title }} - 
                                    <strong style="font-size:21px;">
                                                         {{ number_format($price->price, 2, ',', '.') }} ₺ </strong>
                                    </a></h4>
                                </div>
                                <div class="tp-project-text-icon">
                                    <a href="project-details.html"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                     @endforeach
                        

                    </div>
                </div>
            </div>
        </section>
        <!-- project area end here -->

        


          
       
<div class="hizlibuton">
    <div class="hb-ana">
      <i class="fas fa-headphones-alt"></i>
    </div>

    <div class="hb-erisim">

      <div class="hb-sube">
        <h2>Nevşehir</h2>
        <div class="d-flex">
          <a href="tel:+905064425252" target="_blank" title="Nevşehir Kuru Temizleme Telefon" class="hb-ic d-flex justify-content-center align-items-center">
            <i class="bi bi-phone"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=+905064425252" target="_blank" title="Nevşehir Kuru Temizleme Whatsapp" class="hb-ic d-flex justify-content-center align-items-center" rel="noreferrer">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="https://g.page/saripapatya?share" target="_blank" title="Nevşehir Kuru Temizleme Lokasyon" class="hb-ic d-flex justify-content-center align-items-center" rel="noreferrer">
            <i class="bi bi-geo-alt-fill"></i>
          </a>
        </div>
      </div>
      
      <!--
      <div class="hb-sube">
        <h2>BALAT</h2>
        <div class="d-flex">
          <a href="tel:+905417445252" target="_blank" title="Papatya Bursa Kuru Temizleme BALAT Şube Telefon" class="hb-ic d-flex justify-content-center align-items-center" rel="noreferrer">
            <i class="bi bi-phone"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=+905417445252" target="_blank" title="Papatya Bursa Kuru Temizleme BALAT Şube Whatsapp" class="hb-ic d-flex justify-content-center align-items-center" rel="noreferrer">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="https://www.google.com/maps/place/Papatya+Kuru+Temizleme+BALAT/@40.2580189,28.9462064,18.75z/data=!4m5!3m4!1s0x14ca13c917caa563:0x3f48d458d8deb591!8m2!3d40.2580649!4d28.9466611" target="_blank" title="Papatya Bursa Kuru Temizleme BALAT Şube Lokasyon" class="hb-ic d-flex justify-content-center align-items-center" rel="noreferrer">
            <i class="bi bi-geo-alt-fill"></i>
          </a>
        </div>
      </div>

     -->
      
    </div>
</div>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
<style>
            
            @charset "UTF-8";

        :root{

        --genel-font: "Open Sans", sans-serif;
        --menu-font: "Open Sans", sans-serif;
        --logo-font: "Comfortaa", sans-serif;
        --slayt-font: "Nunito Sans", sans-serif;

        --ana: #075f33;
        --alt: #fbe106;

        --beyaz: #ffffff;
        --bg-beyaz: #ffffff;
        --cer-beyaz: #ffffff;
        --gri: rgba(0,0,0,0.7);
        
        --yesil1: #1a512e;
        --yesil2: #63a91f;
        --yesil3: #5aaa82;
        --yesil4: #ddffee;

        --sari1: #ffef6c;
        --sari2: #f9faee;
        --sari3: #ffea3a;

        --mavi1: #d7eaea;
        --mavi2: #eefafa;
        --mavi3: #10a7c1;
        --mavi4: #c3d6d9;

        --usty: 95px;
        --ustbg: linear-gradient(314deg, #63a91f 0%, #1a512e 74%);

        --menuy: 50px;

        --golge1: 0px 3px 20px 0px rgba(0, 6, 91, 0.10);
        --golge2: 3px 7px 14px -8px rgba(0,0,0,0.27);

        }



        /* ####
        #
        # HIZLI BUTON
        #
        ####
        */
        .hizlibuton {
            position: fixed;
            width: 120px;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            height: auto;
        }

        /* ANA BUTON */
        .hizlibuton .hb-ana {
            position: absolute;
            width: 50px;
            height: 50px;
            background-image: var(--ustbg);
            bottom: 0;
            border-radius: 50%;
            left: 0;
            right: 0;
            margin: auto;
            color: white;
            line-height: 50px;
            text-align: center;
            font-size: 23px;
            z-index: 100;
            cursor: pointer;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        .hizlibuton:hover .hb-ana {
            -webkit-transform: translatey(5px);
                    transform: translatey(5px);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        /* ERİŞİM PANELİ */
        .hizlibuton .hb-erisim{
            display: none;
            margin-bottom: 45px;
        }
        .hizlibuton:hover .hb-erisim{
            display: block;
        }
        
        /* ŞUBE */
        .hizlibuton > .hb-erisim > .hb-sube {
            padding: 10px 0px 10px 0px;
            opacity: 0;
        }
        .hizlibuton > .hb-erisim > .hb-sube h2{
            font-size: 1rem;
            font-weight: 700;
            background-color: var(--ana);
            color: var(--beyaz);
            border-radius: 10px 10px 10px 10px;
            text-align: center;
            margin: 0px 0px 6px 0px;
            padding: 2px 3px 2px 3px;
        }
        
        /* ŞUBE */
        .hizlibuton .hb-ic {
            position: relative;
            display: block;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            margin: auto;
            color: var(--beyaz);
            text-align: center;
            font-size: 1.4rem;
            z-index: 0;
            opacity: 0;
            -webkit-transform: translateY(100px);
                    transform: translateY(100px);
        }

        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(1) {
            -webkit-animation: come-in 0.4s forwards 0.1s;
                    animation: come-in 0.4s forwards 0.1s;
        }
        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(1) .hb-ic:nth-child(1) {
            -webkit-animation: come-in 0.4s forwards 0.2s;
                    animation: come-in 0.4s forwards 0.2s;
        }
        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(1) .hb-ic:nth-child(2) {
            -webkit-animation: come-in 0.4s forwards 0.4s;
                    animation: come-in 0.4s forwards 0.4s;
        }
        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(1) .hb-ic:nth-child(3) {
            -webkit-animation: come-in 0.4s forwards 0.4s;
                    animation: come-in 0.4s forwards 0.4s;
        }

        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(2) {
            -webkit-animation: come-in 0.4s forwards 0.45s;
                    animation: come-in 0.4s forwards 0.45s;
        }
        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(2) .hb-ic:nth-child(1) {
            -webkit-animation: come-in 0.4s forwards 0.55s;
                    animation: come-in 0.4s forwards 0.55s;
        }
        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(2) .hb-ic:nth-child(2) {
            -webkit-animation: come-in 0.4s forwards 0.7s;
                    animation: come-in 0.4s forwards 0.7s;
        }
        .hizlibuton:hover .hb-erisim .hb-sube:nth-child(2) .hb-ic:nth-child(3) {
            -webkit-animation: come-in 0.4s forwards 0.7s;
                    animation: come-in 0.4s forwards 0.7s;
        }
        
        .hizlibuton .hb-ic:nth-child(1) {
            background: #FF9800;
        }
        .hizlibuton .hb-ic:nth-child(2) {
            background: #4CAF50;
        }
        .hizlibuton .hb-ic:nth-child(3) {
            background: #42A5F5;
        }
        @-webkit-keyframes come-in {
            0% {
            -webkit-transform: translatey(100px);
                    transform: translatey(100px);
            opacity: 0;
            }
            30% {
            -webkit-transform: translateX(-50px) scale(0.4);
                    transform: translateX(-50px) scale(0.4);
            }
            70% {
            -webkit-transform: translateX(0px) scale(1.2);
                    transform: translateX(0px) scale(1.2);
            }
            100% {
            -webkit-transform: translatey(0px) scale(1);
                    transform: translatey(0px) scale(1);
            opacity: 1;
            }
        }
        @keyframes come-in {
            0% {
            -webkit-transform: translatey(100px);
                    transform: translatey(100px);
            opacity: 0;
            }
            30% {
            -webkit-transform: translateX(-50px) scale(0.4);
                    transform: translateX(-50px) scale(0.4);
            }
            70% {
            -webkit-transform: translateX(0px) scale(1.2);
                    transform: translateX(0px) scale(1.2);
            }
            100% {
            -webkit-transform: translatey(0px) scale(1);
                    transform: translatey(0px) scale(1);
            opacity: 1;
            }
        }



        /* ####
        #
        # BUTON
        #
        ####
        */
        .btn,
        .btn:focus,
        .btn:hover
        {
            border-radius: 30px 30px 30px 30px;
            transition:  all .2s ease-in-out;
            box-shadow: 0px 0px 0px !important;
            outline: 0 !important;
        }

        .btn-primary,
        .btn-primary:focus{
            background-color: var(--ana);
            color: var(--beyaz) !important;
            border: 1px solid var(--yesil2);
        }
        .btn-primary:hover{
            background-color: var(--yesil2);
            color: var(--beyaz) !important;
            border: 1px solid var(--yesil4);
        }

        .btn-secondary,
        .btn-secondary:focus{
            background-color: var(--alt);
            color: var(--ana) !important;
            border: 1px solid var(--sari1);
        }
        .btn-secondary:hover{
            background-color: var(--sari1);
            color: var(--ana) !important;
            border: 1px solid var(--alt);
        }

        .btn-light,
        .btn-light:focus{
            background-color: var(--bs-light);
            color: var(--ana) !important;
            border: 1px solid var(--bs-light);
        }
        .btn-light:hover{
            background-color: var(--bs-gray-200);
            color: var(--ana) !important;
            border: 1px solid var(--bs-light);
        }

        .btn-dark,
        .btn-dark:focus{
            background-color: var(--bs-dark);
            color: var(--beyaz) !important;
            border: 1px solid var(--bs-dark);
        }
        .btn-dark:hover{
            background-color: var(--bs-gray-dark);
            color: var(--beyaz) !important;
            border: 1px solid var(--bs-dark);
        }

        .btn-success,
        .btn-success:focus{
            background-color: var(--yesil2);
            color: var(--beyaz) !important;
            border: 1px solid var(--yesil2);
        }
        .btn-success:hover{
            background-color: var(--yesil3);
            color: var(--yesil4) !important;
            border: 1px solid var(--yesil3);
        }

        .btn-info,
        .btn-info:focus{
            background-color: var(--mavi3);
            color: var(--beyaz) !important;
            border: 1px solid var(--mavi3);
        }
        .btn-info:hover{
            filter: brightness(1);
        }

        .btn-warning,
        .btn-warning:focus{
            background-color: var(--alt);
            color: var(--ana) !important;
            border: 1px solid var(--sari1);
        }
        .btn-warning:hover{
            background-color: var(--sari1);
            color: var(--ana) !important;
            border: 1px solid var(--alt);
        }



 </style>


@endsection        