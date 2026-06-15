@extends('front.layouts.master')
@section('main_content')
<!--==============================
Hero Area
==============================-->
<section class="hero-wrapper hero-1">
    <div class="hero-slider1 overflow-hidden">
        <div class="tg-swiper__slider swiper-container" id="heroSlider1" data-swiper-options='{
                "effect": "fade",
                "slidesPerView": "1",
                "autoHeight": "true"
            }'>
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide" data-background="{{ asset('uploads/'.$slider->photo) }}">
                    <div class="hero-bg-shape1-1"></div>
                    <div class="hero-bg-shape1-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero-style1">
                                    <div class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                                        {!! nl2br($slider->subheading) !!}
                                    </div>
                                    <h1 class="hero-title">
                                        <div class="title1" data-ani="slideinup" data-ani-delay="0.2s">
                                            {!! nl2br($slider->heading) !!}
                                        </div>
                                    </h1>
                                    @if($slider->button1_text != '' || $slider->button2_text != '')
                                    <div class="tg-button-wrap" data-ani="slideinup" data-ani-delay="0.5s">
                                        @if($slider->button1_text)
                                        <a href="{{ $slider->button1_link }}" class="btn btn-three">
                                            <span class="btn-text" data-text="{{ $slider->button1_text }}"></span>
                                        </a>
                                        @endif
                                        @if($slider->button2_text)
                                        <a href="{{ $slider->button2_link }}" class="btn btn-four">
                                            <span class="btn-text" data-text="{{ $slider->button2_text }}"></span>
                                        </a>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-pagination2"></div>
        </div>
    </div>
</section>
<!--======== / Hero Section ========-->

<!--==============================
About Area
==============================-->
@if($global_page_item->home_about_status == 'Show')
<section class="about-area-2 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="about-wrap2">
            <div class="row gx-60 gy-5 align-items-center">
                <div class="col-xl-6">
                    <div class="about-thumb2-1">
                        <div class="img1">
                            <div class="thumb image-anim">
                                <img src="{{ asset('uploads/'.$global_page_item->home_about_photo1) }}" alt="img">
                            </div>
                        </div>
                        <div class="img2">
                            <div class="thumb image-anim">
                                <img src="{{ asset('uploads/'.$global_page_item->home_about_photo2) }}" alt="img">
                            </div>
                        </div>
                        <div class="about-bg-shape2-1">
                            <div class="shape1"></div>
                            <div class="shape2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="section__title">
                        <span class="sub-title text-anim">{{ $global_page_item->home_about_subheading }}</span>
                        <h2 class="title text-anim2">
                            {!! nl2br($global_page_item->home_about_heading) !!}
                        </h2>
                    </div>
                    @if($global_page_item->home_about_text != '')
                    <p class="mt-30 mb-40">
                        {!! nl2br($global_page_item->home_about_text) !!}
                    </p>
                    @endif
                    <div class="checklist-wrap">
                        <ul class="list-wrap">
                            {!! $global_page_item->home_about_list_items !!}
                        </ul>
                    </div>
                    @if($global_page_item->home_about_phone != '')
                    <div class="cta-link"><i class="fas fa-phone-alt"></i> <a href="tel:{{ $global_page_item->home_about_phone }}">{{ $global_page_item->home_about_phone }}</a></div>
                    @endif
                    <div class="tg-button-wrap mt-30">
                        <a href="{{ route('appointment') }}" class="btn">
                            <span class="btn-text" data-text="{{ $global_page_item->home_about_button_text }}"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--======== / About Section ========-->

<!--==============================
Why Choose Us Area
==============================-->
@if($global_page_item->home_feature_status == 'Show')
<section class="wcu-area-1 pt-120 pb-120 smoke5-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section__title text-center mb-50">
                    <span class="sub-title text-anim">{{ $global_page_item->home_feature_subheading }}</span>
                    <h2 class="title text-anim2">
                        {{ $global_page_item->home_feature_heading }}
                    </h2>
                </div>
            </div>
        </div>
        <style>
           .wcu-card1:hover {
              border-radius: 10px;
              box-shadow:0 10px 20px rgb(153 175 255 / 86%);
           }
        </style>

        <div class="row gy-40">
            @foreach($features as $feature)
            <div class="col-xl-3 col-md-6">
                <div class="wcu-card  wcu-card1 border p-3 rounded-2">
                    <div class="box-icon">
                        {!! $feature->icon_code !!}
                    </div>
                    <h4 class="box-title">{{ $feature->name }}</h4>
                    <p class="box-text">
                        {!! nl2br($feature->content) !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!--======== / Why Choose Us Section ========-->

<!--==============================
Video Area
==============================-->
@if($global_page_item->home_video_status == 'Show')
<section class="video-area-1 pt-120 pb-120 overflow-hidden position-relative">
    <div class="video-bg-shape1 spin"><img src="{{ asset('uploads/bg/video-bg-shape1-1.png') }}" alt="img"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section__title text-center mb-50">
                    <span class="sub-title text-anim">{{ $global_page_item->home_video_subheading }}</span>
                    <h2 class="title text-anim2">
                        {!! nl2br($global_page_item->home_video_heading) !!}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="video-wrap1">
                    <div class="video-thumb-box1">
                        <img src="{{ asset('uploads/'.$global_page_item->home_video_photo) }}" alt="img">
                        <a href="https://www.youtube.com/watch?v={{ $global_page_item->home_video_youtube }}" class="video-link popup-video">{{ __('Watch Our Video') }} <span class="video-btn"><i class="far fa-play-circle"></i></span>
                        </a>
                        <h4 class="video-text">{{ __('Watch Video') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--======== / Video Section ========-->

<!--==============================
Doctor
==============================-->
@if($global_page_item->home_doctor_status == 'Show')
 <section class="team-area-3 pt-120 pb-120 overflow-hidden gray-bg position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center mb-50">
                    <span class="sub-title text-anim">{{ $global_page_item->home_doctor_subheading }}</span>
                    <h2 class="title text-white text-anim2">
                        {{ $global_page_item->home_doctor_heading }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gy-40 justify-content-center">
            @foreach($doctors as $doctor)
            <div class="col-xl-3 col-md-6">
                <div class="team-card style3">
                    <!-- Image container must have position-relative & overflow-hidden -->
                    <div class="box-img image-anim position-relative overflow-hidden">
                        <a href="{{ route('doctor',$doctor->slug) }}" class="thumb d-block">
                            <img src="{{ asset('uploads/'.$doctor->photo) }}" alt="{{ $doctor->name }}" class="img-fluid w-100">
                        </a>

                        @if($doctor->facebook != '' || $doctor->twitter != '' || $doctor->linkedin != '' || $doctor->instagram != '')
                        <div class="social-wrap-slide">
                            @if($doctor->facebook)
                            <a target="_blank" href="{{ $doctor->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($doctor->twitter)
                            <a target="_blank" href="{{ $doctor->twitter }}">
                                <svg class="d-inline-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z" fill="currentColor" />
                                </svg>
                            </a>
                            @endif
                            @if($doctor->linkedin)
                            <a target="_blank" href="{{ $doctor->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            @endif
                            @if($doctor->instagram)
                            <a target="_blank" href="{{ $doctor->instagram }}"><i class="fab fa-instagram"></i></a>
                            @endif
                        </div>
                        @endif
                    </div>
                    <div class="team-card-details text-center pt-3">
                        <h4 class="box-title mb-1"><a href="{{ route('doctor',$doctor->slug) }}" class="text-decoration-none">{{ $doctor->name }}</a></h4>
                        <span class="box-text text-muted">{{ $doctor->designation }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<style>

</style>
<!--======== / Doctor Section ========-->



<!--==============================
Blog Area
==============================-->
@if($global_page_item->home_blog_status == 'Show')
<section class="blog-area-3 pt-120 pb-120">
    <div class="container">
        <div class="section__title mb-50 text-center">
            <span class="sub-title text-anim">{{ $global_page_item->home_blog_subheading }}</span>
            <h2 class="title text-anim2">
                {{ $global_page_item->home_blog_heading }}
            </h2>
        </div>
        <div class="row gy-30 justify-content-center">
            @forelse($posts as $post)
            <div class="col-xl-4 col-md-6">
                <div class="blog__post-item blog__post-item-five">
                    <div class="blog__post-thumb image-anim">
                        <a href="{{ route('post',$post->slug) }}"><img src="{{ asset('uploads/'.$post->photo) }}" alt="img"></a>
                    </div>
                    <div class="blog__post-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li><a href="javascript:void(0)">
                                    <i class="fas fa-calendar"></i>
                                    {{ date('d M, Y', strtotime($post->created_at)) }}</a></li>
                                <li><a href="javascript:void(0)">
                                    <i class="fas fa-user"></i>
                                    {{ __('by') }} {{ $admin_data->name }}</a></li>
                            </ul>
                        </div>
                        <h3 class="title">
                            <a href="{{ route('post',$post->slug) }}">{{ $post->title }}</a>
                        </h3>
                        <div class="blog__post-bottom">
                            <a href="{{ route('post',$post->slug) }}" class="link-btn">
                                {{ __('READ MORE') }}
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!--======== / Blog Section ========-->
@endsection
