@extends('layouts.main')

@section('content')
    <section class="section hero section-single-news">
        <div class="container">
            <div class="single-news__wrap">
                <div class="">{{ Breadcrumbs::render('stock-single', $stock->slug) }}</div>

                <h1 class="h1 uppercase max-w-[1000px]">
                    {!! $stock->h1_title !!}
                </h1>

                <div class="single-news__text">
                    {!! $stock->description_header !!}
                </div>


                <x-ui.button-arrow class="accent" data-micromodal-trigger="modal-callback" text="Бесплатная консультация" />

                <div class="divider horizontal gray"></div>
            </div>


            <div class="">
                <img src="{{ asset('storage') . '/' . $stock->image }}" alt="">
            </div>
        </div>
    </section>

    <section class="mt-[20px]">
        <div class="container">
            <div class="content">
                {!! $stock->description !!}
            </div>
        </div>
    </section>
    @if ($block_callback_form->is_active != 'off')
    <x-sections.callback :block="$block_callback_form" />
    @endif
    @if ($block_articles_news->is_active != 'off')
    <x-sections.blogs :block="$block_articles_news" :data="$news" />
    @endif
    <section class="section"></section>
@endsection()
