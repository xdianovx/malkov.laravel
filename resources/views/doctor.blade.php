
@extends('layouts.main')

@section('content')

    <section class="section hero section-doctor">
        <div class="container">
            <div class="section-doctor__wrap">

                <img class="section-doctor__image" src="{{ asset('storage') . '/' . $specialist->image }}" alt="">
                <div class="section-doctor__info">
                    <h1 class="h1 uppercase">
                        {!! $specialist->h1_title !!}
                    </h1>
                    <h3><strong>Образование и курсы</strong></h3>
                    <div class="section-doctor__info_content">
                        @foreach (json_decode($specialist->education, true) as $education)
                        <p>{{ $education }}</p>
                         @endforeach
                    </div>

                    <x-ui.button-arrow class="accent section-doctor-btn" text="Записаться к врачу"/>
                </div>
            </div>

            <div class="section-doctor__info_content-mob">

            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>

    <section class="section doctor-exp-section">
        <div class="container">
            {!! $specialist->description !!}
        </div>
    </section>
    <section class="section services-section">
        <div class="container">
            <h2 class="h2">Оказываемые услуги</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($specialist->services as $service)
                    <div class="service-item service-item--image">
                        <div class="service-item__image">
                            <img src="{{ asset('storage') . '/' . $service->image }}" alt="">
                        </div>
                        <div class="service-item__body">
                            <h3 class="service-item__title">{!! $service->title !!}</h3>
                            <div class="service-item__price">{!! $service->price !!}</div>
                            <p class="service-item__text">{!! $service->description !!}</p>
                            <a href="{{ route('service-single', $service->slug) }}" class="service-item__link">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="h2">Дипломы и сертификаты</h2>
            <div class="diplomas-items">
                @foreach ($specialist->documents as $document)
                    <div class="diplom-item">
                        <div class="diplom-item__image">
                            <img src="{{ asset('storage') . '/' . $document->image }}" alt="">
                        </div>
                        <h3 class="diplom-item__title">{!! $document->title !!}</h3>
                        <p class="diplom-item__text">{!! $document->description !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if ($block_specialists->is_active != null)
    <x-sections.doctors :block="$block_specialists" :data="$specialists"/>
    @endif
    @if ($block_callback_form->is_active != null)
    <x-sections.callback :block="$block_callback_form"/>
    @endif
    @if ($block_reviews->is_active != null)
        <x-sections.reviews-external :block="$block_reviews" :data="$reviews" />
    @endif

    <section class="section"></section>
@endsection()
