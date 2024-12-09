@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h3 class="card-header align-items-center d-flex">{{ __('admin.question_card_title') }}:
                                {{ $item->title }} </h3>
                        </div>
                        <div class="flex-shrink-0 d-flex gap-3 align-items-center">
                            <a href="{{ route('admin.blocks.questions.edit', [$item->block->id, $item->id]) }}"
                                class="btn  edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                {{ __('admin.btn_edit') }}</a>


                            <a type="button" class="btn" href="{{ route('admin.blocks.show', $item->block->id) }}">
                                <i class="ri-arrow-left-line align-bottom me-2 text-muted"></i>
                                {{ __('admin.btn_back') }}</a>

                            <button type="submit" class="btn btn-danger " data-bs-toggle="modal"
                                data-bs-target="#modalScrollablePageNum{{ $item->id }}"><i class="bx bx-trash me-1"
                                    role="button"></i>
                                {{ __('admin.btn_delete') }}</button>


                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-header align-items-center d-flex">{{ __('admin.question_card_info') }}</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">Id:</th>
                                    <td class="text-muted">{{ $item->id }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_question') }}:</th>
                                    <td class="text-muted">{!! $item->title !!}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_answer') }}:</th>
                                    <td class="text-muted">{!! $item->description !!}</td>
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
    <div class="modal fade" id="modalScrollablePageNum{{ $item->id }}" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalScrollableTitle">
                        {{ __('admin.question_delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400  alert alert-warning text-wrap">
                        {{ __('admin.notification_delete') }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        {{ __('admin.btn_close') }}
                    </button>
                    <form action="{{ route('admin.blocks.questions.destroy', [$item->block->id, $item->id]) }}"
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
@endsection
