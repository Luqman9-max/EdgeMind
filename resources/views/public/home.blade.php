@extends('public.layouts.app')

@section('title', 'Edge Mind — Clarity Through Pressure')
@section('meta_description', 'Books that don\'t motivate. They confront. Curated self-development literature for the intellectually aggressive.')

@section('content')

{{-- 1. HERO SECTION: "The Fracture" --}}
<section id="hero" class="relative w-full min-h-screen flex items-center justify-center pt-20 overflow-hidden bg-em-black">
    {{-- 3D Background --}}
    @include('public.components.hero-3d-bg')

    <div class="container-edge relative z-10 w-full">
        <div class="max-w-3xl mx-auto text-center flex flex-col items-center">
            <div class="reveal mb-8">
                <span class="inline-block border border-em-accent/30 bg-em-accent/10 text-em-accent font-mono text-xs px-4 py-1.5 uppercase tracking-[0.2em] shadow-[0_0_15px_rgba(255,61,0,0.2)]">
                    System Override Initiated
                </span>
            </div>
            
            <h1 class="reveal reveal-delay-1 text-5xl md:text-7xl lg:text-8xl font-primary font-bold text-em-white leading-[1.05] tracking-tight mb-10 drop-shadow-2xl">
                Your Comfort Zone Is A <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-accent to-em-ice shadow-em-accent/20">Slow Poison.</span>
            </h1>
            
            <p class="reveal reveal-delay-2 text-lg md:text-xl font-body text-em-silver max-w-2xl mx-auto mb-12 leading-relaxed">
                Why does your life feel stuck? Because you've built a prison of convenience. We don't sell motivation here. We build systems that break you out.
            </p>
            
            <div class="reveal reveal-delay-3 flex flex-col sm:flex-row items-center gap-6">
                <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg shadow-[0_0_40px_rgba(255,61,0,0.3)]">
                    ENTER THE ARSENAL
                </a>
                <a href="#diagnostic" class="font-mono text-xs text-em-silver hover:text-em-white transition-colors tracking-widest uppercase flex items-center gap-2">
                    <span class="w-8 h-[1px] bg-em-slate"></span> Or Diagnose The Fracture
                </a>
            </div>
        </div>
    </div>
    
    {{-- Scroll Indicator --}}
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 z-10 opacity-60">
        <span class="font-mono text-[10px] text-em-slate uppercase tracking-widest">Scroll to Initiate</span>
        <div class="w-px h-16 bg-gradient-to-b from-em-accent to-transparent"></div>
    </div>
</section>

{{-- 2. THE UNCOMFORTABLE TRUTH --}}
<section id="truth" class="py-28 bg-em-black relative border-t border-em-charcoal">
    <div class="container-edge">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="reveal order-2 md:order-1">
                <p class="font-mono text-em-accent text-sm tracking-widest uppercase mb-6">> Diagnostic_01</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-8">The Internal War You Are Losing.</h2>
                <div class="space-y-5 text-em-slate">
                    <p>You have the potential. You know what you need to do. Every night you promise yourself tomorrow will be different. Every morning, the cycle repeats.</p>
                    <p>You are fighting a war against your own biology. Your brain is engineered for comfort, minimum viable effort, and cheap dopamine.</p>
                    <p class="text-em-white font-medium border-l-2 border-em-accent pl-6">Motivation is a feeling. It evaporates. What you need is structure, pressure, and absolute clarity.</p>
                </div>
            </div>
            
            <div class="reveal reveal-delay-2 order-1 md:order-2 flex justify-center">
                {{-- Abstract Loop Visualization --}}
                <div class="relative w-72 h-72 border border-em-steel rounded-full flex items-center justify-center animate-[spin_10s_linear_infinite]">
                    <div class="absolute w-full h-full border border-em-accent/30 rounded-full" style="clip-path: polygon(0 0, 100% 0, 100% 50%, 0 50%); transform: rotate(45deg);"></div>
                    <div class="absolute w-3/4 h-3/4 border border-em-ice/30 rounded-full animate-[spin_8s_linear_infinite_reverse]"></div>
                    <div class="w-3 h-3 bg-em-accent rounded-full shadow-[0_0_20px_#FF3D00]"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. [NEW] THE COST OF STAYING COMFORTABLE --}}
