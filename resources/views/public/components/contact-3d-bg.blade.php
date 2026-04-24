{{-- Edge Mind Contact 3D BG WebGL --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none">
    {{-- WebGL Canvas --}}
    <canvas id="contact-noise-canvas" class="absolute inset-0 w-full h-full opacity-60"></canvas>
    
    {{-- Ambient Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-em-accent/10 rounded-full blur-[140px] mix-blend-screen opacity-40 parallax-glow" data-speed="0.05"></div>
    <div class="absolute top-1/4 left-3/4 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-em-ice/10 rounded-full blur-[120px] mix-blend-screen opacity-30 parallax-glow-alt" data-speed="0.03"></div>

    {{-- Scanline overlay (CSS) --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] opacity-40 z-10"></div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('contact-noise-canvas');
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

        float random(vec2 st) {
            return fract(sin(dot(st.xy, vec2(12.9898,78.233))) * 43758.5453123);
        }

        float noise (in vec2 st) {
            vec2 i = floor(st);
            vec2 f = fract(st);
            float a = random(i);
            float b = random(i + vec2(1.0, 0.0));
            float c = random(i + vec2(0.0, 1.0));
            float d = random(i + vec2(1.0, 1.0));
            vec2 u = f * f * (3.0 - 2.0 * f);
            return mix(a, b, u.x) + (c - a)* u.y * (1.0 - u.x) + (d - b) * u.x * u.y;
        }

        void main() {
            vec2 st = gl_FragCoord.xy/u_resolution.xy;
            st.x *= u_resolution.x/u_resolution.y;
            
            vec2 mouse_dist = st - u_mouse;
            float dist = length(mouse_dist);
            float influence = smoothstep(1.0, 0.0, dist);
            
            vec2 pos = st * 4.0;
            pos.y += u_time * 0.15;
            pos += mouse_dist * influence * 0.6;
            
            float n = noise(pos * 3.0 - u_time * 0.3);
            n += noise(pos * 8.0 + u_time * 0.1) * 0.5;
            
            float grain = random(st * u_time) * 0.12;
            
            // Colors: Black / Deep Blue / Electric Red/Ice
            vec3 bg = vec3(0.03, 0.03, 0.04);
            vec3 ice = vec3(0.0, 0.83, 1.0); // em-ice
            vec3 accent = vec3(1.0, 0.24, 0.0); // em-accent
            
            vec3 finalColor = bg;
            
            // Base grid distortion vibe
            float gridNoise = smoothstep(0.6, 1.0, n);
            finalColor = mix(finalColor, ice * 0.3, gridNoise);
            
            // Mouse interaction adds violent red glitch
            float glitchVal = smoothstep(0.8, 1.0, noise(pos * 10.0 + u_time * 2.0));
            finalColor = mix(finalColor, accent, glitchVal * influence * 0.8);
            
            finalColor += grain;
            
            float vignette = length(st - vec2(0.5));
            finalColor *= smoothstep(1.2, 0.3, vignette);

            gl_FragColor = vec4(finalColor, 1.0);
        }
    `;

    function compileShader(gl, source, type) {
        const shader = gl.createShader(type);
        gl.shaderSource(shader, source);
        gl.compileShader(shader);
        if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) return null;
        return shader;
    }

    const vertexShader = compileShader(gl, vsSource, gl.VERTEX_SHADER);
    const fragmentShader = compileShader(gl, fsSource, gl.FRAGMENT_SHADER);

    const program = gl.createProgram();
    gl.attachShader(program, vertexShader);
    gl.attachShader(program, fragmentShader);
    gl.linkProgram(program);
    gl.useProgram(program);

    const vertices = new Float32Array([-1.0, -1.0, 1.0, -1.0, -1.0, 1.0, -1.0, 1.0, 1.0, -1.0, 1.0, 1.0]);
    const buffer = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
    gl.bufferData(gl.ARRAY_BUFFER, vertices, gl.STATIC_DRAW);

    const positionLoc = gl.getAttribLocation(program, 'position');
    gl.enableVertexAttribArray(positionLoc);
    gl.vertexAttribPointer(positionLoc, 2, gl.FLOAT, false, 0, 0);

    const uResolution = gl.getUniformLocation(program, 'u_resolution');
    const uTime = gl.getUniformLocation(program, 'u_time');
    const uMouse = gl.getUniformLocation(program, 'u_mouse');

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
    const parallaxGlowAlt = document.querySelector('.parallax-glow-alt');

    let startTime = Date.now();
    function render() {
        mouseX += (targetMouseX - mouseX) * 0.05;
        mouseY += (targetMouseY - mouseY) * 0.05;

        gl.uniform1f(uTime, (Date.now() - startTime) / 1000.0);
        gl.uniform2f(uMouse, mouseX, mouseY);

        gl.drawArrays(gl.TRIANGLES, 0, 6);

        if(parallaxGlow) {
            const pX = (mouseX - window.innerWidth/window.innerHeight/2) * -50;
            const pY = (mouseY - 0.5) * 50;
            parallaxGlow.style.transform = `translate(-50%, -50%) translate3d(${pX}px, ${pY}px, 0)`;
        }
        if(parallaxGlowAlt) {
            const pX2 = (mouseX - window.innerWidth/window.innerHeight/2) * -30;
            const pY2 = (mouseY - 0.5) * 30;
            parallaxGlowAlt.style.transform = `translate(-50%, -50%) translate3d(${pX2}px, ${pY2}px, 0)`;
        }

        requestAnimationFrame(render);
    }
    render();
});
</script>
@endpush
