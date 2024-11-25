
@extends('layouts.main')

@section('content')

    <section class="section hero section-single-news">
        <div class="container">
            <div class="single-news__wrap">

                <h1 class="h1 uppercase">
                   {!! $blog->h1_title !!}
                </h1>

                <div class="single-news__text">
                    {!! $blog->description_header !!}
                </div>

                <x-ui.button-arrow class="accent" text="Бесплатная консультация"/>

                <div class="divider horizontal gray"></div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="content">
                {!! $blog->description !!}
            </div>
        </div>
    </section>

    <x-sections.callback  :block="$block_callback_form" />
    <x-sections.blogs :block="$block_articles_news" :data="$blogs" />

    <section class="section"></section>
@endsection()