<section id="cost" class="py-32 bg-em-charcoal relative">
    {{-- Grid background --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px] opacity-30"></div>

    <div class="container-edge relative z-10">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl md:text-5xl font-black text-em-white mb-8">The Mathematics of <span class="text-em-accent">Regret.</span></h2>
            <p class="text-em-silver max-w-2xl mx-auto">Look at the raw data. Inaction isn't neutral. It's expensive.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="card-edge bg-em-black/50 backdrop-blur-sm p-10 reveal border-t-2 border-t-em-steel hover:border-t-em-accent transition-colors group">
                <div class="font-mono text-em-slate text-xs mb-4">LOST HOURS / DAY</div>
                <div class="text-5xl font-black text-em-white mb-4 group-hover:text-em-accent transition-colors">4.2</div>
                <p class="text-sm text-em-slate leading-relaxed">Average time wasted on cheap dopamine, scrolling, and indecision.</p>
            </div>
            
            <div class="card-edge bg-em-black/50 backdrop-blur-sm p-10 reveal reveal-delay-1 border-t-2 border-t-em-steel hover:border-t-em-accent transition-colors group">
                <div class="font-mono text-em-slate text-xs mb-4">YEARLY DEFICIT</div>
                <div class="text-5xl font-black text-em-white mb-4 group-hover:text-em-accent transition-colors">63 Days</div>
                <p class="text-sm text-em-slate leading-relaxed">That's over two full months of waking life surrendered to comfort every year.</p>
            </div>
            
            <div class="card-edge bg-em-black/50 backdrop-blur-sm p-10 reveal reveal-delay-2 border-t-2 border-t-em-steel hover:border-t-em-accent transition-colors group">
                <div class="font-mono text-em-slate text-xs mb-4">COMPOUND EFFECT</div>
                <div class="text-5xl font-black text-em-white mb-4 group-hover:text-em-accent transition-colors">Zero.</div>
                <p class="text-sm text-em-slate leading-relaxed">The trajectory of a life lived without intentional pressure. Total stagnation.</p>
            </div>
        </div>
    </div>
</section>

{{-- 4. [NEW] THE EDGE MIND DIAGNOSTIC --}}
<section id="diagnostic" class="py-36 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="max-w-3xl mx-auto bg-em-gunmetal border border-em-steel rounded-sm p-10 md:p-16 reveal shadow-2xl relative">
            {{-- Abstract scanline --}}
            <div class="absolute inset-0 bg-[linear-gradient(transparent_50%,rgba(0,212,255,0.05)_50%)] bg-[length:100%_4px] pointer-events-none"></div>
            
            <div class="relative z-10" x-data="{ step: 1, answers: [], result: null }">
                <div class="flex items-center justify-between mb-8 border-b border-em-steel pb-4">
                    <h3 class="font-mono text-em-ice text-xs uppercase tracking-widest"><span class="animate-pulse">●</span> Active Diagnostic</h3>
                    <div class="font-mono text-xs text-em-slate">Phase <span x-text="step"></span>/3</div>
                </div>

                {{-- QA 1 --}}
                <div x-show="step === 1" x-transition>
                    <h4 class="text-2xl font-bold mb-8">What dictates your first hour awake?</h4>
                    <div class="space-y-4">
                        <button @click="answers.push('device'); step = 2" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-accent hover:bg-em-black transition-all group">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-accent">>_</span> Unconscious scrolling / Notifications
                        </button>
                        <button @click="answers.push('intent'); step = 2" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-ice hover:bg-em-black transition-all group">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-ice">>_</span> Deliberate structure / Intentional action
                        </button>
                    </div>
                </div>

                {{-- QA 2 --}}
                <div x-show="step === 2" x-transition x-cloak>
                    <h4 class="text-2xl font-bold mb-8">When a task becomes difficult, you typically:</h4>
                    <div class="space-y-4">
                        <button @click="answers.push('avoid'); step = 3" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-accent hover:bg-em-black transition-all group">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-accent">>_</span> Find a distraction / Justify delaying it
                        </button>
                        <button @click="answers.push('confront'); step = 3" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-ice hover:bg-em-black transition-all group">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-ice">>_</span> Lean into the friction / Push through
                        </button>
                    </div>
                </div>

                {{-- QA 3 --}}
                <div x-show="step === 3" x-transition x-cloak>
                    <h4 class="text-2xl font-bold mb-8">Your goals for the last 6 months have:</h4>
                    <div class="space-y-4">
                        <button @click="answers.push('stagnant'); step = 4; result = 'FRAGILE SYSTEM'" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-accent hover:bg-em-black transition-all group">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-accent">>_</span> Remained mostly ideas. Minimal execution.
                        </button>
                        <button @click="answers.push('executing'); step = 4; result = 'LACK OF SCALE'" class="w-full text-left p-6 border border-em-steel bg-em-charcoal hover:border-em-ice hover:bg-em-black transition-all group">
                            <span class="font-mono text-em-slate mr-4 group-hover:text-em-ice">>_</span> Materialized, but I'm hitting a ceiling.
                        </button>
                    </div>
                </div>

                {{-- Result --}}
                <div x-show="step === 4" x-transition x-cloak class="text-center py-12">
                    <div class="font-mono text-xs text-em-slate mb-2">ANALYSIS COMPLETE</div>
                    <div class="text-xl mb-4 text-em-silver">Primary Fracture Point:</div>
                    <div class="text-4xl font-black text-em-accent mb-8" x-text="result"></div>
                    <p class="text-em-silver mb-8 max-w-md mx-auto">Your operating system has vulnerabilities. You need structural architecture, not more motivation.</p>
                    <a href="{{ route('evolve') }}" class="btn btn-outline border-em-accent text-em-accent hover:bg-em-accent hover:text-em-white">ACQUIRE THE PROTOCOL</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 5. PRODUCT SHOWCASE: "The Arsenal" --}}
