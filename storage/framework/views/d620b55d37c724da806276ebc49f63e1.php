

<?php $__env->startSection('title', 'Contact'); ?>
<?php $__env->startSection('contact-active', 'current-menu-item'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">

        <!-- Section -->
        <section class="md-section js-consult-form" style="background-color:#f7f7f7;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-0 offset-sm-0 offset-md-0 offset-lg-3 ">

                        <!-- title-01 -->
                        <div class="title-01">
                            <h2 class="title-01__title"><?php echo e(__('shard.Contact Details')); ?></h2>
                            
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ">

                        <!-- iconbox -->
                        <div class="iconbox iconbox__style-04">
                            <div class="iconbox__icon"><i class="ti-email"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#"><?php echo e(__('shard.email')); ?></a></h2>
                                <div class="iconbox__description">info@ex.com</div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                    <div class="col-lg-4 ">

                        <!-- iconbox -->
                        <div class="iconbox iconbox__style-04">
                            <div class="iconbox__icon"><i class="ti-location-pin"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#"><?php echo e(__('shard.location')); ?></a></h2>
                                <div class="iconbox__description">
                                    <?php echo __('shard.3919 New Cut Rd, Ellicott City, <br>Maryland, US'); ?>

                                </div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                    <div class="col-lg-4 ">

                        <!-- iconbox -->
                        <div class="iconbox iconbox__style-04">
                            <div class="iconbox__icon"><i class="ti-mobile"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#"></a></h2>
                                <div class="iconbox__description">+967 777 777 777</div>
                            </div>
                        </div><!-- End / iconbox -->

                    </div>
                </div>

                <!-- form-contact -->
                <?php if (isset($component)) { $__componentOriginal916d94339250eb43ea91dee6131b5281 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal916d94339250eb43ea91dee6131b5281 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Front-from-contact','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Front-from-contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal916d94339250eb43ea91dee6131b5281)): ?>
<?php $attributes = $__attributesOriginal916d94339250eb43ea91dee6131b5281; ?>
<?php unset($__attributesOriginal916d94339250eb43ea91dee6131b5281); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal916d94339250eb43ea91dee6131b5281)): ?>
<?php $component = $__componentOriginal916d94339250eb43ea91dee6131b5281; ?>
<?php unset($__componentOriginal916d94339250eb43ea91dee6131b5281); ?>
<?php endif; ?>
                <!-- End / form-contact -->

            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-0 offset-sm-0 offset-md-0 offset-lg-3 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-05">
                            <h6 class="title-01__subTitle"
                                <?php if($language == 'ar'): ?> style="letter-spacing: 0" <?php endif; ?>>
                                <?php echo e(__('shard.what’s next')); ?></h6>
                            <h2 class="title-01__title"><?php echo __('shard.Are You Ready, <a href="/" class="clickScroll">Let’s Work</a>'); ?>

                            </h2>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/contact.blade.php ENDPATH**/ ?>