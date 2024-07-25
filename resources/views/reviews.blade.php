@extends('layouts.main')

@section('content')
    <section class="section hero section-reviews">
        <div class="container">
            <h1 class="h1 uppercase">{{ $reviews_page->h1_title }}</h1>
            <div class="section-reviews__description">
                {!! $reviews_page->description_header !!}
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="reviews-section ">
        <div class="container">
            <div class="reviews-page-section__items">
                @foreach ($reviews as $item)
                    <div class="reviews-external__items">
                        <div class="services-items">
                            <h3 class="services-item__title">{{ $item->title }}</h3>
                            <p class="services-item__text">{{ $item->description }}</p>

                            <div class="services-item__price">
                                {{ $item->rating }}
                            </div>
                            <div class="services-item__price">
                                {{ $item->date }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <x-ui.breadcrumbs class="reviews-section__breadcrumbs"/> --}}
        </div>
    </section>


    {{--    <x-sections.doctors /> --}}
    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()
