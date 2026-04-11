@extends('public.layouts.app')

@section('title', 'About Edge Mind — Forged, Not Born')
@section('meta_description', 'The origin of Edge Mind. Discover the system we built because motivation failed us.')

@section('content')

{{-- 1. HERO SECTION: "Forged, Not Born" --}}
<section id="about-hero" class="relative w-full min-h-[90vh] flex items-center justify-center pt-20 overflow-hidden bg-em-black">
    {{-- 3D Background --}}
    @include('public.components.about-3d-bg')

    <div class="container-edge relative z-10 w-full">
        <div class="max-w-4xl mx-auto text-center flex flex-col items-center">
            <div class="reveal mb-6">
                <span class="inline-flex items-center gap-2 border border-em-white/20 bg-em-white/5 backdrop-blur-sm shadow-inner text-em-white font-mono text-[10px] px-3 py-1 uppercase tracking-[0.2em]">
                    <span class="w-1.5 h-1.5 rounded-full bg-em-accent animate-pulse"></span> Origin Protocol
                </span>
            </div>
            
            <h1 class="reveal reveal-delay-1 text-5xl md:text-7xl lg:text-8xl font-primary font-bold text-em-white leading-[1.05] tracking-tight mb-8">
                Forged <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-accent to-em-accent-hot">Not Born.</span>
            </h1>
            
            <p class="reveal reveal-delay-2 text-lg font-mono text-em-silver max-w-2xl mx-auto leading-relaxed uppercase tracking-widest bg-em-charcoal inline-block px-4 py-2 border border-em-steel">
                We didn't start this to inspire you. <br/> We started this because we were breaking.
            </p>
        </div>
    </div>
</section>

{{-- 2. [NEW] THE BREAKING POINT --}}
<section class="py-32 bg-em-charcoal relative">
    <div class="container-edge">
        <div class="max-w-3xl mx-auto reveal">
            <h2 class="text-3xl font-bold mb-12">The Breaking Point.</h2>
            
            <div class="space-y-6 font-serif text-xl tracking-wide leading-relaxed text-em-silver border-l border-em-accent pl-8">
                <p>There was a specific night when the illusion shattered. It was 3:00 AM. I had just spent another four hours consuming 'productive' content instead of doing the actual work I needed to do.</p>
                <p>I realized that the self-help industry isn't designed to fix you. It's designed to keep you addicted to the <em>feeling</em> of fixing yourself.</p>
                <p>Motivation is a drug. It gives you a high, it wears off, and you crash harder. I didn't need another hit. I needed surgery.</p>
                <p class="text-em-white font-bold italic mt-10 text-2xl border-t border-em-steel pt-10">"I stopped trying to manage my feelings, and started engineering my constraints."</p>
            </div>
        </div>
    </div>
</section>

