<!doctype html>
@if($global_setting->layout_direction == 'LTR')
<html lang="en" dir="ltr">
@else
<html lang="en" dir="rtl">
@endif
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('uploads/'.$global_setting->favicon) }}">

    @include('front.layouts.style')

    @if(Route::is('home'))
        <title>{{ $global_page_item->home_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->home_seo_meta_description }}">
    @endif

    @if(Route::is('about'))
        <title>{{ $global_page_item->about_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->about_seo_meta_description }}">
    @endif

    @if(Route::is('services'))
        <title>{{ $global_page_item->services_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->services_seo_meta_description }}">
    @endif

    @if(Route::is('service'))
        @php
        $service = App\Models\Service::where('slug', $service->slug)->first();
        @endphp
        <title>{{ $service->seo_title }}</title>
        <meta name="description" content="{{ $service->seo_meta_description }}">
    @endif

    @if(Route::is('projects'))
        <title>{{ $global_page_item->projects_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->projects_seo_meta_description }}">
    @endif

    @if(Route::is('project'))
        @php
        $project = App\Models\Project::where('slug', $project->slug)->first();
        @endphp
        <title>{{ $project->seo_title }}</title>
        <meta name="description" content="{{ $project->seo_meta_description }}">
    @endif

    @if(Route::is('doctors'))
        <title>{{ $global_page_item->doctors_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->doctors_seo_meta_description }}">
    @endif

    @if(Route::is('faq'))
        <title>{{ $global_page_item->faq_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->faq_seo_meta_description }}">
    @endif

    @if(Route::is('pricing'))
        <title>{{ $global_page_item->pricing_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->pricing_seo_meta_description }}">
    @endif

    @if(Route::is('photo_gallery'))
        <title>{{ $global_page_item->photo_gallery_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->photo_gallery_seo_meta_description }}">
    @endif

    @if(Route::is('video_gallery'))
        <title>{{ $global_page_item->video_gallery_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->video_gallery_seo_meta_description }}">
    @endif

    @if(Route::is('contact'))
        <title>{{ $global_page_item->contact_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->contact_seo_meta_description }}">
    @endif

    @if(Route::is('appointment'))
        <title>{{ $global_page_item->appointment_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->appointment_seo_meta_description }}">
    @endif

    @if(Route::is('terms'))
        <title>{{ $global_page_item->terms_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->terms_seo_meta_description }}">
    @endif

    @if(Route::is('privacy'))
        <title>{{ $global_page_item->privacy_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->privacy_seo_meta_description }}">
    @endif

    @if(Route::is('blog'))
        <title>{{ $global_page_item->blog_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->blog_seo_meta_description }}">
    @endif

    @if(Route::is('post'))
        @php
        $post = App\Models\Post::where('slug', $post->slug)->first();
        @endphp
        <title>{{ $post->seo_title }}</title>
        <meta name="description" content="{{ $post->seo_meta_description }}">
    @endif

    @if(Route::is('category'))
        <title>{{ $global_page_item->blog_category_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->blog_category_seo_meta_description }}">
    @endif

    @if(Route::is('tag'))
        <title>{{ $global_page_item->blog_tag_seo_title }}</title>
        <meta name="description" content="{{ $global_page_item->blog_tag_seo_meta_description }}">
    @endif

    @if(Route::is('search'))
        <title>{{ $global_page_item->blog_search_page_title }}</title>
        <meta name="description" content="{{ $global_page_item->blog_search_page_meta_description }}">
    @endif

    @if(Route::is('post') && isset($post))
        <meta property="og:title" content="{{ $post->title }}">
        <meta property="og:description" content="{{ $post->short_description }}">
        <meta property="og:image" content="{{ asset('uploads/'.$post->photo) }}">
        <meta property="og:photo" content="{{ asset('uploads/'.$post->photo) }}">
        <meta property="og:url" content="{{ route('post', $post->slug) }}">
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="{{ env('APP_NAME') }}">
        <meta property="og:image:alt" content="{{ $post->title }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $post->title }}">
        <meta name="twitter:description" content="{{ $post->short_description }}">
        <meta name="twitter:image" content="{{ asset('uploads/'.$post->photo) }}">
        @if(!empty($post->tags))
            @php $tags = array_filter(array_map('trim', explode(',', $post->tags))); @endphp
            @foreach($tags as $t)
                <meta property="article:tag" content="{{ $t }}">
            @endforeach
        @endif
        @if(!empty($post->created_at))
            <meta property="article:published_time" content="{{ $post->created_at->toIso8601String() }}">
        @endif
        @if(!empty($post->updated_at))
            <meta property="article:modified_time" content="{{ $post->updated_at->toIso8601String() }}">
        @endif
    @endif

    @if($global_setting->google_analytic_status == 'Show')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $global_setting->google_analytic_measurement_id }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ $global_setting->google_analytic_measurement_id }}');
    </script>
    @endif

    @if($global_setting->sticky_header_status == 'Hide')
    <style>
        .sticky-menu {
            display: none;
        }
    </style>
    @endif

    <style>
        :root {
            --tg-theme-primary: #{{ $global_setting->theme_color_1 }};
        }
        .wcu-card .box-icon svg,
        .service-card .box-icon svg {
            stroke: #{{ $global_setting->theme_color_1 }};
        }

        .tg-header__area-four.sticky-menu,
        .team-area-3,
        .footer__area-one,
        .testimonial-wrap3 {
            background: #{{ $global_setting->theme_color_2 }};
        }
        .social-wrap-slide a:hover{
            background-color: #{{ $global_setting->theme_color_1 }};
        }
        .footer__top-two .footer-contact .footer-contact_icon,
        .social-links.style3 .list-wrap a,
        .footer__area-three .footer__bottom {
            background: #{{ $global_setting->theme_color_3 }};
        }
    </style>

</head>

<body class="white-bg">

    @if($global_setting->preloader_status == 'Show')
    <!--Preloader-->
    <div id="preloader" class="white-bg">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('uploads/'.$global_setting->preloader_photo) }}" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->
    @endif

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- Scroll-top-end-->

    @if (
        !app()->isDownForMaintenance() &&
        !(isset($exception) && in_array($exception->getStatusCode(), [404, 503]))
    )
    @if(Route::is('home'))
    @include('front.layouts.nav_home')
    @else
    @include('front.layouts.nav')
    @endif
    @endif

    <!-- main-area -->
    <main class="fix">

    @yield('main_content')

    </main>
    <!-- main-area-end -->


    @if (
        !app()->isDownForMaintenance() &&
        !(isset($exception) && in_array($exception->getStatusCode(), [404, 503]))
    )
    @include('front.layouts.footer')
    @include('front.layouts.script')
    @endif
</body>

</html>
