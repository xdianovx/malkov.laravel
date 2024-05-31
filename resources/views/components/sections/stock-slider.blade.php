@php
    $data = [
        [
            'id' => '1',
            'title' => '1',
            'description' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'description' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'description' => '1',
        ],
        [
            'id' => '1',
            'title' => '1',
            'description' => '1',
        ],
    ];
@endphp


<section {{ $attributes->merge(['class' => 'stock-slider-section']) }}>
    <div class="container">
        <div class="swiper stock-slider">
            <div class="swiper-wrapper">
                @foreach ($data as $item)
                    <div class="swiper-slide">
                        <div class="stock-slide">
                            <img src="{{ asset('img/stock-slider/1.jpg') }}" alt="Обязательер">

                            <div class="stock-slide__info">
                                <h3 class="stock-slide__title">Теперь мы делаем что-то крутое, то что другие не могут
                                </h3>

                                <div class="divider horizontal"></div>

                                <p class="stock-slide__descr">
                                    Текст, который вкратце рассказывает об акции и ее преимуществах. Можно чуть больше
                                    чем в
                                    две строчки, даже можно такой список:
                                </p>

                                <div class="stock-slide__info_btns">
                                    <a href="/" class="btn">Подробнее</a>
                                    <x-ui.slider-arrows class="ml-auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
