/*----------------------------------------------------
 /* Custom js scripts
 /* ------------------------------------------------- */

//
// Small Logo Upon Scroll
//
jQuery(document).ready(function($) {
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.navbar-brand').addClass('small-brand');
        } else {
            jQuery('.navbar-brand').removeClass('small-brand');
        }
    });
});
//
////////////////////////////////////////////////////////////////////////////////////////////////////

// smoothscroll invoke

// $(function() {
//         $.srSmoothscroll({
//             // defaults
//             step: 70,
//             speed: 200,
//             ease: 'swing',
//             target: $('body'),
//             container: $(window)
//         })
//     });

///////////////////////////////////////////////////////////////////////////////
//
// Slick home carousel
//
(function(document, window, $) {
    $(document).ready(function() {
        $(".home-carousel").slick({
            autoplay: true,
            autoplaySpeed: 3000,
            // useCSS: true,
            // cssEase: 'ease',
            infinite: true,
            easing: 'easeOutQuint',
            draggable: false,
            mobileFirst: true,
            responsive: true,
            speed: 1000,
            accessibility: false,
            arrows: false,
            centerPadding: 0,
            edgeFriction: 0,
            fade: true,
            slide: 'div'

        });
    });
})(document, window, jQuery);

// Slick offer carousel
//
(function(document, window, $) {
    $(document).ready(function() {
        $(".offer-carousel").slick({
            // centerMode: true,
            // focusOnSelect: true,
            mobileFirst: true,
            accessibility: true,
            // arrows: true,
            // prevArrow: '<a><i class="fa fa-arrow-left fa-lg"></i></a>',
            // nextArrow: '<a><i class="fa fa-arrow-right fa-lg"></i></a>',
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<a><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-arrow-left fa-stack-1x"></i></span></a>',
            nextArrow: '<a><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-arrow-right fa-stack-1x"></i></span></a>',
            slide: 'div',
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 800,
            lazyLoad: 'ondemand',
            adaptiveHeight: true,
            cssEase: 'ease',
            // easing: 'easeOutQuint',
            // draggable: false,
            mobileFirst: true,
            responsive: [
            {
                breakpoint: 1400,
                settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                }
            },
            {
                breakpoint: 544,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                }
            },
            {
                breakpoint: 0,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                }
            },
                        ]
        });
    });
})(document, window, jQuery);
//
///////////////////////////////////////////////////////////////////////////////

// prevent default on home-offers anchors
jQuery(document).ready(function($) {
    $("#home-offers .home-offer a").on('click', function(event) {
        event.preventDefault();
    });
});

//
///////////////////////////////////////////////////////////////////////////////
//

jQuery(function($) {
    jQuery('.dropdown').hover(function() {
            jQuery(this).addClass('open');
        },
        function() {
            jQuery(this).removeClass('open');
        });
});

