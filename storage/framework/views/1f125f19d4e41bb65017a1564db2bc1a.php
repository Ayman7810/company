<?php if(session("$method")): ?>
    <div class="alert alert-success mt-4" id="success-alert">
        <?php echo e(session("$method")); ?>

    </div>
<?php endif; ?>
<?php /**PATH E:\laragon\www\project\resources\views/components/alert-success.blade.php ENDPATH**/ ?>