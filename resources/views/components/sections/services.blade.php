<section class="services-section section">
    <div class="container">
        <div class="services-section__top">
            <h2 class="h2">{{ $block->h1_title }}</h2>

            <x-ui.button-arrow text="Все услуги" class="max-[768px]:hidden" href="{{ route('services') }}" />
        </div>

        <div class="services-items">
            @forelse ($data as $item)
                <a href="{{ route('service-single', $item->slug) }}" class="services-item">
                    <h3 class="services-item__title">{{ $item->title }}</h3>
                    <div class="services-item__text">{!! $item->content !!}</div>

                    <div class="services-item__price">от
                        {{ number_format((float)$item->prices->min('price'), 0, '', ' ') }} руб.
                    </div>
                </a>
            @empty
                <p>{{ __('admin.notification_no_entries') }}</p>
            @endforelse
        </div>

        <div class="hidden max-[768px]:flex mx-auto justify-center  mt-4">

            <x-ui.button-arrow text="Все услуги" class="" href="{{ route('services') }}" />
        </div>

    </div>
</section>
