@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">{{__('admin.edit_specialization_card_title')}} {{ $item->title }}</h4>
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
                        <form action="{{ route('admin.specializations.update', $item->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">{{__('admin.field_title')}}*</label>
                                        <input type="text" value="{{ $item->title }}" class="form-control"
                                            id="valueInput" name="title" placeholder="{{__('admin.placeholder_text')}}">
                                            <input type="hidden"name="old_title" value="{{ $item->title }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('admin.field_description_header') }}</label>
                                    <textarea class="form-control" name="description_header"
                                        placeholder="{{ __('admin.placeholder_text') }}" style="height: 234px;">{!! $item->description_header !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{__('admin.field_description')}}</label>
                                    <textarea id="editor" class="form-control" name="description" placeholder="{{__('admin.placeholder_text')}}" style="height: 234px;">{!! $item->description !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{__('admin.field_description_footer')}}</label>
                                    <textarea class="form-control ckeditor-classic" name="description_footer" placeholder="{{__('admin.placeholder_text')}}"
                                        style="height: 234px;">{!! $item->description_footer !!}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-5">{{__('admin.btn_save')}}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@include('admin.upload_script')
@endsection
