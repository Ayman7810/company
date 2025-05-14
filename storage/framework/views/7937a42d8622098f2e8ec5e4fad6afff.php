

<?php $__env->startSection('title', __('shard.show-project')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.show-project')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.title')); ?></label>
                                <p class="form-control"><?php echo e($project->title); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.title_ar')); ?></label>
                                <p class="form-control"><?php echo e($project->title_ar); ?></p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description')); ?></label>
                                <p class="form-control"><?php echo e($project->description); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="d-block"><?php echo e(__('shard.category')); ?></label>
                            <?php if($language == 'ar'): ?>
                                <p class="form-control"><?php echo e($project->category->title_ar); ?></p>
                            <?php else: ?>
                                <p class="form-control"><?php echo e($project->category->title); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="d-block"><?php echo e(__('shard.image')); ?></label>
                            <img width="10%" src='<?php echo e(asset("storage/projects/$project->image")); ?>'
                                alt="<?php echo e($project->name); ?>">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/project/show.blade.php ENDPATH**/ ?>