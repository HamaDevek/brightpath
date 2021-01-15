<!DOCTYPE html>
<html lang="en-US">
@include('website.layouts.header')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>
    @include('website.layouts.nav')
    <main class="main-root">
        <div id="dsn-scrollbar">
            @yield('content')



            @include('website.layouts.footer')

        </div>
    </main>
    @include('website.layouts.script')

</body>

</html>