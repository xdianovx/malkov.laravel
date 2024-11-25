@extends('layouts.main')

@section('content')
    <section class="section hero section-reviews">
        <div class="container">
            <h1 class="h1 uppercase">{{ $reviews_page->title_h1 }}</h1>
            <div class="section-reviews__description">
                {!! $reviews_page->description !!}
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>

    <section class="stock-items-sections section">
        <div class="container">
            <div class="stock-items-sections__items" id="stockCatalog">
                @forelse($reviews as $item)
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
            <div class="text-center">
                {{ $reviews->links() }}
            </div>
        </div>
    </section>

    <section class="callback-section section">
        <div class="container">
            <div class="callback-wrap">
                <div class="callback__left">
                    <h2 class="h2">
                        Оставьте свой отзыв о нас
                    </h2>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>
                            <span style="color: red">{{ $error }}</span>
                        </div>
                    @endforeach
                    @endif
                    @if (session('status') === 'item-created')
                        <div>
                            <span style="color: green">Спасибо, ваш отзыв успешно отправлен на модернизацию!</span>
                        </div>
                    @endif
                </div>

                <div class="callback__right">
                    <form class="callback-form" action="{{ route('reviews.store') }}" method="post">
                        @csrf
                        <input type="text" class="input" placeholder="Имя" name="title">
                        <select class="input" name="rating">
                            <option value="1">&#9733;</option>
                            <option value="2">&#9733;&#9733;</option>
                            <option value="3">&#9733;&#9733;&#9733;</option>
                            <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                            <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                        </select>
                        <textarea class="input" placeholder="Текст отзыва" name="description"></textarea>
                        <button class="callback-form-submit uppercase btn --accent" type="submit">Отправить</button>
                    </form>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            if ("{{ session('status') === 'item-created' }}" === "1" || "{{ $errors->any() }}" === "1") {
                                window.scrollTo({
                                    top: document.querySelector(".callback-section").offsetTop - 100,
                                    behavior: 'smooth'
                                });
                            }
                        });
                    </script>
                </div>
            </div>
        </div>

        <div class="partical-l partical"></div>
        <div class="partical-r partical"></div>
    </section>

    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()

