@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Packages') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_package_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('Add New') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL') }}</th>
                                            <th>{{ __('Photo') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Price') }} {{ $global_setting->currency_symbol }}</th>
                                            <th>{{ __('Billing Cycle') }}</th>
                                            <th>{{ __('Features') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($packages as $package)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$package->photo) }}" alt="" class="w_150">
                                            </td>
                                            <td>{{ $package->name }}</td>
                                            <td>{{ $global_setting->currency_symbol }}{{ $package->price }}</td>
                                            <td>{{ $package->billing_cycle }}</td>
                                            <td>
                                                <a href="{{ route('admin_package_feature_index', $package->id) }}" class="btn btn-success btn-sm">{{ __('Manage Features') }}</a>
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_package_edit', $package->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_package_destroy', $package->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection