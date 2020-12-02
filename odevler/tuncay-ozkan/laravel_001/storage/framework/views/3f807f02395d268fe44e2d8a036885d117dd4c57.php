<?php $__env->startSection('pagetitle','Makale Ekleme Sayfası'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Text Inputs -->
    <form action="<?php echo e(route('articles.post')); ?>" method="post" class="form-horizontal form-box" >
        <?php echo csrf_field(); ?>
        <h4 class="form-box-header">Yeni Makale Ekle</h4>

        <div class="form-box-content">
            <div class="form-group">
                <label class="control-label col-md-2" for="example-input-normal">Makale Başlığı</label>
                <div class="col-md-3">
                    <input type="text" id="example-input-normal" name="articlesName" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="example-textarea-ckeditor">CKEditor</label>
                <div class="col-md-10">
                    <textarea id="example-textarea-ckeditor" name="articlesPost" class="ckeditor"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Status</label>
                <div class="col-md-10">
                    <label class="switch switch-success"><input type="checkbox" name="status" id="status" checked value="1"><span></span></label>

                </div>
            </div>



            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <input type="submit" class="btn btn-success" value="Kaydet">
                    <input type="submit" class="btn btn-danger" value="İptal">
                </div>
            </div>
        </div>
    </form>
    <!-- END Text Inputs -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/ckeditor/ckeditor.js')); ?>"></script>

    <script>
// const  status=document.querySelector('#status')
//
//        $(status).click(function () {
//            //alert("test");
//        })

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tncy\Desktop\fortify\resources\views/Articles/create.blade.php ENDPATH**/ ?>