<section id="arsenal" class="py-32 bg-em-charcoal border-y border-em-steel">
    <div class="container-edge">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
            <div>
                <span class="font-mono text-xs text-em-slate tracking-widest uppercase block mb-2">Inventory</span>
                <h2 class="text-4xl md:text-5xl font-bold text-em-white">The Arsenal.</h2>
            </div>
            <a href="{{ route('evolve') }}" class="btn btn-ghost mt-4 md:mt-0 font-mono text-xs hidden md:flex">VIEW ALL MODULES →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($featuredBooks as $index => $book)
            <a href="{{ route('book.show', $book->slug) }}" class="card-edge group reveal reveal-delay-{{ $index % 4 }}">
                <div class="relative overflow-hidden aspect-[3/4] bg-em-black">
                    @if($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-80 group-hover:opacity-100 mix-blend-luminosity hover:mix-blend-normal">
                    @else
                        <div class="w-full h-full flex flex-col items-center justify-center border-2 border-dashed border-em-steel p-6 text-center">
                            <span class="material-symbols-outlined text-em-steel text-4xl mb-2">book</span>
                            <span class="font-mono text-em-slate text-[10px]">DATA MISSING</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-em-black via-transparent to-transparent opacity-80"></div>
                    
                    {{-- Hover Tech Details --}}
                    <div class="absolute top-4 right-4 translate-x-4 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all">
                        <span class="bg-em-accent text-em-black font-mono text-[10px] px-2 py-1 font-bold">DEPLOY</span>
                    </div>
                </div>
                
                <div class="p-6 border-t border-em-steel">
                    <div class="font-mono text-[10px] text-em-ice mb-2 uppercase">{{ $book->category ?? 'Framework' }}</div>
                    <h3 class="text-lg font-bold text-em-white mb-2 leading-tight">{{ $book->title }}</h3>
                    <div class="flex items-center justify-between mt-4">
                        @if($book->is_free)
                            <span class="text-em-white font-mono text-sm border-b border-em-white pb-0.5">FREE</span>
                        @else
                            <span class="text-em-accent font-mono text-sm">${{ number_format($book->price, 2) }}</span>
                        @endif
                        <span class="material-symbols-outlined text-em-slate text-sm group-hover:text-em-accent transition-colors">east</span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full py-20 text-center border border-em-steel border-dashed">
                <p class="font-mono text-em-slate text-sm">ARSENAL SYNCHRONIZING. NO MODULES DETECTED.</p>
            </div>
            @endforelse
        </div>
        
        <div class="mt-8 text-center md:hidden reveal">
            <a href="{{ route('evolve') }}" class="btn btn-outline w-full justify-center">VIEW ALL MODULES</a>
        </div>
    </div>
</section>

{{-- 6. [NEW] THE CLARITY PROTOCOL (Before / After Journey) --}}
<section class="py-32 bg-em-black relative">
    <div class="container-edge">
        <div class="text-center mb-20 reveal">
            <h2 class="text-4xl font-bold mb-6">The Protocol Execution.</h2>
            <p class="text-em-slate max-w-xl mx-auto">This isn't theory. This is the physiological transfer from chaos to order.</p>
        </div>

        <div class="relative max-w-4xl mx-auto">
            {{-- Connecting Line --}}
            <div class="hidden md:block absolute top-[64px] left-10 right-10 h-0.5 bg-gradient-to-r from-em-steel via-em-accent to-em-ice z-0"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 relative z-10">
                {{-- State 1 --}}
                <div class="reveal">
                    <div class="w-32 h-32 mx-auto rounded-full border border-em-steel bg-em-charcoal flex items-center justify-center mb-8 relative group border-t-em-accent">
                        <span class="material-symbols-outlined text-3xl text-em-slate drop-shadow-lg group-hover:text-em-accent transition-colors">blur_on</span>
                        <div class="absolute inset-0 border border-em-steel rounded-full animate-ping opacity-20"></div>
                    </div>
                    <h4 class="text-center font-bold text-xl mb-3 text-em-white">1. Fracture (Current State)</h4>
                    <p class="text-center text-sm text-em-slate max-w-[280px] mx-auto">Mental fog. Reactionary behavior. Living in the defensive position against notifications and impulses.</p>
                </div>

                {{-- State 2 --}}
                <div class="reveal reveal-delay-1">
                    <div class="w-32 h-32 mx-auto rounded-full border border-em-accent bg-em-charcoal flex items-center justify-center mb-8 relative group shadow-[0_0_30px_rgba(255,61,0,0.1)]">
                        <span class="material-symbols-outlined text-3xl text-em-accent drop-shadow-lg transition-transform group-hover:scale-110">engineering</span>
                    </div>
                    <h4 class="text-center font-bold text-xl mb-3 text-em-white">2. Application (The Forge)</h4>
                    <p class="text-center text-sm text-em-slate max-w-[280px] mx-auto">Installing the architecture. Deliberate discomfort. Removing destructive loops and establishing the baseline.</p>
                </div>

                {{-- State 3 --}}
                <div class="reveal reveal-delay-2">
                    <div class="w-32 h-32 mx-auto rounded-full border border-em-ice bg-em-charcoal flex items-center justify-center mb-8 relative group shadow-[0_0_30px_rgba(0,212,255,0.1)]">
                        <span class="material-symbols-outlined text-3xl text-em-ice drop-shadow-lg transition-transform group-hover:rotate-180 duration-700">change_history</span>
                    </div>
                    <h4 class="text-center font-bold text-xl mb-3 text-em-white">3. Clarity (Future State)</h4>
                    <p class="text-center text-sm text-em-slate max-w-[280px] mx-auto">Automatic execution. Cold focus. The noise disappears because the signal is too strong.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 7. WHY EVERYTHING ELSE FAILED (Motivation Trap) --}}
