<!doctype html>
<html lang="en">

<?php echo $__env->make('admin.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="vertical  light <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> rtl <?php endif; ?> ">
   
    <div class="wrapper">
        <?php echo $__env->make('admin.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main role="main" class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <!-- main -->
    </div> <!-- .wrapper -->
    <?php echo $__env->make('admin.partials.scriptes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
</body>

</html>
<?php /**PATH E:\laragon\www\project\resources\views/admin/layout.blade.php ENDPATH**/ ?>