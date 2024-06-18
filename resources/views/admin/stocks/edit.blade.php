@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ __('admin.edit_stock_card_title') }} {{ $item->title }}</h4>
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

            @if (!empty($item->image_mob))
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title-desc text-muted">{{ __('admin.field_current_image_mob') }}</p>
                            <div class="live-preview">
                                <div>
                                    <img src="{{ $item->image_mob }}" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            @endif
            @if (!empty($item->image))
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title-desc text-muted">{{ __('admin.field_current_image') }}</p>
                            <div class="live-preview">
                                <div>
                                    <img src="{{ $item->image }}" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.stocks.update', $item->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row gy-4">

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_title') }} *</label>
                                        <input type="text" value="{{ $item->title }}" class="form-control"
                                            id="valueInput" name="title"
                                            placeholder="{{ __('admin.placeholder_text') }}">
                                    </div>

                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_h1_title') }}
                                            *</label>
                                        <input type="text" value="{{ $item->h1_title }}" class="form-control"
                                            id="valueInput" name="h1_title"
                                            placeholder="{{ __('admin.placeholder_text') }}">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">{{ __('admin.field_display_block') }} *</label>

                                    <div class="form-check mt-2">
                                        <input name="slider_active" class="form-check-input" type="radio" value="FALSE"
                                            id="defaultRadio1"
                                            @if ($item->slider_active == FALSE) checked="checked" @else @endif>
                                        <label class="form-check-label" for="defaultRadio1"> {{ __('admin.select_display_false') }} </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input name="slider_active" class="form-check-input" type="radio" value="TRUE"
                                            id="defaultRadio2"
                                            @if ($item->slider_active == TRUE) checked="checked" @else @endif>
                                        <label class="form-check-label" for="defaultRadio2"> {{ __('admin.select_display_true') }} </label>
                                    </div>
                                </div>
                                <div>
                                    <label for="exampleInputdate" class="form-label">{{ __('admin.due_time') }}</label>
                                    <input type="date" class="form-control" name="due_time" value="{{ $item->due_time }}" id="exampleInputdate">
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="formFile" class="form-label">{{ __('admin.field_image_mob') }}</label>
                                        <input class="form-control" type="file" id="formFile" name="image_mob">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">

                                    <div>
                                        <label for="formFile" class="form-label">{{ __('admin.field_image') }}</label>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_content') }}</label>
                                    <textarea class="form-control" name="content"
                                        placeholder="{{ __('admin.placeholder_text') }}" style="height: 234px;">{!! $item->content !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description_header') }}</label>
                                    <textarea class="form-control" name="description_header"
                                        placeholder="{{ __('admin.placeholder_text') }}" style="height: 234px;">{!! $item->description_header !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description') }}</label>
                                    <textarea id="editor" class="form-control" name="description"
                                        placeholder="{{ __('admin.placeholder_text') }}" style="height: 234px;">{!! $item->description !!}</textarea>
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
