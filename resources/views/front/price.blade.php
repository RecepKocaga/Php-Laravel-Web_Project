@extends('front.layouts.master')
@section('title','Fiyatlar')
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

        

        <div class="tp-prjects-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-prjects-tab-menu mb-60">
                            <ul class="nav justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tümü</font></font></button>
                                </li>
                                @foreach($category as $categor)
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile{{ $categor->id }}-tab" data-bs-toggle="tab" data-bs-target="#profile{{ $categor->id }}" type="button" role="tab" aria-controls="profile{{ $categor->id }}" 
                                  aria-selected="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $categor->name }}</font></font></button>
                                </li>
                                @endforeach
                               
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="row pb-50">
                    <div class="col-12">
                        <div class="tp-prjects-tab-content">
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">

                                    @foreach($prices as $pric)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="{{asset('front/')}}/assets/img/project/{{$pric->image}}" class="img-fluid" alt="resim bulunamadı">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        {{$pric->getCategory->name}} </font></font></span>
                                                        <h4 class="tp-project-title"><a href="{{route('price.single',[$pric->slug])}}"><font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{$pric->title}}- <strong style="font-size:21px;">
                                                         {{ number_format($pric->price, 2, ',', '.') }} ₺ </strong></font></font></a></h4>
                                                    </div>
                                                    <div class="tp-project-text-icon">
                                                        <a href="{{route('price.single',[$pric->slug])}}"><i class="fal fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
   

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
                                    <div class="row">
                                      @foreach($prices as $pric)
                                      @if($pric->category_id ==1)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="{{asset('front/')}}/assets/img/project/{{$pric->image}}" class="img-fluid" alt="resim bulunamadı">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        {{$pric->getCategory->name}} </font></font></span>
                                                        <h4 class="tp-project-title"><a href="{{route('price.single',[$pric->slug])}}"><font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{$pric->title}}- <strong style="font-size:21px;">
                                                         {{ number_format($pric->price, 2, ',', '.') }} ₺ </strong></font></font></a></h4>
                                                    </div>
                                                    <div class="tp-project-text-icon">
                                                        <a href="{{route('price.single',[$pric->slug])}}"><i class="fal fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                     
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                                    <div class="row">
                                      @foreach($prices as $pric)
                                      @if($pric->category_id ==2)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="{{asset('front/')}}/assets/img/project/{{$pric->image}}" class="img-fluid" alt="resim bulunamadı">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        {{$pric->getCategory->name}} </font></font></span>
                                                        <h4 class="tp-project-title"><a href="{{route('price.single',[$pric->slug])}}"><font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{$pric->title}}- <strong style="font-size:21px;">
                                                         {{ number_format($pric->price, 2, ',', '.') }} ₺ </strong></font></font></a></h4>
                                                    </div>
                                                    <div class="tp-project-text-icon">
                                                        <a href="{{route('price.single',[$pric->slug])}}"><i class="fal fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                     
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                                    <div class="row">
                                      @foreach($prices as $pric)
                                      @if($pric->category_id ==3)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="{{asset('front/')}}/assets/img/project/{{$pric->image}}" class="img-fluid" alt="resim bulunamadı">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        {{$pric->getCategory->name}} </font></font></span>
                                                        <h4 class="tp-project-title"><a href="{{route('price.single',[$pric->slug])}}"><font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{$pric->title}}- <strong style="font-size:21px;">
                                                         {{ number_format($pric->price, 2, ',', '.') }} ₺ </strong></font></font></a></h4>
                                                    </div>
                                                    <div class="tp-project-text-icon">
                                                        <a href="{{route('price.single',[$pric->slug])}}"><i class="fal fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                     
                                    </div>
                                </div>
                           
                               
                              </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tp-projects-btn d-flex justify-content-center">
                            <a href="{{ route('price') }}" class="theme-btn"><i class="flaticon-enter"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Daha Fazlasını Keşfedin</font></font></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection