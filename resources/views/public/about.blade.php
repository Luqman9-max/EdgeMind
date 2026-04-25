@extends('public.layouts.app')

@section('title', 'About Edge Mind — Forged, Not Born')
@section('meta_description', 'The origin of Edge Mind. Discover the system we built because motivation failed us.')

@section('content')

{{-- 1. HERO SECTION: "Forged, Not Born" --}}
<section id="about-hero" class="relative w-full min-h-screen flex items-center justify-start pt-20 overflow-hidden bg-em-black">
    {{-- 3D Background --}}
    @include('public.components.about-3d-bg')

    <div class="container-edge relative z-10 w-full pl-0 md:pl-8">
        <div class="max-w-5xl text-left flex flex-col items-start">
            <div class="mb-6 slam-down">
                <span class="inline-flex items-center gap-2 border border-em-accent/40 bg-em-black/50 backdrop-blur-sm px-4 py-2 mt-4 text-em-white font-mono text-[10px] uppercase tracking-[0.2em] shadow-[0_0_15px_rgba(255,61,0,0.2)]">
                    <span class="w-2 h-2 bg-em-accent animate-pulse"></span> Origin Protocol
                </span>
            </div>
            
            <h1 class="slam-down text-6xl md:text-8xl lg:text-[9rem] font-primary font-black text-em-white leading-[0.85] tracking-tighter mb-4 drop-shadow-2xl uppercase" style="transition-delay: 100ms;">
                FORGED<br />
                <span class="text-em-accent glitch-text block pt-2" data-text="NOT BORN.">NOT BORN.</span>
            </h1>
            
            <div class="w-full h-px bg-gradient-to-r from-em-accent via-em-accent/50 to-transparent my-8 line-draw"></div>

            <p class="typewriter text-lg md:text-xl font-mono text-em-silver max-w-2xl leading-relaxed uppercase tracking-widest bg-em-charcoal inline-block px-4 py-2 border-l-4 border-em-accent shadow-lg" style="animation-duration: 4s; animation-delay: 1s; animation-fill-mode: both;">
                We didn't start this to inspire you.<br/>We started this because we were breaking.
            </p>
        </div>
    </div>

    {{-- Scroll Indicator - EKG style --}}
    <div class="absolute bottom-8 left-8 flex items-center gap-4 z-10 opacity-60">
        <div class="w-16 h-px bg-em-accent"></div>
        <span class="font-mono text-[10px] text-em-white uppercase tracking-widest animate-pulse">Scroll to Initiate</span>
    </div>
</section>

{{-- 2. THE BREAKING POINT (Pinned Scroll Sequence) --}}
<section id="breaking-point" class="bg-em-black relative overflow-hidden min-h-screen pt-32 lg:pt-40 border-t border-em-steel">
    <div class="scan-line-anim absolute inset-0 opacity-20 pointer-events-none z-0"></div>
    
    <div class="container-edge relative z-10 w-full pb-48">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row gap-16">
            
            {{-- Terminal Timestamp Side --}}
            <div class="md:w-1/3 shrink-0 bp-timestamp opacity-0">
                <div class="sticky top-32">
                    <h2 class="text-3xl font-bold mb-4 uppercase tracking-tight text-em-white border-b border-em-steel pb-4">The Fracture.</h2>
                    <div class="font-mono text-em-accent text-3xl font-bold mb-2 glow-text">03:00 AM</div>
                    <div class="font-mono text-[10px] uppercase text-em-slate tracking-widest">
                        > Critical Failure Detected<br/>
                        > System Integrity: Compromised
                    </div>
                </div>
            </div>
            
            {{-- Narrative Side --}}
            <div class="md:w-2/3 space-y-16 font-serif text-2xl tracking-wide leading-relaxed text-em-silver border-l-2 border-em-steel pl-8 md:pl-12">
                
                <p class="bp-p1 opacity-0 transform translate-y-8">
                    There was a specific night when the illusion shattered. I had just spent another four hours consuming 'productive' content instead of doing the actual work I needed to do.
                </p>
                
                <p class="bp-p2 opacity-0 transform translate-y-8">
                    I realized that the self-help industry isn't designed to fix you. It's designed to keep you addicted to the <em class="text-em-white not-italic border-b border-em-accent pb-1">feeling</em> of fixing yourself.
                </p>
                
                <p class="bp-p3 opacity-0 transform translate-y-8">
                    Motivation is a drug. It gives you a high, it wears off, and you crash harder. I didn't need another hit. I needed surgery.
                </p>
                
                <div class="bp-quote opacity-0 transform translate-y-8 mt-24 mb-40 lg:mb-24">
                    <div class="w-full h-px bg-em-steel mb-12"></div>
                    <p class="font-primary font-black uppercase text-3xl md:text-5xl text-em-white leading-[1.1] tracking-tighter">
                        "I stopped trying to manage my feelings, and started <span class="text-em-accent glitch-text block" data-text="engineering my constraints.">engineering my constraints."</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. THE EVOLUTION — 3 PHASES --}}
