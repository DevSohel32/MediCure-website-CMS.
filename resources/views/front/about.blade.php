@extends('front.layouts.master')
@section('main_content')
<!--==============================
Breadcrumb Area
==============================-->
<section class="breadcrumb__area fix" data-background="{{ asset('uploads/'.$global_setting->banner) }}">
    <div class="breadcrumb__bg-shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb__content">
                    <h3 class="title">{{ $global_page_item->about_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->about_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
About Area
==============================-->
@if($global_page_item->about_about_status == 'Show')
<section class="about-area-2 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="about-wrap2">
            <div class="row gx-60 gy-5 align-items-center">
                <div class="col-xl-6">
                    <div class="about-thumb2-1">
                        <div class="img1">
                            <div class="thumb image-anim">
                                <img src="{{ asset('uploads/'.$global_page_item->about_about_photo1) }}" alt="img">
                            </div>
                        </div>
                        <div class="img2">
                            <div class="thumb image-anim">
                                <img src="{{ asset('uploads/'.$global_page_item->about_about_photo2) }}" alt="img">
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
                        <span class="sub-title text-anim">{{ $global_page_item->about_about_subheading }}</span>
                        <h2 class="title text-anim2">
                            {!! nl2br($global_page_item->about_about_heading) !!}
                        </h2>
                    </div>
                    @if($global_page_item->about_about_text != '')
                    <p class="mt-30 mb-40">
                        {!! nl2br($global_page_item->about_about_text) !!}
                    </p>
                    @endif
                    <div class="checklist-wrap">
                        <ul class="list-wrap">
                            {!! $global_page_item->about_about_list_items !!}
                        </ul>
                    </div>
                    @if($global_page_item->about_about_phone != '')
                    <div class="cta-link"><i class="fas fa-phone-alt"></i> <a href="tel:{{ $global_page_item->about_about_phone }}">{{ $global_page_item->about_about_phone }}</a></div>
                    @endif
                    <div class="tg-button-wrap mt-30">
                        <a href="{{ route('appointment') }}" class="btn">
                            <span class="btn-text" data-text="{{ $global_page_item->about_about_button_text }}"></span>
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
Doctor Area
==============================-->
@if($global_page_item->about_doctor_status == 'Show')
<section class="team-area-1 pt-120 pb-120 gray-bg section-radius position-relative">
    <div class="team-bg-shape3-1 d-xl-block d-none">
        <img src="{{ asset('uploads/bg/team-bg-shape3-1.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section__title text-center mb-50">
                    <span class="sub-title text-anim">{{ $global_page_item->about_doctor_subheading }}</span>
                    <h2 class="title text-white text-anim2">{{ $global_page_item->about_doctor_heading }}</h2>
                </div>
            </div>
        </div>
        <div class="row gy-30 justify-content-center">
            @foreach($doctors as $doctor)
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="box-img image-anim">
                        <a href="{{ route('doctor',$doctor->slug) }}" class="thumb">
                            <img src="{{ asset('uploads/'.$doctor->photo) }}" alt="img">
                        </a>
                        @if($doctor->facebook != '' || $doctor->twitter != '' || $doctor->linkedin != '' || $doctor->instagram != '')
                        <div class="team-social">
                            <button class="icon-btn"><i class="fas fa-share-alt"></i></button>
                            <div class="social-wrap">
                                @if($doctor->facebook)
                                <a target="_blank" href="{{ $doctor->facebook }}" tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if($doctor->twitter)
                                <a target="_blank" href="{{ $doctor->twitter }}" tabindex="-1">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                @endif
                                @if($doctor->linkedin)
                                <a target="_blank" href="{{ $doctor->linkedin }}" tabindex="-1"><i class="fab fa-linkedin-in"></i></a>
                                @endif
                                @if($doctor->instagram)
                                <a target="_blank" href="{{ $doctor->instagram }}" tabindex="-1"><i class="fab fa-instagram"></i></a>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="team-card-details">
                        <h4 class="box-title"><a href="{{ route('doctor',$doctor->slug) }}">{{ $doctor->name }}</a></h4>
                        <span class="box-text">{{ $doctor->designation }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!--======== / Team Section ========-->


<!--==============================
Counter Area
==============================-->
@if($global_page_item->about_counter_status == 'Show')
<section class="counter-area-1 pb-120 pt-120">
    <div class="container">
        <div class="row gy-30 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="counter-card">
                    <h3 class="counter-card_title"><span class="counter-number">{{ $counter_item->item1_number }}</span>+</h3>
                    <p class="counter-card_subtitle">{{ $counter_item->item1_title }}</p>
                    <p class="counter-card_text">
                        {!! nl2br($counter_item->item1_content) !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="counter-card">
                    <h3 class="counter-card_title"><span class="counter-number">{{ $counter_item->item2_number }}</span>+</h3>
                    <p class="counter-card_subtitle">{{ $counter_item->item2_title }}</p>
                    <p class="counter-card_text">
                        {!! nl2br($counter_item->item2_content) !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="counter-card">
                    <h3 class="counter-card_title"><span class="counter-number">{{ $counter_item->item3_number }}</span>+</h3>
                    <p class="counter-card_subtitle">{{ $counter_item->item3_title }}</p>
                    <p class="counter-card_text">
                        {!! nl2br($counter_item->item3_content) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--======== / Counter Section ========-->

@endsection