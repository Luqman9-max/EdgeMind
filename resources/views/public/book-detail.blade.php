@extends('public.layouts.app')

@section('title', $book->title . ' — Edge Mind')
@section('meta_description', Str::limit(strip_tags($book->description), 160))

@section('content')

{{-- ===== PROTOCOL HEADER ===== --}}
<section class="relative w-full pt-32 pb-12 bg-em-black border-b border-em-steel z-10">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPjxyZWN0IHdpZHRoPSI0IiBoZWlnaHQ9IjQiIGZpbGw9IiMxMjEwMTAiPjwvcmVjdD48cGF0aCBkPSJNMCAwTDIgMk0wIDJMMiAwIiBzdHJva2U9IiMzMzMiLz48L3N2Zz4=')] opacity-20 z-0 mix-blend-overlay pointer-events-none"></div>
    <div class="container-edge relative z-10">
        <div class="flex items-center gap-3 font-mono text-[10px] md:text-xs text-em-slate uppercase tracking-widest detail-stagger opacity-0 transform -translate-x-4">
            <a href="{{ route('catalog.index') }}" class="hover:text-em-white transition-colors">VAULT</a>
            <span class="text-em-steel">/</span>
            <span class="text-em-white bg-em-charcoal px-2 py-0.5 border border-em-steel">{{ $book->category ?? 'STRUCTURAL' }}</span>
            <span class="text-em-steel hidden sm:inline">/</span>
            <span class="text-em-accent hidden sm:inline truncate max-w-[200px]">{{ $book->title }}</span>
        </div>
    </div>
</section>

