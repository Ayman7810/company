

<?php $__env->startSection('title', __('shard.show-blog')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.show-blog')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.title')); ?></label>
                                <p  class="form-control"><?php echo e($blog->title); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.title_ar')); ?></label>
                                <p  class="form-control"><?php echo e($blog->title_ar); ?></p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description')); ?></label>
                                <p ><?php echo e($blog->description); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for=""><?php echo e(__('shard.description_ar')); ?></label>
                                <p ><?php echo e($blog->description_ar); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="d-block"><?php echo e(__('shard.image')); ?></label>
                            <img width="10%"  src='<?php echo e(asset("storage/blogs/$blog->image")); ?>' alt="<?php echo e($blog->name); ?>">
                         </div>
                        <div class="col-md-6">
                            <label for="" class="d-block"><?php echo e(__('shard.select-category')); ?></label>
                            <select class="custom-select" disabled name="category_id" id="custom-select">
                                <option value="<?php echo e($blog->category->id); ?>" selected><?php echo e($blog->category->title); ?></option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>" <?php echo e($blog->category_id == $category->id ? 'selected' : ''); ?>>
                                        <?php echo e($category->title); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/blog/show.blade.php ENDPATH**/ ?>