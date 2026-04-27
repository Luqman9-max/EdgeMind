@extends('public.layouts.app')

@section('title', 'Edge Mind — Clarity Through Pressure')
@section('meta_description', 'Books that don\'t motivate. They confront. Curated self-development literature for the intellectually aggressive.')

@section('content')

{{-- 1. HERO SECTION: "System Breach" --}}
<section id="hero" class="relative w-full min-h-screen flex items-center pt-20 overflow-hidden bg-em-black">
    {{-- Clean Minimal Grid Background --}}
    <div class="absolute inset-0 z-0 bg-em-black pointer-events-none">
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#0A0A0B_80%)]"></div>
    </div>
    <div class="cursor-spotlight" id="cursor-spotlight"></div>

    <div class="container-edge relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-4 items-center">
            
            {{-- Typography (Left Side on Desktop) --}}
            <div class="col-span-1 lg:col-span-8 flex flex-col justify-center">
                <div class="mb-4 overflow-hidden">
                    <span class="gs-hero-badge inline-flex items-center gap-3 border border-em-accent/40 bg-em-black/60 backdrop-blur-md px-4 py-2 text-em-white font-mono text-[10px] uppercase tracking-[0.2em] shadow-[0_0_15px_rgba(255,61,0,0.3)]">
                        <span class="w-2 h-2 bg-em-accent animate-pulse"></span> SYSTEM OVERRIDE INITIATED
                    </span>
                </div>
                
                <h1 class="font-primary font-black uppercase text-em-white leading-[0.9] tracking-tighter drop-shadow-2xl">
                    <div class="overflow-hidden"><div class="gs-hero-clean text-6xl md:text-7xl lg:text-[7.5rem]">YOUR</div></div>
                    <div class="overflow-hidden"><div class="gs-hero-clean text-6xl md:text-7xl lg:text-[7.5rem] text-em-accent indent-0 md:indent-8">COMFORT</div></div>
                    <div class="overflow-hidden"><div class="gs-hero-clean text-6xl md:text-7xl lg:text-[7.5rem]">ZONE IS</div></div>
                    <div class="overflow-hidden"><div class="gs-hero-clean text-6xl md:text-7xl lg:text-[7.5rem] text-transparent indent-0 md:indent-16" style="-webkit-text-stroke: 1px #F0F0F5;">A PRISON.</div></div>
                </h1>
            </div>

            {{-- Context & CTA (Right Side on Desktop) --}}
            <div class="col-span-1 lg:col-span-4 flex flex-col justify-end lg:h-full lg:py-20 lg:pl-12 lg:border-l border-em-steel relative mt-8 lg:mt-0">
                <div class="absolute top-0 left-[-1px] w-[2px] h-0 bg-em-accent gs-hero-line-v hidden lg:block"></div>
                
                <p class="gs-hero-desc text-lg md:text-xl font-body text-em-silver leading-relaxed mb-10 border-l-4 border-em-accent pl-6 bg-gradient-to-r from-em-charcoal to-transparent py-4 shadow-xl">
                    Why does your life feel stuck? Because you've built a cage of convenience. We don't sell motivation here. We build systems that break you out.
                </p>
                
                <div class="gs-hero-cta w-full group relative inline-block">
                    <div class="absolute inset-0 bg-em-accent transform translate-x-2 translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0 transition-transform duration-300 z-0 border border-em-accent"></div>
                    <a href="{{ route('evolve') }}" class="btn block w-full relative z-10 bg-em-black border border-em-accent text-em-white font-black text-lg md:text-xl py-5 uppercase tracking-widest text-center group-hover:bg-em-accent group-hover:text-em-black transition-colors duration-300 shadow-[0_0_20px_rgba(255,61,0,0.2)]">
                        ENTER THE SYSTEM
                    </a>
                </div>
                
                <div class="gs-hero-scroll mt-12 flex items-center gap-4 opacity-50">
                    <div class="w-12 h-px bg-em-white"></div>
                    <span class="font-mono text-[10px] uppercase tracking-widest text-em-white">Scroll to Decrypt</span>
                </div>
            </div>
            
        </div>
    </div>
</section>

