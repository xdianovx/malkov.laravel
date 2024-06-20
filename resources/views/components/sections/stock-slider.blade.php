<section {{ $attributes->merge(['class' => 'stock-slider-section']) }}>
    <div class="container">
        <div class="swiper stock-slider">
            <div class="swiper-wrapper">
                @forelse ($data as $item)
                    <div class="swiper-slide">

                        <div class="stock-slide">
                            <img src="{{ $item->image }}" alt="Обязательер">



                            <div class="stock-slide__info">
                                <h3 class="stock-slide__title">{{ $item->h1_title }}</h3>

                                <div class="divider horizontal"></div>

                                <p class="stock-slide__descr">{{ $item->content }}</p>

                                <div class="stock-slide__info_btns">
                                    <a href="/akcii/{{ $item->slug }}" class="btn">Подробнее</a>
                                    <x-ui.slider-arrows class="ml-auto" />
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
