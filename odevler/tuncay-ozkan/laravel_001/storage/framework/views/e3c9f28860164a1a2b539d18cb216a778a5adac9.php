<?php $__env->startSection('pagetitle','Makaleler'); ?>
<?php $__env->startSection('content'); ?>
    <h3 class="page-header page-header-top"><?php echo $__env->yieldContent('pagetitle'); ?> </h3>
    <table class="table">
        <thead>
        <tr>
            <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Makale Başlık</th>
            <th class="hidden-xs hidden-sm">Makale Özet</th>
            <th class="hidden-xs hidden-sm">Makale Durum</th>
            <th class="text-center"><i class="fa fa-bolt"></i> İşlemler</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="hidden-xs hidden-sm"><?php echo e($value->articlesName); ?></td>
                <td class="hidden-xs hidden-sm"><?php echo $value->articlesPost; ?></td>
                <td class="hidden-xs hidden-sm">
                <?php if($value->articlesStatus==1): ?>
                   <span class="badge badge-success" >Aktif</span>
                    <?php else: ?> <span class="badge badge-danger" >Pasif</span>
                <?php endif; ?>

                </td>
                <td class="text-center">

                    <a href="/articles/edit/<?php echo e($value->id); ?>" class="btn btn-success">Düzenle</a>
                    <a href="/articles/delete/<?php echo e($value->id); ?>" class="btn btn-danger">Sil</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tncy\Desktop\fortify\resources\views/Articles/index.blade.php ENDPATH**/ ?>