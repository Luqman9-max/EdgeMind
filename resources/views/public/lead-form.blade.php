@extends('public.layouts.app')

@section('title', 'Access The Vault — Edge Mind')
@section('meta_description', 'Enter your email to unlock the Edge Mind vault. One step. Full access.')

@section('content')

{{-- Alpine Component for Cinematic Lead Form --}}
<section x-data="leadForm()" x-init="init()" class="relative w-full min-h-screen bg-em-black overflow-hidden flex flex-col justify-center font-body pt-20 pb-24 sm:pb-20">

    {{-- Background Noise & Ambient --}}
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPjxyZWN0IHdpZHRoPSI0IiBoZWlnaHQ9IjQiIGZpbGw9IiMxMjEwMTAiPjwvcmVjdD48cGF0aCBkPSJNMCAwTDIgMk0wIDJMMiAwIiBzdHJva2U9IiMzMzMiLz48L3N2Zz4=')] opacity-30 z-0 mix-blend-overlay"></div>
    <div class="absolute top-0 right-0 w-full h-[500px] bg-radial-gradient from-em-accent/5 to-transparent blur-[80px] z-0 animate-pulse pointer-events-none" style="background: radial-gradient(circle at 80% 20%, rgba(255,61,0,0.1) 0%, rgba(0,0,0,0) 60%);"></div>

    {{-- Scanline Ambient --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] pointer-events-none z-20 mix-blend-overlay opacity-30"></div>
    <div class="lead-scan-line"></div>

    {{-- Phase 1: Boot Sequence Overlay --}}
    <div x-show="phase === 1" 
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-0 z-50 bg-em-black flex flex-col items-center justify-center p-6 text-left">
        
        <div class="w-full max-w-2xl">
            <template x-for="(line, index) in bootLines" :key="index">
                <div x-show="index <= currentBootLine" 
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="font-mono text-em-accent text-sm md:text-base tracking-widest mb-4 flex items-center gap-3">
                     <span class="w-1.5 h-1.5 bg-em-accent rounded-full animate-pulse flex-shrink-0"></span>
                     <span x-text="line" class="typewriter-text"></span>
                </div>
            </template>
            <div x-show="currentBootLine < bootLines.length" class="w-3 h-5 bg-em-accent mt-2 animate-blink"></div>
        </div>
        
        {{-- Flash effect when transitioning --}}
        <div id="boot-flash" class="absolute inset-0 bg-em-white z-50 pointer-events-none opacity-0 transition-opacity duration-200"></div>
    </div>


    {{-- Phase 2 & 3: Main Layout --}}
    <div x-show="phase >= 2" x-cloak class="container-edge relative z-30 w-full flex-grow flex items-center justify-center">
        
        <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 max-w-7xl mx-auto items-center relative">
            
            {{-- Left Panel: Narrative --}}
            <div class="lg:col-span-7 flex flex-col justify-center lead-panel-left relative order-1 lg:order-1 mt-8 lg:mt-0">
                {{-- Decorative Line --}}
                <div class="absolute -left-6 top-0 bottom-0 w-px bg-em-steel hidden lg:block left-line-anim"></div>
                <div class="absolute -left-6 top-1/4 h-32 w-[3px] bg-em-accent hidden lg:block pulse-glow left-accent-anim"></div>

                <div class="font-mono text-em-accent tracking-[0.3em] text-xs mb-8 uppercase flex items-center gap-3 narrative-elem">
                    <span class="w-8 h-[1px] bg-em-accent"></span>
                    Identity Extraction
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-[5rem] font-black text-em-white leading-[0.9] tracking-tighter uppercase mb-6 sm:mb-10 text-glow-subtle narrative-elem">
                    Everyone who<br/>
                    closed this tab<br/>
                    stayed exactly<br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-accent to-em-accent-hot relative inline-block glitch-intense" data-text="where they are.">
                        where they are.
                    </span>
                </h1>

                <p class="text-lg sm:text-xl md:text-2xl font-medium text-em-silver leading-relaxed max-w-xl narrative-elem border-l-2 border-em-steel pl-4 sm:pl-6 py-2">
                    You're still here.<br/>
                    <span class="text-em-white">That means something.</span>
                </p>
            </div>

            {{-- Right Panel: Form --}}
            <div class="lg:col-span-5 relative lead-panel-right flex justify-end order-2 lg:order-2 mt-0 lg:mt-0">
                
                <div class="w-full max-w-md bg-em-black border-2 border-em-steel p-5 sm:p-8 md:p-10 relative overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-em-slate transition-colors duration-500 form-container">
                    
                    {{-- Form Glitch Flash --}}
                    <div id="form-submit-flash" class="absolute inset-0 bg-em-accent/20 z-50 pointer-events-none opacity-0 transition-opacity duration-200"></div>

                    <div class="flex items-center justify-between mb-10 pb-4 border-b border-em-steel/50">
                        <div class="font-mono text-em-white text-xs uppercase tracking-[0.2em] flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-em-white rounded-full"></span> 
                            <span x-text="phase === 3 ? 'ACCESS GRANTED' : 'SYSTEM_ENTRY'"></span>
                        </div>
                        <span class="font-mono text-[10px] text-em-slate">V.2.0.4</span>
                    </div>

                    <form action="{{ route('lead.submit') }}" method="POST" @submit="handleSubmit($event)" class="space-y-8 relative z-10" id="extraction-form">
                        @csrf

                        <div class="relative form-group-anim">
                            <label for="name" class="font-mono text-[10px] text-em-slate uppercase tracking-[0.15em] mb-3 flex items-center gap-2">
                                <span class="text-em-accent">></span> DESIGNATION:
                            </label>
                            <div class="relative group/input">
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-em-steel group-focus-within/input:bg-em-accent transition-colors duration-300"></div>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                    class="w-full bg-em-charcoal border-y border-r border-l-0 border-em-steel text-em-white font-mono text-sm px-6 py-4 focus:outline-none focus:border-em-accent focus:bg-em-gunmetal transition-all placeholder-em-slate/50"
                                    placeholder="Enter identifier...">
                            </div>
                            @error('name')
                                <p class="text-em-accent font-mono text-xs sm:text-[10px] mt-2 uppercase tracking-wider sm:tracking-widest"><span class="animate-pulse">!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="relative form-group-anim" style="transition-delay: 100ms">
                            <label for="email" class="font-mono text-[10px] text-em-slate uppercase tracking-[0.15em] mb-3 flex items-center gap-2">
                                <span class="text-em-accent">></span> SIGNAL_ADDRESS:
                            </label>
                            <div class="relative group/input">
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-em-steel group-focus-within/input:bg-em-accent transition-colors duration-300"></div>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                    class="w-full bg-em-charcoal border-y border-r border-l-0 border-em-steel text-em-white font-mono text-sm px-6 py-4 focus:outline-none focus:border-em-accent focus:bg-em-gunmetal transition-all placeholder-em-slate/50"
                                    placeholder="your@email.com">
                            </div>
                            @error('email')
                                <p class="text-em-accent font-mono text-xs sm:text-[10px] mt-2 uppercase tracking-wider sm:tracking-widest"><span class="animate-pulse">!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pt-6 relative form-group-anim" style="transition-delay: 200ms">
                            <button type="submit" 
                                class="w-full relative overflow-hidden group bg-em-charcoal border border-em-accent text-em-accent font-mono text-sm font-bold uppercase tracking-wider md:tracking-[0.2em] py-5 px-6 transition-all duration-300 hover:bg-em-accent hover:text-em-black btn-authorize">
                                <span class="relative z-10 flex items-center justify-center gap-3">
                                    <span x-text="phase === 3 ? 'AUTHORIZATION CONFIRMED' : 'AUTHORIZE ACCESS'"></span>
                                    <span x-show="phase === 2" class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">lock_open</span>
                                </span>
                            </button>
                        </div>
                    </form>

                    <div class="mt-8 text-center pt-6 border-t border-em-steel/30 footer-anim" style="transition-delay: 300ms">
                        <p class="font-mono text-[9px] text-em-slate uppercase tracking-[0.2em] flex items-center justify-center gap-2">
                            <span class="w-1 h-1 bg-em-slate rounded-full"></span>
                            No surveillance. No spam. We don't operate that way.
                        </p>
                    </div>

                    {{-- Ambient Corner Accents --}}
                    <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-em-slate/50"></div>
                    <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-em-slate/50"></div>
                    <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-em-slate/50"></div>
                    <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-em-slate/50"></div>
                </div>

            </div>
        </div>
        
    </div>

    {{-- Lower Footer Bar --}}
    <div x-show="phase >= 2" x-cloak class="fixed bottom-0 left-0 w-full h-10 sm:h-12 border-t border-em-steel bg-em-black/80 backdrop-blur-md flex items-center justify-between px-6 lg:px-12 z-40 text-glow-subtle nav-footer-anim">
        <div class="font-primary font-black text-em-white tracking-widest uppercase text-sm">
            Edge<span class="text-em-accent">·</span>Mind
        </div>
        <div class="font-mono text-[9px] text-em-slate uppercase tracking-[0.3em] flex items-center gap-3">
            <span class="w-1.5 h-1.5 bg-em-accent animate-pulse rounded-full hidden sm:block"></span>
            SYS.ONLINE
        </div>
    </div>
</section>

@push('scripts')
<script>
    function leadForm() {
        return {
            phase: 1, // 1: Boot, 2: Form, 3: Success
            bootLines: [
                '> VAULT ACCESS REQUESTED...',
                '> VERIFYING CLEARANCE LEVEL...',
                '> CLEARANCE: UNKNOWN',
                '> IDENTITY VERIFICATION REQUIRED',
                '> INITIATING EXTRACTION PROTOCOL...'
            ],
            currentBootLine: -1,
            init() {
                // Check if returning via old input (validation error)
                const hasErrors = {{ $errors->any() ? 'true' : 'false' }};
                if (hasErrors) {
                    this.phase = 2;
                    this.$nextTick(() => { this.playFormEntrance(); });
                    return;
                }

                // Normal Boot Sequence
                let interval = setInterval(() => {
                    if (this.currentBootLine < this.bootLines.length - 1) {
                        this.currentBootLine++;
                    } else {
                        clearInterval(interval);
                        setTimeout(() => {
                            // Flash and transition
                            const flash = document.getElementById('boot-flash');
                            if(flash) {
                                flash.classList.remove('opacity-0');
                                flash.classList.add('opacity-100');
                                setTimeout(() => {
                                    this.phase = 2;
                                    flash.classList.remove('opacity-100');
                                    flash.classList.add('opacity-0');
                                    
                                    // Trigger entrance animations
                                    this.$nextTick(() => { this.playFormEntrance(); });
                                }, 150);
                            } else {
                                this.phase = 2;
                                this.$nextTick(() => { this.playFormEntrance(); });
                            }
                        }, 600); // Wait a bit after last line
                    }
                }, 400); // 400ms per line
            },
            playFormEntrance() {
                if (typeof gsap !== 'undefined') {
                    const tl = gsap.timeline();
                    
                    // Left Panel Narrative Elements
                    tl.fromTo('.narrative-elem', 
                        { y: 50, opacity: 0 }, 
                        { y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: 'power3.out' }
                    );

                    // Left Panel Accents
                    tl.fromTo('.left-line-anim',
                        { scaleY: 0, transformOrigin: 'top' },
                        { scaleY: 1, duration: 1, ease: 'power2.inOut' },
                        "-=0.6"
                    );
                    tl.fromTo('.left-accent-anim',
                        { opacity: 0, y: -20 },
                        { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' },
                        "-=0.4"
                    );

                    // Form Container Container Slide
                    tl.fromTo('.form-container',
                        { y: 40, opacity: 0 },
                        { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out' },
                        "-=0.8"
                    );

                    // Form Groups Staggered
                    tl.fromTo('.form-group-anim',
                        { x: 30, opacity: 0 },
                        { x: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: 'power2.out' },
                        "-=0.4"
                    );

                    tl.fromTo('.footer-anim',
                        { opacity: 0 },
                        { opacity: 1, duration: 0.6 },
                        "-=0.2"
                    );

                    tl.fromTo('.nav-footer-anim',
                        { y: 20, opacity: 0 },
                        { y: 0, opacity: 1, duration: 0.6, ease: 'power2.out' },
                        "-=0.8"
                    );
                }
            },
            handleSubmit(e) {
                // Don't prevent default, let it submit, but show success state briefly
                this.phase = 3;
                
                const flash = document.getElementById('form-submit-flash');
                if(flash) {
                    flash.classList.remove('opacity-0');
                    flash.classList.add('opacity-100');
                    setTimeout(() => {
                        flash.classList.remove('opacity-100');
                        flash.classList.add('opacity-0');
                    }, 150);
                }
                
                // Add a small shake to form
                const formContainer = document.querySelector('.form-container');
                if(formContainer) {
                    formContainer.classList.add('screen-shake');
                }
            }
        }
    }
</script>
@endpush

@endsection
