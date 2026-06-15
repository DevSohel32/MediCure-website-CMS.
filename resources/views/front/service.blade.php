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
                    <h3 class="title">{{ $service->name }}</h3>
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
                            <a href="{{ route('services') }}">{{ $global_page_item->services_page_title }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $service->name }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!--==============================
Service Details Area
==============================-->
<section class="service__details-area pt-120 pb-120">
    <div class="container">
        <div class="row gy-60">
            <div class="col-xl-8 col-lg-7">
                <div class="service__details-wrap">
                    <div class="service__details-thumb mb-45">
                        <div class="thumb">
                            <img src="{{ asset('uploads/'.$service->photo) }}" alt="img">
                        </div>
                    </div>
                    <div class="service__details-content">
                        <h3 class="title mb-15">
                            {{ $service->name }}
                        </h3>
                        <p>
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <aside class="blog-sidebar">
                    <div class="blog-widget service-widget">
                        <h4 class="widget-title">{{ __('Our Services') }}</h4>
                        <div class="sidebar-cat-list">
                            <ul class="list-wrap">
                                @foreach($services as $item)
                                <li><a href="{{ route('service', $item->slug) }}">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @if($service->phone)
                    <div class="blog-widget sidebar-banner">
                        <h4 class="widget-title">
                            {!! nl2br($global_page_item->service_widget_title) !!}
                        </h4>
                        <p class="banner-text">
                            {!! nl2br($global_page_item->service_widget_text) !!}
                        </p>
                        <a class="banner-link" href="tel:{{ $service->phone }}"><i class="fas fa-phone"></i> {{ $service->phone }}</a>
                        <a href="{{ route('appointment') }}" class="btn btn-two w-100"><span class="btn-text" data-text="{{ $global_page_item->service_widget_button_text }}"></span> <i class="fas fa-arrow-right"></i></a>
                        </form>
                    </div>
                    @endif
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- Service-details-area-end -->


@endsection