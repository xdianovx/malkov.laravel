@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header align-items-center d-flex card-title">
                    <h4 class="mb-0 flex-grow-1 text-white">{{ __('admin.edit_modern_office_card_title') }}:
                        {{ $item->title }}</h4>
                        <a href="{{ route('admin.blocks.show', $block->id) }}" class="btn btn-secondary mb-3">
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

            @if (!empty($files['image_mob']))
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title-desc text-muted">{{ __('admin.field_current_image_mob') }}</p>
                            <div class="live-preview">
                                <div>
                                    <img src="{{ $files['image_mob'] }}" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>
                @else
            @endif
            @if (!empty($files['image']))
                <div class="card">
                    <div class="card-body">
                        <p class="card-title-desc text-muted">{{ __('admin.field_current_image') }}</p>
                        <div class="live-preview">
                            <div>
                                <img src="{{ $files['image'] }}" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            @else
            @endif
            @if (!empty($files['video_mob']))
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">{{ __('admin.field_current_video_mob') }}:</h5>
                        <div class="d-flex mb-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $files['video_mob'] }}"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            @endif
            @if (!empty($files['video']))
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">{{ __('admin.field_current_video') }}:</h5>
                        <div class="d-flex mb-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $files['video'] }}" allowfullscreen></iframe>
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
                    <form action="{{ route('admin.blocks.modern_offices.update', [$block->id, $item->id]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row gy-4">
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="valueInput" class="form-label">{{ __('admin.field_title') }} *</label>
                                    <input type="text" value="{{ $item->title }}" class="form-control" id="valueInput"
                                        name="title" placeholder="{{ __('admin.placeholder_text') }}">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="formFile" class="form-label">{{ __('admin.field_file_mob') }}</label>
                                    <input class="form-control" type="file" id="formFile" name="file_mob">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6">

                                <div>
                                    <label for="formFile" class="form-label">{{ __('admin.field_file') }}</label>
                                    <input class="form-control" type="file" id="formFile" name="file">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="valueInput" class="form-label">{{ __('admin.field_description') }}
                                        *</label>
                                    <input type="text" value="{{ $item->description }}" class="form-control"
                                        id="valueInput" name="description"
                                        placeholder="{{ __('admin.placeholder_text') }}">
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
@endsection
