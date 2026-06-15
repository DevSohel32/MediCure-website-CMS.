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
                    <h3 class="title">{{ $global_page_item->photo_gallery_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->photo_gallery_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Project Area
==============================-->
<section class="project-area-3 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row gy-30">
            @forelse($photos as $photo)
            <div class="col-lg-4">
                <div class="project-card3 style2">
                    <div class="project-thumb image-anim">
                        <a href="{{ asset('uploads/'.$photo->photo) }}" class="popup-image"><img src="{{ asset('uploads/'.$photo->photo) }}" alt="img"></a>
                    </div>
                    @if($photo->caption != '')
                    <div class="project-card-details">
                        <div class="project-card-content">
                            <h4 class="gallery-title">{{ $photo->caption }}</h4>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center text-danger">{{ __('No Photo Found') }}</p>
            </div>
            @endforelse
        </div>

        @if($photos->hasPages())
        <div class="row gy-30">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="pagination__wrap mt-60">
                    <ul class="list-wrap d-flex flex-wrap">
                        @php
                            $current = $photos->currentPage();
                            $last = $photos->lastPage();
                        @endphp
                        @if(!$photos->onFirstPage())
                            <li>
                                <a href="{{ $photos->previousPageUrl() }}" class="page-numbers">
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
                                <li><a href="{{ $photos->url($page) }}" class="page-numbers">{{ sprintf('%02d', $page) }}</a></li>
                            @endif
                        @endfor
                        @if($photos->hasMorePages())
                            <li>
                                <a href="{{ $photos->nextPageUrl() }}" class="page-numbers">
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
<!--======== / Project Section ========-->

@endsection