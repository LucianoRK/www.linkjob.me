/*
  [JS Index]
  
  ---
  
  Template Name: Nihilex - Photography Portfolio Template
  Author:  ex-nihilo
  Version: 1.3
*/


/*
  1. preloader
  2. timeout function
    2.1. show fadeIn element
    2.2. show elements
  3. forms
    3.1. contact form
  4. navigation
    4.1. navigation icon
    4.2. navigation panels
    4.3. navigation links
    4.4. navigation active state
    4.5. navigation hover state
  5. modals
    5.1. contact modal
  6. magnificPopup
    6.1. magnificPopup news gallery
  7. owl carousel
    7.1. owl team carousel slider
    7.2. owl news carousel slider
  8. to top arrow animation
  9. YouTube player
  10. slick slider
    10.1. slick fullscreen slideshow ZOOM/FADE
  11. swiper slider
    11.1. swiper parallax slider
	11.2. swiper thumbnail slider
  12. typed text
*/


$(function() {
    "use strict";
	
	
    $(window).on("load", function() {
        // 1. preloader
        $("#preloader").fadeOut(600);
        $(".preloader-bg").delay(400).fadeOut(600);
		
        // 2. timeout function
        // 2.1. show fadeIn element
        setTimeout(function() {
            $(".fadeIn-element").delay(1200).css({
                display: "none"
            }).fadeIn(2000);
        }, 0);
        // 2.2. show elements
        setTimeout(function() {
            $(".logo, .navigation-icon-wrapper").removeClass("top-position");
        }, 1200);
        setTimeout(function() {
            $(".bottom-credits, .bottom-social, #wave").removeClass("bottom-position");
        }, 1200);
        $(".hero-bg").addClass("hero-bg-show");
    });
	
    // 3. forms
    // 3.1. contact form
    $("form#form").on("submit", function() {
        $("form#form .error").remove();
        var s = !1;
        if ($(".requiredField").each(function() {
                if ("" === jQuery.trim($(this).val())) $(this).prev("label").text(), $(this).parent().append('<span class="error">This field is required</span>'), $(this).addClass(
                    "inputError"), s = !0;
                else if ($(this).hasClass("email")) {
                    var r = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    r.test(jQuery.trim($(this).val())) || ($(this).prev("label").text(), $(this).parent().append('<span class="error">Invalid email address</span>'), $(this).addClass(
                        "inputError"), s = !0);
                }
            }), !s) {
            $("form#form input.submit").fadeOut("normal", function() {
                $(this).parent().append("");
            });
            var r = $(this).serialize();
            $.post($(this).attr("action"), r, function() {
                $("form#form").slideUp("fast", function() {
                    $(this).before('<div class="success">Your email was sent successfully.</div>');
                });
            });
        }
        return !1;
    });
	
    // 4. navigation
    // 4.1. navigation icon
    $(".navigation-icon").on("click", function() {
        $(this).toggleClass("active");
    });
    // 4.2. navigation panels
    $(".navigation-fire").on("click", function(e) {
        if ($(".panel-from-left, .panel-from-right, .panel-overlay-from-left, .panel-overlay-from-right").hasClass("open")) {
            $(".panel-from-left, .panel-from-right, .panel-overlay-from-left, .panel-overlay-from-right").removeClass("open");
        } else {
            $(".panel-from-left, .panel-from-right, .panel-overlay-from-left, .panel-overlay-from-right").addClass("open");
        }
    });
    // 4.3. navigation links
    $("nav.navigation-menu a").on("click", function(e) {
        $(".navigation-icon").removeClass("active");
        $(".panel-from-left, .panel-from-right, .panel-overlay-from-left, .panel-overlay-from-right").removeClass("open");
    });
    // 4.4. navigation active state
    $("a.menu-state").on("click", function() {
        $("a.menu-state").removeClass("active");
        $(this).addClass("active");
    });
    // 4.5. navigation hover state
    hoverMenu();
    imgMenu();
    function hoverMenu() {
        $(".menu li a").on("mouseenter", function() {
            var ref = $(this).data("ref"),
                menuImg = $('.menu-img[data-ref="' + ref + '"]');
            $(".menu li a").removeClass("active");
            $(this).addClass("active");
            $(".menu-img").removeClass("active");
            menuImg.addClass("active");
        });
    }
    function imgMenu() {
        $("[data-bg]").each(function() {
            var bg = $(this).data("bg");
            $(this).css({
                "background-image": 'url(' + bg + ')',
                "background-position": "center center",
                "background-size": "cover"
            });
        });
    }
	
    // 5. modals
    // 5.1. contact modal
    $(".contact-modal-launcher, .contact-modal-closer").on("click", function(e) {
        e.preventDefault();
        if ($(".contact-modal").hasClass("open")) {
            $(".contact-modal").removeClass("open");
        } else {
            $(".contact-modal").addClass("open");
        }
    });
	
    // 6. magnificPopup
    // 6.1. magnificPopup news gallery
    $(".popup-photo-gallery").each(function() {
        $(this).magnificPopup({
            delegate: "a",
            type: "image",
            gallery: {
                enabled: true
            },
            removalDelay: 100,
            mainClass: "mfp-fade",
            fixedContentPos: false
        });
    });
	
    // 7. owl carousel
    // 7.1. owl team carousel slider
    var owl = $("#team-carousel.owl-carousel");
    owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });
    // 7.2. owl news carousel slider
    var owl = $("#news-carousel.owl-carousel");
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        dots: false,
        nav: true,
        navText: ["<i class='owl-custom ion-chevron-left'></i>", "<i class='owl-custom ion-chevron-right'></i>"]
    });
	
    $(window).on("scroll", function() {
        // 8. to top arrow animation
        if ($(this).scrollTop() > 500) {
            $(".to-top-arrow").addClass("show");
        } else {
            $(".to-top-arrow").removeClass("show");
        }
    });
	
	// 9. YouTube player
    $("#bgndVideo").YTPlayer();
	
	// 10. slick slider
    // 10.1. slick fullscreen slideshow ZOOM/FADE
    $(".slick-fullscreen-slideshow-zoom-fade").slick({
        arrows: false,
        initialSlide: 0,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        speed: 1600,
        draggable: true,
        dots: false,
        pauseOnDotsHover: true,
        pauseOnFocus: false,
        pauseOnHover: false
    });
	
	// 11. swiper slider
    // 11.1. swiper parallax slider
    var swiper = new Swiper(".parallax .swiper-container", {
		autoplay: 3000,
        speed: 1600,
        parallax: true,
        mousewheelControl: false,
        keyboardControl: false,
        navigation: false
    });
	// 11.2. swiper thumbnail slider
    var swipersliderTop = new Swiper(".swiper-slider-top", {
        direction: "horizontal",
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev",
        autoplay: 4000,
        speed: 1600,
        spaceBetween: 0,
        centeredSlides: true,
        slidesPerView: "auto",
        touchRatio: 1,
        loop: true,
        slideToClickedSlide: true,
        mousewheelControl: false,
        keyboardControl: false
    });
    var swipersliderBottom = new Swiper(".swiper-slider-bottom", {
        direction: "horizontal",
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: "auto",
        touchRatio: 1,
        loop: true,
        slideToClickedSlide: true,
        mousewheelControl: false,
        keyboardControl: false
    });
    swipersliderTop.params.control = swipersliderBottom;
    swipersliderBottom.params.control = swipersliderTop;
	
	// 12. typed text
    $(".typed-title").typed({
		strings: ["Photography", "Portfolio", "Experience"],
        typeSpeed: 35,
        backDelay: 4500,
        loop: true
    });
	
	
});