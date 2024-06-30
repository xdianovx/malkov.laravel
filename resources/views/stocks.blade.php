@extends('layouts.main')

@section('content')
    <section class="section hero section-stock">
        <div class="container">
            <h1 class="h1 uppercase">{!! $stock_page->h1_title !!}</h1>
            <p class="section-news__text">{!! $stock_page->description_header !!}</p>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="stock-items-sections section">
        <div class="container">
            <div class="stock-items-sections__items">
                @forelse($stocks as $item)
                    <div class="stock-item">
                        <h3 class="stock-item__title">{!! $item->title !!}</h3>
                        <p class="stock-item__text">{!! $item->content !!}</p>

                        <div class="stock-item__bottom">
                            <p>Действует до: {{ $item->due_time }}</p>
                            <a href="{{ route('stock-single', $item->slug) }}">Подробнее</a>
                        </div>
                    </div>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse
            </div>
        </div>
    </section>

    <x-sections.callback  :block="$block_callback_form" />
    <x-sections.services :block="$block_services" :data="$services" />
    <x-sections.faq :block="$block_questions"/>

    <section class="section"></section>
@endsection()
