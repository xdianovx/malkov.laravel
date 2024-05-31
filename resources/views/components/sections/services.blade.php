@php
    $data = [
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'text' => '1',
            'slug' => '1',
        ],
    ];
@endphp

<section class="services-section section">
    <div class="container">
        <div class="services-section__top">
            <h2 class="h2">Наши услуги</h2>

            <button class="btn accent">Все услуги</button>
        </div>

        <div class="services-items">
            @foreach ($data as $item)
                <a href="/" class="services-item">
                    <h3 class="services-item__title">Протезирование</h3>
                    <p class="services-item__text">
                        Кратко и по делу описываем почему у нас. Можно в две строчки, но сохранив суть, даже можно в три
                        если очень надо
                    </p>

                    <div class="services-item__price">от 7 800 руб.</div>
                </a>
            @endforeach
        </div>
    </div>
</section>
