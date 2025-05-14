

<?php $__env->startSection('title', 'Service'); ?>

<?php $__env->startSection('services-active', 'current-menu-item'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">

        <!-- page-title -->
        <?php if (isset($component)) { $__componentOriginalead54f42f3ad020dd40b4df55f14e573 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalead54f42f3ad020dd40b4df55f14e573 = $attributes; } ?>
<?php $component = App\View\Components\BreadcrumbComponent::resolve(['title' => ''.e(__('shard.Services')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <!-- End / page-title -->


        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-0 offset-sm-0 offset-md-0 offset-lg-1 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h2 class="title-01__title"><?php echo __('shard.We Provide Service Since'); ?></h2>
                            <div><?php echo e(__('shard.We Provide desc')); ?></div>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <?php if(!empty($services)): ?>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $isReverse = $index % 2 != 0; // كل خدمة ثانية تكون بتنسيق معكوس
                    ?>
            
                    <?php if($language == 'ar'): ?>
                    <div class="post-03 <?php echo e($isReverse ? 'post-03__reverse' : ''); ?>" style="direction: rtl">
                        <div class="post-03__media">
                            <a href="#"><img src='<?php echo e(asset("storage/services/$service->image")); ?>'alt="<?php echo e($service->title_ar); ?>" /></a>
                        </div>
                        <div class="post-03__body">
                            <h6 class="post-03__subTitle" style="letter-spacing: 0"><?php echo e(__('shard.service')); ?> <?php echo e($index + 1); ?></h6>
                            <h2 class="post-03__title"><a href="#"><?php echo e($service->title_ar); ?></a></h2>
                            <div class="post-03__description"><?php echo e($service->description_ar); ?></div>
                            <a class="post-03__link" href="<?php echo e(route('front.projects')); ?>" > <?php echo e(__('shard.View all projects')); ?><i class="fa fa-angle-left" style="margin: 0 5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <?php else: ?>     
                    <div class="post-03 <?php echo e($isReverse ? 'post-03__reverse' : ''); ?>">
                        <div class="post-03__media">
                            <a href="#"><img src='<?php echo e(asset("storage/services/$service->image")); ?>'alt="<?php echo e($service->title); ?>" /></a>
                        </div>
                        <div class="post-03__body">
                            <h6 class="post-03__subTitle"><?php echo e(__('shard.service')); ?> <?php echo e($index + 1); ?></h6>
                            <h2 class="post-03__title"><a href="#"><?php echo e($service->title); ?></a></h2>
                            <div class="post-03__description"><?php echo e($service->description); ?></div>
                            <a class="post-03__link" href="<?php echo e(route('front.projects')); ?>"> <?php echo e(__('shard.View all projects')); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            



            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section js-consult-form js-consult-form--02" style="background-color:#f7f7f7;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h2 class="title-01__title"><?php echo e(__('shard.Features-title')); ?></h2>
                            <div><?php echo e(__('shard.Features-desc')); ?></div>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <!-- start feature -->
                <?php if (isset($component)) { $__componentOriginalbe356d7a9ab2d12674f87b6de337b38d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe356d7a9ab2d12674f87b6de337b38d = $attributes; } ?>
<?php $component = App\View\Components\FrontFeatureComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-feature-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontFeatureComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe356d7a9ab2d12674f87b6de337b38d)): ?>
<?php $attributes = $__attributesOriginalbe356d7a9ab2d12674f87b6de337b38d; ?>
<?php unset($__attributesOriginalbe356d7a9ab2d12674f87b6de337b38d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe356d7a9ab2d12674f87b6de337b38d)): ?>
<?php $component = $__componentOriginalbe356d7a9ab2d12674f87b6de337b38d; ?>
<?php unset($__componentOriginalbe356d7a9ab2d12674f87b6de337b38d); ?>
<?php endif; ?>
                <!-- end feature -->

                <div class="consult-form consult-form--02 js-consult-form__content"
                    style="background-image: url('assets/img/backgrounds/2.jpg');display: flex; justify-content: center">

                    <!-- form-01 -->
                    <div class="form-01" style="padding:60px;">
                        <h2 class="form-01__title"><?php echo e(__('shard.We Here To Help You')); ?></h2>
                        <form class="form-01__form">
                            <div class="form__item">
                                <input type="text" name="name" placeholder="<?php echo e(__('shard.Your name')); ?>" />
                            </div>
                            <div class="form__item">
                                <input type="text" name="email" placeholder="<?php echo e(__('shard.Your Email')); ?>" />
                            </div>
                            <div class="form__item">
                                <textarea rows="3" name="Your message" placeholder="<?php echo e(__('shard.Your message')); ?>"></textarea>
                            </div>
                            <div class="form__button"><a class="btn btn-primary btn-w180" href="#">
                                    <?php echo e(__('shard.send-message')); ?></a>
                            </div>
                        </form>
                    </div><!-- End / form-01 -->

                </div>
            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section">
            <div class="container">
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/service.blade.php ENDPATH**/ ?>