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
                                <h5>Our Work</h5>
                                <h1>portfolio</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-work">
                    <div class="container ">
                        <div class="box-title" data-dsn-title="cover">
                            <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                        </div>

                        <div class="filterings">
                            <div class="filtering-wrap">
                                <div class="filtering">
                                    <div class="selector"></div>


                                </div>
                            </div>
                        </div>

                        <div class="projects-list gallery">
                            @foreach ($work as $key=>$value)
                            <div class="item brand">
                                <a href="{{route('work',$value->id)}}" class="effect-ajax" data-dsn-ajax="work"
                                    data-dsn-grid="move-up">
                                    <img class="has-top-bottom"
                                        src="{{secure_asset('storage/'.json_decode($value->image,true)[0])}}" alt="" />
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <h5 class="cat"></h5>
                                        <h4>{{$value->title}}</h4>
                                        <span><span>Veiw Project</span></span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
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


                @include('website.layouts.footer')

            </div>

    </main>
    @include('website.layouts.script')
</body>

</html>