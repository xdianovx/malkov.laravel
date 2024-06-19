
@extends('layouts.main')

@section('content')
    <section class="section hero doctors-hero">
        <div class="container">
            <div class="h1 uppercase dectors-hero__title">{{ $specialists_page->h1_title }}</div>

            <div class="doctors-hero__top">
                <p class="doctors-hero__text">
                    {{ $specialists_page->description }}
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

            @forelse ($specializations as $specialization)
            <div class="team-section__items">
                <h3 class="team-section__items__title">{{$specialization->title}}</h3>
                <div class="doctors-section__items">
                    @foreach ($specialization->specialists as $specialist)
                        <x-doctor-card
                            :slug="$specialist->slug"
                            :title="$specialist->title"
                            :image="$specialist->image"
                            :profs="$specialist->specializations"
                            :expirience="$specialist->expirience"
                            :operations="$specialist->operations"
                        />
                    @endforeach
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </section>


    <x-sections.news/>
    <x-sections.callback/>
    <x-sections.faq/>
    <section class="section"></section>
@endsection()