{{-- ===== PROTOCOL DETAIL ===== --}}
<section id="book-detail" class="py-16 md:py-24 bg-em-black relative overflow-hidden">
    {{-- Ambient Light --}}
    <div class="absolute top-1/4 right-0 w-[50vw] h-[50vw] bg-em-accent/5 blur-[120px] rounded-full pointer-events-none transform translate-x-1/4 z-0"></div>

    <div class="container-edge relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">
            
            {{-- Cover Image (5 cols) --}}
            <div class="lg:col-span-5 relative w-full perspective-[1000px] detail-cover-container">
                <div class="relative w-full aspect-[4/5] bg-em-gunmetal border border-em-steel p-4 sm:p-6 lg:p-8 shadow-[0_20px_50px_rgba(0,0,0,0.8)] detail-cover transform transition-transform duration-700 ease-out group">
                    
                    {{-- Decorative Military Corners --}}
                    <div class="absolute top-0 left-0 w-12 h-12 border-t-4 border-l-4 border-em-steel group-hover:border-em-accent transition-colors duration-500 z-20 pointer-events-none"></div>
                    <div class="absolute top-0 right-0 w-12 h-12 border-t-4 border-r-4 border-em-steel group-hover:border-em-accent transition-colors duration-500 z-20 pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 w-12 h-12 border-b-4 border-l-4 border-em-steel group-hover:border-em-accent transition-colors duration-500 z-20 pointer-events-none"></div>
                    <div class="absolute bottom-0 right-0 w-12 h-12 border-b-4 border-r-4 border-em-steel group-hover:border-em-accent transition-colors duration-500 z-20 pointer-events-none"></div>

                    {{-- Floating Index Tag --}}
                    <div class="absolute -left-6 top-1/4 bg-em-accent text-em-black font-mono text-[10px] font-bold px-3 py-1 transform -rotate-90 origin-left tracking-widest z-30 shadow-[0_0_20px_rgba(255,61,0,0.3)] select-none">
                        PROTOCOL // {{ str_pad($book->id, 3, '0', STR_PAD_LEFT) }}
                    </div>

                    <div class="relative w-full h-full overflow-hidden bg-em-black border border-em-steel/50">
                        @if($book->cover_image)
                            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}"
                                 class="w-full h-full object-cover filter grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 mix-blend-luminosity group-hover:mix-blend-normal transition-all duration-1000 ease-out transform group-hover:scale-105">
                        @else
                            {{-- Elaborate CLASSIFIED Placeholder --}}
                            <div class="relative w-full h-full flex flex-col items-center justify-center p-8 z-10 bg-em-black">
                                <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-em-accent/5 to-transparent animate-[scanSweep_4s_linear_infinite]"></div>
                                
                                <div class="border border-em-steel p-6 w-full text-center relative bg-em-gunmetal/50 backdrop-blur-sm group-hover:border-em-accent transition-colors duration-500">
                                    <span class="material-symbols-outlined text-6xl text-em-steel mb-4 group-hover:text-em-accent transition-colors animate-pulse">fingerprint</span>
                                    <div class="font-mono text-xs text-em-slate tracking-widest uppercase mb-2">VISUAL DATA MISSING</div>
                                    <div class="font-primary font-black text-3xl text-em-white uppercase tracking-tighter border-y border-em-steel py-4 mb-2">RESTRICTED</div>
                                    <div class="font-mono text-[10px] text-em-slate uppercase break-all opacity-50">HASH: {{ md5($book->id . $book->title) }}</div>
                                </div>
                            </div>
                        @endif
                        
                        {{-- Scanline Overlay --}}
                        <div class="absolute inset-0 bg-[linear-gradient(transparent_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] pointer-events-none z-20"></div>
                    </div>
                </div>
            </div>

            {{-- Details (7 cols) --}}
            <div class="lg:col-span-7 flex flex-col pt-4 lg:pt-12">
                
                @if($book->category)
                    <div class="detail-stagger opacity-0 transform translate-y-4 mb-6">
                        <span class="inline-flex items-center gap-2 border border-em-ice/30 bg-em-ice/5 text-em-ice font-mono text-[10px] px-3 py-1 uppercase tracking-[0.2em]">
                            <span class="w-1.5 h-1.5 bg-em-ice rounded-full animate-pulse shadow-[0_0_10px_rgba(0,212,255,0.5)]"></span> {{ $book->category }}
                        </span>
                    </div>
                @endif

                <h1 class="detail-stagger opacity-0 transform translate-y-4 text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] font-black text-em-white leading-[0.9] tracking-tighter uppercase mb-8">
                    {{ $book->title }}
                </h1>

                <div class="detail-stagger opacity-0 transform translate-y-4 flex flex-wrap items-center gap-4 sm:gap-6 mb-12 font-mono text-xs sm:text-sm text-em-slate tracking-widest uppercase">
                    @if($book->author)
                        <span class="flex items-center gap-2">
                            AUTHOR: <strong class="text-em-white">{{ $book->author }}</strong>
                        </span>
                    @endif
                    
                    @if($book->author && $book->year)
                        <span class="text-em-steel hidden sm:inline">|</span>
                    @endif

                    @if($book->year)
                        <span class="flex items-center gap-2">
                            EST: <strong class="text-em-white">{{ $book->year }}</strong>
                        </span>
                    @endif
                </div>

                <div class="w-16 h-1 bg-em-accent mb-12 detail-stagger opacity-0 origin-left scale-x-0" id="detail-divider"></div>

                <div class="detail-stagger opacity-0 transform translate-y-4 prose prose-invert max-w-none mb-16 text-lg text-em-silver leading-relaxed font-body">
                    {{-- Parse paragraphs and style the first one specifically --}}
                    @php
                        $description = $book->description;
                        $paragraphs = explode("\n", str_replace(["\r\n", "\r"], "\n", $description));
                        $paragraphs = array_filter($paragraphs, 'trim');
                    @endphp
                    
                    @if(count($paragraphs) > 0)
                        <p class="text-xl md:text-2xl font-medium text-em-white leading-snug border-l-4 border-em-accent pl-6 py-2 mb-8 bg-em-charcoal/30">
                            {{ trim($paragraphs[0]) }}
                        </p>
                        @foreach(array_slice($paragraphs, 1) as $paragraph)
                            <p class="mb-6">{{ trim($paragraph) }}</p>
                        @endforeach
                    @else
                        {!! nl2br(e($book->description)) !!}
                    @endif
                </div>

                {{-- Price & CTA --}}
                <div class="detail-stagger opacity-0 transform translate-y-4 border-t border-em-steel pt-10 mt-auto flex flex-row items-center justify-between gap-4 sm:gap-8">
                    <div class="flex flex-col shrink-0">
                        <span class="font-mono text-[9px] sm:text-xs text-em-slate uppercase tracking-widest mb-2">Acquisition Required</span>
                        @if($book->is_free)
                            <span class="font-primary text-2xl sm:text-4xl font-black text-em-white uppercase tracking-tight">OPEN ACCESS</span>
                        @elseif($book->price)
                            <span class="font-primary text-3xl sm:text-5xl font-black text-em-accent leading-none">${{ number_format($book->price, 2) }}</span>
                        @endif
                    </div>

                    @if($book->gumroad_url)
                        <div class="flex flex-col items-end relative group">
                            <div class="absolute -inset-2 bg-em-accent/20 blur-xl rounded-full group-hover:bg-em-accent/40 transition-colors duration-500 z-0"></div>
                            <a href="{{ $book->gumroad_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary relative z-10 px-4 py-3 text-xs sm:px-10 sm:py-5 sm:text-xl tracking-widest font-bold shadow-[0_0_30px_rgba(255,61,0,0.3)] bg-em-accent text-em-black border-2 border-em-accent hover:bg-em-white hover:border-em-white transition-all overflow-hidden whitespace-nowrap">
                                <div class="absolute inset-0 bg-[linear-gradient(transparent_50%,rgba(0,0,0,0.1)_50%)] bg-[length:100%_4px] pointer-events-none z-20 mix-blend-overlay"></div>
                                <span class="relative z-30 flex items-center justify-center gap-2 sm:gap-3">
                                    {{ $book->is_free ? 'DOWNLOAD' : 'ACQUIRE' }} 
                                    <span class="material-symbols-outlined text-base sm:text-2xl">system_update_alt</span>
                                </span>
                            </a>
                            <span class="font-mono text-[9px] sm:text-[10px] text-em-slate uppercase mt-2 sm:mt-4 tracking-widest text-right hidden sm:block">Connection secure. Direct transfer.</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== RELATED INTEL ===== --}}
