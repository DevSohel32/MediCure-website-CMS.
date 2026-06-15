@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Create Slider') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_slider_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_slider_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Photo') }} *</label>
                                        <div><input type="file" name="photo"></div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Subheading') }} *</label>
                                        <textarea name="subheading" class="form-control h_100">{{ old('subheading') }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Heading') }} *</label>
                                        <textarea name="heading" class="form-control h_100">{{ old('heading') }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Button 1 - Text') }}</label>
                                        <input type="text" name="button1_text" class="form-control" value="{{ old('button1_text') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Button 1 - Link') }}</label>
                                        <input type="text" name="button1_link" class="form-control" value="{{ old('button1_link') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Button 2 - Text') }}</label>
                                        <input type="text" name="button2_text" class="form-control" value="{{ old('button2_text') }}">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Button 2 - Link') }}</label>
                                        <input type="text" name="button2_link" class="form-control" value="{{ old('button2_link') }}">
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