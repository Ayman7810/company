<?php if($paginator->hasPages()): ?>
    <ul class="pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <span class="pagination__item disabled">«</span>
        <?php else: ?>
            <a class="pagination__item" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">«</a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_string($element)): ?>
                <span class="pagination__item disabled"><?php echo e($element); ?></span>
            <?php endif; ?>

            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="pagination__item active"><?php echo e($page); ?></span>
                    <?php else: ?>
                        <a class="pagination__item" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <a class="pagination__item" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">»</a>
        <?php else: ?>
            <span class="pagination__item disabled">»</span>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH E:\laragon\www\project\resources\views/vendor/pagination/my-pagination.blade.php ENDPATH**/ ?>