{{-- 2. THE UNCOMFORTABLE TRUTH --}}
<section id="truth" class="py-16 sm:py-20 md:py-32 bg-em-black relative overflow-hidden">
    <div class="scan-line-anim absolute inset-0 opacity-20 pointer-events-none z-0"></div>
    <div class="container-edge relative z-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-10 lg:gap-20 items-center">
            <div class="truth-text">
                <p class="font-mono text-em-accent text-sm tracking-widest uppercase mb-6">> Diagnostic_01</p>
                <h2 class="text-4xl sm:text-3xl sm:text-5xl md:text-7xl font-black mb-12 uppercase leading-none tracking-tight">The Signal<br /> Decay.</h2>
                <div class="text-em-silver text-xl leading-relaxed">
                    <div class="space-y-6 mb-12">
                        <p class="gs-truth-p1 opacity-0 translate-y-4">You have the potential. You know what you need to do. Every night you promise yourself tomorrow will be different. Every morning, the cycle repeats.</p>
                        <p class="gs-truth-p2 opacity-0 translate-y-4">You are fighting a war against your own biology. Your brain is engineered for comfort, minimum viable effort, and cheap dopamine.</p>
                    </div>
                </div>
                <!-- Sliding Blockquote -->
                <blockquote class="gs-truth-quote border-draw border-l-8 border-em-accent bg-em-gunmetal p-5 md:p-8 mt-8 relative overflow-hidden group opacity-0 -translate-x-10">
                    <div class="absolute top-0 left-0 w-0 h-full bg-em-accent-glow transition-all duration-700 group-hover:w-full z-0"></div>
                    <p class="relative z-10 text-em-white font-medium text-xl md:text-2xl italic m-0">Motivation is a feeling. It evaporates. What you need is structure, pressure, and absolute clarity.</p>
                </blockquote>
            </div>
            
            <div class="gs-truth-vis truth-vis opacity-0 blur-sm scale-90 flex flex-col justify-center items-end relative">
                {{-- EKG Degradation Visualization --}}
                <div class="relative w-full aspect-video bg-em-charcoal border border-em-steel p-8 flex flex-col justify-center group hover:border-em-accent transition-colors shadow-[0_0_30px_rgba(255,61,0,0.05)] overflow-hidden">
                    <div class="absolute top-4 right-4 text-em-accent font-mono text-[10px] uppercase ekg-status">STATUS: ANALYZING</div>
                    
                    <svg class="w-full h-full overflow-visible" viewBox="0 0 500 100" preserveAspectRatio="none">
                        <path class="ekg-line" fill="none" stroke="var(--em-accent)" stroke-width="3" 
                              d="M 0,50 L 100,50 L 110,20 L 120,80 L 130,50 L 250,50 L 255,35 L 260,65 L 265,50 L 350,50 L 352,45 L 354,55 L 356,50 L 500,50" />
                    </svg>
                    
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-em-accent/10 to-transparent w-[200%] animate-[scanSweep_3s_linear_infinite] pointer-events-none mix-blend-screen opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. THE COST OF STAYING COMFORTABLE --}}
<section id="cost" class="py-16 sm:py-20 md:py-32 bg-em-charcoal relative border-y border-em-steel overflow-hidden cost-section">
    {{-- Data Stream Background --}}
    <div class="absolute top-0 left-0 w-[200%] h-10 bg-em-black border-b border-em-steel flex items-center overflow-hidden z-0">
        <div class="font-mono text-xs text-em-accent whitespace-nowrap opacity-50 flex animate-[scanSweep_10s_linear_infinite]" style="animation-direction: alternate;">
            DATA FRAGMENT 0192 // LOSS DETECTED // COMPOUND DECAY ACTIVE // VALUE EXTRACTED 0.00 // TIME DILATION 4.2H // DATA FRAGMENT 0192 // LOSS DETECTED // COMPOUND DECAY ACTIVE // VALUE EXTRACTED 0.00 // TIME DILATION 4.2H // 
        </div>
    </div>

    <div class="container-edge relative z-10 pt-16">
        <div class="mb-10 md:mb-20 opacity-0 transform translate-y-10 flex flex-col items-center cost-header gs-cost-header">
            <h2 class="text-4xl sm:text-3xl sm:text-5xl md:text-7xl font-black text-em-white mb-6 uppercase tracking-tight text-center">The Mathematics of <br class="md:hidden"/><span class="text-em-accent">Regret.</span></h2>
            <p class="text-xl text-em-silver max-w-2xl text-center">Look at the raw data. Inaction is not neutral. It is actively destroying your baseline.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="gs-cost-card card-edge bg-em-black/80 backdrop-blur-md p-6 md:p-10 cost-card border-t-4 border-t-em-steel hover:border-t-em-accent transition-colors group relative overflow-hidden opacity-0 -translate-x-10">
                <div class="font-mono text-em-slate text-xs mb-6 uppercase tracking-widest flex items-center justify-between">
                    <span>Lost Hours/Day</span>
                    <span class="w-2 h-2 bg-em-slate rounded-full animate-pulse group-hover:bg-em-accent"></span>
                </div>
                <div class="text-4xl sm:text-3xl sm:text-5xl md:text-7xl font-black text-em-white mb-4 font-primary group-hover:text-em-accent transition-colors">
                    <span class="count-up" data-count="4.2">0</span>
                </div>
                <div class="w-full h-1 bg-em-steel mb-6 overflow-hidden">
                    <div class="h-full bg-em-accent metric-fill w-0" data-fill="40%"></div>
                </div>
                <p class="text-sm text-em-silver leading-relaxed relative">
                    Average time actively wasted on cheap dopamine, scrolling, and indecision patterns.
                </p>
            </div>
            
            <div class="gs-cost-card card-edge bg-em-black/80 backdrop-blur-md p-6 md:p-10 cost-card border-t-4 border-t-em-steel hover:border-t-em-accent transition-colors group relative overflow-hidden opacity-0 translate-y-10">
                <div class="font-mono text-em-slate text-xs mb-6 uppercase tracking-widest flex items-center justify-between">
                    <span>Yearly Deficit (Days)</span>
                    <span class="w-2 h-2 bg-em-slate rounded-full animate-pulse group-hover:bg-em-accent"></span>
                </div>
                <div class="text-4xl sm:text-3xl sm:text-5xl md:text-7xl font-black text-em-white mb-4 font-primary group-hover:text-em-accent transition-colors">
                    <span class="count-up" data-count="63">0</span>
                </div>
                <div class="w-full h-1 bg-em-steel mb-6 overflow-hidden">
                    <div class="h-full bg-em-accent metric-fill w-0" data-fill="80%"></div>
                </div>
                <p class="text-sm text-em-silver leading-relaxed relative">
                    Over two full months of waking life surrendered to comfort every single year.
                </p>
            </div>
            
            <div class="gs-cost-card card-edge bg-em-gunmetal p-6 md:p-10 cost-card border-t-4 border-t-em-accent shadow-[0_0_40px_rgba(255,61,0,0.1)] group relative overflow-hidden opacity-0 translate-x-10" id="compound-card">
                <div class="absolute inset-0 bg-em-accent mix-blend-overlay opacity-0 group-hover:opacity-10 transition-opacity"></div>
                <div class="font-mono text-em-accent text-xs mb-6 uppercase tracking-widest flex items-center justify-between">
                    <span>Compound Effect</span>
                    <span class="w-2 h-2 bg-em-accent rounded-full shake-subtle"></span>
                </div>
                <div class="text-4xl sm:text-3xl sm:text-5xl md:text-7xl font-black text-em-white mb-4 font-primary group-hover:text-em-accent">
                    <span class="count-up glitch-text" data-count="100" data-infinite="true" data-text="Zero.">0</span>
                </div>
                <div class="w-full h-1 bg-em-steel mb-6 overflow-hidden">
                    <div class="h-full bg-em-accent metric-fill w-0" data-fill="100%"></div>
                </div>
                <p class="text-sm text-em-white leading-relaxed relative">
                    The trajectory of a life lived without intentional pressure. Total systemic stagnation.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- 4. [NEW] THE EDGE MIND DIAGNOSTIC --}}
