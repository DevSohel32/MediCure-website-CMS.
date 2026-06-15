@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Comments') }}</h1>
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
                                            <th>{{ __('Comments') }}</th>
                                            <th>{{ __('Post') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $item->comment }}<br>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modal_reply_admin{{$loop->iteration}}">{{ __('Reply') }}</a>
                                            </td>
                                            <td>
                                                {{ $item->post->title }}<br>
                                                <a href="{{ route('post',$item->post->slug) }}">{{ __('See Post') }}</a>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @if ($item->status == "Active")
                                                    <a href="{{ route('admin_comment_status_change',$item->id) }}" onClick="return confirm('Are you sure want to change status?');"><span class="badge badge-success">{{ __('Active') }}</span></a>
                                                @else
                                                    <a href="{{ route('admin_comment_status_change',$item->id) }}" onClick="return confirm('Are you sure want to change status?');"><span class="badge badge-danger">{{ __('Pending') }}</span></a>
                                                @endif
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_comment_delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal_reply_admin{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Reply') }}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin_reply_submit') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="comment_id" value="{{ $item->id }}">
                                                            <div class="mb-3">
                                                                <textarea name="reply" class="form-control h_100" cols="30" rows="10" placeholder="{{ __('Reply') }}"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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