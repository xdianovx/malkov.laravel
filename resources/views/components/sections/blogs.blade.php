<section class="section news-section">
    <div class="container">
        <div class="news-section__top">
            <h2 class="h2">{{ $block->h1_title }}</h2>
            {!! $block->description !!}
            <x-ui.slider-arrows-black />
        </div>


        <div class="news-section__items">

            <div class="swiper news-slider">
                <div class="swiper-wrapper">
                    @forelse ($data as $item)
                        <div class="swiper-slide">
                            <x-blog-item :data="$item" />
                        </div>
                    @empty
                        <p>{{ __('admin.notification_no_entries') }}</p>
                    @endforelse
                </div>

            </div>

            <x-ui.button-arrow text="Все статьи" href='/blog' class="news-section__btn" />
        </div>
</section>
