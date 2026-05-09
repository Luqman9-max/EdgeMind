@extends('public.layouts.app')

@section('title', 'Contact Edge Mind — Breach Protocol')
@section('meta_description', 'Transmit your signal. Edge Mind engages with intention and uncompromising constraints.')

@section('content')

{{-- 1. HERO SECTION: "Breach Protocol" --}}
<section id="contact-hero" class="relative w-full min-h-screen flex items-center justify-center pt-20 overflow-hidden bg-em-black">
    {{-- 3D Background --}}
    @include('public.components.contact-3d-bg')

    <div class="container-edge relative z-10 w-full text-center">
        <div class="max-w-4xl mx-auto flex flex-col items-center justify-center relative">
            <h1 class="font-primary font-black text-6xl md:text-8xl lg:text-[7rem] text-em-white leading-[0.9] tracking-tighter mb-8 uppercase drop-shadow-2xl gs-hero-element opacity-0 scale-[1.1]">
                Don't Waste <br />
                <span class="text-em-accent glitch-text block mt-2" data-text="Our Time.">Our Time.</span>
            </h1>
            
            <div class="relative w-full max-w-xl overflow-hidden mt-2 gs-hero-element opacity-0 scale-[1.1]">
                <div class="h-[1px] w-full bg-em-steel absolute top-1/2 -translate-y-1/2 z-0"></div>
                <div class="h-[1px] w-1/3 bg-em-accent absolute top-1/2 -translate-y-1/2 z-10 animate-[scanSweep_2s_linear_infinite]" style="animation-direction: alternate;"></div>
                <span class="bg-em-black px-4 relative z-20 font-mono text-em-slate text-xs uppercase tracking-[0.2em] inline-block shadow-[0_0_20px_#0A0A0B]">
                    > CHANNEL RESERVED FOR OPERATORS. PROVE YOU QUALIFY.
                </span>
            </div>
        </div>
    </div>
    
    {{-- Scroll Indicator - EKG style --}}
    <div class="absolute bottom-8 left-8 flex items-center gap-4 z-10 opacity-60 gs-hero-element opacity-0">
        <div class="w-16 h-px bg-em-accent"></div>
        <span class="font-mono text-[10px] text-em-white uppercase tracking-widest animate-pulse">Initiate</span>
    </div>
</section>

