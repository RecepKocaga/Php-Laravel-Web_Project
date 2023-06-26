</main>

<footer class="theme-dark-bg">
    <div class="tp-footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-widget footer-col-1 mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="tp-footer-info">
                            <div class="tp-footer-info-logo mb-35">
                                <a href="index.html"><img src="{{asset('front/')}}/assets/img/logo/{{ $headers->image1 }}" class="img-fluid" alt="img not found"></a>
                            </div>
                            <h4 class="mb-15"><a href="tel:{{ $headers->phone }}">{{ $headers->phone }}</a></h4>
                            <h6 class="mb-15"><i class="fal fa-envelope-open"></i><a href="mailto:{{ $headers->email }}">
                            <span class="__cf_email__" data-cfemail="6e070008012e0c0f1d070d1a060b030b400d0103">[{{ $headers->email }}]</span></a></h6>
                            <h6 class="mb-20"><i class="fal fa-map-marker-alt"></i> {{ $headers->location }}</h6>
                            
                            <div class="tp-footer-info-social">
                                <a href="https://www.facebook.com/{{ $headers->facebook }}" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/{{ $headers->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/{{ $headers->instegram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://wa.me/{{ $headers->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-widget footer-col-2 mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <h4 class="tp-footer-widget-title mb-35">Hizmetlerimiz</h4>
                        <ul>
                            @foreach($servicess as $serv)
                            <li><a href="{{route('service.single',[$serv->slug])}}" title="{{ $serv->title }} ">{{ $serv->title }}</a></li>
                            @endforeach
                          </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-widget footer-col-3 mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <h4 class="tp-footer-widget-title mb-35">Sektörel Çözümler</h4>
                        <ul>
                            <li><a href="#" title="Nevşehir Kuru Temizleme ">Kreş & Huzurevi</a></li>
                            <li><a href="#" title="Nevşehir Kuru Temizleme ">Kamu Faliyetleri</a></li>
                            <li><a href="#" title="Nevşehir Kuru Temizleme ">Oteller</a></li>
                          </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-widget footer-col-4 mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <h4 class="tp-footer-widget-title mb-40">Çalışma Saatlerimiz</h4>
                        <div class="tp-footer">
                        <ul>
                          <li><a href="#">Pazartesi - Cuma: 08:30 - 21:30</a></li>
                          <li><a href="#">Cumartesi: 08:30 - 21:30</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-copyright-area bg-green-light z-index pt-45 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-copyright text-center">
                        <p>Tüm Hakları Saklıdır. © 2023-2023 <span class="text-warning">Nevşehir Kuru Temizleme</span></p>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    


<!-- JS here -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('front/')}}/assets/js/vendor/jquery.min.js"></script>
<script src="{{asset('front/')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front/')}}/assets/js/swiper-bundle.js"></script>
<script src="{{asset('front/')}}/assets/js/venobox.min.js"></script>
<script src="{{asset('front/')}}/assets/js/backToTop.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.meanmenu.min.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('front/')}}/assets/js/ajax-form.js"></script>
<script src="{{asset('front/')}}/assets/js/wow.min.js"></script>
<script src="{{asset('front/')}}/assets/js/main.js"></script>
</body>


<!-- Mirrored from wphix.com/template/klenar-prev/klenar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 13:26:27 GMT -->
</html>