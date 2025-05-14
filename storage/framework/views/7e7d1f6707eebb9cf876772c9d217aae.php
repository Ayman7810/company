

<?php $__env->startSection('title' , 'Page not found'); ?>

<?php $__env->startSection('content'); ?>
<!-- Content-->
<div class="md-content">
    <div class="consult-404">
        <div class="md-tb">
            <div class="md-tb__cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-0 offset-sm-0 offset-md-0 offset-lg-1 ">
                            <div class="consult-404__content"><img src="<?php echo e(asset('assets-front')); ?>/img/404.jpg" alt="">
                                <h1>404</h1>
                                <h2>404 Opps! Page not found </h2>
                                <p>It looks like nothing was found at this location. Click the link to return <a href="<?php echo e(route('front.index')); ?>">Home Page.</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End / Content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/front/404.blade.php ENDPATH**/ ?>