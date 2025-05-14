

<?php $__env->startSection('title', __('shard.show-service')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.show-service')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.title')); ?></label>
                                <input type="text" id="simpleinput" placeholder="<?php echo e(__('shard.title')); ?>" name="title"
                                    class="form-control" disabled value="<?php echo e($service->title); ?>">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.title_ar')); ?></label>
                                <input type="text" id="simpleinput" disabled placeholder="<?php echo e(__('shard.title_ar')); ?>" name="title_ar"
                                    class="form-control" value="<?php echo e($service->title_ar); ?>">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.icon')); ?></label>
                                <input type="text" id="icon" disabled placeholder="<?php echo e(__('shard.icon')); ?>"
                                    class="form-control" name="icon" value="<?php echo e($service->icon); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file form-group">
                                <label for="" class="d-block"><?php echo e(__('shard.image')); ?></label>
                                <img src='<?php echo e(asset("storage/services/$service->image")); ?>' alt="" height="50px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description')); ?></label>
                                <textarea name="description" disabled class="form-control" placeholder="<?php echo e(__('shard.description')); ?>"><?php echo e($service->description); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description_ar')); ?></label>
                                <textarea name="description_ar" disabled class="form-control" placeholder="<?php echo e(__('shard.description_ar')); ?>"><?php echo e($service->description_ar); ?></textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/services/show.blade.php ENDPATH**/ ?>