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
                    <div id="callback_error_review" style="color: red;"></div>
                </div>

                <div class="callback__right">
                    <form class="callback-form" id="reviewForm" action="{{ route('reviews.store') }}" method="post">
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
                </div>
            </div>
        </div>

        <script>
            document.getElementById('reviewForm').addEventListener('submit', function(event) {
                event.preventDefault();

                let formData = new FormData(this);

                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'item-created') {
                        // handle success
                        MicroModal.show('modal-thanks-review');
                        this.reset();
                    } else {
                        // handle errors
                        const errorList = document.createElement('ul');
                        errorList.classList.add('errors-list');

                        if (data.message) {
                            Object.keys(data.message).forEach((key) => {
                                data.message[key].forEach((error) => {
                                    const errorItem = document.createElement('li');
                                    errorItem.innerText = error;
                                    errorList.appendChild(errorItem);
                                });
                            });
                        }

                        document.getElementById('callback_error_review').appendChild(errorList);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('callback_error_review').innerText = data.message;
                });
            });
        </script>

        <div class="partical-l partical"></div>
        <div class="partical-r partical"></div>


    </section>

    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>

@endsection()

