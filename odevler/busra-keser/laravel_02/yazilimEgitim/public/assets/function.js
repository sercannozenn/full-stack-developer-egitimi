$("#rev_main").show().revolution({
    sliderType: "standard",
    jsFileLocation: "front/js/revolution/",
    sliderLayout: "auto",
    dottedOverlay: "none",
    delay: 9000,
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "off",
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        },
        bullets: {
            enable: false,
            hide_onmobile: true,
            style: "numbered",
            hide_onleave: false,
            hide_under: 767,
            direction: "vertical",
            h_align: "left",
            v_align: "center",
            h_offset: 20,
            v_offset: 0,
            space: 5,
            tmp: '<div class="tp-bullet-number"><span class="tp-count">{{param1}}</span><span class="tp-bullet-line"></span></div>'
        },
        arrows: {
            style: "",
            enable: false,
        }
    },
    viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "80%",
        presize: false
    },
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1140, 1024, 768, 480],
    gridheight: [450, 400, 400, 400],
    lazyType: "none",
    parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 2000,
        speedbg: 0,
        speedls: 0,
        levels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 20, 25, 55],
        disable_onmobile: "on"
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLimit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
    }
});

//revolution slider arrows
$("#rev_arrows").show().revolution({
    sliderType: "standard",
    jsFileLocation: "js/revolution/",
    sliderLayout: "auto",
    autoHeight: 'off',
    dottedOverlay: "none",
    delay: 9000,
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "on",
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        },
        arrows: {
            style: "zeus",
            enable: true,
            hide_onmobile: true,
            hide_under: 600,
            hide_onleave: true,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            tmp: '<div class="tp-title-wrap"> <div class="tp-arr-imgholder"></div> </div>',
            left: {
                h_align: "left",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
            },
            right: {
                h_align: "right",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
            }
        }
    },
    viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "80%",
        presize: false
    },
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1140, 1024, 768, 480],
    gridheight: [668, 650, 600, 490],
    lazyType: "none",
    parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 2000,
        speedbg: 0,
        speedls: 0,
        levels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 20, 25, 55],
        disable_onmobile: "on"
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",

    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
    }
});

//interactive classic revolution slider
let indexPort = new $("#rev_interactive").show().revolution({
    sliderType: "carousel",
    jsFileLocation: "js/revolution/",
    sliderLayout: "auto",
    dottedOverlay: "none",
    delay: 9000,
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "off",
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        },
        bullets: {
            style: "",
            enable: true,
            hide_onmobile: true,
            hide_under: 480,
            hide_onleave: false,
            hide_delay: 200,
            direction: "horizontal",
            space: 10,
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 30
        },
        arrows: {
            style: "",
            enable: false,
        }
    },
    viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "80%",
        presize: false
    },
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1140, 1024, 768, 480],
    gridheight: [660, 650, 600, 490],
    lazyType: "none",
    parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 2000,
        speedbg: 0,
        speedls: 0,
        levels: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 20, 25, 55],
        disable_onmobile: "on"
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLimit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
    }
});
indexPort.on('revolution.slide.onchange', function (event, data) {
    let slideIndex = data.slideIndex;
    slideIndex--;
    $('.tp-bullets').find('.tp-bullet').eq(slideIndex).addClass('active').siblings().removeClass('active');
    setTimeout(function () {
        $('.tp-bullets').find('.tp-bullet').eq(slideIndex).addClass('selected').siblings().removeClass('selected');
    }, 300);
});

//single item indexes
$("#rev_single").show().revolution({
    sliderType: "hero",
    jsFileLocation: "js/revolution",
    sliderLayout: "auto",
    scrollbarDrag: "true",
    dottedOverlay: "none",
    delay: 9000,
    navigation: {},
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1170, 1024, 778, 480],
    gridheight: [868, 768, 960, 720],
    lazyType: "none",
    parallax: {
        type: "scroll",
        origo: "slidercenter",
        speed: 400,
        levels: [10, 15, 20, 25, 30, 35, 40, -10, -15, -20, -25, -30, -35, -40, -45, 55]
    },
    shadow: 0,
    spinner: "off",
    autoHeight: "off",
    fullScreenAutoWidth: "off",
    fullScreenAlignForce: "off",
    fullScreenOffsetContainer: "",
    disableProgressBar: "on",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        disableFocusListener: false
    }
});

