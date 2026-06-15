@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Create Doctor') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_doctor_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_doctor_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Photo') }} *</label>
                                        <div><input type="file" name="photo" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Designation') }} *</label>
                                        <input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Biography') }} *</label>
                                        <textarea name="biography" class="form-control h_200">{{ old('biography') }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Email') }}</label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Facebook') }}</label>
                                        <input type="text" name="facebook" class="form-control" value="{{ old('facebook') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Twitter') }}</label>
                                        <input type="text" name="twitter" class="form-control" value="{{ old('twitter') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Linkedin') }}</label>
                                        <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Instagram') }}</label>
                                        <input type="text" name="instagram" class="form-control" value="{{ old('instagram') }}">
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