<section id="evolution" class="py-32 bg-em-charcoal relative overflow-hidden border-t-2 border-em-steel">
    {{-- Vertical Timeline Line --}}
    <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-px bg-em-steel z-0 transform md:-translate-x-1/2"></div>
    <div id="evolution-progress" class="absolute left-8 md:left-1/2 top-0 w-px bg-em-accent z-0 transform md:-translate-x-1/2 shadow-[0_0_10px_rgba(255,61,0,0.5)]"></div>

    <div class="container-edge relative z-10">
        <div class="text-center mb-32 slam-down">
            <span class="font-mono text-xs text-em-slate tracking-widest uppercase mb-2 block">> System_Evolution_Log</span>
            <h2 class="text-5xl md:text-7xl font-black text-em-white uppercase tracking-tight">How The Forge<br/>Was Built.</h2>
        </div>

        <div class="space-y-40 max-w-6xl mx-auto relative">
            
            {{-- Phase 1 --}}
            <div class="evo-phase flex flex-col md:flex-row gap-16 items-center relative pl-16 md:pl-0">
                <div class="md:w-1/2 md:text-right md:pr-16 order-2 md:order-1 pt-8 md:pt-0 opacity-0 transform md:translate-x-[-50px]" id="phase-1-text">
                    <div class="font-mono text-em-slate text-sm mb-3">> PHASE 01: THE NOISE</div>
                    <h3 class="text-4xl font-black mb-6 uppercase text-em-white">Identify The Infection.</h3>
                    <p class="text-em-silver text-lg">We spent a year cataloging every point of friction, distraction, and cognitive leakage. We mapped exactly how technology and comfort degrade human willpower.</p>
                </div>
                
                {{-- Node --}}
                <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-em-black border-2 border-em-slate rounded-sm transform md:-translate-x-1/2 mt-4 z-10" id="node-1"></div>
                
                <div class="md:w-1/2 order-1 md:order-2 opacity-0 transform md:translate-x-[50px]" id="phase-1-vis">
                    <div class="relative aspect-square max-w-sm bg-em-black border border-em-steel flex items-center justify-center p-8 group overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjMWExYTFhIj48L3JlY3Q+CjxyZWN0IHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9IiMzMzMiPjwvcmVjdD4KPC9zdmc+')] opacity-50"></div>
                        <div class="relative z-10 w-full h-full border border-em-slate bg-transparent rotate-12 flex items-center justify-center group-hover:rotate-0 transition-transform duration-700">
                            <div class="w-1/2 h-1/2 bg-em-steel/30 backdrop-blur-md transform -rotate-12"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Phase 2 --}}
            <div class="evo-phase flex flex-col md:flex-row gap-16 items-center relative pl-16 md:pl-0">
                <div class="md:w-1/2 order-1 md:order-1 opacity-0 transform md:translate-x-[-50px]" id="phase-2-vis">
                    <div class="relative aspect-square max-w-sm ml-auto bg-em-black border border-em-accent/40 flex items-center justify-center p-8 group overflow-hidden shadow-[0_0_30px_rgba(255,61,0,0.1)]">
                        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,61,0,0.1)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.1)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                        <div class="relative z-10 w-full h-full border-2 border-em-accent flex items-center justify-center group-hover:scale-95 transition-transform duration-700">
                            <div class="w-16 h-16 bg-em-accent shadow-[0_0_30px_#FF3D00] animate-pulse"></div>
                        </div>
                    </div>
                </div>
                
                {{-- Node --}}
                <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-em-black border-2 border-em-accent rounded-sm transform md:-translate-x-1/2 mt-4 z-10" id="node-2"></div>

                <div class="md:w-1/2 md:pl-16 order-2 md:order-2 pt-8 md:pt-0 opacity-0 transform md:translate-x-[50px]" id="phase-2-text">
                    <div class="font-mono text-em-accent text-sm mb-3">> PHASE 02: THE FRAMEWORK</div>
                    <h3 class="text-4xl font-black mb-6 uppercase text-em-white">Structural Engineering.</h3>
                    <p class="text-em-silver text-lg">We stripped away everything related to 'feelings' and 'passion'. We built cold, hard rules. If XYZ happens, I execute ABC scenario. We created an operating system for human behavior under pressure.</p>
                </div>
            </div>

            {{-- Phase 3 --}}
            <div class="evo-phase flex flex-col md:flex-row gap-16 items-center relative pl-16 md:pl-0">
                <div class="md:w-1/2 md:text-right md:pr-16 order-2 md:order-1 pt-8 md:pt-0 opacity-0 transform md:translate-x-[-50px]" id="phase-3-text">
                    <div class="font-mono text-em-ice text-sm mb-3">> PHASE 03: EXECUTION</div>
                    <h3 class="text-4xl font-black mb-6 uppercase text-em-white">The Clarity Engine.</h3>
                    <p class="text-em-silver text-lg">Once the system was installed, the results scaled automatically. The Edge Mind literature was compiled not as books to theoretically read, but as protocols to materially execute.</p>
                </div>
                
                {{-- Node --}}
                <div class="absolute left-0 md:left-1/2 w-4 h-4 bg-em-black border-2 border-em-ice rounded-full transform md:-translate-x-1/2 mt-4 z-10" id="node-3"></div>
                
                <div class="md:w-1/2 order-1 md:order-2 opacity-0 transform md:translate-x-[50px]" id="phase-3-vis">
                    <div class="relative aspect-square max-w-sm bg-em-black border border-em-ice/30 flex items-center justify-center p-8 group overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,212,255,0.1),transparent_70%)]"></div>
                        <div class="relative z-10 w-full h-full rounded-full border-2 border-em-ice/50 flex items-center justify-center group-hover:scale-95 transition-transform duration-1000">
                            <div class="w-1/2 h-1/2 rounded-full border-4 border-em-ice shadow-[0_0_40px_rgba(0,212,255,0.4)]"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

