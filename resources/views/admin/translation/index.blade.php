@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Translation') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_translation_update') }}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="w_50_p">{{ __('Key') }}</th>
                                        <th>{{ __('Value') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($translation_data as $key=>$value)
                                        <input type="hidden" class="form-control" name="key_arr[]" value="{{ $key }}">
                                        <tr>
                                            <td>
                                                {{ $key }}
                                            </td>
                                            <td>
                                                <input type="text" name="value_arr[]" class="form-control" value="{{ $value }}">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-success mb-50 btn-common">{{ __('Update') }}</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection