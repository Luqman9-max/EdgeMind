@extends('public.layouts.app')

@section('title', 'Edge Mind — Clarity Through Pressure')
@section('meta_description', 'Books that don\'t motivate. They confront. Curated self-development literature for the intellectually aggressive.')

@section('content')

{{-- 1. HERO SECTION: "The Fracture" --}}
<section id="hero" class="relative w-full min-h-screen flex items-center justify-start pt-20 overflow-hidden bg-em-black">
    {{-- 3D Background --}}
    @include('public.components.hero-3d-bg')

    <div class="container-edge relative z-10 w-full pl-0 md:pl-8">
        <div class="max-w-4xl text-left flex flex-col items-start">
            <div class="reveal mb-6">
                <span class="inline-block border-l-4 border-em-accent bg-em-black text-em-white font-mono text-xs px-4 py-2 uppercase tracking-[0.2em] glitch-text" data-text="SYSTEM OVERRIDE INITIATED">
                    SYSTEM OVERRIDE INITIATED
                </span>
            </div>
            
            <h1 class="reveal reveal-delay-1 text-5xl md:text-7xl lg:text-8xl font-primary font-black text-em-white leading-[0.9] tracking-tighter mb-10 drop-shadow-2xl uppercase">
                Your Comfort<br />
                Zone Is A<br />
                <span class="text-em-accent shake-subtle inline-block">Poison.</span>
            </h1>
            
            <p class="word-stagger text-left text-lg md:text-2xl font-body text-em-silver max-w-2xl mb-16 leading-relaxed">
                Why does your life feel stuck? Because you've built a prison of convenience. We don't sell motivation here. We build systems that break you out.
            </p>
            
            <div class="reveal reveal-delay-2 flex flex-col sm:flex-row items-start justify-start gap-8">
                <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg shadow-[0_0_40px_rgba(255,61,0,0.3)] shake-subtle transition-transform duration-300 transform hover:scale-105">
                    ENTER THE ARSENAL
                </a>
                <a href="#diagnostic" class="font-mono text-xs text-em-slate hover:text-em-white transition-colors tracking-widest uppercase flex items-center gap-4 mt-4 sm:mt-0">
                    <span class="w-12 h-[1px] bg-em-accent pulse-glow"></span> OR DIAGNOSE THE FRACTURE
                </a>
            </div>
        </div>
    </div>
    
    {{-- Scroll Indicator - EKG style --}}
    <div class="absolute bottom-8 left-8 flex items-center gap-4 z-10 opacity-60">
        <div class="w-16 h-px bg-em-accent"></div>
        <span class="font-mono text-[10px] text-em-white uppercase tracking-widest animate-pulse">Scroll to Initiate</span>
    </div>
</section>

{{-- 2. THE UNCOMFORTABLE TRUTH --}}
<section id="truth" class="py-32 bg-em-black relative overflow-hidden">
    <div class="scan-line-anim absolute inset-0 opacity-20 pointer-events-none z-0"></div>
    <div class="container-edge relative z-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="slam-left">
                <p class="font-mono text-em-accent text-sm tracking-widest uppercase mb-6">> Diagnostic_01</p>
                <h2 class="text-5xl md:text-6xl font-black mb-12 uppercase leading-none tracking-tight">The Signal<br /> Decay.</h2>
                <div class="text-em-silver text-lg leading-relaxed">
                    <div class="space-y-6 mb-12 word-stagger">
                        <p>You have the potential. You know what you need to do. Every night you promise yourself tomorrow will be different. Every morning, the cycle repeats.</p>
                        <p>You are fighting a war against your own biology. Your brain is engineered for comfort, minimum viable effort, and cheap dopamine.</p>
                    </div>
                </div>
                <!-- Sliding Blockquote -->
                <blockquote class="border-draw border-l-4 border-em-accent bg-em-gunmetal p-6 mt-8 relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-0 h-full bg-em-accent-glow transition-all duration-700 group-hover:w-full z-0"></div>
                    <p class="relative z-10 text-em-white font-medium text-xl italic m-0">Motivation is a feeling. It evaporates. What you need is structure, pressure, and absolute clarity.</p>
                </blockquote>
            </div>
            
            <div class="slam-right flex flex-col justify-center items-end">
                {{-- Abstract Degradation Visualization --}}
                <div class="relative w-full max-w-sm aspect-square bg-em-charcoal border border-em-steel p-8 flex flex-col justify-center gap-4 group hover:border-em-accent transition-colors">
                    <div class="absolute top-4 right-4 text-em-accent font-mono text-[10px]">STATUS: DEGRADING</div>
                    <!-- Sine wave simulation via CSS -->
                    <div class="w-full h-2 bg-em-white opacity-80 animate-pulse"></div>
                    <div class="w-4/5 h-2 bg-em-silver opacity-60 transform translate-x-4"></div>
                    <div class="w-3/5 h-2 bg-em-slate opacity-40 transform translate-x-8"></div>
                    <div class="w-full h-px bg-em-accent my-4 shake-subtle shadow-[0_0_15px_rgba(255,61,0,0.5)]"></div>
                    <div class="w-full h-8 flex gap-2 overflow-hidden opacity-30 group-hover:opacity-100 transition-opacity">
                        <div class="w-2 h-full bg-em-accent"></div>
                        <div class="w-6 h-full bg-em-accent transform translate-y-2"></div>
                        <div class="w-1 h-full bg-em-accent transform -translate-y-4"></div>
                        <div class="w-8 h-full bg-em-accent transform translate-y-1"></div>
                        <div class="w-3 h-full bg-em-accent"></div>
                        <div class="flex-1 border-b border-dashed border-em-accent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. THE COST OF STAYING COMFORTABLE --}}
<section id="cost" class="py-32 bg-em-charcoal relative border-y border-em-steel overflow-hidden">
    {{-- Data Stream Background --}}
    <div class="absolute top-0 left-0 w-[200%] h-8 bg-em-black border-b border-em-steel flex items-center overflow-hidden z-0">
        <div class="font-mono text-[10px] text-em-accent whitespace-nowrap opacity-30 flex animate-[scanSweep_20s_linear_infinite]" style="animation-direction: alternate;">
            DATA FRAGMENT 0192 // LOSS DETECTED // COMPOUND DECAY ACTIVE // VALUE EXTRACTED 0.00 // TIME DILATION 4.2H // DATA FRAGMENT 0192 // LOSS DETECTED // COMPOUND DECAY ACTIVE // VALUE EXTRACTED 0.00 // TIME DILATION 4.2H // 
        </div>
    </div>

    <div class="container-edge relative z-10 pt-16">
        <div class="mb-20 slam-down flex flex-col items-center">
            <h2 class="text-4xl md:text-6xl font-black text-em-white mb-6 uppercase tracking-tight text-center">The Mathematics of <br class="md:hidden"/><span class="text-em-accent">Regret.</span></h2>
            <p class="text-lg text-em-silver max-w-2xl text-center">Look at the raw data. Inaction is not neutral. It is actively destroying your baseline.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="card-edge bg-em-black/80 backdrop-blur-md p-10 slam-left border-t-4 border-t-em-steel hover:border-t-em-accent transition-colors group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-em-accent opacity-0 group-hover:opacity-10 blur-2xl transition-opacity"></div>
                <div class="font-mono text-em-slate text-xs mb-6 uppercase tracking-widest flex items-center justify-between">
                    <span>Lost Hours/Day</span>
                    <span class="w-2 h-2 bg-em-slate rounded-full animate-pulse group-hover:bg-em-accent"></span>
                </div>
                <div class="text-6xl md:text-7xl font-black text-em-white mb-6 font-primary group-hover:text-em-accent transition-colors">
                    <span class="count-up" data-count="4.2">0</span>
                </div>
                <p class="text-sm text-em-silver leading-relaxed border-t border-em-steel pt-6 relative before:absolute before:top-0 before:left-0 before:w-0 before:h-px before:bg-em-accent group-hover:before:w-full before:transition-all before:duration-700">
                    Average time actively wasted on cheap dopamine, scrolling, and indecision patterns.
                </p>
            </div>
            
            <div class="card-edge bg-em-black/80 backdrop-blur-md p-10 slam-down border-t-4 border-t-em-steel hover:border-t-em-accent transition-colors group relative overflow-hidden" style="transition-delay: 100ms;">
                <div class="absolute top-0 right-0 w-16 h-16 bg-em-accent opacity-0 group-hover:opacity-10 blur-2xl transition-opacity"></div>
                <div class="font-mono text-em-slate text-xs mb-6 uppercase tracking-widest flex items-center justify-between">
                    <span>Yearly Deficit (Days)</span>
                    <span class="w-2 h-2 bg-em-slate rounded-full animate-pulse group-hover:bg-em-accent"></span>
                </div>
                <div class="text-6xl md:text-7xl font-black text-em-white mb-6 font-primary group-hover:text-em-accent transition-colors">
                    <span class="count-up" data-count="63">0</span>
                </div>
                <p class="text-sm text-em-silver leading-relaxed border-t border-em-steel pt-6 relative before:absolute before:top-0 before:left-0 before:w-0 before:h-px before:bg-em-accent group-hover:before:w-full before:transition-all before:duration-700">
                    Over two full months of waking life surrendered to comfort every single year.
                </p>
            </div>
            
            <div class="card-edge bg-em-gunmetal p-10 slam-right border-t-4 border-t-em-accent shadow-[0_0_40px_rgba(255,61,0,0.1)] group relative overflow-hidden" style="transition-delay: 200ms;">
                <div class="absolute inset-0 bg-em-accent mix-blend-overlay opacity-0 group-hover:opacity-10 transition-opacity"></div>
                <div class="font-mono text-em-accent text-xs mb-6 uppercase tracking-widest flex items-center justify-between">
                    <span>Compound Effect</span>
                    <span class="w-2 h-2 bg-em-accent rounded-full shake-subtle"></span>
                </div>
                <div class="text-6xl md:text-7xl font-black text-em-white mb-6 font-primary group-hover:text-em-accent">
                    <span class="count-up glitch-text" data-count="100" data-infinite="true" data-text="Zero.">0</span>
                </div>
                <p class="text-sm text-em-white leading-relaxed border-t border-em-accent pt-6 relative before:absolute before:top-0 before:left-0 before:w-0 before:h-px before:bg-em-white group-hover:before:w-full before:transition-all before:duration-700">
                    The trajectory of a life lived without intentional pressure. Total systemic stagnation.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 4. [NEW] THE EDGE MIND DIAGNOSTIC --}}
