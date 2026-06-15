@if($global_page_item->blog_sidebar_search_status == 'Show')
<div class="blog-widget">
    <h4 class="widget-title">{{ __('Search Here') }}</h4>
    <div class="sidebar-search-form">
        <form action="{{ route('search') }}" method="get">
            <input type="text" placeholder="{{ __('Enter Keyword') }}" name="text">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
@endif

@if($global_page_item->blog_sidebar_category_status == 'Show')
<div class="blog-widget">
    <h4 class="widget-title">{{ __('Categories') }}</h4>
    <div class="sidebar-cat-list">
        <ul class="list-wrap">
            @php
            $all_categories = App\Models\PostCategory::orderBy('name','asc')->get();
            @endphp
            @foreach($all_categories as $item)
            <li><a href="{{ route('category',$item->slug) }}">{{ $item->name }} <span><i class="fas fa-arrow-right"></i></span></a></li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@if($global_page_item->blog_sidebar_recent_post_status == 'Show')
<div class="blog-widget widget-rc-post">
    <h4 class="widget-title">{{ __('Recent Posts') }}</h4>
    <div class="rc-post-wrap">
        @php
        $all_recent_posts = App\Models\Post::orderBy('id','desc')->limit($global_page_item->blog_sidebar_recent_post_total)->get();
        @endphp
        @foreach($all_recent_posts as $item)
        <div class="rc-post-item">
            <div class="thumb">
                <a href="{{ route('post',$item->slug) }}"><img src="{{ asset('uploads/'.$item->photo) }}" alt="img"></a>
            </div>
            <div class="content">
                <span class="date"><i class="far fa-clock"></i>{{ $item->created_at->format('d M, Y') }}</span>
                <h4 class="title"><a href="{{ route('post',$item->slug) }}">{{ $item->title }}</a></h4>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif


@if($global_page_item->blog_sidebar_tag_status == 'Show')
@php
$tags = App\Models\Post::pluck('tags')->flatMap(function ($item) {
    return explode(',', $item);
})->unique()->values();
@endphp
@if(count($tags) != 0)
<div class="blog-widget">
    <h3 class="widget-title">{{ __('Popular Tags') }}</h3>
    <div class="sidebar-tag-list">
        <ul class="list-wrap">
            @for($i=0;$i<count($tags);$i++)
            <li>
                <a href="{{ route('tag', $tags[$i]) }}">{{ $tags[$i] }}</a>
            </li>
            @endfor
        </ul>
    </div>
</div>
@endif
@endif