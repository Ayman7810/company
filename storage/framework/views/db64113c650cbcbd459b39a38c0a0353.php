

<?php $__env->startSection('title', __('shard.create')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title"><?php echo e(__('shard.create-feature')); ?></h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="<?php echo e(route('admin.feature.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for=""><?php echo e(__('shard.title')); ?></label>
                                    <input type="text" id="simpleinput" placeholder="<?php echo e(__('shard.title')); ?>"
                                        name="title" class="form-control" value="<?php echo e(old('title')); ?>">
                                    <?php if (isset($component)) { $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e = $attributes; } ?>
<?php $component = App\View\Components\ErrorForm::resolve(['name' => 'title'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ErrorForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $attributes = $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $component = $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for=""><?php echo e(__('shard.title_ar')); ?></label>
                                    <input type="text" id="simpleinput" placeholder="<?php echo e(__('shard.title_ar')); ?>"
                                        name="title_ar" class="form-control" value="<?php echo e(old('title_ar')); ?>">
                                    <?php if (isset($component)) { $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e = $attributes; } ?>
<?php $component = App\View\Components\ErrorForm::resolve(['name' => 'title_ar'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ErrorForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $attributes = $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $component = $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for=""><?php echo e(__('shard.icon')); ?></label>
                                    <input type="text" id="icon" placeholder="<?php echo e(__('shard.icon')); ?>"
                                        class="form-control" name="icon" value="<?php echo e(old('icon')); ?>">
                                    <?php if (isset($component)) { $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e = $attributes; } ?>
<?php $component = App\View\Components\ErrorForm::resolve(['name' => 'icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ErrorForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $attributes = $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $component = $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for=""><?php echo e(__('shard.description')); ?></label>
                                    <textarea name="description" class="form-control" placeholder="<?php echo e(__('shard.description')); ?>"><?php echo e(old('description')); ?></textarea>
                                    <?php if (isset($component)) { $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e = $attributes; } ?>
<?php $component = App\View\Components\ErrorForm::resolve(['name' => 'description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ErrorForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $attributes = $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $component = $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for=""><?php echo e(__('shard.description_ar')); ?></label>
                                    <textarea name="description_ar" class="form-control" placeholder="<?php echo e(__('shard.description_ar')); ?>"><?php echo e(old('description_ar')); ?></textarea>
                                    <?php if (isset($component)) { $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e = $attributes; } ?>
<?php $component = App\View\Components\ErrorForm::resolve(['name' => 'description_ar'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ErrorForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $attributes = $__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__attributesOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e)): ?>
<?php $component = $__componentOriginal0b076f60ba0b4966885b7a28bd56e02e; ?>
<?php unset($__componentOriginal0b076f60ba0b4966885b7a28bd56e02e); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href="" class="btn btn-primary"><?php echo e(__('shard.add-new')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/feature/create.blade.php ENDPATH**/ ?>