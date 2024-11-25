@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ __('admin.main_info_edit') }}</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                aria-expanded="false" class="">
                                <i class="ri-more-2-fill fs-14"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1"
                                style="">

                                <li>
                                    <a type="button" class="dropdown-item" href="{{ route('admin.index') }}">
                                        <i class="ri-arrow-left-line align-bottom me-2 text-muted"></i>
                                        {{ __('admin.btn_back') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger alert-border-left alert-dismissible fade show " role="alert">

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    @foreach ($errors->all() as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.main_infos.update', $main_info->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label class="form-label">{{ __('admin.field_telegram') }}</label>
                                    <input type="text" name="telegram" value="{{ $main_info->telegram }}"
                                        class="form-control" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('admin.field_whatsapp') }}</label>
                                    <input type="text" name="whatsapp" value="{{ $main_info->whatsapp }}"
                                        class="form-control" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('admin.field_vkontakte') }}</label>
                                    <input type="text" name="vkontakte" value="{{ $main_info->vkontakte }}"
                                        class="form-control" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('admin.field_phone') }}</label>
                                    <input type="text" name="phone" value="{{ $main_info->phone }}"
                                        class="form-control" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('admin.field_address') }}</label>
                                    <input type="text" name="address" value="{{ $main_info->address }}"
                                        class="form-control" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ __('admin.field_working_days') }}</label>
                                    <input type="text" name="working_days" value="{{ $main_info->working_days }}"
                                        class="form-control" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">{{ __('admin.field_text_footer') }}</label>
                                    <textarea class="form-control" name="text_footer" placeholder="{{ __('admin.placeholder_text') }}"
                                        style="height: 234px;">{{ $main_info->text_footer }}</textarea>
                                </div>

                            </div>
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light mt-5">{{ __('admin.btn_save') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.upload_script')
@endsection
