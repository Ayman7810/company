

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('about-active', 'current-menu-item'); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">

        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h6 class="title-01__subTitle" <?php if($language == 'ar'): ?>
                                style="letter-spacing: 0"
                            <?php endif; ?>><?php echo e(__('shard.about')); ?></h6>
                            <h2 class="title-01__title"><?php echo e(__('shard.about-title')); ?></h2>
                            <div><?php echo e(__('shard.about-desc')); ?></div>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section consult-background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-04">
                            <h6 class="title-01__subTitle" <?php if($language == 'ar'): ?>
                            style="letter-spacing: 0"
                        <?php endif; ?>><?php echo e(__('shard.about-Awards')); ?></h6>
                            <h2 class="title-01__title"><?php echo e(__('shard.This Is What We Get')); ?></h2>
                        </div><!-- End / title-01 -->

                    </div>
                </div>
                <div class="row">

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
                </div>
            </div>
        </section>
        <!-- End / Section -->


        <!--  start advisors -->
      <?php if (isset($component)) { $__componentOriginal2fa67ae198edbcd9ecbc3a35a38e6c00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fa67ae198edbcd9ecbc3a35a38e6c00 = $attributes; } ?>
<?php $component = App\View\Components\FrontAdvisorsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-advisors-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontAdvisorsComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fa67ae198edbcd9ecbc3a35a38e6c00)): ?>
<?php $attributes = $__attributesOriginal2fa67ae198edbcd9ecbc3a35a38e6c00; ?>
<?php unset($__attributesOriginal2fa67ae198edbcd9ecbc3a35a38e6c00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fa67ae198edbcd9ecbc3a35a38e6c00)): ?>
<?php $component = $__componentOriginal2fa67ae198edbcd9ecbc3a35a38e6c00; ?>
<?php unset($__componentOriginal2fa67ae198edbcd9ecbc3a35a38e6c00); ?>
<?php endif; ?>
        <!-- End / advisors -->

        <!-- Latest Projects-->

        <!-- Section -->
        <?php if(!empty($projects)): ?>

            <section class="md-section" style="padding-bottom:0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                            <!-- title-01 -->
                            <div class="title-01">
                                <h2 class="title-01__title"><?php echo e(__('shard.Latest Projects')); ?></h2>
                            </div><!-- End / title-01 -->

                        </div>
                    </div>
                </div>
                <div class="consult-project">
                    <div class="row">
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($language == 'ar'): ?>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 "
                                    style="padding-left: 5px; padding-right: 5px;">
                                    <div class="post-02 post-02__style-02 js-post-effect">
                                        <div class="post-02__media"><a href="#"><img style="height: 300px"
                                                    src='<?php echo e(asset("storage/projects/$project->image")); ?>'
                                                    alt="" /></a></div>
                                        <div class="post-02__body" style="direction: rtl">
                                            <h2 class="post-02__title"><a href="#"><?php echo e($project->title_ar); ?></a>
                                            </h2>
                                            <div class="post-02__department"><?php echo e($project->category->title_ar); ?></div>
                                            <div class="post-02__content">
                                                <div class="post-02__description">
                                                    <?php echo e($project->description_ar); ?>

                                                </div><a class="post-02__link"
                                                    href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><?php echo e(__('shard.View detail')); ?></a>
                                            </div>
                                        </div>
                                    </div><!-- End / post-02 -->

                                </div>
                            <?php else: ?>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 "
                                    style="padding-left: 5px; padding-right: 5px;">
                                    <div class="post-02 post-02__style-02 js-post-effect">
                                        <div class="post-02__media"><a href="#"><img style="height: 300px"
                                                    src='<?php echo e(asset("storage/projects/$project->image")); ?>'
                                                    alt="" /></a></div>
                                        <div class="post-02__body">
                                            <h2 class="post-02__title"><a href="#"><?php echo e($project->title); ?></a></h2>
                                            <div class="post-02__department"><?php echo e($project->category->title); ?></div>
                                            <div class="post-02__content">
                                                <div class="post-02__description">
                                                    <?php echo e($project->description); ?>

                                                </div><a class="post-02__link"
                                                    href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><?php echo e(__('shard.View detail')); ?></a>
                                            </div>
                                        </div>
                                    </div><!-- End / post-02 -->

                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- End / Section -->

        <!-- What’s Client Say ?-->

        <!-- What’s Client Say ?-->
        <?php if (isset($component)) { $__componentOriginal00ce1281a63e3afdfa1342ac818f2ae1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00ce1281a63e3afdfa1342ac818f2ae1 = $attributes; } ?>
<?php $component = App\View\Components\FrontCertificateComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-certificate-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontCertificateComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00ce1281a63e3afdfa1342ac818f2ae1)): ?>
<?php $attributes = $__attributesOriginal00ce1281a63e3afdfa1342ac818f2ae1; ?>
<?php unset($__attributesOriginal00ce1281a63e3afdfa1342ac818f2ae1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00ce1281a63e3afdfa1342ac818f2ae1)): ?>
<?php $component = $__componentOriginal00ce1281a63e3afdfa1342ac818f2ae1; ?>
<?php unset($__componentOriginal00ce1281a63e3afdfa1342ac818f2ae1); ?>
<?php endif; ?>
        <!--end What’s Client Say ?-->

        <!--start Our partner-->
        <?php if (isset($component)) { $__componentOriginalf20c862a93a6f27eb949bc5b88e3199c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf20c862a93a6f27eb949bc5b88e3199c = $attributes; } ?>
<?php $component = App\View\Components\FrontPartnerComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-partner-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontPartnerComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf20c862a93a6f27eb949bc5b88e3199c)): ?>
<?php $attributes = $__attributesOriginalf20c862a93a6f27eb949bc5b88e3199c; ?>
<?php unset($__attributesOriginalf20c862a93a6f27eb949bc5b88e3199c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf20c862a93a6f27eb949bc5b88e3199c)): ?>
<?php $component = $__componentOriginalf20c862a93a6f27eb949bc5b88e3199c; ?>
<?php unset($__componentOriginalf20c862a93a6f27eb949bc5b88e3199c); ?>
<?php endif; ?>
        <!--end Our partner-->

    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/about.blade.php ENDPATH**/ ?>