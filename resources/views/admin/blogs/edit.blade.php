@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header align-items-center d-flex card-title">
                    <h4 class="mb-0 flex-grow-1 text-white">{{ $item->title }}</h4>
                    <a href="{{ route('admin.blogs.show', $item->slug) }}" class="btn btn-secondary mb-3">
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
                @if (!empty($item->image_mob))
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title-desc text-muted">{{ __('admin.field_current_image_mob') }}</p>
                                <div class="live-preview">
                                    <div>
                                        <img src="{{ asset('storage') . '/' . $item->image_mob }}" class="img-fluid"
                                            alt="Responsive image">
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
                                        <img src="{{ asset('storage') . '/' . $item->image }}" class="img-fluid"
                                            alt="Responsive image">
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
                        <form action="{{ route('admin.blogs.update', $item->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row gy-4">

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_title') }} *</label>
                                        <input type="text" value="{{ $item->title }}" class="form-control"
                                            id="valueInput" name="title" placeholder="{{ __('admin.placeholder_text') }}">
                                        <input type="hidden"name="old_title" value="{{ $item->title }}">
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
                                    <textarea class="form-control" name="content" placeholder="{{ __('admin.placeholder_text') }}" style="height: 234px;">{!! $item->content !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description_header') }}</label>
                                    <textarea class="form-control" name="description_header" placeholder="{{ __('admin.placeholder_text') }}"
                                        style="height: 234px;">{!! $item->description_header !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description') }}</label>
                                    <textarea id="summernote" class="form-control" name="description" placeholder="{{ __('admin.placeholder_text') }}"
                                        style="height: 234px;">{!! $item->description !!}</textarea>
                                </div>


                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <p class="card-title-desc text-muted">{{__('admin.field_seo')}}</p>
                                        <div class="row gy-4">
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_meta_title')}}</label>
                                                <input type="text" value="{{ $item->meta_title }}" class="form-control"
                                                    id="valueInput" name="meta_title" placeholder="{{__('admin.placeholder_text')}}">
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_meta_description')}}</label>
                                                <textarea class="form-control" name="meta_description" rows="3">{{ $item->meta_description }}</textarea>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_meta_keywords')}}</label>
                                                <textarea class="form-control" name="meta_keywords" rows="3">{{ $item->meta_keywords }}</textarea>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_og_url')}}</label>
                                                <input type="text" value="{{ $item->og_url }}" class="form-control"
                                                    id="valueInput" name="og_url" placeholder="{{__('admin.placeholder_text')}}">
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_og_title')}}</label>
                                                <input type="text" value="{{ $item->og_title }}" class="form-control"
                                                    id="valueInput" name="og_title" placeholder="{{__('admin.placeholder_text')}}">
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <label for="valueInput" class="form-label">{{__('admin.field_og_description')}}</label>
                                                <textarea class="form-control" name="og_description" rows="3">{{ $item->og_description }}</textarea>
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
