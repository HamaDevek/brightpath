/*!
 * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
(function ($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function (e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
        var toggle = document.cookie.split("; ").find(row => row.startsWith('nav_toggle') ?? '');
            // console.log(toggle);

        if (typeof toggle === 'undefined') {
            document.cookie = 'nav_toggle=close';
        } else {
           
            if (toggle.split('=')[1] == 'close') {
                document.cookie = 'nav_toggle=open';
            } else {
                document.cookie = 'nav_toggle=close';
            }
        }
        // if (toggle == false) {
        // }
        // if (toggle == 'untoggle') {
        //     document.cookie = 'nav_toggle=toggle';
        // }
        // if (toggle == 'toggle') {
        //     document.cookie = 'nav_toggle=untoggle';
        // }
        // if (typeof get_cookie('nav_toggle') !== 'undefined') {
        //     console.log(1);
        //     document.cookie = 'nav_toggle=false';
        // }else{
        //     console.log(2);
        // }

        // document.cookie = 'nav_toggle='+(!);
    });
})(jQuery);