<section id="diagnostic" class="py-32 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="max-w-3xl mx-auto bg-em-gunmetal border border-em-steel rounded-sm p-10 md:p-16 slam-down shadow-[0_20px_50px_rgba(0,0,0,0.5)] relative group hover:border-em-slate transition-colors duration-500">
            {{-- Abstract scanline --}}
            <div class="absolute inset-0 bg-[linear-gradient(transparent_50%,rgba(0,212,255,0.05)_50%)] bg-[length:100%_4px] pointer-events-none"></div>
            
            <div class="relative z-10" x-data="{ step: 0, answers: [], result: null, bootText: 'INITIALIZING DIAGNOSTIC PROTOCOL...', init() { setTimeout(() => { this.step = 1; }, 2000); } }">
                <div class="flex items-center justify-between mb-8 border-b border-em-steel pb-4">
                    <h3 class="font-mono text-em-ice text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 bg-em-ice shadow-[0_0_10px_#00D4FF] animate-pulse"></span> Active Diagnostic</h3>
                    <div class="font-mono text-xs text-em-slate" x-show="step > 0">Phase <span x-text="step"></span>/3</div>
                </div>

                {{-- Boot Sequence --}}
                <div x-show="step === 0" class="py-20 text-center flex flex-col items-center">
                    <span class="material-symbols-outlined text-em-ice text-5xl mb-6 animate-spin" style="animation-duration: 3s;">settings</span>
                    <div class="font-mono text-sm text-em-ice typewriter tracking-widest" x-text="bootText"></div>
                </div>

                {{-- QA 1 --}}
                <div x-show="step === 1" x-transition:enter="transition ease-out duration-500 transform" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1" x-cloak>
                    <h4 class="text-2xl md:text-3xl font-bold mb-16 text-center">What dictates your first hour awake?</h4>
                    <div class="space-y-4">
                        <button @click="answers.push('device'); step = 2" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-accent hover:bg-em-black transition-all group active:scale-95">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-accent">>_</span> Unconscious scrolling / Notifications
                        </button>
                        <button @click="answers.push('intent'); step = 2" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-ice hover:bg-em-black transition-all group active:scale-95">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-ice">>_</span> Deliberate structure / Intentional action
                        </button>
                    </div>
                </div>

                {{-- QA 2 --}}
                <div x-show="step === 2" x-transition:enter="transition ease-out duration-500 transform" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1" x-cloak>
                    <h4 class="text-2xl md:text-3xl font-bold mb-16 text-center">When a task becomes difficult, you typically:</h4>
                    <div class="space-y-4">
                        <button @click="answers.push('avoid'); step = 3" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-accent hover:bg-em-black transition-all group active:scale-95">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-accent">>_</span> Find a distraction / Justify delaying it
                        </button>
                        <button @click="answers.push('confront'); step = 3" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-ice hover:bg-em-black transition-all group active:scale-95">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-ice">>_</span> Lean into the friction / Push through
                        </button>
                    </div>
                </div>

                {{-- QA 3 --}}
                <div x-show="step === 3" x-transition:enter="transition ease-out duration-500 transform" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1" x-cloak>
                    <h4 class="text-2xl md:text-3xl font-bold mb-16 text-center">Your goals for the last 6 months have:</h4>
                    <div class="space-y-4">
                        <button @click="answers.push('stagnant'); step = 4; result = 'FRAGILE SYSTEM'" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-accent hover:bg-em-black transition-all group active:scale-95">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-accent">>_</span> Remained mostly ideas. Minimal execution.
                        </button>
                        <button @click="answers.push('executing'); step = 4; result = 'LACK OF SCALE'" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-ice hover:bg-em-black transition-all group active:scale-95">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-ice">>_</span> Materialized, but I'm hitting a ceiling.
                        </button>
                    </div>
                </div>

                {{-- Result --}}
                <div x-show="step === 4" x-transition:enter="transition ease-out duration-700 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-cloak class="text-center py-12 flex flex-col items-center">
                    <div class="font-mono text-xs text-em-slate tracking-widest uppercase mb-8">Analysis Complete</div>
                    <div class="text-xl text-em-silver mb-2">Primary Fracture Point:</div>
                    <div class="text-4xl md:text-5xl font-black text-em-accent mb-10 glitch-text" x-text="result" :data-text="result"></div>
                    <p class="text-center text-em-silver mb-12 max-w-md mx-auto leading-relaxed">Your operating system has vulnerabilities. You need structural architecture, not more motivation.</p>
                    <a href="{{ route('evolve') }}" class="btn btn-outline border-em-accent text-em-accent hover:bg-em-accent hover:text-em-black px-8 py-4 uppercase tracking-widest">Acquire Protocol</a>
                </div>
                
                {{-- Loading Bar --}}
                <div class="mt-8 h-1 bg-em-black w-full overflow-hidden" x-show="step > 0 && step < 4">
                    <div class="h-full bg-em-ice transition-all duration-500 ease-out" :style="`width: ${(step/3)*100}%`"></div>
                </div>
            </div>
            
            {{-- Ambient particles --}}
            <div class="absolute -top-4 -right-4 w-32 h-32 bg-em-ice/5 blur-2xl rounded-full"></div>
            <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-em-accent/5 blur-2xl rounded-full"></div>
        </div>
    </div>
