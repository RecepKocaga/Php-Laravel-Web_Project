@extends('front.layouts.master')
@section('title','İletişim')
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
                                        <li class="trail-item trail-begin"><a href="{{route('homepage')}}">Anasayfa</a></li>
                                        <li class="trail-item trail-end"><span><a href="{{route('contact')}}">@yield('title')</a></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tp-map-area pt-120 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49867.214135781505!2d34.673745991506586!3d38.63276173060769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a6e4566fe8181%3A0x59d53f1bc98af56c!2zTmV2xZ9laGlyLCBOZXbFn2VoaXIgTWVya2V6L05ldsWfZWhpcg!5e0!3m2!1str!2str!4v1687762675030!5m2!1str!2str"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="tp-contact-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title-wrapper-two mb-50 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Kuru Temizleme, Çamaşır Yıkama ve Ütüleme</h5>
                            <h2 class="tp-section-title heading-color-black">Size bir telefon kadar uzaktayız! <br>Bizimle iletişime geç </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row custom-mar-20">
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Adres</h4>
                                        <p>{{ $headers->location }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Telefon</h4>
                                        <a href="tel:{{ $headers->phone }}">{{ $headers->phone }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".8s" style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Email</h4>
                                        <a href="mailto:{{ $headers->email }}"><span class="__cf_email__" data-cfemail="c3aaada5ac83b7aba6aea6b3b6b1a6eda0acae">[{{ $headers->email }}]</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                    <form  method="post" action="{{route('post.contact')}}" role="form">
                        @csrf
                        <div class="tp-contact-form">
                            <div class="row custom-mar-20">
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" name="full_name" placeholder="Ad Soyad" required>
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="email" name="email"  placeholder="Email Adresi" required>
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" name="phone"  placeholder="Telefon" required>
                                    </div>
                                </div>
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field select-field-arrow mb-20">
                                        <select name="subject" required>
                                            <option value="">Konu Seçin</option>
                                            <option value="Kuru Temizleme">Kuru Temizleme</option>
                                            <option value="Camaşır Yıkama">Camaşır Yıkama</option>
                                            <option value="Ütüleme">Ütüleme</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <textarea name="message"  placeholder="Mesajınız" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field">
                                        <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Mesaj Gönder</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>

@endsection