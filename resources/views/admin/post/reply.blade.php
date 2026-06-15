@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Replies') }}</h1>
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
                                            <th>{{ __('Reply') }}</th>
                                            <th>{{ __('Comment') }}</th>
                                            <th>{{ __('Post') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('User Type') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($replies as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $item->reply }}
                                            </td>
                                            <td>
                                                {{ $item->comment->comment }}
                                            </td>
                                            <td>
                                                @php
                                                $post_data = App\Models\Post::where('id',$item->comment->post_id)->first();
                                                @endphp
                                                {{ $post_data->title }}<br>
                                                <a href="{{ route('post',$post_data->slug) }}">{{ __('See Post') }}</a>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->user_type }}</td>
                                            <td>
                                                @if ($item->status == "Active")
                                                    <a href="{{ route('admin_reply_status_change',$item->id) }}" onClick="return confirm('Are you sure want to change the status?');"><span class="badge badge-success">{{ __('Active') }}</span></a>
                                                @else
                                                    <a href="{{ route('admin_reply_status_change',$item->id) }}" onClick="return confirm('Are you sure want to change the status?');"><span class="badge badge-danger">{{ __('Pending') }}</span></a>
                                                @endif
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_reply_delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
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