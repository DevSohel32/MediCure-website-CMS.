<!doctype html>
@if($global_setting->layout_direction == 'LTR')
<html lang="en" dir="ltr">
@else
<html lang="en" dir="rtl">
@endif
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>{{ __('Admin Panel') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('uploads/'.$global_setting->favicon) }}">
        
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @include('admin.layouts.style')
    @include('admin.layouts.script')

    <style>
        .navbar-bg,
        .section .section-header .btn,
        .section-body button[type="submit"] {
            background-color: #{{ $global_setting->theme_color_1 }};
        }
        .section .section-header .btn,
        .section-body button[type="submit"] {
            border-color: #{{ $global_setting->theme_color_1 }};
        }
        .sidebar-tabs .nav-link.active,
        .sidebar-tabs .nav-link:hover {
            background-color: #{{ $global_setting->theme_color_1 }}!important;
        }
    </style>
    
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        @yield('main_content')
    </div>
</div>

@include('admin.layouts.script_footer')

</body>
</html>