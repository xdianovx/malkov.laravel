<section class="stock-items-sections section">
    <div class="container">
        <div class="reviews-external-section__top">
            <h2 class="h2">{{ $block->h1_title }}</h2>
            <p class="reviews-external-section__top-text">{!! $block->description !!}</p>
        </div>
        <div class="stock-items-sections__items" id="stockCatalog">
            @forelse($data as $item)
                <div class="stock-item">
                    <h3 class="stock-item__title">{!! $item->title !!}</h3>
                    <p class="stock-item__text">{!! $item->description !!}</p>

                    <div class="stock-item__bottom">
                        <p> {{ $item->date }}</p>
                        <div class="rating">
                            @for ($i = 1; $i <= $item->rating; $i++)
                                <span class="star{{ $i <= $item->rating ? ' filled' : '' }}">&#9733;</span>
                            @endfor
                        </div>
                    </div>
                </div>
            @empty
                <p>{{ __('admin.notification_no_entries') }}</p>
            @endforelse
        </div>
        <x-ui.button-arrow text="Все отзывы" href='/otzyvy' class="news-section__btn" />
    </div>
</section>