{{-- 4. THE DOCTRINE (Massive Typography Wall - Dark Mode) --}}
<section id="doctrine" class="py-40 bg-em-black text-em-white relative overflow-hidden border-t-2 border-em-accent/50">
    {{-- Grid Overlay --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,61,0,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.03)_1px,transparent_1px)] bg-[size:100px_100px] pointer-events-none z-0"></div>

    <div class="container-edge relative z-10">
        <div class="mb-32 slam-down flex items-center justify-between border-b-4 border-em-accent pb-8">
            <h2 class="text-5xl md:text-8xl font-black uppercase tracking-tighter">The Doctrine.</h2>
            <p class="font-mono text-sm tracking-[0.3em] uppercase text-em-accent hidden md:block">Built on concrete, not sand.</p>
        </div>

        <div class="space-y-32">
            <div class="doc-item opacity-0 transform translate-x-[-100px] border-l-[12px] border-em-steel pl-8 md:pl-16 relative">
                <div class="absolute left-0 top-0 bottom-0 w-[12px] bg-em-steel transition-colors duration-500 doc-bar ml-[-12px]"></div>
                <p class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-[1.1] tracking-tight text-em-silver doc-text transition-colors duration-500 hover:text-em-white cursor-default">Comfort is a slow poison.<br/>We are biologically wired<br/>to seek it, and mentally<br/>engineered to rot in it.</p>
            </div>
            
            <div class="doc-item opacity-0 transform translate-x-[-100px] border-l-[12px] border-em-accent pl-8 md:pl-16 md:ml-16 relative">
                <div class="absolute left-0 top-0 bottom-0 w-[12px] bg-em-accent transition-all duration-500 doc-bar ml-[-12px] shadow-[0_0_20px_rgba(255,61,0,0.5)]"></div>
                <p class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-[1.1] tracking-tight text-em-white doc-text cursor-default">Structure does not<br/>limit freedom.<br/><span class="text-em-accent">Structure is the only<br/>thing that enables it.</span></p>
            </div>
            
            <div class="doc-item opacity-0 transform translate-x-[-100px] border-l-[12px] border-em-ice pl-8 md:pl-16 md:ml-32 relative">
                <div class="absolute left-0 top-0 bottom-0 w-[12px] bg-em-ice transition-all duration-500 doc-bar ml-[-12px] shadow-[0_0_20px_rgba(0,212,255,0.5)]"></div>
                <p class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-[1.1] tracking-tight text-em-silver doc-text transition-colors duration-500 hover:text-em-white cursor-default">Clarity is not found<br/>through meditation.<br/>Clarity is earned<br/>through confrontation.</p>
            </div>
        </div>
    </div>
