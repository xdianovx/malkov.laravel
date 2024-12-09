@extends('layouts.main')

@section('content')
    <section class="section hero section-single-news">
        <div class="container">
            <div class="single-news__wrap">

                {{ Breadcrumbs::render('news-single', $item) }}
                <h1 class="h1 uppercase">
                    {!! $item->h1_title !!}
                </h1>


                <div class="single-news__text">
                    {!! $item->description_header !!}
                </div>

                <div class="flex items-center gap-4">
                    <p class="text-gray-600 leading-[100%] mt-[1px]">
                        {{ (new DateTime($item->created_at))->format('d.m.Y') }}
                    </p>


                    <div class="flex items-center gap-1 leading-[100%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none" stroke="#1B1B1B">
                            <path
                                d="M10 5.83333V10H14.1667M10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10C17.5 14.1421 14.1421 17.5 10 17.5Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="mt-[0px]">{{ $item->reading_time }}</p>
                    </div>

                </div>
                <x-ui.button-arrow class="accent" text="Бесплатная консультация" data-micromodal-trigger='modal-callback' />

                <div class="divider horizontal gray"></div>
            </div>
        </div>
    </section>

    <section class="section section-content">
        <div class="container">
            <div class="content">
                {!! $item->description !!}
            </div>
        </div>
    </section>

    <x-sections.callback :block="$block_callback_form" />
    <x-sections.news :block="$block_articles_news" :data="$news" />

    <section class="section"></section>
@endsection()
