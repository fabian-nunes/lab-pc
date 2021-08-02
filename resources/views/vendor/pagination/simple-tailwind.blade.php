@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-default btn-rounded">
                <button class="bn632-hover bn25"><i class="fas fa-times" style="font-size: 30px"></i></button>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"class="btn btn-default btn-rounded">
                <button class="bn632-hover bn26"><i class="fas fa-arrow-left" style="font-size: 30px"></i></button>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-default btn-rounded">
                <button class="bn632-hover bn26"><i class="fas fa-arrow-right" style="font-size: 30px"></i></button>
            </a>
        @else
            <span class="btn btn-default btn-rounded">
                 <button class="bn632-hover bn25"><i class="fas fa-times" style="font-size: 30px"></i></button>
            </span>
        @endif
    </nav>
@endif