@if($relatedBooks->count() > 0)
<section id="related" class="py-24 bg-em-charcoal border-t border-em-steel relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[800px] h-1 bg-em-steel transform -translate-y-px">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-em-accent"></div>
    </div>

    <div class="container-edge">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 detail-related-stagger opacity-0 transform translate-y-8">
            <div>
                <span class="inline-flex items-center gap-2 font-mono text-[10px] text-em-slate uppercase tracking-widest mb-4">
                    <span class="w-1.5 h-1.5 bg-em-slate rounded-full"></span> RELATED_INTEL
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-em-white uppercase tracking-tight">More From The Vault.</h2>
            </div>
            <a href="{{ route('catalog.index') }}" class="btn btn-outline border-em-steel text-em-silver hover:border-em-white hover:text-em-white hidden md:flex font-mono text-xs mt-6 md:mt-0 group">
                <span class="material-symbols-outlined text-sm mr-2 transform group-hover:-translate-x-1 transition-transform">west</span> BACK TO VAULT
            </a>
        </div>

        {{-- 4-Column Grid on Desktop --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            @foreach($relatedBooks->take(4) as $index => $related)
            <a href="{{ route('book.show', $related->slug) }}" class="dossier-card border border-em-steel p-6 relative group bg-em-black hover:border-em-accent transition-colors duration-300 block overflow-hidden detail-related-card opacity-0 transform translate-y-12">
                {{-- Corner accent --}}
                <div class="absolute top-0 right-0 w-0 h-0 border-t-[30px] border-l-[30px] border-t-em-steel border-l-transparent group-hover:border-t-em-accent transition-colors duration-300 z-10"></div>
                
                {{-- Glitch background --}}
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-em-accent/5 to-transparent w-[200%] transform -translate-x-full group-hover:animate-[scanSweep_2s_linear_infinite] pointer-events-none mix-blend-screen opacity-0 group-hover:opacity-100"></div>

                <div class="relative z-10">
                    <div class="font-mono text-[9px] text-em-slate uppercase tracking-widest mb-4 pb-4 border-b border-em-steel/50 flex justify-between items-center group-hover:border-em-accent/50 transition-colors">
                        <span>{{ $related->category ?? 'STRUCTURAL' }}</span>
                        <span class="text-em-steel group-hover:text-em-accent transition-colors">>></span>
                    </div>
                    
                    <h4 class="text-xl font-bold text-em-white uppercase leading-tight mb-2 group-hover:text-em-accent transition-colors">{{ $related->title }}</h4>
                    
                    <div class="flex items-center justify-between mt-8">
                        @if($related->is_free)
                            <span class="font-mono text-xs text-em-white font-bold bg-em-white/10 px-2 py-0.5">FREE</span>
                        @elseif($related->price)
                            <span class="font-mono text-sm text-em-accent font-bold">${{ number_format($related->price, 2) }}</span>
                        @endif
                        <span class="material-symbols-outlined text-sm text-em-slate group-hover:text-em-accent transform group-hover:translate-x-1 transition-all">east</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="mt-12 text-center md:hidden">
            <a href="{{ route('catalog.index') }}" class="btn btn-outline border-em-steel text-em-silver hover:border-em-white hover:text-em-white w-full justify-center group font-mono text-xs">
                <span class="material-symbols-outlined text-sm mr-2 transform group-hover:-translate-x-1 transition-transform">west</span> BACK TO VAULT
            </a>
        </div>
    </div>
</section>
@endif

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap !== 'undefined') {
            // Header Sequence
            gsap.to('.detail-stagger', {
                y: 0,
                x: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.1,
                ease: 'power3.out',
                delay: 0.1
            });

            // Divider Line
            gsap.to('#detail-divider', {
                scaleX: 1,
                duration: 1,
                ease: 'power4.inOut',
                delay: 0.5
            });

            // 3D Tilt Effect on Cover
            const coverContainer = document.querySelector('.detail-cover-container');
            const cover = document.querySelector('.detail-cover');

            if (coverContainer && cover) {
                coverContainer.addEventListener('mousemove', (e) => {
                    const rect = coverContainer.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -10; // Max rotation 10deg
                    const rotateY = ((x - centerX) / centerX) * 10;
                    
                    gsap.to(cover, {
                        rotateX: rotateX,
                        rotateY: rotateY,
                        transformPerspective: 1000,
                        ease: 'power1.out',
                        duration: 0.5
                    });
                });

                coverContainer.addEventListener('mouseleave', () => {
                    gsap.to(cover, {
                        rotateX: 0,
                        rotateY: 0,
                        ease: 'power3.out',
                        duration: 1
                    });
                });
            }

            // Related Intel Scroll Trigger
            if (typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                gsap.to('.detail-related-stagger', {
                    scrollTrigger: {
                        trigger: '#related',
                        start: 'top 80%'
                    },
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out'
                });

                const cards = document.querySelectorAll('.detail-related-card');
                if(cards.length > 0) {
                    ScrollTrigger.batch(cards, {
                        onEnter: batch => gsap.to(batch, {
                            opacity: 1, 
                            y: 0, 
                            stagger: 0.1, 
                            duration: 0.8,
                            ease: 'back.out(1.2)'
                        }),
                        start: "top 85%"
                    });
                }
            }
        }
    });
</script>
@endpush
