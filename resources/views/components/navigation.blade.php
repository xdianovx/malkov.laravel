@php
    $data = [
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
        [
            'title' => '',
            'slug' => '',
            'links' => [
                'title' => '',
                'slug' => '',
            ],
        ],
    ];
@endphp

<section class="navigation">
    <div class="container">
        <div class="navigation-wrap">
            <div class="navigation-left">
                <nav class="nav-left">
                    <a href="/patsiientam">Пациентам</a>
                    <a href="/uslugi">Услуги</a>
                    <a href="/akcii">Акции</a>
                    <a href="/vrachi">Врачи</a>
                    <a href="/blog">Блог</a>
                    <a href="/kontakty">Контакты</a>
                    <a href="/o-klinike">О клинике</a>
                    <a href="/otzyvy">Отзывы</a>

                </nav>

                <div class="divider horizontal"></div>

                <x-ui.socials />

                <a href="tel:+7 (926) 076-78-18">+7 (926) 076-78-18</a>

                <p>Москва, поселение Московский, Саларьевская улица, 16к3</p>
                <div class="flex flex-col">
                    <p>ПН–ВС:</p>
                    <p>10:00 до 21:00</p>
                </div>

                <button class="btn uppercase">Заказать звонок</button>

                <div class="nav-left-policy">
                    <a href="">Политика конфиденциальности</a>
                    <a href="">Правила предоставления услуг мед.организации</a>
                </div>

            </div>
            <nav class="navigation-right">
                {{-- Item --}}
                @foreach ($data as $item)
                    <div class="nav-group">
                        <div class="nav-group__top">
                            <a href="/">Пародонтология</a>
                        </div>

                        <div class="divider horizontal"></div>

                        <ul class="nav-group__links">
                            <li>
                                <a href="/">Дочерняя услуга</a>
                            </li>
                            <li>
                                <a href="/">Дочерняя услуга</a>
                            </li>
                            <li>
                                <a href="/">Дочерняя услуга</a>
                            </li>
                            <li>
                                <a href="/">Дочерняя услуга</a>
                            </li>
                        </ul>
                    </div>
                @endforeach

            </nav>
        </div>
    </div>
</section>
