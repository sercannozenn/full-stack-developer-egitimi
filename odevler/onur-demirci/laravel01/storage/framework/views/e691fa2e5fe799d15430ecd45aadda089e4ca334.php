

<?php $__env->startSection('meta'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Ana Sayfa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar-widgets'); ?>
    <?php if(auth()->guard()->guest()): ?>
        <li>
            <a href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> Giriş Yap</a>
        </li>
        <li class="divider-vertical"></li>
        <li>
            <a href="<?php echo e(route('register')); ?>"><i class="fa fa-key"></i> Kayıt Ol</a>
        </li>
    <?php else: ?>
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
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav-dash'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\WebDev\Desktop\full-stack-developer-egitimi\odevler\onur-demirci\laravelBlog\resources\views/front/index.blade.php ENDPATH**/ ?>