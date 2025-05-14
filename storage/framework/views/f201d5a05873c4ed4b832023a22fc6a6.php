

<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">

        <?php if (isset($component)) { $__componentOriginalead54f42f3ad020dd40b4df55f14e573 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalead54f42f3ad020dd40b4df55f14e573 = $attributes; } ?>
<?php $component = App\View\Components\BreadcrumbComponent::resolve(['title' => ''.e(__('nav.project')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BreadcrumbComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalead54f42f3ad020dd40b4df55f14e573)): ?>
<?php $attributes = $__attributesOriginalead54f42f3ad020dd40b4df55f14e573; ?>
<?php unset($__attributesOriginalead54f42f3ad020dd40b4df55f14e573); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalead54f42f3ad020dd40b4df55f14e573)): ?>
<?php $component = $__componentOriginalead54f42f3ad020dd40b4df55f14e573; ?>
<?php unset($__componentOriginalead54f42f3ad020dd40b4df55f14e573); ?>
<?php endif; ?>

        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="grid-css grid-css--masonry" data-col-lg="3" data-col-md="2" data-col-sm="2" data-col-xs="1"
                    data-gap="30">
                   
                    <div class="filter" style="<?php if($language == 'ar'): ?> direction: rtl <?php endif; ?>">
                        <ul class="filter__list">
                            <?php if(count($categories) > 0 && count($projects)): ?>
                                <li><a href="#" data-filter="*"><?php echo e(__('shard.all')); ?></a></li>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($language == 'ar'): ?>
                                        <li><a href="#"
                                                data-filter=".category-<?php echo e($category->id); ?>"><?php echo e($category->title_ar); ?>

                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li><a href="#"
                                                data-filter=".category-<?php echo e($category->id); ?>"><?php echo e($category->title); ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="grid__inner">
                        <div class="grid-sizer"></div>

                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(request('category') == null || request('category') == $project->category->id): ?>
                                <div class="grid-item category-<?php echo e($project->category->id); ?>">
                                    <div class="grid-item__inner">
                                        <div class="grid-item__content-wrapper">
                                            <!-- post-02 -->
                                            <div class="post-02">
                                                <div class="post-02__media">
                                                    <a href="<?php echo e(route('front.project-detail', ['project'=>$project])); ?>">
                                                        <img src='<?php echo e(asset("storage/projects/$project->image")); ?>'
                                                            alt=""  style="height: 300px"/>
                                                    </a>
                                                </div>
                                                <?php if($language == 'ar'): ?>
                                                <div class="post-02__body" style="direction: rtl">
                                                    <h2 class="post-02__title">
                                                        <a
                                                            href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><?php echo e($project->title_ar); ?></a>
                                                    </h2>
                                                    <div class="post-02__department"><?php echo e($project->category->title_ar); ?></div>
                                                </div>  
                                                <?php else: ?>
                                                    
                                                <div class="post-02__body">
                                                    <h2 class="post-02__title">
                                                        <a
                                                            href="<?php echo e(route('front.project-detail',  ['project' => $project])); ?>"><?php echo e($project->title); ?></a>
                                                    </h2>
                                                    <div class="post-02__department"><?php echo e($project->category->title); ?></div>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <!-- End / post-02 -->

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/projects.blade.php ENDPATH**/ ?>