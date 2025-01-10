@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header align-items-center d-flex card-title">
                    <h4 class="mb-0 flex-grow-1 text-white">{{ __('admin.edit_review_card_title') }}
                        {{ $item->title }}</h4>
                        <a href="{{ route('admin.reviews.show', $item->id) }}" class="btn btn-secondary mb-3">
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
                        <form action="{{ route('admin.reviews.update', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_title')}} *</label>
                                        <input type="text" value="{{ $item->title }}" class="form-control"
                                            id="valueInput" name="title" placeholder="{{__('admin.placeholder_text')}}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="fs-13 fw-medium text-muted">{{__('admin.field_rating')}}</h5>
                                        <div class="input-step">
                                            <button type="button" class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">–</button>
                                            <input type="number"  name="rating" class="product-quantity"
                                             value="{{ $item->rating }}" min="0" max="5">
                                            <button type="button" class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                                {{ $item->is_active == 'on' ? 'checked' : '' }} role="switch">
                                            <label class="form-check-label"
                                                for="is_active">{{ __('admin.field_is_active') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                  <div>
                                      <label for="valueInput" class="form-label">{{__('admin.field_specialist')}}</label>
                                      <select class="form-select" name="specialist_id">
                                          <option value="" {{ $item->specialist_id == null ? 'selected' : '' }}>{{ __('admin.placeholder_select_specialist') }}</option>
                                          @foreach ($specialists as $specialist)
                                              <option value="{{ $specialist->id }}" {{ $item->specialist_id == $specialist->id ? 'selected' : '' }}>
                                                  {{ $specialist->title }}
                                              </option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                                <div class="col-xxl-6 col-md-6">
                                    <label for="exampleInputdate" class="form-label">{{ __('admin.field_date') }}</label>
                                    <input type="date" class="form-control" name="date"
                                        value="{{ $item->date }}" id="exampleInputdate">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{__('admin.field_description')}}</label>
                                    <textarea id="editor" class="form-control" name="description"
                                     placeholder="{{__('admin.placeholder_text')}}" style="height: 234px;">
                                     {{ $item->description }}</textarea>
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
