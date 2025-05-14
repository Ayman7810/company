<!doctype html>
<html lang="en">
<?php echo $__env->make('admin.auth.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body class="light ">
    <ul class="container  nav">
      
      <?php if (isset($component)) { $__componentOriginal247b8ef9537e7499a84fd4fbcbbe6a6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal247b8ef9537e7499a84fd4fbcbbe6a6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.language-swiching','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('language-swiching'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal247b8ef9537e7499a84fd4fbcbbe6a6d)): ?>
<?php $attributes = $__attributesOriginal247b8ef9537e7499a84fd4fbcbbe6a6d; ?>
<?php unset($__attributesOriginal247b8ef9537e7499a84fd4fbcbbe6a6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal247b8ef9537e7499a84fd4fbcbbe6a6d)): ?>
<?php $component = $__componentOriginal247b8ef9537e7499a84fd4fbcbbe6a6d; ?>
<?php unset($__componentOriginal247b8ef9537e7499a84fd4fbcbbe6a6d); ?>
<?php endif; ?>
    </ul>
    <div class="wrapper vh-100">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('admin.auth.partials.scriptes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
</body>
</html><?php /**PATH E:\laragon\www\project\resources\views/admin/auth/layout.blade.php ENDPATH**/ ?>