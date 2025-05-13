@php
    $dir = LaravelLocalization::getCurrentLocale() == 'ar' ? 'assets-admin-rtl' : 'assets-admin';
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ __('shard.dashboard') }} - @yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/feather.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/select2.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/dropzone.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/uppy.min.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/jquery.steps.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset($dir) }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset($dir) }}/css/app-dark.css" id="darkTheme" disabled>
  
    
    
</head>
