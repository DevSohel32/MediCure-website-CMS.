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
                    <h3 class="title">{{ $global_page_item->contact_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->contact_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Contact Area
==============================-->
<section class="contact-page-area overflow-hidden pt-120 pb-120">
    <div class="container">
        <div class="contact-wrap2 pt-120 pb-120 smoke5-bg text-center">
            <div class="row justify-content-end">
                <div class="col-xl-12">
                    <div class="contact-form-wrap2">
                        <div class="section__title mb-30">
                            <span class="sub-title">{{ $global_page_item->contact_form_subheading }}</span>
                            <h2 class="title">{{ $global_page_item->contact_form_heading }}</h2>
                        </div>
                        <form action="{{ route('contact_send_email') }}" method="POST" class="contact__form ajax-contact">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" placeholder="{{ __('Full Name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="email" placeholder="{{ __('Email Address') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="phone" placeholder="{{ __('Phone Number') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="{{ __('Message') }}" class="form-control style-white"></textarea>
                                    </div>
                                </div>
                                @if($global_setting->captcha_status == 'Show')
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="mb-2 tal">
                                            {!! captcha_img() !!}
                                        </div>
                                        <input type="text" class="form-control style-white" name="captcha" placeholder="{{ __('Enter Captcha') }}">
                                    </div>
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn mt-30">
                                <span class="btn-text" data-text="{{ $global_page_item->contact_form_button_text }}"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--======== / Contact Section ========-->

<!-- contact-map -->
@if($global_page_item->contact_map_status == 'Show')
<div class="contact-map-area pt-120 pb-120">
    {!! $global_page_item->contact_map_code !!}
    <div class="container">
        <div class="contact-info-wrap">
            <div class="contact-info-thumb">
                <img src="{{ asset('uploads/'.$global_page_item->contact_map_photo) }}" alt="img">
            </div>
            <ul class="list-wrap">
                <li>
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="media-body">
                            <p>{{ $global_page_item->contact_map_phone_title }}</p>
                            <h4>{{ $global_page_item->contact_map_phone }}</h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="media-body">
                            <p>{{ $global_page_item->contact_map_email_title }}</p>
                            <h4>{{ $global_page_item->contact_map_email }}</h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="media-body">
                            <p>{{ $global_page_item->contact_map_address_title }}</p>
                            <h4>{{ $global_page_item->contact_map_address }}</h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif
<!-- contact-map-end -->

@endsection