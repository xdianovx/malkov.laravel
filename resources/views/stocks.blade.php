@extends('layouts.main')

@section('content')
    <section class="section hero section-stock">
        <div class="container">
            <h1 class="h1 uppercase">{!! $page->title_h1 !!}</h1>
            <p class="section-news__text">{!! $page->description !!}</p>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="stock-items-sections mt-10">
        <div class="container">
            <div class="stock-items-sections__items" id="stockCatalog">
                @forelse($stocks as $item)
                    <div class="stock-item">
                        <h3 class="stock-item__title">{!! $item->title !!}</h3>
                        <p class="stock-item__text">{!! $item->content !!}</p>

                        <div class="stock-item__bottom">
                            <p>Действует до: {{ date('d.m.Y', strtotime($item->due_time)) }}</p>
                            <a href="{{ route('stock-single', $item->slug) }}">Подробнее</a>
                        </div>
                    </div>
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse
            </div>
            <div class="text-center">
                @if ($pageCount > 1)
                    <button class="btn doctors-section__top-btn --accent"
                        id="show-more-stock">{{ __('admin.show_more') }}</button>
                @endif
            </div>
        </div>
    </section>

    @if ($pageCount > 1)
        <script>
            let pageCount = Number("{{ $pageCount }}");
            let currentPage = Number("{{ $currentPage }}");

            document.getElementById('show-more-stock').addEventListener('click', function(event) {
                event.preventDefault();
                currentPage = currentPage + 1;
                const url = "{{ route('stocks-loadMore') }}?page=" + currentPage;

                if (currentPage == pageCount) {
                    document.getElementById('show-more-stock').style.display = 'none';
                } else {
                    document.getElementById('show-more-stock').style.display = 'block';
                }
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('stockCatalog').innerHTML += data;

                    });
            });
        </script>
    @endif

    <x-sections.callback :block="$block_callback_form" />
    <x-sections.services :block="$block_services" :data="$services" />
    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()
