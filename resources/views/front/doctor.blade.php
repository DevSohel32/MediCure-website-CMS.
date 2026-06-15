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
                    <h3 class="title">{{ $doctor->name }}</h3>
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
                            <a href="{{ route('doctors') }}">{{ __('Doctors') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $doctor->name }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!--==============================
Doctor Details Area
==============================-->
<section class="team__details-area pt-120 pb-120">
    <div class="container">
        <div class="team__details-wrap">
            <div class="row gx-60 gy-60">
                <div class="col-xl-6">
                    <div class="team__details-thumb">
                        <div class="thumb">
                            <img src="{{ asset('uploads/'.$doctor->photo) }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="team__details-content">
                        <h3 class="title mb-15">
                            {{ $doctor->name }}
                        </h3>
                        <h4 class="subtitle mb-30">
                            {{ $doctor->designation }}
                        </h4>
                        <div class="mb-30">
                            <p>
                                {!! nl2br($doctor->biography) !!}
                            </p>
                        </div>
                        @if($doctor->email != '' || $doctor->phone != '')
                        <ul class="team-info-wrap">
                            @if($doctor->email)
                            <li>
                                <div class="team-info-card">
                                    <div class="team-info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="team-info-details">
                                        <p>{{ __('Email') }}</p>
                                        <h4>{{ $doctor->email }}</h4>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @if($doctor->phone)
                            <li>
                                <div class="team-info-card">
                                    <div class="team-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="team-info-details">
                                        <p>{{ __('Phone') }}</p>
                                        <h4>{{ $doctor->phone }}</h4>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                        @endif

                        @if($doctor->facebook != '' || $doctor->twitter != '' || $doctor->linkedin != '' || $doctor->instagram != '')
                        <div class="social-links style3 mt-50">
                            <ul class="list-wrap">
                                @if($doctor->facebook)
                                <li><a href="{{ $doctor->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if($doctor->twitter)
                                <li><a href="{{ $doctor->twitter }}" target="_blank">
                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z"
                                            fill="currentColor" />
                                    </svg>
                                </a></li>
                                @endif
                                @if($doctor->linkedin)
                                <li><a href="{{ $doctor->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                @endif
                                @if($doctor->instagram)
                                <li><a href="{{ $doctor->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                @endif
                            </ul>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--======== / Doctor Section ========-->

@endsection