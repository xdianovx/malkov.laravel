@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ __('admin.new_show_reel_card_title') }}</h4>
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
                        <form action="{{ route('admin.pages.show_reels.store', $page->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_title')}} *</label>
                                        <input type="text" value="{{ old('title') }}" class="form-control"
                                            id="valueInput" name="title" placeholder="{{__('admin.placeholder_text')}}">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">{{ __('admin.field_is_cover') }} *</label>

                                    <div class="form-check mt-2">
                                        <input name="is_cover" class="form-check-input" type="radio" value="FALSE"
                                            id="defaultRadio1"
                                            @if (old('is_cover') == 'FALSE') checked="checked" @else @endif>
                                        <label class="form-check-label" for="defaultRadio1">
                                            {{ __('admin.select_display_false') }} </label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input name="is_cover" class="form-check-input" type="radio" value="TRUE"
                                            id="defaultRadio2"
                                            @if (old('is_cover') == 'TRUE') checked="checked" @else @endif>
                                        <label class="form-check-label" for="defaultRadio2">
                                            {{ __('admin.select_display_true') }} </label>
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