</section>

{{-- 5. PRODUCT SHOWCASE: "The Arsenal" --}}
<section id="arsenal" class="py-32 bg-em-charcoal border-y border-em-steel overflow-hidden">
    <div class="container-edge relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-[500px] bg-em-black z-0 opacity-50 blur-[100px] rounded-full"></div>
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 relative z-10 slam-down">
            <div>
                <span class="font-mono text-xs text-em-slate tracking-widest uppercase block mb-2 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-em-ice rounded-full animate-pulse"></span> Inventory
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-em-white uppercase tracking-tight">The Arsenal.</h2>
            </div>
            <a href="{{ route('evolve') }}" class="btn btn-ghost mt-4 md:mt-0 font-mono text-xs hidden md:flex hover:text-em-accent transition-colors">VIEW ALL MODULES →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10">
            @forelse($featuredBooks as $index => $book)
            <a href="{{ route('book.show', $book->slug) }}" class="card-edge bg-em-gunmetal group reveal reveal-delay-{{ $index % 4 }} relative hover:-translate-y-3 shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_40px_rgba(255,61,0,0.15)] transition-all duration-500">
                <div class="absolute bottom-0 left-0 w-full h-1 bg-em-accent transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-20"></div>
                
                <div class="relative overflow-hidden aspect-[3/4] bg-em-black">
                    @if($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105 opacity-60 group-hover:opacity-100 mix-blend-luminosity hover:mix-blend-normal filter grayscale group-hover:grayscale-0">
                    @else
                        <div class="w-full h-full flex flex-col items-center justify-center border-2 border-dashed border-em-steel p-6 text-center group-hover:border-em-accent transition-colors">
                            <span class="material-symbols-outlined text-em-steel text-4xl mb-2 group-hover:text-em-accent transition-colors">book</span>
                            <span class="font-mono text-em-slate text-[10px]">DATA MISSING</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-em-gunmetal via-transparent to-transparent opacity-100"></div>
                    
                    {{-- Classified Overlay --}}
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-100 group-hover:opacity-0 transition-opacity duration-500">
                        <div class="border-2 border-em-accent text-em-accent font-primary font-black text-2xl uppercase tracking-widest px-4 py-1 transform -rotate-12 bg-em-black/50 backdrop-blur-sm">
                            Classified
                        </div>
                    </div>
                </div>
                
                <div class="p-8 border-t border-em-steel relative bg-em-gunmetal">
                    <div class="font-mono text-[10px] text-em-ice mb-2 uppercase tracking-widest flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-em-ice rounded-full"></span> {{ $book->category ?? 'Framework' }}
                    </div>
                    <h3 class="text-lg font-bold text-em-white mb-2 leading-tight uppercase group-hover:text-em-accent transition-colors">{{ $book->title }}</h3>
                    <div class="flex items-center justify-between mt-4">
                        @if($book->is_free)
                            <span class="text-em-white font-mono text-sm border-b border-em-white pb-0.5">FREE</span>
                        @else
                            <span class="text-em-accent font-mono text-sm">${{ number_format($book->price, 2) }}</span>
                        @endif
                        <span class="material-symbols-outlined text-em-slate text-sm group-hover:text-em-accent transition-colors transform group-hover:translate-x-1 duration-300">east</span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full py-32 text-center border border-em-steel border-dashed relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-em-accent/10 to-transparent w-[200%] animate-[scanSweep_3s_linear_infinite]"></div>
                <p class="font-mono text-em-slate text-sm uppercase tracking-widest">Arsenal Synchronizing. No Modules Detected.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-12 text-center md:hidden reveal">
            <a href="{{ route('evolve') }}" class="btn btn-outline w-full justify-center text-em-silver hover:text-em-accent hover:border-em-accent">VIEW ALL MODULES</a>
        </div>
    </div>
</section>

{{-- 6. [NEW] THE CLARITY PROTOCOL (Before / After Journey) --}}
<section class="py-32 bg-em-black relative overflow-hidden" id="protocol-container">
    <div class="container-edge relative z-10">
        <div class="text-center mb-24 slam-down">
            <h2 class="text-4xl md:text-6xl font-black mb-6 uppercase tracking-tight text-em-white">Phase Transition.</h2>
            <p class="text-lg text-em-silver max-w-2xl mx-auto leading-relaxed word-stagger">This is not motivation. This is the physiological transfer from chaos to order.</p>
        </div>

        <div class="relative max-w-5xl mx-auto">
            {{-- Connecting Line --}}
            <div class="hidden md:block absolute top-[80px] left-[15%] right-[15%] h-0.5 bg-gradient-to-r from-em-steel via-em-accent to-em-ice z-0 line-draw"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10 text-center">
                {{-- State 1: Chaos --}}
                <div class="slam-left">
                    <div class="w-40 h-40 mx-auto rounded-none border-2 border-em-steel bg-em-charcoal flex items-center justify-center mb-10 relative group transform rotate-12 hover:rotate-0 transition-transform duration-500">
                        <div class="absolute inset-2 border border-em-steel transform -rotate-12"></div>
                        <div class="absolute inset-4 border border-dashed border-em-steel/50 transform rotate-45"></div>
                        <span class="material-symbols-outlined text-4xl text-em-slate glitch-text" data-text="blur_on">blur_on</span>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-em-white uppercase tracking-widest">1. Fracture</h4>
                    <p class="text-sm text-em-slate max-w-[280px] mx-auto leading-relaxed">Mental fog. Reactionary behavior. Living in the defensive position against notifications and impulses.</p>
                </div>

                {{-- State 2: Forge --}}
                <div class="slam-down" style="transition-delay: 150ms;">
                    <div class="w-40 h-40 mx-auto rounded-none border-2 border-em-accent bg-em-gunmetal flex items-center justify-center mb-10 relative group shadow-[0_0_30px_rgba(255,61,0,0.15)] transform rotate-45 hover:rotate-0 transition-all duration-500">
                        <div class="absolute inset-0 border border-em-accent transform rotate-12 scale-90 opacity-50 group-hover:rotate-0 group-hover:scale-100 transition-transform duration-500"></div>
                        <span class="material-symbols-outlined text-4xl text-em-accent transform -rotate-45 group-hover:rotate-0 transition-transform duration-500">engineering</span>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-em-white uppercase tracking-widest">2. The Forge</h4>
                    <p class="text-sm text-em-slate max-w-[280px] mx-auto leading-relaxed">Installing the architecture. Deliberate discomfort. Removing destructive loops and establishing the baseline.</p>
                </div>

                {{-- State 3: Clarity --}}
                <div class="slam-right" style="transition-delay: 300ms;">
                    <div class="w-40 h-40 mx-auto rounded-full border-2 border-em-ice bg-em-charcoal flex items-center justify-center mb-10 relative group shadow-[0_0_40px_rgba(0,212,255,0.2)] hover:shadow-[0_0_60px_rgba(0,212,255,0.4)] transition-shadow duration-500">
                        <div class="absolute inset-2 rounded-full border border-em-ice opacity-50 pulse-glow"></div>
                        <span class="material-symbols-outlined text-4xl text-em-ice">change_history</span>
                    </div>
                    <h4 class="font-bold text-xl mb-4 text-em-white uppercase tracking-widest">3. Clarity</h4>
                    <p class="text-sm text-em-slate max-w-[280px] mx-auto leading-relaxed">Automatic execution. Cold focus. The noise disappears because the signal is too strong.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 7. WHY EVERYTHING ELSE FAILED (Motivation Trap) --}}