</section>

{{-- 5. OPERATIONAL CONSTRAINTS (Terminal Style) --}}
<section id="constraints" class="py-32 bg-em-charcoal relative border-y border-em-steel overflow-hidden">
    <div class="absolute right-0 top-0 w-1/2 h-full opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjMWExYTFhIj48L3JlY3Q+CjxyZWN0IHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9IiMzMzMiPjwvcmVjdD4KPC9zdmc+')] z-0"></div>

    <div class="container-edge relative z-10">
        <div class="mb-20 slam-down flex items-start gap-4">
            <span class="material-symbols-outlined text-4xl text-em-accent mt-1">terminal</span>
            <div>
                <h2 class="text-4xl md:text-6xl font-black text-em-white uppercase tracking-tight">System Constraints.</h2>
                <div class="font-mono text-sm text-em-slate uppercase mt-2">Running operational_rules.sh</div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            
            <div class="border border-em-steel bg-em-black p-8 hover:border-em-accent transition-colors duration-300 group slam-left relative">
                <div class="font-mono text-em-accent mb-4 flex justify-between">
                    <span><span class="text-em-slate mr-2">const</span>KILL_ALTERNATIVES</span>
                    <span>[01]</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 uppercase text-em-white group-hover:text-em-accent transition-colors">Burn The Ships</h3>
                <div class="text-em-silver font-mono text-sm leading-relaxed border-l-2 border-em-steel pl-4 group-hover:border-em-accent transition-colors">
                    <span class="terminal-prompt">>_</span> If you have a fallback plan, you will fall back. The system only works when you remove the escape hatches entirely.
                </div>
                <div class="absolute bottom-0 left-0 h-1 bg-em-accent w-0 group-hover:w-full transition-all duration-500"></div>
            </div>

            <div class="border border-em-steel bg-em-black p-8 hover:border-em-ice transition-colors duration-300 group slam-right relative" style="transition-delay: 100ms;">
                <div class="font-mono text-em-ice mb-4 flex justify-between">
                    <span><span class="text-em-slate mr-2">const</span>MICRO_ACTION</span>
                    <span>[02]</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 uppercase text-em-white group-hover:text-em-ice transition-colors">Execute Now</h3>
                <div class="text-em-silver font-mono text-sm leading-relaxed border-l-2 border-em-steel pl-4 group-hover:border-em-ice transition-colors">
                    <span class="terminal-prompt text-em-ice">>_</span> Grand visions are useless. Vision creates dopamine without effort. What physical action did you execute in the last 60 minutes?
                </div>
                <div class="absolute bottom-0 left-0 h-1 bg-em-ice w-0 group-hover:w-full transition-all duration-500"></div>
            </div>

            <div class="border border-em-steel bg-em-black p-8 hover:border-em-white transition-colors duration-300 group slam-left relative">
                <div class="font-mono text-em-slate mb-4 flex justify-between text-white">
                    <span><span class="text-em-slate mr-2">const</span>AUDIT_DEFENSE</span>
                    <span>[03]</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 uppercase text-em-white transition-colors">Lean Into Attack</h3>
                <div class="text-em-silver font-mono text-sm leading-relaxed border-l-2 border-em-steel pl-4 group-hover:border-em-white transition-colors">
                    <span class="terminal-prompt text-em-white">>_</span> When you feel emotionally attacked by the truth, do not defend yourself. Lean into the attack. Locate the frailty.
                </div>
                <div class="absolute bottom-0 left-0 h-1 bg-em-white w-0 group-hover:w-full transition-all duration-500"></div>
            </div>

            <div class="border border-em-steel bg-em-black p-8 hover:border-em-accent-hot transition-colors duration-300 group slam-right relative" style="transition-delay: 100ms;">
                <div class="font-mono text-em-accent-hot mb-4 flex justify-between">
                    <span><span class="text-em-slate mr-2">const</span>MOMENTUM_OVER_Q</span>
                    <span>[04]</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 uppercase text-em-white group-hover:text-em-accent-hot transition-colors">Defeat Perfection</h3>
                <div class="text-em-silver font-mono text-sm leading-relaxed border-l-2 border-em-steel pl-4 group-hover:border-em-accent-hot transition-colors">
                    <span class="terminal-prompt text-em-accent-hot">>_</span> Doing something poorly today is exponentially better than doing it perfectly tomorrow. Perfectionism is a sophisticated fear of execution.
                </div>
                <div class="absolute bottom-0 left-0 h-1 bg-em-accent-hot w-0 group-hover:w-full transition-all duration-500"></div>
            </div>

        </div>
    </div>
