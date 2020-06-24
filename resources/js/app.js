require('./bootstrap');
const Swiper = require('./plugins/swiper.min');

$(document).ready(function () {
    $(".break-first").html(function () {
        var text = $(this).text().trim().split(" ");
        var first = text.shift();
        return (text.length > 0 ? first + "<br> " : first) + text.join(" ");
    });

    // Scroll certain amounts from current position
    window.scrollBy({
        top: 0, // could be negative value
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

    /*=========================================
    =            Preloader             =
    ===========================================*/
    windows.on('load', function () {
    });


    $(window).on('load', function () {
        $(".preloader-activate").removeClass('preloader-active');

        setTimeout(function () {
            jQuery('.open_tm_preloader').addClass('loaded');
        }, 1000);

    });

      /*==========================================
    =            mobile menu active            =
    ============================================*/

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

    /*Close When Click Outside*/
    $body.on('click', function(e){
        var $target = e.target;
        if (!$($target).is('.mobile-menu-overlay__inner') && !$($target).parents().is('.mobile-menu-overlay__inner') && !$($target).is('#mobile-menu-trigger') && !$($target).is('#mobile-menu-trigger i')){
            $("#mobile-menu-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
        if (!$($target).is('.search-overlay__inner') && !$($target).parents().is('.search-overlay__inner') && !$($target).is('#search-overlay-trigger') && !$($target).is('#search-overlay-trigger i')){
            $("#search-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
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

