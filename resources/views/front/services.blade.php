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
                    <h3 class="title">{{ $global_page_item->services_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->services_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!--==============================
Service Area
==============================-->
<section class="service-area-1 pt-120 pb-120 position-relative">
    <div class="container">
        <div class="row gy-30 justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="service-card style4">
                    <div class="box-content">
                        <div class="box-icon">
                            {!! $service->icon_code !!}
                        </div>
                        <h3 class="box-title"><a href="{{ route('service',$service->slug) }}">{{ $service->name }}</a></h3>
                        <p class="box-text">{!! nl2br($service->short_description) !!}</p>
                    </div>
                    <div class="box-img image-anim">
                        <img src="{{ asset('uploads/'.$service->photo) }}" alt="img">
                        <div class="tg-button-wrap">
                            <a href="{{ route('service',$service->slug) }}" class="btn btn-three">
                                <span class="btn-text" data-text="{{ __('Read More Details') }}"></span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if($services->hasPages())
        <div class="row gy-30">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="pagination__wrap mt-60">
                    <ul class="list-wrap d-flex flex-wrap">
                        @php
                            $current = $services->currentPage();
                            $last = $services->lastPage();
                        @endphp
                        @if(!$services->onFirstPage())
                            <li>
                                <a href="{{ $services->previousPageUrl() }}" class="page-numbers">
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1L0 7M0 7L6 13M0 7H15" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </a>
                            </li>
                        @endif
                        @for($page=1;$page<=$last;$page++)
                            @if($page === $current)
                                <li><span class="page-numbers current">{{ sprintf('%02d', $page) }}</span></li>
                            @else
                                <li><a href="{{ $services->url($page) }}" class="page-numbers">{{ sprintf('%02d', $page) }}</a></li>
                            @endif
                        @endfor
                        @if($services->hasMorePages())
                            <li>
                                <a href="{{ $services->nextPageUrl() }}" class="page-numbers">
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!--======== / Service Section ========-->

@endsection