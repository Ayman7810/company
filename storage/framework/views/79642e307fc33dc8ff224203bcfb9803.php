

<?php $__env->startSection('title', __('shard.feedback')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2 class="page-title"><?php echo e(__('shard.feedback')); ?></h2>
            </div>
            
            <?php if (isset($component)) { $__componentOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea96ba6013a9791dc41f3e0b0e1b0528 = $attributes; } ?>
<?php $component = App\View\Components\AlertSuccess::resolve(['method' => 'success'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <?php if (isset($component)) { $__componentOriginalbe143f984b25205f4a3796a16c5e7ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe143f984b25205f4a3796a16c5e7ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-elements-table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-elements-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe143f984b25205f4a3796a16c5e7ace)): ?>
<?php $attributes = $__attributesOriginalbe143f984b25205f4a3796a16c5e7ace; ?>
<?php unset($__attributesOriginalbe143f984b25205f4a3796a16c5e7ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe143f984b25205f4a3796a16c5e7ace)): ?>
<?php $component = $__componentOriginalbe143f984b25205f4a3796a16c5e7ace; ?>
<?php unset($__componentOriginalbe143f984b25205f4a3796a16c5e7ace); ?>
<?php endif; ?>
                            
                            <div id="FeedbackTableSearch">
                                <?php echo $__env->make('admin.feedback.ajax-search', ['messages' => $messages], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<script src='<?php echo e(asset('ajax')); ?>/searchPagination.js'></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    initSearchAndPagination({
        searchRoute: "<?php echo e(route('admin.feedback.search')); ?>",
        tableContainerId: 'FeedbackTableSearch',
        searchInputId: 'searchInput',
        perPageSelectId: 'perPageSelect',
        defaultPerPage: 5,
        searchDelay: 500
    });
});
</script>

<script>
    window.onload = function() {
        var successAlert = document.getElementById('success-alert');

        if (successAlert) {
            setTimeout(function() {
                successAlert.style.transition = "opacity 1s";
                successAlert.style.opacity = "0";
                setTimeout(function() {
                    successAlert.style.display = "none";
                }, 1000);
            }, 5000);
        }
    };
</script>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/feedback/index.blade.php ENDPATH**/ ?>