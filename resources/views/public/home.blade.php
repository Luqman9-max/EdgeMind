@extends('public.layouts.app')

@section('title', 'Edge Mind — Clarity Through Pressure')
@section('meta_description', 'Books that don\'t motivate. They confront. Curated self-development literature for the intellectually aggressive.')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section id="hero" style="min-height: 100vh; display: flex; align-items: center; padding-top: 72px;">
    <div class="container-edge" style="width: 100%;">
        <div style="display: grid; grid-template-columns: 65% 35%; gap: 3rem; align-items: center;">
            {{-- Text Side --}}
            <div>
                <div class="reveal" style="margin-bottom: 1.5rem;">
                    <span class="font-mono" style="font-size: 0.75rem; color: var(--em-ice); text-transform: uppercase; letter-spacing: 0.2em;">Edge Mind Presents</span>
                </div>
                <h1 class="reveal reveal-delay-1" style="margin-bottom: 1.5rem; letter-spacing: -0.03em;">
                    Your comfort zone<br>has an <span style="color: var(--em-accent);">expiration date.</span>
                </h1>
                <p class="reveal reveal-delay-2" style="font-size: 1.125rem; color: var(--em-silver); max-width: 520px; margin-bottom: 2.5rem;">
                    Books that don't motivate. They confront. Curated for minds that refuse to settle.
                </p>
                <div class="reveal reveal-delay-3">
                    <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg" id="hero-cta">ENTER THE VAULT</a>
                </div>
            </div>

            {{-- Visual Side — Geometric Abstract --}}
            <div class="reveal reveal-delay-2" style="display: flex; justify-content: center; align-items: center;">
                <div style="width: 280px; height: 380px; position: relative;">
                    {{-- Geometric pressure composition --}}
                    <div style="position: absolute; top: 0; right: 0; width: 200px; height: 200px; border: 1px solid var(--em-steel); transform: rotate(15deg);"></div>
                    <div style="position: absolute; bottom: 40px; left: 0; width: 160px; height: 160px; border: 2px solid var(--em-accent); transform: rotate(-10deg); opacity: 0.6;"></div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100px; height: 100px; background: var(--em-accent-glow); border: 1px solid var(--em-accent);"></div>
                    <div style="position: absolute; top: 30px; left: 20px; width: 60%; height: 1px; background: var(--em-ice); opacity: 0.3;"></div>
                    <div style="position: absolute; bottom: 80px; right: 20px; width: 1px; height: 40%; background: var(--em-ice); opacity: 0.3;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== PHILOSOPHY STRIP ===== --}}
<section id="philosophy" style="padding: 3rem 0; border-top: 1px solid var(--em-steel); border-bottom: 1px solid var(--em-steel);">
    <div class="container-edge" style="text-align: center;">
        <div class="reveal">
            <p class="font-mono" style="font-size: 1rem; color: var(--em-silver); letter-spacing: 0.05em;">
                <span style="color: var(--em-accent);">&gt;</span> Pressure doesn't break you. Comfort does.
            </p>
        </div>
        <div class="line-draw accent-line" style="margin: 1.5rem auto 0; display: block;"></div>
    </div>
</section>

{{-- ===== FEATURED BOOKS — THE ARSENAL ===== --}}
<section id="featured" class="section-padding">
    <div class="container-edge">
        <div class="reveal" style="margin-bottom: 3rem;">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.2em;">Selected Works</span>
            <h2 style="margin-top: 0.5rem;">The Arsenal.</h2>
        </div>

        @if($featuredBooks->count() > 0)
        <div style="display: grid; grid-template-columns: 1.2fr 1fr 1fr; gap: 1.5rem; margin-bottom: 3rem;">
            @foreach($featuredBooks as $index => $book)
            <a href="{{ route('book.show', $book->slug) }}" class="card-edge reveal reveal-delay-{{ $index + 1 }}" style="text-decoration: none;">
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="card-image">
                @else
                    <div class="card-image" style="background: var(--em-gunmetal); display: flex; align-items: center; justify-content: center;">
                        <span class="font-mono" style="color: var(--em-slate); font-size: 0.75rem;">NO COVER</span>
                    </div>
                @endif
                <div class="card-body">
                    @if($book->category)
                        <div class="card-category">{{ $book->category }}</div>
                    @endif
                    <h4 class="card-title">{{ $book->title }}</h4>
                    @if($book->is_free)
                        <span class="badge badge-ice">FREE</span>
                    @elseif($book->price)
                        <div class="card-price">${{ number_format($book->price, 2) }}</div>
                    @endif
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div style="text-align: center; padding: 4rem 0; color: var(--em-slate);">
            <p class="font-mono" style="font-size: 0.85rem;">The arsenal is being loaded. Check back soon.</p>
        </div>
        @endif

        <div class="reveal" style="text-align: center;">
            <a href="{{ route('evolve') }}" class="btn btn-outline">EXPLORE ALL →</a>
        </div>
    </div>
