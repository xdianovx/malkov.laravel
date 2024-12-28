@extends('layouts.main')

@section('content')
    <section class="section hero section-news">
        <div class="container">
            <div class="mb-4 flex justify-start max-[768px]:flex max-[768px]:mb-2">
                {{ Breadcrumbs::render('blogs') }}
            </div>

            <h1 class="h1 uppercase">{{ $page->title_h1 }}</h1>
            <div class="section-news__description text-neutral-700">
                <p> {!! $page->description !!}</p>
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="news-section ">
        <div class="container">
            <div class="news-page-section__items" id="blogCatalog">
                @forelse ($blogs as $item)
                    <x-blog-item :data="$item" />
                @empty
                    <p>{{ __('admin.notification_no_entries') }}</p>
                @endforelse
            </div>

            <div class="text-center mt-8">
                @if ($pageCount > 1)
                    <button class="btn doctors-section__top-btn --accent"
                        id="show-more-news">{{ __('admin.show_more') }}</button>
                @endif
            </div>
        </div>
    </section>

    @if ($pageCount > 1)
        <script>
            let pageCount = Number("{{ $pageCount }}");
            let currentPage = Number("{{ $currentPage }}");

            document.getElementById('show-more-news').addEventListener('click', function(event) {
                event.preventDefault();
                currentPage = currentPage + 1;
                const url = "{{ route('blogs-loadMore') }}?page=" + currentPage;

                if (currentPage == pageCount) {
                    document.getElementById('show-more-news').style.display = 'none';
                } else {
                    document.getElementById('show-more-news').style.display = 'block';
                }
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('blogCatalog').innerHTML += data;

                    });
            });
        </script>
    @endif


    {{--    <x-sections.doctors /> --}}
    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()
