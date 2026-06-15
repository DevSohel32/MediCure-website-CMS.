@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Features of') }} {{ $package->name }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_package_index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> {{ __('Back to Previous') }}</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Is Available?') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($package->features as $package_feature)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $package_feature->name }}</td>
                                            <td>{{ $package_feature->is_available }}</td>
                                            <td>
                                                <a href="{{ route('admin_package_feature_destroy', $package_feature->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_package_feature_store', $package->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="photo">{{ __('Name') }}</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="photo">{{ __('Is Available?') }}</label>
                                    <select name="is_available" class="form-select">
                                        <option value="Yes">{{ __('Yes') }}</option>
                                        <option value="No">{{ __('No') }}</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection