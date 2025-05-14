


<a  class="badge badge-pill badge-danger p-2 text-white" data-toggle="modal" data-target="#verticalModal-<?php echo e($id); ?>"
    style="padding: 5px !important;">
    
    <span class="fe fe-24 fe-trash-2"></span>
</a>



<div class="modal fade" id="verticalModal-<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verticalModalTitle"><?php echo e(__('shard.delete')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"><?php echo e(__('shard.delete-message')); ?> <?php echo e($id); ?></div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary"
                    data-dismiss="modal"><?php echo e(__('shard.close')); ?></button>
                <form action="<?php echo e($href); ?>" method="post" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <a href="<?php echo e($href); ?>" class="btn mb-2 btn-danger"  onclick="event.preventDefault();
    this.closest('form').submit();"><?php echo e(__('shard.yes')); ?></a>
                </form>

            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\laragon\www\project\resources\views/components/delete-form-button.blade.php ENDPATH**/ ?>