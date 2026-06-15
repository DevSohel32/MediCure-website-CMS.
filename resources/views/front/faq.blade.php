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
                    <h3 class="title">{{ $global_page_item->faq_page_title }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $global_page_item->faq_page_title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Faq Area
    ==============================-->
<section class="faq-area pt-120 pb-120">
    <div class="container">
        <div class="row gy-5 gx-80 justify-content-between align-items-center">
            <div class="col-xl-12">
                <div class="accordion-area accordion" id="faqAccordion">
                    @foreach($faqs as $key => $faq)
                    <div class="accordion-card {{ $key == 0 ? 'active' : '' }}">
                        <div class="accordion-header" id="collapse-item-{{ $key+1 }}">
                            <button class="accordion-button {{ $key != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key+1 }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse-{{ $key+1 }}">
                                {{ $loop->iteration < 10 ? '0'.$loop->iteration : $loop->iteration }}. {{ $faq->question }}
                            </button>
                        </div>
                        <div id="collapse-{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="collapse-item-{{ $key+1 }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">
                                    {!! nl2br($faq->answer) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--======== / Faq Section ========-->

@endsection