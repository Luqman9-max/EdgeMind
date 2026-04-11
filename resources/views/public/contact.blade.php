@extends('public.layouts.app')

@section('title', 'Contact Edge Mind — Initiate Protocol')
@section('meta_description', 'Transmit your signal. Edge Mind engages with intention and uncompromising constraints.')

@section('content')

{{-- 1. HERO SECTION: "Initiate Protocol" --}}
<section id="contact-hero" class="relative w-full min-h-[70vh] flex items-center justify-center pt-20 overflow-hidden bg-em-black">
    {{-- 3D Background --}}
    @include('public.components.contact-3d-bg')

    <div class="container-edge relative z-10 w-full">
        <div class="max-w-3xl mx-auto text-center flex flex-col items-center">
            <div class="reveal mb-6">
                <span class="inline-flex items-center gap-2 border border-em-accent/40 bg-em-accent/10 text-em-accent font-mono text-[10px] px-3 py-1 uppercase tracking-[0.2em] shadow-[0_0_20px_rgba(255,61,0,0.15)]">
                    <span class="w-1.5 h-1.5 rounded-full bg-em-accent animate-pulse"></span> Transmission Open
                </span>
            </div>
            
            <h1 class="reveal reveal-delay-1 text-5xl md:text-7xl font-primary font-bold text-em-white leading-[1.05] tracking-tight mb-8">
                Initiate <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-em-ice to-em-ice-muted">Protocol.</span>
            </h1>
            
            <p class="reveal reveal-delay-2 text-lg font-mono text-em-slate max-w-2xl mx-auto leading-relaxed border-t border-em-steel pt-8">
                This is not a suggestion box. It is a communication channel reserved for operators building serious systems.
            </p>
        </div>
    </div>
</section>

{{-- 2. [NEW] EXPECTATIONS & BOUNDARIES --}}
<section class="py-32 bg-em-charcoal border-y border-em-steel">
    <div class="container-edge">
        <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div class="reveal">
                <h2 class="text-3xl font-bold mb-4 text-em-white">The Boundaries.</h2>
                <p class="text-em-slate mb-10">We respect your time by aggressively protecting ours. Review these constraints before submitting any raw data to the system.</p>
                
                <ul class="space-y-5">
                    <li class="flex gap-4 p-4 border border-em-steel bg-em-black group hover:border-em-accent transition-colors">
                        <span class="material-symbols-outlined text-em-accent font-bold mt-0.5">close</span>
                        <div>
                            <h4 class="font-bold text-em-white text-sm mb-1 uppercase tracking-wider">No "Quick Questions"</h4>
                            <p class="text-xs text-em-silver leading-relaxed">If it can be answered by reading the literature, the signal will be ignored. Do your homework first.</p>
                        </div>
                    </li>
                    <li class="flex gap-4 p-4 border border-em-steel bg-em-black group hover:border-em-accent transition-colors">
                        <span class="material-symbols-outlined text-em-accent font-bold mt-0.5">close</span>
                        <div>
                            <h4 class="font-bold text-em-white text-sm mb-1 uppercase tracking-wider">No Free Mentorship</h4>
                            <p class="text-xs text-em-silver leading-relaxed">We provide systems, not personalized hand-holding. Purchase the protocol.</p>
                        </div>
                    </li>
                    <li class="flex gap-4 p-4 border border-em-steel bg-em-black group hover:border-em-ice transition-colors">
                        <span class="material-symbols-outlined text-em-ice font-bold mt-0.5">check</span>
                        <div>
                            <h4 class="font-bold text-em-white text-sm mb-1 uppercase tracking-wider">System Failures</h4>
                            <p class="text-xs text-em-silver leading-relaxed">If a protocol breaks during execution, send the operational data. We analyze and patch.</p>
                        </div>
                    </li>
                </ul>
            </div>

            {{-- 3. [NEW] WHAT HAPPENS WHEN YOU REACH OUT (Process) --}}
            <div class="reveal reveal-delay-1 relative">
                <div class="absolute left-6 top-10 bottom-10 w-0.5 bg-gradient-to-b from-em-accent via-em-ice to-transparent opacity-30"></div>
                
                <h3 class="font-mono text-xs text-em-slate tracking-[0.2em] uppercase mb-10 ml-16">Operational Sequence</h3>
                
                <div class="space-y-8">
                    <div class="relative pl-16">
                        <div class="absolute left-4 top-1 w-5 h-5 rounded-full bg-em-black border-2 border-em-accent flex items-center justify-center shadow-[0_0_10px_rgba(255,61,0,0.3)]">
                            <span class="w-1.5 h-1.5 bg-em-accent rounded-full"></span>
                        </div>
                        <h4 class="text-lg font-bold text-em-white mb-1">Signal Received</h4>
                        <p class="text-sm text-em-slate">System logs the transmission with timestamp.</p>
                    </div>
                    
                    <div class="relative pl-16">
                        <div class="absolute left-4 top-1 w-5 h-5 rounded-full bg-em-black border-2 border-em-ice flex items-center justify-center">
                            <span class="w-1.5 h-1.5 bg-em-ice rounded-full opacity-50"></span>
                        </div>
                        <h4 class="text-lg font-bold text-em-white mb-1">Algorithmic Filter</h4>
                        <p class="text-sm text-em-slate">Spam and low-effort inquiries are automatically purged.</p>
                    </div>
                    
                    <div class="relative pl-16">
                        <div class="absolute left-4 top-1 w-5 h-5 rounded-full bg-em-black border-2 border-em-steel flex items-center justify-center"></div>
                        <h4 class="text-lg font-bold text-em-white mb-1">Human Review</h4>
                        <p class="text-sm text-em-slate">Within 24 hours, an engineer reviews the data payload.</p>
                    </div>
                    
                    <div class="relative pl-16">
                        <div class="absolute left-4 top-1 w-5 h-5 rounded-full bg-em-black border-2 border-em-steel flex items-center justify-center"></div>
                        <h4 class="text-lg font-bold text-em-white mb-1">Return Transmission</h4>
                        <p class="text-sm text-em-slate">Actionable response delivered. No back-and-forth fluff.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. THE INTERFACE & CHANNELS --}}