<section class="py-32 bg-em-charcoal border-y border-em-steel overflow-hidden relative">
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] opacity-30 z-0 pointer-events-none"></div>

    <div class="container-edge relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="slam-left bg-em-black border border-em-steel p-8 lg:p-12 relative overflow-hidden group hover:border-em-accent transition-colors duration-500">
                <div class="absolute top-0 left-0 w-full h-1 bg-em-accent transform origin-left scale-x-50 group-hover:scale-x-100 transition-transform duration-500"></div>
                <h3 class="font-mono text-sm text-em-slate mb-8 tracking-widest flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-em-accent rounded-full animate-pulse"></span> THE MOTIVATION TRAP
                </h3>
                
                <div class="space-y-8 relative before:absolute before:left-[23px] before:top-4 before:bottom-4 before:w-px before:bg-em-steel group-hover:before:bg-em-accent/50 before:transition-colors duration-500">
                    <div class="flex gap-6 relative z-10 group/item">
                        <div class="w-12 h-12 bg-em-charcoal border border-em-steel group-hover/item:border-em-accent rounded-none flex items-center justify-center shrink-0 transition-colors">
                            <span class="text-em-white font-bold font-mono">01</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1 mt-2 text-em-white group-hover/item:text-em-accent transition-colors tracking-tight uppercase">Dopamine Spike</h4>
                            <p class="text-sm text-em-slate leading-relaxed">You watch a video, feel inspired, make a grand plan.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative z-10 group/item">
                        <div class="w-12 h-12 bg-em-charcoal border border-em-steel group-hover/item:border-em-accent rounded-none flex items-center justify-center shrink-0 transition-colors">
                            <span class="text-em-white font-bold font-mono">02</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1 mt-2 text-em-white group-hover/item:text-em-accent transition-colors tracking-tight uppercase">Friction Hits</h4>
                            <p class="text-sm text-em-slate leading-relaxed">The emotion fades. The actual work is boring and hard.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative z-10 group/item">
                        <div class="w-12 h-12 bg-em-accent border border-em-accent rounded-none flex items-center justify-center shrink-0 shadow-[0_0_20px_rgba(255,61,0,0.4)]">
                            <span class="text-em-black font-black font-mono">03</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1 mt-2 text-em-accent tracking-tight uppercase glitch-text" data-text="System Collapse">System Collapse</h4>
                            <p class="text-sm text-em-white leading-relaxed">Because you relied on feeling, not structure, you quit. Guilt resets the cycle.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slam-right max-w-md mx-auto md:max-w-full text-center md:text-left mt-12 md:mt-0">
                <h2 class="text-4xl md:text-6xl font-black mb-12 uppercase tracking-tight text-em-white">Why The Self-Help Industry Is <span class="text-em-accent">Broken.</span></h2>
                <div class="space-y-6 text-lg text-em-silver leading-relaxed word-stagger">
                    <p>They sell you the feeling of progress without the mechanics of execution. They tell you to 'visualize success' instead of mapping out the daily sacrifice.</p>
                    <p>Edge Mind burns that script. We don't care how you feel. We care about the framework you operate within.</p>
                </div>
                <blockquote class="border-l-4 border-em-accent bg-em-black p-6 mt-10 relative overflow-hidden reveal">
                    <div class="absolute inset-0 bg-em-accent/5"></div>
                    <p class="relative z-10 text-em-white font-medium text-xl italic m-0">"Stop trying to feel like doing it. Build a system where you do it regardless."</p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

