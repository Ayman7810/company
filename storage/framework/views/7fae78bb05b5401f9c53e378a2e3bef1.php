

<?php $__env->startSection('title', __('shard.show-feature')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.show-feature')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">

                                <label for=""><?php echo e(__('shard.title')); ?></label>
                                <p class="form-control"><?php echo e($feature->title); ?></p>

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">

                                <label for=""><?php echo e(__('shard.icon')); ?></label>
                                <p class="form-control"><?php echo e($feature->icon); ?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">

                                <label for=""><?php echo e(__('shard.description')); ?></label>
                                <p class="form-control"><?php echo e($feature->description); ?></p>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/feature/show.blade.php ENDPATH**/ ?>