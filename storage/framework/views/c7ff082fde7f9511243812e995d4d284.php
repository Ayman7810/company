<?php if(!empty($advisors)): ?>
    <section class="md-section" style="padding-bottom:0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                    <!-- title-01 -->
                    <div class="title-01">
                        <h2 class="title-01__title"><?php echo e(__('shard.Our Advisors')); ?></h2>
                    </div><!-- End / title-01 -->

                </div>
            </div>
            <div class="consult-slide">

                <!-- carousel__element owl-carousel -->
                <div class="carousel__element owl-carousel"
                    data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>


                    <?php $__currentLoopData = $advisors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advisor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($language == 'ar'): ?>
                            <div class="textbox textbox__style-02">
                                <div class="textbox__image"><a target="_blank" href="#"><img
                                            src='<?php echo e(asset("storage/advisors/$advisor->image")); ?>'
                                            alt="<?php echo e($advisor->name_ar); ?>" /></a>
                                </div>
                                <div class="textbox__body">
                                    <h2 class="textbox__title"><a target="_blank" href="#"><?php echo e($advisor->name_ar); ?></a></h2>
                                    <div class="textbox__description"><?php echo e($advisor->description_ar); ?></div>

                                    <!-- social-01 -->
                                    <div class="social-01">
                                        <nav class="social-01__navSocial">
                                            <?php if(!empty($advisor->insta)): ?>
                                                <a target="_blank" class="social-01__item" href="<?php echo e($advisor->insta); ?>"><i
                                                        class="fa fa-instagram"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if(!empty($advisor->feac)): ?>
                                                <a target="_blank" class="social-01__item" href="<?php echo e($advisor->feac); ?>"><i
                                                        class="fa fa-facebook"></i></a>
                                            <?php endif; ?>
                                            <?php if(!empty($advisor->twit)): ?>
                                                <a target="_blank" class="social-01__item" href="<?php echo e($advisor->twit); ?>"><i
                                                        class="fa fa-twitter"></i>
                                                </a>
                                            <?php endif; ?>


                                        </nav>
                                    </div><!-- End / social-01 -->

                                </div>
                            </div>
                        <?php else: ?>
                        <div class="textbox textbox__style-02">
                            <div class="textbox__image"><a target="_blank" href="#"><img
                                        src='<?php echo e(asset("storage/advisors/$advisor->image")); ?>'
                                        alt="<?php echo e($advisor->name); ?>" /></a>
                            </div>
                            <div class="textbox__body">
                                <h2 class="textbox__title"><a target="_blank" href="#" ><?php echo e($advisor->name); ?></a></h2>
                                <div class="textbox__description"><?php echo e($advisor->description); ?></div>

                                <!-- social-01 -->
                                <div class="social-01">
                                    <nav class="social-01__navSocial">
                                        <?php if(!empty($advisor->insta)): ?>
                                            <a target="_blank" class="social-01__item" href="<?php echo e($advisor->insta); ?>" target="_blank"><i
                                                    class="fa fa-instagram"  ></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if(!empty($advisor->feac)): ?>
                                            <a target="_blank" class="social-01__item" href="<?php echo e($advisor->feac); ?>"><i
                                                    class="fa fa-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($advisor->twit)): ?>
                                            <a target="_blank" class="social-01__item" href="<?php echo e($advisor->twit); ?>"><i
                                                    class="fa fa-twitter"></i>
                                            </a>
                                        <?php endif; ?>


                                    </nav>
                                </div><!-- End / social-01 -->

                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div><!-- End / carousel__element owl-carousel -->

            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\laragon\www\project\resources\views/components/front-advisors-component.blade.php ENDPATH**/ ?>