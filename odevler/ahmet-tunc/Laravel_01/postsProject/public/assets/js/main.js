/*
 *  Document   : main.js
 *  Author     : pixelcave
 *  Description: Custom scripts and plugin initializations (available to all pages)
 *
 *  Feel free to remove the plugin initilizations from uiInit() if you would like to
 *  use them only in specific pages. Also, if you remove a js plugin you won't use, make
 *  sure to remove its initialization from uiInit().
 */

var webApp = function() {

    /* Initialization UI Code */
    var uiInit = function () {

        // Add the  correct copyright year at the footer
        var yearCopy = $('#year-copy'), d = new Date();

        if (d.getFullYear() === 2013) { yearCopy.html('2013'); } else { yearCopy.html('2013-' + d.getFullYear().toString().substr(2,2)); }

        // Set min-height to #page-content, so that footer is visible at the bottom if there is not enough content
        var pageContent = $('#page-content');

        pageContent.css('min-height', $(window).height() -
            ($('header').height() + $('footer').outerHeight()) + 'px');

        $(window).resize(function() {
            pageContent.css('min-height', $(window).height() -
                ($('header').height() + $('footer').outerHeight()) + 'px');
        });

        // If .navbar-fixed class added to <header>, add padding to the page-container
        if ($('header').hasClass('navbar-fixed-top')) {
            $('#page-container').addClass('header-fixed-top');
        } else if ($('header').hasClass('navbar-fixed-bottom')) {
            $('#page-container').addClass('header-fixed-bottom');
        }

        // Select/Deselect all checkboxes in tables
        $('thead input:checkbox').click(function() {
            var checkedStatus   = $(this).prop('checked');
            var table           = $(this).closest('table');

            $('tbody input:checkbox', table).each(function() { $(this).prop('checked', checkedStatus); });
        });

        // Initialize tabs
        $('[data-toggle="tabs"] a').click(function (e) { e.preventDefault(); $(this).tab('show'); });

        // Gallery hover options functionality
        $('[data-toggle="gallery-options"] > li')
           .mouseover(function(){ $(this).find('.thumbnails-options').show(); })
           .mouseout(function(){ $(this).find('.thumbnails-options').hide();});

        // Initialize Slimscroll
        $('.scrollable').slimScroll({ height: '100px', size: '3px', touchScrollStep: 100 });
        $('.scrollable-tile').slimScroll({ height: '130px', size: '3px', touchScrollStep: 100 });
        $('.scrollable-tile-2x').slimScroll({ height: '330px', size: '3px', touchScrollStep: 100 });

        // Initialize Tooltips
        $('[data-toggle="tooltip"]').tooltip({ container: 'body', animation: false });

        // Initialize Popovers
        $('[data-toggle="popover"]').popover({ container: 'body', animation: false });

        // Initialize Chosen
        $('.select-chosen').chosen();

        // Initialize Select2
        $('.select-select2').select2();

        // Initialize elastic
        $('textarea.textarea-elastic').elastic();

        // Initialize wysihtml5
        $('textarea.textarea-editor').wysihtml5();

        // Initialize Colorpicker
        $('.input-colorpicker').colorpicker();

        // Initialize TimePicker
        $('.input-timepicker').timepicker();

        // Initialize DatePicker
        $('.input-datepicker').datepicker();

        // Initialize DateRangePicker
        $('.input-daterangepicker').daterangepicker();

        // Initialize Placeholder
        $('input, textarea').placeholder();
    };

    /* Demo Code */
    var uiDemo = function () {

        // Demo of how loading of widgets could happen
        $('.loading-on').click(function(){

            // Get loading div from header
            var loading = $('#loading');

            // Fade In loading
            loading.fadeIn(250);

            // Hide all badges from widget links
            $('#widgets > li > a > .badge').addClass('display-none');

            // Wait a while (the real updating could happen here)
            setTimeout(function(){
                // Fade Out loading and add some demo badges
                loading.fadeOut(250);

                $('#rss-widget > a > .badge').removeClass('display-none').html('5');
                $('#twitter-widget > a > .badge').removeClass('display-none').html('4');
            }, 1000);
        });

        // Initialize Typeahead - Example with countries
        var data = ["Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antarctica","Antigua and Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Bouvet Island","Brazil","British Indian Ocean Territory","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Côte d'Ivoire","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central African Republic","Chad","Chile","China","Christmas Island","Cocos (Keeling) Islands","Colombia","Comoros","Congo","Cook Islands","Costa Rica","Croatia","Cuba","Cyprus","Czech Republic","Democratic Republic of the Congo","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Faeroe Islands","Falkland Islands","Fiji","Finland","Former Yugoslav Republic of Macedonia","France","French Guiana","French Polynesia","French Southern Territories","Gabon","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Heard Island and McDonald Islands","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Martinique","Mauritania","Mauritius","Mayotte","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Niue","Norfolk Island","North Korea","Northern Marianas","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Pitcairn Islands","Poland","Portugal","Puerto Rico","Qatar","Réunion","Romania","Russia","Rwanda","São Tomé and Príncipe","Saint Helena","Saint Kitts and Nevis","Saint Lucia","Saint Pierre and Miquelon","Saint Vincent and the Grenadines","Samoa","San Marino","Saudi Arabia","Senegal","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Georgia and the South Sandwich Islands","South Korea","Spain","Sri Lanka","Sudan","Suriname","Svalbard and Jan Mayen","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","The Bahamas","The Gambia","Togo","Tokelau","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Turks and Caicos Islands","Tuvalu","US Virgin Islands","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","United States Minor Outlying Islands","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Wallis and Futuna","Western Sahara","Yemen","Yugoslavia","Zambia","Zimbabwe"];

        $('.example-typeahead').typeahead({ items: 5, source: data });

        // Initialize DateRangePicker Advanced Demo Example
        var exampleAdvancedDateRange = $('#example-advanced-daterangepicker');
        var exampleAdvancedDateRangeSpan = $('#example-advanced-daterangepicker span');

        exampleAdvancedDateRange.daterangepicker({
            ranges: {
                'Today': ['today', 'today'],
                'Yesterday': ['yesterday', 'yesterday'],
                'Last 7 Days': [Date.today().add({days: -6}), 'today'],
                'Last 30 Days': [Date.today().add({days: -29}), 'today'],
                'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
                'Last Month': [Date.today().moveToFirstDayOfMonth().add({months: -1}), Date.today().moveToFirstDayOfMonth().add({days: -1})]
            }
        },
        function(start, end) {
            exampleAdvancedDateRangeSpan.html(start.toString('MMMM d, yy') + ' - ' + end.toString('MMMM d, yy'));
        });

        // Set the default content when page loads
        exampleAdvancedDateRangeSpan.html(Date.today().toString('MMMM d, yy') + ' - ' + Date.today().toString('MMMM d, yy'));
    };

    /* Primary navigation functionality */
    var primaryNav = function () {

        // Get all primary navigation top links
        var menuLinks = $('#primary-nav > ul > li > a');

        // Initialize submenu number indicators
        menuLinks.filter(function(){ return $(this).next().is('ul'); }).each(function(n, e){
            $(e).append('<span>' + $(e).next('ul').children().length + '</span>');
        });

        // Accordion functionality
        menuLinks.click(function(){

            var link = $(this);

            if (link.next('ul').length > 0) {
                if (link.parent().hasClass('active') !== true) {
                    if (link.hasClass('open')) {
                        link.removeClass('open').next().slideUp(250);
                    }
                    else {
                        $('#primary-nav li > a.open').removeClass('open').next().slideUp(250);
                        link.addClass('open').next().slideDown(250);
                    }
                }

                return false;
            }

            return true;
        });
    };

    /* Scroll to top link */
    var scrollToTop = function() {

        // Get link
        var link = $('#to-top');

        $(window).scroll(function(){

            // If the user scrolled a bit (150 pixels) show the link
            if ($(this).scrollTop() > 150) {
                link.fadeIn(150);
            } else {
                link.fadeOut(150);
            }
        });

        // On click get to top
        link.click(function(){
            $("html, body").animate({ scrollTop: 0 }, 300);
            return false;
        });
    };

    /* Theme Options, change features */
    var themeOptions = function () {

        // Get all switches
        var toptFixedHeaderTop      = $('#topt-fixed-header-top input');
        var toptFixedHeaderBottom   = $('#topt-fixed-header-bottom input');
        var toptFixedLayout         = $('#topt-fixed-layout input');

        // Cache elements
        var header  = $('header');
        var pageCon = $('#page-container');
        var body    = $('body');

        // Show-Hide Theme Options
        $('.btn-theme-options').click(function(){
            $(this).toggleClass('open');
            $('#theme-options-content').slideToggle(200);
            return false;
        });

        // Initialize checkboxes
        if (header.hasClass('navbar-fixed-top')){ toptFixedHeaderTop.prop('checked', true); }
        if (header.hasClass('navbar-fixed-bottom')){ toptFixedHeaderBottom.prop('checked', true); }
        if (body.hasClass('fixed')){ toptFixedLayout.prop('checked', true); }

        // Change header to fixed top
        toptFixedHeaderTop.change(function() {
            if($(this).is(":checked")) {
                toptFixedHeaderBottom.prop('checked', false);
                header.removeClass('navbar-fixed-bottom').addClass('navbar-fixed-top');
                pageCon.removeClass('header-fixed-bottom').addClass('header-fixed-top');
            } else {
                header.removeClass('navbar-fixed-top');
                pageCon.removeClass('header-fixed-top');
            }
        });

        // Change header to fixed bottom
        toptFixedHeaderBottom.change(function() {
            if($(this).is(":checked")) {
                toptFixedHeaderTop.prop('checked', false);
                header.removeClass('navbar-fixed-top').addClass('navbar-fixed-bottom');
                pageCon.removeClass('header-fixed-top').addClass('header-fixed-bottom');
            } else {
                header.removeClass('navbar-fixed-bottom');
                pageCon.removeClass('header-fixed-bottom');
            }
        });

        // Change layout to fixed
        toptFixedLayout.change(function() {
            if($(this).is(":checked")) {
                body.addClass('fixed');
            } else {
                body.removeClass('fixed');
            }
        });

        /*
         * Color Themes
         */
        var colorList = $('.theme-colors');
        var themeLink = $('#theme-link');
        var theme;

        if (themeLink.length) {
            theme = themeLink.attr('href');

            $('li', colorList).removeClass('active');
            $('a[data-theme="' + theme + '"]', colorList).parent('li').addClass('active');
        }

        $('a', colorList).click(function(e){
            // Get theme name
            theme = $(this).data('theme');

            $('li', colorList).removeClass('active');
            $(this).parent('li').addClass('active');

            if (theme === 'default') {
                if (themeLink.length) {
                    themeLink.remove();
                    themeLink = $('#theme-link');
                }
            } else {
                if (themeLink.length) {
                    themeLink.attr('href', theme);
                } else {
                    $('link[href="css/main.css"]').after('<link id="theme-link" rel="stylesheet" href="' + theme + '">');
                    themeLink = $('#theme-link');
                }
            }
        });
    };

    /* Datatables Bootstrap integration */
    var dtIntegration = function() {
        $.extend(true, $.fn.dataTable.defaults, {
            "sDom": "<'row'<'col-sm-6 col-xs-5'l><'col-sm-6 col-xs-7'f>r>t<'row'<'col-sm-5 hidden-xs'i><'col-sm-7 col-xs-12 clearfix'p>>",
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_",
                "sSearch": "<div class=\"input-group\">_INPUT_<span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span></div>",
                "sInfo": "<strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            }
        });
        $.extend($.fn.dataTableExt.oStdClasses, {
            "sWrapper": "dataTables_wrapper form-inline",
            "sFilterInput": "form-control",
            "sLengthSelect": "form-control"
        });
    };

    return {

        init: function () {
            uiInit(); // Initialize UI Code
            uiDemo(); // Initialize Demo Code
            primaryNav(); // Primary Navigation functionality
            scrollToTop(); // Scroll to top functionality
            themeOptions(); // Demo Theme Options functionality
            dtIntegration(); // Datatables Bootstrap integration
        }
    };
}();

/* Initialize WebApp when page loads */
$(function(){ webApp.init(); });