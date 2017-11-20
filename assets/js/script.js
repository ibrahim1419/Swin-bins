(function($) {

	"use strict";


    /*------------------------------------------
        = FUNCTIONS
    -------------------------------------------*/
    // Check ie and version
    function isIE () {
        var myNav = navigator.userAgent.toLowerCase();
        return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1], 10) : false;
    }


    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = $(".navigation-holder");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $(".navigation-holder .close-navbar");

        openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
            }
            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            return false;
        })
    }

    toggleMobileNavigation();


    // Function for toggle a class for small menu
    function toggleClassForSmallNav() {
        var windowWidth = window.innerWidth;
        var mainNav = $("#navbar > ul");

        if (windowWidth <= 991) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }

    toggleClassForSmallNav();


    // Function for small menu
    function smallNavFunctionality() {
        var windowWidth = window.innerWidth;
        var mainNav = $(".navigation-holder");
        var smallNav = $(".navigation-holder > .small-nav");
        var subMenu = smallNav.find(".sub-menu");
        var megamenu = smallNav.find(".mega-menu");
        var menuItemWidthSubMenu = smallNav.find(".menu-item-has-children > a");

        if (windowWidth <= 991) {
            subMenu.hide();
            megamenu.hide();
            menuItemWidthSubMenu.on("click", function(e) {
                var $this = $(this);
                $this.siblings().slideToggle();
                 e.preventDefault();
                e.stopImmediatePropagation();
            })
        } else if (windowWidth > 991) {
            mainNav.find(".sub-menu").show();
            mainNav.find(".mega-menu").show();
        }
    }

    smallNavFunctionality();


    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var doParallax = -(resize/5);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }


    // set two coloumn height equial
    function setTwoColEqHeight($col1, $col2) {
        var firstCol = $col1,
            secondCol = $col2,
            firstColHeight = $col1.innerHeight(),
            secondColHeight = $col2.innerHeight();

        if (firstColHeight > secondColHeight) {
            secondCol.css({
                "height": firstColHeight + 1 + "px"
            })
        } else {
            firstCol.css({
                "height": secondColHeight + 1 + "px"
            })
        }
    }


    // Hero slider background setting
    function sliderBgSetting() {
        if ($(".hero-slider .slide").length) {
            $(".hero-slider .slide").each(function() {
                var $this = $(this);
                var img = $this.find(".slider-bg").attr("src");

                $this.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }


    //Setting hero slider
    function heroSlider() {
        if ($(".hero-slider").length) {
            $(".hero-slider").slick({
                autoplay: true,
                autoplaySpeed: 6000,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                dots: true,
                fade: true,
                cssEase: 'linear'
            });
        }
    }


    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function() {

                //active wow
                wow.init();

                //Active heor slider
                heroSlider();

            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
    });


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect  : "elastic",
            closeEffect : "elastic",
            wrapCSS     : "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function(){
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title'         : this.title,
                helpers     : {
                    title : { type : 'inside' },
                    media : {}
                },

                beforeShow : function(){
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/
    if ($(".popup-gallery").length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
              enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    }


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
    if ($(".popup-img").length) {
        $('.popup-img').magnificPopup({
            type: 'image'
        });
    }


    /*------------------------------------------
        = FUNCTION FORM SORTING GALLERY
    -------------------------------------------*/
    function sortingGallery() {
        if ($(".sortable-grids .grid-filters").length) {
            var $container = $('.grids-container');
            $container.isotope({
                filter:'*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            $(".grid-filters li a").on("click", function() {
                $('.grid-filters li .current').removeClass('current');
                $(this).addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter:selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        }
    }

    sortingGallery();


    /*------------------------------------------
        = MASONRY GALLERY SETTING
    -------------------------------------------*/
    function masonryGridSetting() {
        if ($('.masonry-grid').length) {
            var $grid =  $('.masonry-grid').masonry({
                itemSelector: '.grid',
                columnWidth: '.grid',
                percentPosition: true
            });

            $grid.imagesLoaded().progress( function() {
                $grid.masonry('layout');
            });
        }
    }

    masonryGridSetting();


    /*------------------------------------------
        = STICKY HEADER
    -------------------------------------------*/

    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu($ele, $newElmClass) {
        $ele.addClass('original').clone().insertAfter($ele).addClass($newElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if ($('.sticky-s1 .navigation').length) {
        cloneNavForSticyMenu($('.sticky-s1 .navigation'), "sticky");
    }

    // clone home style 1 navigation for sticky menu
    if ($('.header-style-2 .navigation').length) {
        cloneNavForSticyMenu($('.header-style-2 .navigation'), "sticky-s2");
    }

    // Function for sticky menu
    function stickIt($stickyClass, $toggleClass) {

        if ($(window).scrollTop() >= 400) {
            var orgElement = $(".original");
            var coordsOrgElement = orgElement.offset();
            var leftOrgElement = coordsOrgElement.left;
            var widthOrgElement = orgElement.css("width");

            $stickyClass.addClass($toggleClass);

            $stickyClass.css({
                "width": widthOrgElement
            }).show();

            $(".original").css({
                "visibility": "hidden"
            });

        } else {

            $(".original").css({
                "visibility": "visible"
            });

            $stickyClass.removeClass($toggleClass);
        }
    }

    // Function when menu touch top
    function stickIt2($stickyClass, $toggleClass, $elm) {
        var elm = $elm;
        var top = elm.offset().top;

        if ($(window).scrollTop() >= top) {
            var orgElement = $(".original");
            var coordsOrgElement = orgElement.offset();
            var leftOrgElement = coordsOrgElement.left;
            var widthOrgElement = orgElement.css("width");

            $stickyClass.addClass($toggleClass);

            $stickyClass.css({
                "width": widthOrgElement
            }).show();

            $(".original").css({
                "visibility": "hidden"
            });

        } else {

            $(".original").css({
                "visibility": "visible"
            });

            $stickyClass.removeClass($toggleClass);
        }
    }




    /*------------------------------------------
        = HEADER SEARCH AREA AND MINICART TOGGLE
    -------------------------------------------*/
    if ($(".header-search-area").length) {
        var serachFormBox = $(".header-search-form");
        var openSeachBtn = $(".header-search-area .open-btn");

        $(document.body).append(serachFormBox);

        serachFormBox.hide();

        openSeachBtn.on("click", function(e) {
            e.preventDefault();
            serachFormBox.fadeIn();
        });

        serachFormBox.on("click", function() {
            serachFormBox.fadeOut();
            return false;
        }).find(".form").on("click", function(e) {
             e.stopPropagation();
        })
    }


    /*------------------------------------------
        = SERVICES SLIDER
    -------------------------------------------*/
    if ($(".services-slider").length) {
        $(".services-slider").owlCarousel({
            autoplay: true,
            loop: true,
            margin: 30,
            dots: false,
            mouseDrag: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            navSpeed: 1000,
            smartSpeed: 1000,
            responsive: {
                0 : {
                    items: 1
                },

                650 : {
                    items: 2,
                    margin: 15
                },

                992 : {
                    items: 3,
                    margin: 20
                },

                1200 : {
                    items: 3
                }
            }
        });
    }


    /*------------------------------------------
        = SERVICES SLIDER
    -------------------------------------------*/
    if ($(".services-slider-s2").length) {
        $(".services-slider-s2").owlCarousel({
            autoplay: true,
            loop: true,
            margin: 20,
            dots: false,
            mouseDrag: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            navSpeed: 1000,
            smartSpeed: 1000,
            responsive: {
                0 : {
                    items: 1
                },

                650 : {
                    items: 2,
                    margin: 15
                },

                992 : {
                    items: 3,
                    margin: 20
                },

                1200 : {
                    items: 4
                }
            }
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER
    -------------------------------------------*/
    if ($(".testimonials-slider").length) {
        $(".testimonials-slider").owlCarousel({
            autoplay: true,
            loop: true,
            margin: 30,
            dots: false,
            mouseDrag: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            navSpeed: 1000,
            smartSpeed: 1000,
            responsive: {
                0 : {
                    items: 1
                },

                992 : {
                    items: 2
                }
            }
        });
    }


    /*------------------------------------------
        = SERVICES SLIDER
    -------------------------------------------*/
    if ($(".projects-slider").length) {
        $(".projects-slider").owlCarousel({
            autoplay: true,
            loop: true,
            margin: 30,
            dots: false,
            mouseDrag: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            navSpeed: 1000,
            smartSpeed: 1000,
            responsive: {
                0 : {
                    items: 1
                },

                650 : {
                    items: 2,
                    margin: 15
                },

                992 : {
                    items: 3,
                    margin: 20
                },

                1200 : {
                    items: 3
                }
            }
        });
    }


    /*------------------------------------------
        = SERVICES DETAILS SLIDER
    -------------------------------------------*/
    if ($(".service-details-slider").length) {
        $(".service-details-slider").owlCarousel({
            autoplay: true,
            loop: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            navSpeed: 1000,
            smartSpeed: 1000,
            items: 1
        });
    }


    /*------------------------------------------
        = PROJECT DETAILS SLIDER
    -------------------------------------------*/
    if ($(".project-details-slider").length) {
        $(".project-details-slider").owlCarousel({
            autoplay: true,
            loop: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            navSpeed: 1000,
            smartSpeed: 1000,
            items: 1
        });
    }


    /*------------------------------------------
        = PROJECT DETAILS SLIDER
    -------------------------------------------*/
    if ($(".project-client-quote-slider").length) {
        $(".project-client-quote-slider").owlCarousel({
           // autoplay: true,
            loop: true,
            dots: false,
            smartSpeed: 1000,
            items: 1,
            margin: 20
        });
    }


    /*------------------------------------------
        = PROJECT DETAILS SLIDER
    -------------------------------------------*/
    if ($(".blog-gallery-slider").length) {
        $(".blog-gallery-slider").owlCarousel({
            autoplay: true,
            loop: true,
            dots: false,
            smartSpeed: 1000,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            items: 1,
        });
    }


    /*------------------------------------------
        = SHOP RANGE SLIDER
    -------------------------------------------*/
    if ($("#range").length) {
        $("#range").slider({
            min: 50,
            max: 1000,
            value: [85, 300],
            tooltip: "hide"
        });

        $("#range").on("slide", function(v1) {
            $("#min-value").text("$" + v1.value[0]);
            $("#max-value").text("$" + v1.value[1]);
        });
    }


    /*------------------------------------------
        = SHOP DETAILS PRODUCT SLIDER
    -------------------------------------------*/
    if ($(".shop-single-slider-wrapper").length) {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            focusOnSelect: true,
            prevArrow: '<i class="nav-btn nav-btn-lt fa fa-long-arrow-left"></i>',
            nextArrow: '<i class="nav-btn nav-btn-rt fa fa-long-arrow-right"></i>',

            responsive: [
                {
                  breakpoint: 500,
                  settings: {
                    slidesToShow: 3,
                    infinite: true
                  }
                }
            ]

        });
    }

    // Bootstrap touchspin for product details page
    if ($("input[name='count-product']").length) {
        $("input[name='count-product']").TouchSpin({
            verticalbuttons: true
        });
    }


    /*------------------------------------------
        = BACK TO TOP BTN SETTING
    -------------------------------------------*/
    $("body").prepend("<a href='#'' class='back-to-top'><i class='fa fa-long-arrow-up'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 300;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-to-top").fadeIn("slow");
        } else {
            $("a.back-to-top").fadeOut("slow");
        }
    }

    $(".back-to-top").on("click", function() {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })



    /*------------------------------------------
        = GOOGLE MAP
    -------------------------------------------*/
    function map() {

        var locations = [
            ['Hotel royal international khulna ', 22.8103888, 89.5619609,1],
            ['City inn khulna', 22.820884, 89.551216,2],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng( 22.8103888, 89.5619609),
            zoom: 12,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP

        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon:'assets/images/map-marker.png'
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        map.set('styles',

            [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#73b21a"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]

        );
    };


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/
    if ($(".validate-contact-form").length) {
        $(".validate-contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: "required",

                phone: {
                    required: true,
                },

                options: {
                    required: true
                }
            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email",
                phone: "Please put your phone number",
                options: "Please select a option"
            },

            submitHandler: function (form) {
                $("#loader").css("display", "inline-block");
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(form).serialize(),
                    success: function () {
                        $( "#loader").hide();
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 3000);
                    }
                });

                return false;
            }

        });
    }



    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
        $(window).on('load', function() {

            preloader();

            sliderBgSetting();

            toggleMobileNavigation();

            smallNavFunctionality();

            // set testimonial tow col equial heigh for better view
            if ($(".testimonials-slider-s1").length) {
                setTwoColEqHeight($(".testimonials-slider-s1 .client-info"), $(".testimonials-slider-s1 .client-quote"));
            }

            if($("#map").length) {
                map();
            }


        });



    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {

        if ($(".sticky-s1").length) {
            stickIt($(".sticky"), "sticky-on");
        }

        if ($(".header-style-2").length) {
            stickIt2($(".sticky-s2"), "sticky-on", $(".header-style-2 .navigation"));
        }

        toggleBackToTopBtn();
    });


    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    $(window).on("resize", function() {

        toggleClassForSmallNav();

        clearTimeout($.data(this, 'resizeTimer'));
        $.data(this, 'resizeTimer', setTimeout(function() {
            smallNavFunctionality();
        }, 200));
    });



})(window.jQuery);
