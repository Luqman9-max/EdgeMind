{{-- Edge Mind Home Hero 3D BG: "The Fracture" --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none perspective-full">
    
    {{-- Ambient Core Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-em-accent/10 rounded-full blur-[120px] mix-blend-screen opacity-50 animate-pulse-slow"></div>

    {{-- Fracture Container --}}
    <div class="absolute inset-0 flex items-center justify-center transform-style-3d fracture-container relative">
        <style>
            .perspective-full { perspective: 2000px; }
            .transform-style-3d { transform-style: preserve-3d; }
            
            .crystal-core {
                position: absolute;
                width: 200px;
                height: 200px;
                background: radial-gradient(circle, var(--em-white) 0%, var(--em-accent) 40%, transparent 80%);
                filter: blur(20px);
                opacity: 0.8;
                animation: core-pulse 4s ease-in-out infinite alternate;
                z-index: 1;
            }

            @keyframes core-pulse {
                0% { transform: scale(0.9) translateZ(-50px); opacity: 0.6; }
                100% { transform: scale(1.1) translateZ(0px); opacity: 1; box-shadow: 0 0 100px var(--em-accent); }
            }

            .fragment {
                position: absolute;
                width: 300px;
                height: 400px;
                background: linear-gradient(135deg, rgba(20, 20, 24, 0.9) 0%, rgba(10, 10, 11, 0.95) 100%);
                border: 1px solid rgba(255, 61, 0, 0.2);
                transform-origin: center;
                transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.5s;
                z-index: 2;
                backdrop-filter: blur(10px);
                box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.02), 0 20px 50px rgba(0,0,0,0.5);
            }

            /* CSS clip-path to create shards */
            .frag-1 { clip-path: polygon(50% 0%, 100% 38%, 56% 54%, 17% 24%); transform: translate3d(-10px, -20px, 40px) rotateX(5deg) rotateY(-10deg); }
            .frag-2 { clip-path: polygon(100% 38%, 100% 100%, 75% 65%, 56% 54%); transform: translate3d(20px, 10px, 60px) rotateX(-5deg) rotateY(15deg); }
            .frag-3 { clip-path: polygon(56% 54%, 75% 65%, 40% 100%, 25% 70%); transform: translate3d(5px, 25px, 80px) rotateX(-15deg) rotateY(-5deg); }
            .frag-4 { clip-path: polygon(17% 24%, 56% 54%, 25% 70%, 0% 50%); transform: translate3d(-25px, 5px, 50px) rotateX(10deg) rotateY(20deg); }

            /* On Scroll/Hover effect via JS will widen these transforms */
            .fractured .frag-1 { transform: translate3d(-60px, -80px, 140px) rotateX(25deg) rotateY(-30deg) rotateZ(-10deg); border-color: rgba(0, 212, 255, 0.4); }
            .fractured .frag-2 { transform: translate3d(80px, 40px, 200px) rotateX(-20deg) rotateY(45deg) rotateZ(15deg); border-color: rgba(255, 61, 0, 0.6); }
            .fractured .frag-3 { transform: translate3d(20px, 100px, 180px) rotateX(-35deg) rotateY(-15deg) rotateZ(20deg); border-color: rgba(255, 61, 0, 0.4); }
            .fractured .frag-4 { transform: translate3d(-100px, 20px, 160px) rotateX(30deg) rotateY(40deg) rotateZ(-15deg); border-color: rgba(0, 212, 255, 0.3); }

            .ambient-particle {
                position: absolute;
                width: 2px;
                height: 2px;
                background: var(--em-white);
                border-radius: 50%;
                opacity: 0.3;
            }
        </style>

        <div class="crystal-core"></div>
        <div class="fragment frag-1"></div>
        <div class="fragment frag-2"></div>
        <div class="fragment frag-3"></div>
        <div class="fragment frag-4"></div>
    </div>

    {{-- Grid Overlay --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:60px_60px] opacity-20 transform-style-3d" style="transform: rotateX(60deg) translateZ(-200px);"></div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.querySelector('.fracture-container');
        
        // Mouse movement effect
        window.addEventListener('mousemove', (e) => {
            const x = (e.clientX / window.innerWidth - 0.5) * 2; // -1 to 1
            const y = (e.clientY / window.innerHeight - 0.5) * 2;
            
            if(container) {
                container.style.transform = `rotateY(${x * 10}deg) rotateX(${-y * 10}deg)`;
            }
        });

        // Scroll fracture effect
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            if (scrollY > 50) {
                container.classList.add('fractured');
            } else {
                container.classList.remove('fractured');
            }
        });
    });
</script>
@endpush
