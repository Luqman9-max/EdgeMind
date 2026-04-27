@extends('public.layouts.app')

@section('title', 'Edge Mind Arsenal — The Protocols')
@section('meta_description', 'The complete collection of Edge Mind protocols and structural frameworks.')

@section('content')

<section class="catalog-hero relative w-full min-h-[85vh] flex flex-col justify-center items-center pt-20 overflow-hidden bg-em-black border-b border-em-steel">
    {{-- Massive Background Typography --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full text-center z-0 pointer-events-none opacity-5 select-none overflow-hidden">
        <div class="text-[15vw] font-primary font-black leading-none text-transparent tracking-tighter whitespace-nowrap" style="-webkit-text-stroke: 2px var(--em-white);">
            PROTOCOL VAULT
        </div>
    </div>

    {{-- Absolute Darkness & Grid --}}
    <div class="absolute inset-0 z-0 pointer-events-none mix-blend-screen">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(255,61,0,0.1)_0%,transparent_70%)] opacity-50 blur-[50px] animate-pulse"></div>
        <div class="absolute top-0 left-0 w-full h-[60vh] bg-[linear-gradient(rgba(255,61,0,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,61,0,0.05)_1px,transparent_1px)] bg-[size:40px_40px] transform perspective-[1000px] rotateX-[70deg] origin-top opacity-40"></div>
        <div class="scan-line-anim absolute inset-0 opacity-30"></div>
    </div>

    <div class="container-edge relative z-10 w-full mt-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Left: Main Copy --}}
            <div class="lg:col-span-8 flex flex-col items-start w-full">
                <div class="mb-8 hero-stagger w-full flex items-center gap-4">
                    <span class="inline-flex items-center gap-3 border border-em-accent/50 bg-em-accent/10 text-em-accent font-mono text-[10px] sm:text-xs px-4 py-2 uppercase tracking-[0.3em] backdrop-blur-sm relative overflow-hidden group">
                        <span class="absolute inset-0 w-full h-full bg-em-accent/20 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-300 ease-out"></span>
                        <span class="w-2 h-2 bg-em-accent rounded-full animate-pulse shadow-[0_0_10px_rgba(255,61,0,0.8)]"></span>
                        LIVE ENVIRONMENT // SECURE
                    </span>
                    <div class="flex-1 h-px bg-gradient-to-r from-em-accent/50 to-transparent"></div>
                </div>
                
                <h1 class="text-5xl sm:text-7xl md:text-[7rem] lg:text-[8rem] font-primary font-black text-em-white leading-[0.85] tracking-tighter mb-8 uppercase drop-shadow-2xl relative">
                    <div class="overflow-hidden"><div class="hero-word translate-y-full">THE</div></div>
                    <div class="overflow-hidden relative">
                        <div class="hero-word translate-y-full text-em-accent glitch-intense" data-text="ARSENAL.">ARSENAL.</div>
                        <div class="absolute -right-8 top-0 text-sm font-mono text-em-steel tracking-widest rotate-90 origin-bottom-left select-none">V_2.0</div>
                    </div>
                </h1>
                
                <div class="hero-stagger opacity-0 flex flex-col sm:flex-row items-start sm:items-center gap-6 border-l-4 border-em-accent pl-6 py-2 bg-gradient-to-r from-em-charcoal/80 to-transparent w-full max-w-3xl">
                    <p class="text-lg md:text-xl font-mono text-em-silver leading-relaxed">
                        System architecture for the intellectually aggressive. <br class="hidden md:block"/> Select your protocol. Execute the parameter.
                    </p>
                    <div class="hidden sm:flex w-12 h-12 shrink-0 border border-em-steel items-center justify-center animate-[spin_10s_linear_infinite]">
                        <span class="material-symbols-outlined text-em-accent">settings_ethernet</span>
                    </div>
                </div>
            </div>

            {{-- Right: Diagnostic Panel --}}
            <div class="lg:col-span-4 hidden lg:flex flex-col hero-stagger opacity-0 transform translate-x-10">
                <div class="border border-em-steel bg-em-gunmetal/80 backdrop-blur-md p-6 relative overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.5)]">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-em-accent/10 blur-xl rounded-full"></div>
                    <div class="absolute inset-0 bg-[linear-gradient(transparent_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] pointer-events-none z-10"></div>
                    
                    <div class="relative z-20 flex justify-between items-center mb-6 border-b border-em-steel/50 pb-4">
                        <span class="font-mono text-[10px] text-em-slate uppercase tracking-widest">System Status</span>
                        <span class="font-mono text-xs text-em-accent bg-em-accent/10 px-2 py-0.5 border border-em-accent/30 animate-pulse">ONLINE</span>
                    </div>

                    <ul class="relative z-20 space-y-4 font-mono text-xs text-em-silver">
                        <li class="flex justify-between items-center">
                            <span class="text-em-slate">Total Protocols:</span>
                            <span class="text-em-white font-bold">{{ str_pad($books->total(), 2, '0', STR_PAD_LEFT) }}</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-em-slate">Authorization:</span>
                            <span class="text-em-white font-bold">GRANTED</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-em-slate">Encryption:</span>
                            <span class="text-em-white font-bold">AES-256</span>
                        </li>
                    </ul>

                    <div class="relative z-20 mt-6 pt-4 border-t border-em-steel/50">
                        <div class="h-1 w-full bg-em-black overflow-hidden">
                            <div class="h-full bg-em-accent w-full transform origin-left animate-[scaleX_2s_ease-in-out_infinite_alternate]"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Infinite Ticker Tape --}}
    <div class="absolute bottom-0 left-0 w-full h-10 bg-em-accent border-y border-em-white/20 overflow-hidden flex items-center z-20 opacity-0 hero-stagger transform translate-y-10">
        <div class="flex whitespace-nowrap animate-[marquee_20s_linear_infinite]">
            @for($i = 0; $i < 10; $i++)
                <span class="font-mono text-[10px] sm:text-xs text-em-black font-bold uppercase tracking-[0.2em] mx-6 flex items-center gap-4">
                    <span class="material-symbols-outlined text-sm">warning</span> WARNING: IMPLEMENTATION REQUIRED 
                    <span class="material-symbols-outlined text-sm">warning</span> NO EXCUSES ACCEPTED 
                    <span class="material-symbols-outlined text-sm">warning</span> SYSTEM OVERRIDE ACTIVE
                </span>
            @endfor
        </div>
    </div>

    {{-- Custom Keyframes for Marquee & ScaleX --}}
    <style>
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        @keyframes scaleX {
            0% { transform: scaleX(0.1); }
            100% { transform: scaleX(1); }
        }
    </style>
