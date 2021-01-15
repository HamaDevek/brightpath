<!DOCTYPE html>
<html lang="en-US">

@include('website.layouts.header')


<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>

    @include('website.layouts.nav')

    <main class="main-root">
        <div id="dsn-scrollbar">
            <header>
                <div class="container header-hero">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contenet-hero">
                                <h5>NEWS & IDEAS</h5>
                                <h1>Our Blog</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-blog">
                    <div class="container">
                        @foreach ($news as $key=>$value)

                        <article class="post-list-item">
                            <figure>
                                <a class="image-zoom effect-ajax" href="{{route('news',$value->id)}}" data-dsn-animate="up">
                                    <img src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="">
                                </a>
                            </figure>
                            <div class="post-list-item-content">
                                <div class="post-info-top">
                                    <div class="post-info-date">
                                        <span>{{date('d F, Y', strtotime($value->created_at))}}</span>
                                    </div>

                                    <div class="post-info-category">
                                        {{-- <a href="#">Design</a> --}}
                                    </div>
                                </div>
                                <h3>
                                    <a href="{{route('news',$value->id)}}">{{$value->title}}</a>
                                </h3>

                                <div class="link-custom" data-dsn-animate="up">
                                    <a class="image-zoom effect-ajax" href="{{route('news',$value->id)}}" data-dsn="parallax">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>

            </div>
            @include('website.layouts.footer')

        </div>
    </main>

    @include('website.layouts.script')
</body>

</html>