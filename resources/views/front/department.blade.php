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
                    <h3 class="title">{{ $department->title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ route('departments') }}">{{ $global_page_item->departments_page_title }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $department->title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
    Department Details Area
==============================-->
<section class="project__details-area pt-120 pb-120">
    <div class="container">
        <div class="row gy-60">
            <div class="col-lg-8">
                <div class="project__details-wrap">
                    <div class="project__details-thumb">
                        <div class="thumb">
                            <img src="{{ asset('uploads/'.$department->photo) }}" alt="img">
                        </div>
                    </div>

                    <div class="project__details-content">
                        <h3 class="title mb-15 mt-40">
                            {{ $department->title }}
                        </h3>
                        <p class="mb-20">
                            {!! $department->description !!}
                        </p>

                        @if($department->quote_person)
                        <blockquote>
                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                            <div class="media-body">
                                <p>
                                    {!! nl2br($department->quote_text) !!}
                                </p>
                                <h4 class="blockquote-card_title">{{ $department->quote_person }}</h4>
                            </div>
                        </blockquote>
                        @endif

                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    <div class="blog-widget service-widget widget_info">
                        <h4 class="widget-title">{{ __('Department Information') }}</h4>
                        <div class="project-info-list">
                            <ul class="list-wrap">
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>{{ __('Date:') }}</p>
                                        <strong>{{ $department->department_date }}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>{{ __('Clients:') }}</p>
                                        <strong>{{ $department->client }}</strong>
                                    </div>
                                </li>
                                @if($department->location)
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>{{ __('Location:') }}</p>
                                        <strong>{{ $department->location }}</strong>
                                    </div>
                                </li>
                                @endif
                                @if($department->website)
                                <li>
                                    <div class="project-info-icon">
                                        <i class="fas fa-globe"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>{{ __('Website:') }}</p>
                                        <strong>
                                            <a href="{{ $department->website }}" target="_blank"
                                               class="website">
                                                {{ $department->website }}
                                            </a>
                                        </strong>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @if($department->phone)
                    <div class="blog-widget sidebar-banner">
                        <h4 class="widget-title">
                            {!! nl2br($global_page_item->department_widget_title) !!}
                        </h4>
                        <p class="banner-text">
                            {!! nl2br($global_page_item->department_widget_text) !!}
                        </p>
                        <a class="banner-link" href="tel:{{ $department->phone }}"><i class="fas fa-phone"></i> {{ $department->phone }}</a>
                        <a href="{{ route('appointment') }}" class="btn btn-two w-100"><span class="btn-text" data-text="{{ $global_page_item->department_widget_button_text }}"></span> <i class="fas fa-arrow-right"></i></a>
                        </form>
                    </div>
                    @endif
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-details-area-end -->

<!--==============================
Cta Area
==============================-->
@if($global_page_item->department_cta_status == 'Show')
<section class="cta-area-1 overflow-hidden pb-120">
    <div class="container">
        <div class="cta-wrap1 pt-120 pb-120 bg-cover" data-background="{{ asset('uploads/bg/cta-bg1-1.png') }}">
            <div class="cta-bg-shape1-1" data-background="{{ asset('uploads/bg/cta-bg-shape1-1.png') }}"></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section__title text-center">
                        <span class="sub-title text-white text-anim">
                            {{ $global_page_item->department_cta_subheading }}
                        </span>
                        <h2 class="title text-white text-anim2">
                            {!! nl2br($global_page_item->department_cta_heading) !!}
                        </h2>
                        <div class="tg-button-wrap mt-40 justify-content-center">
                            <a href="{{ route('contact') }}" class="btn btn-seven">
                                <span class="btn-text" data-text="{{ $global_page_item->department_cta_button_text }}"></span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--======== / Cta Section ========-->

@endsection
