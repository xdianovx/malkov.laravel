@extends('layouts.main')

@section('content')
    <section class="section hero about-hero">
        <div class="container">
            <h1 class="h1 uppercase">{!! $about_page->h1_title !!}</h1>

            <div class="about-hero__wrap">
                {!! $about_page->description_header !!}
            </div>
        </div>
    </section>


    <section class="numbers about-numbers">
        <div class="container">
            <div class="numbers__wrap">
                @foreach ($about_page->home_page_nums as $item_num)
                    <div class="numbers__item">
                        <div class="numbers__item-num">{{ $item_num->num }}<span>{{ $item_num->label }}</span></div>
                        <p class="numbers__item-descr">{{ $item_num->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <x-sections.stock-slider/> --}}
    <section class="section section-interrior">
        <div class="container">
            <h2 class="h2">{!! $block_modern_offices->title !!}</h2>
            <p class="faq-section__text">
                {!! $block_modern_offices->description !!}
            </p>
            <div class="section-services__items">
                @forelse($block_modern_offices->modern_offices as $item_modern_office)
                        <div class="service-item__img">
                            <img src="{{ asset('storage') . '/' . $item_modern_office->file }}" alt="">
                        </div>

                        <h3 class="service-item__title">{{ $item_modern_office->title }}</h3>

                        <p class="service-item__text">{!! $item_modern_office->description !!}</p>
                 @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse

            </div>
        </div>
    </section>

    <section class="section section-director">
        <div class="container">
            <div class="section-director__wrap">
                {!! $about_page->description !!}
                {{-- <div class="section-director__image">
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
                </div> --}}
            </div>
        </div>
    </section>

    <x-sections.services :block="$block_services" :data="$services" />

    <x-sections.map />
    <x-sections.faq :block="$block_questions" />


    <section class="section"></section>
@endsection()
