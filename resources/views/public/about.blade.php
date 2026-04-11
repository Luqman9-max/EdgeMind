@extends('public.layouts.app')

@section('title', 'About — Edge Mind')
@section('meta_description', 'Built from pressure. Edge Mind exists to cut through the noise of the self-development market with surgically curated book recommendations.')

@section('content')

{{-- ===== HERO — THE ORIGIN ===== --}}
<section id="about-hero" class="section-padding" style="padding-top: 10rem;">
    <div class="container-edge">
        <div style="max-width: 720px;">
            <div class="reveal">
                <span class="font-mono" style="font-size: 0.7rem; color: var(--em-ice); text-transform: uppercase; letter-spacing: 0.2em;">The Origin</span>
            </div>
            <h1 class="reveal reveal-delay-1" style="margin-top: 0.75rem; margin-bottom: 1.5rem;">
                Built from <span style="color: var(--em-accent);">pressure.</span>
            </h1>
            <p class="reveal reveal-delay-2" style="font-size: 1.125rem; color: var(--em-silver); line-height: 1.8;">
                Edge Mind exists because the self-development market is flooded with noise. Generic advice. Rehashed ideas. Feel-good filler that changes nothing. We cut through it. Every book in our vault is selected not because it's popular — but because it works.
            </p>
        </div>

        {{-- Diagonal line composition --}}
        <div class="reveal reveal-delay-3" style="margin-top: 3rem;">
            <div style="width: 100%; height: 1px; background: linear-gradient(90deg, var(--em-accent), transparent); opacity: 0.5;"></div>
        </div>
    </div>
</section>

{{-- ===== PHILOSOPHY — THE FILTER ===== --}}
<section id="philosophy" class="section-padding" style="background: var(--em-charcoal);">
    <div class="container-edge">
        <div style="display: grid; grid-template-columns: 55% 45%; gap: 4rem; align-items: start;">
            {{-- Left: Big statement --}}
            <div class="reveal">
                <h2 style="font-size: clamp(1.75rem, 3vw, 2.5rem); line-height: 1.2;">
                    We don't recommend books. We <span style="color: var(--em-accent);">prescribe</span> them.
                </h2>
            </div>

            {{-- Right: Criteria --}}
            <div class="reveal reveal-delay-1">
                <span class="font-mono" style="font-size: 0.7rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.2em; display: block; margin-bottom: 1.5rem;">Curation Criteria</span>

                <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                    <div style="padding-left: 1rem; border-left: 2px solid var(--em-accent);">
                        <p style="color: var(--em-white); font-size: 0.95rem; margin: 0;">Must challenge at least one deeply held assumption</p>
                    </div>
                    <div style="padding-left: 1rem; border-left: 2px solid var(--em-steel);">
                        <p style="color: var(--em-white); font-size: 0.95rem; margin: 0;">Must provide actionable frameworks, not abstract theory</p>
                    </div>
                    <div style="padding-left: 1rem; border-left: 2px solid var(--em-steel);">
                        <p style="color: var(--em-white); font-size: 0.95rem; margin: 0;">Must have measurable impact on decision-making</p>
                    </div>
                    <div style="padding-left: 1rem; border-left: 2px solid var(--em-steel);">
                        <p style="color: var(--em-white); font-size: 0.95rem; margin: 0;">Must survive the test of re-reading</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== THE CURATOR ===== --}}
<section id="curator" class="section-padding">
    <div class="container-edge">
        <div style="display: grid; grid-template-columns: 40% 60%; gap: 4rem; align-items: center;">
            {{-- Photo placeholder --}}
            <div class="reveal">
                <div style="aspect-ratio: 3/4; background: var(--em-gunmetal); border: 1px solid var(--em-accent); display: flex; align-items: center; justify-content: center;">
                    <span class="font-mono" style="color: var(--em-slate); font-size: 0.75rem;">CURATOR PHOTO</span>
                </div>
            </div>

            {{-- Bio --}}
            <div>
                <div class="reveal">
                    <span class="font-mono" style="font-size: 0.7rem; color: var(--em-ice); text-transform: uppercase; letter-spacing: 0.2em;">The Mind Behind</span>
                </div>
                <h2 class="reveal reveal-delay-1" style="margin-top: 0.75rem; margin-bottom: 1.5rem;">The Curator.</h2>
                <p class="reveal reveal-delay-2" style="font-size: 1rem; color: var(--em-silver); line-height: 1.8; margin-bottom: 1.5rem;">
                    Edge Mind was founded on a simple belief: the right book at the right time changes everything. Not gradually. Immediately. We don't sell motivation — we sell the tools to dismantle your excuses and rebuild from stronger foundations.
                </p>
                <div class="reveal reveal-delay-3">
                    <p class="font-mono" style="color: var(--em-accent); font-size: 0.85rem;">"Clarity isn't given. It's earned."</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== VALUES — THE CODE ===== --}}
<section id="values" class="section-padding" style="background: var(--em-charcoal);">
    <div class="container-edge">
        <div class="reveal" style="margin-bottom: 4rem;">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.2em;">The Code</span>
            <h2 style="margin-top: 0.5rem;">What we stand for.</h2>
        </div>

        <div style="display: flex; flex-direction: column; gap: 3rem; max-width: 640px;">
            <div class="reveal reveal-delay-1" style="display: flex; gap: 2rem; align-items: baseline;">
                <span style="font-family: var(--font-primary); font-size: 2.5rem; font-weight: 700; color: var(--em-accent); line-height: 1;">01</span>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Discipline</h3>
                    <p style="color: var(--em-slate); font-size: 0.9rem; margin: 0;">Consistency isn't optional. It's the price of entry.</p>
                </div>
            </div>

            <div class="reveal reveal-delay-2" style="display: flex; gap: 2rem; align-items: baseline;">
                <span style="font-family: var(--font-primary); font-size: 2.5rem; font-weight: 700; color: var(--em-accent); line-height: 1;">02</span>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Clarity</h3>
                    <p style="color: var(--em-slate); font-size: 0.9rem; margin: 0;">We strip away noise. What's left is what matters.</p>
                </div>
            </div>

            <div class="reveal reveal-delay-3" style="display: flex; gap: 2rem; align-items: baseline;">
                <span style="font-family: var(--font-primary); font-size: 2.5rem; font-weight: 700; color: var(--em-accent); line-height: 1;">03</span>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Edge</h3>
                    <p style="color: var(--em-slate); font-size: 0.9rem; margin: 0;">Comfort is regression disguised as stability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== CTA STRIP ===== --}}
<section id="about-cta" class="section-padding">
    <div class="container-narrow" style="text-align: center;">
        <div class="reveal">
            <h2 style="margin-bottom: 1rem;">Ready to challenge yourself?</h2>
            <p style="color: var(--em-slate); margin-bottom: 2rem;">Access the vault. Choose your weapon.</p>
            <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg">EXPLORE THE VAULT</a>
        </div>
    </div>
</section>

@endsection
