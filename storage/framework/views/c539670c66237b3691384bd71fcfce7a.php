

<?php $__env->startSection('title', __('shard.certificates')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2 class="page-title"><?php echo e(__('shard.certificate')); ?></h2>
                <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ' '.e(route('admin.project.create')).' ','type' => 'create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
            </div>
            <?php if (isset($component)) { $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $attributes; } ?>
<?php $component = App\View\Components\AlertSuccess::resolve(['method' => 'create-project-success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AlertSuccess::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528)): ?>
<?php $attributes = $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528; ?>
<?php unset($__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528)): ?>
<?php $component = $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528; ?>
<?php unset($__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $attributes; } ?>
<?php $component = App\View\Components\AlertSuccess::resolve(['method' => 'delete-project-success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AlertSuccess::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528)): ?>
<?php $attributes = $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528; ?>
<?php unset($__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528)): ?>
<?php $component = $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528; ?>
<?php unset($__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $attributes; } ?>
<?php $component = App\View\Components\AlertSuccess::resolve(['method' => 'edit-project-success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AlertSuccess::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528)): ?>
<?php $attributes = $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528; ?>
<?php unset($__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528)): ?>
<?php $component = $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528; ?>
<?php unset($__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528); ?>
<?php endif; ?>

            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('shard.name')); ?></th>
                                        <th><?php echo e(__('shard.job')); ?></th>
                                        <th><?php echo e(__('shard.description')); ?></th>
                                        <th width='15%'><?php echo e(__('shard.actions')); ?></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($certificates) > 0): ?>
                                        <?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($certificates->firstItem() + $loop->index); ?></td>
                                                <td><?php echo e($certificate->name); ?></td>
                                                <td><?php echo e($certificate->job); ?></td>
                                                <td><?php echo e($certificate->description); ?></td>
                                                <td>

                                                    <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ' '.e(route('admin.Certificate.show', ['certificate' => $certificate])).' ','type' => 'show'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>

                                                    <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ' '.e(route('admin.project.edit', ['project' => $certificate])).' ','type' => 'edit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>

                                                    <?php if (isset($component)) { $__componentOriginald59bc6cf9e3f421a6215946deb418a05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald59bc6cf9e3f421a6215946deb418a05 = $attributes; } ?>
<?php $component = App\View\Components\DeleteFormButton::resolve(['href' => ''.e(route('admin.project.destroy', ['project' => $certificate])).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeleteFormButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald59bc6cf9e3f421a6215946deb418a05)): ?>
<?php $attributes = $__attributesOriginald59bc6cf9e3f421a6215946deb418a05; ?>
<?php unset($__attributesOriginald59bc6cf9e3f421a6215946deb418a05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald59bc6cf9e3f421a6215946deb418a05)): ?>
<?php $component = $__componentOriginald59bc6cf9e3f421a6215946deb418a05; ?>
<?php unset($__componentOriginald59bc6cf9e3f421a6215946deb418a05); ?>
<?php endif; ?>



                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.empty-alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('empty-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8)): ?>
<?php $attributes = $__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8; ?>
<?php unset($__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8)): ?>
<?php $component = $__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8; ?>
<?php unset($__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8); ?>
<?php endif; ?>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                <?php echo e($certificates->render('pagination::bootstrap-4')); ?></div>
                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->

            </div> <!-- .col-12 -->
        </div>
    </div>
<?php $__env->stopSection(); ?>


<script>
    // تحقق مما إذا كان التنبيه موجودًا
    window.onload = function() {
        var successAlert = document.getElementById('success-alert');

        if (successAlert) {
            // اجعل التنبيه يختفي بعد 5 ثوانٍ
            setTimeout(function() {
                successAlert.style.transition = "opacity 1s";
                successAlert.style.opacity = "0"; // خفض الشفافية لجعل التنبيه يختفي تدريجيًا
                setTimeout(function() {
                    successAlert.style.display = "none"; // أخفِ التنبيه بعد التلاشي
                }, 1000); // وقت التلاشي
            }, 5000); // بعد 5 ثوانٍ
        }
    };
</script>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/Certificate/index.blade.php ENDPATH**/ ?>