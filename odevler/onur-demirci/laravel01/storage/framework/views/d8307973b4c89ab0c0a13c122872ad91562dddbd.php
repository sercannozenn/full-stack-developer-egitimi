<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Giriş Yap</title>

    <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon57.png')); ?>" sizes="57x57">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon72.png')); ?>" sizes="72x72">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon76.png')); ?>" sizes="76x76">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon114.png')); ?>" sizes="114x114">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon120.png')); ?>" sizes="120x120">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon144.png')); ?>" sizes="144x144">
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/icon152.png')); ?>" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">

    <!-- Related styles of various javascript plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins.css')); ?>">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">

    <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themes.css')); ?>">
<!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-respond.min.js')); ?>"></script>
</head>
    <body class="login">
        <!-- Login Container -->
        <div id="login-container">
            <div id="login-logo">
                <a href="<?php echo e(route('index')); ?>">
                    <img class="login-page-logo" src="<?php echo e(asset('assets/img/template/uadmin_logo.png')); ?>" alt="logo">
                </a>
            </div>
            <!-- Login Form -->
            <form id="login-form" action="" method="POST" class="form-horizontal">
                <?php echo csrf_field(); ?>
                <h3 style="margin-block-end: unset">Giriş Yap</h3>
                <hr style="margin-top:unset">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <input type="text" id="login-email" name="email" placeholder="Email" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <input type="password" id="login-password" name="password" placeholder="Şifre" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="btn-group btn-group-sm pull-right">
                        <button type="button" id="login-button-pass" class="btn btn-warning" data-toggle="tooltip" title="Şifrenizi mi unuttunuz?"><i class="fa fa-lock"></i></button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Giriş Yap</button>
                    </div>
                    <label id="topt-fixed-header-top" class="switch switch-success pull-left" data-toggle="tooltip" title="Beni Hatırla"><input type="checkbox"><span></span></label>
                </div>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Login Container -->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
                var loginForm = $('#login-form');

                // Reveal login form
                window.onload = function () {
                    loginForm.slideDown(450);
                };
                //
                // // Hide login form
                // $('.login-back').click(function () {
                //     loginForm.slideUp(450);
                //     loginButtons.slideDown(600);
                // });

        </script>
    </body>
</html><?php /**PATH C:\Users\WebDev\Desktop\full-stack-developer-egitimi\odevler\onur-demirci\laravelBlog\resources\views/auth/loginpage.blade.php ENDPATH**/ ?>