<section class="py-32 bg-em-charcoal border-y border-em-steel">
    <div class="container-edge">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal bg-em-black border border-em-steel p-8 lg:p-12 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-em-accent"></div>
                <h3 class="font-mono text-sm text-em-slate mb-8 tracking-widest">THE MOTIVATION TRAP</h3>
                
                <div class="space-y-6 relative before:absolute before:left-[23px] before:top-4 before:bottom-4 before:w-px before:bg-em-steel">
                    <div class="flex gap-6 relative z-10">
                        <div class="w-12 h-12 bg-em-charcoal border border-em-steel rounded-sm flex items-center justify-center shrink-0">
                            <span class="text-em-white font-bold">01</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold mb-1 mt-2">Dopamine Spike</h4>
                            <p class="text-sm text-em-slate">You watch a video, feel inspired, make a grand plan.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative z-10">
                        <div class="w-12 h-12 bg-em-charcoal border border-em-steel rounded-sm flex items-center justify-center shrink-0">
                            <span class="text-em-white font-bold">02</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold mb-1 mt-2">Friction Hits</h4>
                            <p class="text-sm text-em-slate">The emotion fades. The actual work is boring and hard.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative z-10">
                        <div class="w-12 h-12 bg-em-black border border-em-accent rounded-sm flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(255,61,0,0.2)]">
                            <span class="text-em-accent font-bold">03</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold mb-1 mt-2 text-em-accent">System Collapse</h4>
                            <p class="text-sm text-em-slate">Because you relied on feeling, not structure, you quit. Guilt resets the cycle.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal reveal-delay-1">
                <h2 class="text-4xl md:text-5xl font-bold mb-8">Why The Self-Help Industry Is Broken.</h2>
                <div class="space-y-6 text-em-silver">
                    <p>They sell you the feeling of progress without the mechanics of execution. They tell you to 'visualize success' instead of mapping out the daily sacrifice.</p>
                    <p>Edge Mind burns that script. We don't care how you feel. We care about the framework you operate within.</p>
                    <blockquote class="border-l-4 border-em-accent pl-6 py-2 mt-8 mb-0 italic text-xl text-em-white">
                        "Stop trying to feel like doing it. Build a system where you do it regardless."
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 8. SOCIAL PROOF: Pressure Reports --}}
<section class="py-32 bg-em-black overflow-hidden relative">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-em-ice/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="container-edge">
        <div class="text-center mb-16 reveal">
            <h2 class="text-4xl font-bold text-em-white">Field Reports.</h2>
            <p class="text-em-slate mt-6">From minds executing under pressure.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto reveal reveal-delay-1">
            {{-- Report 1 --}}
            <div class="bg-em-charcoal border border-em-steel p-8 hover:border-em-slate transition-colors">
                <div class="flex items-center gap-1 mb-5">
                    <span class="material-symbols-outlined text-em-accent text-sm">remove</span>
                    <span class="material-symbols-outlined text-em-accent text-sm">remove</span>
                    <span class="material-symbols-outlined text-em-accent text-sm">remove</span>
                </div>
                <p class="text-sm text-em-silver mb-6 leading-relaxed">"The most aggressive reality check I've experienced. I threw away my 'motivation journals' and installed the protocol. Output tripled in two weeks."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-em-black border border-em-steel flex items-center justify-center font-mono text-xs text-em-white">AR</div>
                    <div>
                        <div class="font-bold text-sm text-em-white">Alex R.</div>
                        <div class="font-mono text-[10px] text-em-slate">Vol II: Architecture</div>
                    </div>
                </div>
            </div>

            {{-- Report 2 --}}
            <div class="bg-em-charcoal border border-em-ice/30 p-8 shadow-[0_0_30px_rgba(0,212,255,0.05)] relative transform md:-translate-y-4">
                <div class="absolute top-0 left-0 w-full h-1 bg-em-ice"></div>
                <div class="flex items-center gap-1 mb-5">
                    <span class="material-symbols-outlined text-em-ice text-sm">remove</span>
                    <span class="material-symbols-outlined text-em-ice text-sm">remove</span>
                    <span class="material-symbols-outlined text-em-ice text-sm">remove</span>
                </div>
                <p class="text-sm text-em-white mb-6 leading-relaxed">"I was stuck in loop of consuming content but taking zero action. This book isn't content. It's an instruction manual for ripping apart your daily habits."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-em-black border border-em-steel flex items-center justify-center font-mono text-xs text-em-white">MK</div>
                    <div>
                        <div class="font-bold text-sm text-em-white">Marcus K.</div>
                        <div class="font-mono text-[10px] text-em-ice">Vol I: Reset</div>
                    </div>
                </div>
            </div>

            {{-- Report 3 --}}
            <div class="bg-em-charcoal border border-em-steel p-8 hover:border-em-slate transition-colors">
                <div class="flex items-center gap-1 mb-5">
                    <span class="material-symbols-outlined text-em-slate text-sm">remove</span>
                    <span class="material-symbols-outlined text-em-slate text-sm">remove</span>
                    <span class="material-symbols-outlined text-em-slate text-sm">remove</span>
                </div>
                <p class="text-sm text-em-silver mb-6 leading-relaxed">"Cold, structured, and profoundly effective. Finally a framework that treats you like an engineer of your own life, not a victim needing inspiration."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-em-black border border-em-steel flex items-center justify-center font-mono text-xs text-em-white">ST</div>
                    <div>
                        <div class="font-bold text-sm text-em-white">Sarah T.</div>
                        <div class="font-mono text-[10px] text-em-slate">Vol III: Momentum</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 9. [NEW] THE PRESSURE TEST (Pre-commitment) & NOT FOR EVERYONE --}}
