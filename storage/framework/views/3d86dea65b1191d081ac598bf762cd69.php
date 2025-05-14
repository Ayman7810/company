

<?php $__env->startSection('title', 'Blog Detail'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">
        <div class="consult-postDetail">
            <div class="image-full"><img src="<?php echo e(asset('assets-front')); ?>/img/blogs/detail/1.jpg" alt=""></div>
            <div class="consult-postDetail"></div>
            <div class="container">
                <div class="consult-postDetail__main">

                    <!-- social-01 -->
                    
                    <!-- End / social-01 -->

                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
                            <div class="consult-postDetail__content">
                                <div class="row">

                                    <?php if($language == 'ar'): ?>
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 "
                                            style="direction: rtl">
                                            <h1><?php echo e($blog->title_ar); ?></h1>
                                            <ul class="consult-postDetail__meta">
                                                <li><i class="fa fa-user"
                                                        aria-hidden="true"></i><?php echo e(Auth::user()->name ?? 'الادمن'); ?></li>
                                                <li><i class="fa fa-tags"
                                                        aria-hidden="true"></i><?php echo e($blog->category->title_ar); ?> </li>
                                                <li><i class="fa fa-comments-o"
                                                        aria-hidden="true"></i><?php echo e(__('shard.Comments')); ?>

                                                    (<?php echo e(count($blog->comments)); ?>)</li>
                                                <li><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><?php echo e($blog->created_at->format('Y M d')); ?></li>
                                            </ul>
                                            <p class="text"><?php echo e($blog->description_ar); ?></p>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                                            <h1><?php echo e($blog->title); ?></h1>
                                            <ul class="consult-postDetail__meta">
                                                <li><i class="fa fa-user"
                                                        aria-hidden="true"></i><?php echo e(Auth::user()->name ?? 'admin'); ?></li>
                                                <li><i class="fa fa-tags"
                                                        aria-hidden="true"></i><?php echo e($blog->category->title); ?> </li>
                                                <li><i class="fa fa-comments-o"
                                                        aria-hidden="true"></i><?php echo e(__('shard.Comment')); ?>

                                                    (<?php echo e(count($blog->comments)); ?>)</li>
                                                <li><i class="fa fa-calendar-o"
                                                        aria-hidden="true"></i><?php echo e($blog->created_at->format('d M y')); ?>

                                                </li>
                                            </ul>
                                            <p class="text"><?php echo e($blog->description); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="image-full"><img src='<?php echo e(asset("storage/blogs/$blog->image")); ?>'
                                        alt="<?php echo e($blog->title); ?>"></div>

                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-xl-6 offset-0 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-3 ">
                            <?php if(!empty($blog->comments)): ?>
                                <h4 class="comment-heading"
                                    <?php if($language == 'ar'): ?> style="text-align: end;" <?php endif; ?>>
                                    <?php echo e(__('shard.Comment')); ?> <span>(<?php echo e(count($blog->comments)); ?>)</span></h4>
                                <ol class="comment-list">

                                    <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="comment">
                                            <div class="comment-content">
                                                <div class="comment-avatar"
                                                    <?php if($language == 'ar'): ?> style="float:right;margin-left: 30px; " <?php endif; ?>>
                                                    <img alt="<?php echo e($comment->name); ?>"
                                                        src="<?php echo e(asset('assets-front')); ?>/img/avatars/avatar-01.jpg"
                                                        class="avatar photo" style="border-radius: 50%;">
                                                </div><!-- .comment-avatar -->

                                                <?php if($language == 'ar'): ?>
                                                    <div class="comment-body">
                                                        <div class="comment-metadata"
                                                            style="margin-right: 0px; text-align: end">
                                                            <a href="#">
                                                                <time
                                                                    datetime="2016-12-30T08:18:37+00:00"><?php echo e($comment->created_at->format('d M Y')); ?></time>
                                                            </a>
                                                        </div>
                                                        <p class="fn"style="text-align: end;margin-right: 20px">
                                                            <?php echo e($comment->name); ?></p>
                                                        <div class="comment-text"
                                                            style="text-align: end;margin-right: 20px">
                                                            <p><?php echo e($comment->text); ?></p>
                                                        </div>
                                                        
                                                    </div>
                                                <?php else: ?>
                                                    <div class="comment-body">
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time
                                                                    datetime="2016-12-30T08:18:37+00:00"><?php echo e($comment->created_at->format('d M Y')); ?></time>
                                                            </a>
                                                        </div>
                                                        <p class="fn"><?php echo e($comment->name); ?></p>
                                                        <div class="comment-text">
                                                            <p><?php echo e($comment->text); ?></p>
                                                        </div>
                                                        
                                                    </div>
                                                <?php endif; ?>

                                            </div><!-- .comment-content -->

                                            
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    
                                </ol>
                            <?php endif; ?>


                            <!-- form-01 -->
                            <div class="form-01 form-01__style-02"
                                <?php if($language == 'ar'): ?> style="direction: rtl" <?php endif; ?>>
                                <h2 class="form-01__title"><?php echo e(__('shard.Add A Comment')); ?></h2>

                                <?php if(session('success')): ?>
                                    <span
                                        style="color: rgb(0, 255, 42); font-weight: bolder"><?php echo e(session('success')); ?></span>
                                <?php endif; ?>
                                <form class="form-01__form" method="POST" action="<?php echo e(route('front.comment')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="blog_id" value="<?php echo e($blog->id); ?>">
                                    <div class="form__item form__item--02">
                                        <input type="text" name="name" placeholder="<?php echo e(__('shard.Your name')); ?>" />
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span style="color: red"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form__item form__item--02">
                                        <input type="email" name="email" placeholder="<?php echo e(__('shard.Your Email')); ?>" />
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span style="color: red"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form__item">
                                        <textarea rows="3" name="text" placeholder="<?php echo e(__('shard.Your comment')); ?>"></textarea>
                                        <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span style="color: red"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form__button"><button type="submit" class="btn btn-primary btn-w180"
                                            href="#"><?php echo e(__('shard.Post-comment')); ?></button>
                                    </div>
                                </form>
                            </div><!-- End / form-01 -->

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--start Related Blogs -->
        <?php if (isset($component)) { $__componentOriginal1b825de790122d0a66513bca2965e5b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b825de790122d0a66513bca2965e5b2 = $attributes; } ?>
<?php $component = App\View\Components\FrontBlogsComponent::resolve(['title' => ''.e(__('shard.related-blogs')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <!--end Related Blogs -->



    </div>
    <!-- End / Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/blog-detail.blade.php ENDPATH**/ ?>