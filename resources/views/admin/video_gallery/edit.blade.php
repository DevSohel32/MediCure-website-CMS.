@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Video') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_video_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('View All') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_video_update', $video->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Video Preview') }}</label>
                                        <div>
                                            <iframe class="iframe_size" width="420" height="315" src="https://www.youtube.com/embed/{{ $video->video }}"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Video') }} *</label>
                                        <input type="text" name="video" class="form-control" value="{{ $video->video }}">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Caption') }}</label>
                                        <input type="text" name="caption" class="form-control" value="{{ $video->caption }}">
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