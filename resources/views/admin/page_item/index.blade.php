@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Page Items') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin_page_item_update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 sticky-top">
                                        <ul class="nav nav-pills flex-column sidebar-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="tab__home" data-bs-toggle="pill" href="#item__home" role="tab" aria-controls="item__home" aria-selected="true">
                                                    {{ __('Home') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__about" data-bs-toggle="pill" href="#item__about" role="tab" aria-controls="item__about" aria-selected="false">
                                                    {{ __('About') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__service" data-bs-toggle="pill" href="#item__service" role="tab" aria-controls="item__service" aria-selected="false">
                                                    {{ __('Services & Service Detail') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__department" data-bs-toggle="pill" href="#item__department" role="tab" aria-controls="item__department" aria-selected="false">
                                                    {{ __('Departments & Department Detail') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__doctors" data-bs-toggle="pill" href="#item__doctors" role="tab" aria-controls="item__doctors" aria-selected="false">
                                                    {{ __('Doctors') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__faq" data-bs-toggle="pill" href="#item__faq" role="tab" aria-controls="item__faq" aria-selected="false">
                                                    {{ __('FAQ') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__pricing" data-bs-toggle="pill" href="#item__pricing" role="tab" aria-controls="item__pricing" aria-selected="false">
                                                    {{ __('Pricing') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__gallery" data-bs-toggle="pill" href="#item__gallery" role="tab" aria-controls="item__gallery" aria-selected="false">
                                                    {{ __('Gallery') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__contact_appointment" data-bs-toggle="pill" href="#item__contact_appointment" role="tab" aria-controls="item__contact_appointment" aria-selected="false">
                                                    {{ __('Contact & Appointment') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__terms_privacy" data-bs-toggle="pill" href="#item__terms_privacy" role="tab" aria-controls="item__terms_privacy" aria-selected="false">
                                                    {{ __('Terms & Privacy') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__blog" data-bs-toggle="pill" href="#item__blog" role="tab" aria-controls="item__blog" aria-selected="false">
                                                    {{ __('Blog and Blog Detail') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__blog_other" data-bs-toggle="pill" href="#item__blog_other" role="tab" aria-controls="item__blog_other" aria-selected="false">
                                                    {{ __('Other Blog Pages') }}
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="tab__blog_sidebar" data-bs-toggle="pill" href="#item__blog_sidebar" role="tab" aria-controls="item__blog_sidebar" aria-selected="false">
                                                    {{ __('Blog Sidebar') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                        <div class="tab-content" id="v-pills-tabContent">

                                            <!-- Home Page -->
                                            <div class="tab-pane fade show active" id="item__home" role="tabpanel" aria-labelledby="tab__home">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('About Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Photo 1') }}</label>
                                                        <div>
                                                            <a href="{{ asset('uploads/'.$page_item->home_about_photo1) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->home_about_photo1) }}" alt="" class="img_square"></a>
                                                        </div>
                                                        <label for="" class="form-label">{{ __('Change Photo 1') }}</label>
                                                        <div>
                                                            <input type="file" name="home_about_photo1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Photo 2') }}</label>
                                                        <div>
                                                            <a href="{{ asset('uploads/'.$page_item->home_about_photo2) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->home_about_photo2) }}" alt="" class="img_square"></a>
                                                        </div>
                                                        <label for="" class="form-label">{{ __('Change Photo 2') }}</label>
                                                        <div>
                                                            <input type="file" name="home_about_photo2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="home_about_subheading" class="form-control" value="{{ $page_item->home_about_subheading }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <textarea name="home_about_heading" class="form-control h_150">{{ $page_item->home_about_heading }}</textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Text') }}</label>
                                                        <textarea name="home_about_text" class="form-control h_150">{{ $page_item->home_about_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('List Items') }}</label>
                                                        <textarea name="home_about_list_items" class="form-control h_150">{{ $page_item->home_about_list_items }}</textarea>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Phone') }}</label>
                                                        <input type="text" name="home_about_phone" class="form-control" value="{{ $page_item->home_about_phone }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Text') }}</label>
                                                        <input type="text" name="home_about_button_text" class="form-control" value="{{ $page_item->home_about_button_text }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="home_about_status" class="form-select">
                                                            <option value="Show" {{ $page_item->home_about_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->home_about_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>



                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Feature Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="home_feature_subheading" class="form-control" value="{{ $page_item->home_feature_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <input type="text" name="home_feature_heading" class="form-control" value="{{ $page_item->home_feature_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="home_feature_status" class="form-select">
                                                            <option value="Show" {{ $page_item->home_feature_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->home_feature_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>



                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Video Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="home_video_subheading" class="form-control" value="{{ $page_item->home_video_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <textarea name="home_video_heading" class="form-control h_100">{{ $page_item->home_video_heading }}</textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Photo') }}</label>
                                                        <div>
                                                            <a href="{{ asset('uploads/'.$page_item->home_video_photo) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->home_video_photo) }}" alt="" class="img_square"></a>
                                                        </div>
                                                        <label for="" class="form-label">{{ __('Change Photo') }}</label>
                                                        <div>
                                                            <input type="file" name="home_video_photo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Video Preview') }}</label>
                                                        <div>
                                                            <iframe class="iframe_show" src="https://www.youtube.com/embed/{{ $page_item->home_video_youtube }}" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                        <label for="" class="form-label">{{ __('Video - YouTube ID') }} *</label>
                                                        <input type="text" name="home_video_youtube" class="form-control" value="{{ $page_item->home_video_youtube }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="home_video_status" class="form-select">
                                                            <option value="Show" {{ $page_item->home_video_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->home_video_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Doctor Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="home_doctor_subheading" class="form-control" value="{{ $page_item->home_doctor_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <input type="text" name="home_doctor_heading" class="form-control" value="{{ $page_item->home_doctor_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Total') }} *</label>
                                                        <input type="text" name="home_doctor_total" class="form-control" value="{{ $page_item->home_doctor_total }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="home_doctor_status" class="form-select">
                                                            <option value="Show" {{ $page_item->home_doctor_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->home_doctor_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Counter Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="home_counter_status" class="form-select">
                                                            <option value="Show" {{ $page_item->home_counter_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->home_counter_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>

                                                 


                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Blog Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="home_blog_subheading" class="form-control" value="{{ $page_item->home_blog_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <input type="text" name="home_blog_heading" class="form-control" value="{{ $page_item->home_blog_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Total') }} *</label>
                                                        <input type="text" name="home_blog_total" class="form-control" value="{{ $page_item->home_blog_total }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="home_blog_status" class="form-select">
                                                            <option value="Show" {{ $page_item->home_blog_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->home_blog_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('SEO Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }} *</label>
                                                        <input type="text" name="home_seo_title" class="form-control" value="{{ $page_item->home_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }} *</label>
                                                        <textarea name="home_seo_meta_description" class="form-control h_100">{{ $page_item->home_seo_meta_description }}</textarea>
                                                    </div>


                                                </div>


                                            </div>
                                            <!-- // Home Page -->



                                            <!-- About Page -->
                                            <div class="tab-pane fade" id="item__about" role="tabpanel" aria-labelledby="tab__about">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('About Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Photo 1') }}</label>
                                                        <div>
                                                            <a href="{{ asset('uploads/'.$page_item->about_about_photo1) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->about_about_photo1) }}" alt="" class="img_square"></a>
                                                        </div>
                                                        <label for="" class="form-label">{{ __('Change Photo 1') }}</label>
                                                        <div>
                                                            <input type="file" name="about_about_photo1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Photo 2') }}</label>
                                                        <div>
                                                            <a href="{{ asset('uploads/'.$page_item->about_about_photo2) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->about_about_photo2) }}" alt="" class="img_square"></a>
                                                        </div>
                                                        <label for="" class="form-label">{{ __('Change Photo 2') }}</label>
                                                        <div>
                                                            <input type="file" name="about_about_photo2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="about_about_subheading" class="form-control" value="{{ $page_item->about_about_subheading }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <textarea name="about_about_heading" class="form-control h_150">{{ $page_item->about_about_heading }}</textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Text') }}</label>
                                                        <textarea name="about_about_text" class="form-control h_150">{{ $page_item->about_about_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('List Items') }}</label>
                                                        <textarea name="about_about_list_items" class="form-control h_150">{{ $page_item->about_about_list_items }}</textarea>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Phone') }}</label>
                                                        <input type="text" name="about_about_phone" class="form-control" value="{{ $page_item->about_about_phone }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Button Text') }}</label>
                                                        <input type="text" name="about_about_button_text" class="form-control" value="{{ $page_item->about_about_button_text }}">
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="about_about_status" class="form-select">
                                                            <option value="Show" {{ $page_item->about_about_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->about_about_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Doctor Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Subheading') }} *</label>
                                                        <input type="text" name="about_doctor_subheading" class="form-control" value="{{ $page_item->about_doctor_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Heading') }} *</label>
                                                        <input type="text" name="about_doctor_heading" class="form-control" value="{{ $page_item->about_doctor_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Total') }} *</label>
                                                        <input type="text" name="about_doctor_total" class="form-control" value="{{ $page_item->about_doctor_total }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="about_doctor_status" class="form-select">
                                                            <option value="Show" {{ $page_item->about_doctor_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->about_doctor_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Counter Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Status') }}</label>
                                                        <select name="about_counter_status" class="form-select">
                                                            <option value="Show" {{ $page_item->about_counter_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->about_counter_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('SEO Section') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="about_page_title" class="form-control" value="{{ $page_item->about_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }} *</label>
                                                        <input type="text" name="about_seo_title" class="form-control" value="{{ $page_item->about_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }} *</label>
                                                        <textarea name="about_seo_meta_description" class="form-control h_100">{{ $page_item->about_seo_meta_description }}</textarea>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- // About Page -->




                                            <!-- Services and Service Detail Page -->
                                            <div class="tab-pane fade" id="item__service" role="tabpanel" aria-labelledby="tab__service">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Services Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="services_page_title" class="form-control" value="{{ $page_item->services_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page Item') }} *</label>
                                                        <input type="text" name="services_per_page" class="form-control" value="{{ $page_item->services_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }} *</label>
                                                        <input type="text" name="services_seo_title" class="form-control" value="{{ $page_item->services_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }} *</label>
                                                        <textarea name="services_seo_meta_description" class="form-control h_100">{{ $page_item->services_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Service Detail Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Widget Title') }}</label>
                                                        <textarea name="service_widget_title" class="form-control h_100">{{ $page_item->service_widget_title }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Widget Text') }}</label>
                                                        <textarea name="service_widget_text" class="form-control h_100">{{ $page_item->service_widget_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Widget Button Text') }}</label>
                                                        <input type="text" name="service_widget_button_text" class="form-control" value="{{ $page_item->service_widget_button_text }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- // Services and Service Detail Page -->




                                            <!-- Departments and Department Detail Page -->
                                            <div class="tab-pane fade" id="item__department" role="tabpanel" aria-labelledby="tab__department">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Departments Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="departments_page_title" class="form-control" value="{{ $page_item->departments_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page Item') }} *</label>
                                                        <input type="text" name="departments_per_page" class="form-control" value="{{ $page_item->departments_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="departments_seo_title" class="form-control" value="{{ $page_item->departments_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="departments_seo_meta_description" class="form-control h_100">{{ $page_item->departments_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Department Detail Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Widget Title') }}</label>
                                                        <textarea name="department_widget_title" class="form-control h_100">{{ $page_item->department_widget_title }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Widget Text') }}</label>
                                                        <textarea name="department_widget_text" class="form-control h_100">{{ $page_item->department_widget_text }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Widget Button Text') }}</label>
                                                        <input type="text" name="department_widget_button_text" class="form-control" value="{{ $page_item->department_widget_button_text }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('CTA Subheading') }}</label>
                                                        <input type="text" name="department_cta_subheading" class="form-control" value="{{ $page_item->department_cta_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('CTA Heading') }}</label>
                                                        <textarea name="department_cta_heading" class="form-control h_100">{{ $page_item->department_cta_heading }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('CTA Button Text') }}</label>
                                                        <input type="text" name="department_cta_button_text" class="form-control" value="{{ $page_item->department_cta_button_text }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('CTA Status') }}</label>
                                                        <select name="department_cta_status" class="form-select">
                                                            <option value="Show" {{ $page_item->department_cta_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->department_cta_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- //Departments and Department Detail Page -->




                                            <!-- Doctors Page -->
                                            <div class="tab-pane fade" id="item__doctors" role="tabpanel" aria-labelledby="tab__doctors">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Doctors Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="doctors_page_title" class="form-control" value="{{ $page_item->doctors_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page Item') }} *</label>
                                                        <input type="text" name="doctors_per_page" class="form-control" value="{{ $page_item->doctors_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="doctors_seo_title" class="form-control" value="{{ $page_item->doctors_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="doctors_seo_meta_description" class="form-control h_100">{{ $page_item->doctors_seo_meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Doctors Page -->



                                            <!-- FAQ Page -->
                                            <div class="tab-pane fade" id="item__faq" role="tabpanel" aria-labelledby="tab__faq">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('FAQ Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="faq_page_title" class="form-control" value="{{ $page_item->faq_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="faq_seo_title" class="form-control" value="{{ $page_item->faq_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="faq_seo_meta_description" class="form-control h_100">{{ $page_item->faq_seo_meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // FAQ Page -->



                                            <!-- Pricing Page -->
                                            <div class="tab-pane fade" id="item__pricing" role="tabpanel" aria-labelledby="tab__pricing">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Pricing Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="pricing_page_title" class="form-control" value="{{ $page_item->pricing_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="pricing_seo_title" class="form-control" value="{{ $page_item->pricing_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="pricing_seo_meta_description" class="form-control h_100">{{ $page_item->pricing_seo_meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Pricing Page -->



                                            <!-- Gallery Page -->
                                            <div class="tab-pane fade" id="item__gallery" role="tabpanel" aria-labelledby="tab__gallery">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Photo Gallery Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="photo_gallery_page_title" class="form-control" value="{{ $page_item->photo_gallery_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="photo_gallery_seo_title" class="form-control" value="{{ $page_item->photo_gallery_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="photo_gallery_seo_meta_description" class="form-control h_100">{{ $page_item->photo_gallery_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Video Gallery Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="video_gallery_page_title" class="form-control" value="{{ $page_item->video_gallery_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="video_gallery_seo_title" class="form-control" value="{{ $page_item->video_gallery_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="video_gallery_seo_meta_description" class="form-control h_100">{{ $page_item->video_gallery_seo_meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Gallery Page -->




                                            <!-- Contact & Appointment Page -->
                                            <div class="tab-pane fade" id="item__contact_appointment" role="tabpanel" aria-labelledby="tab__contact_appointment">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Contact Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="contact_page_title" class="form-control" value="{{ $page_item->contact_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Form Subheading') }} *</label>
                                                        <input type="text" name="contact_form_subheading" class="form-control" value="{{ $page_item->contact_form_subheading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Form Heading') }} *</label>
                                                        <input type="text" name="contact_form_heading" class="form-control" value="{{ $page_item->contact_form_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Form Button Text') }} *</label>
                                                        <input type="text" name="contact_form_button_text" class="form-control" value="{{ $page_item->contact_form_button_text }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Code') }}</label>
                                                        <textarea name="contact_map_code" class="form-control h_100">{{ $page_item->contact_map_code }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Map Photo') }}</label>
                                                        <div><a href="{{ asset('uploads/'.$page_item->contact_map_photo) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->contact_map_photo) }}" alt="" class="img_square"></a></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Change Map Photo') }}</label>
                                                        <div><input type="file" name="contact_map_photo"></div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Phone Title') }}</label>
                                                        <input type="text" name="contact_map_phone_title" class="form-control" value="{{ $page_item->contact_map_phone_title }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Phone') }}</label>
                                                        <input type="text" name="contact_map_phone" class="form-control" value="{{ $page_item->contact_map_phone }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Email Title') }}</label>
                                                        <input type="text" name="contact_map_email_title" class="form-control" value="{{ $page_item->contact_map_email_title }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Email') }}</label>
                                                        <input type="text" name="contact_map_email" class="form-control" value="{{ $page_item->contact_map_email }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Address Title') }}</label>
                                                        <input type="text" name="contact_map_address_title" class="form-control" value="{{ $page_item->contact_map_address_title }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Address') }}</label>
                                                        <input type="text" name="contact_map_address" class="form-control" value="{{ $page_item->contact_map_address }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Map Status') }}</label>
                                                        <select name="contact_map_status" class="form-select">
                                                            <option value="Show" {{ $page_item->contact_map_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->contact_map_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="contact_seo_title" class="form-control" value="{{ $page_item->contact_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="contact_seo_meta_description" class="form-control h_100">{{ $page_item->contact_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Appointment Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="appointment_page_title" class="form-control" value="{{ $page_item->appointment_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Form Heading') }} *</label>
                                                        <input type="text" name="appointment_form_heading" class="form-control" value="{{ $page_item->appointment_form_heading }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Form Button Text') }} *</label>
                                                        <input type="text" name="appointment_form_button_text" class="form-control" value="{{ $page_item->appointment_form_button_text }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Existing Form Photo') }}</label>
                                                        <div><a href="{{ asset('uploads/'.$page_item->appointment_form_photo) }}" class="magnific"><img src="{{ asset('uploads/'.$page_item->appointment_form_photo) }}" alt="" class="img_square"></a></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Change Form Photo') }}</label>
                                                        <div><input type="file" name="appointment_form_photo"></div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="appointment_seo_title" class="form-control" value="{{ $page_item->appointment_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="appointment_seo_meta_description" class="form-control h_100">{{ $page_item->appointment_seo_meta_description }}</textarea>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- // Contact & Appointment Page -->



                                            <!-- Terms & Privacy Page -->
                                            <div class="tab-pane fade" id="item__terms_privacy" role="tabpanel" aria-labelledby="tab__terms_privacy">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Terms Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="terms_page_title" class="form-control" value="{{ $page_item->terms_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Content') }} *</label>
                                                        <textarea name="terms_content" class="form-control editor">{{ $page_item->terms_content }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="terms_seo_title" class="form-control" value="{{ $page_item->terms_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="terms_seo_meta_description" class="form-control h_100">{{ $page_item->terms_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Privacy Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="privacy_page_title" class="form-control" value="{{ $page_item->privacy_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Content') }} *</label>
                                                        <textarea name="privacy_content" class="form-control editor">{{ $page_item->privacy_content }}</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="privacy_seo_title" class="form-control" value="{{ $page_item->privacy_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="privacy_seo_meta_description" class="form-control h_100">{{ $page_item->privacy_seo_meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Terms & Privacy Page -->



                                            <!-- Blog and Blog Detail Page -->
                                            <div class="tab-pane fade" id="item__blog" role="tabpanel" aria-labelledby="tab__blog">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Blog Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="blog_page_title" class="form-control" value="{{ $page_item->blog_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page') }} *</label>
                                                        <input type="text" name="blog_per_page" class="form-control" value="{{ $page_item->blog_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="blog_seo_title" class="form-control" value="{{ $page_item->blog_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="blog_seo_meta_description" class="form-control h_100">{{ $page_item->blog_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Blog Detail Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Tag Status') }}</label>
                                                        <select name="blog_detail_tag_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_detail_tag_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_detail_tag_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Share Status') }}</label>
                                                        <select name="blog_detail_share_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_detail_share_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_detail_share_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Author Status') }}</label>
                                                        <select name="blog_detail_author_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_detail_author_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_detail_author_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Comment Status') }}</label>
                                                        <select name="blog_detail_comment_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_detail_comment_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_detail_comment_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Blog and Blog Detail Page -->



                                            <!-- Other Blog Pages -->
                                            <div class="tab-pane fade" id="item__blog_other" role="tabpanel" aria-labelledby="tab__blog_other">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Category Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="blog_category_page_title" class="form-control" value="{{ $page_item->blog_category_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page') }} *</label>
                                                        <input type="text" name="blog_category_per_page" class="form-control" value="{{ $page_item->blog_category_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="blog_category_seo_title" class="form-control" value="{{ $page_item->blog_category_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="blog_category_seo_meta_description" class="form-control h_100">{{ $page_item->blog_category_seo_meta_description }}</textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Tag Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="blog_tag_page_title" class="form-control" value="{{ $page_item->blog_tag_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page') }} *</label>
                                                        <input type="text" name="blog_tag_per_page" class="form-control" value="{{ $page_item->blog_tag_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="blog_tag_seo_title" class="form-control" value="{{ $page_item->blog_tag_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="blog_tag_seo_meta_description" class="form-control h_100">{{ $page_item->blog_tag_seo_meta_description }}</textarea>
                                                    </div>


                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading">{{ __('Search Page') }}</h2>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Page Title') }} *</label>
                                                        <input type="text" name="blog_search_page_title" class="form-control" value="{{ $page_item->blog_search_page_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('Per Page') }} *</label>
                                                        <input type="text" name="blog_search_per_page" class="form-control" value="{{ $page_item->blog_search_per_page }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Title') }}</label>
                                                        <input type="text" name="blog_search_seo_title" class="form-control" value="{{ $page_item->blog_search_seo_title }}">
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label for="" class="form-label">{{ __('SEO Meta Description') }}</label>
                                                        <textarea name="blog_search_seo_meta_description" class="form-control h_100">{{ $page_item->blog_search_seo_meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Other Blog Pages -->





                                            <!-- Blog Sidebar -->
                                            <div class="tab-pane fade" id="item__blog_sidebar" role="tabpanel" aria-labelledby="tab__blog_sidebar">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h2 class="tab_heading tab_heading_first">{{ __('Blog Sidebar') }}</h2>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Search Status') }} *</label>
                                                        <select name="blog_sidebar_search_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_sidebar_search_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_sidebar_search_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Category Status') }} *</label>
                                                        <select name="blog_sidebar_category_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_sidebar_category_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_sidebar_category_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Total Recent Post') }} *</label>
                                                        <input type="text" name="blog_sidebar_recent_post_total" class="form-control" value="{{ $page_item->blog_sidebar_recent_post_total }}">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Recent Post Status') }} *</label>
                                                        <select name="blog_sidebar_recent_post_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_sidebar_recent_post_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_sidebar_recent_post_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="" class="form-label">{{ __('Tag Status') }} *</label>
                                                        <select name="blog_sidebar_tag_status" class="form-select">
                                                            <option value="Show" {{ $page_item->blog_sidebar_tag_status == 'Show' ? 'selected' : '' }}>{{ __('Show') }}</option>
                                                            <option value="Hide" {{ $page_item->blog_sidebar_tag_status == 'Hide' ? 'selected' : '' }}>{{ __('Hide') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Blog Sidebar -->



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
