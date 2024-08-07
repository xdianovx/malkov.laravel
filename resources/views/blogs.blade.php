
@extends('layouts.main')

@section('content')
    <section class="section hero section-news">
        <div class="container">
            <h1 class="h1 uppercase">{{ $blog_page->h1_title }}</h1>
            <div class="section-news__description">
                {!! $blog_page->description_header !!}
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="news-section ">
        <div class="container">
            <div class="news-page-section__items">
                @foreach ($blogs as $item)
                    <x-blogs-item :data="$item"/>
                @endforeach
            </div>
            {{-- <x-ui.breadcrumbs class="news-section__breadcrumbs"/> --}}
        </div>
    </section>


    {{--    <x-sections.doctors /> --}}
    <x-sections.callback  :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions"/>

    <section class="section"></section>
@endsection()
