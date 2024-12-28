@extends('layouts.main')

@section('content')
    <section class="section hero section-single-news">
        <div class="container">
            <div class="single-news__wrap">

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

    <section class="mt-[120px]">
        <div class="container">
            <div class="content">
                {!! $stock->description !!}
            </div>
        </div>
    </section>

    <x-sections.callback :block="$block_callback_form" />
    <x-sections.blogs :block="$block_articles_news" :data="$news" />

    <section class="section"></section>
@endsection()
