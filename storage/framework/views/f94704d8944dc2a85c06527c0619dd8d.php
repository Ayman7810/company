

<?php $__env->startSection('title', __('shard.show-partner')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.show-partner')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.name')); ?></label>
                                <p  class="form-control"><?php echo e($partner->name); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.name_ar')); ?></label>
                                <p  class="form-control"><?php echo e($partner->name_ar); ?></p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <label for="" class="d-block"><?php echo e(__('shard.image')); ?></label>
                            <img width="10%"  src='<?php echo e(asset("storage/partners/$partner->image")); ?>' alt="<?php echo e($partner->name); ?>">
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/partner/show.blade.php ENDPATH**/ ?>