<section class="py-32 bg-em-black relative overflow-hidden">
    <div class="container-edge">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 max-w-6xl mx-auto">
            
            {{-- Form Interface --}}
            <div class="lg:col-span-8 bg-em-charcoal border border-em-steel p-8 md:p-12 reveal shadow-2xl relative group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-em-accent/10 via-em-charcoal/0 to-transparent"></div>
                
                <div class="flex items-center justify-between mb-8 border-b border-em-steel pb-4">
                    <h3 class="text-xl font-bold">Data Input terminal</h3>
                    <div class="font-mono text-[10px] text-em-ice uppercase border border-em-ice/30 px-2 py-1">Secure Channel</div>
                </div>

                @if(session('success'))
                    <div class="bg-em-ice/10 border border-em-ice text-em-ice px-6 py-4 mb-8 font-mono text-sm uppercase">
                        > Transmission Successful. Logged at {{ now()->format('H:i:s') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 relative z-10" id="transmit-form">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label for="name" class="font-mono text-[10px] text-em-slate uppercase tracking-widest block mb-2">Operator Identity</label>
                            <input type="text" name="name" id="name" required class="w-full bg-em-black border-b-2 border-em-steel border-t-0 border-l-0 border-r-0 rounded-none px-0 py-3 text-em-white font-mono focus:border-em-accent focus:ring-0 transition-colors placeholder:text-em-steel" placeholder="NAME / CALLSIGN">
                        </div>
                        <div>
                            <label for="email" class="font-mono text-[10px] text-em-slate uppercase tracking-widest block mb-2">Return Address</label>
                            <input type="email" name="email" id="email" required class="w-full bg-em-black border-b-2 border-em-steel border-t-0 border-l-0 border-r-0 rounded-none px-0 py-3 text-em-white font-mono focus:border-em-accent focus:ring-0 transition-colors placeholder:text-em-steel" placeholder="EMAIL ADDRESS">
                        </div>
                    </div>

                    <div>
                        <label class="font-mono text-[10px] text-em-slate uppercase tracking-widest block mb-4">Transmission Category</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="topic" value="Partnership" class="peer sr-only" required>
                                <div class="font-mono text-xs text-center border border-em-steel py-3 px-2 text-em-slate peer-checked:border-em-accent peer-checked:text-em-accent peer-checked:bg-em-accent/5 hover:bg-em-white/5 transition-all">PARTNERSHIP</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="topic" value="Protocol Update" class="peer sr-only">
                                <div class="font-mono text-xs text-center border border-em-steel py-3 px-2 text-em-slate peer-checked:border-em-ice peer-checked:text-em-ice peer-checked:bg-em-ice/5 hover:bg-em-white/5 transition-all">PROTOCOL</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="topic" value="Media" class="peer sr-only">
                                <div class="font-mono text-xs text-center border border-em-steel py-3 px-2 text-em-slate peer-checked:border-em-white peer-checked:text-em-em-white hover:bg-em-white/5 transition-all">MEDIA</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="topic" value="Other" class="peer sr-only">
                                <div class="font-mono text-xs text-center border border-em-steel py-3 px-2 text-em-slate peer-checked:border-em-slate peer-checked:text-em-white hover:bg-em-white/5 transition-all">OTHER</div>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="font-mono text-[10px] text-em-slate uppercase tracking-widest block mb-2">Raw Data Payload</label>
                        <textarea name="message" id="message" required rows="5" class="w-full bg-em-black border-2 border-em-steel rounded-none p-4 text-em-white font-mono focus:border-em-accent focus:ring-0 transition-colors placeholder:text-em-steel resize-none" placeholder="STATE YOUR PURPOSE DIRECTLY. NO PLEASANTRIES REQUIRED."></textarea>
                    </div>

                    <div class="flex items-center justify-between pt-4">
                        <div class="font-mono text-[10px] text-em-slate hidden sm:block">STATUS: <span class="text-em-accent animate-pulse">AWAITING INPUT</span></div>
                        <button type="submit" class="btn btn-primary w-full sm:w-auto relative overflow-hidden group">
                            <span class="relative z-10 flex items-center gap-2">TRANSMIT <span class="material-symbols-outlined text-sm">send</span></span>
                            <div class="absolute inset-0 h-full w-0 bg-em-white group-hover:w-full transition-[width] duration-300 ease-out z-0"></div>
                            <span class="absolute z-10 hidden group-hover:flex items-center gap-2 text-em-black font-bold h-full left-[1.6rem] top-0 pointer-events-none">TRANSMIT <span class="material-symbols-outlined text-sm text-em-black">send</span></span>
                        </button>
                    </div>
                </form>
            </div>

            {{-- 5. Additional Channels --}}
            <div class="lg:col-span-4 space-y-6 reveal reveal-delay-2">
                <div class="bg-em-charcoal border border-em-steel p-8 hover:border-em-slate transition-colors">
                    <h3 class="font-mono text-xs text-em-slate tracking-widest uppercase mb-4 border-b border-em-steel pb-2">Direct Frequency</h3>
                    <a href="mailto:sys@edgemind.com" class="block text-2xl font-bold text-em-white hover:text-em-accent transition-colors mb-2">sys@edgemind.com</a>
                    <p class="text-xs text-em-silver font-mono">Response Time: 24.00h Max</p>
                </div>

                <div class="bg-em-charcoal border border-em-steel p-8 hover:border-em-slate transition-colors">
                    <h3 class="font-mono text-xs text-em-slate tracking-widest uppercase mb-4 border-b border-em-steel pb-2">Global Nodes</h3>
                    <div class="space-y-4">
                        <a href="#" class="flex justify-between items-center group">
                            <span class="text-sm font-bold text-em-white group-hover:text-em-accent transition-colors">Twitter (X)</span>
                            <span class="font-mono text-[10px] text-em-slate border border-em-steel px-2 py-1 group-hover:border-em-accent transition-colors">@EDGEMIND_SYS</span>
                        </a>
                        <a href="#" class="flex justify-between items-center group">
                            <span class="text-sm font-bold text-em-white group-hover:text-em-ice transition-colors">Substack</span>
                            <span class="font-mono text-[10px] text-em-slate border border-em-steel px-2 py-1 group-hover:border-em-ice transition-colors">THE_FORGE</span>
                        </a>
                    </div>
                </div>

                <div class="bg-em-black border border-em-steel p-6 text-center opacity-60">
                    <span class="material-symbols-outlined text-em-slate text-3xl mb-2">public</span>
                    <p class="font-mono text-[10px] tracking-widest uppercase text-em-slate">Location:<br/>Decentralized Architecture</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 6. [NEW] FREQUENTLY QUESTIONED --}}
