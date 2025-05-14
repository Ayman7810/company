<table class="table table-hover" >
      <thead>
          <tr>
              <th>#</th>
              <th><?php echo e(__('shard.title')); ?></th>
              <th><?php echo e(__('shard.category')); ?></th>
              <th><?php echo e(__('shard.description')); ?></th>
              <th><?php echo e(__('shard.user')); ?></th>
              <th width='15%'><?php echo e(__('shard.actions')); ?></th>
          </tr>
      </thead>
      <tbody >
            <?php if($blogs->isEmpty()): ?>
            <tr>
                <td colspan="100%">
                    <?php if (isset($component)) { $__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.empty-alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('empty-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8)): ?>
<?php $attributes = $__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8; ?>
<?php unset($__attributesOriginal9d1b3d53bf81dcb6b33f7466101a80b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8)): ?>
<?php $component = $__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8; ?>
<?php unset($__componentOriginal9d1b3d53bf81dcb6b33f7466101a80b8); ?>
<?php endif; ?>
                </td>
            </tr>
        <?php else: ?>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($blog->id); ?></td>
                    <td><?php echo e($blog->title); ?></td>
                    <td><?php echo e($blog->category->title ?? 'بدون تصنيف'); ?></td>
                    <td><?php echo e(Str::limit($blog->description, 50)); ?></td>
                    <td><?php echo e(Auth::user()->name ?? 'مجهول'); ?></td>
                    <td>
                        <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ''.e(route('admin.blog.edit', ['blog' => $blog])).'','type' => 'show'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
        
                        <?php if (isset($component)) { $__componentOriginale9eefe50b390207aad69b8e237e3dc7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d = $attributes; } ?>
<?php $component = App\View\Components\ActionButton::resolve(['href' => ''.e(route('admin.blog.edit', ['blog' => $blog])).'','type' => 'edit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ActionButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $attributes = $__attributesOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__attributesOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d)): ?>
<?php $component = $__componentOriginale9eefe50b390207aad69b8e237e3dc7d; ?>
<?php unset($__componentOriginale9eefe50b390207aad69b8e237e3dc7d); ?>
<?php endif; ?>
        
                        <?php if (isset($component)) { $__componentOriginald59bc6cf9e3f421a6215946deb418a05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald59bc6cf9e3f421a6215946deb418a05 = $attributes; } ?>
<?php $component = App\View\Components\DeleteFormButton::resolve(['href' => ''.e(route('admin.blog.destroy', ['blog' => $blog])).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('delete-form-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DeleteFormButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald59bc6cf9e3f421a6215946deb418a05)): ?>
<?php $attributes = $__attributesOriginald59bc6cf9e3f421a6215946deb418a05; ?>
<?php unset($__attributesOriginald59bc6cf9e3f421a6215946deb418a05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald59bc6cf9e3f421a6215946deb418a05)): ?>
<?php $component = $__componentOriginald59bc6cf9e3f421a6215946deb418a05; ?>
<?php unset($__componentOriginald59bc6cf9e3f421a6215946deb418a05); ?>
<?php endif; ?>
        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
          
      </tbody>
  </table>

<?php /**PATH E:\laragon\www\project\resources\views/admin/blog/tbody.blade.php ENDPATH**/ ?>