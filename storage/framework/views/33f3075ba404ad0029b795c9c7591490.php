<?php if(count($blogs)): ?>
<section class="md-section consult-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">

                <!-- title-01 -->
                <div class="title-01">
                    <h2 class="title-01__title"><?php echo e($title); ?></h2>
                </div><!-- End / title-01 -->

            </div>
        </div>

        <!-- carousel__element owl-carousel -->
        <div class="carousel__element owl-carousel"
            data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>

            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="post-01__media"><a href="#"><img
                            src='<?php echo e(asset("storage/blogs/$blog->image")); ?>' alt="<?php echo e($blog->title); ?>"  style="height: 300px"/></a>
                </div>
                <div>
                    <?php if($language == 'ar'): ?>
                    <ul class="post-01__categories" style="direction: rtl">
                        <li><a href="#"><?php echo e($blog->category->title_ar); ?></a></li>
                    </ul>
                    <h2 class="post-01__title" style="direction: rtl"><a href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><?php echo e($blog->title_ar); ?></a></h2>
                    <div class="post-01__time" style="direction: rtl;width: 100%;"><?php echo e($blog->created_at->format('d M Y')); ?></div>
                    <div class="post-01__note" style="direction: rtl;width: 100%;"><?php echo e(Str::words($blog->description_ar, 10, '...')); ?></div>
                    <?php else: ?>
                    <ul class="post-01__categories">
                        <li><a href="#"><?php echo e($blog->category->title); ?></a></li>
                    </ul>
                    <h2 class="post-01__title"><a href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><?php echo e($blog->title); ?></a></h2>
                    <div class="post-01__time"><?php echo e($blog->created_at->format('d M Y')); ?></div>
                    <div class="post-01__note"><?php echo e(Str::words($blog->description, 10, '...')); ?></div>
                    <?php endif; ?>
                
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          
         

        </div><!-- End / carousel__element owl-carousel -->

    </div>
</section>
<?php endif; ?><?php /**PATH E:\laragon\www\project\resources\views/components/front-blogs-component.blade.php ENDPATH**/ ?>