{{-- 8. SOCIAL PROOF: Pressure Reports --}}
<section class="py-32 bg-em-black overflow-hidden relative">
    {{-- Decorative grid --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[linear-gradient(rgba(255,61,0,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.05)_1px,transparent_1px)] bg-[size:30px_30px] rounded-full blur-[40px] pointer-events-none transform rotate-45 translate-x-1/2 -translate-y-1/2"></div>

    <div class="container-edge relative z-10">
        <div class="text-center mb-20 slam-down flex flex-col items-center">
            <h2 class="text-4xl md:text-6xl font-black text-em-white mb-6 uppercase tracking-tight">Field <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-silver to-em-slate">Reports.</span></h2>
            <p class="text-lg text-em-slate leading-relaxed font-mono text-sm uppercase tracking-widest"><span class="w-2 h-2 inline-block bg-em-accent mr-2"></span> DATA EXTRACTED FROM ACTIVE SUBJECTS.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Report 1 --}}
            <div class="slam-left bg-em-charcoal border border-em-steel p-10 hover:border-em-accent hover:-translate-y-2 transition-all duration-300 relative group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-em-accent">format_quote</span>
                </div>
                <div class="flex items-center gap-1 mb-8">
                    <span class="w-6 h-1 bg-em-accent"></span>
                </div>
                <p class="text-base italic text-em-silver mb-10 leading-relaxed group-hover:text-em-white transition-colors">"The most aggressive reality check I've experienced. I threw away my 'motivation journals' and installed the protocol. Output tripled in two weeks."</p>
                <div class="flex items-center gap-4 mt-auto">
                    <div class="w-12 h-12 bg-em-black border border-em-steel flex items-center justify-center font-mono text-sm font-bold text-em-white">AR</div>
                    <div>
                        <div class="font-bold text-sm text-em-white uppercase tracking-widest">Alex R.</div>
                        <div class="font-mono text-[10px] text-em-slate">Vol II: Architecture</div>
                    </div>
                </div>
            </div>

            {{-- Report 2 --}}
            <div class="slam-down bg-em-black border border-em-ice p-10 shadow-[0_0_30px_rgba(0,212,255,0.05)] relative transform md:-translate-y-6 hover:-translate-y-8 transition-all duration-300 group" style="transition-delay: 100ms;">
                <div class="absolute top-0 left-0 w-full h-1 bg-em-ice"></div>
                <div class="absolute top-0 right-0 p-4 opacity-30 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-em-ice">format_quote</span>
                </div>
                <div class="flex items-center gap-1 mb-8">
                    <span class="w-6 h-1 bg-em-ice"></span>
                </div>
                <p class="text-base italic text-em-white mb-10 leading-relaxed font-bold">"I was stuck in loop of consuming content but taking zero action. This book isn't content. It's an instruction manual for ripping apart your daily habits."</p>
                <div class="flex items-center gap-4 mt-auto">
                    <div class="w-12 h-12 bg-em-gunmetal border border-em-ice flex items-center justify-center font-mono text-sm font-bold text-em-white">MK</div>
                    <div>
                        <div class="font-bold text-sm text-em-white uppercase tracking-widest">Marcus K.</div>
                        <div class="font-mono text-[10px] text-em-ice">Vol I: Reset</div>
                    </div>
                </div>
            </div>

            {{-- Report 3 --}}
            <div class="slam-right bg-em-charcoal border border-em-steel p-10 hover:border-em-accent hover:-translate-y-2 transition-all duration-300 relative group" style="transition-delay: 200ms;">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-em-accent">format_quote</span>
                </div>
                <div class="flex items-center gap-1 mb-8">
                    <span class="w-6 h-1 bg-em-accent"></span>
                </div>
                <p class="text-base italic text-em-silver mb-10 leading-relaxed group-hover:text-em-white transition-colors">"Cold, structured, and profoundly effective. Finally a framework that treats you like an engineer of your own life, not a victim needing inspiration."</p>
                <div class="flex items-center gap-4 mt-auto">
                    <div class="w-12 h-12 bg-em-black border border-em-steel flex items-center justify-center font-mono text-sm font-bold text-em-white">ST</div>
                    <div>
                        <div class="font-bold text-sm text-em-white uppercase tracking-widest">Sarah T.</div>
                        <div class="font-mono text-[10px] text-em-slate">Vol III: Momentum</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. [NEW] THE PRESSURE TEST (Pre-commitment) & NOT FOR EVERYONE --}}