</section>

{{-- 6. IMPACT METRICS --}}
<section id="metrics" class="py-32 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="text-center mb-24 slam-down">
            <h2 class="text-4xl md:text-6xl font-black text-em-white uppercase tracking-tight">Field Data.</h2>
            <div class="w-24 h-2 bg-em-accent mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <div class="text-center metric-item slam-down relative pb-8 border-b-2 border-em-steel group hover:border-em-white transition-colors">
                <div class="text-6xl md:text-7xl font-black text-em-white mb-2 font-primary drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">
                    <span class="count-up" data-count="14">0</span><span class="text-4xl">K</span>
                </div>
                <div class="absolute bottom-0 left-0 h-[2px] bg-em-white w-0 group-hover:w-full metric-fill transition-all duration-1000 ease-out" data-fill="100%"></div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest mt-6">Minds Refactored</div>
            </div>
            
            <div class="text-center metric-item slam-down relative pb-8 border-b-2 border-em-steel group hover:border-em-accent transition-colors" style="transition-delay: 100ms;">
                <div class="text-6xl md:text-7xl font-black text-em-accent mb-2 font-primary drop-shadow-[0_0_20px_rgba(255,61,0,0.3)]">
                    <span class="count-up" data-count="92">0</span><span class="text-4xl">%</span>
                </div>
                <div class="absolute bottom-0 left-0 h-[2px] bg-em-accent w-0 group-hover:w-[92%] metric-fill transition-all duration-1000 ease-out" data-fill="92%"></div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest mt-6">Protocol Completion</div>
            </div>
            
            <div class="text-center metric-item slam-down relative pb-8 border-b-2 border-em-steel group hover:border-em-white transition-colors" style="transition-delay: 200ms;">
                <div class="text-6xl md:text-7xl font-black text-em-white mb-2 font-primary drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">
                    <span class="count-up" data-count="34">0</span>
                </div>
                <div class="absolute bottom-0 left-0 h-[2px] bg-em-white w-0 group-hover:w-[50%] metric-fill transition-all duration-1000 ease-out" data-fill="50%"></div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest mt-6">Countries Active</div>
            </div>
            
            <div class="text-center metric-item slam-down relative pb-8 border-b-2 border-em-steel group hover:border-em-ice transition-colors" style="transition-delay: 300ms;">
                <div class="text-6xl md:text-7xl font-black text-em-ice mb-2 font-primary drop-shadow-[0_0_20px_rgba(0,212,255,0.3)]">
                    <span class="count-up" data-count="2.8">0</span><span class="text-4xl">h</span>
                </div>
                <div class="absolute bottom-0 left-0 h-[2px] bg-em-ice w-0 group-hover:w-[80%] metric-fill transition-all duration-1000 ease-out" data-fill="80%"></div>
                <div class="font-mono text-xs text-em-slate uppercase tracking-widest mt-6">Avg Daily Focus Gained</div>
            </div>

        </div>
    </div>
</section>

