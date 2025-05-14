<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item ">
            <a href="<?php echo e(route('admin.index')); ?>" class=" nav-link">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text"><?php echo e(__('shard.home')); ?></span>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span><?php echo e(__('shard.Component')); ?></span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.services')).'','href' => ''.e(route('admin.service.index')).'','icon' => 'fe-codesandbox'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>

          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.blogs')).'','href' => ''.e(route('admin.blog.index')).'','icon' => 'fe-trello'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>

          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.projects')).'','href' => ''.e(route('admin.project.index')).'','icon' => 'fe-briefcase'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>  

          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.Advisor')).'','href' => ''.e(route('admin.advisor.index')).'','icon' => 'fe-award'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?> 
           
          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.partners')).'','href' => ''.e(route('admin.partner.index')).'','icon' => 'fe-slack'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>  

          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.certificates')).'','href' => ''.e(route('admin.certificate.index')).'','icon' => 'fe-users'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?> 

          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.features')).'','href' => ''.e(route('admin.feature.index')).'','icon' => 'fe-star'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>  

          <?php if (isset($component)) { $__componentOriginalb03251980f62d19dd6bd05af29ae735e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb03251980f62d19dd6bd05af29ae735e = $attributes; } ?>
<?php $component = App\View\Components\SidebarTab::resolve(['name' => ''.e(__('shard.feedback')).'','href' => ''.e(route('admin.feedback.index')).'','icon' => 'fe-message-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarTab::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $attributes = $__attributesOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__attributesOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb03251980f62d19dd6bd05af29ae735e)): ?>
<?php $component = $__componentOriginalb03251980f62d19dd6bd05af29ae735e; ?>
<?php unset($__componentOriginalb03251980f62d19dd6bd05af29ae735e); ?>
<?php endif; ?>  
        </ul>
      </nav>
    </aside><?php /**PATH E:\laragon\www\project\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>