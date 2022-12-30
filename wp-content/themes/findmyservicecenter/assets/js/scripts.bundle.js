"use strict";

(function($) {
    var ScriptsBundle = ScriptsBundle || {};
    var $window = $(window);
    // var position = $(window).scrollTop();

    $(function() {
        ScriptsBundle = {
            init: function() {
                ScriptsBundle.darkMode();
                ScriptsBundle.scrollAnimation();
                ScriptsBundle.scrollToTop();
                ScriptsBundle.menutoggle();
                ScriptsBundle.sliderBanner();
                ScriptsBundle.sliderTestimonials();
                ScriptsBundle.sliderClients();
                ScriptsBundle.sliderFeatures();
                ScriptsBundle.accordion();
                ScriptsBundle.responsiveTabs();
                ScriptsBundle.popupModal();

            },
            darkMode: function() {
                if (getCookie('darkmode') === 'on') {
                    $('body').addClass('dark-mode');
                    $('.darkmode__toggle span').html('Off');
                }
                $(".darkmode__toggle").click(function() {
                    $('body').toggleClass('dark-mode');
                    if ($('body').hasClass('dark-mode')) {
                        setCookie("darkmode", 'on', 1);
                        $('.darkmode__toggle span').html('On');
                    } else {
                        setCookie("darkmode", 'off', 1);
                        $('.darkmode__toggle span').html('Off');
                    }
                    return false;
                });
            },
            scrollAnimation: function() {
                var height = $(window).scrollTop();
                if (height > 200) {
                    $(".site-header").addClass("sticky animate__animated animate__fadeInDown");
                } else {
                    $(".site-header").removeClass("sticky animate__animated animate__fadeInDown");
                }
                if ($window.scrollTop() >= 200) {
                    $(".scroll__top").fadeIn("slow");
                } else {
                    $(".scroll__top").fadeOut("slow");
                }
            },
            scrollToTop: function() {
                $(".scroll__top").click(function() {
                    $("html, body").animate({ scrollTop: 0 }, 500);
                    return false;
                });
            },

            menutoggle: function() {
                if (jQuery("#site-navigation").length === 0) {
                    return false;
                }
                jQuery(".menu-toggle").on("click", function() {
                    jQuery("body").toggleClass("nav-on");
                    return false;
                });
            },

            sliderBanner: function() {
                if (jQuery(".banner__slider").length === 0) {
                    return false;
                }
                $('.banner__slider').slick({
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev pull-left"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m1.76 5.134 3.887-3.887a.71.71 0 0 0 0-1.027.709.709 0 0 0-1.027 0l-4.4 4.4a.71.71 0 0 0 0 1.027l4.4 4.4c.147.147.367.22.513.22a.79.79 0 0 0 .513-.22.71.71 0 0 0 0-1.027L1.76 5.133Z"></path></svg></button>',
                    nextArrow: '<button type="button" class="slick-next pull-right"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m6.013 4.987-4.4-4.4a.71.71 0 0 0-1.027 0 .709.709 0 0 0 0 1.027L4.473 5.5.586 9.387a.71.71 0 0 0 0 1.027c.147.147.293.22.513.22.22 0 .367-.073.514-.22l4.4-4.4a.71.71 0 0 0 0-1.027Z"></path></svg></button>',
                    responsive: [{
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                        }
                    }]
                });
            },

            sliderTestimonials: function() {
                if (jQuery(".testimonials__slider").length === 0) {
                    return false;
                }
                $('.testimonials__slider').slick({
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev pull-left"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m1.76 5.134 3.887-3.887a.71.71 0 0 0 0-1.027.709.709 0 0 0-1.027 0l-4.4 4.4a.71.71 0 0 0 0 1.027l4.4 4.4c.147.147.367.22.513.22a.79.79 0 0 0 .513-.22.71.71 0 0 0 0-1.027L1.76 5.133Z"></path></svg></button>',
                    nextArrow: '<button type="button" class="slick-next pull-right"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m6.013 4.987-4.4-4.4a.71.71 0 0 0-1.027 0 .709.709 0 0 0 0 1.027L4.473 5.5.586 9.387a.71.71 0 0 0 0 1.027c.147.147.293.22.513.22.22 0 .367-.073.514-.22l4.4-4.4a.71.71 0 0 0 0-1.027Z"></path></svg></button>',
                    responsive: [{
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                        }
                    }]
                });
            },

            sliderClients: function() {
                if (jQuery(".clients__slider").length === 0) {
                    return false;
                }
                $('.clients__slider').slick({
                    slidesToShow: 5,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev pull-left"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m1.76 5.134 3.887-3.887a.71.71 0 0 0 0-1.027.709.709 0 0 0-1.027 0l-4.4 4.4a.71.71 0 0 0 0 1.027l4.4 4.4c.147.147.367.22.513.22a.79.79 0 0 0 .513-.22.71.71 0 0 0 0-1.027L1.76 5.133Z"></path></svg></button>',
                    nextArrow: '<button type="button" class="slick-next pull-right"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m6.013 4.987-4.4-4.4a.71.71 0 0 0-1.027 0 .709.709 0 0 0 0 1.027L4.473 5.5.586 9.387a.71.71 0 0 0 0 1.027c.147.147.293.22.513.22.22 0 .367-.073.514-.22l4.4-4.4a.71.71 0 0 0 0-1.027Z"></path></svg></button>',
                    responsive: [{
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            slidesToShow: 3,
                        },
                        breakpoint: 359,
                        settings: {
                            arrows: false,
                            slidesToShow: 2,
                        }
                    }]
                });
            },

            sliderFeatures: function() {
                if (jQuery(".features__slider").length === 0) {
                    return false;
                }
                $('.features__slider').slick({
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev pull-left"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m1.76 5.134 3.887-3.887a.71.71 0 0 0 0-1.027.709.709 0 0 0-1.027 0l-4.4 4.4a.71.71 0 0 0 0 1.027l4.4 4.4c.147.147.367.22.513.22a.79.79 0 0 0 .513-.22.71.71 0 0 0 0-1.027L1.76 5.133Z"></path></svg></button>',
                    nextArrow: '<button type="button" class="slick-next pull-right"><svg class="latest-section-stories__arrow__34aiD" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 11"><path d="m6.013 4.987-4.4-4.4a.71.71 0 0 0-1.027 0 .709.709 0 0 0 0 1.027L4.473 5.5.586 9.387a.71.71 0 0 0 0 1.027c.147.147.293.22.513.22.22 0 .367-.073.514-.22l4.4-4.4a.71.71 0 0 0 0-1.027Z"></path></svg></button>',
                    responsive: [{
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                        }
                    }]
                });
            },

            responsiveTabs: function() {
                if (jQuery(".responsive--tabs").length === 0) {
                    return false;
                }
                var $tabs = $(".responsive--tabs");
                $tabs.responsiveTabs({
                    startCollapsed: "accordion",
                    collapsible: "accordion",
                });
            },

            accordion: function() {
                if (jQuery(".accordian__block").length === 0) {
                    return false;
                }
                $(".accordian__block h3").click(function() {
                    $('.accordian__block h3').removeClass('active')
                    $('.accordian__block .accordian__content').slideUp();
                    $(this).addClass('active')
                    $(this).next().slideDown();
                });
            },
            popupModal: function() {
                var dataModal = $("[data-modal]");
                var close = $("[data-close]");
                dataModal.on("click", function() {
                    var id = $(this).data("modal");
                    $("body").addClass("modal-open");
                    $(id).addClass("show");
                    if (id == '#author__contact') {
                        $("#contactemail").val(jQuery("#user_email").text());
                        $("#contactname").val(jQuery("#user_name").text());
                        $("#authoremail").val(jQuery("#author_email").text());
                    }
                    return false;
                });

                close.on("click", function() {
                    $("body").removeClass("modal-open");
                    $(".modal-container").removeClass("show");
                    return false;
                });
            },
        };

        $(document).ready(ScriptsBundle.init);
        $window.on("scroll", ScriptsBundle.scrollAnimation);
        //$window.on("resize", ScriptsBundle.mobileMenu);
    });

    $(window).ready(function($) {
        $("body").addClass("ready");
        new WOW().init();
    });

    $window.on("load", function() {

    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
})(jQuery);