<section class="services-section section">
    <div class="container">
        <div class="services-section__top">
            <h2 class="h2">{{ $block->h1_title }}</h2>

            <x-ui.button-arrow text="Все услуги" class="" href="{{ route('services') }}" />
        </div>

        <div class="services-items">
            @forelse ($data as $item)
                @if (!isset($item->parent_id))
                    <a href="{{ route('service-single', $item->slug) }}" class="services-item">
                        <h3 class="services-item__title h-12">{{ $item->title }}</h3>
                        <div class="services-item__text">{!! $item->description !!}</div>

                        <div class="services-item__price">
                            {{ $item->prices->min('price') }}
                        </div>
                    </a>
                @endif

            @empty
                <p>{{ __('admin.notification_no_entries') }}</p>
            @endforelse
        </div>
    </div>
</section>
