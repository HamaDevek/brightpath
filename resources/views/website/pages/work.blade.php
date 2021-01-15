<!DOCTYPE html>
<html lang="en-US">
@include('website.layouts.header')

<style>
    iframe {
        /* override other styles to make responsive */
        width: 100% !important;
        height: 510px !important;
    }

    @media only screen and (max-width: 600px) {
        iframe {
            /* override other styles to make responsive */
            width: 100% !important;
            height: auto !important;
        }
    }
</style>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>

    @include('website.layouts.nav')

    <main class="main-root">
        <div id="dsn-scrollbar">

            <header>
                <div class="fullscreen-slider">
                    <div class="swiper-container" data-dsn-header="project">
                        <div id="descover-holder" class="descover-holder">
                            <span class="letter">discover</span>
                            <div class="scroll-down__line">
                                <span></span>
                            </div>
                            <span class="letter">scroll to</span>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="slider-item swiper-slide">
                                <div class="bg parallax-move-element" id="dsn-hero-parallax-img">
                                    <div class="bg-image cover-bg" data-overlay="5" data-dsn-ajax="img"
                                        data-image-src="{{secure_asset('storage/'.json_decode($data->image,true)[0])}}">
                                    </div>
                                </div>
                                <div class="container h-100">
                                    <div id="dsn-hero-parallax-title" class="content-inner h-100">
                                        <div class="cat">
                                            <!-- <span>Sports</span> -->
                                        </div>

                                        <div class="content">
                                            <div class="slider-header slider-header-top">
                                                <h1 data-dsn-animate="ajax">{{$data->title}}</h1>
                                            </div>
                                            <div id="dsn-hero-parallax-fill-title"
                                                class="slider-header slider-header-bottom">
                                                <h1 data-dsn-animate="ajax">{{$data->title}}</h1>
                                            </div>
                                        </div>
                                        <div class="slider-descr">
                                            <!-- <h5 data-dsn-animate="ajax"><strong>Play Fast </strong> - August 4th 2016
                                            </h5> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="wrapper">
                <div class="root-project">
                    <div class="container intro-project section-margin">
                        <div class="intro-text text-center">
                            <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                                data-dsn-duration="170%" data-dsn-move="0%">
                                {{$data->title}}
                            </div>
                            <div class="inner">
                                <h2 data-dsn-animate="text">{!!$data->desc!!}</h2>
                                <center>{!!$data->more!!}</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                {{-- <div class="root-project">
                    @php
                    $isFirst = false;
                    @endphp
                    @foreach (json_decode($data->image,true) as $value)
                    @if ( $isFirst )
                    <div class="container-fluid">
                        <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                            <img src="{{secure_asset('storage/'.$value)}}" alt="" data-dsn-y="30%"
                data-dsn-scale="1.01">
            </div>
        </div>
        @endif
        @php
        $isFirst = true;
        @endphp
        @endforeach


        </div> --}}
        <section class="our-work work-under-header  section-margin" data-dsn-col="3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="work-container">
                            <div class="slick-slider">
                                @foreach (json_decode($data->image,true) as $value)

                                <div class="work-item work-item2  slick-slide">
                                    <img class="has-top-bottom" src="{{secure_asset('storage/'.$value)}}" alt="">
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <a data-dsn-grid="move-up" href="{{secure_asset('storage/'.$value)}}"
                                            class=" example-image-link" data-lightbox="example-1">
                                            <h5 class="cat"></h5>
                                            <span><span>Veiw Image</span></span>
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
        @isset($next)
        <div class="next-project" data-dsn-footer="project">
            <div id="dsn-next-parallax-img" class="bg">
                <div class="bg-image cover-bg" data-overlay="2"
                    data-image-src="{{secure_asset('storage/'.json_decode($next->image,true)[0])}}"></div>
            </div>

            <div id="dsn-next-parallax-title" class="project-title">
                <a href="{{route('work',$next->id)}}" class="effect-ajax" data-dsn-ajax="next-project">
                    <div class="title-text-header">
                        <div class="title-text-header-inner">
                            <span>{{$next->title}}</span>
                        </div>
                    </div>
                    <div class="sub-text-header">
                        <h5>Next Project</h5>
                    </div>
                </a>
            </div>
        </div>
        @endisset

        </div>
        @include('website.layouts.footer')

        </div>
    </main>
    @include('website.layouts.script')
</body>

</html>