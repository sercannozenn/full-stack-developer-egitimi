@yield('js')
<script type="text/javascript">
    var tpj=jQuery;
    var revapi110;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_110_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_110_1");
        }else{
            revapi110 = tpj("#rev_slider_110_1").show().revolution({
                sliderType:"hero",
                jsFileLocation:"js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:20000,
                navigation: {
                },
                responsiveLevels:[1240,1024,778,778],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,500,400,300],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "60px",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                }
            });		}
    });	/*ready*/
</script>
