<a href="{{ route('blogs-single', $data->slug) }}" class="news-item">
    <div class="news-item__image">
        <img src="{{ asset('storage') . '/' . $data->image }}" alt="{{ $data->h1_title }}">
    </div>

    <div class="news-item__top">
        <p>{{ date('Y-m-d', strtotime($data->created_at)) }}</p>

        <div class="news-item__time">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                 viewBox="0 0 20 20" fill="none" stroke="#1B1B1B">
                <path
                    d="M10 5.83333V10H14.1667M10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10C17.5 14.1421 14.1421 17.5 10 17.5Z"
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>{{ $data->reading_time }}</p>
        </div>
    </div>

    <h3 class="h3 news-item__title">{{ $data->h1_title }}</h3>

    <p class="news-item__descr">{{ $data->content }}</p>
</a>
