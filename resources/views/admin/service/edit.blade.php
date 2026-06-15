@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Service') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_service_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_service_update',$service->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Existing Photo') }}</label>
                                        <div>
                                            <img src="{{ asset('uploads/'.$service->photo) }}" alt="" class="w_200">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Change Photo') }}</label>
                                        <div><input type="file" name="photo" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control" value="{{ $service->name }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" value="{{ $service->slug }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Icon Code') }} *</label>
                                        <textarea name="icon_code" class="form-control h_100">{{ $service->icon_code }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Short Description') }} *</label>
                                        <textarea name="short_description" class="form-control h_100">{{ $service->short_description }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Description') }} *</label>
                                        <textarea name="description" class="form-control editor">{{ $service->description }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" value="{{ $service->phone }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Title') }}</label>
                                        <input type="text" name="seo_title" class="form-control" value="{{ $service->seo_title }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Meta Description') }}</label>
                                        <textarea name="seo_meta_description" class="form-control h_100">{{ $service->seo_meta_description }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
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