<section id="diagnostic" class="py-16 sm:py-20 md:py-32 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="max-w-4xl mx-auto bg-em-gunmetal border border-em-steel p-1 md:p-2 slam-down shadow-[0_20px_50px_rgba(0,0,0,0.5)] relative group hover:border-em-slate transition-colors duration-500 diagnostic-container gs-diag-container opacity-0">
            {{-- CRT Scanline overlay --}}
            <div class="absolute inset-0 bg-[linear-gradient(transparent_50%,rgba(0,212,255,0.05)_50%)] bg-[length:100%_4px] pointer-events-none z-20 mix-blend-overlay"></div>
            
            <div class="relative z-10 bg-em-charcoal h-full w-full p-6 md:p-12 border border-em-steel/50" x-data="{ step: 0, answers: [], result: null, 
                bootSequence: [
                    '> LOADING DIAGNOSTIC MODULE...',
                    '> SCANNING BEHAVIORAL PATTERNS...',
                    '> ANALYZING COGNITIVE DRIFT...',
                    '> WARNING: MULTIPLE ANOMALIES DETECTED',
                    '> INITIATING PROTOCOL...'
                ],
                bootIndex: 0,
                flash() {
                    const el = document.getElementById('diag-flash');
                    el.classList.add('active');
                    setTimeout(() => el.classList.remove('active'), 300);
                },
                init() { 
                    const runBoot = setInterval(() => {
                        if(this.bootIndex < this.bootSequence.length - 1) {
                            this.bootIndex++;
                        } else {
                            clearInterval(runBoot);
                            setTimeout(() => { this.step = 1; this.flash(); }, 800);
                        }
                    }, 600);
                } 
            }">
                
                {{-- Glitch Flash Element --}}
                <div id="diag-flash" class="noise-burst"></div>

                <div class="flex items-center justify-between mb-12 border-b border-em-steel pb-4 relative z-10">
                    <h3 class="font-mono text-em-ice text-xs uppercase tracking-widest flex items-center gap-2"><span class="w-2 h-2 bg-em-ice shadow-[0_0_10px_#00D4FF] animate-pulse"></span> SYSTEM_DIAGNOSTIC</h3>
                    <div class="font-mono text-xs text-em-slate" x-show="step > 0">PHASE <span x-text="step"></span>/3</div>
                </div>

                {{-- Boot Sequence --}}
                <div x-show="step === 0" class="py-20 flex flex-col items-start justify-center min-h-[250px] md:min-h-[300px]">
                    <template x-for="(line, index) in bootSequence" :key="index">
                        <div class="font-mono text-sm md:text-base text-em-ice tracking-widest mb-4" x-show="index <= bootIndex" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-text="line"></div>
                    </template>
                    <div class="w-4 h-6 bg-em-ice animate-pulse mt-2" x-show="bootIndex < bootSequence.length"></div>
                </div>

                {{-- QA 1 --}}
                <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-cloak class="min-h-[250px] md:min-h-[300px] flex flex-col justify-center items-center relative z-10 py-12">
                    <h4 class="text-2xl md:text-4xl font-black text-center uppercase tracking-tight w-full mb-8 md:mb-16">What dictates your first hour awake?</h4>
                    <div class="space-y-4 max-w-2xl w-full mt-4 md:mt-8">
                        <button @click="flash(); answers.push('device'); setTimeout(() => step = 2, 300);" class="w-full text-left p-4 md:p-6 border border-em-steel bg-em-black hover:border-em-accent transition-all group relative overflow-hidden">
                            <div class="absolute inset-0 bg-em-accent/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                            <span class="relative z-10 font-mono text-em-slate mr-4 group-hover:text-em-accent transition-colors">>_</span> 
                            <span class="relative z-10 text-em-silver group-hover:text-em-white transition-colors">Unconscious scrolling / Notifications</span>
                        </button>
                        <button @click="flash(); answers.push('intent'); setTimeout(() => step = 2, 300);" class="w-full text-left p-4 md:p-6 border border-em-steel bg-em-black hover:border-em-ice transition-all group relative overflow-hidden">
                            <div class="absolute inset-0 bg-em-ice/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                            <span class="relative z-10 font-mono text-em-slate mr-4 group-hover:text-em-ice transition-colors">>_</span> 
                            <span class="relative z-10 text-em-silver group-hover:text-em-white transition-colors">Deliberate structure / Intentional action</span>
                        </button>
                    </div>
                </div>

                {{-- QA 2 --}}
                <div x-show="step === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-cloak class="min-h-[250px] md:min-h-[300px] flex flex-col justify-center items-center relative z-10 py-12">
                    <h4 class="text-2xl md:text-4xl font-black text-center uppercase tracking-tight w-full mb-8 md:mb-16">When a task becomes difficult, you typically:</h4>
                    <div class="space-y-4 max-w-2xl w-full mt-4 md:mt-8">
                        <button @click="flash(); answers.push('avoid'); setTimeout(() => step = 3, 300);" class="w-full text-left p-4 md:p-6 border border-em-steel bg-em-black hover:border-em-accent transition-all group relative overflow-hidden">
                            <div class="absolute inset-0 bg-em-accent/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                            <span class="relative z-10 font-mono text-em-slate mr-4 group-hover:text-em-accent transition-colors">>_</span> 
                            <span class="relative z-10 text-em-silver group-hover:text-em-white transition-colors">Find a distraction / Justify delaying it</span>
                        </button>
                        <button @click="flash(); answers.push('confront'); setTimeout(() => step = 3, 300);" class="w-full text-left p-4 md:p-6 border border-em-steel bg-em-black hover:border-em-ice transition-all group relative overflow-hidden">
                            <div class="absolute inset-0 bg-em-ice/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                            <span class="relative z-10 font-mono text-em-slate mr-4 group-hover:text-em-ice transition-colors">>_</span> 
                            <span class="relative z-10 text-em-silver group-hover:text-em-white transition-colors">Lean into the friction / Push through</span>
                        </button>
                    </div>
                </div>

                {{-- QA 3 --}}
                <div x-show="step === 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-cloak class="min-h-[250px] md:min-h-[300px] flex flex-col justify-center items-center relative z-10 py-12">
                    <h4 class="text-2xl md:text-4xl font-black text-center uppercase tracking-tight w-full mb-8 md:mb-16">Your goals for the last 6 months have:</h4>
                    <div class="space-y-4 max-w-2xl w-full mt-4 md:mt-8">
                        <button @click="flash(); answers.push('stagnant'); result = 'FRAGILE SYSTEM'; setTimeout(() => step = 4, 300);" class="w-full text-left p-4 md:p-6 border border-em-steel bg-em-black hover:border-em-accent transition-all group relative overflow-hidden">
                            <div class="absolute inset-0 bg-em-accent/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                            <span class="relative z-10 font-mono text-em-slate mr-4 group-hover:text-em-accent transition-colors">>_</span> 
                            <span class="relative z-10 text-em-silver group-hover:text-em-white transition-colors">Remained mostly ideas. Minimal execution.</span>
                        </button>
                        <button @click="flash(); answers.push('executing'); result = 'LACK OF SCALE'; setTimeout(() => step = 4, 300);" class="w-full text-left p-4 md:p-6 border border-em-steel bg-em-black hover:border-em-ice transition-all group relative overflow-hidden">
                            <div class="absolute inset-0 bg-em-ice/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                            <span class="relative z-10 font-mono text-em-slate mr-4 group-hover:text-em-ice transition-colors">>_</span> 
                            <span class="relative z-10 text-em-silver group-hover:text-em-white transition-colors">Materialized, but I'm hitting a ceiling.</span>
                        </button>
                    </div>
                </div>

                {{-- Result --}}
                <div x-show="step === 4" x-transition:enter="transition ease-out duration-700 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-cloak class="text-center py-12 flex flex-col items-center min-h-[250px] md:min-h-[300px] relative z-10">
                    <div class="font-mono text-xs text-em-slate tracking-widest uppercase mb-8">> Analysis Complete_</div>
                    <div class="text-xl text-em-silver mb-2">Primary Fracture Point:</div>
                    <div class="text-4xl sm:text-6xl md:text-8xl font-black text-em-accent mb-10 glitch-intense leading-none uppercase" x-text="result" :data-text="result"></div>
                    <p class="text-center text-em-silver mb-12 max-w-md mx-auto leading-relaxed">Your operating system has vulnerabilities. You need structural architecture, not more motivation.</p>
                    <a href="{{ route('evolve') }}" class="btn btn-outline border-em-accent text-em-accent hover:bg-em-accent hover:text-em-black px-8 py-4 uppercase tracking-widest group">
                        Acquire Protocol <span class="material-symbols-outlined ml-2 group-hover:translate-x-1 transition-transform">east</span>
                    </a>
                </div>
                
                {{-- Loading Bar --}}
                <div class="mt-8 h-1 bg-em-black w-full overflow-hidden relative z-10" x-show="step > 0 && step < 4">
                    <div class="h-full bg-em-ice transition-all duration-500 ease-out" :style="`width: ${(step/3)*100}%`"></div>
                </div>
            </div>
            
            {{-- Ambient particles --}}
            <div class="absolute -top-4 -right-4 w-32 h-32 bg-em-ice/5 blur-2xl rounded-full pointer-events-none"></div>
            <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-em-accent/5 blur-2xl rounded-full pointer-events-none"></div>
        </div>
    </div>
</section>

{{-- 5. PRODUCT SHOWCASE: "The Arsenal" --}}
<section id="arsenal" class="py-16 sm:py-20 md:py-32 bg-em-charcoal border-y border-em-steel overflow-hidden relative perspective-1000">
    <div class="container-edge relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[500px] bg-em-black z-0 opacity-50 blur-[100px] rounded-full pointer-events-none"></div>
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 md:mb-20 relative z-10 opacity-0 transform translate-y-10 arsenal-header gs-arsenal-header">
            <div>
                <span class="font-mono text-xs text-em-slate tracking-widest uppercase block mb-2 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-em-ice rounded-full animate-pulse"></span> Inventory
                </span>
                <h2 class="text-5xl md:text-6xl font-black text-em-white uppercase tracking-tight">The Arsenal.</h2>
            </div>
            <a href="{{ route('evolve') }}" class="btn btn-ghost mt-4 md:mt-0 font-mono text-xs hidden md:flex hover:text-em-accent transition-colors items-center gap-2">
                VIEW ALL MODULES <span class="material-symbols-outlined text-sm">east</span>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 relative z-10 arsenal-grid">
            @forelse($featuredBooks as $index => $book)
            <div class="tilt-card gs-arsenal-card gs-3d-parallax-container opacity-0 transform translate-y-10">
                <a href="{{ route('book.show', $book->slug) }}" class="card-edge bg-em-gunmetal group block relative shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_50px_rgba(255,61,0,0.2)] transition-all duration-500 tilt-card-inner gs-3d-parallax-element">
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-em-accent transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500 z-20"></div>
                    
                    <div class="relative overflow-hidden aspect-[3/4] bg-em-black">
                        @if($book->cover_image)
                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110 opacity-50 group-hover:opacity-100 mix-blend-luminosity hover:mix-blend-normal filter grayscale group-hover:grayscale-0">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center border-2 border-dashed border-em-steel p-6 text-center group-hover:border-em-accent transition-colors">
                                <span class="material-symbols-outlined text-em-steel text-4xl mb-2 group-hover:text-em-accent transition-colors">book</span>
                                <span class="font-mono text-em-slate text-[10px]">DATA MISSING</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-em-gunmetal via-transparent to-transparent opacity-100 pointer-events-none"></div>
                        
                        {{-- Classified Overlay --}}
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-100 group-hover:opacity-0 transition-opacity duration-500 z-10 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px]">
                            <div class="border-2 border-em-accent text-em-accent font-primary font-black text-3xl uppercase tracking-widest px-6 py-2 transform -rotate-12 bg-em-black/80 backdrop-blur-sm shadow-[0_0_20px_rgba(255,61,0,0.3)]">
                                Classified
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-8 border-t border-em-steel relative bg-em-gunmetal">
                        <div class="font-mono text-[10px] text-em-ice mb-2 uppercase tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-em-ice rounded-full"></span> {{ $book->category ?? 'Framework' }}
                        </div>
                        <h3 class="text-xl font-bold text-em-white mb-2 leading-tight uppercase group-hover:text-em-accent transition-colors">{{ $book->title }}</h3>
                        <div class="flex items-center justify-between mt-6">
                            @if($book->is_free)
                                <span class="text-em-white font-mono text-sm border-b border-em-white pb-0.5">FREE</span>
                            @else
                                <span class="text-em-accent font-mono text-sm">${{ number_format($book->price, 2) }}</span>
                            @endif
                            <span class="material-symbols-outlined text-em-slate text-sm group-hover:text-em-accent transition-colors transform group-hover:translate-x-2 duration-300">east</span>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-span-full py-40 text-center border-2 border-em-steel border-dashed relative overflow-hidden group hover:border-em-accent transition-colors duration-500 bg-em-black">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-em-accent/10 to-transparent w-[200%] animate-[scanSweep_3s_linear_infinite] pointer-events-none mix-blend-screen"></div>
                <span class="material-symbols-outlined text-6xl text-em-steel mb-6 group-hover:text-em-accent transition-colors animate-pulse">lock</span>
                <h3 class="text-3xl font-black text-em-white uppercase tracking-tight mb-2">Arsenal Synchronizing</h3>
                <p class="font-mono text-em-slate text-sm uppercase tracking-widest">> No modules detected in current sector_</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-12 text-center md:hidden">
            <a href="{{ route('evolve') }}" class="btn btn-outline w-full justify-center text-em-silver hover:text-em-accent hover:border-em-accent">VIEW ALL MODULES</a>
        </div>
    </div>
</section>

{{-- 6. [NEW] THE CLARITY PROTOCOL (Before / After Journey) --}}
<section class="bg-em-black relative w-full h-auto md:h-[300vh]" id="protocol-pin-container">
    {{-- Sticky Native Wrapper --}}
    <div class="relative md:sticky top-0 min-h-screen md:h-screen w-full flex flex-col items-center justify-center overflow-hidden py-16 md:pt-10 md:pb-10">
        <div class="container-edge relative z-10 w-full flex flex-col items-center justify-center">
            <div class="text-center mb-12 lg:mb-20 protocol-header opacity-0 transform translate-y-10 w-full flex flex-col items-center justify-center">
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black mb-4 uppercase tracking-tight text-em-white text-center w-full">Phase Transition.</h2>
                <div class="text-lg md:text-xl text-em-silver max-w-2xl leading-relaxed text-center w-full" style="text-align: center !important;">
                    This is not motivation. This is the physiological transfer from chaos to order.
                </div>
            </div>

            <div class="relative max-w-5xl mx-auto w-full md:h-[400px] flex flex-col md:flex-row items-center justify-center gap-12 md:gap-0" id="protocol-stage">
            
            {{-- Stage Elements (Manipulated by GSAP) --}}
            <div class="hidden md:flex absolute inset-0 items-center justify-center z-0 protocol-nodes">
                {{-- Chaos nodes --}}
                <div class="absolute w-16 h-16 border-2 border-em-steel border-dashed transform -translate-x-32 -translate-y-20 rotate-12 node chaos-node"></div>
                <div class="absolute w-20 h-20 border-2 border-em-steel border-dashed transform translate-x-24 -translate-y-32 -rotate-12 node chaos-node"></div>
                <div class="absolute w-12 h-12 border-2 border-em-steel border-dashed transform -translate-x-40 translate-y-16 rotate-45 node chaos-node"></div>
                <div class="absolute w-24 h-24 border-2 border-em-steel border-dashed transform translate-x-32 translate-y-20 -rotate-6 node chaos-node"></div>
                
                {{-- Central structure element --}}
                <div class="absolute w-40 h-40 border-4 border-em-accent opacity-0 scale-50 node forge-node shadow-[0_0_40px_rgba(255,61,0,0.3)]"></div>
                
                {{-- Final clarity ring --}}
                <div class="absolute w-48 h-48 rounded-full border-4 border-em-ice opacity-0 scale-150 node clarity-node shadow-[0_0_60px_rgba(0,212,255,0.4)]"></div>
            </div>

            {{-- Text Labels --}}
            <div class="relative md:absolute w-full md:top-1/2 left-0 md:transform md:-translate-y-1/2 md:w-1/3 text-left md:opacity-100 protocol-text pt-chaos">
                <h4 class="font-black text-3xl lg:text-4xl mb-4 text-em-white uppercase tracking-widest border-l-4 border-em-steel pl-4">1. Fracture</h4>
                <p class="text-lg lg:text-xl text-em-slate leading-relaxed">Mental fog. Reactionary behavior. Living in the defensive position against notifications and impulses.</p>
            </div>

            <div class="relative md:absolute md:bottom-0 left-1/2 md:transform md:-translate-x-1/2 md:translate-y-full w-full max-w-lg text-left md:text-center md:opacity-0 protocol-text pt-forge">
                <h4 class="font-black text-3xl lg:text-4xl mb-4 text-em-accent uppercase tracking-widest border-l-4 md:border-l-0 border-em-accent pl-4 md:pl-0">2. The Forge</h4>
                <p class="text-lg lg:text-xl text-em-slate leading-relaxed">Installing the architecture. Deliberate discomfort. Removing destructive loops.</p>
            </div>

            <div class="relative md:absolute md:top-1/2 right-0 md:transform md:-translate-y-1/2 w-full md:w-1/3 text-left md:text-right md:opacity-0 protocol-text pt-clarity">
                <h4 class="font-black text-3xl lg:text-4xl mb-4 text-em-ice uppercase tracking-widest border-l-4 md:border-l-0 md:border-r-4 border-em-ice pl-4 md:pl-0 md:pr-4 shadow-em-ice">3. Clarity</h4>
                <p class="text-lg lg:text-xl text-em-slate leading-relaxed">Automatic execution. Cold focus. The noise disappears because the signal is too strong.</p>
            </div>
        </div>
    </div>
    </div>
</section>

