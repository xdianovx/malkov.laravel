@extends('layouts.main')

@section('content')
    <section class="section hero section-reviews">
        <div class="container">
            <div class="flex flex-col gap-10">
                <h1 class="h1 uppercase">{{ $page->title_h1 }}</h1>
                <div class=" section-reviews__description">
                    {!! $page->description !!}
                </div>
                <div class="divider horizontal gray "></div>
            </div>
        </div>
    </section>

    <section class="stock-items-sections mt-10">
        <div class="container">
            <div class="stock-items-sections__items grid gap-4" id="stockCatalog">
                @forelse($reviews as $item)
                    <div class="stock-item">
                        <h3 class="stock-item__title">{!! $item->title !!}</h3>
                        <p class="stock-item__text">{!! $item->description !!}</p>

                        <div class="stock-item__bottom">
                            <p> {{ $item->date }}</p>
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
            <div class="pagination">
                {{ $reviews->links('pagination::simple-tailwind') }}
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
