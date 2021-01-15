<!DOCTYPE html>
<html lang="en-US">

    @include('website.layouts.header')


<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>
    @include('website.layouts.nav')

    <main class="main-root">
        <div id="dsn-scrollbar">
            <header>
                <div class="header-single-post" data-dsn-header="project">
                    <div class="post-parallax-wrapper" data-overlay="3">
                        <img id="dsn-hero-parallax-img" class="w-100 has-top-bottom" src="{{secure_asset('storage/'.json_decode($news->image,true)[0])}}" alt=""
                            data-dsn-header="blog" data-dsn-ajax="img">
                    </div>
                    <div class="container">

                        <div class="inner-box m-section">
                            <div class="post-info">
                            <a href="#" class="blog-post-date dsn-link">{{date('d F, Y', strtotime($news->created_at))}}</a>
                                <div class="blog-post-cat dsn-link">
                                    {{-- <a href="#">Uncategorized</a> --}}
                                </div>
                            </div>

                            <h3 class="title-box mt-10">{{$news->title}}</h3>
                        </div>

                    </div>

                </div>
            </header>

            <div class="wrapper">
                <div class="container">
                    <div class="news-content">
                        <div class="news-content-inner">
                            <div class="News-socials-wrapper">

                                <div>

                                    <div class="cat">
                                        {{-- <h5 class="title-caption">Tagged with: </h5>
                                        <a href="#"><span>Blog</span></a>
                                        <a href="#"><span>Creative</span></a>
                                        <a href="#"><span>Design</span></a> --}}
                                    </div>
                                </div>

                                <div>
                                    <div class="post-share">
                                        {{-- <h5 class="title-caption">Share with:</h5>
                                        <ul>
                                            <li><a href="#" target="_blank">Facebook</a></li>
                                            <li><a href="#" target="_blank">Twitter</a></li>
                                            <li><a href="#" target="_blank">Linkedin</a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <p>
                                    {!!$news->desc!!}
                                </p>

                                


                                <img class="w-100" src="{{secure_asset('storage/'.json_decode($news->image,true)[0])}}" alt="">

                                <p>
                                    {!!$news->more!!}
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

               @isset($next)
               <section class="contact-up next-post-up section-margin section-padding">
                <div class="container">
                    <div class="c-wapp">
                        <a href="{{route('news',$next->id)}}" class="effect-ajax">
                            <span class="hiring">
                               {{$next->title}}
                            </span>
                            <span class="career">
                                Next Post
                            </span>
                        </a>
                    </div>
                </div>
            </section>
                   
               @endisset

            </div>
            @include('website.layouts.footer')

        </div>
    </main>

    @include('website.layouts.script')

</body>

</html>