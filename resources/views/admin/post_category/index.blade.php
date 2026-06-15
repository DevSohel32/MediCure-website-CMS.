@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Post Categories') }}</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_post_category_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('Add New') }}</a>
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
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Slug') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($post_categories as $post_category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $post_category->name }}</td>
                                            <td>{{ $post_category->slug }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_post_category_edit', $post_category->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin_post_category_destroy', $post_category->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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