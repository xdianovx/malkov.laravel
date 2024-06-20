

@extends('layouts.main')

@section('content')
    <section class="section hero">
        <div class="container">
            <div class="hero-services__top">
                <h1 class="h1 uppercase">
                    {!! $service_page->h1_title !!}
                </h1>

                <button data-micromodal-trigger="modal-callback" class="btn --accent ml-auto">Быстрая запись</button>
            </div>

            <div class="divider horizontal gray"></div>

            <div class="hero-services__texts">
                {!! $service_page->description !!}
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <h2 class="h2">Услуги</h2>


            <div class="section-services__filters">
                Поиск и тд
            </div>

            <div class="section-services__tags">
                тут теги
            </div>

            <div class="section-services__items">
                @forelse($services as $item)
                    <a href="{{ route('service-single', $item->slug) }}" class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('storage') . '/' . $item->image }}" alt="">
                        </div>

                        <h3 class="service-item__title">{{ $item->title }}</h3>

                        <p class="service-item__text">{!! $item->content !!}</p>

                        <div class="service-item__bottom">
                            @if(!$item->prices->isEmpty())
                            <div class="service-item__price">от {{$item->prices->min('price')}}</div>
                            @endif
                            <button class="service-item__btn" data-micromodal-trigger="modal-callback">Быстрая
                                запись</button>
                        </div>

                        <div class="divider horizontal gray"></div>
                    </a>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse

            </div>
        </div>
    </section>

    <x-sections.callback />
    <x-sections.faq />

    <section class="section">

    </section>
@endsection()
