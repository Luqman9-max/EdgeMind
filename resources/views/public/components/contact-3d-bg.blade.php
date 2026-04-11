{{-- Edge Mind Contact Hero 3D BG: "The Transmission" --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none perspective-full">
    
    <div class="absolute inset-0 flex pt-32 justify-center transform-style-3d transmission-container">
        <style>
            .perspective-full { perspective: 1200px; }
            .transform-style-3d { transform-style: preserve-3d; }
            
            /* Central Beam */
            .signal-beam {
                position: absolute;
                bottom: -20%;
                width: 2px;
                height: 150%;
                background: linear-gradient(to top, transparent, var(--em-accent) 50%, var(--em-white) 100%);
                box-shadow: 0 0 20px var(--em-accent), 0 0 40px var(--em-accent);
                opacity: 0.6;
            }

            /* Concentric Sonar Rings */
            .sonar-ring {
                position: absolute;
                bottom: 0;
                width: 100px;
                height: 100px;
                border: 1px solid var(--em-accent);
                border-radius: 50%;
                transform-origin: center;
                animation: sonar-pulse 4s cubic-bezier(0.16, 1, 0.3, 1) infinite;
                transform: rotateX(75deg);
                opacity: 0;
            }

            .sonar-ring:nth-child(2) { animation-delay: 1s; }
            .sonar-ring:nth-child(3) { animation-delay: 2s; }
            .sonar-ring:nth-child(4) { animation-delay: 3s; }

            @keyframes sonar-pulse {
                0% { transform: rotateX(75deg) scale(0); opacity: 1; }
                100% { transform: rotateX(75deg) scale(15); opacity: 0; border-width: 0.5px; }
            }

            /* Data Particles */
            .particle-stream {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 100%;
            }
            .data-particle {
                position: absolute;
                width: 3px;
                height: 15px;
                background: var(--em-white);
                left: 50%;
                transform: translateX(-50%);
                opacity: 0.8;
                animation: data-shoot 2s linear infinite;
            }

            @keyframes data-shoot {
                0% { bottom: 0; opacity: 1; transform: translateX(-50%) scaleY(1); }
                100% { bottom: 100%; opacity: 0; transform: translateX(-50%) scaleY(3); }
            }

            .data-particle.p1 { animation-duration: 1.5s; animation-delay: 0s; }
            .data-particle.p2 { animation-duration: 2.2s; animation-delay: 0.8s; left: calc(50% - 10px); background: var(--em-ice); }
            .data-particle.p3 { animation-duration: 1.8s; animation-delay: 1.2s; left: calc(50% + 10px); }
            
            /* Reception Dish */
            .reception-dish {
                position: absolute;
                top: 0;
                width: 600px;
                height: 600px;
                border-bottom: 2px dashed rgba(255, 61, 0, 0.2);
                border-radius: 50%;
                transform: rotateX(80deg) translateY(-300px);
            }
        </style>

        {{-- Rings base at the bottom --}}
        <div class="relative w-full h-full flex justify-center">
            <div class="reception-dish"></div>
            <div class="sonar-ring"></div>
            <div class="sonar-ring"></div>
            <div class="sonar-ring"></div>
            <div class="sonar-ring"></div>
            
            <div class="signal-beam"></div>
            
            <div class="particle-stream">
                <div class="data-particle p1"></div>
                <div class="data-particle p2"></div>
                <div class="data-particle p3"></div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const beam = document.querySelector('.signal-beam');
        
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            if (beam) {
                // Beam intensity correlates to scroll
                const intensity = Math.min(1, 0.6 + (scrollY / 500));
                beam.style.opacity = intensity;
            }
        });
    });
</script>
@endpush
