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
                  <p>{{ date('d.m.Y', strtotime($item->date)) }}</p>
                  <div class="rating flex items-center gap-1">
                      @for ($i = 1; $i <= $item->rating; $i++)
                          <span class="star">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=""
                                  viewBox="0 0 24 24" stroke-width="1" stroke="#FFCC00" stroke-linecap="round"
                                  fill='{{ $i <= $item->rating ? '#FFCC00' : 'none' }}' stroke-linejoin="round">
                                  <path
                                      d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                              </svg>
                          </span>
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
