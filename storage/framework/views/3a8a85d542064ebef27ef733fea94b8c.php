<!DOCTYPE html>
<html>
<?php echo $__env->make('front.partials.heed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <div class="page-wrap">

        <?php echo $__env->make('front.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->yieldContent('content'); ?>

        
        <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <?php echo $__env->make('front.partials.scriptes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\laragon\www\project\resources\views/front/layout.blade.php ENDPATH**/ ?>