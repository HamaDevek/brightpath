<!DOCTYPE html>
<html lang="en">
@include('settings.layouts.header')
@php
if(isset( $_COOKIE['nav_toggle']))
$toggle = $_COOKIE['nav_toggle'] == 'open' ? '' : 'sb-sidenav-toggled';
@endphp

<body class="sb-nav-fixed {{$toggle ?? ''}}">
    @include('settings.layouts.nav')
    <div id="layoutSidenav">
        @include('settings.layouts.sidebar')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('settings.layouts.footer')
        </div>
    </div>
    @include('settings.layouts.script')
</body>

</html>