@php
    $data = [
        [
            'id' => '1',
            'title' => 'Довольных клиента',
            'label' => '',
            'num' => '1 763',
        ],
        [
            'id' => '2',
            'title' => 'Средняя разница в цене',
            'label' => '',
            'num' => '32',
        ],
        [
            'id' => '3',
            'title' => 'Средняя разница в цене',
            'label' => '%',
            'num' => '30',
        ],
        [
            'id' => '4',
            'title' => 'Средний опыт специалистов',
            'label' => 'лет',
            'num' => '12',
        ],
    ];

@endphp

@extends('layouts.main')

@section('content')

    <section class="section hero about-hero">
        <div class="container">
            <h1 class="h1 uppercase">о нас</h1>

            <div class="about-hero__wrap">
                <p>
                    А ещё стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди
                    определенных слоев населения, а значит, должны быть объективно рассмотрены соответствующими
                    инстанциями.
                </p>
                <p>
                    А ещё стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди
                    определенных слоев населения, а значит, должны быть объективно рассмотрены соответствующими
                    инстанциями.
                </p>
            </div>
        </div>
    </section>


    <section class="numbers about-numbers">
        <div class="container">
            <div class="numbers__wrap">
                @foreach ($data as $item)
                    <div class="numbers__item">
                        <div class="numbers__item-num">{{ $item['num'] }}</div>
                        <p class="numbers__item-descr">{{ $item['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.stock-slider/>
    <section class="section section-interrior">
        <div class="container">
            <h2 class="h2">Современные кабинеты</h2>

            <div class="section-interrior-items">

            </div>
        </div>
    </section>

    <section class="section section-director">
        <div class="container">
            <div class="section-director__wrap">
                <div class="section-director__image">
                    <img src="{{asset('img/malkov.jpg')}}" alt="Мальков Сергей Николаевич фото"/>
                </div>

                <div class="section-director__info">
                    <h3 class="section-director__name">Мальков <br> Сергей Николаевич</h3>
                    <p class="section-director__subtitle">Основатель клиники</p>

                    <p class="section-director__quote">“Я всегда хотел работать в своё удовольствие, никуда не спешить.
                        Создать молодую команду врачей в собственной клинике, так как считаю, что все инновационные
                        перспективы в будущем, а будущее делаем мы сами!”</p>

                    <div class="section-director__nums">
                        <div class="section-director__num">
                            <p class="section-director__num-num">2</p>
                            <p class="section-director__num-text">Клиники</p>
                        </div>

                        <div class="section-director__num">
                            <p class="section-director__num-num">1 763</p>
                            <p class="section-director__num-text">довольных клиента</p>
                        </div>

                        <div class="section-director__num">
                            <p class="section-director__num-num">10</p>
                            <p class="section-director__num-text">лет опыта</p>
                        </div>

                        <div class="section-director__num">
                            <p class="section-director__num-num">30</p>
                            <p class="section-director__num-text">пройдено курсов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sections.services/>

    <x-sections.map/>
    <x-sections.faq/>


    <section class="section"></section>
@endsection()
