@extends('layouts.main')

@section('content')
    <section class="section hero section-single-news">
        <div class="container">
            <div class="single-news__wrap">

                <h1 class="h1 uppercase">
                    {!! $item->h1_title !!}
                </h1>

                <div class="single-news__text">
                    {!! $item->description_header !!}
                </div>

                <x-ui.button-arrow class="accent" text="Бесплатная консультация" />

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
