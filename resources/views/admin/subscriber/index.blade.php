@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Subscribers') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_subscriber_export') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('Export As CSV') }}</a>
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
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscribers as $subscriber)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>
                                                @if($subscriber->status == 1)
                                                    <span class="badge bg-success">{{ __('Active') }}</span>
                                                @else
                                                    <span class="badge bg-danger">{{ __('Pending') }}</span>
                                                @endif
                                            </td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_subscriber_destroy', $subscriber->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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