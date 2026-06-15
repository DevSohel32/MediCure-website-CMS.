@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Doctors') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_doctor_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('Add New') }}</a>
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
                                            <th>{{ __('Designation') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($doctors as $doctor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$doctor->photo) }}" alt="" class="w_100">
                                            </td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->designation }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_doctor_edit', $doctor->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_doctor_destroy', $doctor->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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