{{-- 7. WHY EVERYTHING ELSE FAILED (Motivation Trap) --}}
<section class="py-16 sm:py-20 md:py-32 bg-em-charcoal border-y border-em-steel overflow-hidden relative">
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] opacity-30 z-0 pointer-events-none"></div>

    <div class="container-edge relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div class="slam-left bg-em-black border border-em-steel p-6 md:p-8 lg:p-12 relative overflow-hidden group hover:border-em-accent transition-colors duration-500 shadow-[0_0_50px_rgba(0,0,0,0.8)]">
                <div class="absolute top-0 left-0 w-full h-1 bg-em-accent transform origin-left scale-x-50 group-hover:scale-x-100 transition-transform duration-500"></div>
                <h3 class="font-mono text-sm text-em-slate mb-8 tracking-widest flex items-center justify-between">
                    <span class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 bg-em-accent rounded-full animate-pulse"></span> THE MOTIVATION TRAP
                    </span>
                    <span class="text-[10px] text-em-accent opacity-50" id="failure-counter">FAILURE DETECTED</span>
                </h3>
                
                <div class="space-y-8 relative before:absolute before:left-[23px] before:top-4 before:bottom-4 before:w-px before:bg-em-steel group-hover:before:bg-em-accent/50 before:transition-colors duration-500" id="trap-timeline">
                    <div class="flex gap-6 relative z-10 group/item trap-step">
                        <div class="w-12 h-12 bg-em-charcoal border border-em-steel group-hover/item:border-em-accent rounded-none flex items-center justify-center shrink-0 transition-colors">
                            <span class="text-em-white font-bold font-mono">01</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1 mt-2 text-em-white group-hover/item:text-em-accent transition-colors tracking-tight uppercase">Dopamine Spike</h4>
                            <p class="text-sm text-em-slate leading-relaxed">You watch a video, feel inspired, make a grand plan.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative z-10 group/item trap-step">
                        <div class="w-12 h-12 bg-em-charcoal border border-em-steel group-hover/item:border-em-accent rounded-none flex items-center justify-center shrink-0 transition-colors">
                            <span class="text-em-white font-bold font-mono">02</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-1 mt-2 text-em-white group-hover/item:text-em-accent transition-colors tracking-tight uppercase">Friction Hits</h4>
                            <p class="text-sm text-em-slate leading-relaxed">The emotion fades. The actual work is boring and hard.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative z-10 group/item trap-step" id="trap-collapse">
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

            <div class="slam-right max-w-md mx-auto md:max-w-full text-center md:text-left mt-8 md:mt-0">
                <h2 class="text-4xl md:text-6xl font-black mb-12 uppercase tracking-tight text-em-white">Why The Self-Help Industry Is <span class="text-em-accent">Broken.</span></h2>
                <div class="space-y-6 text-lg text-em-silver leading-relaxed word-stagger">
                    <p>They sell you the feeling of progress without the mechanics of execution. They tell you to 'visualize success' instead of mapping out the daily sacrifice.</p>
                    <p>Edge Mind burns that script. We don't care how you feel. We care about the framework you operate within.</p>
                </div>
                <blockquote class="border-l-4 border-em-accent bg-em-black p-6 mt-10 relative overflow-hidden reveal hover:bg-em-gunmetal transition-colors">
                    <div class="absolute inset-0 bg-em-accent/5"></div>
                    <p class="relative z-10 text-em-white font-medium text-xl italic m-0">"Stop trying to feel like doing it. Build a system where you do it regardless."</p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

{{-- 8. SOCIAL PROOF: Field Reports --}}
<section class="py-16 sm:py-20 md:py-32 bg-em-black overflow-hidden relative">
    {{-- Decorative grid --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[linear-gradient(rgba(255,61,0,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.05)_1px,transparent_1px)] bg-[size:30px_30px] rounded-full blur-[40px] pointer-events-none transform rotate-45 translate-x-1/2 -translate-y-1/2"></div>

    <div class="container-edge relative z-10">
        <div class="text-center mb-10 md:mb-20 flex flex-col items-center opacity-0 transform translate-y-10 reports-header gs-reports-header">
            <h2 class="text-3xl sm:text-5xl md:text-7xl font-black text-em-white mb-6 uppercase tracking-tight">Signal <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-silver to-em-slate">Intercept.</span></h2>
            <p class="text-lg text-em-accent leading-relaxed font-mono text-sm uppercase tracking-widest"><span class="w-2 h-2 inline-block bg-em-accent mr-2 animate-pulse"></span> DECRYPTED REPORTS FROM ACTIVE SUBJECTS.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto reports-grid">
            {{-- Report 1 --}}
            <div class="dossier-card gs-dossier-card border border-em-steel p-6 md:p-10 hover:border-em-accent hover:-translate-y-2 transition-all duration-300 relative group opacity-0 transform translate-y-10 overflow-hidden bg-em-black">
                <div class="noise-burst group-hover:active"></div>
                <div class="absolute top-0 right-0 bg-em-steel text-em-black font-mono text-[9px] px-2 py-1 font-bold">CLASSIFIED // LEVEL 1</div>
                
                <div class="flex items-center gap-1 mb-8 mt-4">
                    <span class="font-mono text-xs text-em-accent uppercase tracking-widest">> Transmission_01</span>
                </div>
                <p class="text-base font-mono text-em-silver mb-10 leading-relaxed group-hover:text-em-white transition-colors">"The most aggressive reality check I've experienced. I threw away my 'motivation journals' and installed the protocol. Output tripled in two weeks."</p>
                <div class="flex items-center gap-4 mt-auto border-t border-em-steel pt-4">
                    <div class="w-12 h-12 bg-em-charcoal border border-em-steel flex items-center justify-center font-mono text-sm font-bold text-em-white group-hover:border-em-accent group-hover:text-em-accent transition-colors">AR</div>
                    <div>
                        <div class="font-bold text-sm text-em-white uppercase tracking-widest">SUBJECT: Alex R.</div>
                        <div class="font-mono text-[10px] text-em-slate">Vol II: Architecture</div>
                    </div>
                </div>
            </div>

            {{-- Report 2 --}}
            <div class="dossier-card gs-dossier-card border-2 border-em-ice p-6 md:p-10 relative transform md:-translate-y-6 hover:-translate-y-8 transition-all duration-300 group opacity-0 translate-y-10 overflow-hidden bg-em-gunmetal shadow-[0_0_30px_rgba(0,212,255,0.1)]">
                <div class="noise-burst group-hover:active"></div>
                <div class="absolute inset-0 border-2 border-em-ice opacity-50 pulse-glow pointer-events-none"></div>
                <div class="absolute top-0 left-0 bg-em-ice text-em-black font-mono text-[9px] px-2 py-1 font-bold w-full text-center tracking-[0.2em]">PRIORITY INTERCEPT</div>
                
                <div class="flex items-center gap-1 mb-8 mt-6">
                    <span class="font-mono text-xs text-em-ice uppercase tracking-widest">> Transmission_02</span>
                </div>
                <p class="text-lg font-mono text-em-white mb-10 leading-relaxed font-bold">"I was stuck in loop of consuming content but taking zero action. This book isn't content. It's an instruction manual for ripping apart your daily habits."</p>
                <div class="flex items-center gap-4 mt-auto border-t border-em-ice/50 pt-4">
                    <div class="w-12 h-12 bg-em-black border border-em-ice flex items-center justify-center font-mono text-sm font-bold text-em-ice">MK</div>
                    <div>
                        <div class="font-bold text-sm text-em-white uppercase tracking-widest">SUBJECT: Marcus K.</div>
                        <div class="font-mono text-[10px] text-em-ice">Vol I: Reset</div>
                    </div>
                </div>
            </div>

            {{-- Report 3 --}}
            <div class="dossier-card gs-dossier-card border border-em-steel p-6 md:p-10 hover:border-em-accent hover:-translate-y-2 transition-all duration-300 relative group opacity-0 transform translate-y-10 overflow-hidden bg-em-black">
                <div class="noise-burst group-hover:active"></div>
                <div class="absolute top-0 right-0 bg-em-steel text-em-black font-mono text-[9px] px-2 py-1 font-bold">CLASSIFIED // LEVEL 2</div>
                
                <div class="flex items-center gap-1 mb-8 mt-4">
                    <span class="font-mono text-xs text-em-accent uppercase tracking-widest">> Transmission_03</span>
                </div>
                <p class="text-base font-mono text-em-silver mb-10 leading-relaxed group-hover:text-em-white transition-colors">"Cold, structured, and profoundly effective. Finally a framework that treats you like an engineer of your own life, not a victim needing inspiration."</p>
                <div class="flex items-center gap-4 mt-auto border-t border-em-steel pt-4">
                    <div class="w-12 h-12 bg-em-charcoal border border-em-steel flex items-center justify-center font-mono text-sm font-bold text-em-white group-hover:border-em-accent group-hover:text-em-accent transition-colors">ST</div>
                    <div>
                        <div class="font-bold text-sm text-em-white uppercase tracking-widest">SUBJECT: Sarah T.</div>
                        <div class="font-mono text-[10px] text-em-slate">Vol III: Momentum</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. THE PRESSURE TEST (Pre-commitment) & NOT FOR EVERYONE --}}
