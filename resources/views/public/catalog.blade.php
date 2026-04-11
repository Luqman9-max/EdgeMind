@extends('public.layouts.app')

@section('title', 'The Vault — Edge Mind')
@section('meta_description', 'Browse the Edge Mind vault — curated self-development books selected for maximum impact.')

@section('content')

{{-- ===== CATALOG HEADER ===== --}}
<section id="catalog-header" class="section-padding-sm" style="padding-top: 8rem;">
    <div class="container-edge">
        <div class="reveal">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-ice); text-transform: uppercase; letter-spacing: 0.2em;">Catalog</span>
            <h1 style="margin-top: 0.5rem; margin-bottom: 0.75rem;">The Vault.</h1>
            <p style="color: var(--em-slate);">Curated. Unfiltered. Yours to explore.</p>
        </div>
    </div>
</section>

{{-- ===== FILTER BAR ===== --}}
<section id="filter-bar" style="padding: 1.5rem 0; border-top: 1px solid var(--em-steel); border-bottom: 1px solid var(--em-steel);">
    <div class="container-edge">
        <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;" x-data="{ category: '{{ request('category', '') }}' }">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.15em;">Filter:</span>

            <a href="{{ route('catalog.index') }}"
               class="btn btn-sm {{ !request('category') ? 'btn-primary' : 'btn-outline' }}"
               style="font-size: 0.7rem;">ALL</a>

            @php
                $categories = $books->pluck('category')->unique()->filter()->sort();
            @endphp

            @foreach($categories as $cat)
                <a href="{{ route('catalog.index', ['category' => $cat]) }}"
                   class="btn btn-sm {{ request('category') == $cat ? 'btn-primary' : 'btn-outline' }}"
                   style="font-size: 0.7rem;">{{ strtoupper($cat) }}</a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== BOOK GRID ===== --}}
<section id="book-grid" class="section-padding">
    <div class="container-edge">
        @php
            $filteredBooks = request('category')
                ? $books->where('category', request('category'))
                : $books;
        @endphp

        @if($filteredBooks->count() > 0)
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
            @foreach($filteredBooks as $index => $book)
            <a href="{{ route('book.show', $book->slug) }}" class="card-edge reveal" style="text-decoration: none; transition-delay: {{ ($index % 4) * 0.1 }}s;">
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="card-image" loading="lazy">
                @else
                    <div class="card-image" style="background: var(--em-gunmetal); display: flex; align-items: center; justify-content: center;">
                        <span class="font-mono" style="color: var(--em-slate); font-size: 0.75rem;">{{ strtoupper(substr($book->title, 0, 2)) }}</span>
                    </div>
                @endif
                <div class="card-body">
                    @if($book->category)
                        <div class="card-category">{{ $book->category }}</div>
                    @endif
                    <h4 class="card-title">{{ $book->title }}</h4>
                    <p class="card-desc">{{ $book->short_description ?? Str::limit($book->description, 100) }}</p>

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0.75rem;">
                        @if($book->is_free)
                            <span class="badge badge-ice">FREE</span>
                        @elseif($book->price)
                            <span class="card-price">${{ number_format($book->price, 2) }}</span>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div style="text-align: center; padding: 6rem 0;">
            <p class="font-mono" style="color: var(--em-slate); font-size: 0.85rem;">No books match your filter. Adjust your criteria.</p>
            <a href="{{ route('catalog.index') }}" class="btn btn-outline btn-sm" style="margin-top: 1rem;">VIEW ALL</a>
        </div>
        @endif
    </div>
</section>

@endsection