<section class="py-32 bg-em-charcoal border-t border-em-steel">
    <div class="container-edge">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16">
            
            {{-- Pressure Test Checkboxes --}}
            <div x-data="{ boxes: [false, false, false], required: 3, get checkedCount() { return this.boxes.filter(i=>i).length } }" class="reveal">
                <h3 class="text-3xl font-bold mb-4">The Pressure Test.</h3>
                <p class="text-em-slate mb-8">Do not proceed unless you can confirm the following statements.</p>
                
                <div class="space-y-4 mb-8">
                    <label class="flex items-start gap-4 p-4 border border-em-steel bg-em-black cursor-pointer hover:border-em-slate transition-colors" :class="{'border-em-ice bg-em-gunmetal': boxes[0]}">
                        <input type="checkbox" x-model="boxes[0]" class="mt-1 w-5 h-5 bg-em-charcoal border-em-steel rounded-sm text-em-ice focus:ring-em-ice focus:ring-offset-em-black">
                        <span class="text-sm text-em-silver select-none" :class="{'text-em-white': boxes[0]}">I accept that reading is useless without implementation.</span>
                    </label>
                    
                    <label class="flex items-start gap-4 p-4 border border-em-steel bg-em-black cursor-pointer hover:border-em-slate transition-colors" :class="{'border-em-ice bg-em-gunmetal': boxes[1]}">
                        <input type="checkbox" x-model="boxes[1]" class="mt-1 w-5 h-5 bg-em-charcoal border-em-steel rounded-sm text-em-ice focus:ring-em-ice focus:ring-offset-em-black">
                        <span class="text-sm text-em-silver select-none" :class="{'text-em-white': boxes[1]}">I am prepared to be highly uncomfortable for the next 30 days.</span>
                    </label>
                    
                    <label class="flex items-start gap-4 p-4 border border-em-steel bg-em-black cursor-pointer hover:border-em-slate transition-colors" :class="{'border-em-ice bg-em-gunmetal': boxes[2]}">
                        <input type="checkbox" x-model="boxes[2]" class="mt-1 w-5 h-5 bg-em-charcoal border-em-steel rounded-sm text-em-ice focus:ring-em-ice focus:ring-offset-em-black">
                        <span class="text-sm text-em-silver select-none" :class="{'text-em-white': boxes[2]}">I will stop relying on motivation and start relying on structure.</span>
                    </label>
                </div>
                
                <div class="h-12 flex items-center">
                    <template x-if="checkedCount < required">
                        <span class="font-mono text-xs text-em-accent uppercase animate-pulse">Awaiting confirmation array parameters...</span>
                    </template>
                    <template x-if="checkedCount === required">
                        <span class="font-mono text-xs text-em-ice uppercase">Authorization Granted. Protocol Available.</span>
                    </template>
                </div>
            </div>

            {{-- Filter --}}
            <div class="reveal reveal-delay-1 border-l border-em-steel pl-0 md:pl-16">
                <span class="material-symbols-outlined text-4xl text-em-accent mb-4">warning</span>
                <h3 class="text-2xl font-bold mb-10">STAY AWAY IF:</h3>
                <ul class="space-y-6">
                    <li class="flex gap-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-em-accent mt-2 shrink-0"></span>
                        <p class="text-em-silver text-sm">You want "tips and tricks" or "life hacks" instead of deep structural reform.</p>
                    </li>
                    <li class="flex gap-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-em-accent mt-2 shrink-0"></span>
                        <p class="text-em-silver text-sm">You are easily offended by direct, unapologetic confrontation of your excuses.</p>
                    </li>
                    <li class="flex gap-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-em-accent mt-2 shrink-0"></span>
                        <p class="text-em-silver text-sm">You collect self-help books as a form of productive procrastination.</p>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- 10. FINAL CTA: Cut or Bleed --}}
