<?php if(count($features)): ?>
    <div class="row">
        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-6 col-lg-3 ">
                <div class="iconbox iconbox__style-02">
                    <div class="iconbox__icon"><i class="<?php echo e($feature->icon); ?>"></i></div>
                    <div>
                        <?php if($language == 'ar'): ?>
                            <h2 class="iconbox__title"><a href="#"><?php echo e($feature->title_ar); ?></a></h2>
                            <div class="iconbox__description"><?php echo e($feature->description_ar); ?></div>
                        <?php else: ?>
                            <h2 class="iconbox__title"><a href="#"><?php echo e($feature->title); ?></a></h2>
                            <div class="iconbox__description"><?php echo e($feature->description); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH E:\laragon\www\project\resources\views/components/front-feature-component.blade.php ENDPATH**/ ?>