<section class="py-16 sm:py-20 md:py-32 bg-em-charcoal border-t border-em-steel relative overflow-hidden" id="pressure-test">
    <div class="container-edge relative z-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20">
            
            {{-- Pressure Test Checkboxes --}}
            <div x-data="{ boxes: [false, false, false], required: 3, 
                get checkedCount() { return this.boxes.filter(i=>i).length },
                playClick() { 
                    const el = document.getElementById('auth-box');
                    el.classList.add('screen-shake');
                    setTimeout(() => el.classList.remove('screen-shake'), 400);
                }
            }" class="slam-left gs-auth-box border-2 border-em-steel p-6 md:p-10 bg-em-black relative transition-colors duration-500 opacity-0" :class="{'border-em-accent shadow-[0_0_50px_rgba(255,61,0,0.2)]': checkedCount === required}" id="auth-box">
                <div class="absolute top-0 left-0 p-2 text-em-black font-mono text-[10px] font-bold transition-colors duration-300" :class="checkedCount === required ? 'bg-em-accent' : 'bg-em-steel'">CLEARANCE REQUIRED</div>
                
                <h3 class="text-4xl md:text-5xl font-black mb-8 uppercase tracking-tight mt-4" :class="checkedCount === required ? 'text-em-accent' : 'text-em-white'">The Pressure Test.</h3>
                <p class="text-lg text-em-slate mb-12 leading-relaxed border-b border-em-steel pb-6">Do not proceed unless you can confirm the following parameters.</p>
                
                <div class="space-y-6 mb-12">
                    <label class="flex items-start gap-6 p-4 md:p-6 border border-em-steel bg-em-charcoal cursor-pointer hover:border-em-accent transition-colors group" :class="{'border-em-accent bg-em-gunmetal': boxes[0]}">
                        <div class="relative">
                            <input type="checkbox" x-model="boxes[0]" @change="playClick()" class="peer sr-only">
                            <div class="w-6 h-6 border-2 border-em-steel bg-em-black peer-checked:bg-em-accent peer-checked:border-em-accent transition-all flex items-center justify-center group-active:scale-90">
                                <span class="material-symbols-outlined text-em-black text-sm opacity-0 peer-checked:opacity-100 font-bold">close</span>
                            </div>
                        </div>
                        <span class="text-sm md:text-base text-em-silver select-none font-medium leading-snug group-hover:text-em-white transition-colors" :class="{'text-em-white font-bold': boxes[0]}">I accept that reading is useless without aggressive implementation.</span>
                    </label>
                    
                    <label class="flex items-start gap-6 p-4 md:p-6 border border-em-steel bg-em-charcoal cursor-pointer hover:border-em-accent transition-colors group" :class="{'border-em-accent bg-em-gunmetal': boxes[1]}">
                        <div class="relative">
                            <input type="checkbox" x-model="boxes[1]" @change="playClick()" class="peer sr-only">
                            <div class="w-6 h-6 border-2 border-em-steel bg-em-black peer-checked:bg-em-accent peer-checked:border-em-accent transition-all flex items-center justify-center group-active:scale-90">
                                <span class="material-symbols-outlined text-em-black text-sm opacity-0 peer-checked:opacity-100 font-bold">close</span>
                            </div>
                        </div>
                        <span class="text-sm md:text-base text-em-silver select-none font-medium leading-snug group-hover:text-em-white transition-colors" :class="{'text-em-white font-bold': boxes[1]}">I am prepared to be highly uncomfortable for the next 30 days.</span>
                    </label>
                    
                    <label class="flex items-start gap-6 p-4 md:p-6 border border-em-steel bg-em-charcoal cursor-pointer hover:border-em-accent transition-colors group" :class="{'border-em-accent bg-em-gunmetal': boxes[2]}">
                        <div class="relative">
                            <input type="checkbox" x-model="boxes[2]" @change="playClick()" class="peer sr-only">
                            <div class="w-6 h-6 border-2 border-em-steel bg-em-black peer-checked:bg-em-accent peer-checked:border-em-accent transition-all flex items-center justify-center group-active:scale-90">
                                <span class="material-symbols-outlined text-em-black text-sm opacity-0 peer-checked:opacity-100 font-bold">close</span>
                            </div>
                        </div>
                        <span class="text-sm md:text-base text-em-silver select-none font-medium leading-snug group-hover:text-em-white transition-colors" :class="{'text-em-white font-bold': boxes[2]}">I will stop relying on motivation and start relying on structure.</span>
                    </label>
                </div>
                
                <div class="h-16 flex items-center justify-center border transition-colors duration-300" :class="checkedCount === required ? 'bg-em-accent border-em-accent' : 'bg-em-charcoal border-em-steel'">
                    <template x-if="checkedCount < required">
                        <span class="font-mono text-xs text-em-slate uppercase flex items-center gap-2"><span class="w-2 h-2 bg-em-accent rounded-full animate-pulse"></span> Awaiting authorization... (<span x-text="checkedCount"></span>/3)</span>
                    </template>
                    <template x-if="checkedCount === required">
                        <span class="font-mono text-sm font-bold text-em-black uppercase tracking-widest w-full text-center h-full flex items-center justify-center vibrate-once">Authorization Granted — System Unlocked</span>
                    </template>
                </div>
            </div>

            {{-- Filter --}}
            <div class="mt-16 lg:mt-0 flex flex-col justify-center warning-list">
                <div class="flex items-center gap-4 mb-8 text-em-accent opacity-0 transform -translate-x-10 warning-item gs-warning-item">
                    <span class="material-symbols-outlined text-6xl">warning</span>
                    <h3 class="text-4xl md:text-5xl font-black uppercase tracking-tight">STAY AWAY IF:</h3>
                </div>
                <ul class="space-y-6 md:space-y-10 border-l-2 border-em-steel pl-8">
                    <li class="relative opacity-0 transform -translate-x-10 warning-item gs-warning-item">
                        <div class="absolute -left-[39px] top-2 w-4 h-4 bg-em-charcoal border-2 border-em-accent rounded-full shadow-[0_0_10px_#FF3D00]"></div>
                        <p class="text-em-silver text-xl font-medium leading-relaxed">You want "tips and tricks" or "life hacks" instead of deep structural reform.</p>
                    </li>
                    <li class="relative opacity-0 transform -translate-x-10 warning-item gs-warning-item">
                        <div class="absolute -left-[39px] top-2 w-4 h-4 bg-em-charcoal border-2 border-em-accent rounded-full shadow-[0_0_10px_#FF3D00]"></div>
                        <p class="text-em-silver text-xl font-medium leading-relaxed">You are easily offended by direct, unapologetic confrontation of your excuses.</p>
                    </li>
                    <li class="relative opacity-0 transform -translate-x-10 warning-item gs-warning-item">
                        <div class="absolute -left-[39px] top-2 w-4 h-4 bg-em-charcoal border-2 border-em-accent rounded-full shadow-[0_0_10px_#FF3D00]"></div>
                        <p class="text-em-silver text-xl font-medium leading-relaxed">You collect self-help books as a form of productive procrastination.</p>
                    </li>
                </ul>
                <div class="mt-12 font-mono text-em-accent text-sm uppercase tracking-widest opacity-0 warning-item gs-warning-item flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm animate-spin" style="animation-duration: 4s;">radar</span> Scanning for intent...
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 10. FINAL CTA: Cut or Bleed --}}
<section class="py-20 md:py-40 bg-em-black relative overflow-hidden text-center border-t border-em-accent/30" id="final-cta">
    {{-- Chaotic Background Elements --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPjxyZWN0IHdpZHRoPSI0IiBoZWlnaHQ9IjQiIGZpbGw9IiMxMjEwMTAiPjwvcmVjdD48cGF0aCBkPSJNMCAwTDIgMk0wIDJMMiAwIiBzdHJva2U9IiMzMzMiLz48L3N2Zz4=')] opacity-20 z-0 mix-blend-overlay"></div>
    <div class="gs-cta-bg-glow absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-[600px] bg-radial-gradient from-em-accent/20 to-transparent blur-[100px] z-0" style="background: radial-gradient(circle, rgba(255,61,0,0.15) 0%, rgba(0,0,0,0) 70%);"></div>

    <div class="container-edge relative z-10 flex flex-col items-center">
        <div class="font-mono text-em-accent tracking-[0.5em] text-xs mb-8 uppercase opacity-0 cta-element gs-cta-tag">> Final Warning</div>
        
        <h2 class="text-4xl sm:text-5xl md:text-8xl lg:text-[10rem] font-black text-em-white mb-8 tracking-tighter uppercase leading-[0.8] drop-shadow-2xl opacity-0 cta-element gs-cta-title">
            Cut The Noise.<br />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-accent to-em-ice glitch-intense block mt-6 gs-cta-glitch" data-text="Or Bleed Out Slowly.">Or Bleed Out Slowly.</span>
        </h2>
        
        <p class="text-xl md:text-3xl font-medium font-body text-em-silver mb-16 max-w-3xl mx-auto leading-relaxed border-l-4 border-em-accent pl-6 text-left opacity-0 cta-element gs-cta-quote bg-em-charcoal/50 p-6 backdrop-blur-sm">
            "Most people will close this tab, open another app, and forget everything they just read. That is exactly why they remain average."
        </p>

        <div class="opacity-0 cta-element gs-cta-btn relative group">
            <div class="absolute -inset-4 bg-em-accent/30 rounded-lg blur-2xl group-hover:bg-em-accent/50 transition-colors duration-500 heartbeat"></div>
            <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg px-8 py-5 text-lg sm:px-12 sm:py-6 sm:text-xl md:px-16 md:py-8 md:text-2xl tracking-wider md:tracking-widest uppercase font-black shadow-[0_0_60px_rgba(255,61,0,0.5)] hover:shadow-[0_0_120px_rgba(255,61,0,0.8)] bg-em-accent text-em-black border-2 border-em-accent hover:bg-em-white hover:border-em-white transition-all duration-300 transform hover:scale-110 active:scale-95 relative z-10 w-full sm:w-auto text-center">
                INITIATE PROTOCOL
            </a>
            
            <div class="mt-12 font-mono text-xs text-em-accent uppercase tracking-[0.3em] flex items-center justify-center gap-4">
                <span class="w-16 h-[1px] bg-em-accent/50"></span> 
                Systems closing in: <span class="countdown text-em-white">00:00</span> 
                <span class="w-16 h-[1px] bg-em-accent/50"></span>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    
    gsap.registerPlugin(ScrollTrigger);

    // 1. HERO SECTION (Cinematic System Breach)
    const heroTl = gsap.timeline({ delay: 0.2 });

    // Quick flash effect
    const flash = document.createElement('div');
    flash.className = 'screen-flash-hero';
    document.body.appendChild(flash);
    gsap.to(flash, { opacity: 1, duration: 0.1, yoyo: true, repeat: 1, onComplete: () => flash.remove() });

    heroTl.fromTo('.gs-hero-badge', 
        { y: 20, opacity: 0 }, 
        { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out' }
    )
    .fromTo('.gs-hero-clean', 
        { yPercent: 120 }, 
        { yPercent: 0, duration: 1.5, stagger: 0.15, ease: 'expo.out' }, 
        "-=0.4"
    )
    .to('.gs-hero-line-v', 
        { height: '100%', duration: 1, ease: 'power3.inOut' }, 
        "-=0.6"
    )
    .fromTo('.gs-hero-desc', 
        { x: 30, opacity: 0 }, 
        { x: 0, opacity: 1, duration: 0.8, ease: 'power3.out' }, 
        "-=0.6"
    )
    .fromTo('.gs-hero-cta', 
        { scale: 0.9, opacity: 0 }, 
        { scale: 1, opacity: 1, duration: 0.8, ease: 'back.out(1.5)' }, 
        "-=0.4"
    )
    .fromTo('.gs-hero-scroll', 
        { opacity: 0 }, 
        { opacity: 0.5, duration: 1 }, 
        "-=0.2"
    );

    // 2. THE UNCOMFORTABLE TRUTH (Scroll-Scrubbed Reveal)
    const truthTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#truth',
            start: 'top 60%',
            end: 'top 20%',
            scrub: 1
        }
    });
    
    truthTl.fromTo('.gs-truth-p1', { opacity: 0, y: 20 }, { opacity: 1, y: 0 })
           .fromTo('.gs-truth-p2', { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, "+=0.2");

    gsap.fromTo('.gs-truth-quote', 
        { x: -50, opacity: 0 },
        { 
            scrollTrigger: { trigger: '.gs-truth-quote', start: 'top 75%' },
            x: 0, opacity: 1, duration: 0.8, ease: 'power3.out',
            onComplete: () => document.querySelector('.gs-truth-quote').classList.add('drawn')
        }
    );

    gsap.fromTo('.gs-truth-vis',
        { scale: 0.9, opacity: 0, filter: 'blur(5px)' },
        {
            scrollTrigger: { trigger: '.gs-truth-vis', start: 'top 70%' },
            scale: 1, opacity: 1, filter: 'blur(0px)', duration: 1, ease: 'power4.out',
            onComplete: () => {
                document.querySelector('.ekg-line')?.classList.add('active');
            }
        }
    );

    // 3. THE COST OF STAYING COMFORTABLE (Counter Slam)
    gsap.fromTo('.gs-cost-header',
        { y: -50, opacity: 0 },
        {
            scrollTrigger: { trigger: '#cost', start: 'top 75%' },
            y: 0, opacity: 1, duration: 0.6, ease: 'power4.in',
            onComplete: () => {
                document.querySelector('#cost').classList.add('screen-shake');
                setTimeout(() => document.querySelector('#cost').classList.remove('screen-shake'), 400);
            }
        }
    );

    const costCards = gsap.utils.toArray('.gs-cost-card');
    costCards.forEach((card, i) => {
        let xDir = i === 0 ? -50 : (i === 2 ? 50 : 0);
        let yDir = i === 1 ? 50 : 0;
        
        gsap.fromTo(card,
            { x: xDir, y: yDir, opacity: 0 },
            {
                scrollTrigger: { trigger: '.gs-cost-header', start: 'top 60%' },
                x: 0, y: 0, opacity: 1, duration: 0.8, ease: 'back.out(1.7)', delay: i * 0.15,
                onComplete: () => {
                    const fill = card.querySelector('.metric-fill');
                    if(fill) fill.style.width = fill.getAttribute('data-fill');
                }
            }
        );
    });

    // 4. DIAGNOSTIC MODULE (Terminal Boot)
    gsap.fromTo('.gs-diag-container',
        { scale: 0.95, opacity: 0 },
        {
            scrollTrigger: { trigger: '#diagnostic', start: 'top 70%' },
            scale: 1, opacity: 1, duration: 0.8, ease: 'power4.out',
            onStart: () => {
                const flash = document.querySelector('.gs-diag-container .noise-burst');
                if(flash) {
                    flash.classList.add('active');
                    setTimeout(() => flash.classList.remove('active'), 300);
                }
            }
        }
    );

    // 5. ARSENAL SHOWCASE (Stagger cascade + 3D mouse parallax tilt)
    gsap.fromTo('.gs-arsenal-header',
        { x: -50, opacity: 0 },
        {
            scrollTrigger: { trigger: '#arsenal', start: 'top 75%' },
            x: 0, opacity: 1, duration: 1, ease: 'power3.out'
        }
    );

    ScrollTrigger.batch('.gs-arsenal-card', {
        start: 'top 80%',
        onEnter: batch => gsap.fromTo(batch, 
            { y: 50, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: 'back.out(1.5)' }
        )
    });

    // 3D Parallax Tilt for Arsenal Cards
    const tiltCards = document.querySelectorAll('.gs-3d-parallax-container');
    tiltCards.forEach(card => {
        const inner = card.querySelector('.gs-3d-parallax-element');
        if(!inner) return;
        
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -10; // Max 10 deg
            const rotateY = ((x - centerX) / centerX) * 10;
            
            gsap.to(inner, {
                rotateX: rotateX,
                rotateY: rotateY,
                duration: 0.5,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(inner, {
                rotateX: 0,
                rotateY: 0,
                duration: 0.8,
                ease: 'power3.out'
            });
        });
    });

    // 6. PHASE TRANSITION (Directional slides)
    // The core pinning is already in app.js, so we just enhance the labels
    // Note: Protocol pinning was removed from app.js, we need to add it here
    gsap.to('.protocol-header', {
        scrollTrigger: { trigger: '.protocol-header', start: 'top 80%' },
        y: 0, opacity: 1, duration: 1, ease: 'power3.out'
    });
    
    const protocolPinContainer = document.querySelector('#protocol-pin-container');
    if (protocolPinContainer) {
        let mm = gsap.matchMedia();
        
        // Desktop Pinning Animation
        mm.add("(min-width: 768px)", () => {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: protocolPinContainer,
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: 1
                }
            });

            // Stage 1: Fracture -> The Forge
            tl.to({}, { duration: 0.8 }) // PAUSE before starting animations so user can read
              .to('.pt-chaos', { opacity: 0, duration: 1, x: -50 })
              .to('.chaos-node', { scale: 0, opacity: 0, duration: 1, stagger: 0.1, rotation: -90 }, '<')
              .to('.forge-node', { scale: 1, opacity: 1, duration: 1.5, ease: 'elastic.out(1, 0.3)' })
              .to('.pt-forge', { opacity: 1, y: 0, duration: 1 }, '-=0.5')
              .to('.forge-node', { boxShadow: '0 0 40px rgba(255, 61, 0, 0.5)', duration: 0.5 }, '-=0.5'); // Added glow

            // Stage 2: The Forge -> Clarity
            tl.to('.pt-forge', { opacity: 0, duration: 1, y: 50 }, '+=0.8') // Increased pause
              .to('.forge-node', { scale: 0, opacity: 0, duration: 1, boxShadow: '0 0 0px rgba(255, 61, 0, 0)' }, '<')
              .to('.clarity-node', { scale: 1, opacity: 1, duration: 1.5, ease: 'power3.out' })
              .to('.pt-clarity', { opacity: 1, x: 0, duration: 1 }, '-=0.5')
              .to('.clarity-node', { boxShadow: '0 0 40px rgba(0, 212, 255, 0.5)', duration: 0.5 }, '-=0.5') // Added glow
              .to({}, { duration: 0.8 }); // PAUSE at the end before unpinning
              
            return () => { // Cleanup
                tl.kill();
            };
        });
        
        // Mobile Simple Fade In
        mm.add("(max-width: 767px)", () => {
            gsap.fromTo('.protocol-text', 
                { opacity: 0, y: 30 },
                {
                    scrollTrigger: {
                        trigger: '#protocol-stage',
                        start: 'top 80%',
                    },
                    opacity: 1, y: 0, duration: 0.8, stagger: 0.3, ease: 'power3.out'
                }
            );
        });
    }

    // 7. SOCIAL PROOF (Dossier directional slide-in)
    gsap.fromTo('.gs-reports-header',
        { opacity: 0 },
        {
            scrollTrigger: { trigger: '.gs-reports-header', start: 'top 80%' },
            opacity: 1, duration: 1, ease: 'power3.out'
        }
    );

    const dossiers = gsap.utils.toArray('.gs-dossier-card');
    dossiers.forEach((card, i) => {
        if(i === 1) { // Center card (featured)
            gsap.fromTo(card,
                { scale: 0.8, opacity: 0 },
                {
                    scrollTrigger: { trigger: '.reports-grid', start: 'top 70%' },
                    scale: 1, opacity: 1, duration: 0.8, ease: 'back.out(1.5)', delay: 0.2
                }
            );
        } else {
            let xDir = i === 0 ? -40 : 40;
            gsap.fromTo(card,
                { x: xDir, opacity: 0 },
                {
                    scrollTrigger: { trigger: '.reports-grid', start: 'top 70%' },
                    x: 0, opacity: 1, duration: 0.8, ease: 'power3.out', delay: i === 0 ? 0 : 0.4
                }
            );
        }
    });

    // 8. PRESSURE TEST (Checkpoint Fortress)
    gsap.fromTo('.gs-auth-box',
        { x: -50, opacity: 0 },
        {
            scrollTrigger: { trigger: '.gs-auth-box', start: 'top 75%' },
            x: 0, opacity: 1, duration: 0.8, ease: 'power4.out'
        }
    );

    gsap.fromTo('.gs-warning-item',
        { x: -40, opacity: 0 },
        {
            scrollTrigger: { trigger: '.warning-list', start: 'top 70%' },
            x: 0, opacity: 1, duration: 0.8, stagger: 0.25, ease: 'power3.out'
        }
    );

    // 9. FINAL CTA (The Ultimatum)
    const ctaTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#final-cta',
            start: 'top 60%'
        }
    });

    ctaTl.fromTo('.gs-cta-tag', { scale: 0.8, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.6, ease: 'power3.out' })
         .fromTo('.gs-cta-title', { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: 'power4.out' }, "-=0.2")
         .fromTo('.gs-cta-glitch', { opacity: 0, filter: 'blur(10px)' }, { opacity: 1, filter: 'blur(0px)', duration: 0.4 }, "+=0.2")
         .fromTo('.gs-cta-quote', { x: -30, opacity: 0 }, { x: 0, opacity: 1, duration: 0.6, ease: 'power2.out' }, "-=0.2")
         .fromTo('.gs-cta-btn', { scale: 0.8, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.8, ease: 'back.out(2)' }, "-=0.2");

    // Breathing glow background
    gsap.to('.gs-cta-bg-glow', {
        opacity: 0.7,
        scale: 1.2,
        duration: 4,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });

    // Periodic Button Shake
    setInterval(() => {
        const btn = document.querySelector('.gs-cta-btn');
        if(btn && !btn.matches(':hover')) {
            gsap.to(btn, {
                x: "random(-2, 2)",
                y: "random(-2, 2)",
                duration: 0.1,
                yoyo: true,
                repeat: 3,
                onComplete: () => gsap.set(btn, {x:0, y:0})
            });
        }
    }, 5000);

});
</script>
@endpush
@endsection
