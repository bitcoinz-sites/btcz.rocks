"use strict";
(function($) {
    $(window).load(function() {
        $('#status').fadeOut();
        $('#preloader').delay(1000).fadeOut('slow');
        $('body.dark-load').removeClass('dark-load');
        $('.tlt').textillate({
            selector: '.texts',
            loop: true,
            minDisplayTime: 500,
            initialDelay: 0,
            autoStart: true,
            inEffects: [],
            outEffects: ['hinge'],
            in: {
                effect: 'rollIn',
                delayScale: 0.4,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function() {}
            },
            out: {
                effect: 'fadeOutDown',
                delayScale: 0.5,
                delay: 70,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function() {}
            },
            callback: function() {},
            type: 'char'
        });
    })
    if ($(window).width() < 1160) {
        var headertp1 = $(".header-type-1");
        headertp1.addClass("page-header");
        headertp1.attr('id', 'top-nav');
    }
    $(function() {
        var masonry_layout = $(".masonry-portfolio")
        masonry_layout.imagesLoaded(function() {
            masonry_layout.isotope('layout');
        });
        masonry_layout.isotope({
            layoutMode: 'masonry',
            transitionDuration: '0.3s'
        });
    });
    $(function() {
        var scroll = $(document).scrollTop(),
            window_view = $(window),
            headerHeight = $('.page-header').outerHeight();
        window_view.on('scroll', function() {
            var winTop = window_view.scrollTop(),
                top_nav = $("#top-nav");
            if (winTop >= 150) {
                top_nav.addClass("is-sticky");
            } else {
                top_nav.removeClass("is-sticky");
            }
            $(function() {
                var y = $(this).scrollTop(),
                    top = $('.top');
                if (y > 1000) {
                    top.fadeIn('slow');
                } else {
                    top.fadeOut('slow');
                }
            });
            $(function() {
                var scrolled = $(document).scrollTop(),
                    page_header = $('.page-header');
                if (scrolled > headerHeight) {
                    page_header.addClass('off-canvas-menu');
                } else {
                    page_header.removeClass('off-canvas-menu');
                }
                if (scrolled > scroll) {
                    page_header.removeClass('fixed-tp-menu');
                } else {
                    page_header.addClass('fixed-tp-menu');
                }
                scroll = $(document).scrollTop();
            });
        })
    });
    $('ul.sf-menu').superfish({
        delay: 50,
        speed: 'normal',
        animation: {
            opacity: 'show'
        },
        animationOut: {
            opacity: 'hide'
        },
        cssArrows: true,
        disableHI: false,
        easing: 'fade',
        touchMove: false,
        swipe: false
    });
    $('.link-portfolio').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300
        },
        callbacks: {
            open: function() {
                $('html').css('margin-right', 0);
            }
        }
    });
    $(function() {
        if ($(".portfolio-items").length) {
            var a = $(".portfolio-items").isotope({
                singleMode: true,
                layout: 'masonry',
                itemSelector: ".portfolio-item",
                transitionDuration: '0.8s'
            });
            a.imagesLoaded(function() {
                a.isotope("layout");
            });
            $('#control-portfolio li').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                $('#control-portfolio li').removeClass('active');
                $(this).addClass('active');
                $('.portfolio-items').isotope({
                    filter: $(this).attr('data-filter')
                });
                return false;
            });
        }
    });
    $(function() {
        if ($(".portfolio-items-masonry").length) {
            var a = $(".portfolio-items-masonry").isotope({
                singleMode: true,
                transitionDuration: '0.8s'
            });
            a.imagesLoaded(function() {
                a.isotope("layout");
            });
            $('#control-portfolio li').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                $('#control-portfolio li').removeClass('active');
                $(this).addClass('active');
                $('.portfolio-items-masonry').isotope({
                    filter: $(this).attr('data-filter')
                });
                return false;
            });
            $(".gallery-items").isotope("on", "layoutComplete", function(a, b) {
                var b = a.length;
                $(".num-album").html(b);
            });
            var b = $(".gallery-item").length;
            $(".all-album , .num-album").html(b);
        }
    });
    $('.accordion:nth-child(1n)').accordion({
        heightStyle: 'content'
    });
    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });
    $('.img-parallax').parallax("50%", .50);
    $(function() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {} else {
            $(".heading-title > h2").animated("fadeInDown");
            $(".heading-title > p").animated("fadeInUp");
            $(".heading-title > .small-desd").animated("fadeIn");
            $(".animated-service").animated("fadeIn");
            $(".masonry-item-pr, .masonry-item").animated("fadeIn");
        }
    }());
    $('.image-modal-gallery').magnificPopup({
        type: 'inline',
        fixedContentPos: true,
        removalDelay: 100,
        closeBtnInside: true,
        preloader: true,
        mainClass: 'mfp-fade',
        callbacks: {
            open: initSliders
        }
    });
    $('.image-modal').magnificPopup({
        type: 'inline',
        fixedContentPos: true,
        removalDelay: 100,
        closeBtnInside: true,
        preloader: false,
        mainClass: 'mfp-fade'
    });

    function initSliders() {
        $('.slider-portfolio').slick({
            dots: true,
            fade: true,
            appendDots: '#dots-control-portfolio-slider',
            dotsClass: 'dots',
            autoplay: true,
            autoplaySpeed: 8000,
            autoHeight: false,
            adaptiveHeight: true,
            mobileFirst: true,
            touch: false,
            cssEase: 'linear',
            prevArrow: $('#control-portfolio-slider > .wrap-prev'),
            nextArrow: $('#control-portfolio-slider > .wrap-next'),
        });
    }
    $('.slider-wrap', this).each(function() {
        var $dots = $(this).find('#dots-control-portfolio-slider');
        var $arrows = $(this).find('#control-portfolio-slider');
        var $next = $arrows.children(".wrap-next");
        var $prev = $arrows.children(".wrap-prev");
        var $slick_slider = $(this).children(".slider-portfolio-single");
        $slick_slider.slick({
            dots: true,
            fade: true,
            appendDots: $dots,
            dotsClass: 'dots',
            autoplay: true,
            autoplaySpeed: 8000,
            autoHeight: false,
            cssEase: 'linear',
            prevArrow: $prev,
            nextArrow: $next
        });
    });
    $(function() {
        var introHeader = $('.intro'),
            window_view = $(window),
            intro = $('.intro');
        buildModuleHeader(introHeader);
        window_view.resize(function() {
            var width = Math.max(window_view.width(), window_view.innerWidth);
            buildModuleHeader(introHeader);
        });
        window_view.scroll(function() {
            effectsModuleHeader(introHeader, this);
        });

        function buildModuleHeader(introHeader) {};

        function effectsModuleHeader(introHeader, scrollTopp) {
            if (introHeader.length > 0) {
                var homeSHeight = introHeader.height();
                var topScroll = $(document).scrollTop();
                if ((introHeader.hasClass('intro')) && ($(scrollTopp).scrollTop() <= homeSHeight)) {}
                if (introHeader.hasClass('intro') && ($(scrollTopp).scrollTop() <= homeSHeight)) {
                    introHeader.css('opacity', (1 - topScroll / introHeader.height() * 1));
                }
            }
        };
    });
    $(".tabs:nth-child(1n)").tabs();
    $('.services-carousel:nth-child(1n)').slick({
        dots: true,
        dotsClass: 'dots',
        appendDots: '#dots-control-tabs',
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        infinite: true,
        arrows: false,
        slidesToShow: 4,
        responsive: [{
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('img, a').on('dragstart', function(event) {
        event.preventDefault();
    });
    $('#particles-js').particleground({
        dotColor: 'rgba(255, 255, 255, 0.40)',
        lineColor: 'rgba(255, 255, 255, 0.21)',
        parallaxMultiplier: 5,
        particleRadius: 5,
        proximity: 130,
        density: 12000
    });
    $('.masonry-container').imagesLoaded(function() {
        $('.masonry-container').isotope({
            layoutMode: 'masonry',
            itemSelector: '.masonry-item',
            transitionDuration: '0.3s'
        });
    });
    $('.background-image').each(function() {
        var url = $(this).attr('data-image');
        if (url) {
            $(this).css('background-image', 'url(' + url + ')');
        }
    });
    $("form select").selectize();
    $('.full-slider').slick({
        dots: true,
        fade: true,
        appendDots: '#dots-control-full-slider',
        dotsClass: 'dots',
        autoplay: true,
        autoplaySpeed: 8000,
        autoHeight: false,
        adaptiveHeight: true,
        mobileFirst: true,
        touch: false,
        cssEase: 'linear',
        prevArrow: $('#control-full-slider > .wrap-prev'),
        nextArrow: $('#control-full-slider > .wrap-next'),
    });
    $('.full-slider').on('afterChange', function(event, slick, currentSlide) {
        $('.slick-active .heading-title-big').removeClass('opacity-none');
        $('.slick-active .heading-title-big').addClass('animated fadeInDown');
        $('.slick-active .description').removeClass('opacity-none');
        $('.slick-active .description').addClass('animated slideInUp');
        $('.slick-active .description-slide').removeClass('opacity-none');
        $('.slick-active .description-slide').addClass('animated fadeInUp');
    });
    $('.full-slider').on('beforeChange', function(event, slick, currentSlide) {
        $('.slick-active .heading-title-big').addClass('opacity-none');
        $('.slick-active .heading-title-big').removeClass('animated fadeInDown');
        $('.slick-active .description').addClass('opacity-none');
        $('.slick-active .description').removeClass('animated slideInUp');
        $('.slick-active .description-slide').addClass('opacity-none');
        $('.slick-active .description-slide').removeClass('animated fadeInUp');
    });
    $('.dh-container').directionalHover();
    $('.testimonials-items').slick({
        dots: true,
        dotsClass: 'dots',
        appendDots: '#dots-control-testimonials',
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        infinite: true,
        slidesToShow: 3,
        prevArrow: $('#control-customers > .wrap-prev'),
        nextArrow: $('#control-customers > .wrap-next'),
        responsive: [{
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('#clients-carousel').slick({
        dots: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        infinite: true,
        slidesToShow: 4,
        prevArrow: $('#control-clients > .wrap-prev'),
        nextArrow: $('#control-clients > .wrap-next'),
        responsive: [{
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
                dots: false
            }
        }, {
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
                dots: false
            }
        }, {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: false,
                dots: false
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('.icon-play').magnificPopup({
        type: 'iframe',
        autoFocusLast: false,
        mainClass: 'mfp-with-zoom',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' + '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                },
                gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                }
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            },
            srcAction: 'iframe_src',
        }
    });
    if (typeof $.fn.gmap3 !== 'undefined') {
        $("#map").each(function() {
            var data_zoom = 15,
                data_height;
            if ($(this).attr("data-zoom") !== undefined) {
                data_zoom = parseInt($(this).attr("data-zoom"), 10);
            }
            if ($(this).attr("data-height") !== undefined) {
                data_height = parseInt($(this).attr("data-height"), 10);
            }
            $(this).gmap3({
                marker: {
                    values: [{
                        address: $(this).attr("data-address"),
                        data: $(this).attr("data-address-details")
                    }],
                    options: {
                        draggable: false,
                        icon: "img/map-marker.png"
                    },
                    events: {
                        mouseover: function(marker, event, context) {
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({
                                    get: {
                                        name: "infowindow"
                                    }
                                });
                            if (infowindow) {
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow: {
                                        anchor: marker,
                                        options: {
                                            content: context.data
                                        }
                                    }
                                });
                            }
                        },
                        mouseout: function() {
                            var infowindow = $(this).gmap3({
                                get: {
                                    name: "infowindow"
                                }
                            });
                            if (infowindow) {
                                infowindow.close();
                            }
                        }
                    }
                },
                map: {
                    options: {
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: data_zoom,
                        scrollwheel: false,
                        styles: [{
                            "featureType": "administrative",
                            "elementType": "all",
                            "stylers": [{
                                "saturation": "-100"
                            }]
                        }, {
                            "featureType": "administrative.province",
                            "elementType": "all",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        }, {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [{
                                "saturation": -100
                            }, {
                                "lightness": 65
                            }, {
                                "visibility": "on"
                            }]
                        }, {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [{
                                "saturation": -100
                            }, {
                                "lightness": "50"
                            }, {
                                "visibility": "simplified"
                            }]
                        }, {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [{
                                "saturation": "-100"
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [{
                                "visibility": "simplified"
                            }]
                        }, {
                            "featureType": "road.arterial",
                            "elementType": "all",
                            "stylers": [{
                                "lightness": "30"
                            }]
                        }, {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [{
                                "lightness": "40"
                            }]
                        }, {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [{
                                "saturation": -100
                            }, {
                                "visibility": "simplified"
                            }]
                        }, {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                                "hue": "#ffff00"
                            }, {
                                "lightness": -25
                            }, {
                                "saturation": -97
                            }]
                        }, {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [{
                                "lightness": -25
                            }, {
                                "saturation": -100
                            }]
                        }]
                    }
                }
            });
            $(this).css("height", data_height + "px");
        });
    }
    if (typeof $.fn.gmap3 !== 'undefined') {
        $("#map-dark").each(function() {
            var data_zoom = 15,
                data_height;
            if ($(this).attr("data-zoom") !== undefined) {
                data_zoom = parseInt($(this).attr("data-zoom"), 10);
            }
            if ($(this).attr("data-height") !== undefined) {
                data_height = parseInt($(this).attr("data-height"), 10);
            }
            $(this).gmap3({
                marker: {
                    values: [{
                        address: $(this).attr("data-address"),
                        data: $(this).attr("data-address-details")
                    }],
                    options: {
                        draggable: false,
                        icon: "img/map-marker-2.png"
                    },
                    events: {
                        mouseover: function(marker, event, context) {
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({
                                    get: {
                                        name: "infowindow"
                                    }
                                });
                            if (infowindow) {
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow: {
                                        anchor: marker,
                                        options: {
                                            content: context.data
                                        }
                                    }
                                });
                            }
                        },
                        mouseout: function() {
                            var infowindow = $(this).gmap3({
                                get: {
                                    name: "infowindow"
                                }
                            });
                            if (infowindow) {
                                infowindow.close();
                            }
                        }
                    }
                },
                map: {
                    options: {
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: data_zoom,
                        scrollwheel: false,
                        styles: [{
                            "stylers": [{
                                "hue": "#ff1a00"
                            }, {
                                "invert_lightness": true
                            }, {
                                "saturation": -100
                            }, {
                                "lightness": 33
                            }, {
                                "gamma": 0.5
                            }]
                        }, {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#2D333C"
                            }]
                        }]
                    }
                }
            });
            $(this).css("height", data_height + "px");
        });
    }
    $('.contact-form-sub:nth-child(1n)').on('submit', function() {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: th.serialize()
        }).done(function() {
            th.trigger("reset");
            th.find('.success-msg').slideToggle('slow');
            setTimeout(function() {
                th.find('.success-msg').slideToggle('hide');
            }, 3000);
        });
        return false;
    });
    $('#trigger-carousel').slick({
        dots: true,
        dotsClass: 'dots',
        appendDots: '#dots-control-triggers',
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 8000,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        responsive: [{
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
            }
        }, {
            breakpoint: 1170,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: false,
            }
        }, {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: false,
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $(function() {
        var $menu = $('#mobile-menu'),
            $body = $('body'),
            $fn = $('#mobile-menu'),
            $fnToggle = $('.toggle-mnu'),
            $logo = $('.logo'),
            $window = $(window);
        $menu.find('.menu-item-has-children > a').on('click', function(e) {
            e.preventDefault();
            if ($(this).next('ul').is(':visible')) {
                $(this).removeClass('sub-active').next('ul').slideUp(250);
            } else {
                $('.menu-item-has-children > a').removeClass('sub-active').next('ul').slideUp(250);
                $(this).addClass('sub-active').next('ul').slideToggle(250);
            }
        });
        var fnOpen = false;
        var fnToggleFunc = function() {
            fnOpen = !fnOpen;
            $body.toggleClass('fullscreen-nav-open');
            $fn.stop().fadeToggle(500);
            $fn.toggleClass("active");
            $('.toggle-mnu').toggleClass('on');
            $logo.toggleClass('on');
            $logo.toggleClass('dark-logo');
            return false;
        };
        $fnToggle.on('click', fnToggleFunc);
        $(document).on('keyup', function(e) {
            if (e.keyCode == 27 && fnOpen) {
                fnToggleFunc();
            }
        });
        $fn.find('li:not(.menu-item-has-children) > a').one('click', function() {
            fnToggleFunc();
            return true;
        });
        $menu.on('click', function() {
            fnToggleFunc();
            return true;
        });
        $('.inner-wrap, .fullscreen-menu-toggle').on('click', function(e) {
            e.stopPropagation();
        });
    });
    $(function() {
        var $menu = $('.toggle-top'),
            $body = $('body');
        $menu.on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('on-top');
            $body.toggleClass('active-fullscreen-topnav');
            $('.fullscreen-topnav').toggleClass('show-full-screen');
        });
    });
    if (typeof $.fn.mb_YTPlayer !== 'undefined') {
        $(function() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {} else {
                $("#bgndVideo").mb_YTPlayer();
            }
        }());
    }
    $('.right-full', this).each(function() {
        var height = $(this).outerHeight();
        $('.left-full').css('height', height);
    });
    if ($(window).width() > 768) {
        $('.single-post', this).each(function() {
            var height = $(this).outerHeight();
            $('#sidebar').css('height', height);
        });
    }
    $('.item-service', this).each(function() {
        var height = $(this).find('.content-service').outerHeight();
        $(this).find('.icon-service').css('height', height);
    });
    $('.skillbar').each(function() {
        var $ths_out = $(this),
            $ths_in = $(this).find('.skillbar-bar');
        $ths_in.waypoint(function(dir) {
            if (dir === "down") {
                $ths_in.animate({
                    width: $ths_out.attr('data-percent')
                }, 1500);
            } else {
                $ths_in.css('width', '0');
            }
        }, {
            offset: "90%"
        });
    });
})(jQuery);