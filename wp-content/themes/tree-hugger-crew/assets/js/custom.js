jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    //Home Page - Service Tabbing
    jQuery(".service-tab li:eq(0)").addClass("active-gallery-tab");
    jQuery(".service-tab li").on("click", function() {

        var index = jQuery(this).attr('data-index');
        console.log(index);
        jQuery(".service-tab li").removeClass('active-gallery-tab');
        jQuery(this).addClass('active-gallery-tab');
        jQuery(".service-loader").css("display", "flex");

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            data: {
                'action': 'service_tabbing',
                'index': index,
            },
            dataType: 'text',
            success: function(data) {
                jQuery("#service_ajax_response").html(data);                                
                jQuery(".service-loader").css("display", "none");
            }
        });
    });

    jQuery('body').on('click', '#primary-menu .menu-item-has-children a:first', function () {
        if ((jQuery(this).parent().hasClass('active-sub-menu'))) {
            jQuery(this).parent().removeClass('active-sub-menu');
            jQuery(this).parent().find('.sub-menu').css('display', 'none');
        } else {
            jQuery(".menu-item-has-children").removeClass('active-sub-menu');
            jQuery(".sub-menu").css('display', 'none');
            jQuery(this).parent().addClass('active-sub-menu');
            jQuery(this).parent().find('.sub-menu').css('display', 'block');
        }
    });

    jQuery('.testimonial-slider').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        infinite: true,
        rows: 0,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',  
    });

    jQuery('.gallery-img-slider').slick({
        slidesToShow:2,
        slidesToScroll: 1,
        infinite: true,
        dots:false,
        arrows: true,
        variableWidth: true,
        autoplay: false,
        rows: 0,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            }
        ]
    });

    jQuery('.arborists-slider').slick({
        slidesToShow:2,
        slidesToScroll: 1,
        infinite: true,
        dots:false,
        arrows: true,
        rows: 0,
        autoplay: false,        
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            }
        ]
    });

    setTimeout(function() {
        jQuery("#sbi_images").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            swipeToSlide: true,
            draggable: true,
            rows: 0,
            swipeToSlide: true,
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    rows: 1,
                }
            }]
        });
    }, 1000);

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');
    jQuery("#main-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });
    
    //Adding Team Member Content in Modal
    jQuery(".arborists-content .arborist-learn-more").on("click", function() {
        var PopupContent = jQuery(this).next(".popup-content").html();
        jQuery("#arborist_modal .arborist-info").html(PopupContent);
    });

    /*Quote Modal JS */
    jQuery("#arborist_modal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery('#arborist_modal').on('hidden.bs.modal', function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

    /* Toggle Menu JS */
    jQuery('.menu-item a').not('#primary-menu .menu-item-has-children a:first').click(function () {
        jQuery(".main-navigation").removeClass('toggled	');
    });

    /* DropDown mobile menu */
    jQuery("#primary-menu .menu-item-has-children a").first().attr('href', 'javascript:void(0);');

    if (window_size <= 991) {

        /* DropDown mobile menu show and hide */
        jQuery('body').on('click', '#primary-menu .menu-item-has-children a:first', function () {
            if ((jQuery(this).parent().hasClass('active-sub-menu'))) {
                jQuery(this).parent().removeClass('active-sub-menu');
                jQuery(this).parent().find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).parent().addClass('active-sub-menu');
                jQuery(this).parent().find('.sub-menu').css('display', 'block');
            }
        });
    }

    /*Smooth Scroll JS*/
    jQuery("ul.menu li.menu-item").each(function () {
        var href = jQuery(this).find("a").attr("href");
        if (href.includes("#")) {
            if (href.substr(0, 1) == '#') {
                if (jQuery(href).length > 0) {
                    jQuery(this).find("a").first().attr("href", window.location.href.replace('#', '') + href);
                } else {
                    jQuery(this).find("a").first().attr("href", custom_call.homeurl + href);
                }
            }
        }
    });

});
