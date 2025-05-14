

<?php $__env->startSection('title', __('shard.services')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2 class="page-title"><?php echo e(__('shard.services')); ?></h2>
                <a href="#" class="btn btn-pill btn-success "><span class="fe fe-24 fe-plus text-white"></span></a>
            </div>
            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('shard.title')); ?></th>
                                        <th><?php echo e(__('shard.description')); ?></th>
                                        <th><?php echo e(__('shard.icon')); ?></th>
                                        <th width='15%'><?php echo e(__('shard.actions')); ?></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($services) > 0): ?>
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($services->firstItem() + $loop->index); ?></td>
                                                <td><?php echo e($service->title); ?></td>
                                                <td><?php echo e($service->description); ?></td>
                                                <td><span class="fe fe-24 <?php echo e($service->icon); ?>"></span> </td>
                                                <td>
                                                    <a href="#"
                                                        class="badge badge-pill badge-primary text-white"><span
                                                            class="fe fe-24 fe-eye"></span></a>
                                                    <a href="#" class="badge badge-pill badge-warning"><span
                                                            class="fe fe-24 fe-edit text-white"></span></a>
                                                    <a href="#" class="badge badge-pill badge-danger"><span
                                                            class="fe fe-24 fe-trash-2"></span></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="4" class="alert alert-danger"><?php echo e(__('shard.no-data-found')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                <?php echo e($services->render('pagination::bootstrap-4')); ?></div>
                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->

            </div> <!-- .col-12 -->
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\project\resources\views/admin/service.blade.php ENDPATH**/ ?>