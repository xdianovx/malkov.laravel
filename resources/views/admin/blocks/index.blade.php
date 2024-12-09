@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="demo-inline-spacing">
                    @if (session('status') === 'item-updated')
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ __('admin.alert_updated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 80px;">ID</th>
                                        <th scope="col">{{__('admin.field_title')}}</th>
                                        <th class="ps-0" scope="row">{{ __('admin.field_status') }}:</th>
                                        <th scope="col" style="width: 150px;">{{__('admin.field_updated')}}</th>
                                        <th scope="col" style="width: 150px;">{{__('admin.field_action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($blocks as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><a href="{{ route('admin.blocks.show', $item->id) }}">{{ $item->title }}</a></td>
                                            <td class="text-muted">
                                                @if($item->is_active == 'on')
                                                    <span class="text-success">{{ __('admin.active') }}</span>
                                                @else
                                                    <span class="text-danger">{{ __('admin.inactive') }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li><a href="{{ route('admin.blocks.show', $item->id) }}"
                                                                class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    {{__('admin.btn_show')}}</a></li>
                                                        <li><a href="{{ route('admin.blocks.edit', $item->id) }}"
                                                                class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    {{__('admin.btn_edit')}}</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-danger">{{__('admin.notification_no_entries')}}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
