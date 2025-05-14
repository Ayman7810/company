

<?php $__env->startSection('title', 'Projects'); ?>
<?php $__env->startSection('projects-active', 'current-menu-item'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-->
    
    <div class="md-content">
        <div class="consult-projectDetail">

            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel consult-projectDetail__slider"
                data-options='{"items":1,"loop":true,"dots":false,"nav":false,"autoplay":true,"animateOut":"fadeOut","margin":0}'>
                <div><img src="<?php echo e(asset('assets-front')); ?>/img/projects/detail-1.jpg" alt=""></div>
                
            </div><!-- End / carousel__element owl-carousel -->

            <div class="container">
                <div class="consult-projectDetail__main" style="padding-bottom: 0">

                    <!-- social-01 -->
                    
                    <!-- End / social-01 -->

                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
                            <div class="consult-projectDetail__content">

                                <div class="row">
                                    
                                        <?php if($language == 'ar'): ?>
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 " style="direction: rtl">
                                            <h1><?php echo e($project->title_ar); ?></h1>
                                            <p class="text"><?php echo e($project->description_ar); ?></p>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                            <h1><?php echo e($project->title); ?></h1>
                                            <p class="text"><?php echo e($project->description); ?></p>
                                        </div>
                                        <?php endif; ?>
                                  

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="image-full"><img src='<?php echo e(asset("storage/projects/$project->image")); ?>'
                            style="max-height: 500px;" alt="<?php echo e($project->title); ?>">
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Related Posts-->

    <!-- Section -->
    <section class="md-section">
        <div class="container">

            <!-- title-01 -->
            <div class="title-01">
                <h2 class="title-01__title"><?php echo e(__('shard.Other Projects')); ?></h2>
            </div><!-- End / title-01 -->


            <!-- carousel__element owl-carousel -->
            <div class="carousel__element owl-carousel"
                data-options='{"loop":false,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>

                <?php if(!empty($projects)): ?>
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($language == 'ar'): ?>
                            <div class="post-02">
                                <div class="post-02__media"><a href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><img style="height: 300px"
                                            src='<?php echo e(asset("storage/projects/$project->image")); ?>'alt="" /></a></div>
                                <div class="post-02__body" style="direction: rtl">
                                    <h2 class="post-02__title"><a
                                            href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><?php echo e($project->title_ar); ?></a>
                                    </h2>
                                    <div class="post-02__department"><?php echo e(Str::words($project->description_ar, 20, '...')); ?></div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="post-02">
                                <div class="post-02__media"><a href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><img style="height: 300px"
                                            src='<?php echo e(asset("storage/projects/$project->image")); ?>'alt="" /></a></div>
                                <div class="post-02__body">
                                    <h2 class="post-02__title"><a
                                            href="<?php echo e(route('front.project-detail', ['project' => $project])); ?>"><?php echo e($project->title); ?></a>
                                    </h2>
                                    <div class="post-02__department"><?php echo e(Str::words($project->description, 10, '...')); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>




            </div><!-- End / carousel__element owl-carousel -->

        </div>
    </section>
    <!-- End / Section -->

    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/project-detail.blade.php ENDPATH**/ ?>