<section class="section news-section">
    <div class="container">
        <div class="news-section__top">
            <div class="flex gap-4 justify-between items-end">

                <h2 class="h2">{{ $block->h1_title }}</h2>
                <x-ui.slider-arrows-black class="max-[1200px]:hidden" />
            </div>
            <p class="text-neutral-700"> {!! $block->description !!}</p>
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

            <div class="hidden max-[1200px]:flex ">

                <x-ui.slider-arrows-black class="mt-4 w-full justify-between" />
            </div>


            <x-ui.button-arrow text="Все статьи" href='/blog' class="news-section__btn " />
        </div>
</section>
