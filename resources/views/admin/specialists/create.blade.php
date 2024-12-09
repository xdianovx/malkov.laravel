@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{ __('admin.new_specialist_card_title') }}</h4>
                </div>


            </div>specialist

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
                        <form action="{{ route('admin.specialists.store') }}" method="POST" enctype="multipart/form-data">
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
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_operations') }}
                                            *</label>
                                        <input type="text" value="{{ old('operations') }}" class="form-control"
                                            id="valueInput" name="operations"
                                            placeholder="{{ __('admin.placeholder_text') }}">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{ __('admin.field_experience') }}
                                            *</label>
                                        <input type="text" value="{{ old('experience') }}" class="form-control"
                                            id="valueInput" name="experience"
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

                                <div class="col-xxl-6 col-md-6">
                                    <div class="mb-3">
                                        <label for="valueInput" class="form-label">{{ __('admin.field_services') }}</label>
                                        @if (!count($services) == 0)
                                        <select id="valueInput" class="form-control" data-choices data-choices-removeItem name="services[]" multiple>
                                            @foreach ($services as $service)
                                            <option value="{{ $service->title }}" {{ collect(old('services'))->contains($service->title) ? 'selected' : '' }}>
                                                {{ $service->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @else
                                        <div class="text-danger">{{ __('admin.notification_no_entries_service') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="educationInput" class="form-label">{{ __('admin.field_education') }} *</label>
                                        <input type="text" value="{{ old('education.0') }}" class="form-control"
                                            id="educationInput" name="education[]" placeholder="{{ __('admin.placeholder_text') }}">
                                        <div id="educations">
                                            @if (old('education'))
                                                @foreach (old('education') as $key => $education)
                                                    @if ($key > 0)
                                                        <div class="mt-2">
                                                            <input type="text" value="{{ $education }}"
                                                                class="form-control" name="education[]"
                                                                placeholder="{{ __('admin.placeholder_text') }}">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        <button type="button" class="btn btn-outline-primary mt-2" id="add_education">
                                            <i class="mdi mdi-plus"></i>
                                        </button>
                                        <script>
                                            document.getElementById('add_education').addEventListener('click', function() {
                                                const educations = document.getElementById('educations');
                                                const newPhone = document.createElement('div');
                                                newPhone.classList.add('mt-2');
                                                newPhone.innerHTML = `<input type="text" class="form-control" name="education[]" placeholder="{{ __('admin.placeholder_text') }}">`;
                                                educations.appendChild(newPhone);
                                            });
                                        </script>
                                    </div>
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