</section>

{{-- ===== VALUE PROPOSITION — WHY EDGE MIND ===== --}}
<section id="value" class="section-padding" style="background: var(--em-charcoal);">
    <div class="container-edge">
        <div class="reveal" style="text-align: center; margin-bottom: 4rem;">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.2em;">The Edge</span>
            <h2 style="margin-top: 0.5rem;">Why Edge Mind.</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 3rem;">
            {{-- Precision --}}
            <div class="reveal reveal-delay-1">
                <div class="accent-line" style="margin-bottom: 1.5rem;"></div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.75rem;">Precision</h3>
                <p style="font-size: 0.9rem; color: var(--em-slate);">Curated, not collected. Every title is selected for maximum impact. No filler. No fluff.</p>
            </div>

            {{-- Pressure --}}
            <div class="reveal reveal-delay-2">
                <div class="accent-line" style="margin-bottom: 1.5rem;"></div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.75rem;">Pressure</h3>
                <p style="font-size: 0.9rem; color: var(--em-slate);">These books challenge your assumptions, not validate them. Growth requires discomfort.</p>
            </div>

            {{-- Progress --}}
            <div class="reveal reveal-delay-3">
                <div class="accent-line" style="margin-bottom: 1.5rem;"></div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.75rem;">Progress</h3>
                <p style="font-size: 0.9rem; color: var(--em-slate);">Measurable change through intentional reading. Every book is a step forward, not a detour.</p>
            </div>
        </div>
    </div>
</section>

{{-- ===== PULL QUOTE — THE BLADE ===== --}}
<section id="quote" class="section-padding">
    <div class="container-narrow" style="text-align: center;">
        <div class="reveal">
            <p style="font-family: var(--font-primary); font-size: clamp(1.5rem, 3.5vw, 2.5rem); color: var(--em-white); line-height: 1.3; font-weight: 600;">
                "The difference between who you are and who you could be is one <span style="color: var(--em-accent);">decision</span>."
            </p>
        </div>
        <div class="line-draw accent-line" style="margin: 2rem auto 0; display: block;"></div>
    </div>
</section>

{{-- ===== NEWSLETTER — STAY SHARP ===== --}}
<section id="newsletter" class="section-padding" style="background: var(--em-charcoal);">
    <div class="container-narrow" style="text-align: center;">
        <div class="reveal">
            <h2 style="margin-bottom: 0.75rem;">Stay sharp.</h2>
            <p style="color: var(--em-slate); margin-bottom: 2rem;">New releases. No spam. Pure signal.</p>
        </div>

        <div class="reveal reveal-delay-1" x-data="{ email: '', message: '', submitted: false, error: false }">
            <form @submit.prevent="
                fetch('{{ route('newsletter.subscribe') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ email: email })
                })
                .then(r => r.json().then(data => ({ ok: r.ok, data })))
                .then(({ ok, data }) => {
                    message = data.message;
                    submitted = ok;
                    error = !ok;
                })
                .catch(() => { message = 'System error. Try again.'; error = true; })
            " style="display: flex; gap: 0.75rem; max-width: 480px; margin: 0 auto;" x-show="!submitted">
                <input type="email"
                       x-model="email"
                       class="input-edge"
                       placeholder="your@email.com"
                       required
                       id="newsletter-email"
                       style="flex: 1;">
                <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
            </form>

            <div x-show="submitted" x-cloak style="padding: 1rem;">
                <p class="font-mono" style="color: var(--em-ice);" x-text="message"></p>
            </div>
            <div x-show="error && !submitted" x-cloak style="padding: 0.5rem;">
                <p style="color: var(--em-accent); font-size: 0.85rem;" x-text="message"></p>
            </div>
        </div>

        <div class="reveal reveal-delay-2" style="margin-top: 1.5rem;">
            <p class="font-mono" style="font-size: 0.7rem; color: var(--em-steel);">We don't spam. That's weak.</p>
        </div>
    </div>
</section>

@endsection
