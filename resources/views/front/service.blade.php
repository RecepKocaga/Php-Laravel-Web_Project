@extends('front.layouts.master')
@section('title','Hizmetler')
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

        
        <!-- service area start here -->
        <section class="tp-service-area-three pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En İyi Hizmetlerimiz</font></font></h5>
                            <h2 class="tp-section-title heading-color-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kaliteli Temizlik </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sizi Çok Mutlu Ediyor</font></font></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                  @foreach($services as $service)
                    <div class="col-lg-6">
                        <div class="tp-service-three tp-service-four mb-30 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="tp-service-three-img">
                                <img src="{{asset('front/')}}/assets/img/service/{{ $service->image }}" class="img-fluid" alt="img-bulunamadı">
                                <div style=" background:yellow; height:105px;" class="tp-service-three-img-icon">
                                <img src="{{asset('front/')}}/assets/img/hizmet/{{ $service->icon }}" alt="{{ $service->title }}" style="">
                                </div>
                                <div class="tp-service-three-img-overlay">
                                    <div style="width:100px;height:115px;" class="tp-service-three-img-overlay-icon">
                                    <img  src="{{asset('front/')}}/assets/img/hizmet/{{ $service->icon }}" alt="{{ $service->title }}" style="">
                                    </div>
                                </div>
                            </div>
                            <div class="tp-service-three-text fix">
                                <h4 class="tp-service-three-title mb-20 heading-color-black-with-hover"><a href="{{route('service.single',[$service->slug])}}">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{!! $service->title !!}</font></font></a></h4>
                                <p class="mb-30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{!! $service->content !!}</font></font></p>
                                <div class="tp-service-three-text-btn">
                                    <a href="{{route('service.single',[$service->slug])}}" class="yellow-btn"><i class="flaticon-enter"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Daha fazla bilgi edin</font></font></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach

                </div>
            </div>
        </section>
        <!-- service area end here -->
@endsection