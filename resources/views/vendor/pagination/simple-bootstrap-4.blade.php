@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="back hidden">Назад</span>
            </li>
        @else
            <li class="page-item">
                <a class="back {{ !Request::is('news') ? ' paginator-link' : null }}" href="{{ $paginator->previousPageUrl() }}" rel="prev">Назад</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="next {{ !Request::is('news') ? ' paginator-link' : null }}" href="{{ $paginator->nextPageUrl() }}" rel="next">Вперёд</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="next hidden">Вперёд</span>
            </li>
        @endif
    </ul>
@endif
