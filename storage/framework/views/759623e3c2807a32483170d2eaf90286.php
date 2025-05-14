

<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">

        <!-- slider -->
        <div class="slider">

            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel"
                data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 3000}'>
                <div class="slider__item" style="background-image: url('<?php echo e(asset('assets-front')); ?>/img/slider.jpg');">
                    <div class="md-tb">
                        <div class="md-tb__cell">
                            <div class="slider__content">
                                <div class="container">
                                    <h2><?php echo e(__('shard.hero-title-1')); ?></h2>
                                    <p><?php echo e(__('shard.hero-desc-1')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__item"
                    style="background-image: url('<?php echo e(asset('assets-front')); ?>/img/backgrounds/1.jpg');">
                    <div class="md-tb">
                        <div class="md-tb__cell">
                            <div class="slider__content">
                                <div class="container">
                                    <h2><?php echo e(__('shard.hero-title-2')); ?></h2>
                                    <p><?php echo e(__('shard.hero-desc-2')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End / carousel__element owl-carousel -->

        </div><!-- End / slider -->

        <!-- Service-->

        <!-- Section -->
        <section class="md-section" style="background-color:#f7f7f7;padding:0;">
            <div class="container">
                <?php if(!empty($services)): ?>
                    <div class="textbox-group">
                        <div class="row">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 col-lg-4 ">
                                    <!-- textbox -->
                                    <?php if($language == 'ar'): ?>
                                        <div class="textbox">
                                            <div class="textbox__image"><a href="<?php echo e(route('front.service')); ?>"><img
                                                        style="height: 300px"
                                                        src='<?php echo e(asset("storage/services/$service->image")); ?>'alt="<?php echo e($service->title_ar); ?>" /></a>
                                            </div>
                                            <div class="textbox__body" style="direction: rtl">
                                                <h2 class="textbox__title"><a
                                                        href="<?php echo e(route('front.service')); ?>"><?php echo e($service->title_ar); ?></a>
                                                </h2>
                                                <div class="textbox__description">
                                                    <?php echo e(Str::words($service->description_ar, 15, '...')); ?></div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="textbox">
                                            <div class="textbox__image"><a href="<?php echo e(route('front.service')); ?>"><img
                                                        style="height: 300px"
                                                        src='<?php echo e(asset("storage/services/$service->image")); ?>'alt="" /></a>
                                            </div>
                                            <div class="textbox__body">
                                                <h2 class="textbox__title"><a
                                                        href="<?php echo e(route('front.service')); ?>"><?php echo e($service->title); ?></a></h2>
                                                <div class="textbox__description">
                                                    <?php echo e(Str::words($service->description, 15, '...')); ?></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">

                        <!-- iconbox -->
                        <div class="iconbox">
                            <div class="iconbox__icon"><i class="ti-headphone-alt"></i></div>
                            <div>
                                <h2 class="iconbox__title"><a href="#"><?php echo e(__('shard.Features-title')); ?></a></h2>
                                <div class="iconbox__description"><?php echo e(__('shard.Features-desc')); ?></div>
                            </div>
                        </div><!-- End / iconbox -->

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
            </div>
        </section>
        <!-- End / Section -->

        <!-- About-->

        <!-- Section -->
        <section class="md-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-03 md-text-left">
                            <h6 class="title-01__subTitle"
                                <?php if($language == 'ar'): ?> style="letter-spacing: 0 ; text-align: end" <?php endif; ?>><?php echo e(__('shard.about')); ?>

                            </h6>
                            <h2 class="title-01__title" <?php if($language == 'ar'): ?> style="text-align: end" <?php endif; ?>><?php echo e(__('shard.about-title')); ?></h2>
                            <div <?php if($language == 'ar'): ?> style="text-align: end" <?php endif; ?>><?php echo e(__('shard.about-desc')); ?></div>
                        </div><!-- End / title-01 -->

                        <div class="row">
                            <div class="col-sm-4 ">

                                <!-- box-number -->
                                <div class="box-number">
                                    <div class="box-number__number">
                                        <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">
                                            99</h2>
                                    </div>
                                    <div class="box-number__description"><?php echo e(__('shard.about-happy-clients')); ?></div>
                                </div><!-- End / box-number -->

                            </div>
                            <div class="col-sm-4 ">

                                <!-- box-number -->
                                <div class="box-number">
                                    <div class="box-number__number">
                                        <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">
                                            1200</h2>
                                    </div>
                                    <div class="box-number__description"><?php echo e(__('shard.about-message-per-Day')); ?></div>
                                </div><!-- End / box-number -->

                            </div>
                            <div class="col-sm-4 ">

                                <!-- box-number -->
                                <div class="box-number">
                                    <div class="box-number__number">
                                        <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">
                                            15</h2>
                                    </div>
                                    <div class="box-number__description"><?php echo e(__('shard.about-Awards')); ?></div>
                                </div><!-- End / box-number -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="js-consult-slider">

                            <!-- carousel__element owl-carousel -->
                            <div class="carousel__element owl-carousel"
                                data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":2},"576":{"items":3},"992":{"items":1}}}'>
                                <div class="image-full"><img src="<?php echo e(asset('assets-front')); ?>/img/image-01.jpg"
                                        alt=""></div>
                                <div class="image-full"><img src="<?php echo e(asset('assets-front')); ?>/img/image-02.jpg"
                                        alt=""></div>
                            </div><!-- End / carousel__element owl-carousel -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->

        <!-- Contact us-->

        <!-- Section -->
        <section class="md-section md-skin-dark js-consult-form"
            style="background-image: url('<?php echo e(asset('assets-front')); ?>/img/blogs/1.jpg');">
            <div class="md-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-0 offset-sm-0 offset-md-0 offset-lg-2 ">

                        <!-- title-01 -->
                        <div class="title-01 title-01__style-02">
                            <h1 class="title-01__title "><?php echo e(__('shard.contact-with-us')); ?></h1>
                            
                        </div><!-- End / title-01 -->

                        <div class="consult-phone">(+967) 777 777 777</div>
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

        <!--start Our advisors-->
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
        <!--end Our advisors-->

        <!--start Latest Blogs -->
        <?php if (isset($component)) { $__componentOriginal1b825de790122d0a66513bca2965e5b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b825de790122d0a66513bca2965e5b2 = $attributes; } ?>
<?php $component = App\View\Components\FrontBlogsComponent::resolve(['title' => ''.e(__('shard.latest-blogs')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-blogs-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontBlogsComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b825de790122d0a66513bca2965e5b2)): ?>
<?php $attributes = $__attributesOriginal1b825de790122d0a66513bca2965e5b2; ?>
<?php unset($__attributesOriginal1b825de790122d0a66513bca2965e5b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b825de790122d0a66513bca2965e5b2)): ?>
<?php $component = $__componentOriginal1b825de790122d0a66513bca2965e5b2; ?>
<?php unset($__componentOriginal1b825de790122d0a66513bca2965e5b2); ?>
<?php endif; ?>
        <!--end Latest Blogs -->



    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/index.blade.php ENDPATH**/ ?>