@extends('front.layouts.master')
@section('title','Hizmetler')
@section('title2',$services->title)
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
                                        <li class="trail-item trail-begin"><span><a href="{{route('service')}}">@yield('title')</a></span></li>
                                        <li class="trail-item trail-end"><span>@yield('title2')</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="tp-service-details-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="tp-faqs-left">
                            <div class="tp-faqs-left-sidebar tp-services-sidebar mb-30">
                                <h4 class="tp-faqs-left-sidebar-title">Hizmetler</h4>
                                <ul>
                                    @foreach($servic as $servi)
                                    <li><a href="{{route('service.single',[$servi->slug])}}">{{ $servi->title }} <i class="fas fa-arrow-circle-right"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="tp-service-details">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="tp-service-details-img mb-30">
                                        <img src="{{asset('front/')}}/assets/img/service/{{ $services->image }}" alt="img-bulunamadı">
                                    </div>
                                </div>
                            </div>
                            <h2 class="tp-section-title heading-color-black pt-10 mb-20">{!! $services->title !!}</h2>
                            <p class="mb-20">{!! $services->content !!}</p>
                            <h3 class="tp-service-details-subtitle">{!! $services->title !!}</h3>
                            <p class="mb-40">{!! $services->content1 !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




@endsection        