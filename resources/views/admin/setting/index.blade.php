@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Website Setting') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin_setting_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 sticky-top">
                                        <ul class="nav nav-pills flex-column sidebar-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="tab__logo" data-bs-toggle="pill" href="#item__logo" role="tab" aria-controls="item__logo" aria-selected="true">
                                                    {{ __('Logo') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__favicon" data-bs-toggle="pill" href="#item__favicon" role="tab" aria-controls="item__favicon" aria-selected="false">
                                                    {{ __('Favicon') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__banner" data-bs-toggle="pill" href="#item__banner" role="tab" aria-controls="item__banner" aria-selected="false">
                                                    {{ __('Banner') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__404" data-bs-toggle="pill" href="#item__404" role="tab" aria-controls="item__404" aria-selected="false">
                                                    {{ __('404 Page') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__top_bar" data-bs-toggle="pill" href="#item__top_bar" role="tab" aria-controls="item__top_bar" aria-selected="false">
                                                    {{ __('Top Bar') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__footer" data-bs-toggle="pill" href="#item__footer" role="tab" aria-controls="item__footer" aria-selected="false">
                                                    {{ __('Footer') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__cookie_consent" data-bs-toggle="pill" href="#item__cookie_consent" role="tab" aria-controls="item__cookie_consent" aria-selected="false">
                                                    {{ __('Cookie Consent') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__google_analytic" data-bs-toggle="pill" href="#item__google_analytic" role="tab" aria-controls="item__google_analytic" aria-selected="false">
                                                    {{ __('Google Analytic 4') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__tawk_live_chat" data-bs-toggle="pill" href="#item__tawk_live_chat" role="tab" aria-controls="item__tawk_live_chat" aria-selected="false">
                                                    {{ __('Tawk Live Chat') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__other" data-bs-toggle="pill" href="#item__other" role="tab" aria-controls="item__other" aria-selected="false">
                                                    {{ __('Other') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__clear_cache" data-bs-toggle="pill" href="#item__clear_cache" role="tab" aria-controls="item__clear_cache" aria-selected="false">
                                                    {{ __('Clear Cache') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                        <div class="tab-content" id="v-pills-tabContent">

                                            <!-- Logo -->
                                            <div class="tab-pane fade show active" id="item__logo" role="tabpanel" aria-labelledby="tab__logo">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="">{{ __('Existing Logo') }}</label>
                                                        <div class="bg_efefef p_5"><img src="{{ asset('uploads/'.$setting->logo) }}" alt="" class="h_70"></div>
                                                        <label for="">{{ __('Change Logo') }}</label>
                                                        <div>
                                                            <input type="file" name="logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="">{{ __('Existing Logo (White)') }}</label>
                                                        <div class="bg_efefef p_5"><img src="{{ asset('uploads/'.$setting->logo_white) }}" alt="" class="h_70"></div>
                                                        <label for="">{{ __('Change Logo (White)') }}</label>
                                                        <div>
                                                            <input type="file" name="logo_white">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Logo -->



                                            <!-- Favicon -->
                                            <div class="tab-pane fade" id="item__favicon" role="tabpanel" aria-labelledby="tab__favicon">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">{{ __('Existing Favicon') }}</label>
                                                        <div><img src="{{ asset('uploads/'.$setting->favicon) }}" alt="" class="w_50"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">{{ __('Change Favicon') }}</label>
                                                        <div>
                                                            <input type="file" name="favicon">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- // Favicon -->


                                            <!-- Banner -->
                                            <div class="tab-pane fade" id="item__banner" role="tabpanel" aria-labelledby="tab__banner">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">{{ __('Existing Banner') }}</label>
                                                        <div><img src="{{ asset('uploads/'.$setting->banner) }}" alt="" class="w_300"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">{{ __('Change Banner') }}</label>
                                                        <div>
                                                            <input type="file" name="banner">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- // Banner -->


                                            <!-- 404 Page -->
                                            <div class="tab-pane fade" id="item__404" role="tabpanel" aria-labelledby="tab__404">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">{{ __('Existing Photo') }}</label>
                                                        <div><img src="{{ asset('uploads/'.$setting->not_found_photo) }}" alt="" class="w_300"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="">{{ __('Change Photo') }}</label>
                                                        <div>
                                                            <input type="file" name="not_found_photo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }}</label>
                                                        <input type="text" name="not_found_heading" class="form-control" value="{{ $setting->not_found_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Text') }}</label>
                                                        <textarea name="not_found_text" class="form-control editor">{{ $setting->not_found_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Text') }}</label>
                                                        <input type="text" name="not_found_button_text" class="form-control" value="{{ $setting->not_found_button_text }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Status') }}</label>
                                                        <select name="not_found_button_status" class="form-select">
                                                            <option value="Show" {{ $setting->not_found_button_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->not_found_button_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // 404 Page -->




                                            <!-- Top Bar -->
                                            <div class="tab-pane fade" id="item__top_bar" role="tabpanel" aria-labelledby="tab__top_bar">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Email') }}</label>
                                                        <input type="text" name="top_bar_email" class="form-control" value="{{ $setting->top_bar_email }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Phone') }}</label>
                                                        <input type="text" name="top_bar_phone" class="form-control" value="{{ $setting->top_bar_phone }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('FAQ Status') }}</label>
                                                        <select name="top_bar_faq_status" class="form-select">
                                                            <option value="Show" {{ $setting->top_bar_faq_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->top_bar_faq_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Contact Status') }}</label>
                                                        <select name="top_bar_contact_status" class="form-select">
                                                            <option value="Show" {{ $setting->top_bar_contact_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->top_bar_contact_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Facebook') }}</label>
                                                        <input type="text" name="top_bar_facebook" class="form-control" value="{{ $setting->top_bar_facebook }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Twitter') }}</label>
                                                        <input type="text" name="top_bar_twitter" class="form-control" value="{{ $setting->top_bar_twitter }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Linkedin') }}</label>
                                                        <input type="text" name="top_bar_linkedin" class="form-control" value="{{ $setting->top_bar_linkedin }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Instagram') }}</label>
                                                        <input type="text" name="top_bar_instagram" class="form-control" value="{{ $setting->top_bar_instagram }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- // Top Bar -->


                                            <!-- Footer -->
                                            <div class="tab-pane fade" id="item__footer" role="tabpanel" aria-labelledby="tab__footer">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Address Heading') }}</label>
                                                        <input type="text" name="footer_address_heading" class="form-control" value="{{ $setting->footer_address_heading }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Email Heading') }}</label>
                                                        <input type="text" name="footer_email_heading" class="form-control" value="{{ $setting->footer_email_heading }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Phone Heading') }}</label>
                                                        <input type="text" name="footer_phone_heading" class="form-control" value="{{ $setting->footer_phone_heading }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Address') }}</label>
                                                        <textarea name="footer_address" class="form-control h_100">{{ $setting->footer_address }}</textarea>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Email') }}</label>
                                                        <textarea name="footer_email" class="form-control h_100">{{ $setting->footer_email }}</textarea>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Phone') }}</label>
                                                        <textarea name="footer_phone" class="form-control h_100">{{ $setting->footer_phone }}</textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Facebook') }}</label>
                                                        <input type="text" name="footer_facebook" class="form-control" value="{{ $setting->footer_facebook }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Twitter') }}</label>
                                                        <input type="text" name="footer_twitter" class="form-control" value="{{ $setting->footer_twitter }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Linkedin') }}</label>
                                                        <input type="text" name="footer_linkedin" class="form-control" value="{{ $setting->footer_linkedin }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Instagram') }}</label>
                                                        <input type="text" name="footer_instagram" class="form-control" value="{{ $setting->footer_instagram }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Copyright') }}</label>
                                                        <input type="text" name="footer_copyright" class="form-control" value="{{ $setting->footer_copyright }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 1 - Heading') }}</label>
                                                        <input type="text" name="footer_column1_heading" class="form-control" value="{{ $setting->footer_column1_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 1 - Text') }}</label>
                                                        <textarea name="footer_column1_text" class="form-control h_100">{{ $setting->footer_column1_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 2 - Heading') }}</label>
                                                        <input type="text" name="footer_column2_heading" class="form-control" value="{{ $setting->footer_column2_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 3 - Heading') }}</label>
                                                        <input type="text" name="footer_column3_heading" class="form-control" value="{{ $setting->footer_column3_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 4 - Heading') }}</label>
                                                        <input type="text" name="footer_column4_heading" class="form-control" value="{{ $setting->footer_column4_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 4 - Subscriber Text') }}</label>
                                                        <textarea name="footer_column4_subscriber_text" class="form-control h_100">{{ $setting->footer_column4_subscriber_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 4 - Subscriber Placeholder Text') }}</label>
                                                        <input type="text" name="footer_column4_subscriber_placeholder_text" class="form-control" value="{{ $setting->footer_column4_subscriber_placeholder_text }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Column 4 - Subscriber Button Text') }}</label>
                                                        <input type="text" name="footer_column4_subscriber_button_text" class="form-control" value="{{ $setting->footer_column4_subscriber_button_text }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Footer -->


                                            <!-- Cookie Consent -->
                                            <div class="tab-pane fade" id="item__cookie_consent" role="tabpanel" aria-labelledby="tab__cookie_consent">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Message') }}</label>
                                                        <textarea name="cookie_consent_message" class="form-control h_70" cols="30" rows="10">{{ $setting->cookie_consent_message }}</textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Text Color') }}</label>
                                                        <input type="text" name="cookie_consent_text_color" class="form-control jscolor" value="{{ $setting->cookie_consent_text_color }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Background Color') }}</label>
                                                        <input type="text" name="cookie_consent_bg_color" class="form-control jscolor" value="{{ $setting->cookie_consent_bg_color }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Text Color') }}</label>
                                                        <input type="text" name="cookie_consent_button_text_color" class="form-control jscolor" value="{{ $setting->cookie_consent_button_text_color }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Background Color') }}</label>
                                                        <input type="text" name="cookie_consent_button_bg_color" class="form-control jscolor" value="{{ $setting->cookie_consent_button_bg_color }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Text') }}</label>
                                                        <input type="text" name="cookie_consent_button_text" class="form-control" value="{{ $setting->cookie_consent_button_text }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="cookie_consent_status" class="form-select">
                                                            <option value="Show" {{ $setting->cookie_consent_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->cookie_consent_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Cookie Consent -->



                                            <!-- Google Analytic -->
                                            <div class="tab-pane fade" id="item__google_analytic" role="tabpanel" aria-labelledby="tab__google_analytic">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Measurement ID') }}</label>
                                                        <input type="text" name="google_analytic_measurement_id" class="form-control" value="{{ $setting->google_analytic_measurement_id }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="google_analytic_status" class="form-select">
                                                            <option value="Show" {{ $setting->google_analytic_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->google_analytic_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Google Analytic -->



                                            <!-- Tawk Live Chat -->
                                            <div class="tab-pane fade" id="item__tawk_live_chat" role="tabpanel" aria-labelledby="tab__tawk_live_chat">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Property ID') }}</label>
                                                        <input type="text" name="tawk_live_chat_property_id" class="form-control" value="{{ $setting->tawk_live_chat_property_id }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="tawk_live_chat_status" class="form-select">
                                                            <option value="Show" {{ $setting->tawk_live_chat_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->tawk_live_chat_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Tawk Live Chat -->



                                            <!-- Other -->
                                            <div class="tab-pane fade" id="item__other" role="tabpanel" aria-labelledby="tab__other">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Sticky Header Status') }}</label>
                                                        <select name="sticky_header_status" class="form-select">
                                                            <option value="Show" {{ $setting->sticky_header_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->sticky_header_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Currency Symbol') }} *</label>
                                                        <input type="text" name="currency_symbol" class="form-control" value="{{ $setting->currency_symbol }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Preloader Photo') }}</label>
                                                        <div>
                                                            <img src="{{ asset('uploads/'.$setting->preloader_photo) }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Change Preloader Photo') }}</label>
                                                        <div>
                                                            <input type="file" name="preloader_photo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Preloader Status') }}</label>
                                                        <select name="preloader_status" class="form-select">
                                                            <option value="Show" {{ $setting->preloader_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->preloader_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Layout Direction') }}</label>
                                                        <select name="layout_direction" class="form-select">
                                                            <option value="LTR" {{ $setting->layout_direction == 'LTR' ? 'selected' : '' }}>{{ __('LTR') }}</option>
                                                            <option value="RTL" {{ $setting->layout_direction == 'RTL' ? 'selected' : '' }}>{{ __('RTL') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Theme Color 1') }} *</label>
                                                        <input type="text" name="theme_color_1" class="form-control jscolor" value="{{ $setting->theme_color_1 }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Theme Color 2') }} *</label>
                                                        <input type="text" name="theme_color_2" class="form-control jscolor" value="{{ $setting->theme_color_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Theme Color 3') }} *</label>
                                                        <input type="text" name="theme_color_3" class="form-control jscolor" value="{{ $setting->theme_color_3 }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Captcha Status') }}</label>
                                                        <select name="captcha_status" class="form-select">
                                                            <option value="Show" {{ $setting->captcha_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->captcha_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h2 class="tab_heading">{{ __('Maintenance Mode') }}</h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Maintenance Mode Status') }}</label>
                                                        <select name="maintenance_mode_status" class="form-select">
                                                            <option value="Enabled" {{ $setting->maintenance_mode_status == 'Enabled' ? 'selected' : '' }}>{{ __('Enabled') }}</option>
                                                            <option value="Disabled" {{ $setting->maintenance_mode_status == 'Disabled' ? 'selected' : '' }}>{{ __('Disabled') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Logo Status') }}</label>
                                                        <select name="maintenance_mode_logo_status" class="form-select">
                                                            <option value="Show" {{ $setting->maintenance_mode_logo_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->maintenance_mode_logo_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Heading') }} *</label>
                                                        <input type="text" name="maintenance_mode_heading" class="form-control" value="{{ $setting->maintenance_mode_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Text') }} *</label>
                                                        <textarea name="maintenance_mode_text" class="form-control editor">{{ $setting->maintenance_mode_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Countdown Status') }}</label>
                                                        <select name="maintenance_mode_countdown_status" class="form-select">
                                                            <option value="Show" {{ $setting->maintenance_mode_countdown_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $setting->maintenance_mode_countdown_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Countdown Heading') }}</label>
                                                        <input type="text" name="maintenance_mode_countdown_heading" class="form-control" value="{{ $setting->maintenance_mode_countdown_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Countdown Date') }}</label>
                                                        <input id="datepicker" type="text" name="maintenance_mode_countdown_date" class="form-control" value="{{ $setting->maintenance_mode_countdown_date }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Countdown Time') }}</label>
                                                        <input id="timepicker" type="text" name="maintenance_mode_countdown_time" class="form-control" value="{{ $setting->maintenance_mode_countdown_time }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Other -->



                                            <!-- Clear Cache -->
                                            <div class="tab-pane fade" id="item__clear_cache" role="tabpanel" aria-labelledby="tab__clear_cache">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <ul class="list-group">
                                                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                                                <i class="fas fa-check-circle mr_5"></i> 
                                                                {{ __('Application cache will be cleared!') }}
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                                                <i class="fas fa-check-circle mr_5"></i> 
                                                                {{ __('Compiled views will be cleared!') }}
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                                                <i class="fas fa-check-circle mr_5"></i> 
                                                                {{ __('Route cache will be cleared!') }}
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                                                <i class="fas fa-check-circle mr_5"></i> 
                                                                {{ __('Configuration cache will be cleared!') }}
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                                                <i class="fas fa-check-circle mr_5"></i> 
                                                                {{ __('Compiled services and packages files will be removed!') }}
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-start align-items-center">
                                                                <i class="fas fa-check-circle mr_5"></i> 
                                                                {{ __('Caches will be cleared!') }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <input name="clear_cache_item" class="form-check-input me-1" type="checkbox" value="Yes" id="firstCheckboxStretched">
                                                                <label class="form-check-label stretched-link" for="firstCheckboxStretched">{{ __('I want to clear the cache') }}</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Clear Cache -->



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection