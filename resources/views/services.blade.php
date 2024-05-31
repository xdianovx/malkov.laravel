@php
    $data = [[''], [''], [''], [''], [''], [''], [''], [''], [''], [''], [''], ['']];
@endphp

@extends('layouts.main')

@section('content')
    <section class="section hero">
        <div class="container">
            <div class="hero-services__top">
                <h1 class="h1 uppercase">
                    Услуги клиники Доктора Малькова
                </h1>

                {{-- <div class="btn --accent ml-auto">Быстрая запись</div> --}}
            </div>

            <div class="divider horizontal gray"></div>

            <div class="hero-services__texts">
                <p>
                    Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов. Только зубные
                    имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая
                    соседние зубы.
                </p>

                <p>Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов. Только зубные
                    имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая
                    соседние зубы.</p>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <h2 class="h2">Услуги</h2>


            <div class="section-services__filters">
                Поиск и тд
            </div>

            <div class="section-services__tags">
                тут теги
            </div>

            <div class="section-services__items">
                @foreach ($data as $item)
                    <a href="/" class="service-item">
                        <div class="service-item__img">
                            <img src="{{ asset('img/news/1.jpg') }}" alt="">
                        </div>

                        <h3 class="service-item__title">ЛЕЧЕНИЕ ПОВЕРХНОСТНОГО КАРИЕСА</h3>

                        <p class="service-item__text">
                            При наличии изменений в структуре зуба, связанной с декальцинацией,
                            нарушением распределения минеральных солей в эмали, наблюдается развитие поверхностного кариеса.
                        </p>

                        <div class="service-item__bottom">
                            <div class="service-item__price">14 800 руб.</div>
                            <button class="service-item__btn">Быстрая запись</button>
                        </div>

                        <div class="divider horizontal gray"></div>

                    </a>
                @endforeach

            </div>
        </div>
    </section>

    <x-sections.callback />
    <x-sections.faq />

    <section class="section">

    </section>
@endsection()
