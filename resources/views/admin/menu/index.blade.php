@extends('admin.layouts.master')

@section('main_content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')

<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ __('Menu Manage') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_menu_update') }}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>{{ __('SL') }}</th>
                                        <th>{{ __('Menu Name') }}</th>
                                        <th>{{ __('Menu Status') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($menus as $row)
                                            <input type="hidden" name="menu_id[]" value="{{ $row->id }}">
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>
                                                    <select name="status[]" class="form-select">
                                                        <option value="Show" @if($row->status == 'Show') selected @endif>{{ __('Show') }}</option>
                                                        <option value="Hide" @if($row->status == 'Hide') selected @endif>{{ __('Hide') }}</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-success">{{ __('Update') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection