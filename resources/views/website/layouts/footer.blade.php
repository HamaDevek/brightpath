<footer class="footer">
    <div class="container">
        <div class="footer-links p-relative">
            <div class="row">
                

                <div class="col-md-4 dsn-col-footer">
                    <div class="footer-block col-menu">
                        <h4 class="footer-title">Navigation</h4>
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('works')}}">Work</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-4 dsn-col-footer">
                    <div class="footer-block col-contact">
                        <h4 class="footer-title">Contact</h4>
                        <p><strong>T</strong> <span>:</span> {{$contact->button}}</p>
                        <p class="over-hidden"><strong>E</strong> <span>:</span><a class="link-hover"
                                data-hover-text=" {{$contact->link}}" href="#"> {{$contact->link}}</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-4 dsn-col-footer">
                    <div class="col-address">
                        <h4 class="footer-title">Address</h4>

                        <p>{{$contact->extra}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="text-center">
                <p>© {{date('Y')}} BrightPath</p>
                {{-- <div class="copright-text over-hidden">Designed by <a class="link-hover"
                        data-hover-text="IronGeek" href="#" target="_blank">IronGeek</a>
                </div> --}}
            </div>
        </div>
    </div>
</footer>