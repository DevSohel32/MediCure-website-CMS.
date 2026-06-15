@php
$menu_data = App\Models\Menu::get();
$menu_item = array();
@endphp
@foreach($menu_data as $row)
    @php
    $menu_item[$row->name] = $row->status;
    @endphp
@endforeach
<!-- footer-area -->
<footer>
    <div class="footer__area footer__area-one footer__area-three  black1-bg">
        <div class="footer__top-two">
            <div class="container">
                <div class="footer-contact-wrap">
                    <div class="footer-contact">
                        <div class="footer-contact_icon">
                            <svg width="27" height="37" viewBox="0 0 27 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 0.5C5.97656 0.5 0 6.54688 0 14C0 19.4844 1.82812 21.0312 12.0938 35.7969C12.4453 36.2891 12.9375 36.5 13.5 36.5C13.9922 36.5 14.4844 36.2891 14.8359 35.7969C25.1016 20.9609 27 19.4844 27 14C27 6.54688 20.9531 0.5 13.5 0.5ZM13.5 33.8281C3.58594 19.625 2.25 18.5 2.25 14C2.25 7.8125 7.24219 2.75 13.5 2.75C19.6875 2.75 24.75 7.8125 24.75 14C24.75 18.5 23.3438 19.5547 13.5 33.8281ZM13.5 8.375C10.3359 8.375 7.875 10.8359 7.875 14C7.875 17.0938 10.3359 19.625 13.5 19.625C16.5938 19.625 19.125 17.0938 19.125 14C19.125 10.8359 16.5938 8.375 13.5 8.375ZM13.5 17.375C11.6016 17.375 10.125 15.8281 10.125 14C10.125 12.1016 11.6016 10.625 13.5 10.625C15.3281 10.625 16.875 12.1016 16.875 14C16.875 15.8281 15.3281 17.375 13.5 17.375Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="media-body">
                            <p class="footer-contact_text">{{ $global_setting->footer_address_heading }}</p>
                            <p class="footer-contact_link">
                                {!! nl2br($global_setting->footer_address) !!}
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="footer-contact_icon">
                            <svg width="52" height="52" viewBox="0 0 38 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 7.5C1.34315 7.5 0 8.84315 0 10.5V26.5C0 28.1569 1.34315 29.5 3 29.5H33C34.6569 29.5 36 28.1569 36 26.5V10.5C36 8.84315 34.6569 7.5 33 7.5H3ZM3 10.5L18 19.25L33 10.5V26.5H3V10.5ZM18 16.75L3.375 8.5H32.625L18 16.75Z" fill="currentColor"/>
                            </svg>

                        </div>
                        <div class="media-body">
                            <p class="footer-contact_text">{{ $global_setting->footer_email_heading }}</p>
                            <p class="footer-contact_link">
                                {!! nl2br($global_setting->footer_email) !!}
                            </p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="footer-contact_icon icon-btn">
                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.3974 28.3423C19.3421 27.5965 19.6404 26.3038 19.1432 25.21L16.8064 19.6913C16.2595 18.4483 14.9668 17.8517 13.7239 18.1003L8.55316 19.2935C7.35992 19.5918 6.51471 20.6359 6.51471 21.9286C6.46499 28.4417 9.05035 34.5074 13.6244 39.0815C18.1985 43.6556 24.2642 46.2409 30.7773 46.1912C31.5728 46.2906 32.2191 45.9426 32.7163 45.4454C33.0644 45.0974 33.3627 44.6997 33.4621 44.2025L34.6553 39.0318C34.9039 37.7888 34.2576 36.4464 33.0644 35.9492L27.5456 33.6124C26.4518 33.1153 25.1591 33.4136 24.4133 34.3582L22.7726 36.3967C20.0878 34.9051 17.8505 32.6678 16.359 29.983L18.3974 28.3423ZM22.524 38.8329C23.0212 39.0318 23.6179 38.9323 23.9162 38.5346L26.1535 35.8001C26.2032 35.6509 26.5015 35.5515 26.7004 35.6509L32.1694 38.0374C32.3683 38.1368 32.4677 38.3357 32.4677 38.5346L31.2248 43.6556C31.2248 43.8544 31.0756 44.0036 30.7773 44.0036C24.9105 44.0036 19.3421 41.7166 15.1657 37.5402C10.9894 33.3639 8.6526 27.8451 8.6526 21.9783C8.6526 21.7795 8.70232 21.7297 8.80175 21.6303C8.85147 21.5806 8.90119 21.5309 9.00063 21.5309L14.1216 20.2879C14.3205 20.2879 14.5691 20.3376 14.6188 20.5862L17.1047 26.0552C17.2042 26.2541 17.1047 26.453 17.0053 26.5524C16.9556 26.6021 16.9556 26.6021 16.9556 26.6021L14.2211 28.8395C13.8233 29.2372 13.7239 29.7344 13.9228 30.2316C15.7623 33.9605 18.7952 36.9933 22.524 38.8329ZM22.6235 8.20632C21.9771 8.25604 21.5794 8.85266 21.6788 9.44928C21.7286 10.0956 22.3252 10.4934 22.9218 10.3939C28.3411 9.64816 33.661 11.3883 37.4893 15.2166C41.3673 19.0947 43.1075 24.4145 42.3617 29.8338C42.2623 30.4305 42.66 31.0271 43.3064 31.0768C43.6544 31.1265 44.0024 30.9774 44.251 30.7288C44.4002 30.5796 44.4996 30.3807 44.5493 30.1322C45.4442 24.0665 43.4555 18.0009 39.0803 13.6256C34.7548 9.30013 28.6891 7.31139 22.6235 8.20632ZM22.3749 14.7194C21.7286 14.8686 21.3308 15.4652 21.4302 16.0618C21.5794 16.7082 22.176 17.1059 22.8224 16.9568C26.4021 16.2607 30.131 17.4042 32.7163 19.9896C35.3514 22.6247 36.4949 26.3536 35.7989 29.9333C35.6497 30.5796 36.0475 31.1762 36.6938 31.3254C37.0915 31.3254 37.4396 31.1762 37.6882 30.9277C37.8373 30.7785 37.9865 30.6293 38.0362 30.3807C38.8317 26.0055 37.4396 21.5309 34.3073 18.3986C31.2248 15.3161 26.7501 13.9239 22.3749 14.7194ZM23.2698 21.68C22.6732 21.8789 22.3252 22.5252 22.524 23.1219C22.7229 23.7185 23.3693 24.0665 23.9659 23.8676C25.358 23.3704 26.8993 23.7185 27.9434 24.7626C29.0372 25.8564 29.3852 27.3976 28.888 28.7898C28.6891 29.3864 29.0372 30.0327 29.6338 30.2316C30.0315 30.331 30.479 30.1819 30.7276 29.9333C30.8767 29.7841 30.9762 29.6847 31.0756 29.4858C31.7717 27.2982 31.1751 24.9117 29.4846 23.2213C27.8439 21.5806 25.4574 20.984 23.2698 21.68Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="media-body">
                            <p class="footer-contact_text">{{ $global_setting->footer_phone_heading }}</p>
                            <p class="footer-contact_link">
                                {!! nl2br($global_setting->footer_phone) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__middle">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget footer__about">
                            <h4 class="footer__widget-title">{{ $global_setting->footer_column1_heading }}</h4>
                            <p class="footer__content mb-30">
                                {!! nl2br($global_setting->footer_column1_text) !!}
                            </p>
                            @if($global_setting->footer_facebook != '' || $global_setting->footer_twitter != '' || $global_setting->footer_linkedin != '' || $global_setting->footer_instagram != '')
                            <div class="social-links style3">
                                <ul class="list-wrap">
                                    @if($global_setting->footer_facebook)
                                    <li><a href="{{ $global_setting->footer_facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if($global_setting->footer_twitter)
                                    <li><a href="{{ $global_setting->footer_twitter }}" target="_blank">
                                        <svg class="d-inline-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a></li>
                                    @endif
                                    @if($global_setting->footer_linkedin)
                                    <li><a href="{{ $global_setting->footer_linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                    @if($global_setting->footer_instagram)
                                    <li><a href="{{ $global_setting->footer_instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-auto col-md-6">
                        <div class="footer__widget footer__links">
                            <h4 class="footer__widget-title">{{ $global_setting->footer_column2_heading }}</h4>
                            <ul class="list-wrap">

                                @if($menu_item['About'] == 'Show')
                                <li>
                                    <a href="{{ route('about') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('About Us') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Services'] == 'Show')
                                <li>
                                    <a href="{{ route('services') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Services') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Doctors'] == 'Show')
                                <li>
                                    <a href="{{ route('doctors') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Doctor') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Departments'] == 'Show')
                                <li>
                                    <a href="{{ route('departments') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Departments') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Blog'] == 'Show')
                                <li>
                                    <a href="{{ route('blog') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Blog') }}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-auto col-md-6">
                        <div class="footer__widget footer__links">
                            <h4 class="footer__widget-title">{{ $global_setting->footer_column3_heading }}</h4>
                            <ul class="list-wrap">
                                @if($menu_item['FAQ'] == 'Show')
                                <li>
                                    <a href="{{ route('faq') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('FAQ') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Appointment'] == 'Show')
                                <li>
                                    <a href="{{ route('appointment') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Appointment') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Contact'] == 'Show')
                                <li>
                                    <a href="{{ route('contact') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Contact Us') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Terms'] == 'Show')
                                <li>
                                    <a href="{{ route('terms') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Terms of Use') }}
                                    </a>
                                </li>
                                @endif

                                @if($menu_item['Privacy'] == 'Show')
                                <li>
                                    <a href="{{ route('privacy') }}">
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L15 7M15 7L9 13M15 7H0" stroke="currentColor" stroke-width="1.5"/>
                                        </svg>
                                        {{ __('Privacy Policy') }}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="footer__widget footer__newsletter">
                            <h4 class="footer__widget-title">{{ $global_setting->footer_column4_heading }}</h4>
                            <p class="footer__content mb-35">
                                {!! nl2br($global_setting->footer_column4_subscriber_text) !!}
                            </p>
                            <form action="{{ route('subscriber_send_email') }}" method="post" class="footer__newsletter-form form_subscribe_ajax">
                                @csrf
                                <div class="form-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <input name="email" type="text" placeholder="{{ $global_setting->footer_column4_subscriber_placeholder_text }}">
                                <button class="btn btn-five" type="submit">{{ $global_setting->footer_column4_subscriber_button_text }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom text-center">
            <div class="container">
                <div class="footer__copyright">
                    {{ $global_setting->footer_copyright }}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<div id="ajax-loader"></div>
