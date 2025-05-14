

<?php $__env->startSection('title', 'Blog'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content-->
    <div class="md-content">

        <?php if (isset($component)) { $__componentOriginalead54f42f3ad020dd40b4df55f14e573 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalead54f42f3ad020dd40b4df55f14e573 = $attributes; } ?>
<?php $component = App\View\Components\BreadcrumbComponent::resolve(['title' => ''.e(__('shard.blog')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <section class="md-section" <?php if($language == 'ar'): ?> style="direction: rtl" <?php endif; ?>>
            <div class="container">

                <!-- layout-blog sidebar-left -->
                <div class="layout-blog sidebar-left">
                    <div class="layout-blog__content" id="blogsContent">
                        <?php echo $__env->make('front.partials.blogsAjax', ['blogs' => $blogs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <aside class="layout-blog__sidebar">
                        <div>

                            <!-- widget-text__widget -->
                            <section class="widget-text__widget widget-text__style-02 widget">
                                <h3 class="widget-title"><?php echo e(__('shard.search')); ?></h3>
                                <div class="widget-text__content">

                                    <!-- form-search -->
                                    <div class="form-search">
                                        <input class="form-control" type="text"
                                            placeholder="<?php echo e(__('shard.Type and Hit Enter')); ?>" id="searchBlogs" />
                                    </div><!-- End / form-search -->

                                </div>
                            </section>


                            <?php if(count($categories)): ?>
                                <section class="widget-text__widget widget-text__style-02 widget">
                                    <h3 class="widget-title"><?php echo e(__('shard.categories')); ?></h3>
                                    <div class="widget-text__content">
                                        <ul>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($language == 'ar'): ?>
                                                    <li><a href="#"><?php echo e($category->title_ar); ?></a></li>
                                                <?php else: ?>
                                                    <li><a href="#"><?php echo e($category->title); ?></a></li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </section>
                            <?php endif; ?>


                            <section class="widget-text__widget widget-text__style-04 widget">
                                <h3 class="widget-title"><?php echo e(__('shard.old post')); ?></h3>
                                <div class="widget-text__content">

                                    <!--  -->
                                    <?php if(count($oldBlogs)): ?>
                                        <?php $__currentLoopData = $oldBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="post-01__style-03">
                                                <div>
                                                    <?php if($language == 'ar'): ?>
                                                        <style>
                                                            .widget-text__style-02 ul li:before,
                                                            .widget-text__style-03 ul li:before {
                                                                content: "\F104";
                                                            }
                                                        </style>
                                                        <h2 class="post-01__title"><a
                                                                href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><?php echo e($blog->title_ar); ?></a>
                                                        </h2>
                                                        <div class="post-01__time"><?php echo e($blog->created_at->format('d M y')); ?>

                                                        </div>
                                                        <div class="post-01__note"> <?php echo e(Auth::user()->name ?? 'الادمن'); ?>

                                                            بواسطة </div>
                                                    <?php else: ?>
                                                        <h2 class="post-01__title"><a
                                                                href="<?php echo e(route('front.blog-detail', ['blog' => $blog])); ?>"><?php echo e($blog->title); ?></a>
                                                        </h2>
                                                        <div class="post-01__time"><?php echo e($blog->created_at->format('d M y')); ?>

                                                        </div>
                                                        <div class="post-01__note">by <?php echo e(Auth::user()->name ?? 'admin'); ?>

                                                        </div>
                                                    <?php endif; ?>


                                                </div>
                                            </div><!-- End /  -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>


                                </div>
                            </section>

                        </div><!-- End /  -->

                    </aside>
                </div>

            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let searchInput = document.getElementById("searchBlogs");

            if (searchInput) {
                searchInput.addEventListener("keyup", function() {
                    let query = this.value.trim();

                    fetch("<?php echo e(route('front.searchBlogs')); ?>?query=" + encodeURIComponent(query), {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => {
                            if (!res.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return res.text();
                        })
                        .then(data => {
                            document.getElementById('blogsContent').innerHTML = data;
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            document.getElementById('blogsContent').innerHTML =
                                '<div class="alert alert-danger">حدث خطأ أثناء البحث. يرجى المحاولة مرة أخرى.</div>';
                        });

                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/blog.blade.php ENDPATH**/ ?>