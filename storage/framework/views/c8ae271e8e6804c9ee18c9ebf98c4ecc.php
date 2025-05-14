<?php
    $dir = LaravelLocalization::getCurrentLocale() == 'ar' ? 'assets-admin-rtl' : 'assets-admin';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title><?php echo e(__('shard.dashboard')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/simplebar.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets-admin')); ?>/css/feather.css">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/select2.css">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/dropzone.css">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/uppy.min.css">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/jquery.steps.css">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="<?php echo e(asset($dir)); ?>/css/app-dark.css" id="darkTheme" disabled>
  
    
    
</head>
<?php /**PATH E:\laragon\www\project\resources\views/admin/partials/head.blade.php ENDPATH**/ ?>