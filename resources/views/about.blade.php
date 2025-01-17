@extends('layouts.main')

@section('content')
    <section class="section hero about-hero">
        <div class="flex items-start mb-4 max-[768px]:mb-2">
            <div class="container flex">
                {{ Breadcrumbs::render('about') }}
            </div>
        </div>
        <div class="container">
            <h1 class="h1 uppercase">{!! $page->title_h1 !!}</h1>

            <div class="about-hero__wrap text-neutral-600">
                {!! $page->description !!}
            </div>
        </div>
    </section>


    <section class="numbers about-numbers">
        <div class="container">
            <div class="numbers__wrap">
                @foreach ($page->home_page_nums->sortBy('id') as $item_num)
                    <div class="numbers__item">
                        <div class="numbers__item-num">{{ $item_num->num }}<span>{{ $item_num->label }}</span></div>
                        <p class="numbers__item-descr">{{ $item_num->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if ($stocks->isNotEmpty())
        <x-sections.stock-slider :data="$stocks" />
    @endif

    <section class="section section-interrior">
        <div class="container">
            <div class="content">
                <h3>Тут необходимо расписать информацию о клинике более подробно</h3>
            </div>
        </div>
    </section>
    <section class="section section-interrior">
        <div class="container">
            <h2 class="h2">{!! $block_modern_offices->title !!}</h2>
            <p class="faq-section__text">
                {!! $block_modern_offices->description !!}
            </p>
            <div class="grid grid-cols-4 gap-2 mt-4 max-[768px]:grid-cols-2">
                @forelse($block_modern_offices->modern_offices as $item_modern_office)
                    <div class="service-item__img">
                        <a href="{{ asset('storage/' . $item_modern_office->file) }}" data-fancybox="gallery">
                            <img src="{{ asset('storage/' . $item_modern_office->file) }}"
                                alt="{{ $item_modern_office->description }}" class="modal-img">
                        </a>
                    </div>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse

            </div>
        </div>
    </section>

    <section class="section section-director">
        <div class="container">
            <div class="section-director__wrap">

                <div class="section-director__image max-[1024px]:hidden">
                    <img src="{{ asset('img/malkov.jpg') }}" alt="Мальков Сергей Николаевич фото" />
                </div>

                <div class="section-director__info">
                    <h3 class="section-director__name">Мальков <br> Сергей Николаевич</h3>
                    <div class="section-director__image max-[1024px]:block mt-2 hidden">
                        <img src="{{ asset('img/malkov.jpg') }}" alt="Мальков Сергей Николаевич фото" />
                    </div>
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
    @if ($block_services->is_active != 'off')
    <x-sections.services :block="$block_services" :data="$services" />
    @endif
    <x-sections.map />
    @if ($block_questions->is_active != 'off')
    <x-sections.faq :block="$block_questions" />
    @endif

    <section class="section"></section>
@endsection()
