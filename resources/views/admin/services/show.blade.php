@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class=" align-items-center d-flex">{{ __('admin.service_card_title') }}:
                                {{ $item->title }}</h3>
                        </div>
                        <div class="flex-shrink-0">
                            {{-- Buttons --}}
                            {{-- <a type="button" class="btn btn-secondary" href="{{ route('admin.services.index') }}">
                                <i class="ri-arrow-left-line align-bottom me-2 "></i>
                                {{ __('admin.btn_back') }}
                            </a>

                            <a type="button" class="btn btn-secondary"
                                href="{{ route('admin.services.create_child', $item->slug) }}">
                                <i class="ri-share-line align-bottom me-2 "></i>
                                {{ __('admin.btn_create_subservice') }}
                            </a>

                            <a type="button" class="btn btn-secondary"
                                href="{{ route('admin.services.prices.create', $item->slug) }}">
                                <i class="ri-share-line align-bottom me-2 "></i>
                                {{ __('admin.btn_create_price') }}</a>

                            <a href="{{ route('admin.services.edit', $item->slug) }}" class="btn btn-secondary"><i
                                    class="ri-pencil-fill align-bottom me-2 "></i>
                                {{ __('admin.btn_edit') }}</a>

                            <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalScrollable{{ $item->slug }}"><i class="bx bx-trash me-1 "
                                    role="button"></i>
                                {{ __('admin.btn_delete') }}</button> --}}

                            <div class="dropdown">
                                <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="">
                                    <i class="ri-more-2-fill fs-14"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1"
                                    style="">

                                    <li>
                                        <a type="button" class="dropdown-item" href="{{ route('admin.services.index') }}">
                                            <i class="ri-arrow-left-line align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_back') }}</a>
                                    </li>
                                    <li>
                                        <a type="button" class="dropdown-item"
                                            href="{{ route('admin.services.create_child', $item->slug) }}">
                                            <i class="ri-share-line align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_create_subservice') }}</a>
                                    </li>
                                    <li>
                                        <a type="button" class="dropdown-item"
                                            href="{{ route('admin.services.prices.create', $item->slug) }}">
                                            <i class="ri-share-line align-bottom me-2 text-muted"></i>
                                            {{ __('admin.btn_create_price') }}</a>
                                    </li>
                                    <li><a href="{{ route('admin.services.edit', $item->slug) }}"
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
                    @if ($item->content)
                        <h5 class="text-muted">{{ __('admin.field_content') }}:</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">{!! $item->content !!}</td>
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
                    <h5 class="card-header align-items-center d-flex">{{ __('admin.service_card_info') }}</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">Id:</th>
                                    <td class="text-muted">{{ $item->id }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_title') }}:</th>
                                    <td class="text-muted">{{ $item->title }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_slug') }}:</th>
                                    <td class="text-muted">{{ $item->slug }}</td>
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
                                                <form action="{{ route('admin.services.destroy', $item->slug) }}"
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
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header align-items-center d-flex">{{ __('admin.page_card_seo') }}</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_meta_title') }}:</th>
                                    <td class="text-muted">{{ $item->meta_title }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_meta_description') }}:</th>
                                    <td class="text-muted">{{ $item->meta_description }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_meta_keywords') }}:</th>
                                    <td class="text-muted">{{ $item->meta_keywords }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_og_url') }}:</th>
                                    <td class="text-muted">{{ $item->og_url }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_og_title') }}:</th>
                                    <td class="text-muted">{{ $item->og_title }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">{{ __('admin.field_og_description') }}:</th>
                                    <td class="text-muted">{{ $item->og_description }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>
    @if ($prices->count() > 0)
        <div class="card">
            <h5 class="card-header">{{ __('admin.list_prices') }}</h5>
            <div class="card-body">
                <div class="demo-inline-spacing">
                    @if (session('status') === 'price-updated')
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ __('admin.alert_updated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'price-created')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ __('admin.alert_created') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'price-deleted')
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
                                        <th scope="col">{{ __('admin.field_price') }}</th>
                                        <th scope="col">{{ __('admin.field_discounted_price') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_updated') }}</th>
                                        <th scope="col" style="width: 150px;">{{ __('admin.field_action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item->prices as $price)
                                        <tr>
                                            <td>{{ $price->id }}</td>
                                            <td><a
                                                    href="{{ route('admin.services.prices.show', [$item->slug, $price->id]) }}">{{ $price->title }}</a>
                                            </td>
                                            <td>{{ $price->price }}</td>
                                            <td>{{ $price->discounted_price }}</td>
                                            <td>{{ $price->updated_at->diffForHumans() }}</td>
                                            <td>

                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li><a href="{{ route('admin.services.prices.show', [$item->slug, $price->id]) }}"
                                                                class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_show') }}</a></li>
                                                        <li><a href="{{ route('admin.services.prices.edit', [$item->slug, $price->id]) }}"
                                                                class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_edit') }}</a></li>
                                                        <li>
                                                            <button type="submit" class="dropdown-item text-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollable{{ $price->id }}"><i
                                                                    class="bx bx-trash me-1 text-danger"
                                                                    role="button"></i>
                                                                {{ __('admin.btn_delete') }}</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modalScrollable{{ $price->id }}" tabindex="-1"
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
                                                        <form
                                                            action="{{ route('admin.services.prices.destroy', [$item->slug, $price->id]) }}"
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
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($child_items->count() > 0)
        <div class="card">
            <h5 class="card-header">{{ __('admin.list_child_services') }}</h5>
            <div class="card-body">
                <div class="demo-inline-spacing">
                    @if (session('status') === 'service-child-updated')
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ __('admin.alert_updated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'service-child-created')
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ __('admin.alert_created') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status') === 'service-child-deleted')
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
                                    @foreach ($child_items as $child_item)
                                        <tr>
                                            <td>{{ $child_item->id }}</td>

                                            <td><a
                                                    href="{{ route('admin.services.show_child', [$item->slug, $child_item->slug]) }}">{{ $child_item->title }}</a>
                                            </td>
                                            <td>{{ $child_item->slug }}</td>
                                            <td>{{ $child_item->updated_at->diffForHumans() }}</td>
                                            <td>

                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li><a href="{{ route('admin.services.show_child', [$item->slug, $child_item->slug]) }}"
                                                                class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_show') }}</a></li>
                                                        <li><a href="{{ route('admin.services.edit_child', [$item->slug, $child_item->slug]) }}"
                                                                class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                {{ __('admin.btn_edit') }}</a></li>
                                                        <li>
                                                            <button type="submit" class="dropdown-item text-danger"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollable{{ $child_item->slug }}"><i
                                                                    class="bx bx-trash me-1 text-danger"
                                                                    role="button"></i>
                                                                {{ __('admin.btn_delete') }}</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modalScrollable{{ $child_item->slug }}"
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
                                                            action="{{ route('admin.services.destroy_child', [$item->slug, $child_item->slug]) }}"
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
                        @if ($child_items->links()->paginator->hasPages())
                            {{ $child_items->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
