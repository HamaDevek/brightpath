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
                                <h5>Lat's Tock</h5>
                                <h1>Contact</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-contact">
                    <div class="container-fluid">
                        <style>
                            .google-maps iframe {
                                /* position: absolute; */
                                top: 0;
                                left: 0;
                                width: 100% !important;
                                height: 500px !important;
                            }
                        </style>

                        <div class="google-maps">

                            <iframe
                        src="{{json_decode($contact->image)}}"
                                width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>

                    <div class="container section-margin">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box-info-contact">
                                    <h3>{{$contact->title}}</h3>
                                    <h5>Visit our studio at</h5>
                                    <p>{!!$contact->desc!!}</p>

                                    <ul>
                                        <li>
                                            <span>Phone</span>
                                            <a href="#">{{$contact->button}}</a>
                                        </li>
                                        <li>
                                            <span>Email</span>
                                            <a href="#">{{$contact->link}}</a>
                                        </li>
                                        <li>
                                            <span>Address</span>
                                            <a href="#">{!!$contact->extra!!}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-box">
                                    <h3>Write A Comment</h3>
                                    <form id="contact-form" class="form" method="post" action="contact.php"
                                        data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">
                                            <div class="form-group">

                                                <div class="entry">
                                                    <label>What's your name?</label>
                                                    <input id="form_name" type="text" name="name"
                                                        placeholder="Type your name" required="required"
                                                        data-error="name is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="entry">
                                                    <label>What's your email address?</label>
                                                    <input id="form_email" type="email" name="email"
                                                        placeholder="Type your Email Address" required="required"
                                                        data-error="Valid email is required.">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <div class="entry">
                                                    <label>What's up?</label>
                                                    <textarea id="form_message" class="form-control" name="message"
                                                        placeholder="Tell us about you and the world"
                                                        required="required"
                                                        data-error="Please,leave us a message."></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="image-zoom" data-dsn="parallax">
                                                <button>Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
            @include('website.layouts.footer')
        </div>
    </main>

    @include('website.layouts.script')


</body>

</html>