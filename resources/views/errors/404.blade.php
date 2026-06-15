@extends('front.layouts.master')
@section('main_content')
<section class="error-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error-wrap text-center">
                    <div class="ertor-thumb mb-40">
                        <img src="{{ asset('uploads/'.$global_setting->not_found_photo) }}" alt="img">
                    </div>
                    <div class="section__title">
                        @if($global_setting->not_found_heading != '')
                        <h2 class="title">{{ $global_setting->not_found_heading }}</h2>
                        @endif
                        @if($global_setting->not_found_text != '')
                        <p class="sec-text mt-20">
                            {!! $global_setting->not_found_text !!}
                        </p>
                        @endif
                        @if($global_setting->not_found_button_status == 'Show')
                        <div class="tg-button-wrap justify-content-center mt-40">
                            <a href="{{ url('/') }}" class="btn">
                                <span class="btn-text" data-text="{{ $global_setting->not_found_button_text }}"></span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection