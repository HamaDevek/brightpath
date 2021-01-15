<!DOCTYPE html>
<html lang="en-US">

@include('website.layouts.header')


<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>

    @include('website.layouts.nav')

    <main class="main-root">
        <div id="dsn-scrollbar">
            <header>
                <div class="header-hero header-hero-2 ">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-12">
                                <div class="contenet-hero">
                                    <h1>{{$about->title}}</h1>
                                    <p>{!!$about->desc!!}</p>
                                    <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img
                                            src="assets/img/arrow-right-dark.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-about">
                    <div class="box-seat box-seat-full">
                        <div class="container-fluid">
                            <div class="inner-img" data-dsn-grid="move-up">
                                <img src="{{secure_asset('storage/'.json_decode($about->image,true)[0])}}" alt=""
                                    data-dsn-y="30%" data-dsn-scale="1">
                            </div>
                            <div class="pro-text">
                                <h3 data-dsn-animate="up">{!!$about->extra!!}</h3>
                                <p data-dsn-animate="up">{!!$about->more!!}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- <section class="intro-about section-margin section-padding hidden">
                        <div class="mask-bg"></div>
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="box-im">
                                        <div class="cover-bg" data-image-src="assets/img/skills.jpg"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="small-title">
                                        <span class="counter">01</span>
                                        <h5>About Us</h5>
                                    </div>

                                    <div class="content">
                                        <h5>Speaking of employee happiness -</h5>
                                        <h3>Our two goals are employee happiness and client happiness</h3>
                                        <p>We won the Best Workplace award from Great Place to Work 3 times in Finland,
                                            and
                                            once in all of
                                            Europe.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}

                    <section class="our-services section-margin">
                        <div class="container">
                            <div class="one-title" data-dsn-animate="up">
                                <div class="title-sub-container">
                                    <p class="title-sub">OUR SERVCIES</p>
                                </div>
                                <h2 class="title-main">New Branding Agency</h2>
                            </div>

                            <div class="row">

                                @foreach ($service as $kye=>$value)


                                <div class="col-md-6">
                                    <div class="services-item">
                                        <div class="line-before"></div>
                                        <h4 class="subtitle">{{$value->title}}</h4>
                                        <p>{!!$value->desc!!}</p>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </section>

                    <section class="our-team section-margin section-padding">
                        <div class="container">
                            <div class="one-title" data-dsn-animate="up">
                                <div class="title-sub-container">
                                    <p class="title-sub">our Works</p>
                                </div>
                                <h2 class="title-main">Creative Portfolio Designs</h2>
                            </div>

                            <div class="custom-container">
                                <div class="slick-slider">
                                    @foreach ($work as $key=>$value)
                                    <div class="team-item slick-slide">
                                        <div class="box-img">
                                            <img src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="">
                                        </div>

                                        <div class="box-content">
                                            <h4>{{$value->title}}</h4>
                                            <p><a href="{{route('work',$value->id)}}">View Project</a></p>
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

                </div>

                <section class="contact-up section-margin section-padding">
                    <div class="container">
                        <div class="c-wapp">
                            <a href="contact.html" class="effect-ajax">
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
            @include('website.layouts.footer')

        </div>

    </main>
    @include('website.layouts.script')

</body>

</html>