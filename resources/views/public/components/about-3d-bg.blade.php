{{-- Edge Mind About Hero 3D BG: "The Forge" --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none perspective-full">
    
    {{-- Forge Heat --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-red-900/10 rounded-full blur-[100px] opacity-40"></div>
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-[300px] bg-gradient-to-t from-em-accent/20 to-transparent opacity-30"></div>

    {{-- The Forge Chamber --}}
    <div class="absolute inset-0 flex items-center justify-center transform-style-3d forge-container">
        <style>
            .perspective-full { perspective: 1500px; }
            .transform-style-3d { transform-style: preserve-3d; }
            
            .compression-chamber {
                position: relative;
                width: 250px;
                height: 250px;
                transform-origin: center;
                animation: forge-breathe 6s ease-in-out infinite alternate;
            }

            @keyframes forge-breathe {
                0% { transform: scale(0.95) rotateY(0deg); }
                100% { transform: scale(1.05) rotateY(15deg); }
            }

            /* Raw Matter (Outer) */
            .raw-matter {
                position: absolute;
                inset: -20px;
                border: 2px dashed rgba(255, 61, 0, 0.3);
                border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
                animation: morph 8s linear infinite;
                transition: opacity 1s, transform 1s;
                z-index: 1;
            }

            @keyframes morph {
                0% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: rotate(0deg); }
                34% { border-radius: 70% 30% 50% 50% / 30% 30% 70% 70%; transform: rotate(120deg); }
                67% { border-radius: 100% 60% 60% 100% / 100% 100% 60% 60%; transform: rotate(240deg); }
                100% { border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: rotate(360deg); }
            }

            /* Forged Diamond (Inner) */
            .forged-diamond {
                position: absolute;
                inset: 30px;
                background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
                border: 1px solid var(--em-white);
                transform: rotate(45deg);
                box-shadow: inset 0 0 30px rgba(255,255,255,0.1), 0 0 50px rgba(255, 61, 0, 0.4);
                opacity: 0;
                transition: opacity 1s, transform 1s;
                z-index: 2;
                backdrop-filter: blur(5px);
            }

            /* Force Lines */
            .force-line {
                position: absolute;
                background: linear-gradient(90deg, transparent, var(--em-accent), transparent);
                height: 1px;
                width: 1000px;
                left: 50%;
                top: 50%;
                transform-origin: left center;
                opacity: 0.2;
            }

            .forging .raw-matter { opacity: 0; transform: scale(0.5); }
            .forging .forged-diamond { opacity: 1; transform: rotate(45deg) scale(1.1); border-color: var(--em-accent); box-shadow: inset 0 0 30px rgba(255,61,0,0.2), 0 0 80px rgba(255, 61, 0, 0.6); }
        </style>

        <div class="compression-chamber">
            <div class="raw-matter"></div>
            <div class="forged-diamond"></div>
        </div>

        {{-- Surrounding Force Vectors --}}
        <div class="force-line" style="transform: rotate(0deg) translateX(-500px);"></div>
        <div class="force-line" style="transform: rotate(45deg) translateX(-500px);"></div>
        <div class="force-line" style="transform: rotate(90deg) translateX(-500px);"></div>
        <div class="force-line" style="transform: rotate(135deg) translateX(-500px);"></div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const chamber = document.querySelector('.forge-container');
        
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            // Apply pressure on scroll
            if (scrollY > 100 && chamber) {
                chamber.classList.add('forging');
            } else if (chamber) {
                chamber.classList.remove('forging');
            }
        });
    });
</script>
@endpush
