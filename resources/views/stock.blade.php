@php
    $data = [
        [
            'title' => 'Бесплатная консультация, план лечения и снимок при первом посещении',
            'text' => 'Наша постоянная акция, которой воспользовалось более 1 000 человек, и 92% стали нашими постоянными клиентами.',
            'due_time' => '26.12.2030',
            'slug'=>'stock-stock'
        ],      [
            'title' => 'Бесплатная консультация, план лечения и снимок при первом посещении',
            'text' => 'Наша постоянная акция, которой воспользовалось более 1 000 человек, и 92% стали нашими постоянными клиентами.',
            'due_time' => '26.12.2030',
            'slug'=>'stock-stock'
        ],      [
            'title' => 'Бесплатная консультация, план лечения и снимок при первом посещении',
            'text' => 'Наша постоянная акция, которой воспользовалось более 1 000 человек, и 92% стали нашими постоянными клиентами.',
            'due_time' => '26.12.2030',
            'slug'=>'stock-stock'
        ],      [
            'title' => 'Бесплатная консультация, план лечения и снимок при первом посещении',
            'text' => 'Наша постоянная акция, которой воспользовалось более 1 000 человек, и 92% стали нашими постоянными клиентами.',
            'due_time' => '26.12.2030',
            'slug'=>'stock-stock'
        ],      [
            'title' => 'Бесплатная консультация, план лечения и снимок при первом посещении',
            'text' => 'Наша постоянная акция, которой воспользовалось более 1 000 человек, и 92% стали нашими постоянными клиентами.',
            'due_time' => '26.12.2030',
            'slug'=>'stock-stock'
        ],
];
@endphp

@extends('layouts.main')

@section('content')

    <section class="section hero section-stock">
        <div class="container">
            <h1 class="h1 uppercase">Акции клиники <br> доктора малькова</h1>
            <p class="section-news__text">А ещё стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди
                определенных слоев населения, а значит, должны быть объективно рассмотрены соответствующими
                инстанциями.
            </p>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


        <section class="stock-items-sections section">
            <div class="container">
                <div class="stock-items-sections__items">
                    @foreach($data as $item)

                    <div class="stock-item">
                        <h3 class="stock-item__title">{!! $item['title'] !!}</h3>
                        <p class="stock-item__text">{!! $item['text'] !!}</p>

                        <div class="stock-item__bottom">
                            <p>Действует до: {{ $item['due_time'] }}</p>
                            <a href="{{$item['slug']}}">Подробнее</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    <x-sections.callback/>
    <x-sections.services/>
    <x-sections.faq/>



    <section class="section"></section>
@endsection()
