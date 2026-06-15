@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Photo') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_photo_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_photo_update', $photo->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Existing Photo') }}</label>
                                        <div>
                                            <img src="{{ asset('uploads/'.$photo->photo) }}" alt="" class="w_200">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Change Photo') }}</label>
                                        <div><input type="file" name="photo" class="form-control"></div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Caption') }}</label>
                                        <input type="text" name="caption" class="form-control" value="{{ $photo->caption }}">
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