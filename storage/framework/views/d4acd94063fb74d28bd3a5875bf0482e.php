<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
            placeholder="<?php echo e(__('nav.search')); ?>" aria-label="Search">
    </form>
    <ul class="nav">
    
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
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                <span class="fe fe-grid fe-16"></span>
            </a>
        </li>
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <span class="fe fe-bell fe-16"></span>
                <span class="dot dot-md bg-success"></span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="<?php echo e(asset('assets-admin')); ?>/avatars/face-1.jpg" alt="..."
                        class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activities</a>
                <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                  <?php echo csrf_field(); ?>
                    <a class="dropdown-item"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                </form>
            </div>
            
        </li>
     
    </ul>
</nav>
<?php /**PATH E:\laragon\www\project\resources\views/admin/partials/nav.blade.php ENDPATH**/ ?>