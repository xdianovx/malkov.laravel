@extends('layouts.main')

@section('content')
    <section class="section hero section-single-news">
        <div class="container">
            <div class="mb-4 justify-start max-[768px]:flex max-[768px]:justify-center max-[768px]:mb-8">
                {{ Breadcrumbs::render('blogs-single', $blog->slug) }}
            </div>

            <div class="single-news__wrap">
                <h1 class="h1 uppercase">
                    {!! $blog->h1_title !!}
                </h1>

                <div class="rounded-[8px] overflow-hidden max-[768px]:rounded-[4px]">
                    <img src="{{ asset('storage') . '/' . $blog->image }}" alt=" {!! $blog->h1_title !!}">
                </div>

                <div class="single-news__text">
                    {!! $blog->description_header !!}
                </div>

                <x-ui.button-arrow class="accent" data-micromodal-trigger="modal-callback" text="Бесплатная консультация" />

                <div class="divider horizontal gray"></div>
            </div>
        </div>
    </section>

    <section class="section section-content">
        <div class="container">
            <div class="content">
                {!! $blog->description !!}
            </div>
        </div>
    </section>
    @if ($block_callback_form->is_active != 'off')
    <x-sections.callback :block="$block_callback_form" />
    @endif
    @if ($block_articles_news->is_active != 'off')
    <x-sections.blogs :block="$block_articles_news" :data="$blogs" />
    @endif
    <section class="section"></section>
@endsection()
