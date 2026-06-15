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
                    <h3 class="title">{{ $post->title }}</h3>
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
                            <a href="{{ route('blog') }}">{{ $global_page_item->blog_page_title }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $post->title }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Blog Details Area
==============================-->
<section class="blog__details-area pt-120 pb-120">
    <div class="container">
        <div class="row gy-60">
            <div class="col-lg-8">
                <div class="blog__details-wrap">
                    <div class="blog__details-thumb">
                        <div class="thumb">
                            <img src="{{ asset('uploads/'.$post->photo) }}" alt="img">
                        </div>
                        <div class="blog__post-date">{{ $post->created_at->format('d') }} <span>{{ $post->created_at->format('M') }}</span></div>
                    </div>
                    <div class="blog__post-meta">
                        <ul class="list-wrap">
                            <li><a href="javascript:void(0)">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C3.5625 0 0 3.59375 0 8C0 12.4375 3.5625 16 8 16C12.4062 16 16 12.4375 16 8C16 3.59375 12.4062 0 8 0ZM8 15C6.5 15 5.125 14.5625 4 13.7812C4.125 12.2188 5.40625 11 7 11H9C10.5625 11 11.8438 12.2188 11.9688 13.7812C10.8438 14.5625 9.46875 15 8 15ZM12.8438 13.0312C12.4062 11.3125 10.8438 10 9 10H7C5.125 10 3.5625 11.3125 3.125 13.0312C1.8125 11.75 1 9.96875 1 8C1 4.15625 4.125 1 8 1C11.8438 1 15 4.15625 15 8C15 9.96875 14.1562 11.75 12.8438 13.0312ZM8 4C6.59375 4 5.5 5.125 5.5 6.5C5.5 7.90625 6.59375 9 8 9C9.375 9 10.5 7.90625 10.5 6.5C10.5 5.125 9.375 4 8 4ZM8 8C7.15625 8 6.5 7.34375 6.5 6.5C6.5 5.6875 7.15625 5 8 5C8.8125 5 9.5 5.6875 9.5 6.5C9.5 7.34375 8.8125 8 8 8Z" fill="currentColor"/>
                                </svg>
                                    {{ __('by') }} {{ $admin_data->name }}</a></li>
                            <li><a href="{{ route('category', $post->post_category->slug) }}">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 4.25C2.5 3.84375 2.8125 3.5 3.25 3.5C3.65625 3.5 4 3.84375 4 4.25C4 4.6875 3.65625 5 3.25 5C2.8125 5 2.5 4.6875 2.5 4.25ZM6.375 1C6.75 1 7.15625 1.1875 7.4375 1.46875L12.8125 6.84375C13.5938 7.625 13.5938 8.90625 12.8125 9.6875L8.65625 13.8438C7.875 14.625 6.59375 14.625 5.8125 13.8438L0.4375 8.46875C0.15625 8.1875 0 7.78125 0 7.40625V2.5C0 1.6875 0.65625 1 1.5 1H6.375ZM1.125 7.75L6.53125 13.1562C6.90625 13.5312 7.5625 13.5312 7.9375 13.1562L12.125 8.96875C12.5 8.59375 12.5 7.9375 12.125 7.5625L6.71875 2.15625C6.625 2.0625 6.5 2 6.375 2H1.5C1.21875 2 1 2.25 1 2.5V7.40625C1 7.53125 1.03125 7.65625 1.125 7.75ZM9.625 1.15625C9.8125 0.96875 10.125 0.96875 10.3438 1.15625L14.75 5.375C16.4062 6.9375 16.4062 9.59375 14.75 11.1562L10.8438 14.875C10.6562 15.0625 10.3438 15.0625 10.1562 14.875C9.96875 14.6562 9.96875 14.3438 10.1562 14.1562L14.0625 10.4375C15.2812 9.25 15.2812 7.28125 14.0625 6.09375L9.625 1.875C9.4375 1.6875 9.4375 1.375 9.625 1.15625Z" fill="currentColor"/>
                                </svg>
                                {{ $post->post_category->name }}</a></li>
                        </ul>
                    </div>
                    <div class="blog__details-content">
                        <h3 class="title mb-3">
                            {{ $post->title }}
                        </h3>
                        <p>
                            {!! $post->description !!}
                        </p>
                        <div class="blog__details-content-bottom">
                            <div class="row align-items-center">
                                @if($global_page_item->blog_detail_tag_status == 'Show')
                                    @if(count($post_tags) != 0)
                                    <div class="col-md-12">
                                        <div class="post-tags">
                                            <h5 class="title">{{ __('Tags:') }}</h5>
                                            <ul class="list-wrap">
                                                @for($i=0;$i<count($post_tags);$i++)
                                                <li><a href="{{ route('tag',$post_tags[$i]) }}">{{ $post_tags[$i] }}</a></li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                @endif

                                @if($global_page_item->blog_detail_share_status == 'Show')
                                <div class="col-md-12">
                                    <div class="blog-post-share">
                                        <h5 class="title">{{ __('Share:') }}</h5>
                                        <div class="social-links style2">
                                            <ul class="list-wrap">
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('post', $post->slug)) }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(route('post', $post->slug)) }}&text={{ urlencode($post->title) }}" target="_blank">
                                                    <svg class="d-inline-block" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.33192 5.92804L13.5438 0H12.3087L7.78328 5.14724L4.16883 0H0L5.46575 7.78353L0 14H1.2351L6.01407 8.56431L9.83119 14H14L8.33192 5.92804ZM6.64027 7.85211L6.08648 7.07704L1.68013 0.909771H3.57718L7.13316 5.88696L7.68694 6.66202L12.3093 13.1316H10.4123L6.64027 7.85211Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </a></li>
                                                <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('post', $post->slug)) }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>

                        @if($global_page_item->blog_detail_author_status == 'Show')
                        <div class="blog-avatar-wrap">
                            <div class="blog-avatar-img">
                                <a href="javascript:void(0)"><img src="{{ asset('uploads/'.$admin_data->photo) }}" alt="img"></a>
                            </div>
                            <div class="blog-avatar-info">
                                <h4 class="name"><a href="javascript:void(0)">{{ $admin_data->name }}</a></h4>
                                <p>
                                    {!! nl2br($admin_data->biography) !!}
                                </p>
                            </div>
                        </div>
                        @endif

                        @if($global_page_item->blog_detail_comment_status == 'Show')
                        <div class="comment">
                            <div class="comment-respond">
                                <h3 class="comment-reply-title mb-20">{{ $total_comments }} {{ __('Comments') }}</h3>
                            </div>
                            @forelse($comments as $item)
                            <div class="comment-section">
                                <div class="comment-box d-flex justify-content-start">
                                    <div class="left">
                                        @php
                                        $default = "";
                                        $size = 200;
                                        $gravatar_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->email))) . "?d=" . urlencode($default) . "&s=" . $size;
                                        @endphp
                                        <img src="{{ $gravatar_url }}" alt="">
                                    </div>
                                    <div class="right">
                                        <div class="name">{{ $item->name }}</div>
                                        <div class="date">
                                            {{ $item->created_at->format('j F, Y') }}
                                        </div>
                                        <div class="text">
                                            {!! nl2br($item->comment) !!}
                                        </div>
                                        <div class="reply">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#reply_modal{{$loop->iteration}}"><i class="fas fa-reply"></i> {{ __('Reply') }}</a>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="modal fade" id="reply_modal{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Give a Reply') }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('reply_submit') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="comment_id" value="{{ $item->id }}">
                                                    <div class="mb-3">
                                                        <input name="name" type="text" class="form-control" placeholder="{{ __('Name') }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input name="email" type="text" class="form-control" placeholder="{{ __('Email') }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <textarea name="reply" class="form-control h_100" cols="30" rows="10" placeholder="{{ __('Reply') }}" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                $replies = App\Models\Reply::where('comment_id',$item->id)->where('status', 'Active')->get();
                                @endphp
                                @foreach($replies as $reply)
                                @php
                                if($reply->user_type == 'Admin')
                                {
                                    $name = Auth::guard('admin')->user()->name;
                                    $email = Auth::guard('admin')->user()->email;
                                } else {
                                    $name = $reply->name;
                                    $email = $reply->email;
                                }
                                
                                @endphp
                                <div class="comment-box reply-box d-flex justify-content-start">
                                    <div class="left">
                                        @php
                                        $default = "";
                                        $size = 200;
                                        $gravatar_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=" . urlencode($default) . "&s=" . $size;
                                        @endphp
                                        <img src="{{ $gravatar_url }}" alt="">
                                    </div>
                                    <div class="right">
                                        <div class="name">
                                            {{ $name }}
                                            @if($reply->user_type == 'Admin')
                                            <span class="badge bg-primary">{{ __('Admin') }}</span>
                                            @endif
                                        </div>
                                        <div class="date">
                                            {{ $reply->created_at->format('j F, Y') }}
                                        </div>
                                        <div class="text">
                                            {!! nl2br($reply->reply) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @empty
                            <div class="mb-40 text-danger">{{ __('No comments found') }}</div>
                            @endforelse

                        </div>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title mb-20">{{ __('Leave a Reply') }}</h3>
                            <form action="{{ route('comment_submit') }}" class="comment-form" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="row gy-20">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="name" placeholder="{{ __('Name') }}" required>
                                            <label class="form-icon-left">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 8C4.78125 8 3 6.21875 3 4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4C11 6.21875 9.1875 8 7 8ZM7 1C5.34375 1 4 2.375 4 4C4 5.65625 5.34375 7 7 7C8.625 7 10 5.65625 10 4C10 2.375 8.625 1 7 1ZM8.5625 9.5C11.5625 9.5 14 11.9375 14 14.9375C14 15.5312 13.5 16 12.9062 16H1.0625C0.46875 16 0 15.5312 0 14.9375C0 11.9375 2.40625 9.5 5.40625 9.5H8.5625ZM12.9062 15C12.9375 15 13 14.9688 13 14.9375C13 12.5 11 10.5 8.5625 10.5H5.40625C2.96875 10.5 1 12.5 1 14.9375C1 14.9688 1.03125 15 1.0625 15H12.9062Z" fill="currentColor"/>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="email" placeholder="{{ __('Email Address') }}" required>
                                            <label class="form-icon-left">
                                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 2C0 0.90625 0.875 0 2 0H14C15.0938 0 16 0.90625 16 2V10C16 11.125 15.0938 12 14 12H2C0.875 12 0 11.125 0 10V2ZM1 2V3.25L7.09375 7.75C7.625 8.125 8.34375 8.125 8.875 7.75L15 3.25V2C15 1.46875 14.5312 1 14 1H1.96875C1.4375 1 0.96875 1.46875 0.96875 2H1ZM1 4.5V10C1 10.5625 1.4375 11 2 11H14C14.5312 11 15 10.5625 15 10V4.5L9.46875 8.5625C8.59375 9.1875 7.375 9.1875 6.5 8.5625L1 4.5Z" fill="currentColor"/>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comment" placeholder="{{ __('Comment') }}" class="form-control style-border" required></textarea>
                                            <label class="form-icon-left">
                                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 4C19.0938 4 20 4.90625 20 6V12.0312C20 13.125 19.0938 14 18 14H17V15.625C17 15.875 16.8125 16 16.625 16C16.5312 16 16.4688 16 16.375 15.9375L13 14H9.96875C8.875 14 8 13.125 8 12V11H9V12C9 12.5625 9.4375 13 10 13H13.25L16 14.5625V13H18C18.5312 13 19 12.5625 19 12V6C19 5.46875 18.5312 5 18 5H14V4H18ZM13 8C13 9.125 12.0938 10 11 10H7L3.59375 11.9375C3.5 12 3.4375 12 3.375 12C3.15625 12 3 11.875 3 11.625V10.0312L2 10C0.875 10 0 9.125 0 8V2C0 0.90625 0.875 0 2 0H11C12.0938 0 13 0.90625 13 2V8ZM6.71875 9H11C11.5312 9 12 8.5625 12 8V2C12 1.46875 11.5312 1 11 1H2C1.4375 1 1 1.46875 1 2V8C1 8.5625 1.4375 9 2 9H4V10.5625L6.71875 9Z" fill="currentColor"/>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="mb-2 tal">
                                                {!! captcha_img() !!}
                                            </div>
                                            <input type="text" class="form-control style-border" name="captcha" placeholder="{{ __('Enter Captcha') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn mt-30">
                                    <span class="btn-text" data-text="{{ __('Submit') }}"></span>
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    @include('front.layouts.blog_sidebar')
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-details-area-end -->

@endsection