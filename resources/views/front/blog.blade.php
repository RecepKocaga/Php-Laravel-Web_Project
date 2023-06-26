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
                                        <li class="trail-item trail-begin"><a href="{{route('homepage')}}">deeeee Anasayfa</a></li>
                                        <li class="trail-item trail-end"><span><a href="{{route('blog')}}">@yield('title')</a></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>


<section class="blog-sidebar-area pt-120 pb-110">
            <div class="container">
                <div class="tp-custom-container-box">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="ablog__sidebar--wrapper mr-50">
                            @if(count($blogs)>0)
                               @foreach($blogs as $blog)
                                <div class="ablog ablog-4 mb-55 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="ablog__img">
                                        <img src="{{asset('front/')}}/assets/img/blog/{{ $blog->image }} " class="img-fluid" alt="img">
                                    </div>
                                    <div class="ablog__text ablog__text4">
                                        <div class="ablog__meta ablog__meta4">
                                            <ul>
                                                <li><a href="blog-details-2.html" far="" fa-calendar-check"=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                {{ \Carbon\Carbon::parse($blog->created_at)->locale('tr')->isoFormat('D MMMM YYYY') }}</font></font></a></li>
                                                <li><a href="#"><i class="far fa-eye"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $blog->hit }}</font></font></a></li>
                                                <li><a href="#"><i class="far fa-list"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $blog->blogCategory->name }}</font></font></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="ablog__text--title4 mb-20"><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{!! $blog->title !!}  </font></font></a></h3>
                                        <p class="mb-30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{!!str_limit($blog->content,120)!!}  </font></font></p>
                                        <div class="ablog__btn4">
                                            <a href="{{route('blog.single',[$blog->slug])}}" class="theme-btn"><i class="flaticon-enter"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Devamını oku</font></font></a>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                              @else

                               <div class="ablog ablog-4 mb-55 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="ablog__text ablog__text4">
                                        <h3 class="ablog__text--title4 mb-20 text-danger"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arama yaptığınız kelime göre sonuç bulunamadı  </font></font></a></h3>

                                    </div>
                                </div>

                             @endif

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="ablog__sidebar">
                                <div class="widget wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="sidebar--widget__search mb-45">
                                    <form role="search" method="GET" action="{{route('search')}}" name="s">
                                            <input type="text" name="s" value="" placeholder="Arama" required="">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="basic-pagination mt-10 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <ul>
                                    <li class="active">
                                        {{$blogs->links('pagination::bootstrap-4')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection