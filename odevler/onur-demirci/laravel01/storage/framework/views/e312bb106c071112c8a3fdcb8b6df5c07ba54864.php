

<?php $__env->startSection('meta'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Makale Ekle
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


<?php $__env->startSection('nav-dash'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('nav-info'); ?>
    <li class="active"><a href="<?php echo e(route('admin.addArticle')); ?>">Makale Ekle</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
<h3>Makale Ekle</h3>

<textarea id="example-textarea-ckeditor" name="example-textarea-ckeditor" class="ckeditor"></textarea>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/js/ckeditor/ckeditor.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\WebDev\Desktop\full-stack-developer-egitimi\odevler\onur-demirci\laravelBlog\resources\views/admin/addArticle.blade.php ENDPATH**/ ?>