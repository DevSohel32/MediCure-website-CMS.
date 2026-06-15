<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_dashboard') }}">
                <img src="{{ asset('uploads/'.$global_setting->logo) }}" alt="Logo">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_dashboard') }}">
                <img src="{{ asset('uploads/'.$global_setting->favicon) }}" alt="Logo">
            </a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_dashboard') }}"><i class="fas fa-home"></i> <span>{{ __('Dashboard') }}</span></a></li>

            <li class="{{ Request::is('admin/setting/index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_setting_index') }}"><i class="fas fa-cog"></i> <span>{{ __('Website Setting') }}</span></a></li>

            <li class="{{ Request::is('admin/page-item/index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_item_index') }}"><i class="fas fa-wrench"></i> <span>{{ __('Page Setting') }}</span></a></li>

            <li class="{{ Request::is('admin/translation/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_translation_index') }}"><i class="fas fa-language"></i> <span>{{ __('Translation') }}</span></a></li>

            <li class="{{ Request::is('admin/menu/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_menu_index') }}"><i class="fas fa-bars"></i> <span>{{ __('Menu') }}</span></a></li>

            <li class="{{ Request::is('admin/slider/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_slider_index') }}"><i class="fas fa-sliders-h"></i> <span>{{ __('Sliders') }}</span></a></li>

            <li class="{{ Request::is('admin/post-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_post_category_index') }}"><i class="fas fa-vector-square"></i> <span>{{ __('Post Category') }}</span></a></li>

            <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_post_index') }}"><i class="far fa-file-alt"></i> <span>{{ __('Posts') }}</span></a></li>

            <li class="{{ Request::is('admin/comments') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_comment') }}"><i class="far fa-comment"></i> <span>{{ __('Comments') }}</span></a></li>

            <li class="{{ Request::is('admin/replies') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_reply') }}"><i class="fas fa-reply"></i> <span>{{ __('Replies') }}</span></a></li>

            <li class="{{ Request::is('admin/service/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_service_index') }}"><i class="fas fa-window-restore"></i> <span>{{ __('Services') }}</span></a></li>

            <li class="{{ Request::is('admin/department/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_department_index') }}"><i class="fas fa-th-large"></i> <span>{{ __('Departments') }}</span></a></li>

            <li class="{{ Request::is('admin/doctor/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_doctor_index') }}"><i class="fas fa-users"></i> <span>{{ __('Doctors') }}</span></a></li>

            <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_feature_index') }}"><i class="fas fa-share-alt"></i> <span>{{ __('Features') }}</span></a></li>

            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_index') }}"><i class="fas fa-random"></i> <span>{{ __('FAQ') }}</span></a></li>

            <li class="{{ Request::is('admin/package/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_package_index') }}"><i class="fas fa-network-wired"></i> <span>{{ __('Packages') }}</span></a></li>

            <li class="{{ Request::is('admin/counter-item/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_counter_item_index') }}"><i class="fas fa-share-alt-square"></i> <span>{{ __('Counter Items') }}</span></a></li>

            <li class="{{ Request::is('admin/subscriber/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_subscriber_index') }}"><i class="fas fa-user-cog"></i> <span>{{ __('Subscribers') }}</span></a></li>

            <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_photo_index') }}"><i class="fas fa-image"></i> <span>{{ __('Photo Gallery') }}</span></a></li>

            <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_video_index') }}"><i class="fas fa-play-circle"></i> <span>{{ __('Video Gallery') }}</span></a></li>

        </ul>
    </aside>
</div>