{{-- 2. EXPECTATIONS & BOUNDARIES (Access Denial Protocol) --}}
<section class="py-32 bg-em-black relative overflow-hidden" id="boundaries-section">
    <div class="scan-line-anim absolute inset-0 opacity-20 pointer-events-none z-0"></div>
    <div class="container-edge relative z-10">
        
        <div class="mb-24 gs-boundaries-header opacity-0 transform translate-y-12">
            <h2 class="text-4xl md:text-6xl font-black text-em-white uppercase tracking-tight">Access Denial<br/><span class="text-em-slate text-3xl md:text-4xl">Protocol.</span></h2>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
            
            {{-- DENIED Cards --}}
            <div class="space-y-6 relative z-10">
                
                <div class="gs-denied-card opacity-0 transform -translate-x-12 border border-em-accent/40 bg-[#1A0A0A] p-6 hover:border-em-accent hover:shadow-[0_0_20px_rgba(255,61,0,0.15)] transition-all duration-300 group hover:skew-x-[-1deg]">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-8 h-8 rounded-none border border-em-accent flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-em-accent font-bold group-hover:scale-125 transition-transform">close</span>
                        </div>
                        <h4 class="font-primary font-black text-lg text-em-white uppercase tracking-wider">No "Quick Questions"</h4>
                    </div>
                    <div class="font-mono text-xs text-em-slate leading-relaxed border-l-2 border-em-accent/30 pl-4 group-hover:border-em-accent transition-colors">
                        If your query can be answered by reviewing our literature, your transmission will be deleted. Do the minimal required research.
                    </div>
                </div>

                <div class="gs-denied-card opacity-0 transform -translate-x-12 border border-em-accent/40 bg-[#1A0A0A] p-6 hover:border-em-accent hover:shadow-[0_0_20px_rgba(255,61,0,0.15)] transition-all duration-300 group hover:skew-x-[-1deg]">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-8 h-8 rounded-none border border-em-accent flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-em-accent font-bold group-hover:scale-125 transition-transform">close</span>
                        </div>
                        <h4 class="font-primary font-black text-lg text-em-white uppercase tracking-wider">No Free Mentorship</h4>
                    </div>
                    <div class="font-mono text-xs text-em-slate leading-relaxed border-l-2 border-em-accent/30 pl-4 group-hover:border-em-accent transition-colors">
                        We engineer systems; we do not provide hand-holding. Acquire the protocol and execute it.
                    </div>
                </div>

                <div class="gs-granted-card opacity-0 transform -translate-x-12 border border-em-ice/40 bg-[#0A1A1A] p-6 hover:border-em-ice hover:shadow-[0_0_20px_rgba(0,212,255,0.15)] transition-all duration-300 group">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-8 h-8 rounded-none border border-em-ice flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-em-ice font-bold group-hover:scale-125 transition-transform">check</span>
                        </div>
                        <h4 class="font-primary font-black text-lg text-em-white uppercase tracking-wider">System Failures</h4>
                    </div>
                    <div class="font-mono text-xs text-em-slate leading-relaxed border-l-2 border-em-ice/30 pl-4 group-hover:border-em-ice transition-colors">
                        If a protocol breaks during active execution under load, submit the operational data payload. We patch and optimize.
                    </div>
                </div>

            </div>

            {{-- OPERATIONAL SEQUENCE Timeline (GSAP Scroll Activated) --}}
            <div class="relative pl-8 md:pl-16 pt-8 pb-16">
                <!-- GSAP animated line -->
                <div class="absolute left-6 md:left-[3.25rem] top-12 bottom-12 w-0.5 bg-em-steel z-0"></div>
                <div id="timeline-progress" class="absolute left-6 md:left-[3.25rem] top-12 w-0.5 bg-gradient-to-b from-em-accent via-em-ice to-em-white z-0 h-0"></div>
                
                <h3 class="font-mono text-xs text-em-slate tracking-[0.2em] border border-em-steel bg-em-black inline-block px-3 py-1 uppercase mb-12 relative z-10">Operational Sequence</h3>
                
                <div class="space-y-12 relative z-10">
                    <div class="relative pl-10 gs-tl-node">
                        <div class="absolute left-[-1.5rem] md:left-[-0.75rem] top-1 w-5 h-5 rounded-none bg-em-black border-2 border-em-steel flex items-center justify-center transition-all duration-300 tl-dot"></div>
                        <h4 class="text-xl font-bold text-em-slate tracking-tight uppercase mb-2 tl-text transition-colors duration-500">1. Signal Received</h4>
                        <p class="font-mono text-xs text-em-slate/50 tl-desc transition-colors duration-500">System logs transmission.</p>
                    </div>
                    
                    <div class="relative pl-10 gs-tl-node">
                        <div class="absolute left-[-1.5rem] md:left-[-0.75rem] top-1 w-5 h-5 rounded-none bg-em-black border-2 border-em-steel flex items-center justify-center transition-all duration-300 tl-dot"></div>
                        <h4 class="text-xl font-bold text-em-slate tracking-tight uppercase mb-2 tl-text transition-colors duration-500">2. Algorithmic Filter</h4>
                        <p class="font-mono text-xs text-em-slate/50 tl-desc transition-colors duration-500">Spam / low-effort data auto-purged.</p>
                    </div>
                    
                    <div class="relative pl-10 gs-tl-node">
                        <div class="absolute left-[-1.5rem] md:left-[-0.75rem] top-1 w-5 h-5 rounded-none bg-em-black border-2 border-em-steel flex items-center justify-center transition-all duration-300 tl-dot"></div>
                        <h4 class="text-xl font-bold text-em-slate tracking-tight uppercase mb-2 tl-text transition-colors duration-500">3. Human Review</h4>
                        <p class="font-mono text-xs text-em-slate/50 tl-desc transition-colors duration-500">Engineer analyzes payload (24h).</p>
                    </div>
                    
                    <div class="relative pl-10 gs-tl-node">
                        <div class="absolute left-[-1.5rem] md:left-[-0.75rem] top-1 w-5 h-5 rounded-none bg-em-black border-2 border-em-steel flex items-center justify-center transition-all duration-300 tl-dot"></div>
                        <h4 class="text-xl font-bold text-em-slate tracking-tight uppercase mb-2 tl-text transition-colors duration-500">4. Actionable Response</h4>
                        <p class="font-mono text-xs text-em-slate/50 tl-desc transition-colors duration-500">Signal returned. No fluff.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Animated Divider --}}
