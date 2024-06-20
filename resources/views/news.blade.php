
@extends('layouts.main')

@section('content')
    <section class="section hero section-news">
        <div class="container">
            <h1 class="h1 uppercase">{{ $news_page->h1_title }}</h1>
            <div class="section-news__description">
                {{ $news_page->description }}
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="news-section ">
        <div class="container">
            <div class="news-page-section__items">
                @foreach ($news as $item)
                    <x-news-item :data="$item"/>
                @endforeach
            </div>
            {{-- <x-ui.breadcrumbs class="news-section__breadcrumbs"/> --}}
        </div>
    </section>


    {{--    <x-sections.doctors /> --}}
    <x-sections.callback />
    <x-sections.faq />



    <section class="section"></section>
@endsection()
