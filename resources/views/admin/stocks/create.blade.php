@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header align-items-center d-flex card-title">
                    <h4 class="mb-0 flex-grow-1 text-white">{{ __('admin.new_stock_card_title') }}</h4>
                    <a href="{{ route('admin.stocks.index') }}" class="btn btn-secondary mb-3">
                      <i class="ri-arrow-left-fill me-1 align-bottom"></i>
                      {{ __('admin.btn_back') }}
                  </a>
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
          </div>

            <div class="card">
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.stocks.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_title') }} *</label>
                                        <input type="text" value="{{ old('title') }}" class="form-control"
                                            id="valueInput" name="title" placeholder="{{ __('admin.placeholder_text') }}">
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_h1_title') }}
                                            *</label>
                                        <input type="text" value="{{ old('h1_title') }}" class="form-control"
                                            id="valueInput" name="h1_title"
                                            placeholder="{{ __('admin.placeholder_text') }}">
                                    </div>

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">{{ __('admin.field_display_block') }}
                                        *</label>

                                    <div class="form-check mt-2">
                                        <input name="slider_active" class="form-check-input" type="radio" value="FALSE"
                                            id="defaultRadio1"
                                            @if (old('slider_active') == false) checked="checked" @else @endif>
                                        <label class="form-check-label" for="defaultRadio1">
                                            {{ __('admin.select_display_false') }} </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input name="slider_active" class="form-check-input" type="radio" value="TRUE"
                                            id="defaultRadio2"
                                            @if (old('slider_active') == true) checked="checked" @else @endif>
                                        <label class="form-check-label" for="defaultRadio2">
                                            {{ __('admin.select_display_true') }} </label>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-md-6">
                                    <label for="exampleInputdate" class="form-label">{{ __('admin.due_time') }}</label>
                                    <input type="date" class="form-control" name="due_time"
                                        value="{{ old('due_time') }}" id="exampleInputdate">
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
                                    <textarea class="form-control" name="content" placeholder="{{ __('admin.placeholder_text') }}" \
                                    style="height: 234px;">{{ old('content') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description_header') }}</label>
                                    <textarea class="form-control" name="description_header" placeholder="{{ __('admin.placeholder_text') }}"
                                        style="height: 234px;">{{ old('description_header') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description') }}</label>
                                    <textarea id="editor" class="form-control" name="description" placeholder="{{ __('admin.placeholder_text') }}"
                                        style="height: 234px;">{{ old('description') }}</textarea>
                                </div>
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <p class="card-title-desc text-muted">{{__('admin.field_seo')}}</p>
                                        <div class="row gy-4">
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_meta_title')}}</label>
                                                <input type="text" value="{{ old('meta_title') }}" class="form-control"
                                                    id="valueInput" name="meta_title" placeholder="{{__('admin.placeholder_text')}}">
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_meta_description')}}</label>
                                                <textarea class="form-control" name="meta_description" rows="3">{{ old('meta_description') }}</textarea>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_meta_keywords')}}</label>
                                                <textarea class="form-control" name="meta_keywords" rows="3">{{ old('meta_keywords') }}</textarea>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_og_url')}}</label>
                                                <input type="text" value="{{ old('og_url') }}" class="form-control"
                                                    id="valueInput" name="og_url" placeholder="{{__('admin.placeholder_text')}}">
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_og_title')}}</label>
                                                <input type="text" value="{{ old('og_title') }}" class="form-control"
                                                    id="valueInput" name="og_title" placeholder="{{__('admin.placeholder_text')}}">
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_og_description')}}</label>
                                                <textarea class="form-control" name="og_description" rows="3">{{ old('og_description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
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