<div class="w-full h-px bg-em-steel relative flex justify-center">
    <div class="gs-line-draw absolute h-px bg-em-accent w-0" style="left: 50%; top: 0; transform: translateX(-50%);"></div>
</div>

{{-- 3. THE INTERFACE & CHANNELS (Form Terminal) --}}
<section class="py-32 bg-em-charcoal relative overflow-hidden">
    <div class="container-edge">
        
        <div class="max-w-4xl mx-auto">
            {{-- Form Interface (Terminal Style) --}}
            <div class="gs-terminal-form bg-em-black border-2 border-em-steel shadow-[0_30px_60px_rgba(0,0,0,0.8)] relative opacity-0 scale-[0.98] transform translate-y-8">
                
                {{-- Terminal Header --}}
                <div class="flex items-center justify-between border-b-2 border-em-steel px-6 py-3 bg-[#111115]">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full border border-[#FF5F56] bg-[#FF5F56]/20"></div>
                        <div class="w-3 h-3 rounded-full border border-[#FFBD2E] bg-[#FFBD2E]/20"></div>
                        <div class="w-3 h-3 rounded-full border border-[#27C93F] bg-[#27C93F]/20"></div>
                    </div>
                    <div class="font-mono text-[10px] text-em-silver uppercase tracking-widest opacity-60">
                        EDGEMIND://SECURE_CHANNEL/v3.2
                    </div>
                    <div></div>
                </div>

                <div x-data="contactTerminal()" x-cloak>
                    <!-- Status Messages -->
                    <div x-show="status === 'success'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">
                        <div class="bg-em-ice/10 border-b border-em-ice text-em-ice px-6 py-4 font-mono text-sm uppercase flex items-center justify-between">
                            <span>> TRANSMISSION LOGGED: SIGNAL ACQUIRED.</span>
                            <button type="button" @click="resetForm()" class="text-em-ice hover:text-white transition-colors">[RESET]</button>
                        </div>
                    </div>
                    
                    <div x-show="status === 'error'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">
                        <div class="bg-em-accent/10 border-b border-em-accent text-em-accent px-6 py-4 font-mono text-sm uppercase flex items-center justify-between">
                            <span>> ERROR: <span x-text="errorMessage"></span></span>
                            <button type="button" @click="status = 'idle'" class="text-em-accent hover:text-white transition-colors">[X]</button>
                        </div>
                    </div>

                    <div class="p-8 md:p-12 relative overflow-hidden transition-all duration-500" :class="{'opacity-30 pointer-events-none grayscale': status === 'success'}">
                        {{-- Minimal ambient noise in terminal --}}
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPjxyZWN0IHdpZHRoPSI0IiBoZWlnaHQ9IjQiIGZpbGw9InRyYW5zcGFyZW50Ij48L3JlY3Q+PHBhdGggZD0iTTAgMEwyIDJNMCAyTDIgMCIgc3Ryb2tlPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDMpIi8+PC9zdmc+')] opacity-50 z-0 pointer-events-none"></div>

                        <form @submit.prevent="submitForm" class="space-y-10 relative z-10" id="transmit-form" x-ref="form">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="group/input relative pb-2">
                                <label for="name" class="font-mono text-[10px] text-em-slate uppercase tracking-[0.2em] block mb-2 transition-colors duration-300 group-focus-within/input:text-em-accent">>> OPERATOR_IDENTITY</label>
                                <input type="text" name="name" id="name" required class="w-full bg-transparent border-0 border-b-2 border-em-steel px-0 py-2 text-em-white font-mono text-lg focus:ring-0 placeholder:text-em-slate/40 transition-colors" placeholder="_CALLSIGN">
                                <div class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-em-accent transition-all duration-300 transform -translate-x-1/2 group-focus-within/input:w-full"></div>
                            </div>
                            
                            <div class="group/input relative pb-2">
                                <label for="email" class="font-mono text-[10px] text-em-slate uppercase tracking-[0.2em] block mb-2 transition-colors duration-300 group-focus-within/input:text-em-ice">>> RETURN_ADDRESS</label>
                                <input type="email" name="email" id="email" required class="w-full bg-transparent border-0 border-b-2 border-em-steel px-0 py-2 text-em-white font-mono text-lg focus:ring-0 placeholder:text-em-slate/40 transition-colors" placeholder="_EMAIL">
                                <div class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-em-ice transition-all duration-300 transform -translate-x-1/2 group-focus-within/input:w-full"></div>
                            </div>
                        </div>

                        <div>
                            <label class="font-mono text-[10px] text-em-slate uppercase tracking-[0.2em] block mb-4">>> TRANSMISSION_CATEGORY</label>
                            <div class="flex flex-wrap border border-em-steel bg-[#111115] p-1 gap-1">
                                <label class="cursor-pointer flex-1 min-w-[120px]">
                                    <input type="radio" name="topic" value="Partnership" class="peer sr-only" required>
                                    <div class="font-mono text-[10px] md:text-xs text-center py-3 px-2 text-em-slate peer-checked:bg-em-accent peer-checked:text-em-black font-bold uppercase tracking-widest hover:bg-em-white/5 transition-all h-full flex items-center justify-center">PARTNERSHIP</div>
                                </label>
                                <label class="cursor-pointer flex-1 min-w-[120px]">
                                    <input type="radio" name="topic" value="Protocol Update" class="peer sr-only">
                                    <div class="font-mono text-[10px] md:text-xs text-center py-3 px-2 text-em-slate peer-checked:bg-em-ice peer-checked:text-em-black font-bold uppercase tracking-widest hover:bg-em-white/5 transition-all h-full flex items-center justify-center">PROTOCOL</div>
                                </label>
                                <label class="cursor-pointer flex-1 min-w-[120px]">
                                    <input type="radio" name="topic" value="Media" class="peer sr-only">
                                    <div class="font-mono text-[10px] md:text-xs text-center py-3 px-2 text-em-slate peer-checked:bg-em-white peer-checked:text-em-black font-bold uppercase tracking-widest hover:bg-em-white/5 transition-all h-full flex items-center justify-center">MEDIA</div>
                                </label>
                                <label class="cursor-pointer flex-1 min-w-[120px]">
                                    <input type="radio" name="topic" value="Other" class="peer sr-only">
                                    <div class="font-mono text-[10px] md:text-xs text-center py-3 px-2 text-em-slate peer-checked:bg-em-slate peer-checked:text-em-black font-bold uppercase tracking-widest hover:bg-em-white/5 transition-all h-full flex items-center justify-center">OTHER</div>
                                </label>
                            </div>
                        </div>

                        <div class="group/input relative h-full flex flex-col pb-2">
                            <label for="message" class="font-mono text-[10px] text-em-slate uppercase tracking-[0.2em] block mb-2 transition-colors duration-300 group-focus-within/input:text-em-white">>> RAW_PAYLOAD</label>
                            <textarea name="message" id="message" required rows="6" class="w-full bg-[#111115] border border-em-steel p-4 text-em-white font-mono text-sm focus:ring-0 placeholder:text-em-slate/30 resize-none transition-colors group-focus-within/input:border-em-white/50" placeholder="STATE YOUR PURPOSE DIRECTLY.&#10;NO PLEASANTRIES REQUIRED.&#10;&#10;_"></textarea>
                        </div>

                        {{-- Footer Action Bar --}}
                        <div class="flex flex-col md:flex-row items-center justify-between border-t-2 border-dashed border-em-steel pt-6 gap-6">
                            <div class="font-mono text-[10px] text-em-slate w-full md:w-auto text-left">
                                <span class="inline-block mr-2 w-2 h-2 rounded-full transition-colors duration-300" :class="loading ? 'bg-em-ice animate-pulse' : 'bg-em-accent animate-pulse'"></span> 
                                ENCRYPTION: <span class="text-em-white" x-text="loading ? 'ESTABLISHING...' : 'ACTIVE'">ACTIVE</span>
                            </div>
                            
                            <button type="submit" :disabled="loading" class="w-full md:w-auto relative group/btn overflow-hidden border outline-none transition-all duration-300" :class="loading ? 'bg-em-steel border-em-steel cursor-not-allowed opacity-80' : 'bg-em-white border-em-white'">
                                <span class="relative z-10 flex items-center justify-center gap-3 px-10 py-4 font-primary text-black font-black uppercase tracking-[0.15em] text-sm transition-colors duration-300 delay-75" :class="!loading && 'group-hover/btn:text-em-white'">
                                    <span x-show="!loading" class="flex items-center gap-3">TRANSMIT PAYLOAD <span class="material-symbols-outlined text-[18px]">send</span></span>
                                    <span x-show="loading" class="flex items-center gap-3" style="display: none;">ENCRYPTING... <span class="material-symbols-outlined text-[18px] animate-[spin_2s_linear_infinite]">sync</span></span>
                                </span>
                                {{-- Hover Sweep --}}
                                <div x-show="!loading" class="absolute inset-0 bg-em-black transform -translate-x-full group-hover/btn:translate-x-0 transition-transform duration-300 ease-out z-0"></div>
                                <div x-show="!loading" class="absolute inset-0 bg-em-accent transform -translate-x-full group-hover/btn:translate-x-0 transition-transform duration-300 ease-out z-0 delay-75"></div>
                            </button>
                        </div>
                    </form>
                </div>
            </div> <!-- End x-data container -->

            {{-- Communication Network (Socials) --}}
            <div class="mt-12 gs-footer-channels opacity-0 translate-y-8">
                <div class="font-mono text-[10px] text-em-slate tracking-[0.2em] uppercase mb-4 text-center">-- ESTABLISHED FREQUENCIES --</div>
                <div class="flex flex-wrap justify-center gap-2 md:gap-4">
                    <a href="mailto:v.e.d.g.e.m.i.n.d@gmail.com" class="font-mono text-xs text-em-white hover:text-em-black hover:bg-em-accent border border-em-steel bg-em-black px-4 py-2 transition-all group flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm text-em-slate group-hover:text-em-black">mail</span> 
                        <span class="hidden sm:inline">v.e.d.g.e.m.i.n.d@gmail.com</span>
                        <span class="sm:hidden">EMAIL</span>
                    </a>
                    <a href="#" class="font-mono text-xs text-em-white hover:text-em-black hover:bg-em-white border border-em-steel bg-em-black px-4 py-2 transition-all">X (TWITTER)</a>
                    <a href="#" class="font-mono text-xs text-em-white hover:text-em-black hover:bg-[#E1306C] border border-em-steel bg-em-black px-4 py-2 transition-all">INSTAGRAM</a>
                    <a href="#" class="font-mono text-xs text-em-white hover:text-em-black hover:bg-[#00F2FE] border border-em-steel bg-em-black px-4 py-2 transition-all">TIKTOK</a>
                    <a href="#" class="font-mono text-xs text-em-white hover:text-em-black hover:bg-em-white border border-em-steel bg-em-black px-4 py-2 transition-all">MEDIUM</a>
                </div>
            </div>
            
        </div>

    </div>
</section>

{{-- 4. FAQ (Interrogation Protocol via Alpine.js) --}}
<section class="py-32 bg-em-black border-y border-em-steel" id="faq-section">
    <div class="container-edge max-w-4xl mx-auto">
        <div class="text-center mb-16 gs-faq-header opacity-0">
            <h2 class="text-3xl md:text-5xl font-black text-em-white uppercase tracking-tight">Interrogation Protocol.</h2>
            <p class="font-mono text-xs text-em-slate mt-4 tracking-[0.3em] uppercase">SYSTEM.KNOWLEDGE.BASE</p>
        </div>

        <div class="space-y-4" x-data="{ activeAccordion: null }">
            
            {{-- FAQ 1 --}}
            <div class="gs-faq-item opacity-0 transform translate-y-8 bg-em-charcoal border border-em-steel overflow-hidden transition-colors" :class="{'border-em-accent': activeAccordion === 1}">
                <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="w-full text-left p-6 font-primary font-bold text-em-white uppercase tracking-wide flex items-center justify-between group relative">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-em-steel transition-colors group-hover:bg-em-slate" :class="{'bg-em-accent group-hover:bg-em-accent': activeAccordion === 1}"></div>
                    <div class="flex items-center gap-4 pl-2">
                        <span class="font-mono text-[10px] text-em-slate tracking-widest">[01]</span>
                        <span>> QUERY: Is there a refund policy?</span>
                    </div>
                    <span class="font-mono text-em-slate transition-transform duration-300" :class="{'rotate-45 text-em-accent': activeAccordion === 1}">[+]</span>
                </button>
                <div x-show="activeAccordion === 1" x-collapse x-cloak>
                    <div class="p-6 pt-0 pl-12 text-em-silver font-mono text-sm leading-relaxed border-t border-em-steel/30 mt-2 bg-[#141418]">
                        <span class="text-em-accent mr-2">>> RESPONSE:</span> No. Commitment requires undeniable stakes. Fallback plans breed failure. If you aren't absolutely certain you will do the work, do not execute the purchase.
                    </div>
                </div>
            </div>

            {{-- FAQ 2 --}}
            <div class="gs-faq-item opacity-0 transform translate-y-8 bg-em-charcoal border border-em-steel overflow-hidden transition-colors" :class="{'border-em-ice': activeAccordion === 2}">
                <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="w-full text-left p-6 font-primary font-bold text-em-white uppercase tracking-wide flex items-center justify-between group relative">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-em-steel transition-colors group-hover:bg-em-slate" :class="{'bg-em-ice group-hover:bg-em-ice': activeAccordion === 2}"></div>
                    <div class="flex items-center gap-4 pl-2">
                        <span class="font-mono text-[10px] text-em-slate tracking-widest">[02]</span>
                        <span>> QUERY: Do you offer 1-on-1 coaching?</span>
                    </div>
                    <span class="font-mono text-em-slate transition-transform duration-300" :class="{'rotate-45 text-em-ice': activeAccordion === 2}">[+]</span>
                </button>
                <div x-show="activeAccordion === 2" x-collapse x-cloak>
                    <div class="p-6 pt-0 pl-12 text-em-silver font-mono text-sm leading-relaxed border-t border-em-steel/30 mt-2 bg-[#141418]">
                        <span class="text-em-ice mr-2">>> RESPONSE:</span> No. We engineer systems. Coaching creates dependency; our systems create permanent autonomy. Scaling the individual requires self-imposed pressure.
                    </div>
                </div>
            </div>

            {{-- FAQ 3 --}}
            <div class="gs-faq-item opacity-0 transform translate-y-8 bg-em-charcoal border border-em-steel overflow-hidden transition-colors" :class="{'border-em-white': activeAccordion === 3}">
                <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="w-full text-left p-6 font-primary font-bold text-em-white uppercase tracking-wide flex items-center justify-between group relative">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-em-steel transition-colors group-hover:bg-em-slate" :class="{'bg-em-white group-hover:bg-em-white': activeAccordion === 3}"></div>
                    <div class="flex items-center gap-4 pl-2">
                        <span class="font-mono text-[10px] text-em-slate tracking-widest">[03]</span>
                        <span>> QUERY: What does 'Volume' mean?</span>
                    </div>
                    <span class="font-mono text-em-slate transition-transform duration-300" :class="{'rotate-45 text-em-white': activeAccordion === 3}">[+]</span>
                </button>
                <div x-show="activeAccordion === 3" x-collapse x-cloak>
                    <div class="p-6 pt-0 pl-12 text-em-silver font-mono text-sm leading-relaxed border-t border-em-steel/30 mt-2 bg-[#141418]">
                        <span class="text-em-white mr-2">>> RESPONSE:</span> Our literature is organized sequentially as protocols. Volume I resets you mentally. Volume II builds the constraint structure. Volume III scales output. Do not start at Vol III.
                    </div>
                </div>
            </div>

            {{-- FAQ 4 --}}
            <div class="gs-faq-item opacity-0 transform translate-y-8 bg-em-charcoal border border-em-steel overflow-hidden transition-colors" :class="{'border-em-slate': activeAccordion === 4}">
                <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="w-full text-left p-6 font-primary font-bold text-em-white uppercase tracking-wide flex items-center justify-between group relative">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-em-steel transition-colors group-hover:bg-em-white" :class="{'bg-em-slate group-hover:bg-em-slate': activeAccordion === 4}"></div>
                    <div class="flex items-center gap-4 pl-2">
                        <span class="font-mono text-[10px] text-em-slate tracking-widest">[04]</span>
                        <span>> QUERY: Will this work for my industry?</span>
                    </div>
                    <span class="font-mono text-em-slate transition-transform duration-300" :class="{'rotate-45 text-em-white': activeAccordion === 4}">[+]</span>
                </button>
                <div x-show="activeAccordion === 4" x-collapse x-cloak>
                    <div class="p-6 pt-0 pl-12 text-em-silver font-mono text-sm leading-relaxed border-t border-em-steel/30 mt-2 bg-[#141418]">
                        <span class="text-em-slate mr-2">>> RESPONSE:</span> Biology, dopamine addiction, and habit fracture are universal. The constraints apply flawlessly whether you are writing code, building houses, or commanding infantry.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 5. THE LAST WORD (Final Verdict) --}}