<section class="py-32 bg-em-charcoal border-y border-em-steel">
    <div class="container-edge">
        <div class="text-center mb-14 reveal">
            <h2 class="text-3xl font-bold text-em-white">Frequently Questioned.</h2>
            <p class="text-em-slate mt-4">Answers. No elaboration.</p>
        </div>

        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="border border-em-steel p-8 bg-em-black reveal">
                <h4 class="font-bold text-lg mb-3 text-em-white">Is there a refund policy?</h4>
                <p class="text-sm text-em-silver">No. Commitment requires undeniable stakes. If you aren't sure, don't buy the protocol.</p>
            </div>
            
            <div class="border border-em-steel p-8 bg-em-black reveal reveal-delay-1">
                <h4 class="font-bold text-lg mb-3 text-em-white">Do you offer 1-on-1 coaching?</h4>
                <p class="text-sm text-em-silver">No. We engineer systems. Coaching creates dependency; systems create autonomy.</p>
            </div>
            
            <div class="border border-em-steel p-8 bg-em-black reveal">
                <h4 class="font-bold text-lg mb-3 text-em-white">What does 'Volume' mean?</h4>
                <p class="text-sm text-em-silver">Our literature is organized sequentially. Volume I resets you. Volume II builds the structure. Volume III scales it.</p>
            </div>
            
            <div class="border border-em-steel p-8 bg-em-black reveal reveal-delay-1">
                <h4 class="font-bold text-lg mb-3 text-em-white">Will this work for my specific industry?</h4>
                <p class="text-sm text-em-silver">Biology and habit formation are universal. The constraints apply whether you are writing code or building houses.</p>
            </div>
        </div>
    </div>
</section>

{{-- 7. [NEW] THE LAST WORD --}}
<section class="py-40 bg-em-black text-center relative border-b-8 border-em-accent">
    {{-- Single Sharp 3D shape via CSS --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border-[0.5px] border-em-accent/10 rotate-45 pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] border-[0.5px] border-em-accent/20 rotate-45 pointer-events-none"></div>
    
    <div class="container-edge relative z-10 reveal">
        <span class="material-symbols-outlined text-4xl text-em-slate mb-6">horizontal_rule</span>
        <h2 class="text-3xl md:text-4xl font-bold bg-em-black inline-block px-10 py-4 relative z-10 text-em-silver border border-em-steel">
            "Most people close this tab without sending anything.<br class="hidden md:block"> That tells you everything about why they stay stuck."
        </h2>
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