<section class="py-32 bg-em-charcoal border-t border-em-steel relative overflow-hidden">
    <div class="container-edge relative z-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20">
            
            {{-- Pressure Test Checkboxes --}}
            <div x-data="{ boxes: [false, false, false], required: 3, get checkedCount() { return this.boxes.filter(i=>i).length } }" class="slam-left border-2 border-em-steel p-10 bg-em-black relative">
                <div class="absolute top-0 left-0 p-2 bg-em-steel text-em-black font-mono text-[10px] font-bold">CLEARANCE REQUIRED</div>
                
                <h3 class="text-4xl md:text-5xl font-black mb-8 uppercase tracking-tight mt-4">The Pressure Test.</h3>
                <p class="text-lg text-em-slate mb-12 leading-relaxed border-b border-em-steel pb-6">Do not proceed unless you can confirm the following parameters.</p>
                
                <div class="space-y-6 mb-12">
                    <label class="flex items-start gap-6 p-6 border border-em-steel bg-em-charcoal cursor-pointer hover:border-em-accent transition-colors group" :class="{'border-em-accent bg-em-gunmetal': boxes[0]}">
                        <div class="relative">
                            <input type="checkbox" x-model="boxes[0]" class="peer sr-only">
                            <div class="w-6 h-6 border-2 border-em-steel bg-em-black peer-checked:bg-em-accent peer-checked:border-em-accent transition-all flex items-center justify-center">
                                <span class="material-symbols-outlined text-em-black text-sm opacity-0 peer-checked:opacity-100 font-bold">check</span>
                            </div>
                        </div>
                        <span class="text-sm md:text-base text-em-silver select-none font-medium leading-snug group-hover:text-em-white transition-colors" :class="{'text-em-white': boxes[0]}">I accept that reading is useless without aggressive implementation.</span>
                    </label>
                    
                    <label class="flex items-start gap-6 p-6 border border-em-steel bg-em-charcoal cursor-pointer hover:border-em-accent transition-colors group" :class="{'border-em-accent bg-em-gunmetal': boxes[1]}">
                        <div class="relative">
                            <input type="checkbox" x-model="boxes[1]" class="peer sr-only">
                            <div class="w-6 h-6 border-2 border-em-steel bg-em-black peer-checked:bg-em-accent peer-checked:border-em-accent transition-all flex items-center justify-center">
                                <span class="material-symbols-outlined text-em-black text-sm opacity-0 peer-checked:opacity-100 font-bold">check</span>
                            </div>
                        </div>
                        <span class="text-sm md:text-base text-em-silver select-none font-medium leading-snug group-hover:text-em-white transition-colors" :class="{'text-em-white': boxes[1]}">I am prepared to be highly uncomfortable for the next 30 days.</span>
                    </label>
                    
                    <label class="flex items-start gap-6 p-6 border border-em-steel bg-em-charcoal cursor-pointer hover:border-em-accent transition-colors group" :class="{'border-em-accent bg-em-gunmetal': boxes[2]}">
                        <div class="relative">
                            <input type="checkbox" x-model="boxes[2]" class="peer sr-only">
                            <div class="w-6 h-6 border-2 border-em-steel bg-em-black peer-checked:bg-em-accent peer-checked:border-em-accent transition-all flex items-center justify-center">
                                <span class="material-symbols-outlined text-em-black text-sm opacity-0 peer-checked:opacity-100 font-bold">check</span>
                            </div>
                        </div>
                        <span class="text-sm md:text-base text-em-silver select-none font-medium leading-snug group-hover:text-em-white transition-colors" :class="{'text-em-white': boxes[2]}">I will stop relying on motivation and start relying on structure.</span>
                    </label>
                </div>
                
                <div class="h-16 flex items-center justify-center bg-em-charcoal border border-em-steel">
                    <template x-if="checkedCount < required">
                        <span class="font-mono text-xs text-em-slate uppercase flex items-center gap-2"><span class="w-2 h-2 bg-em-accent rounded-full animate-pulse"></span> Awaiting authorization...</span>
                    </template>
                    <template x-if="checkedCount === required">
                        <span class="font-mono text-sm font-bold text-em-black bg-em-accent px-4 py-2 uppercase tracking-widest w-full text-center h-full flex items-center justify-center vibrate-once">Authorization Granted</span>
                    </template>
                </div>
            </div>

            {{-- Filter --}}
            <div class="slam-right mt-16 lg:mt-0 flex flex-col justify-center">
                <span class="material-symbols-outlined text-6xl text-em-accent mb-8">warning</span>
                <h3 class="text-4xl md:text-5xl font-black mb-10 uppercase tracking-tight">STAY AWAY IF:</h3>
                <ul class="space-y-10">
                    <li class="flex gap-6 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-em-accent mt-2.5 shrink-0 shadow-[0_0_10px_#FF3D00]"></div>
                        <p class="text-em-silver text-lg font-medium leading-relaxed">You want "tips and tricks" or "life hacks" instead of deep structural reform.</p>
                    </li>
                    <li class="flex gap-6 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-em-accent mt-2.5 shrink-0 shadow-[0_0_10px_#FF3D00]"></div>
                        <p class="text-em-silver text-lg font-medium leading-relaxed">You are easily offended by direct, unapologetic confrontation of your excuses.</p>
                    </li>
                    <li class="flex gap-6 items-start">
                        <div class="w-1.5 h-1.5 rounded-full bg-em-accent mt-2.5 shrink-0 shadow-[0_0_10px_#FF3D00]"></div>
                        <p class="text-em-silver text-lg font-medium leading-relaxed">You collect self-help books as a form of productive procrastination.</p>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 10. FINAL CTA: Cut or Bleed --}}
