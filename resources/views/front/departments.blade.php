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
                    <h3 class="title">{{ $global_page_item->departments_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->departments_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Department Area
==============================-->
<section class="project-area-3 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row gy-30">
            @foreach($departments as $department)
            <div class="col-lg-6">
                <div class="project-card3 style2">
                    <div class="project-thumb image-anim">
                        <img src="{{ asset('uploads/'.$department->photo) }}" alt="img">
                    </div>
                    <div class="project-card-details">
                        <div class="project-card-content">
                            <h4 class="project-title"><a href="{{ route('department',$department->slug) }}">{{ $department->title }}</a></h4>
                            <p class="box-text">
                                {!! nl2br($department->short_description) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if($departments->hasPages())
        <div class="row gy-30">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="pagination__wrap mt-60">
                    <ul class="list-wrap d-flex flex-wrap">
                        @php
                            $current = $departments->currentPage();
                            $last = $departments->lastPage();
                        @endphp
                        @if(!$departments->onFirstPage())
                            <li>
                                <a href="{{ $departments->previousPageUrl() }}" class="page-numbers">
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
                                <li><a href="{{ $departments->url($page) }}" class="page-numbers">{{ sprintf('%02d', $page) }}</a></li>
                            @endif
                        @endfor
                        @if($departments->hasMorePages())
                            <li>
                                <a href="{{ $departments->nextPageUrl() }}" class="page-numbers">
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
<!--======== / Department Section ========-->

@endsection
