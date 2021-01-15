@extends('website.layouts.app')
@section('content')
<div class="dsn-slider demo3" data-dsn-header="project">
    <div class="dsn-root-slider" id="dsn-hero-parallax-img">
        <div class="slide-inner">
            <div class="swiper-wrapper">
                @foreach ($slider as $key=>$value)
                <div class="slide-item swiper-slide">
                    <div class="slide-content">
                        <div class="slide-content-inner">
                            <div class="project-metas">
                                <div class="project-meta-box project-work cat">
                                    {{-- <span>Photography</span> --}}
                                </div>
                            </div>

                            <div class="title-text-header">
                                <div class="title-text-header-inner">
                                    <a href="project-8.html" class="effect-ajax" data-dsn-ajax="slider">
                                        {{$value->title}}
                                    </a>
                                </div>
                            </div>

                            <p>{!!$value->desc!!}</p>

                            <div class="link-custom">
                                <a href="{{$value->link}}" class="image-zoom effect-ajax" data-dsn="parallax"
                                    data-dsn-ajax="slider">
                                    <span>{{$value->button}}</span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="image-container">
                        <div class="image-bg cover-bg"
                            data-image-src="{{ isset($value->image) ? secure_asset('storage/'.json_decode($value->image,true)[0]):secure_asset('image/placeholder-image.jpg') }}"
                            data-overlay="2">
                            <img src="{{ isset($value->image) ? secure_asset('storage/'.json_decode($value->image,true)[0]):secure_asset('image/placeholder-image.jpg') }}"
                                alt="">
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="dsn-slider-content"></div>


    <div class="nav-slider">
        <div class="swiper-wrapper" role="navigation">
            @foreach ($slider as $key=>$value)
            <div class="swiper-slide">
                <div class="image-container">
                    <div class="image-bg cover-bg"
                        data-image-src="{{ isset($value->image) ? secure_asset('storage/'.json_decode($value->image,true)[0]):secure_asset('image/placeholder-image.jpg') }}"
                        data-overlay="2">
                    </div>
                </div>
                <div class="content">
                    <p>{{++$key}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <section class="footer-slid" id="descover-holder">
        {{--<div class="main-social">
            <div class="social-icon">
                <div class="social-btn">
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 23.2">
                            <path
                                d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div> 
            <ul class="social-network">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
--}}
        <div class="control-num">
            <span class="sup active">01</span>
        </div>
        <div class="control-nav">
            <div class="prev-container" data-dsn="parallax">
                <svg viewBox="0 0 40 40">
                    <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                </svg>
            </div>

            <div class="next-container" data-dsn="parallax">
                <svg viewBox="0 0 40 40">
                    <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                </svg>
            </div>
        </div>
    </section>

</div>

<div class="wrapper">

    <section class="intro-about section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="intro-content-text">

                        <h2 data-dsn-grid="move-section" data-dsn-move="-30" data-dsn-duration="100%"
                            data-dsn-opacity="1.2" data-dsn-responsive="tablet">
                            {{$article[0]->title}}
                        </h2>

                        <p data-dsn-animate="text">{!!$article[0]->desc!!}</p>

                        <h6 style="visibility: hidden !important" data-dsn-animate="text"></h6>
                        <small style="visibility: hidden !important" data-dsn-animate="text"></small>

                        <div style="visibility: hidden !important" class="exper">
                            <div class="numb-ex">
                                <span class="word" data-dsn-animate="text"></span>
                            </div>

                            <h4 data-dsn-animate="up"><br></h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="background-mask">
            <div class="background-mask-bg"></div>
            <div class="img-box">
                <div class="img-cent" data-dsn-grid="move-up">
                    <div class="img-container">
                        <img data-dsn-y="30%" src="{{secure_asset('storage/'.json_decode($article[0]->image,true)[0])}}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="our-services-2 section-margin">
        <div class="container">
            <div class="one-title" data-dsn-animate="up">
                <div class="title-sub-container">
                    <p class="title-sub">Our Servcies</p>
                </div>
                <h2 class="title-main">New Branding Agency</h2>
            </div>

            <div class="row">
                @foreach ($service as $key => $value)
                <div class="col-md-4">
                    <div class="services-item">
                        <div class="corner corner-top"></div>
                        <div class="corner corner-bottom"></div>
                        <div class="icon">
                            <img src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="">
                        </div>
                        <div class="services-header">
                            <h3>{{strtoupper( $value->title)}}</h3>
                        </div>
                        <p>{!! $value->desc !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <div class="box-seat box-seat-full section-margin">
        <div class="container-fluid">
            <div class=" " data-dsn="video" data-overlay="4">
                <video class="image-bg cover-bg dsn-video" poster="{{secure_asset('storage/'.json_decode($article[1]->image,true)[0])}}" autoplay
                    loop muted>
                   
                    <source src="{{secure_asset('storage/'.json_decode($article[1]->image,true)[1])}}" type="video/mp4" type="video/mp4">
                    {{-- <source src="http://theme.dsngrid.com/video/droow.webm" type="video/webm"> --}}
                </video>
            </div>
            <div class="pro-text">
                <h3>{{$article[1]->title}}</h3>
                <p>{!!$article[1]->desc!!}</p>
                @if (isset($article[1]->link))
                <div class="link-custom">
                    <a class="image-zoom effect-ajax" href="{{$article[1]->link}}" data-dsn="parallax">
                        <span>{{$article[1]->button}}</span>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <section class="our-work work-under-header  section-margin" data-dsn-col="3">
        <div class="container">
            <div class="one-title">
                <div class="title-sub-container">
                    <p class="title-sub">Our Work</p>
                </div>
                <h2 class="title-main">Creative Portfolio Designs</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="work-container">
                        <div class="slick-slider">
                            @foreach ($work as $key=>$value)

                            <div class="work-item slick-slide">
                                <img class="has-top-bottom"
                                    src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="">
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <a href="{{route('work',$value->id)}}" data-dsn-grid="move-up" class="effect-ajax">
                                       
                                        <h5 class="cat"></h5>
                                        <h4>{{$value->title}}</h4>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=" box-gallery-vertical section-margin section-padding" data-dsn="color">
        <div class="mask-bg"></div>
        <div class="container">
            <div class="row align-items-center h-100">
                <div class="col-lg-6 ">
                    <div class="box-im" data-dsn-grid="move-up">
                        <img class="has-top-bottom"
                            src="{{secure_asset('storage/'.json_decode($article[2]->image,true)[0])}}" alt=""
                            data-dsn-move="20%">
                    </div>
                </div>

                <div class="col-lg-6">


                    <div class="box-info">

                        <div class="vertical-title" data-dsn-animate="up">
                            <h2>{{$article[2]->title}}</h2>
                        </div>

                        <p data-dsn-animate="up">{{$article[2]->desc}}</p>

                        <div class="link-custom" data-dsn-animate="up">
                            <a class="image-zoom effect-ajax" href="{{$article[2]->link}}" data-dsn="parallax">
                                <span>{{$article[2]->button}}</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- 
    <section class="client-see section-margin">
        <div class="container">
            <div class="inner">
                <div class="left">
                    <h2 class="title" data-dsn-grid="move-section" data-dsn-move="-60" data-dsn-duration="100%"
                        data-dsn-opacity="1" data-dsn-responsive="tablet">
                        <span class="text">Feedback from our clients.</span>
                    </h2>
                </div>

                <div class="items">
                    <div class="bg"></div>
                    <div class="slick-slider">
                        <div class="item">
                            <div class="quote">
                                <p>"The Brief team has been sincerely committed to
                                    designing great communication around our projects. Our customers love
                                    their
                                    creative work - and so do we!"</p>
                            </div>
                            <div class="bottom">
                                <div class="avatar">
                                    <img src="assets/img/avatar/1.jpg" alt="">
                                </div>
                                <div class="label">
                                    <div class="cell">- Helen Ginsberg, CEO of Treasure Island</div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="quote">
                                <p>"Stage direction, music, ballet, workshops, backstage, the GTG presents
                                    the
                                    first
                                    episode of the series “Les Indes galantes en création"</p>
                            </div>
                            <div class="bottom">
                                <div class="avatar">
                                    <img src="assets/img/avatar/2.jpg" alt="">
                                </div>
                                <div class="label">
                                    <div class="cell">- Helen Ginsberg, CEO of Treasure Island</div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="quote">
                                <p>"The Brief team has been sincerely committed to
                                    designing great communication around our projects. Our customers love
                                    their
                                    creative work - and so do we!"</p>
                            </div>
                            <div class="bottom">
                                <div class="avatar">
                                    <img src="assets/img/avatar/3.jpg" alt="">
                                </div>
                                <div class="label">
                                    <div class="cell">- Helen Ginsberg, CEO of Treasure Island</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="our-news section-margin">
        <div class="container">
            <div class="one-title" data-dsn-animate="up">
                <div class="title-sub-container">
                    <p class="title-sub">Latest News</p>
                </div>
                <h2 class="title-main">Latest and greatest post</h2>
            </div>
            <div class="custom-container">
                <div class="slick-slider">


                    @foreach ($news as $key=>$value)
                    <div class="item-new slick-slide">
                        <div class="image" data-overlay="2">
                            <img src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="">
                        </div>
                        <div class="content">
                            <div class="background"></div>
                            <h5>{{$value->title}}</h5>

                            <div class="cta">
                                {{-- LINK NEWS --}}
                                <a href="{{route('news',$value->id)}}">{!!$value->button!!}</a>
                            </div>

                            <p>{!!$value->desc!!}</p>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section>

    <section class="brand-client section-margin">
        <div class="container">
            <div class="one-title" data-dsn-animate="up">
                <div class="title-sub-container">
                    <p class="title-sub">Our social medias</p>
                </div>
                <h2 class="title-main">Your successful, our reputation</h2>
            </div>

            <div class="wapper-client">
                @foreach ($social as $key=>$value)
                <div class="logo-box">
                    <img src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="">

                    <div class="info">
                        <div class="content">
                            <div class="icon">
                                <i class="fas fa-plus"></i>
                            </div>

                            <div class="entry">
                                <div>
                                    <h5>{{$value->title}}</h5>
                                    <a href="{{$value->link}}">{{$value->button}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contact-up section-margin section-padding">
        <div class="container">
            <div class="c-wapp">
                <a href="#" class="effect-ajax">
                    <span class="hiring">
                        {{$article[3]->title}}
                    </span>
                    <span class="career">
                        {!!$article[3]->desc!!}
                    </span>
                </a>
            </div>
        </div>
    </section>

</div>

@endsection