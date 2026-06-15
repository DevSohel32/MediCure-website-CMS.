@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Doctor') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_doctor_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_doctor_update', $doctor->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Existing Photo') }}</label>
                                        <div>
                                            <img src="{{ asset('uploads/'.$doctor->photo) }}" alt="" class="w_100">
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
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control" value="{{ $doctor->name }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" value="{{ $doctor->slug }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Designation') }} *</label>
                                        <input type="text" name="designation" class="form-control" value="{{ $doctor->designation }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Biography') }} *</label>
                                        <textarea name="biography" class="form-control h_200">{{ $doctor->biography }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Email') }}</label>
                                        <input type="text" name="email" class="form-control" value="{{ $doctor->email }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" value="{{ $doctor->phone }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Facebook') }}</label>
                                        <input type="text" name="facebook" class="form-control" value="{{ $doctor->facebook }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Twitter') }}</label>
                                        <input type="text" name="twitter" class="form-control" value="{{ $doctor->twitter }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Linkedin') }}</label>
                                        <input type="text" name="linkedin" class="form-control" value="{{ $doctor->linkedin }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Instagram') }}</label>
                                        <input type="text" name="instagram" class="form-control" value="{{ $doctor->instagram }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Title') }}</label>
                                        <input type="text" name="seo_title" class="form-control" value="{{ $doctor->seo_title }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('SEO Meta Description') }}</label>
                                        <textarea name="seo_meta_description" class="form-control h_100">{{ $doctor->seo_meta_description }}</textarea>
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