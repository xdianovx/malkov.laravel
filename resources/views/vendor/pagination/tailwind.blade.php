@if ($paginator->hasPages())

    <div class="listjs-table" id="customerList">
        <div class="d-flex justify-content-end">
            <div class="pagination-wrap hstack gap-2">
                @if ($paginator->onFirstPage())
                    <span class="page-item pagination-prev disabled">
                        < </span>
                        @else
                            <a href="{{ $paginator->previousPageUrl() }}" class="page-item pagination-prev">
                                < </a>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span
                                class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                        </span>
                    @endif

                    <ul class="pagination listjs-pagination mb-0">

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active">
                                        <a class="page">{{ $page }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}" class="page"
                                            aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                @endforeach
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-item pagination-next">
                        >
                    </a>
                @else
                    <span class="page-item pagination-next disabled">
                        >
                    </span>
                @endif
            </div>
        </div>
    </div>
@endif
