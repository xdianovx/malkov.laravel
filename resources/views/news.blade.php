@php
    $data = [
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
    ];
@endphp

@extends('layouts.main')

@section('content')
    <section class="section hero section-news">
        <div class="container">
            <h1 class="h1 uppercase">новости клиники</h1>
            <div class="section-news__description">
                <p>А ещё стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди
                    определенных слоев населения, а значит, должны быть объективно рассмотрены соответствующими
                    инстанциями.</p>
                <p>А ещё стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди
                    определенных слоев населения, а значит, должны быть объективно рассмотрены соответствующими
                    инстанциями.</p>
            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="news-section ">
        <div class="container">
            <div class="news-page-section__items">
                @foreach ($data as $item)
                    <x-news-item />
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
