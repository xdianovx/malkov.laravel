@props(['title', 'slug', 'image', 'profs', 'experience', 'operations'])

<a href="{{ route('specialist', $slug) }}" class="doctor-item">
    <img src="{{ asset('storage') . '/' . $image }}" alt="{!! $title !!}">

    <div class="doctor-item__info">
        <h3 class="doctor-item__name">{!! $title !!}</h3>

        <div class="doctor-item__prof">
          @foreach (json_decode($profs, true) as $key => $specializations)
          {{ $specializations }}@if ($key < count(json_decode($profs, true)) - 1), @endif
          @endforeach
        </div>

        <div class="doctor-item__list">
            @isset($experience)
                <div class="doctor-item__list-item">
                    <p>Стаж</p>
                    <div class="spacer"></div>
                    <p>{{ $experience }}</p>
                </div>
            @endisset
            <div class="doctor-item__list-item">
                <p>Операций</p>
                <div class="spacer"></div>
                <p>{{ $operations }}</p>
            </div>
        </div>

        <button class="doctor-item__modal-btn">
            <span>Записаться к врачу</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"
                stroke="#C1995B">
                <path d="M12.558 6.99942L0.625584 6.99942" stroke-miterlimit="10" stroke-linecap="square"
                    stroke-linejoin="round" />
                <path d="M8.46143 2.46094L13.0002 6.99968L8.46143 11.5384" stroke-miterlimit="10"
                    stroke-linecap="square" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</a>
