<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
            
                <div class="sb-sidenav-menu-heading">Part Of Website</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
                    aria-expanded="false" aria-controls="collapseSlider">
                    <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>
                    Slider
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSlider" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('dashboard.data','slider')}}">Sliders</a>
                        <a class="nav-link" href="{{route('dashboard.new','slider')}}">New Slider</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService"
                    aria-expanded="false" aria-controls="collapseService">
                    <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                    Service
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseService" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('dashboard.data','service')}}">Services</a>
                        <a class="nav-link" href="{{route('dashboard.new','service')}}">New Service</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOurWork"
                    aria-expanded="false" aria-controls="collapseOurWork">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    Work
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseOurWork" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('dashboard.data','work')}}">Our Work</a>
                        <a class="nav-link" href="{{route('dashboard.new','work')}}">New Work</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocialMedia"
                    aria-expanded="false" aria-controls="collapseSocialMedia">
                    <div class="sb-nav-link-icon"><i class="fas fa-share-alt"></i></div>
                    Social Media
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSocialMedia" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('dashboard.data','social')}}">Our Social Media</a>
                        <a class="nav-link" href="{{route('dashboard.new','social')}}">New Social Media</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews"
                    aria-expanded="false" aria-controls="collapseNews">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    News & Blog
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseNews" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('dashboard.data','news')}}">All News</a>
                        <a class="nav-link" href="{{route('dashboard.new','news')}}">New News</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Home Page
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{route('dashboard.update',1)}}">First Article</a>
                        <a class="nav-link" href="{{route('dashboard.update',2)}}">Second Article</a>
                        <a class="nav-link" href="{{route('dashboard.update',3)}}">Third Article</a>
                        <a class="nav-link" href="{{route('dashboard.update',4)}}">Fourth Article</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Other Pages</div>
                <a class="nav-link" href="{{route('dashboard.update',5)}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                    About
                </a>
                <a class="nav-link" href="{{route('dashboard.article',6)}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                    Contact
                </a>
              
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{auth()->user()->username}}
        </div>
    </nav>
</div>