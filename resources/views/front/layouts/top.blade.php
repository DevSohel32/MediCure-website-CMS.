<div class="tg-header__top">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8">
                @if($global_setting->top_bar_email != '' || $global_setting->top_bar_phone != '')
                <ul class="tg-header__top-info left-side list-wrap">
                    @if($global_setting->top_bar_email)
                    <li><i class="far fa-envelope"></i>{{ $global_setting->top_bar_email }}</li>
                    @endif
                    @if($global_setting->top_bar_phone)
                    <li><i class="fas fa-phone"></i>{{ $global_setting->top_bar_phone }}</li>
                    @endif
                </ul>
                @endif
            </div>
            <div class="col-xl-6 col-md-4">
                <ul class="tg-header__top-right list-wrap">
                    @if($global_setting->top_bar_faq_status == 'Show' || $global_setting->top_bar_contact_status == 'Show')
                    <li>
                        <div class="tg-header__top-links">
                            @if($global_setting->top_bar_faq_status == 'Show')
                            <a href="{{ route('faq') }}">{{ __('Faq') }}</a>
                            @endif
                            @if($global_setting->top_bar_contact_status == 'Show')
                            <a href="{{ route('contact') }}">{{ __('Contact') }}</a>
                            @endif
                        </div>
                    </li>
                    @endif

                    @if($global_setting->top_bar_facebook != '' || $global_setting->top_bar_twitter != '' || $global_setting->top_bar_linkedin != '' || $global_setting->top_bar_instagram != '')
                    <li class="tg-header__top-social">
                        <ul class="list-wrap">
                            @if($global_setting->top_bar_facebook)
                            <li><a href="{{ $global_setting->top_bar_facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if($global_setting->top_bar_twitter)
                            <li><a href="{{ $global_setting->top_bar_twitter }}" target="_blank">
                                <svg class="d-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z"
                                        fill="currentColor" />
                                </svg>
                            </a></li>
                            @endif
                            @if($global_setting->top_bar_linkedin)
                            <li><a href="{{ $global_setting->top_bar_linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if($global_setting->top_bar_instagram)
                            <li><a href="{{ $global_setting->top_bar_instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>