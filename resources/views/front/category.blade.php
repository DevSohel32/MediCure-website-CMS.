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
                    <h3 class="title">{{ $global_page_item->blog_category_page_title }} {{ $category->name }}</h3>
                </div>
            </div>
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="{{ url('/') }}">{{ __('Home') }}</a>
                        </span>
                        <span class="breadcrumb-separator">/</span>
                        <span property="itemListElement" typeof="ListItem">{{ $category->name }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--==============================
Blog Area
==============================-->
<section class="blog-area-4 pt-120 pb-120">
    <div class="container">
        <div class="row gy-60">
            <div class="col-lg-8">
                <div class="row gy-40">
                    @foreach($posts as $post)
                    <div class="col-lg-12">
                        <div class="blog__post-item">
                            <div class="blog__post-thumb">
                                <a href="{{ route('post',$post->slug) }}"><img src="{{ asset('uploads/'.$post->photo) }}" alt="img"></a>
                                <div class="blog__post-date">{{ $post->created_at->format('d') }} <span>{{ $post->created_at->format('M') }}</span></div>
                            </div>
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><a href="javascript:void(0)">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0C3.5625 0 0 3.59375 0 8C0 12.4375 3.5625 16 8 16C12.4062 16 16 12.4375 16 8C16 3.59375 12.4062 0 8 0ZM8 15C6.5 15 5.125 14.5625 4 13.7812C4.125 12.2188 5.40625 11 7 11H9C10.5625 11 11.8438 12.2188 11.9688 13.7812C10.8438 14.5625 9.46875 15 8 15ZM12.8438 13.0312C12.4062 11.3125 10.8438 10 9 10H7C5.125 10 3.5625 11.3125 3.125 13.0312C1.8125 11.75 1 9.96875 1 8C1 4.15625 4.125 1 8 1C11.8438 1 15 4.15625 15 8C15 9.96875 14.1562 11.75 12.8438 13.0312ZM8 4C6.59375 4 5.5 5.125 5.5 6.5C5.5 7.90625 6.59375 9 8 9C9.375 9 10.5 7.90625 10.5 6.5C10.5 5.125 9.375 4 8 4ZM8 8C7.15625 8 6.5 7.34375 6.5 6.5C6.5 5.6875 7.15625 5 8 5C8.8125 5 9.5 5.6875 9.5 6.5C9.5 7.34375 8.8125 8 8 8Z" fill="currentColor"/>
                                        </svg>
                                            by {{ $admin_data->name }}</a></li>
                                    <li><a href="{{ route('category',$post->post_category->slug) }}">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4.25C2.5 3.84375 2.8125 3.5 3.25 3.5C3.65625 3.5 4 3.84375 4 4.25C4 4.6875 3.65625 5 3.25 5C2.8125 5 2.5 4.6875 2.5 4.25ZM6.375 1C6.75 1 7.15625 1.1875 7.4375 1.46875L12.8125 6.84375C13.5938 7.625 13.5938 8.90625 12.8125 9.6875L8.65625 13.8438C7.875 14.625 6.59375 14.625 5.8125 13.8438L0.4375 8.46875C0.15625 8.1875 0 7.78125 0 7.40625V2.5C0 1.6875 0.65625 1 1.5 1H6.375ZM1.125 7.75L6.53125 13.1562C6.90625 13.5312 7.5625 13.5312 7.9375 13.1562L12.125 8.96875C12.5 8.59375 12.5 7.9375 12.125 7.5625L6.71875 2.15625C6.625 2.0625 6.5 2 6.375 2H1.5C1.21875 2 1 2.25 1 2.5V7.40625C1 7.53125 1.03125 7.65625 1.125 7.75ZM9.625 1.15625C9.8125 0.96875 10.125 0.96875 10.3438 1.15625L14.75 5.375C16.4062 6.9375 16.4062 9.59375 14.75 11.1562L10.8438 14.875C10.6562 15.0625 10.3438 15.0625 10.1562 14.875C9.96875 14.6562 9.96875 14.3438 10.1562 14.1562L14.0625 10.4375C15.2812 9.25 15.2812 7.28125 14.0625 6.09375L9.625 1.875C9.4375 1.6875 9.4375 1.375 9.625 1.15625Z" fill="currentColor"/>
                                        </svg>
                                        {{ $post->post_category->name }}</a></li>
                                </ul>
                            </div>
                            <div class="blog__post-content">
                                <h3 class="title"><a href="{{ route('post',$post->slug) }}">
                                    {{ $post->title }}
                                </a></h3>
                                <p class="text">
                                    {!! nl2br($post->short_description) !!}
                                </p>
                                <div class="blog__post-bottom">
                                    <a href="{{ route('post',$post->slug) }}" class="btn">
                                        <div class="btn-text" data-text="{{ __('Read Details') }}"></div>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($posts->hasPages())
                <div class="row gy-30">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="pagination__wrap mt-60">
                            <ul class="list-wrap d-flex flex-wrap">
                                @php
                                    $current = $posts->currentPage();
                                    $last = $posts->lastPage();
                                @endphp
                                @if(!$posts->onFirstPage())
                                    <li>
                                        <a href="{{ $posts->previousPageUrl() }}" class="page-numbers">
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
                                        <li><a href="{{ $posts->url($page) }}" class="page-numbers">{{ sprintf('%02d', $page) }}</a></li>
                                    @endif
                                @endfor
                                @if($posts->hasMorePages())
                                    <li>
                                        <a href="{{ $posts->nextPageUrl() }}" class="page-numbers">
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
            <div class="col-lg-4">
                <aside class="blog-sidebar">
                    @include('front.layouts.blog_sidebar')
                </aside>
            </div>
        </div>
    </div>
</section>
<!--======== / Blog Section ========-->

@endsection