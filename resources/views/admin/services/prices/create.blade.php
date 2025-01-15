@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="card-header align-items-center d-flex card-title">
                    <h4 class="mb-0 flex-grow-1 text-white">{{__('admin.new_price_card_title')}}</h4>
                    <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-secondary mb-3">
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
                        <form action="{{ route('admin.services.prices.store', $service->slug ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_title')}} *</label>
                                        <input type="text" value="{{ old('title') }}" class="form-control"
                                            id="valueInput" name="title" placeholder="{{__('admin.placeholder_text')}}">
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_price')}} *</label>
                                        <input type="text" value="{{ old('price') }}" class="form-control"
                                            id="valueInput" name="price" placeholder="{{__('admin.placeholder_text')}}">
                                    </div>
                                </div>

                                {{-- <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_discounted_price')}}</label>
                                        <input type="text" value="{{ old('discounted_price') }}" class="form-control"
                                            id="valueInput" name="discounted_price" placeholder="{{__('admin.placeholder_text')}}">
                                    </div>
                                </div> --}}

                                <div class="col-xxl-6 col-md-6">
                                  <div>
                                      <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" id="is_the_price_from" name="is_the_price_from"
                                              {{ old('is_the_price_from') == 'on' ? 'checked' : '' }} role="switch">
                                          <label class="form-check-label"
                                              for="is_the_price_from">{{ __('admin.field_is_the_price_from') }}</label>
                                      </div>
                                  </div>
                              </div>

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_link_service')}}</label>
                                        <input type="text" value="{{ old('link_service') }}" class="form-control"
                                            id="valueInput" name="link_service" placeholder="{{__('admin.placeholder_text')}}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{__('admin.field_description')}}</label>
                                    <textarea id="editor" class="form-control" name="description" placeholder="{{__('admin.placeholder_text')}}" style="height: 234px;">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-5">{{__('admin.btn_save')}}</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

