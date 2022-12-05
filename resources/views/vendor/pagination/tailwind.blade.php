@if ($paginator->hasPages())

    <div class="hidden ">
        <div>
            <p class="">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                    <span class="">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="">{{ $paginator->total() }}</span>

            </p>
        </div>

        <div>

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                            <div class="pager-item"><p>{{ $element }}</p></div>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <div class="pager-item active"><p>{{ $page }}</p></div>
                                </span>
                            @else
                                <a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    <div class="pager-item"><p>{{ $page }}</p></div>
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
        </div>
    </div>

@endif
