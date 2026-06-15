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
                    <h3 class="title">{{ $global_page_item->doctors_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->doctors_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!--==============================
Doctor Area
==============================-->
<section class="team-area-2 pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row gy-40 justify-content-center">
            @foreach($doctors as $doctor)
            <div class="col-xl-4 col-md-6">
                <div class="team-card style2">
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
                                <a target="_blank" href="{{ $doctor->twitter }}" tabindex="-1"><svg class="d-inline-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z"
                                        fill="currentColor" />
                                </svg></a>
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

        @if($doctors->hasPages())
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="pagination__wrap mt-60">
                    <ul class="list-wrap d-flex flex-wrap">
                        @php
                            $current = $doctors->currentPage();
                            $last = $doctors->lastPage();
                        @endphp
                        @if(!$doctors->onFirstPage())
                            <li>
                                <a href="{{ $doctors->previousPageUrl() }}" class="page-numbers">
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
                                <li><a href="{{ $doctors->url($page) }}" class="page-numbers">{{ sprintf('%02d', $page) }}</a></li>
                            @endif
                        @endfor
                        @if($doctors->hasMorePages())
                            <li>
                                <a href="{{ $doctors->nextPageUrl() }}" class="page-numbers">
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
<!--======== / Doctor Section ========-->

@endsection