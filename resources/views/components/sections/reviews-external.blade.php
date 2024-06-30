<section class="section reviews-external-section">
    <div class="container">
        <div class="reviews-external-section__top">
            <h2 class="h2">{{ $block->h1_title }}</h2>
            <p class="reviews-external-section__top-text">{!! $block->description !!}</p>
        </div>

        <div class="reviews-external__items">
            <div class="services-items">
                @forelse ($data as $item)
                        <h3 class="services-item__title">{{ $item->title }}</h3>
                        <p class="services-item__text">{{ $item->description }}</p>

                        <div class="services-item__price">
                            {{ $item->rating }}
                        </div>
                        <div class="services-item__price">
                            {{ $item->date }}
                        </div>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
