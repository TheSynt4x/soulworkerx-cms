@if ($paginator->hasPages())
    <div class="row">
        <div class="col-12">
            <div class="blog-pagination text-center">
                <ul class="page-pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())

                    @else
                        <li><a href="{{ $paginator->previousPageUrl() }}"><i class="icofont-long-arrow-left"></i></a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li><a href="#">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li><a class="active" href="#">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}"><i class="icofont-long-arrow-right"></i></a>
                        </li>
                    @else
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
