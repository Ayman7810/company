<li class="nav-item dropdown">
    <?php
                                  
    $language = request()->segment(1) == 'ar' ? 'العربية' : 'en' ;
    $language1 = request()->segment(1) == 'ar' ? 'الانجليزية': 'ar' ;
    $Localization = request()->segment(1) == 'ar' ? 'en' : 'ar';
    ?>
    <a class="nav-link dropdown-toggle text-muted pr-0  my-2" href="#" id="navbarDropdownMenuLink"
        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="avatar avatar-sm mt-2">
            <?php echo e(strtoupper($language)); ?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="<?php echo e(LaravelLocalization::getLocalizedURL($Localization)); ?>"><?php echo e(strtoupper($language1)); ?></a>
    </div>
    
</li>
<?php /**PATH E:\laragon\www\project\resources\views/components/language-swiching.blade.php ENDPATH**/ ?>