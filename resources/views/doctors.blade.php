@php
    $data = [
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
    ];
@endphp

@extends('layouts.main')

@section('content')
    <section class="section hero doctors-hero">
        <div class="container">
            <div class="h1 uppercase dectors-hero__title">Врачи клиники <br> доктора малькова</div>

            <div class="doctors-hero__top">
                <p class="doctors-hero__text">
                    Текст о том какие у нас классные специалисты и врачи. Какие сложные и уникальные проблемы
                    они решают, что на каждый запрос найдем решение, а отзывчивая администрация поможет с любым вопросом
                </p>

                <x-ui.button-arrow
                    class="ml-auto accent"
                    text="Задать вопрос врачу"
                />
            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section team-section">
        <div class="container">
            <div class="team-section__top">
                <h2 class="h2">Команда клиники</h2>
                <p class="team-section__text">Еще один текст о том какие у нас классные специалисты и врачи. Какие
                    сложные и
                    уникальные проблемы они
                    решают, что на каждый запрос найдем решение, а отзывчивая администрация поможет с любым вопросом</p>
            </div>
            <div class="team-section__tags">
                Тут сделать теги
            </div>


            <div class="team-section__items">
                <h3 class="team-section__items__title">Врачи</h3>
                <div class="doctors-section__items">
                    @foreach ($data as $item)
                        <x-doctor-card
                            :slug="$item['slug']"
                            :name="$item['name']"
                            :image="$item['image']"
                            :profs="$item['professions']"
                            :expirience="$item['expirience']"
                        />
                    @endforeach
                </div>
            </div>

            <div class="team-section__items">
                <h3 class="team-section__items__title">Врачи</h3>

                <div class="doctors-section__items">
                    @foreach ($data as $item)
                        <x-doctor-card
                            :slug="$item['slug']"
                            :name="$item['name']"
                            :image="$item['image']"
                            :profs="$item['professions']"
                            :expirience="$item['expirience']"
                        />
                    @endforeach
                </div>
            </div>

            <div class="team-section__items">
                <h3 class="team-section__items__title">Врачи</h3>

                <div class="doctors-section__items">
                    @foreach ($data as $item)
                        <x-doctor-card
                            :slug="$item['slug']"
                            :name="$item['name']"
                            :image="$item['image']"
                            :profs="$item['professions']"
                            :expirience="$item['expirience']"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <x-sections.news/>
    <x-sections.callback/>
    <x-sections.faq/>
    <section class="section"></section>
@endsection()
