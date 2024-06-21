<section class="services-section section">
    <div class="container">
        <div class="services-section__top">
            <h2 class="h2">Наши услуги</h2>

            <x-ui.button-arrow text="Все услуги" class="" href="{{ route('services') }}" />
        </div>

        <div class="services-items">
            @forelse ($data as $item)
                <a href="{{ route('service-single', $item->slug) }}" class="services-item">
                    <h3 class="services-item__title">{{ $item->title }}</h3>
                    <p class="services-item__text">{{ $item->description }}</p>

                    <div class="services-item__price">от
                        {{ $item->prices->min('price') }} руб.
                    </div>
                </a>
            @empty
                <p>{{ __('admin.notification_no_entries') }}</p>
            @endforelse
        </div>
    </div>
</section>
