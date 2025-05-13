@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- زر "السابق" --}}
        @if ($paginator->onFirstPage())
            <span class="pagination__item disabled">«</span>
        @else
            <a class="pagination__item" href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a>
        @endif

        {{-- أرقام الصفحات --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="pagination__item disabled">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="pagination__item active">{{ $page }}</span>
                    @else
                        <a class="pagination__item" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- زر "التالي" --}}
        @if ($paginator->hasMorePages())
            <a class="pagination__item" href="{{ $paginator->nextPageUrl() }}" rel="next">»</a>
        @else
            <span class="pagination__item disabled">»</span>
        @endif
    </ul>
@endif
