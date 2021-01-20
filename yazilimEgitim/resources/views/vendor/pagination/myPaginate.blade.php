@if ($paginator->hasPages())
    <ul class="page-list">
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled" aria-disabled="true">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li aria-current="page"><a class="active" href="javascript:void(0)">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>

    @if ($paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}" class="disabled prev" onclick="return false;">
            <span aria-hidden="true" class="arrow_carrot-left_alt2"></span>
        </a>

    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="prev" rel="prev">
            <span aria-hidden="true" class="arrow_carrot-left_alt2"></span>
        </a>
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="next">
            <span aria-hidden="true" class="arrow_carrot-right_alt2"></span>
        </a>
    @else
        <a href="{{ $paginator->nextPageUrl() }}" class="disabled next" onclick="return false;">
            <span aria-hidden="true" class="arrow_carrot-right_alt2"></span>
        </a>
    @endif
@endif
