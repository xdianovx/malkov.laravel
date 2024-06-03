@props(['text' => 'кнопка', 'href' => ''])


@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'button-arrow']) }}>
        <span>{{ $text }}</span>
        <span class="button-arrow-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                <path d="M9.69471 1.30566L1.45044 9.54994" stroke="#1B1B1B" stroke-miterlimit="10" stroke-linecap="square"
                    stroke-linejoin="round" />
                <path d="M3.72827 1L10 0.999999L10 7.27176" stroke="#1B1B1B" stroke-miterlimit="10"
                    stroke-linecap="square" stroke-linejoin="round" />
            </svg>
        </span>
    </a>
@else
    <button {{ $attributes->merge(['class' => 'button-arrow']) }}>
        <span>{{ $text }}</span>
        <span class="button-arrow-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                <path d="M9.69471 1.30566L1.45044 9.54994" stroke="#1B1B1B" stroke-miterlimit="10"
                    stroke-linecap="square" stroke-linejoin="round" />
                <path d="M3.72827 1L10 0.999999L10 7.27176" stroke="#1B1B1B" stroke-miterlimit="10"
                    stroke-linecap="square" stroke-linejoin="round" />
            </svg>
        </span>
    </button>
@endif
