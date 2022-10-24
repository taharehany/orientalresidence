(function ($) {
    "use strict";
    jQuery(document).on('ready', function () {

        //MixitUp
        $('#portfolio').mixItUp();

        $('.gallery_carousel').owlCarousel({
            loop: true,
            margin: 25,
            items: 2,
            center: true,
            autoplay: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            nav: true,
            dots: true,
            lazyLoad: true,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                767: {
                    items: 1,
                    nav: false,
                },
                992: {
                    items: 1,
                    nav: false
                },
                1200: {
                    items: 2,
                    nav: false
                },
                1600: {
                    items: 2,
                    nav: true
                }
            }
        });


        var PATH = {};
        /** NAV COLLAPSE **/
        PATH.MenuClose = function () {
            $('.navbar-nav .nav-link').on('click', function () {
                var toggle = $('.navbar-toggler').is('visible');
                if (toggle) {
                    $('.navbar-collapse').collapse('hide');
                }
            });
        }

        /** FIXED HEADER **/
        PATH.HeaderFixed = function () {
            var varHeaderFix = $(window).scrollTop() >= 60,
                $navbar = $('.navbar');
            if (varHeaderFix) {
                $navbar.addClass('fixed-header');
            } else {
                $navbar.removeClass('fixed-header');
            }
        }

        /* Window on scroll function */
        $(window).on("scroll", function () {
            PATH.HeaderFixed();

        });
    });
}(jQuery));