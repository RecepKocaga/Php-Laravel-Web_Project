
@extends('front.layouts.master')
@section('title','Blog')
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
                                        <li class="trail-item trail-begin"><span><a href="{{route('blog')}}">@yield('title')</a></span></li>
                                        <li class="trail-item trail-end"><span>{{ $blogs->blogCategory->name }}</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="blog-details-area pt-120 pb-70">
            <div class="container">
                <div class="tp-custom-container-box">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="blog__details--wrapper mr-50 mb-50">
                                <div class="ablog ablog-4 mb-55">
                                    <div class="ablog__img wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <img src="{{asset('front/')}}/assets/img/blog/{{ $blogs->image }}" class="img-fluid" alt="img">
                                    </div>
                                    <div class="ablog__text ablog__text4">
                                        <div class="ablog__meta ablog__meta4">
                                            <ul>
                                                <li><a href="#"><i class="far fa-calendar-check"></i> {{ \Carbon\Carbon::parse($blogs->created_at)->locale('tr')->isoFormat('D MMMM YYYY') }} </a></li>
                                                <li><a href="#"><i class="far fa-eye"></i> {{ $blogs->hit }} </a></li>
                                                <li><a href="#"><i class="far fa-list"></i> {{ $blogs->blogCategory->name }} </a></li>
                                            </ul>
                                        </div>
                                        <h3 class="ablog__text--title4 mb-20"><a href="blog-details.html">{!! $blogs->title !!}</a></h3>
                                        <p class="mb-30">{!! $blogs->content !!}</p>

                                        <h4 class="blog__details--subtitle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{!! $blogs->title1 !!}</h4>
                                        <p class="mb-30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{!! $blogs->content1 !!}</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="ablog__sidebar">
                                <div class="widget mb-45 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h3 class="sidebar__widget--title mb-30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yeni İçerikler</font></font></h3>
                                   @foreach($blogss as $blo)
                                    <div class="sidebar--widget__post mb-20">
                                        <div class="sidebar__post--thumb">
                                            <a href="{{route('blog.single',[$blo->slug])}}">
                                                <div class="post__img" data-background="{{asset('front/')}}/assets/img/blog/{{$blo->image}}"
                                                 style="background-image: url(&quot;{{asset('front/')}}/assets/img/blog/{{$blo->image}}&quot;);"></div>
                                            </a>
                                        </div>
                                        <div class="sidebar__post--text">
                                            <h4 class="sidebar__post--title"><a href="{{route('blog.single',[$blo->slug])}}"><font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{!! $blo->title !!} </font></font><br><font style="vertical-align: inherit;"></font></a></h4>
                                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            {{ \Carbon\Carbon::parse($blo->created_at)->locale('tr')->isoFormat('D MMMM YYYY') }}
                                        </font></font></span>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>

                                <div class="widget mb-40 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h3 class="sidebar__widget--title mb-25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kategoriler</font></font></h3>
                                    <div class="sidebar--widget__cat mb-20">
                                        <ul>
                                            @foreach($categor as $catego)
                                            <li><a href="{{route('blog.category',$catego->slug)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{  $catego->name }} (<span class="text-danger">{{$catego->blogCount()}}</span>)</font></font></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget mb-25 wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                    <h3 class="sidebar__widget--title mb-30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etiketler</font></font></h3>
                                    <div class="sidebar--widget__tag mb-20">
                                       @foreach($categor as $catego)
                                        <a href="{{route('blog.category',$catego->slug)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $catego->name }}</font></font></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection