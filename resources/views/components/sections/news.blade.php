@php
    $data = [
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
        [
            'id' => '1',
        ],
    ];
@endphp

<section class="section news-section">
    <div class="container">
        <div class="news-section__top">
            <h2 class="h2">Статьи и новости</h2>
            <x-ui.slider-arrows-black />
        </div>


        <div class="news-section__items">

            <div class="swiper news-slider">
                <div class="swiper-wrapper">
                    @foreach ($data as $item)
                        <div class="swiper-slide">
                            <x-news-item />
                        </div>
                    @endforeach

                </div>

            </div>

            <x-ui.button-arrow text="Все новости" href='/novosti' class="news-section__btn" />
        </div>
</section>
