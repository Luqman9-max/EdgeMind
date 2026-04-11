@extends('public.layouts.app')

@section('title', $book->title . ' — Edge Mind')
@section('meta_description', Str::limit($book->description, 160))

@section('content')

{{-- ===== BOOK DETAIL ===== --}}
<section id="book-detail" class="section-padding" style="padding-top: 8rem;">
    <div class="container-edge">
        <div style="display: grid; grid-template-columns: 40% 60%; gap: 4rem; align-items: start;">
            {{-- Cover Image --}}
            <div class="reveal">
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}"
                         style="width: 100%; border: 1px solid var(--em-steel); border-radius: 2px;">
                @else
                    <div style="width: 100%; aspect-ratio: 3/4; background: var(--em-gunmetal); border: 1px solid var(--em-steel); display: flex; align-items: center; justify-content: center;">
                        <span class="font-mono" style="color: var(--em-slate); font-size: 1rem;">{{ strtoupper(substr($book->title, 0, 2)) }}</span>
                    </div>
                @endif
            </div>

            {{-- Details --}}
            <div>
                @if($book->category)
                    <div class="reveal">
                        <span class="font-mono" style="font-size: 0.7rem; color: var(--em-ice); text-transform: uppercase; letter-spacing: 0.2em;">{{ $book->category }}</span>
                    </div>
                @endif

                <h1 class="reveal reveal-delay-1" style="margin-top: 0.75rem; margin-bottom: 1rem; font-size: clamp(2rem, 4vw, 3rem);">
                    {{ $book->title }}
                </h1>

                <div class="reveal reveal-delay-1" style="display: flex; gap: 2rem; margin-bottom: 2rem; color: var(--em-slate); font-size: 0.875rem;">
                    @if($book->author)
                        <span>by <strong style="color: var(--em-white);">{{ $book->author }}</strong></span>
                    @endif
                    @if($book->year)
                        <span class="font-mono">{{ $book->year }}</span>
                    @endif
                </div>

                <div class="reveal reveal-delay-2" style="line-height: 1.8; color: var(--em-silver); margin-bottom: 2rem;">
                    {!! nl2br(e($book->description)) !!}
                </div>

                {{-- Price & CTA --}}
                <div class="reveal reveal-delay-3" style="display: flex; align-items: center; gap: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--em-steel);">
                    @if($book->is_free)
                        <span class="badge badge-ice" style="font-size: 0.85rem; padding: 0.5rem 1rem;">FREE</span>
                    @elseif($book->price)
                        <span style="font-family: var(--font-primary); font-size: 1.75rem; font-weight: 700; color: var(--em-white);">${{ number_format($book->price, 2) }}</span>
                    @endif

                    @if($book->gumroad_url)
                        <a href="{{ $book->gumroad_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                            {{ $book->is_free ? 'DOWNLOAD FREE →' : 'GET THIS BOOK →' }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== RELATED BOOKS ===== --}}
@if($relatedBooks->count() > 0)
<section id="related" class="section-padding" style="background: var(--em-charcoal);">
    <div class="container-edge">
        <div class="reveal" style="margin-bottom: 3rem;">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.2em;">More From The Vault</span>
            <h2 style="margin-top: 0.5rem; font-size: 1.75rem;">Continue exploring.</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
            @foreach($relatedBooks->take(3) as $index => $related)
            <a href="{{ route('book.show', $related->slug) }}" class="card-edge reveal reveal-delay-{{ $index + 1 }}" style="text-decoration: none;">
                @if($related->cover_image)
                    <img src="{{ asset('storage/' . $related->cover_image) }}" alt="{{ $related->title }}" class="card-image" loading="lazy">
                @else
                    <div class="card-image" style="background: var(--em-gunmetal); display: flex; align-items: center; justify-content: center;">
                        <span class="font-mono" style="color: var(--em-slate); font-size: 0.75rem;">{{ strtoupper(substr($related->title, 0, 2)) }}</span>
                    </div>
                @endif
                <div class="card-body">
                    @if($related->category)
                        <div class="card-category">{{ $related->category }}</div>
                    @endif
                    <h4 class="card-title">{{ $related->title }}</h4>
                </div>
            </a>
            @endforeach
        </div>

        <div class="reveal" style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('catalog.index') }}" class="btn btn-outline">BACK TO VAULT</a>
        </div>
    </div>
</section>
@endif

@endsection