</section>

{{-- 2. CATALOG GRID & FILTERS --}}
<section class="py-24 bg-em-charcoal min-h-screen relative z-10 border-t border-em-steel" id="inventory">
    <div class="container-edge">
        
        {{-- Controls Bar --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16 border-b border-em-steel pb-6 filter-bar opacity-0 translate-y-8">
            <div class="flex flex-nowrap overflow-x-auto gap-2 sm:gap-3 mb-4 md:mb-0 pb-2 -mx-4 px-4 sm:-mx-0 sm:px-0 scrollbar-hide">
                <button class="font-mono text-xs px-6 py-3 bg-em-black border border-em-accent text-em-accent uppercase tracking-widest hover:bg-em-accent hover:text-em-black transition-all duration-300 relative overflow-hidden group">
                    <span class="absolute inset-0 bg-em-accent transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 z-0"></span>
                    <span class="relative z-10">All Protocols</span>
                </button>
                <button class="font-mono text-xs px-6 py-3 bg-transparent border border-em-steel text-em-slate uppercase tracking-widest hover:border-em-white hover:text-em-white transition-all duration-300 relative overflow-hidden group">
                    <span class="absolute inset-0 bg-em-white transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 z-0"></span>
                    <span class="relative z-10 group-hover:text-em-black transition-colors">Vol I</span>
                </button>
                <button class="font-mono text-xs px-6 py-3 bg-transparent border border-em-steel text-em-slate uppercase tracking-widest hover:border-em-white hover:text-em-white transition-all duration-300 relative overflow-hidden group">
                    <span class="absolute inset-0 bg-em-white transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 z-0"></span>
                    <span class="relative z-10 group-hover:text-em-black transition-colors">Vol II</span>
                </button>
                <button class="font-mono text-xs px-6 py-3 bg-transparent border border-em-steel text-em-slate uppercase tracking-widest hover:border-em-white hover:text-em-white transition-all duration-300 relative overflow-hidden group">
                    <span class="absolute inset-0 bg-em-white transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 z-0"></span>
                    <span class="relative z-10 group-hover:text-em-black transition-colors">Vol III</span>
                </button>
            </div>
            <div class="font-mono text-[10px] sm:text-xs text-em-slate tracking-widest uppercase flex items-center gap-3 bg-em-black px-4 py-2 border border-em-steel">
                <span class="w-1.5 h-1.5 bg-em-accent rounded-full animate-pulse"></span>
                Modules Detected: <span class="text-em-white font-bold text-sm ml-1 count-up" data-count="{{ $books->total() }}">0</span>
            </div>
        </div>

        {{-- Inventory Grid --}}
        @if($books->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 md:gap-x-12 gap-y-10 md:gap-y-16 lg:gap-y-24">
            @foreach($books as $index => $book)
            <a href="{{ route('book.show', $book->slug) }}" class="dossier-item group block relative opacity-0 translate-y-16">
                
                {{-- Left Accent Bar (Fills on hover) --}}
                <div class="absolute -left-4 md:-left-6 top-0 w-1 h-full bg-em-steel z-0">
                    <div class="absolute bottom-0 left-0 w-full bg-em-accent h-0 group-hover:h-full transition-all duration-500 ease-out"></div>
                </div>

                {{-- Index Number HUD --}}
                <div class="absolute -top-6 sm:-top-10 -left-2 md:-left-4 text-3xl sm:text-5xl md:text-7xl font-mono font-black text-em-steel/30 group-hover:text-em-accent/40 transition-colors z-20 pointer-events-none select-none">
                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </div>

                {{-- Image Container --}}
                <div class="relative w-full aspect-[4/3] sm:aspect-[4/5] bg-em-gunmetal overflow-hidden border border-em-steel group-hover:border-em-accent transition-colors duration-500 shadow-[0_10px_30px_rgba(0,0,0,0.5)] group-hover:shadow-[0_20px_50px_rgba(255,61,0,0.15)] z-10">
                    
                    {{-- Decorative Corners --}}
                    <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-em-accent z-20 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-em-accent z-20 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    @if($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="relative z-10 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out filter grayscale group-hover:grayscale-0 mix-blend-luminosity group-hover:mix-blend-normal">
                    @else
                        {{-- Elaborate CLASSIFIED Placeholder --}}
                        <div class="relative w-full h-full bg-em-black flex flex-col items-center justify-center p-8 overflow-hidden z-10">
                            <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-em-accent/5 to-transparent animate-[scanSweep_4s_linear_infinite]"></div>
                            
                            <div class="border border-em-steel p-6 w-full text-center relative bg-em-gunmetal/50 backdrop-blur-sm group-hover:border-em-accent transition-colors duration-500">
                                <span class="material-symbols-outlined text-5xl text-em-steel mb-4 group-hover:text-em-accent transition-colors animate-pulse">fingerprint</span>
                                <div class="font-mono text-xs text-em-slate tracking-widest uppercase mb-2">VISUAL DATA MISSING</div>
                                <div class="font-primary font-black text-2xl text-em-white uppercase tracking-tighter border-y border-em-steel py-2 mb-2">RESTRICTED</div>
                                <div class="font-mono text-[9px] text-em-slate uppercase break-all opacity-50">HASH: {{ md5($book->id . $book->title) }}</div>
                            </div>
                        </div>
                    @endif
                    
                    {{-- Category Tag --}}
                    <div class="absolute top-4 right-4 z-30">
                        <span class="inline-flex items-center gap-2 bg-em-black/90 border border-em-ice text-em-ice font-mono text-[9px] px-2 py-1 uppercase tracking-widest backdrop-blur-md">
                            <span class="w-1.5 h-1.5 bg-em-ice rounded-full animate-pulse"></span> {{ $book->category ?? 'STRUCTURAL' }}
                        </span>
                    </div>

                    {{-- Hover Reveal Panel (Description) --}}
                    <div class="absolute bottom-0 left-0 w-full bg-em-black/95 backdrop-blur-md border-t border-em-accent transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out z-20 p-6 flex flex-col justify-end">
                        <div class="font-mono text-[10px] text-em-accent uppercase tracking-widest mb-2">> Protocol Briefing</div>
                        <p class="text-sm text-em-silver line-clamp-3 leading-relaxed">
                            {{ Str::limit(strip_tags($book->description), 150) }}
                        </p>
                    </div>
                </div>
                
                {{-- Book Meta (Outside image) --}}
                <div class="pt-6 flex flex-col relative z-10 pl-2">
                    <h3 class="text-3xl font-black text-em-white mb-4 leading-none uppercase tracking-tight group-hover:text-em-accent transition-colors duration-300">{{ $book->title }}</h3>
                    
                    <div class="flex items-end justify-between border-t border-em-steel pt-4 mt-auto">
                        <div class="font-mono">
                            <div class="text-[10px] text-em-slate uppercase tracking-widest mb-1">Authorization Req:</div>
                            @if($book->is_free)
                                <span class="text-em-white font-bold text-xl bg-em-white/10 px-2 py-1">OPEN ACCESS</span>
                            @elseif($book->price)
                                <span class="text-em-accent font-bold text-2xl">${{ number_format($book->price, 2) }}</span>
                            @endif
                        </div>
                        
                        <div class="flex items-center gap-2 font-mono text-xs text-em-slate group-hover:text-em-white transition-colors">
                            <span class="uppercase tracking-widest">Inspect</span> 
                            <span class="material-symbols-outlined text-base transform group-hover:translate-x-1 transition-transform group-hover:text-em-accent">arrow_forward</span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Custom Pagination --}}
        <div class="mt-24 flex justify-center w-full pagination-wrapper opacity-0 translate-y-8">
            {{ $books->links('public.components.pagination') }}
        </div>

        @else
        <div class="flex flex-col items-center justify-center py-40 border border-em-steel border-dashed bg-em-black relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-em-accent/5 to-transparent w-[200%] animate-[scanSweep_3s_linear_infinite] pointer-events-none mix-blend-screen"></div>
            <span class="material-symbols-outlined text-6xl text-em-slate mb-6 animate-pulse">lock</span>
            <h3 class="text-3xl font-black text-em-white mb-2 uppercase tracking-tight">Vault Empty</h3>
            <p class="font-mono text-em-slate text-sm uppercase tracking-widest">> No protocols matched the criteria_</p>
        </div>
        @endif

    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            // Hero Sequence
            const heroTl = gsap.timeline({ delay: 0.1 });
            
            heroTl.fromTo('.hero-stagger', 
                { y: 20, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: 'power3.out' }
            )
            .to('.hero-word', {
                y: 0,
                duration: 1,
                stagger: 0.15,
                ease: 'power4.out'
            }, "-=0.6")
            .to('#hero-line', {
                scaleX: 1,
                duration: 1.2,
                ease: 'power3.inOut'
            }, "-=0.4");

            // Filter Bar
            gsap.to('.filter-bar', {
                scrollTrigger: {
                    trigger: '#inventory',
                    start: 'top 80%'
                },
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out'
            });

            // Dossier Cards Staggered Entry
            const cards = document.querySelectorAll('.dossier-item');
            if(cards.length > 0) {
                ScrollTrigger.batch(cards, {
                    onEnter: batch => gsap.to(batch, {
                        opacity: 1, 
                        y: 0, 
                        stagger: { each: 0.15, grid: [1, 2] }, 
                        overwrite: true,
                        duration: 0.8,
                        ease: 'back.out(1.2)'
                    }),
                    start: "top 85%"
                });
            }

            // Pagination Reveal
            const pagination = document.querySelector('.pagination-wrapper');
            if(pagination) {
                gsap.to(pagination, {
                    scrollTrigger: {
                        trigger: pagination,
                        start: 'top 90%'
                    },
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out'
                });
            }
        }
    });
</script>
@endpush
