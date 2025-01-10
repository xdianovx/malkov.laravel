@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-header align-items-center d-flex card-title">
                            <h4 class="mb-0 flex-grow-1 text-white">{{ __('admin.block_card_title') }}:
                                {{ $item->title }}</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                              <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                              aria-expanded="false" class="btn btn-secondary mb-3">
                             Действия <i class="ri-more-2-fill fs-14"></i>
                          </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1"
                                    style="">
                                    <li>
                                        <a type="button" class="dropdown-item" href="{{ route('admin.blocks.index') }}">
                                            <i class="ri-arrow-left-line align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_back') }}</a>
                                    </li>
                                    @if ($item->id == 1)
                                        <li>
                                            <a type="button" class="dropdown-item"
                                                href="{{ route('admin.blocks.questions.create', $item->id) }}">
                                                <i class="ri-share-line align-bottom me-2 text-muted"></i>
                                                {{ __('admin.btn_create_question') }}</a>
                                        </li>
                                    @endif
                                    @if ($item->id == 8)
                                        <li>
                                            <a type="button" class="dropdown-item"
                                                href="{{ route('admin.blocks.modern_offices.create', $item->id) }}">
                                                <i class="ri-share-line align-bottom me-2 text-muted"></i>
                                                {{ __('admin.btn_create_modern_office') }}</a>
                                        </li>
                                    @endif
                                    <li><a href="{{ route('admin.blocks.edit', $item->id) }}"
                                            class="dropdown-item edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_edit') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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

            <div class="card">
                <div class="card-body">
                    <h5 class="card-header align-items-center d-flex">{{ __('admin.block_card_info') }}</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_status') }}:</th>
                                    <td class="text-muted">
                                        @if($item->is_active == 'on')
                                            <span class="text-success">{{ __('admin.active') }}</span>
                                        @else
                                            <span class="text-danger">{{ __('admin.inactive') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Id:</th>
                                    <td class="text-muted">{{ $item->id }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_h1_title') }}:</th>
                                    <td class="text-muted">{!! $item->title !!}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_updated') }}:</th>
                                    <td class="text-muted">{{ $item->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>

    @if ($item->questions->count() > 0 && $item->id == 1)
        <div class="card">
            <h5 class="card-header">{{ __('admin.list_questions') }}</h5>
            <div class="card-body">
                <div class="demo-inline-spacing">
                    @if (session('status') === 'question-updated')
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ __('admin.alert_updated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'question-created')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ __('admin.alert_created') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'question-deleted')
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ __('admin.alert_deleted') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                        <th scope="col">{{ __('admin.field_question') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_updated') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->questions as $question)
                                        <tr>
                                            <td>{{ $question->id }}</td>
                                            <td><a
                                                    href="{{ route('admin.blocks.questions.show', [$item->id, $question->id]) }}">{{ $question->title }}</a>
                                            </td>
                                            <td>{{ $question->updated_at->diffForHumans() }}</td>
                                            <td>

                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li><a href="{{ route('admin.blocks.questions.show', [$item->id, $question->id]) }}"
                                                                class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_show') }}</a></li>
                                                        <li><a href="{{ route('admin.blocks.questions.edit', [$item->id, $question->id]) }}"
                                                                class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_edit') }}</a></li>
                                                        <li>
                                                            <button type="submit" class="dropdown-item text-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollablePageNum{{ $question->id }}"><i
                                                                    class="bx bx-trash me-1 text-danger"
                                                                    role="button"></i>
                                                                {{ __('admin.btn_delete') }}</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modalScrollablePageNum{{ $question->id }}"
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
                                                            action="{{ route('admin.blocks.questions.destroy', [$item->id, $question->id]) }}"
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
                                    @empty
                                        <tr>
                                            <td class="text-danger">{{ __('admin.notification_no_entries') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($item->modern_offices->count() > 0 && $item->id == 8)
        <div class="card">
            <h5 class="card-header">{{ __('admin.list_modern_offices') }}</h5>
            <div class="card-body">
                <div class="demo-inline-spacing">
                    @if (session('status') === 'modern_office-updated')
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ __('admin.alert_updated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'modern_office-created')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ __('admin.alert_created') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'modern_office-deleted')
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
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_updated') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->modern_offices as $modern_office)
                                        <tr>
                                            <td>{{ $modern_office->id }}</td>
                                            <td><a
                                                    href="{{ route('admin.blocks.modern_offices.show', [$item->id, $modern_office->id]) }}">{{ $modern_office->title }}</a>
                                            </td>
                                            <td>{{ $modern_office->updated_at->diffForHumans() }}</td>
                                            <td>

                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li><a href="{{ route('admin.blocks.modern_offices.show', [$item->id, $modern_office->id]) }}"
                                                                class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_show') }}</a></li>
                                                        <li><a href="{{ route('admin.blocks.modern_offices.edit', [$item->id, $modern_office->id]) }}"
                                                                class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_edit') }}</a></li>
                                                        <li>
                                                            <button type="submit" class="dropdown-item text-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollablePageNum{{ $modern_office->id }}"><i
                                                                    class="bx bx-trash me-1 text-danger"
                                                                    role="button"></i>
                                                                {{ __('admin.btn_delete') }}</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modalScrollablePageNum{{ $modern_office->id }}"
                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalScrollableTitle">
                                                            {{ __('admin.modern_office_delete') }}</h5>
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
                                                            action="{{ route('admin.blocks.modern_offices.destroy', [$item->id, $modern_office->id]) }}"
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
                                    @empty
                                        <tr>
                                            <td class="text-danger">{{ __('admin.notification_no_entries') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
