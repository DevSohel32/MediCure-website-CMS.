@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Create Package') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_package_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_package_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Photo') }} *</label>
                                        <div><input type="file" name="photo" class="form-control"></div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Description') }} *</label>
                                        <textarea name="description" class="form-control h_100">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Price') }} ({{ $global_setting->currency_symbol }}) *</label>
                                        <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Billing Cycle') }} *</label>
                                        <input type="text" name="billing_cycle" class="form-control" value="{{ old('billing_cycle') }}">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="">{{ __('Button Text') }} *</label>
                                        <input type="text" name="button_text" class="form-control" value="{{ old('button_text') }}">
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