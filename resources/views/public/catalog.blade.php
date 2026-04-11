@extends('public.layouts.app')

@section('title', 'Edge Mind Arsenal — The Protocols')
@section('meta_description', 'The complete collection of Edge Mind protocols and structural frameworks.')

@section('content')

{{-- 1. HERO SECTION: "The Arsenal" --}}
<section class="relative w-full min-h-[60vh] flex items-center justify-center pt-28 overflow-hidden bg-em-black border-b border-em-steel">
    {{-- Abstract Grid Floor --}}
    <div class="absolute bottom-0 left-0 w-full h-[50vh] bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px] transform perspective-[1000px] rotateX-[60deg] origin-bottom opacity-50 z-0"></div>
    
    {{-- Ambient Light --}}
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-em-accent/10 blur-[100px] rounded-full pointer-events-none z-0"></div>

    <div class="container-edge relative z-10 w-full text-center">
        <div class="reveal mb-6">
            <span class="inline-flex items-center gap-2 border border-em-slate bg-em-charcoal text-em-white font-mono text-[10px] px-3 py-1 uppercase tracking-[0.2em]">
                <span class="w-1 h-1 bg-em-white rounded-full"></span> Secure Vault Access
            </span>
        </div>
        
        <h1 class="reveal reveal-delay-1 text-5xl md:text-7xl font-primary font-bold text-em-white leading-[1.05] tracking-tight mb-6">
            The Arsenal.
        </h1>
        
        <p class="reveal reveal-delay-2 text-lg font-mono text-em-slate max-w-2xl mx-auto mb-8 leading-relaxed">
            Select your protocol. Execute the parameter. Report results.
        </p>
    </div>
</section>

{{-- 2. CATALOG GRID & FILTERS --}}
<section class="py-32 bg-em-charcoal min-h-screen relative z-10" id="inventory">
    <div class="container-edge">
        
        {{-- Controls Bar --}}
        <div class="flex flex-col md:flex-row justify-between items-center mb-16 border-b border-em-steel pb-8 reveal">
            <div class="flex gap-3 mb-4 md:mb-0">
                <button class="font-mono text-xs px-4 py-2 bg-em-black border border-em-accent text-em-accent uppercase tracking-wider">All Protocols</button>
                <button class="font-mono text-xs px-4 py-2 bg-transparent border border-em-steel text-em-slate hover:text-em-white hover:border-em-slate uppercase tracking-wider transition-colors">Vol I</button>
                <button class="font-mono text-xs px-4 py-2 bg-transparent border border-em-steel text-em-slate hover:text-em-white hover:border-em-slate uppercase tracking-wider transition-colors">Vol II</button>
                <button class="font-mono text-xs px-4 py-2 bg-transparent border border-em-steel text-em-slate hover:text-em-white hover:border-em-slate uppercase tracking-wider transition-colors">Vol III</button>
            </div>
            <div class="font-mono text-[10px] text-em-slate tracking-widest uppercase">
                Modules Detected: <span class="text-em-white font-bold">{{ $books->total() }}</span>
            </div>
        </div>

        {{-- Inventory Grid --}}
        @if($books->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($books as $index => $book)
            <a href="{{ route('book.show', $book->slug) }}" class="card-edge group reveal shadow-2xl relative overflow-hidden flex flex-col h-full bg-em-black">
                
                {{-- Decorative borders --}}
                <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-em-steel group-hover:border-em-accent transition-colors z-20 pointer-events-none"></div>
                <div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-em-steel group-hover:border-em-accent transition-colors z-20 pointer-events-none"></div>

                {{-- Cover Image Container --}}
                <div class="relative w-full aspect-[4/5] bg-em-gunmetal overflow-hidden flex items-center justify-center p-6 border-b border-em-steel">
                    
                    {{-- Tech Background Pattern --}}
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.05)_1px,_transparent_1px)] bg-[length:10px_10px] opacity-20 group-hover:opacity-40 transition-opacity"></div>
                    
                    @if($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="relative z-10 w-full h-full object-cover shadow-[0_20px_50px_rgba(0,0,0,0.5)] transform group-hover:scale-[1.03] group-hover:-translate-y-2 transition-all duration-500 filter sepia-[0.2] contrast-125">
                    @else
                        <div class="relative z-10 w-[70%] h-[90%] bg-em-black border-2 border-em-steel flex flex-col items-center justify-center shadow-2xl">
                            <span class="material-symbols-outlined text-4xl text-em-steel mb-2 group-hover:text-em-accent transition-colors">auto_stories</span>
                            <span class="font-mono text-xs text-em-slate">NO VISUAL DATA</span>
                        </div>
                    @endif
                    
                    {{-- Overlay state --}}
                    <div class="absolute inset-0 bg-em-accent/10 opacity-0 group-hover:opacity-100 transition-opacity z-20 mix-blend-overlay"></div>
                </div>
                
                {{-- Book Info --}}
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <span class="font-mono text-[10px] text-em-ice uppercase tracking-widest border border-em-ice/20 px-2 py-0.5 bg-em-ice/5">
                                {{ $book->category ?? 'STRUCTURAL' }}
                            </span>
                            @if($book->is_free)
                                <span class="badge badge-accent bg-em-accent text-em-black font-bold">OPEN ACCESS</span>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-em-white mb-2 leading-tight group-hover:text-em-accent transition-colors">{{ $book->title }}</h3>
                        <p class="text-xs text-em-slate line-clamp-2 md:line-clamp-3 leading-relaxed mb-4">
                            {{ Str::limit(strip_tags($book->description), 120) }}
                        </p>
                    </div>
                    
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-em-steel">
                        <div class="font-mono text-sm">
                            @if($book->is_free)
                                <span class="text-em-slate line-through mr-2 opacity-50">$24.00</span>
                                <span class="text-em-white font-bold">FREE</span>
                            @elseif($book->price)
                                <span class="text-em-white font-bold">${{ number_format($book->price, 2) }}</span>
                            @endif
                        </div>
                        <span class="font-mono text-[10px] text-em-slate group-hover:text-em-accent flex items-center gap-1 transition-colors">
                            INSPECT <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-20 flex justify-center reveal">
            {{ $books->links('pagination::bootstrap-5') }}
        </div>

        @else
        <div class="flex flex-col items-center justify-center py-32 border border-em-steel border-dashed bg-em-black reveal">
            <span class="material-symbols-outlined text-6xl text-em-slate mb-4">error_outline</span>
            <h3 class="text-2xl font-bold text-em-white mb-2">Vault Empty</h3>
            <p class="text-em-slate text-sm">No protocols matched the search criteria or database is offline.</p>
        </div>
        @endif

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
