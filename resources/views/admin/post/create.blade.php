@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Create Post') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_post_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_post_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Photo') }} *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Title') }} *</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Short Description') }} *</label>
                                        <textarea name="short_description" class="form-control h_100">{{ old('short_description') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Description') }} *</label>
                                        <textarea name="description" class="form-control editor">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Category') }} *</label>
                                        <select name="post_category_id" class="form-select">
                                            @foreach ($post_categories as $post_category)
                                                <option value="{{ $post_category->id }}" {{ old('post_category_id') == $post_category->id ? 'selected' : '' }}>{{ $post_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Tags') }}</label>
                                        <select name="tags[]" class="form-select select2_tags"></select>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Title') }}</label>
                                        <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Meta Description') }}</label>
                                        <textarea name="seo_meta_description" class="form-control h_100">{{ old('seo_meta_description') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection