<div class="preloader">
    <div class="preloader-after"></div>
    <div class="preloader-before"></div>
    <div class="preloader-block">
        <div class="title">BrightPath</div>
        <div class="percent">0</div>
        <div class="loading">loading...</div>
    </div>
    <div class="preloader-bar">
        <div class="preloader-progress"></div>
    </div>
</div>
<div class="dsn-nav-bar">
    <div class="site-header">
        <div class="extend-container">
            <div class="inner-header">
                <div class="main-logo">
                    <a href="/">
                        <img class="dark-logo" src="/favicon-96x96.png" alt="" />
                        <img class="light-logo" src="/favicon-96x96.png" alt="" />
                    </a>
                </div>
            </div>
            <nav class=" accent-menu main-navigation">
                <ul class="extend-container">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('works')}}">Work</a></li>
                    <li><a href="{{route('newses')}}">News</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-top header-top-hamburger">
        <div class="header-container">
            <div class="logo main-logo">
                <a href="/">
                    <img class="dark-logo" src="/favicon-96x96.png" alt="" />
                    <img class="light-logo" src="/favicon-96x96.png" alt="" />
                </a>
            </div>

            <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                <div class="icon-m">
                    <i class="menu-icon-close fas fa-times"></i>
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>

                <div class="text-menu">
                    <div class="text-button">Menu</div>
                    <div class="text-open">Open</div>
                    <div class="text-close">Close</div>
                </div>
            </div>

            <div class="nav">
                <div class="inner">
                    <div class="nav__content">

                    </div>
                </div>
            </div>
            <div class="nav-content">
                <div class="inner-content">
                    <address class="v-middle">
                        {{$contact->extra}}
                        <br>
                        {{$contact->button}}
                        <br>
                        {{$contact->link}}
                    </address>
                </div>

            </div>
        </div>
    </div>
</div>