{{-- 7. THE COLLECTIVE (Dossier Mode) --}}
<section id="engineers" class="py-32 bg-em-charcoal border-y border-em-steel relative">
    <div class="container-edge">
        <div class="mb-24 slam-down border-l-4 border-em-slate pl-6">
            <h2 class="text-4xl font-black text-em-white uppercase tracking-tight mb-2">The Unit.</h2>
            <p class="font-mono text-xs text-em-slate uppercase tracking-widest">Architects of Constraint // Classified</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            
            {{-- Architect 1 --}}
            <div class="dossier-card border border-em-steel p-1 flex flex-col slam-left hover:border-em-accent transition-colors duration-500 group">
                <div class="bg-em-black h-full p-8 flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-em-accent text-em-black font-mono text-[10px] uppercase font-bold px-3 py-1">Clearance: RED</div>
                    
                    <div class="flex items-start gap-6 mb-8 mt-4">
                        <div class="w-16 h-16 bg-em-gunmetal border-2 border-em-accent flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(255,61,0,0.1)] group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl text-em-accent">terminal</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black uppercase text-em-white mb-1">Systems Unit</h3>
                            <div class="font-mono text-[10px] text-em-slate mb-2">> ID: B-ENG-01</div>
                        </div>
                    </div>
                    
                    <div class="text-em-silver text-sm leading-relaxed mb-8 flex-grow">
                        We do not employ life coaches. We employ behavioral engineers. They do not care about your 'inner child'. They care about the structural integrity of your daily routine. We design protocols that are failure-proof through brute constraint.
                    </div>
                    
                    <div class="border-t border-em-steel pt-4 flex justify-between items-center font-mono text-[10px] text-em-slate uppercase">
                        <span>Status: ACTIVE</span>
                        <span class="text-em-accent group-hover:animate-pulse">No Compromise</span>
                    </div>
                </div>
            </div>

            {{-- Architect 2 --}}
            <div class="dossier-card border border-em-steel p-1 flex flex-col slam-right hover:border-em-ice transition-colors duration-500 group" style="transition-delay: 100ms;">
                <div class="bg-em-black h-full p-8 flex flex-col relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-em-ice text-em-black font-mono text-[10px] uppercase font-bold px-3 py-1">Clearance: BLUE</div>
                    
                    <div class="flex items-start gap-6 mb-8 mt-4">
                        <div class="w-16 h-16 bg-em-gunmetal border-2 border-em-ice flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(0,212,255,0.1)] group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl text-em-ice">visibility</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black uppercase text-em-white mb-1">Editorial VERIF</h3>
                            <div class="font-mono text-[10px] text-em-slate mb-2">> ID: E-VER-02</div>
                        </div>
                    </div>
                    
                    <div class="text-em-silver text-sm leading-relaxed mb-8 flex-grow">
                        Our publishing arm serves a single function: extracting all philosophical fluff and leaving only operational mechanics. If a sentence does not directly lead to a change in action, it is deleted. Period.
                    </div>
                    
                    <div class="border-t border-em-steel pt-4 flex justify-between items-center font-mono text-[10px] text-em-slate uppercase">
                        <span>Status: ACTIVE</span>
                        <span class="text-em-ice group-hover:animate-pulse">Signal Only</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 8. THE STANDARD (Closing Ultimatum) --}}
