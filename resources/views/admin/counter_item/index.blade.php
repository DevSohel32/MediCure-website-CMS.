@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Edit Counter Item') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_counter_item_update') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Item 1 Number') }}</label>
                                        <input type="text" name="item1_number" value="{{ $counter_item->item1_number }}" class="form-control">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Item 1 Title') }}</label>
                                        <input type="text" name="item1_title" value="{{ $counter_item->item1_title }}" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Item 1 Content') }}</label>
                                        <textarea name="item1_content" class="form-control h_100">{{ $counter_item->item1_content }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Item 2 Number') }}</label>
                                        <input type="text" name="item2_number" value="{{ $counter_item->item2_number }}" class="form-control">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Item 2 Title') }}</label>
                                        <input type="text" name="item2_title" value="{{ $counter_item->item2_title }}" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Item 2 Content') }}</label>
                                        <textarea name="item2_content" class="form-control h_100">{{ $counter_item->item2_content }}</textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Item 3 Number') }}</label>
                                        <input type="text" name="item3_number" value="{{ $counter_item->item3_number }}" class="form-control">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">{{ __('Item 3 Title') }}</label>
                                        <input type="text" name="item3_title" value="{{ $counter_item->item3_title }}" class="form-control">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">{{ __('Item 3 Content') }}</label>
                                        <textarea name="item3_content" class="form-control h_100">{{ $counter_item->item3_content }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
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