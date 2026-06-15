@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Department') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_dep_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_department_update', $department->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Existing Photo') }}</label>
                                        <div>
                                            <img src="{{ asset('uploads/'.$department->photo) }}" alt="" class="w_200">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Change Photo') }}</label>
                                        <div><input type="file" name="photo" class="form-control"></div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Title') }} *</label>
                                        <input type="text" name="title" class="form-control" value="{{ $department->title }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" value="{{ $department->slug }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Short Description') }} *</label>
                                        <textarea name="short_description" class="form-control h_100">{{ $department->short_description }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Description') }} *</label>
                                        <textarea name="description" class="form-control editor">{{ $department->description }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Date') }} *</label>
                                        <input type="text" name="department_date" class="form-control" value="{{ $department->department_date }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Client') }} *</label>
                                        <input type="text" name="client" class="form-control" value="{{ $department->client }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Location') }}</label>
                                        <input type="text" name="location" class="form-control" value="{{ $department->location }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Website') }}</label>
                                        <input type="text" name="website" class="form-control" value="{{ $department->website }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" value="{{ $department->phone }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Quote Person') }}</label>
                                        <input type="text" name="quote_person" class="form-control" value="{{ $department->quote_person }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Quote Text') }}</label>
                                        <textarea name="quote_text" class="form-control h_100">{{ $department->quote_text }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Title') }}</label>
                                        <input type="text" name="seo_title" class="form-control" value="{{ $department->seo_title }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Meta Description') }}</label>
                                        <textarea name="seo_meta_description" class="form-control h_100">{{ $department->seo_meta_description }}</textarea>
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