<section class="py-40 bg-em-black relative text-center border-t-4 border-em-accent overflow-hidden">
    {{-- High tension background --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(255,61,0,0.15)__0%,transparent_60%)] pointer-events-none opacity-50 pulse-glow"></div>
    <div class="absolute left-0 right-0 top-0 h-px bg-gradient-to-r from-transparent via-em-accent to-transparent"></div>

    <div class="container-edge relative z-10 flex flex-col items-center">
        <div class="font-mono text-em-accent tracking-widest text-xs mb-8 uppercase slam-down border border-em-accent/30 px-4 py-2 bg-em-accent/5">
            <span class="w-2 h-2 inline-block bg-em-accent rounded-full animate-ping mr-2"></span> System Ultimatum
        </div>

        <h2 class="text-5xl md:text-7xl lg:text-[6rem] font-black mb-8 uppercase leading-[0.9] tracking-tighter text-em-white slam-down" style="transition-delay: 100ms;">
            We don't ship<br/>until it <span class="bg-em-white text-em-black px-4 inline-block transform -rotate-2 ml-2">cuts</span> cleanly.
        </h2>
        
        <p class="text-em-silver text-xl md:text-2xl max-w-2xl mx-auto mb-16 font-body leading-relaxed slam-down" style="transition-delay: 200ms;">
            We are not building a library.<br/>
            <span class="font-bold text-em-white border-b-2 border-em-accent pb-1">We are building an armory.</span>
        </p>
        
        <div class="slam-down w-full max-w-lg mx-auto" style="transition-delay: 300ms;">
            <a href="{{ route('evolve') }}" class="block w-full bg-em-accent !text-em-black font-black text-xl md:text-2xl uppercase tracking-widest py-6 md:py-8 hover:bg-em-white hover:!text-em-accent transition-all duration-300 shadow-[0_0_40px_rgba(255,61,0,0.3)] hover:shadow-[0_0_60px_rgba(255,255,255,0.4)]">
                VIEW THE ARSENAL
            </a>
            <a href="{{ route('contact') }}" class="block w-full mt-6 font-mono text-xs text-em-slate uppercase tracking-widest hover:text-em-white transition-colors pb-1 border-b border-transparent hover:border-em-slate inline-block">
                INITIATE CONTACT
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        // Ensure GSAP and ScrollTrigger are loaded
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            /* --- 1. Breaking Point Pinned Sequence --- */
            const bpSection = document.querySelector('#breaking-point');
            if (bpSection) {
                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: bpSection,
                        start: "top top",
                        end: "+=200%", // Pin for longer scroll distance
                        pin: true,
                        scrub: 1, // Smooth scrub
                        anticipatePin: 1
                    }
                });

                // Fade in timestamp
                tl.to('.bp-timestamp', { opacity: 1, duration: 0.5 })
                  // Paragraph 1
                  .to('.bp-p1', { opacity: 1, y: 0, duration: 1 })
                  // Paragraph 2
                  .to('.bp-p2', { opacity: 1, y: 0, duration: 1 }, "+=0.5")
                  // Paragraph 3
                  .to('.bp-p3', { opacity: 1, y: 0, duration: 1 }, "+=0.5")
                  // Final Quote
                  .to('.bp-quote', { opacity: 1, y: 0, duration: 1.5, ease: "power2.out" }, "+=1");
            }

            /* --- 2. Evolution Timeline --- */
            const evoSection = document.querySelector('#evolution');
            if (evoSection) {
                // Line draw
                gsap.to('#evolution-progress', {
                    height: '100%',
                    ease: "none",
                    scrollTrigger: {
                        trigger: evoSection,
                        start: "top center",
                        end: "bottom center",
                        scrub: true
                    }
                });

                // Phase 1 Reveal
                const p1Tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '#node-1',
                        start: "top 70%",
                    }
                });
                p1Tl.to('#node-1', { backgroundColor: '#FF3D00', borderColor: '#FF3D00', duration: 0.3 })
                    .to('#phase-1-text', { opacity: 1, x: 0, duration: 0.6, ease: "power3.out" }, "-=0.2")
                    .to('#phase-1-vis', { opacity: 1, x: 0, duration: 0.6, ease: "power3.out" }, "-=0.4");

                // Phase 2 Reveal
                const p2Tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '#node-2',
                        start: "top 70%",
                    }
                });
                p2Tl.to('#node-2', { backgroundColor: '#FF3D00', borderColor: '#FF3D00', duration: 0.3 })
                    .to('#phase-2-text', { opacity: 1, x: 0, duration: 0.6, ease: "power3.out" }, "-=0.2")
                    .to('#phase-2-vis', { opacity: 1, x: 0, duration: 0.6, ease: "power3.out" }, "-=0.4");

                // Phase 3 Reveal
                const p3Tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '#node-3',
                        start: "top 70%",
                    }
                });
                p3Tl.to('#node-3', { backgroundColor: '#00D4FF', borderColor: '#00D4FF', duration: 0.3 })
                    .to('#phase-3-text', { opacity: 1, x: 0, duration: 0.6, ease: "power3.out" }, "-=0.2")
                    .to('#phase-3-vis', { opacity: 1, x: 0, duration: 0.6, ease: "power3.out" }, "-=0.4");
            }

            /* --- 3. Doctrine Horizontal Staggers --- */
            gsap.utils.toArray('.doc-item').forEach((item, i) => {
                gsap.to(item, {
                    scrollTrigger: {
                        trigger: item,
                        start: "top 85%",
                    },
                    opacity: 1,
                    x: 0,
                    duration: 0.8,
                    ease: "power4.out"
                });
            });

            /* --- 4. Metric Fills Check --- */
            // Using IntersectionObserver configured in app.js for .count-up but we can trigger the fills here
            const rMetrics = document.querySelectorAll('.metric-item');
            if (rMetrics.length > 0) {
                const mo = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const fillTarget = entry.target.querySelector('.metric-fill');
                            if(fillTarget) {
                                fillTarget.style.width = fillTarget.getAttribute('data-fill');
                            }
                            mo.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                rMetrics.forEach(m => mo.observe(m));
            }
        }
    });
</script>
@endpush
