@php
$menu_data = App\Models\Menu::get();
$menu_item = array();
@endphp
@foreach($menu_data as $row)
    @php
    $menu_item[$row->name] = $row->status;
    @endphp
@endforeach
<!-- header-area -->
<header>
    <div id="header-fixed-height"></div>
    @include('front.layouts.top')
    <div id="sticky-header" class="tg-header__area tg-header__area-four">
        <style>
            .logo .logo-sticky { display: none; }
            #sticky-header.sticky-menu .logo .logo-default { display: none; }
            #sticky-header.sticky-menu .logo .logo-sticky { display: inline-block; }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img class="logo-default" src="{{ asset('uploads/'.$global_setting->logo) }}" alt="Logo">
                                    <img class="logo-sticky" src="{{ asset('uploads/'.$global_setting->logo_white) }}" alt="Logo">
                                </a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                <ul class="navigation">

                                    @if($menu_item['Home'] == 'Show')
                                    <li class="black-color"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                    @endif

                                    @if($menu_item['About'] == 'Show')
                                    <li class="black-color {{ Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">{{ __('About Us') }}</a></li>
                                    @endif

                                    @if($menu_item['Services'] == 'Show')
                                    <li class="black-color {{ Route::is('services') ? 'active' : '' }}"><a href="{{ route('services') }}">{{ __('Services') }}</a></li>
                                    @endif

                                    @if($menu_item['FAQ'] == 'Show' || $menu_item['Departments'] == 'Show' || $menu_item['Doctors'] == 'Show' || $menu_item['Pricing'] == 'Show' || $menu_item['Photo Gallery'] == 'Show' || $menu_item['Video Gallery'] == 'Show')
                                    <li class="black-color menu-item-has-children"><a href="javascript:void(0);">{{ __('Pages') }}</a>
                                        <ul class="sub-menu">

                                            @if($menu_item['FAQ'] == 'Show')
                                            <li><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                                            @endif

                                            @if($menu_item['Departments'] == 'Show')
                                            <li><a href="{{ route('departments') }}">{{ __('Departments') }}</a></li>
                                            @endif

                                            @if($menu_item['Doctors'] == 'Show')
                                            <li><a href="{{ route('doctors') }}">{{ __('Doctors') }}</a></li>
                                            @endif

                                            @if($menu_item['Pricing'] == 'Show')
                                            <li><a href="{{ route('pricing') }}">{{ __('Pricing') }}</a></li>
                                            @endif

                                            @if($menu_item['Photo Gallery'] == 'Show')
                                            <li><a href="{{ route('photo_gallery') }}">{{ __('Photo Gallery') }}</a></li>
                                            @endif

                                            @if($menu_item['Video Gallery'] == 'Show')
                                            <li><a href="{{ route('video_gallery') }}">{{ __('Video Gallery') }}</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    @endif

                                    @if($menu_item['Blog'] == 'Show')
                                    <li class="{{ Route::is('blog') ? 'active' : '' }} black-color"><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                                    @endif

                                    @if($menu_item['Contact'] == 'Show')
                                    <li class="{{ Route::is('contact') ? 'active' : '' }} black-color"><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                    @endif
                                </ul>
                            </div>

                            @if($menu_item['Appointment'] == 'Show')
                            <div class="tgmenu__action d-none d-md-block">
                                <ul class="list-wrap">
                                    <li class="offCanvas-menu">
                                        <a href="{{ route('appointment') }}" class="btn">
                                            <span class="btn-text" data-text="{{ __('Make An Appointment') }}"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endif

                            <div class="mobile-nav-toggler d-lg-none d-inline-flex">
                                <a href="javascript:void(0)" class="sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="tgmobile__menu">
        <nav class="tgmobile__menu-box">
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <div class="nav-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('uploads/'.$global_setting->logo) }}" alt="Logo"></a>
            </div>
            <div class="tgmobile__menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <div class="tgmobile__menu-backdrop"></div>
    <!-- End Mobile Menu -->
</header>
<!-- header-area-end -->