{{-- 3. THE EVOLUTION — 3 PHASES --}}
<section class="py-32 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="text-center mb-20 reveal">
            <span class="font-mono text-xs text-em-slate tracking-widest uppercase mb-2 block">System Evolution</span>
            <h2 class="text-4xl md:text-5xl font-bold text-em-white">How The Forge Was Built.</h2>
        </div>

        <div class="max-w-5xl mx-auto space-y-32">
            {{-- Phase 1 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center reveal">
                <div class="order-2 md:order-1 relative aspect-square bg-em-charcoal border border-em-steel flex items-center justify-center group overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjMWExYTFhIj48L3JlY3Q+CjxyZWN0IHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9IiMzMzMiPjwvcmVjdD4KPC9zdmc+')] opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 w-32 h-32 border-2 border-em-slate bg-em-black rotate-12 group-hover:rotate-0 transition-transform duration-700"></div>
                </div>
                <div class="order-1 md:order-2">
                    <div class="font-mono text-em-slate text-sm mb-3">Phase 01: The Noise</div>
                    <h3 class="text-3xl font-bold mb-6">Identify The Infection.</h3>
                    <p class="text-em-silver">We spent a year cataloging every point of friction, distraction, and cognitive leakage. We mapped exactly how technology and comfort degrade human willpower.</p>
                </div>
            </div>

            {{-- Phase 2 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center reveal reveal-delay-1">
                <div>
                    <div class="font-mono text-em-accent text-sm mb-3">Phase 02: The Framework</div>
                    <h3 class="text-3xl font-bold mb-6 text-em-accent">Structural Engineering.</h3>
                    <p class="text-em-silver">We stripped away everything related to 'feelings' and 'passion'. We built cold, hard rules. If XYZ happens, I execute ABC scenario. We created an operating system for human behavior under pressure.</p>
                </div>
                <div class="relative aspect-square bg-em-black border border-em-accent/40 flex items-center justify-center group overflow-hidden shadow-[0_0_30px_rgba(255,61,0,0.1)]">
                    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,61,0,0.1)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.1)_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                    <div class="relative z-10 w-40 h-40 border-2 border-em-accent flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                        <div class="w-20 h-20 bg-em-accent shadow-[0_0_20px_#FF3D00]"></div>
                    </div>
                </div>
            </div>

            {{-- Phase 3 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center reveal reveal-delay-2">
                <div class="order-2 md:order-1 relative aspect-square bg-em-ice/5 border border-em-ice/30 flex items-center justify-center group overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-em-ice/10 via-transparent to-em-ice/10 opacity-0 group-hover:opacity-100 transition-opacity duration-1000"></div>
                    <div class="relative z-10 w-32 h-32 rounded-full border-4 border-em-ice group-hover:scale-50 transition-transform duration-1000"></div>
                </div>
                <div class="order-1 md:order-2">
                    <div class="font-mono text-em-ice text-sm mb-3">Phase 03: Execution</div>
                    <h3 class="text-3xl font-bold mb-6 text-em-ice">The Clarity Engine.</h3>
                    <p class="text-em-silver">Once the system was installed, the results scaled automatically. The Edge Mind literature was compiled not as books to theoretically read, but as protocols to materially execute.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. [NEW] THE DOCTRINE (Manifesto Wall) --}}
<section class="py-40 bg-em-white text-em-black relative overflow-hidden">
    {{-- Floating 3D Slabs in Background (CSS) --}}
    <div class="absolute top-10 left-10 w-64 h-96 border-2 border-em-slate/10 bg-em-white rotate-[-5deg] shadow-[-20px_20px_60px_rgba(0,0,0,0.05)] z-0 pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-80 h-80 border-2 border-em-slate/10 bg-em-white rotate-[15deg] shadow-[20px_20px_60px_rgba(0,0,0,0.05)] z-0 pointer-events-none"></div>

    <div class="container-edge relative z-10">
        <div class="max-w-4xl mx-auto text-center mb-20 reveal">
            <h2 class="text-5xl md:text-7xl font-black mb-6">The Doctrine.</h2>
            <p class="font-mono text-sm tracking-[0.3em] uppercase">Built on concrete, not sand.</p>
        </div>

        <div class="space-y-20 max-w-5xl mx-auto">
            <div class="reveal border-l-8 border-em-black pl-10 py-6 bg-em-white shadow-2xl hover:translate-x-4 transition-transform duration-500">
                <p class="text-3xl md:text-4xl font-bold leading-tight">Comfort is a slow poison. We are biologically wired to seek it, and mentally engineered to rot in it.</p>
            </div>
            
            <div class="reveal reveal-delay-1 border-l-8 border-em-accent pl-10 py-6 bg-em-white shadow-2xl hover:translate-x-4 transition-transform duration-500 ml-0 md:ml-12">
                <p class="text-3xl md:text-4xl font-bold leading-tight">Structure does not limit freedom. Structure is the only thing that enables it.</p>
            </div>
            
            <div class="reveal reveal-delay-2 border-l-8 border-em-ice pl-10 py-6 bg-em-white shadow-2xl hover:translate-x-4 transition-transform duration-500 ml-0 md:ml-24">
                <p class="text-3xl md:text-4xl font-bold leading-tight">Clarity is not found through meditation. Clarity is earned through confrontation.</p>
            </div>
        </div>
    </div>
</section>

{{-- 5. CORE PRINCIPLES (Bento Grid) --}}
<section class="py-32 bg-em-charcoal relative">
    <div class="container-edge">
        <div class="text-center mb-20 reveal">
            <h2 class="text-4xl font-bold text-em-white">The Constraints.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto auto-rows-[minmax(200px,auto)]">
            <div class="col-span-1 md:col-span-2 bg-em-black border border-em-steel p-10 reveal group hover:border-em-accent transition-colors relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-10 font-black text-8xl text-em-white group-hover:scale-110 transition-transform">01</div>
                <h3 class="text-2xl font-bold mb-4 relative z-10 text-em-accent group-hover:text-em-white transition-colors">Kill The Alternatives</h3>
                <p class="text-em-silver relative z-10 max-w-lg">If you have a fallback plan, you will fall back. The system only works when you remove the escape hatches.</p>
            </div>

            <div class="col-span-1 bg-em-black border border-em-steel p-10 reveal reveal-delay-1 group hover:border-em-ice transition-colors relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-10 font-black text-8xl text-em-white group-hover:scale-110 transition-transform">02</div>
                <h3 class="text-2xl font-bold mb-4 relative z-10 text-em-ice group-hover:text-em-white transition-colors">Micro-Action</h3>
                <p class="text-em-silver relative z-10">Grand visions are useless. What did you execute in the last 60 minutes?</p>
            </div>

            <div class="col-span-1 bg-em-black border border-em-steel p-10 reveal reveal-delay-2 group hover:border-em-slate transition-colors relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-10 font-black text-8xl text-em-white group-hover:scale-110 transition-transform">03</div>
                <h3 class="text-2xl font-bold mb-4 relative z-10 text-em-white">Audit Defensiveness</h3>
                <p class="text-em-silver relative z-10">When you feel attacked by truth, lean into the attack.</p>
            </div>

            <div class="col-span-1 md:col-span-2 bg-em-black border border-em-steel p-10 reveal reveal-delay-3 group hover:border-em-accent-hot transition-colors relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-10 font-black text-8xl text-em-white group-hover:scale-110 transition-transform">04</div>
                <h3 class="text-2xl font-bold mb-4 relative z-10 text-em-accent-hot group-hover:text-em-white transition-colors">Momentum Over Quality</h3>
                <p class="text-em-silver relative z-10 max-w-lg">Doing something poorly today is exponentially better than doing it perfectly tomorrow. Perfectionism is just a sophisticated fear of execution.</p>
            </div>
        </div>
    </div>
</section>

{{-- 6. [NEW] NUMBERS THAT CUT (Impact Metrics) --}}
<section class="py-32 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="text-center reveal">
                <div class="text-6xl md:text-7xl font-black text-em-white mb-4 drop-shadow-[0_10px_20px_rgba(255,255,255,0.1)]">14K</div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest border-t border-em-steel pt-6 w-1/2 mx-auto">Minds Refactored</div>
            </div>
            
            <div class="text-center reveal reveal-delay-1">
                <div class="text-6xl md:text-7xl font-black text-em-accent mb-4 drop-shadow-[0_10px_20px_rgba(255,61,0,0.2)]">92%</div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest border-t border-em-accent/40 pt-6 w-1/2 mx-auto">Protocol Completion</div>
            </div>
            
            <div class="text-center reveal reveal-delay-2">
                <div class="text-6xl md:text-7xl font-black text-em-white mb-4 drop-shadow-[0_10px_20px_rgba(255,255,255,0.1)]">34</div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest border-t border-em-steel pt-6 w-1/2 mx-auto">Countries Active</div>
            </div>
            
            <div class="text-center reveal reveal-delay-3">
                <div class="text-6xl md:text-7xl font-black text-em-ice mb-4 drop-shadow-[0_10px_20px_rgba(0,212,255,0.2)]">2.8h</div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest border-t border-em-ice/40 pt-6 w-full mx-auto max-w-[120px]">Avg Daily Focus Gained</div>
            </div>
        </div>
    </div>
</section>

{{-- 7. THE COLLECTIVE --}}
<section class="py-32 bg-em-charcoal border-y border-em-steel">
    <div class="container-edge">
        <div class="text-center mb-20 reveal">
            <h2 class="text-4xl font-bold text-em-white mb-4">The Engineers.</h2>
            <p class="text-em-slate">We are architects of constraint.</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row gap-16 items-center mb-20 reveal">
                <div class="w-48 h-48 rounded-full bg-em-black border-2 border-em-accent flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-6xl text-em-accent">terminal</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Systems Architecture Unit</h3>
                    <p class="text-em-silver mb-6">We do not employ life coaches. We employ behavioral engineers. They do not care about your 'inner child'. They care about the structural integrity of your daily routine. We design protocols that are failure-proof through brute constraint.</p>
                    <span class="badge badge-accent">No Compromise</span>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse gap-16 items-center reveal reveal-delay-1">
                <div class="w-48 h-48 rounded-full bg-em-black border-2 border-em-ice flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-6xl text-em-ice">remove_red_eye</span>
                </div>
                <div class="text-left md:text-right">
                    <h3 class="text-2xl font-bold mb-2">Editorial Verification</h3>
                    <p class="text-em-silver mb-6">Our publishing arm serves a single function: extracting all philosophical fluff and leaving only operational mechanics. If a sentence does not directly lead to a change in action, it is deleted. Period.</p>
                    <span class="badge badge-ice">Signal Only</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 8. [NEW] THE STANDARD (Closing Statement) --}}
<section class="py-40 bg-em-black relative text-center">
    {{-- Grid Overlay --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,61,0,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.05)_1px,transparent_1px)] bg-[size:100px_100px] opacity-20 pointer-events-none z-0"></div>

    <div class="container-edge relative z-10">
        <h2 class="text-3xl md:text-5xl font-black mb-10 reveal">We don't ship until it cuts cleanly.</h2>
        <p class="text-em-slate max-w-xl mx-auto mb-14 font-mono text-sm leading-relaxed reveal reveal-delay-1">
            We are not building a library. We are building an armory.
        </p>
        
        <div class="reveal reveal-delay-2 flex flex-col sm:flex-row gap-5 justify-center">
            <a href="{{ route('evolve') }}" class="btn btn-primary">VIEW THE ARSENAL</a>
            <a href="{{ route('contact') }}" class="btn btn-outline border-em-steel hover:border-em-white">INITIATE CONTACT</a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endpush
