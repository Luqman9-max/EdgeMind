@if ($paginator->hasPages())
    <div class="pagination-edge reveal">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="disabled cursor-not-allowed text-em-steel px-4 py-2 border border-em-steel/50 font-mono text-xs uppercase tracking-widest flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">chevron_left</span> Prev
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="text-em-silver hover:text-em-accent hover:border-em-accent px-4 py-2 border border-em-steel font-mono text-xs uppercase tracking-widest transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">chevron_left</span> Prev
            </a>
        @endif

        {{-- Pagination Elements --}}
        <div class="hidden sm:flex items-center gap-1">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="disabled px-3 py-2 text-em-slate font-mono text-xs">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="bg-em-accent text-em-black border border-em-accent px-3 py-2 font-mono text-xs font-bold">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="text-em-silver hover:text-em-accent hover:border-em-accent px-3 py-2 border border-em-steel font-mono text-xs transition-colors">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="text-em-silver hover:text-em-accent hover:border-em-accent px-4 py-2 border border-em-steel font-mono text-xs uppercase tracking-widest transition-colors flex items-center gap-2">
                Next <span class="material-symbols-outlined text-sm">chevron_right</span>
            </a>
        @else
            <span class="disabled cursor-not-allowed text-em-steel px-4 py-2 border border-em-steel/50 font-mono text-xs uppercase tracking-widest flex items-center gap-2">
                Next <span class="material-symbols-outlined text-sm">chevron_right</span>
            </span>
        @endif
    </div>
@endif
