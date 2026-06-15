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
                    <h3 class="title">{{ $global_page_item->pricing_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->pricing_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Pricing Area 1
==============================-->
<section class="pricing-area-1 pt-120 pb-80 overflow-hidden position-relative">
    <div class="container">
        <div class="row gy-30 justify-content-center">
            @foreach($packages as $package)
            <div class="col-xl-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_thumb">
                        <img src="{{ asset('uploads/'.$package->photo) }}" alt="img">
                        <h4 class="pricing-card_price"><span class="currency">{{ $global_setting->currency_symbol }}</span>{{ $package->price }}<span class="duration"> / {{ $package->billing_cycle }}</span>
                        </h4>
                    </div>
                    <div class="pricing-card_details">
                        <h4 class="pricing-card_title">{{ $package->name }}</h4>
                        <p class="pricing-card_text">
                            {!! nl2br($package->short_description) !!}
                        </p>
                        <div class="checklist">
                            <ul class="list-wrap">
                                @foreach($package->features as $item)
                                <li><i class="fas fa-{{ $item->is_available == 'Yes' ? 'check' : 'times' }}"></i> {{ $item->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tg-button-wrap justify-content-center">
                            <a href="{{ route('contact') }}" class="btn w-100"><span class="btn-text" data-text="{{ $package->button_text }}"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--======== / Pricing Section ========-->

@endsection