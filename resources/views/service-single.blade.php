@extends('layouts.main')

@section('content')
    <section class="section hero service-single-hero">
        <div class="container">
            <div class="service-single-hero__wrap">
                <h1 class="h1 uppercase">{!! $service->title !!}</h1>
                <div class="service-single-hero__content">{!! $service->description_header !!}</div>
                <x-ui.button-arrow text="Получить консультацию" data-micromodal-trigger="modal-callback"
                    class="service-single-hero__btn --accent" />
                <div class="divider horizontal gray"></div>
            </div>
    </section>

    <section class="services-page-section">
        <div class="container">
            <div class="content">
                {!! $service->description !!}
            </div>
        </div>
    </section>

    <section class="section services-page-section">
        <div class="container">
            <div class="service-content__wrap">
                <div class="service-items">
                    @forelse($service->children as $children_service)
                        <a class="service-item" href="{{ route('service-single', $children_service->slug) }}">
                            <h3 class="service-item__title">{{ $children_service->title }}</h3>
                            <p class="service-item__text">{!! $children_service->description !!}</p>
                        </a>
                    @empty
                        <p>{{ __('admin.notification_no_entries') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>



    {{--    <section class="section price-section"> --}}
    {{--        <div class="container"> --}}
    {{--            <div class="price-section__wrap"> --}}
    {{--                --}}{{-- Item --}}
    {{--                @forelse($service->prices as $item) --}}
    {{--                    <div class="price-section__item"> --}}

    {{--                        <div class="price-section__item_top"> --}}
    {{--                            <h3>{!! $item->title !!}</h3> --}}
    {{--                            <div>{!! $item->price !!}</div> --}}
    {{--                        </div> --}}

    {{--                        <div class="price-section__item_bottom"> --}}
    {{--                            <p>{!! $item->description !!}</p> --}}

    {{--                            @isset($item->link_service) --}}
    {{--                                <a href="{{ $item->link_service }}">Подробнее</a> --}}
    {{--                            @endisset --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                @endforeach --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </section> --}}





    <x-sections.services :block="$block_services" :data="$services" />
    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()
