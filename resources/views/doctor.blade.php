@extends('layouts.main')

@section('content')
    <section class="section hero section-doctor">
        <div class="container">
            <div class="mb-4  justify-start hidden max-[768px]:flex">
                {{ Breadcrumbs::render('specialist', $specialist->slug) }}</div>
            <div class="section-doctor__wrap">

                <img class="section-doctor__image" src="{{ asset('storage') . '/' . $specialist->image }}" alt="">
                <div class="section-doctor__info">
                    <div class="mb-4 flex text-left items-start justify-start max-[768px]:hidden">
                        {{ Breadcrumbs::render('specialist', $specialist->slug) }}</div>

                    <h1 class="h1 uppercase">
                        {!! $specialist->h1_title !!}
                    </h1>

                    <div class="flex flex-wrap mt-2 gap-1 max-[1200px]:gap-[2px] max-[1200px]:text-[14px]">
                        @php
                            $specializations = json_decode($specialist->specializations, true);
                            $limitedSpecializations = array_slice($specializations, 0, 2);
                        @endphp

                        @foreach ($specializations as $key => $specialization)
                            <p class="text-gold leading-[120%]">
                                <span> {{ $specialization }}@if ($key < count($specializations) - 1)
                                </span>,
                            </p>
                        @endif
                        @endforeach
                    </div>
                    <div class="section-doctor__info_content">
                        <p>{!! $specialist->meta_description !!}</p>
                    </div>

                    {{-- <hr class="mt-8"> --}}

                    <x-ui.button-arrow class="accent section-doctor-btn" data-micromodal-trigger="modal-callback"
                        text="Записаться к врачу" />
                </div>
            </div>

            <div class="section-doctor__info_content-mob">

            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>

    <section class="section doctor-exp-section">
        <div class="container">
            <h2 class="h2 mb-5">О специалисте</h2>
            <div class="content ">
                {!! $specialist->description !!}
            </div>
        </div>
    </section>

    <section class="section doctor-exp-section">
        <div class="container">
            <h2 class="h2 mb-5">Образование и курсы</h2>
            <div class="content ">
                <ul>
                    @foreach (json_decode($specialist->education, true) as $education)
                        <li>{{ $education }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="section doc-services-section">
        <div class="container">
            <h2 class="h2">Оказываемые услуги</h2>
            <div class="mt-5 flex flex-col gap-2">
                @foreach ($specialist->services as $service)
                    <a href="{{ route('service-single', $service->slug) }}" class="flex justify-between">
                        <h3 class="shrink-0 font-bold">{!! $service->title !!}</h3>
                        <div class="border-b border-gray-300 border-dashed w-full mb-[6px] mx-4 max-[1200px]:hidden">
                        </div>
                        <p class="service-item__link shrink-0 text-gold">от
                            {{ number_format((float) $service->price, 0, '', ' ') }}
                            руб.</p>

                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section doc-diplomas-section">
        <div class="container">
            <h2 class="h2">Дипломы и сертификаты ({{ $specialist->documents->count() }})</h2>


            <div class="swiper doctor-docs-slider diplomas-items">
                <div class="swiper-wrapper">
                    @foreach ($specialist->documents as $document)
                        <div class="swiper-slide">
                            <div class="diplom-item flex flex-col">
                                <a href="{{ asset('storage') . '/' . $document->image }}" data-fancybox="gallery"
                                    data-caption="{!! $document->description !!}">
                                    <img src="{{ asset('storage') . '/' . $document->image }}" />
                                </a>

                                <h3 class="diplom-item__title">{!! $document->title !!}</h3>
                                <p class="diplom-item__text">{!! $document->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    @if ($block_reviews->is_active != null)
        <x-sections.reviews-doctor :block="$block_reviews" :data="$reviews" />
    @endif

    @if ($block_callback_form->is_active != null)
        <x-sections.callback :block="$block_callback_form" />
    @endif

    @if ($block_specialists->is_active != null)
        <x-sections.doctors :block="$block_specialists" :data="$specialists" />
    @endif
    <section class="section"></section>
@endsection()
