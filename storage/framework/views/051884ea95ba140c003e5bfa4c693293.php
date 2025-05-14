
<div class="form-01 consult-form js-consult-form__content">

    <h2 class="form-01__title"><?php echo e(__('shard.give-us-your-feedback')); ?></h2>
    <?php if(session('success-feedback')): ?>
        <div class="alert alert-success mt-4" style="color: red" id="success-alert">
            <?php echo e(session('success-feedback')); ?>

        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('front.contact.feedback')); ?>" method="POST" class="form-01__form">
        <?php echo csrf_field(); ?>
        <div class="form__item form__item--03">
            <input type="text" name="name" placeholder="<?php echo e(__('shard.Your name')); ?>" />
        </div>
        <div class="form__item form__item--03">
            <input type="email" name="email" placeholder="<?php echo e(__('shard.Your Email')); ?>" />
        </div>
        <div class="form__item">
            <textarea rows="3" name="message" placeholder="<?php echo e(__('shard.Your message')); ?>"></textarea>
        </div>
        <div class="form__button">
            <button type="submit" class="btn btn-primary btn-w180"><?php echo e(__('shard.send-message')); ?></button>
        </div>
    </form>
</div><?php /**PATH E:\laragon\www\project\resources\views/components/Front-from-contact.blade.php ENDPATH**/ ?>