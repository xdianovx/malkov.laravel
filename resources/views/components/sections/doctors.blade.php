@php
    $data = [
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/vrachi/vrach',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/vrachi/vrach',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/vrachi/vrach',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/vrachi/vrach',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/vrachi/vrach',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
        [
            'name' => 'Дорошенко Владислава Сергеевна',
            'professions' => ['Стоматолог', 'Терапевт', 'Хирург', 'Ортодонт', 'Ортопед'],
            'slug' => '/vrachi/vrach',
            'image' => 'img/doctors/1.jpg',
            'expirience' => '7 лет',
            'rating' => 5,
        ],
    ];
@endphp

<section class="section doctors-section">
    <div class="container">
        <div class="doctors-section__top">
            <div class="">
                <h2 class="h2">Наши врачи <br>и специалисты</h2>
                <p class="doctors-section__top-descr"><a href="/">Познакомьтесь с врачом бесплатно</a><br>
                    и получите в подарок снимок и план лечения.</p>
            </div>

            <a href="/" class="btn doctors-section__top-btn">Все специалисты</a>
        </div>

        <div class="doctors-section__items">
            {{--  --}}
            @foreach ($data as $item)
                <x-doctor-card :slug="$item['slug']" :name="$item['name']" :image="$item['image']" :profs="$item['professions']"
                    :expirience="$item['expirience']" />
            @endforeach

        </div>
    </div>
</section>
