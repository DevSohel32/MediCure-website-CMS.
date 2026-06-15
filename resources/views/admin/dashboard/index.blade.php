@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
<div class="main-content">
   <section class="section dashboard-custom">
    <div class="section-header mb-4 px-3">
        <h1 class="font-weight-bold text-dark" style="font-size: 2rem;">{{ __('Dashboard') }}</h1>
    </div>

    <div class="row px-2">
        <div class="col-xl-4 col-lg-6 col-12 mb-4">
            <div class="custom-dashboard-card p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-section-title mb-4">{{ __('Platform Coverage') }}</h5>

                    <div class="coverage-chart-container position-relative mx-auto my-3">
                        <div class="semi-circle-ring ring-1"></div>
                        <div class="semi-circle-ring ring-2"></div>
                        <div class="semi-circle-ring ring-3"></div>
                        <div class="chart-center-text">
                            <span class="d-block font-weight-bold text-muted" style="font-size: 13px; line-height: 1.3;">Platform<br>Coverage</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around text-center mt-4 pt-3">
                        <a href="{{ route('admin_department_index') }}" class="flex-1 text-decoration-none">
                            <div class="mini-icon-box bg-light-blue text-primary mb-2">
                                <i class="fas fa-th-large"></i>
                            </div>
                            <div class="mini-box-label">{{ __('Departments') }}</div>
                        </a>
                        <a href="{{ route('admin_service_index') }}" class="flex-1 text-decoration-none">
                            <div class="mini-icon-box bg-light-warning text-warning mb-2">
                                <i class="fas fa-window-restore"></i>
                            </div>
                            <div class="mini-box-label">{{ __('Services') }}</div>
                        </a>
                        <a href="{{ route('admin_doctor_index') }}" class="flex-1 text-decoration-none">
                            <div class="mini-icon-box bg-light-danger text-danger mb-2">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="mini-box-label">{{ __('Doctors') }}</div>
                        </a>
                    </div>
                </div>

                <div class="content-divider my-4"></div>

                <div>
                    <h5 class="card-section-title mb-4">{{ __('Content') }}</h5>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="{{ route('admin_video_index') }}" class="d-flex align-items-center text-decoration-none">
                                <div class="media-icon bg-danger text-white m-3 shadow-sm">
                                    <i class="fas fa-play"></i>
                                </div>
                                <div style="line-height: 1.1;">
                                    <h2 class="m-0 font-weight-bold text-dark mb-1">{{ $total_videos }}</h2>
                                    <small class="text-muted font-weight-bold" style="font-size: 12px;">{{ __('Videos') }}</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin_photo_index') }}" class="d-flex align-items-center text-decoration-none">
                                <div class="media-icon bg-warning text-white m-3 shadow-sm">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div style="line-height: 1.1;">
                                    <h2 class="m-0 font-weight-bold text-dark mb-1">{{ $total_photos }}</h2>
                                    <small class="text-muted font-weight-bold" style="font-size: 12px;">{{ __('Photos') }}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-12 mb-4">
            <div class="custom-dashboard-card p-4 h-100 bg-desktop-mockup">
                <h5 class="card-section-title mb-4">{{ __('Content Hub') }}</h5>

                <div class="desktop-screen-body d-flex flex-column justify-content-between" style="height: calc(100% - 40px);">
                    <div class="hub-item-card active-hub-shadow d-flex align-items-center justify-content-between p-3 mb-3 bg-white">
                        <div class="d-flex align-items-center">
                            <div class="hub-icon bg-success text-white m-3">
                                <i class="far fa-file-alt"></i>
                            </div>
                            <div style="line-height: 1.1;">
                                <small class="text-muted font-weight-bold d-block mb-1" style="font-size: 11px;">{{ __('Posts') }}</small>
                                <h2 class="m-0 font-weight-bold text-dark">{{ $total_posts }}</h2>
                            </div>
                        </div>
                        <div class="mini-sparkline text-success pr-2">
                            <svg width="65" height="28" viewBox="0 0 60 30"><path d="M0,25 Q15,5 30,20 T60,5" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        </div>
                    </div>

                    <div class="hub-item-card d-flex align-items-center justify-content-between p-3 bg-white">
                        <div class="d-flex align-items-center">
                            <div class="hub-icon bg-warning text-white m-3">
                                <i class="fas fa-random"></i>
                            </div>
                            <div style="line-height: 1.1;">
                                <small class="text-muted font-weight-bold d-block mb-1" style="font-size: 11px;">{{ __('FAQs') }}</small>
                                <h2 class="m-0 font-weight-bold text-dark">{{ $total_faqs }}</h2>
                            </div>
                        </div>
                        <div class="mini-sparkline text-warning pr-2">
                            <svg width="65" height="28" viewBox="0 0 60 30"><path d="M0,15 Q15,5 30,25 T60,10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 col-12 mb-4">
            <div class="custom-dashboard-card p-4 h-100">
                <h5 class="card-section-title mb-4">{{ __('Engagement & Packages') }}</h5>

                <div class="timeline-metrics-wrapper position-relative d-flex flex-column justify-content-between" style="height: calc(100% - 40px);">
                    <div class="timeline-vertical-line"></div>

                    <div class="timeline-metric-row d-flex align-items-center justify-content-between mb-4 position-relative z-index-2">
                        <div class="d-flex align-items-center">
                            <div class="hub-icon bg-success text-white m-3">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <div style="line-height: 1.1;">
                                <small class="text-muted font-weight-bold d-block mb-1" style="font-size: 11px;">{{ __('Subscribers') }}</small>
                                <h3 class="m-0 font-weight-bold text-dark">{{ $total_subscribers }}</h3>
                            </div>
                        </div>
                        <div class="mini-sparkline text-success pr-2">
                            <svg width="70" height="25" viewBox="0 0 70 25"><path d="M0,20 Q15,5 35,18 T70,5" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        </div>
                    </div>

                    <div class="timeline-metric-row d-flex align-items-center justify-content-between mb-4 position-relative z-index-2">
                        <div class="d-flex align-items-center">
                            <div class="hub-icon bg-primary text-white m-3">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <div style="line-height: 1.1;">
                                <small class="text-muted font-weight-bold d-block mb-1" style="font-size: 11px;">{{ __('Packages') }}</small>
                                <h3 class="m-0 font-weight-bold text-dark">{{ $total_packages }}</h3>
                            </div>
                        </div>
                        <div class="mini-sparkline text-primary pr-2">
                            <svg width="70" height="25" viewBox="0 0 70 25"><path d="M0,15 Q20,25 40,8 T70,12" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        </div>
                    </div>

                    <div class="timeline-metric-row d-flex align-items-center justify-content-between mb-4 position-relative z-index-2">
                        <div class="d-flex align-items-center">
                            <div class="hub-icon bg-danger text-white m-3">
                                <i class="far fa-comment"></i>
                            </div>
                            <div style="line-height: 1.1;">
                                <small class="text-muted font-weight-bold d-block mb-1" style="font-size: 11px;">{{ __('Comments') }}</small>
                                <h3 class="m-0 font-weight-bold text-dark">{{ $total_comments }}</h3>
                            </div>
                        </div>
                        <div class="mini-sparkline text-danger pr-2">
                            <svg width="70" height="25" viewBox="0 0 70 25"><path d="M0,22 Q15,10 45,20 T70,8" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        </div>
                    </div>

                    <div class="timeline-metric-row d-flex align-items-center justify-content-between position-relative z-index-2">
                        <div class="d-flex align-items-center">
                            <div class="hub-icon bg-success text-white m-3">
                                <i class="fas fa-reply"></i>
                            </div>
                            <div style="line-height: 1.1;">
                                <small class="text-muted font-weight-bold d-block mb-1" style="font-size: 11px;">{{ __('Replies') }}</small>
                                <h3 class="m-0 font-weight-bold text-dark">{{ $total_replies }}</h3>
                            </div>
                        </div>
                        <div class="mini-sparkline text-success pr-2">
                            <svg width="70" height="25" viewBox="0 0 70 25"><path d="M0,18 Q20,22 45,5 T70,15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection
