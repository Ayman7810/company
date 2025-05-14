
<?php if(count($blogs)): ?>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post-01__style-02 md-text-center">
            <div class="post-01__media"><a href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><img
                        src='<?php echo e(asset("storage/blogs/$blog->image")); ?>' alt="<?php echo e($blog->title); ?>" /></a>
            </div>
            <div>
                <?php if($language == 'ar'): ?>
                    <ul class="post-01__categories">
                        <li><a href=''><?php echo e($blog->category->title_ar); ?></a></li>
                    </ul>
                    <h2 class="post-01__title"><a
                            href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><?php echo e($blog->title_ar); ?></a>
                    </h2>
                    <div class="post-01__time"><?php echo e($blog->created_at->format('d M y')); ?></div>
                    <div class="post-01__note"> <?php echo e(Auth::user()->name ?? 'الادمن'); ?> بواسطة </div>
                <?php else: ?>
                    <ul class="post-01__categories">
                        <li><a href=''><?php echo e($blog->category->title); ?></a></li>
                    </ul>
                    <h2 class="post-01__title"><a
                            href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><?php echo e($blog->title); ?></a>
                    </h2>
                    <div class="post-01__time"><?php echo e($blog->created_at->format('d M y')); ?></div>
                    <div class="post-01__note">by <?php echo e(Auth::user()->name ?? 'admin'); ?></div>
                <?php endif; ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- pagination -->
    <?php echo e($blogs->render('pagination::my-pagination')); ?>

<?php endif; ?>
<?php /**PATH E:\laragon\www\project\resources\views/front/partials/blogsAjax.blade.php ENDPATH**/ ?>