<section class="min-h-screen bg-em-black text-center relative border-b-[6px] border-em-accent flex items-center justify-center overflow-hidden" id="last-word">
    {{-- Background Glow --}}
    <div class="absolute inset-0 bg-em-black z-0"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-em-accent/20 blur-[100px] rounded-full lw-pulse-bg z-0 pointer-events-none"></div>
    
    <div class="container-edge relative z-10 w-full max-w-4xl mx-auto flex flex-col items-center">
        
        <h2 class="text-5xl md:text-7xl lg:text-[6rem] font-primary font-black text-em-white leading-[0.9] uppercase tracking-tighter mb-10 glitch-text gs-lw-title" data-text="You're Still Here.">
            You're Still Here.
        </h2>
        
        <div class="font-mono text-em-slate text-sm md:text-base leading-relaxed tracking-widest uppercase gs-lw-text">
            Most people closed this tab 30 seconds ago.<br>
            The fact that you haven't tells me something.
        </div>

        <div class="mt-20 gs-lw-btn">
            <button onclick="document.getElementById('transmit-form').scrollIntoView({behavior: 'smooth'})" class="border border-em-accent bg-transparent text-em-accent px-12 py-5 font-mono text-sm uppercase tracking-[0.3em] hover:bg-em-accent hover:text-em-black hover:shadow-[0_0_40px_rgba(255,61,0,0.5)] transition-all duration-300 font-bold gs-lw-shake">
                TRANSMIT NOW
            </button>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);

            // 1. Hero Animations
            gsap.to('.gs-hero-element', {
                opacity: 1, 
                scale: 1, 
                duration: 1, 
                stagger: 0.2, 
                ease: 'power4.out',
                delay: 0.1
            });

            // 2. Boundaries Header
            gsap.to('.gs-boundaries-header', {
                scrollTrigger: { trigger: '#boundaries-section', start: 'top 80%' },
                opacity: 1, y: 0, duration: 1, ease: 'power3.out'
            });

            // DENIED Cards stagger
            gsap.to('.gs-denied-card', {
                scrollTrigger: { trigger: '.gs-denied-card', start: 'top 85%' },
                opacity: 1, x: 0, duration: 0.8, stagger: 0.15, ease: 'back.out(1.5)'
            });
            gsap.to('.gs-granted-card', {
                scrollTrigger: { trigger: '.gs-granted-card', start: 'top 85%' },
                opacity: 1, x: 0, duration: 0.8, ease: 'back.out(1.5)'
            });

            // Timeline Sequence
            gsap.to('#timeline-progress', {
                scrollTrigger: { trigger: '#timeline-progress', start: 'top 60%', end: 'bottom 20%', scrub: 1 },
                height: '100%', ease: 'none'
            });

            const tlNodes = document.querySelectorAll('.gs-tl-node');
            tlNodes.forEach((node, i) => {
                const dot = node.querySelector('.tl-dot');
                const text = node.querySelector('.tl-text');
                const desc = node.querySelector('.tl-desc');
                
                // Colors match gradient: top is accent, middle is ice, bottom is white
                let activeColor = '#FF3D00';
                if(i === 1) activeColor = '#00D4FF';
                if(i === 2) activeColor = '#00D4FF';
                if(i === 3) activeColor = '#F0F0F5';

                gsap.to(dot, {
                    scrollTrigger: { trigger: node, start: 'top 60%' },
                    backgroundColor: activeColor, borderColor: activeColor, scale: 1.2, duration: 0.5
                });
                gsap.to(text, {
                    scrollTrigger: { trigger: node, start: 'top 60%' },
                    color: '#F0F0F5', duration: 0.5
                });
                gsap.to(desc, {
                    scrollTrigger: { trigger: node, start: 'top 60%' },
                    color: '#6B6B7B', opacity: 1, duration: 0.5
                });
            });

            // Horizontal Line Draw
            gsap.to('.gs-line-draw', {
                scrollTrigger: { trigger: '.gs-line-draw', start: 'top 90%' },
                width: '100%', duration: 1.5, ease: 'power3.inOut'
            });

            // 3. Form Terminal Reveal
            gsap.to('.gs-terminal-form', {
                scrollTrigger: { trigger: '.gs-terminal-form', start: 'top 80%' },
                opacity: 1, scale: 1, y: 0, duration: 1, ease: 'power4.out'
            });
            gsap.to('.gs-footer-channels', {
                scrollTrigger: { trigger: '.gs-footer-channels', start: 'top 95%' },
                opacity: 1, y: 0, duration: 0.8, ease: 'power3.out'
            });

            // 4. FAQ Section
            gsap.to('.gs-faq-header', {
                scrollTrigger: { trigger: '#faq-section', start: 'top 80%' },
                opacity: 1, duration: 1
            });
            gsap.to('.gs-faq-item', {
                scrollTrigger: { trigger: '.gs-faq-item', start: 'top 85%' },
                opacity: 1, y: 0, duration: 0.5, stagger: 0.1, ease: 'power2.out'
            });

            // 5. Last Word Section
            const lwTl = gsap.timeline({ scrollTrigger: { trigger: '#last-word', start: 'top 40%' }});
            
            // Replicate letter-by-letter reveal for the subtext
            const lwText = document.querySelector('.gs-lw-text');
            const words = lwText.innerHTML.split('<br>');
            lwText.innerHTML = '';
            
            // Simple split text effect purely via GSAP natively or string manip
            const text1 = words[0];
            const text2 = words[1];
            
            let html = '';
            [...text1].forEach(char => html += `<span class="opacity-0 lw-char">${char}</span>`);
            html += '<br>';
            [...text2].forEach(char => html += `<span class="opacity-0 lw-char">${char}</span>`);
            lwText.innerHTML = html;

            lwTl.from('.gs-lw-title', { opacity: 0, y: 30, duration: 1, ease: 'power3.out' })
                .to('.lw-char', { opacity: 1, duration: 0.05, stagger: 0.02, ease: 'none' }, "-=0.5")
                .from('.gs-lw-btn', { opacity: 0, y: 20, duration: 1, ease: 'power3.out' }, "+=0.2");
                
            // Subtle shake interval for the CTA
            setInterval(() => {
                gsap.to('.gs-lw-shake', { x: -2, duration: 0.05, yoyo: true, repeat: 5, delay: 3 });
            }, 3000);
            
            // Pulse BG
            gsap.to('.lw-pulse-bg', {
                scale: 1.1, opacity: 0.3, duration: 2, repeat: -1, yoyo: true, ease: "sine.inOut"
            });
        }
    });

    // Alpine component for form handling
    document.addEventListener('alpine:init', () => {
        Alpine.data('contactTerminal', () => ({
            status: 'idle', // idle, loading, success, error
            errorMessage: '',
            loading: false,

            async submitForm() {
                if (this.loading) return;
                
                this.loading = true;
                this.status = 'idle';
                this.errorMessage = '';

                const form = this.$refs.form;
                const formData = new FormData(form);

                try {
                    const response = await fetch("{{ route('contact.submit') }}", {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    const data = await response.json();

                    if (response.ok) {
                        this.status = 'success';
                        // Keep loading briefly for cinematic effect then clear
                        setTimeout(() => {
                            this.loading = false;
                        }, 500);
                    } else {
                        this.status = 'error';
                        this.loading = false;
                        if (response.status === 422) {
                            // Validation error
                            const firstError = Object.values(data.errors)[0][0];
                            this.errorMessage = "VALIDATION FAILED - " + firstError.toUpperCase();
                        } else if (response.status === 429) {
                            this.errorMessage = "RATE LIMIT EXCEEDED. STAND BY.";
                        } else {
                            this.errorMessage = data.message ? data.message.toUpperCase() : "TRANSMISSION FAILED.";
                        }
                    }
                } catch (error) {
                    this.status = 'error';
                    this.loading = false;
                    this.errorMessage = "NETWORK FAILURE. CHECK CONNECTION.";
                }
            },

            resetForm() {
                this.$refs.form.reset();
                this.status = 'idle';
            }
        }));
    });
</script>
@endpush