<section class="py-40 bg-em-black relative overflow-hidden text-center border-t-4 border-em-accent">
    {{-- Chaotic Background Elements --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPjxyZWN0IHdpZHRoPSI0IiBoZWlnaHQ9IjQiIGZpbGw9IiMxMjEwMTAiPjwvcmVjdD48cGF0aCBkPSJNMCAwTDIgMk0wIDJMMiAwIiBzdHJva2U9IiMzMzMiLz48L3N2Zz4=')] opacity-20 z-0"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[300px] bg-em-accent/20 blur-[120px] transform -rotate-12 z-0 animate-pulse"></div>

    <div class="container-edge relative z-10 flex flex-col items-center">
        <div class="font-mono text-em-accent tracking-[0.5em] text-xs mb-8 uppercase slam-down">> Final Warning</div>
        
        <h2 class="text-6xl md:text-8xl lg:text-[7rem] font-black text-em-white mb-12 tracking-tighter uppercase leading-[0.9] drop-shadow-2xl slam-down" style="transition-delay: 100ms;">
            Cut The Noise.<br />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-accent to-em-ice glitch-text block mt-4" data-text="Or Bleed Out Slowly.">Or Bleed Out Slowly.</span>
        </h2>
        
        <p class="text-xl md:text-2xl font-medium font-body text-em-silver mb-16 max-w-3xl mx-auto leading-relaxed border-l-4 border-em-steel pl-6 slam-down text-left" style="transition-delay: 200ms;">
            "Most people will close this tab, open another app, and forget everything they just read. That is exactly why they remain average."
        </p>

        <div class="slam-down" style="transition-delay: 300ms;">
            <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg px-16 py-6 text-xl tracking-widest uppercase font-black shadow-[0_0_60px_rgba(255,61,0,0.4)] hover:shadow-[0_0_100px_rgba(255,61,0,0.6)] bg-em-accent text-em-black border-2 border-em-accent hover:bg-em-white hover:border-em-white transition-all duration-300 transform hover:scale-110 active:scale-95">
                INITIATE PROTOCOL
            </a>
            <div class="mt-8 font-mono text-xs text-em-slate uppercase tracking-[0.3em] flex items-center justify-center gap-4">
                <span class="w-10 h-[1px] bg-em-slate"></span> System Ready <span class="w-10 h-[1px] bg-em-slate"></span>
            </div>
        </div>
    </div>
</section>
@endsection
