<!-- header -->
<header class="header ">
    <div class="container">
        <div class="header__logo"><a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets-front')); ?>/img/logo.png"
                    alt="" /></a></div>
        <div class="header__toogleGroup">
            <div class="header__chooseLanguage">
                <?php

                    $language = request()->segment(1) == 'ar' ? 'العربية' : 'en';
                    $language1 = request()->segment(1) == 'ar' ? 'الانجليزية' : 'ar';
                    $Localization = request()->segment(1) == 'ar' ? 'en' : 'ar';
                ?>
                <!-- dropdown -->
                <div class="dropdown" data-init="dropdown"><a class="dropdown__toggle"
                        href="javascript:void(0)"><?php echo e(strtoupper($language)); ?> <i class="fa fa-angle-down"
                            aria-hidden="true"></i></a>
                    <div class="dropdown__content" data-position="right">
                        <ul class="list-style-none">
                            <li><a
                                    href="<?php echo e(LaravelLocalization::getLocalizedURL($Localization)); ?>"><?php echo e(strtoupper($language1)); ?></a>
                            </li>

                        </ul>
                    </div>
                </div><!-- End / dropdown -->

            </div>
            <div class="search-form">
                <div class="search-form__toggle"><i class="ti-search"></i></div>
                <div class="search-form__form">

                    <!-- form-search -->
                    <div class="form-search">
                        <form>
                            <input class="form-control" type="text" placeholder="<?php echo e(__('nav.search')); ?>" />
                        </form>
                    </div><!-- End / form-search -->

                </div>
            </div>
        </div>



        <!-- consult-nav -->
        <nav class="consult-nav">

            <!-- consult-menu -->
            <ul class="consult-menu">
                <?php
                    $active = collect(request()->segments())->last();
                ?>
                <li class="<?php if($active == 'en' || $active == 'ar'): ?> current-menu-item <?php endif; ?>"><a
                        href="<?php echo e(route('front.index')); ?>"><?php echo e(__('nav.home')); ?></a>
                </li>
                <li class=" <?php if($active == 'about'): ?> current-menu-item <?php endif; ?>"><a
                        href="<?php echo e(route('front.about')); ?>"><?php echo e(__('nav.about-us')); ?></a>
                </li>
                <li class=" <?php if($active == 'service'): ?> current-menu-item <?php endif; ?>"><a
                        href="<?php echo e(route('front.service')); ?>"> <?php echo e(__('nav.services')); ?></a>
                </li>

                <li class="  <?php if($active == 'projects'): ?> current-menu-item <?php endif; ?>"><a
                        href="<?php echo e(route('front.projects')); ?>"> <?php echo e(__('nav.project')); ?></a>
                </li>

                <li class=" <?php if($active == 'blog'): ?> current-menu-item <?php endif; ?>"><a
                        href="<?php echo e(route('front.blog')); ?>"> <?php echo e(__('nav.blog')); ?></a>
                </li>

                <li class=" <?php if($active == 'contact'): ?> current-menu-item <?php endif; ?>"><a
                        href="<?php echo e(route('front.contact')); ?>" class=" <?php echo $__env->yieldContent('contact-active'); ?> "><?php echo e(__('nav.contact')); ?> </a>
                </li>
            </ul><!-- consult-menu -->

            <div class="navbar-toggle"><span></span><span></span><span></span></div>
        </nav><!-- End / consult-nav -->

    </div>
</header><!-- End / header -->
<?php /**PATH E:\laragon\www\project\resources\views/front/partials/nav.blade.php ENDPATH**/ ?>