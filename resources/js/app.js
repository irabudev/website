require('./bootstrap');
const Swiper = require('./plugins/swiper.min');
// require('./main');

(function ($) {
    "use strict";
    var windows = $(window);
        /*=========================================
    =            Preloader active            =
    ===========================================*/
    windows.on('load', function(){
        $(".preloader-activate").removeClass('preloader-active');
    });


    jQuery(window).on('load', function(){
		setTimeout(function(){
        jQuery('.open_tm_preloader').addClass('loaded');
        }, 1000);
	});


    /*==========================================
    =            mobile menu active            =
    ============================================*/

    $("#mobile-menu-trigger").on('click', function(){
        $("#mobile-menu-overlay").addClass("active");
        $body.addClass('no-overflow');
    });

    $("#mobile-menu-close-trigger").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });

    $(".offcanvas-navigation--onepage ul li a").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });

    var carouselSlider = new Swiper('.service-slider__project-active', {
        slidesPerView : 1,
        slidesPerGroup: 1,
        loop: true,
        speed: 1000,
        autoplay: false,
        spaceBetween : 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination-service',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            1499:{
                slidesPerView : 1
            },
            1200:{
                slidesPerView : 1
            },

            991:{
                slidesPerView : 1
            },

            767:{
                slidesPerView : 1

            },

            575:{
                slidesPerView : 1
            }
        }
    });

})(jQuery);