//creative agency index
$("#rev_creative").show().revolution({
    sliderType: "standard",
    sliderLayout: "auto",
    scrollbarDrag: "true",
    dottedOverlay: "none",
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        bullets: {
            style: "",
            enable: true,
            rtl: false,
            hide_onmobile: false,
            hide_onleave: false,
            hide_under: 767,
            hide_over: 9999,
            tmp: '',
            direction: "horizontal",
            space: 10,
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 40
        },
        arrows: {
            enable: false,
            hide_onmobile: true,
            hide_onleave: false,
            hide_under: 767,
            left: {
                h_align: "left",
                v_align: "center",
                h_offset: 20,
                v_offset: 30
            },
            right: {
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 30
            }
        },
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        }
    },
    viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "90%"
    },
    responsiveLevels: [4096, 1024, 778, 480],
    gridwidth: [1140, 1024, 750, 480],
    gridheight: [600, 500, 500, 350],
    lazyType: "none",
    parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 9000,
        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50]
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    disableProgressBar: "off",
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false
    }
});

//one page index
$("#rev_one_page").show().revolution({
    sliderType: "standard",
    sliderLayout: "auto",
    scrollbarDrag: "true",
    dottedOverlay: "none",
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        bullets: {
            style: "",
            enable: true,
            rtl: false,
            hide_onmobile: false,
            hide_onleave: false,
            hide_under: 767,
            hide_over: 9999,
            tmp: '',
            direction: "vertical",
            space: 10,
            h_align: "right",
            v_align: "center",
            h_offset: 40,
            v_offset: 0
        },
        arrows: {
            enable: false,
            hide_onmobile: true,
            hide_onleave: false,
            hide_under: 767,
            left: {
                h_align: "left",
                v_align: "center",
                h_offset: 20,
                v_offset: 30
            },
            right: {
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 30
            }
        },
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        }
    },
    viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "90%"
    },
    responsiveLevels: [4096, 1024, 778, 480],
    gridwidth: [1140, 1024, 750, 480],
    gridheight: [600, 500, 500, 350],
    lazyType: "none",
    parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 9000,
        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50]
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    disableProgressBar: "off",
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false
    }
});

//Design Studio Index
$("#rev_slider_8_1").show().revolution({
    sliderType: "standard",
    jsFileLocation: "//localhost/revslider/revslider/public/assets/js/",
    sliderLayout: "auto",
    dottedOverlay: "none",
    delay: 9000,
    navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "on",
        touch: {
            touchenabled: "on",
            touchOnDesktop: "off",
            swipe_threshold: 75,
            swipe_min_touches: 50,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        },
        arrows: {
            style: "uranus",
            enable: true,
            hide_onmobile: true,
            hide_under: 600,
            hide_onleave: true,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            tmp: '<div class="hvr-pulse"></div>',
            left: {
                h_align: "left",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
            },
            right: {
                h_align: "right",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
            }
        },
        bullets: {
            enable: true,
            hide_onmobile: true,
            hide_under: 600,
            style: "hephaistos",
            hide_onleave: true,
            hide_delay: 200,
            hide_delay_mobile: 1200,
            direction: "horizontal",
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 30,
            space: 5,
            tmp: ''
        }
    },
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1240, 1024, 778, 480],
    gridheight: [868, 600, 500, 400],
    lazyType: "smart",
    parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 2000,
        speedbg: 0,
        speedls: 0,
        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 10, 11, 12, 13, 14, 55],
    },
    shadow: 0,
    spinner: "off",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: "off",
    autoHeight: "off",
    fullScreenAutoWidth: "off",
    fullScreenAlignForce: "off",
    fullScreenOffsetContainer: "",
    fullScreenOffset: "",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
    }
});
