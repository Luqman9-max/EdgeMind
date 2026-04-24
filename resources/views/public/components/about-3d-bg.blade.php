{{-- Edge Mind About Hero 3D BG: "The Forge" WebGL --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none">
    {{-- WebGL Canvas --}}
    <canvas id="forge-noise-canvas" class="absolute inset-0 w-full h-full opacity-70"></canvas>
    
    {{-- Ambient Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-em-accent-hot/10 rounded-full blur-[140px] mix-blend-screen opacity-60 parallax-glow" data-speed="0.05"></div>
    
    {{-- Forge Heat --}}
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-[400px] bg-gradient-to-t from-em-accent/10 to-transparent mix-blend-screen opacity-50 z-10 pointer-events-none animate-pulse"></div>

    {{-- Scanline overlay (CSS) --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] opacity-40 z-10 pointer-events-none"></div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('forge-noise-canvas');
    if (!canvas) return;

    const gl = canvas.getContext('webgl');
    if (!gl) {
        canvas.style.display = 'none';
        return;
    }

    const vsSource = `
        attribute vec2 position;
        void main() {
            gl_Position = vec4(position, 0.0, 1.0);
        }
    `;

    const fsSource = `
        precision mediump float;
        uniform vec2 u_resolution;
        uniform float u_time;
        uniform vec2 u_mouse;
        uniform float u_scrollY;

        float random(vec2 st) {
            return fract(sin(dot(st.xy, vec2(12.9898,78.233))) * 43758.5453123);
        }

        // Noise function
        float noise (in vec2 st) {
            vec2 i = floor(st);
            vec2 f = fract(st);

            float a = random(i);
            float b = random(i + vec2(1.0, 0.0));
            float c = random(i + vec2(0.0, 1.0));
            float d = random(i + vec2(1.0, 1.0));

            vec2 u = f * f * (3.0 - 2.0 * f);

            return mix(a, b, u.x) +
                    (c - a)* u.y * (1.0 - u.x) +
                    (d - b) * u.x * u.y;
        }

        // Fractal Brownian Motion for cracks
        float fbm(in vec2 st) {
            float value = 0.0;
            float amplitude = .5;
            float frequency = 0.;
            
            for (int i = 0; i < 5; i++) {
                value += amplitude * noise(st);
                st *= 2.;
                amplitude *= .5;
            }
            return value;
        }

        void main() {
            vec2 st = gl_FragCoord.xy/u_resolution.xy;
            st.x *= u_resolution.x/u_resolution.y;
            
            vec2 mouse_dist = st - u_mouse;
            float dist = length(mouse_dist);
            float influence = smoothstep(1.0, 0.0, dist);
            
            // Setup movement
            vec2 pos = st * 4.0;
            pos.y += u_time * 0.05 + u_scrollY * 0.001; 
            pos += mouse_dist * influence * 0.3;
            
            // FBM for the "cracks" and "forge heat"
            float n = fbm(pos * 2.0 - u_time * 0.1);
            float crack = abs(sin(fbm(pos * 3.0 + u_time * 0.2) * 10.0));
            crack = smoothstep(0.0, 0.1, crack); // Sharpen the cracks
            
            // Particles/Embers
            float ember_noise = noise(pos * 20.0 + vec2(u_time, -u_time));
            float embers = smoothstep(0.85, 1.0, ember_noise);

            // Colors
            vec3 background = vec3(0.03, 0.03, 0.04);
            vec3 heat = vec3(1.0, 0.25, 0.0); // em-accent
            vec3 darkHeat = vec3(0.5, 0.1, 0.0);
            
            // Mix based on cracks
            vec3 finalColor = mix(heat, background, crack);
            
            // Add generalized heat
            finalColor += darkHeat * smoothstep(0.4, 0.8, n);
            
            // Add Embers
            finalColor += heat * embers * 2.0;
            
            // Mouse Influence
            finalColor += heat * influence * 0.2 * (1.0 - crack);

            // Grain
            finalColor += random(st * u_time) * 0.08;
            
            // Vignette
            float vignette = length(st - vec2(0.5));
            finalColor *= smoothstep(1.5, 0.2, vignette);

            gl_FragColor = vec4(finalColor, 1.0);
        }
    `;

    function compileShader(gl, source, type) {
        const shader = gl.createShader(type);
        gl.shaderSource(shader, source);
        gl.compileShader(shader);
        if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
            console.error('Shader error:', gl.getShaderInfoLog(shader));
            gl.deleteShader(shader);
            return null;
        }
        return shader;
    }

    const vertexShader = compileShader(gl, vsSource, gl.VERTEX_SHADER);
    const fragmentShader = compileShader(gl, fsSource, gl.FRAGMENT_SHADER);

    const program = gl.createProgram();
    gl.attachShader(program, vertexShader);
    gl.attachShader(program, fragmentShader);
    gl.linkProgram(program);
    gl.useProgram(program);

    const vertices = new Float32Array([
        -1.0, -1.0,  1.0, -1.0, -1.0,  1.0,
        -1.0,  1.0,  1.0, -1.0,  1.0,  1.0
    ]);

    const buffer = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
    gl.bufferData(gl.ARRAY_BUFFER, vertices, gl.STATIC_DRAW);

    const positionLoc = gl.getAttribLocation(program, 'position');
    gl.enableVertexAttribArray(positionLoc);
    gl.vertexAttribPointer(positionLoc, 2, gl.FLOAT, false, 0, 0);

    const uResolution = gl.getUniformLocation(program, 'u_resolution');
    const uTime = gl.getUniformLocation(program, 'u_time');
    const uMouse = gl.getUniformLocation(program, 'u_mouse');
    const uScrollY = gl.getUniformLocation(program, 'u_scrollY');

    let mouseX = 0.5, mouseY = 0.5;
    let targetMouseX = 0.5, targetMouseY = 0.5;

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        gl.viewport(0, 0, canvas.width, canvas.height);
        gl.uniform2f(uResolution, canvas.width, canvas.height);
    }
    window.addEventListener('resize', resize);
    resize();

    window.addEventListener('mousemove', (e) => {
        targetMouseX = e.clientX / window.innerWidth;
        targetMouseY = 1.0 - (e.clientY / window.innerHeight);
        targetMouseX *= window.innerWidth / window.innerHeight;
    });

    const parallaxGlow = document.querySelector('.parallax-glow');
    let scrollY = 0;

    window.addEventListener('scroll', () => {
        scrollY = window.scrollY;
    });

    let startTime = Date.now();
    function render() {
        mouseX += (targetMouseX - mouseX) * 0.05;
        mouseY += (targetMouseY - mouseY) * 0.05;

        gl.uniform1f(uTime, (Date.now() - startTime) / 1000.0);
        gl.uniform2f(uMouse, mouseX, mouseY);
        gl.uniform1f(uScrollY, scrollY);

        gl.drawArrays(gl.TRIANGLES, 0, 6);

        if(parallaxGlow) {
            const parallaxX = (mouseX - window.innerWidth/window.innerHeight/2) * -50;
            const parallaxY = (mouseY - 0.5) * 50;
            parallaxGlow.style.transform = `translate(-50%, -50%) translate3d(${parallaxX}px, ${parallaxY}px, 0)`;
        }

        requestAnimationFrame(render);
    }
    render();
});
</script>
@endpush
