@unless ($breadcrumbs->isEmpty())
    <ol class="breadcrumb flex flex-wrap gap-x-2 justify-center text-center max-[768px]:text-[14px]">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="flex items-center gap-2 group">
                    <a class="group-hover:text-gold transition-colors duration-150"
                        href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none"
                        stroke="#1B1B1B" class="group-hover:stroke-gold transition-colors duration-150">
                        <path d="M14.5 8.00033L11.1667 4.66699M14.5 8.00033L11.1667 11.3337M14.5 8.00033H2.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>
@endunless
