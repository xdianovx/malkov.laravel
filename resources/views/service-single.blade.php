

@extends('layouts.main')

@section('content')
    <section class="section hero service-single-hero">
        <div class="container">
            <div class="service-single-hero__wrap">
                <h1 class="h1 uppercase">{!! $service->title !!}</h1>
                <div class="service-single-hero__content">{!! $service->description_header !!}</div>
                <x-ui.button-arrow text="Получить консультацию" href='/novosti' class="service-single-hero__btn --accent" />
                <div class="divider horizontal gray"></div>
            </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="service-content__wrap">
                <div class="">Тут содержание</div>
                <div class="content">
                    {!! $service->description !!}
                </div>
            </div>
        </div>
    </section>



    <section class="section price-section">
        <div class="container">
            <div class="price-section__wrap">
                {{-- Item --}}
                @forelse($service->prices as $item)
                <div class="price-section__item">

                    <div class="price-section__item_top">
                        <h3>{!! $item->title !!}</h3>
                        <div>{!! $item->price !!}</div>
                    </div>

                    <div class="price-section__item_bottom">
                        <p>{!! $item->description !!}</p>

                        @isset($item->link_service)
                        <a href="{{ $item->link_service }}">Подробнее</a>
                        @endisset
                    </div>
                </div>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse
            </div>
        </div>
    </section>


    <x-sections.services :data="$services"/>
    <x-sections.callback />
    <x-sections.faq />
    <section class="section"></section>
@endsection()