<section class="py-36 bg-em-black relative overflow-hidden text-center border-t border-em-steel">
    {{-- Shimmer Background --}}
    <div class="absolute inset-0 bg-gradient-to-b from-em-black to-em-charcoal z-0"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[300px] bg-em-accent/10 blur-[100px] transform rotate-[-15deg] z-0"></div>

    <div class="container-edge relative z-10">
        <h2 class="text-5xl md:text-7xl font-black text-em-white mb-10 tracking-tight reveal">
            Cut The Noise.<br />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-accent to-em-ice">Or Bleed Out Slowly.</span>
        </h2>
        
        <p class="text-xl text-em-slate mb-12 max-w-2xl mx-auto reveal reveal-delay-1">
            "Most people will close this tab, open another app, and forget everything they just read. That is exactly why they remain average."
        </p>

        <div class="reveal reveal-delay-2">
            <a href="{{ route('evolve') }}" class="btn btn-primary btn-lg px-12 py-5 text-lg shadow-[0_0_50px_rgba(255,61,0,0.3)] hover:shadow-[0_0_80px_rgba(255,61,0,0.5)] bg-em-accent text-em-black border-2 border-em-accent hover:bg-em-white hover:border-em-white transition-all duration-300">
                INITIATE THE CHANGE
            </a>
            <div class="mt-8 font-mono text-[10px] text-em-slate uppercase tracking-[0.3em]">
                System Ready for Input
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Scroll reveal logic
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
