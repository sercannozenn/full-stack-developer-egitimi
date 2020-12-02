

<?php $__env->startSection('meta'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Admin Sayfası
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar-widgets'); ?>
    <li class="dropdown pull-right dropdown-user">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo e(asset('assets/img/template/avatar.png')); ?>" alt="avatar"> <?php echo e(auth()->user()->name); ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-lock"></i>Çıkış Yap</a>

                <form action="<?php echo e(route('logout')); ?>" id="logout-form" method="POST">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
        </ul>
    </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav-dash'); ?>
    <?php if(auth()->guard()->guest()): ?>
    <?php else: ?>
            <li>
                <a href="javascript:void(0)" data-toggle="tooltip" class="animation-fadeIn text-center">
                    <i class="gemicon-medium-add-article"></i>
                </a>
                <p>Makale Ekle</p>
            </li>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\WebDev\Desktop\full-stack-developer-egitimi\odevler\onur-demirci\laravelBlog\resources\views/admin/adminPage.blade.php ENDPATH**/ ?>