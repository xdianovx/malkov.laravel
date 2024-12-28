@extends('layouts.main')

@section('content')
    <section class="section hero service-single-hero">
        <div class="container">
            <div class="service-single-hero__wrap">
                <h1 class="h1 uppercase">{!! $service->title !!}</h1>
                @if (!empty($service->image))
                    <div class="service-single-hero__image">
                        <img src="{{ asset('storage') . '/' . $service->image }}" class="img-fluid" alt="Responsive image">
                    </div>
                @else
                @endif
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
    @if ($service->prices->isNotEmpty())
        <section class="section section-services">
            <div class="container">
                <h2 class="h2 text-gold">Перечень услуг:</h2>
                <ul class="mt-10 flex flex-col gap-3">
                    @foreach ($service->prices->sortBy('id') as $price)
                        <div
                            class="flex justify-between max-[1200px]:flex-col max-[1200px]:gap-2 max-[1200px]:border-b max-[1200px]:pb-4 max-[550px]:gap-1 max-[550px]:pb-2">
                            <a class="shrink-0 hover:text-gold transition-colors duration-300 max-[1200px]:text-[18px] max-[1200px]:font-semibold"
                                href="{{ $price->link_service }}">
                                {{ $price->title }}
                            </a>

                            <div class="border-b border-gray-300 border-dashed w-full mb-[6px] mx-4 max-[1200px]:hidden">
                            </div>


                            <div class="shrink-0 grow max-[1200px]:ml-auto max-[1200px]:text-gold">от {{ $price->price }}
                                руб.</div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif


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
