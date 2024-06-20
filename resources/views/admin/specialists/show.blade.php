@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h3 class="card-header align-items-center d-flex">{{ __('admin.specialist_card_title') }}:
                                {{ $item->title }}</h3>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="">
                                    <i class="ri-more-2-fill fs-14"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1"
                                    style="">
                                    <li>
                                        <a type="button" class="dropdown-item"
                                            href="{{ route('admin.specialists.index') }}">
                                            <i class="ri-arrow-left-line align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_back') }}</a>
                                    </li>
                                    <li>
                                        <a type="button" class="dropdown-item"
                                            href="{{ route('admin.specialists.documents.create', $item->slug) }}">
                                            <i class="ri-arrow-left-line align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_add_document') }}</a>
                                    </li>
                                    <li><a href="{{ route('admin.specialists.edit', $item->slug) }}"
                                            class="dropdown-item edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_edit') }}</a></li>
                                    <li>
                                        <button type="submit" class="dropdown-item text-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalScrollable{{ $item->slug }}"><i
                                                class="bx bx-trash me-1 text-danger" role="button"></i>
                                            {{ __('admin.btn_delete') }}</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if ($item->field_education)
                        <h5 class="text-muted">{{ __('admin.field_field_education') }}:</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">{!! $item->field_education !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                    @endif
                    @if ($item->additional_education)
                        <h5 class="text-muted">{{ __('admin.field_additional_education') }}:</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">{!! $item->additional_education !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                    @endif
                    @if ($item->description)
                        <h5 class="text-muted">{{ __('admin.field_description') }}:</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">{!! $item->description !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @else
                    @endif
                </div>
                <!--end card-body-->
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
                    <h5 class="card-header align-items-center d-flex">{{ __('admin.specialist_card_info') }}</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                @if ($item->slider_active == 'TRUE')
                                    <td>
                                        <span class="badge bg-warning">Выводится в слайдере</span>
                                    </td>
                                @endif
                                <tr>
                                    <th class="ps-0" scope="row">Id:</th>
                                    <td class="text-muted">{{ $item->id }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_title') }}:</th>
                                    <td class="text-muted">{{ $item->title }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_h1_title') }}:</th>
                                    <td class="text-muted">{{ $item->h1_title }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_slug') }}:</th>
                                    <td class="text-muted">{{ $item->slug }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_operations') }}:</th>
                                    <td class="text-muted">{{ $item->operations }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_experience') }}:</th>
                                    <td class="text-muted">{{ $item->experience }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_created') }}:</th>
                                    <td class="text-muted">{{ $item->created_at }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_updated') }}:</th>
                                    <td class="text-muted">{{ $item->updated_at }}</td>
                                </tr>

                                <div class="modal fade" id="modalScrollable{{ $item->slug }}" tabindex="-1"
                                    style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalScrollableTitle">
                                                    {{ __('admin.question_delete') }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p
                                                    class="mt-1 text-sm text-gray-600 dark:text-gray-400  alert alert-warning text-wrap">
                                                    {{ __('admin.notification_delete') }}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                    {{ __('admin.btn_close') }}
                                                </button>
                                                <form action="{{ route('admin.specialists.destroy', $item->slug) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#modalScrollableConfirm">{{ __('admin.btn_confirm') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </tbody>
                        </table>

                    </div>
                </div><!-- end card body -->
                @if ($item->specializations->count() > 0)
                    <div class="card-body">
                        <h5 class="card-title mb-4">{{ __('admin.field_specializations') }}:</h5>
                        <div class="d-flex flex-wrap gap-2 fs-16">
                            @foreach ($item->specializations as $specialization)
                                <a href="{{ route('admin.specializations.show', $specialization->slug) }}"
                                    class="badge bg-primary-subtle text-primary">{{ $specialization->title }}</a>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if ($item->services->count() > 0)
                    <div class="card-body">
                        <h5 class="card-title mb-4">{{ __('admin.field_services') }}:</h5>
                        <div class="d-flex flex-wrap gap-2 fs-16">
                            @foreach ($item->services as $service)
                                <a href="{{ route('admin.services.show', $service->slug) }}"
                                    class="badge bg-primary-subtle text-primary">{{ $service->title }}</a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if ($documents->count() > 0)
        <div class="card">
            <h5 class="card-header">{{ __('admin.list_documents') }}</h5>
            <div class="card-body">
                <div class="demo-inline-spacing">
                    @if (session('status') === 'document-updated')
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ __('admin.alert_updated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'document-created')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ __('admin.alert_created') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'document-deleted')
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ __('admin.alert_deleted') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 80px;">ID</th>
                                        <th scope="col">{{ __('admin.field_title') }}</th>
                                        <th scope="col">{{ __('admin.field_slug') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_updated') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                        <tr>
                                            <td>{{ $document->id }}</td>

                                            <td><a
                                                    href="{{ route('admin.specialists.documents.show', [$item->slug, $document->id]) }}">{{ $document->title }}</a>
                                            </td>
                                            <td>{{ $document->updated_at->diffForHumans() }}</td>
                                            <td>

                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li><a href="{{ route('admin.specialists.documents.show', [$item->slug, $document->id]) }}"
                                                                class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_show') }}</a></li>
                                                        <li><a href="{{ route('admin.specialists.documents.edit', [$item->slug, $document->id]) }}"
                                                                class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_edit') }}</a></li>
                                                        <li>
                                                            <button type="submit" class="dropdown-item text-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollable{{ $document->id }}"><i
                                                                    class="bx bx-trash me-1 text-danger"
                                                                    role="button"></i>
                                                                {{ __('admin.btn_delete') }}</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modalScrollable{{ $document->id }}"
                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalScrollableTitle">
                                                            {{ __('admin.question_delete') }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p
                                                            class="mt-1 text-sm text-gray-600 dark:text-gray-400  alert alert-warning text-wrap">
                                                            {{ __('admin.notification_delete') }}
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            {{ __('admin.btn_close') }}
                                                        </button>
                                                        <form
                                                            action="{{ route('admin.specialists.documents.destroy', [$item->slug, $document->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollableConfirm">{{ __('admin.btn_confirm') }}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if ( $documents->links()->paginator->hasPages() )
                            {{ $documents->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
