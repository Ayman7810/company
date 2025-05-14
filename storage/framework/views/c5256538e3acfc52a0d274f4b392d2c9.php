

<?php $__env->startSection('title', __('shard.show-certificate')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.show-certificate')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.name')); ?></label>
                                <p class="form-control"><?php echo e($certificate->name); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.name_ar')); ?></label>
                                <p class="form-control"><?php echo e($certificate->name_ar); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.job')); ?></label>
                                <p class="form-control"><?php echo e($certificate->job); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.job_ar')); ?></label>
                                <p class="form-control"><?php echo e($certificate->job_ar); ?></p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description')); ?></label>
                                <textarea disabled class="form-control"><?php echo e($certificate->description); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description_ar')); ?></label>
                                <textarea disabled class="form-control"><?php echo e($certificate->description_ar); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="" class="d-block"><?php echo e(__('shard.image')); ?></label>
                            <img width="10%" src='<?php echo e(asset("storage/certificates/$certificate->image")); ?>'
                                alt="<?php echo e($certificate->name); ?>">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/certificate/show.blade.php ENDPATH**/ ?>