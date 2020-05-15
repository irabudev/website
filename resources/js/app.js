require('./bootstrap');
const Swiper = require('./plugins/swiper.min');
const WOW = require('./plugins/wow.min');
// require('./main');

$(document).ready(function () {

    $(".preloader-activate").removeClass('preloader-active');
    $(".open_tm_preloader").addClass('loaded');



    /*=======================================================
    Smooth scrolling trick
    https://css-tricks.com/snippets/jquery/smooth-scrolling/
    =========================================================*/

    window.scroll({
        top: 2500,
        left: 0,
        behavior: 'smooth'
    });

    // Scroll certain amounts from current position
    window.scrollBy({
        top: 100, // could be negative value
        left: 0,
        behavior: 'smooth'
    });
    /*=======================================================
    End of Smooth scrolling trick
    https://css-tricks.com/snippets/jquery/smooth-scrolling/
    =========================================================*/

    var windows = $(window);
    var screenSize = windows.width();
    var sticky = $('.header-sticky');
    var $body = $('body');

    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        var headerHeight = sticky.height();

        if (screenSize >= 320) {
            if (scroll < headerHeight) {
                sticky.removeClass('is-sticky');
            } else {
                sticky.addClass('is-sticky');
            }
        }

    });
    /*----------  Scroll to top  ----------*/
    function scrollToTop() {
        var $scrollUp = $('#scroll-top'),
            $lastScrollTop = 0,
            $window = $(window);

        $window.on('scroll', function () {
            var st = $(this).scrollTop();
            if (st > $lastScrollTop) {
                $scrollUp.removeClass('show');
            } else {
                if ($window.scrollTop() > 200) {
                    $scrollUp.addClass('show');
                } else {
                    $scrollUp.removeClass('show');
                }
            }
            $lastScrollTop = st;
        });

        $scrollUp.on('click', function (evt) {
            $('html, body').animate({
                scrollTop: 0
            }, 600);
            evt.preventDefault();
        });
    }
    scrollToTop();


    $("#mobile-menu-trigger").on('click', function () {
        $("#mobile-menu-overlay").addClass("active");
        $body.addClass('no-overflow');
    });

    $("#mobile-menu-close-trigger").on('click', function () {
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });

    $(".offcanvas-navigation--onepage ul li a").on('click', function () {
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });


    var brandLogoSlider = new Swiper('.brand-logo-slider__container', {
        slidesPerView: 8,
        loop: true,
        speed: 1000,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
        },

        breakpoints: {
            1499: {
                slidesPerView: 6
            },

            991: {
                slidesPerView: 4
            },

            767: {
                slidesPerView: 3

            },

            575: {
                slidesPerView: 2
            }
        }
    });

    var carouselSlider = new Swiper('.service-slider__project-active', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 5000
        },
        spaceBetween: 0,
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
            1499: {
                slidesPerView: 1
            },
            1200: {
                slidesPerView: 1
            },

            991: {
                slidesPerView: 1
            },

            767: {
                slidesPerView: 1

            },

            575: {
                slidesPerView: 1
            }
        }
    });
});


// (function ($) {

//     var windows = $(window);

//      /*===============================
//     =         Wow Active            =
//     ================================*/
//     //
//     window.wow = new WOW.WOW({
//         live: false
//     });

//     window.wow.init();
//         /*=========================================
//     =            Preloader active            =
//     ===========================================*/
//     windows.on('load', function(){
//         $(".preloader-activate").removeClass('preloader-active');
//     });


//     jQuery(window).on('load', function(){
// 		setTimeout(function(){
//         jQuery('.open_tm_preloader').addClass('loaded');
//         }, 1000);
// 	});



// })(jQuery);


window.Vue = require('vue');

Vue.component('language-switcher', require('./LanguageSwitcher.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
