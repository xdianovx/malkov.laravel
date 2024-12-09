@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h3 class="card-header align-items-center d-flex">{{ __('admin.main_info') }}</h3>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="">
                                    <i class="ri-more-2-fill fs-14"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1"
                                    style="">
                                    <li><a href="{{ route('admin.main_infos.edit', $main_info->slug) }}"
                                            class="dropdown-item edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom me-2 "></i>
                                            {{ __('admin.btn_edit') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>

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
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_telegram') }}:</th>
                                    <td class="text-muted">{{ $main_info->telegram }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_whatsapp') }}:</th>
                                    <td class="text-muted">{{ $main_info->whatsapp }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_vkontakte') }}:</th>
                                    <td class="text-muted">{{ $main_info->vkontakte }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_phone') }}:</th>
                                    <td class="text-muted">{{ $main_info->phone }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_address') }}:</th>
                                    <td class="text-muted">{{ $main_info->address }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_working_days') }}:</th>
                                    <td class="text-muted">{{ $main_info->working_days }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_text_footer') }}:</th>
                                    <td class="text-muted">{{ $main_info->text_footer }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div><!-- end card body -->
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header align-items-center d-flex">{{ __('admin.page_card_seo') }}</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_og_site_title') }}:</th>
                                    <td class="text-muted">{{ $main_info->og_site_title }}</td>
                                </tr>
                                <tr>
                                    @if (!empty($main_info->og_site_image))
                                        <img src="{{ asset('storage') . '/' . $main_info->og_site_image }}"
                                            class="img-fluid" alt="Responsive image">
                                    @else
                                    @endif
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>
@endsection
