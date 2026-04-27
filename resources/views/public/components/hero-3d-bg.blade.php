{{-- Edge Mind Home Hero WebGL Background (Redesigned) --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none">
    {{-- WebGL Canvas --}}
    <canvas id="hero-sys-canvas" class="absolute inset-0 w-full h-full opacity-80"></canvas>
    
    {{-- Ambient Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-em-accent/10 rounded-full blur-[140px] mix-blend-screen opacity-40 parallax-glow" data-speed="0.05"></div>

    {{-- Scanline overlay (CSS) --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.4)_50%)] bg-[length:100%_4px] opacity-40 z-10 pointer-events-none"></div>
    
    {{-- Screen Edge Vignette --}}
    <div class="absolute inset-0 shadow-[inset_0_0_150px_rgba(10,10,11,1)] z-10 pointer-events-none"></div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('hero-sys-canvas');
    if (!canvas) return;

    const gl = canvas.getContext('webgl');
    if (!gl) {
        canvas.style.display = 'none';
        return;
    }

    // Vertex Shader: simple pass-through
    const vsSource = `
        attribute vec2 position;
        void main() {
            gl_Position = vec4(position, 0.0, 1.0);
        }
    `;

    // Fragment Shader: Brutalist System Topography
    const fsSource = `
        precision mediump float;
        uniform vec2 u_resolution;
        uniform float u_time;
        uniform vec2 u_mouse;

        // Hash function for noise
        float hash(vec2 p) {
            p = fract(p * vec2(123.34, 456.21));
            p += dot(p, p + 45.32);
            return fract(p.x * p.y);
        }

        // Value noise
        float noise(vec2 x) {
            vec2 i = floor(x);
            vec2 f = fract(x);
            f = f * f * (3.0 - 2.0 * f);
            float a = hash(i);
            float b = hash(i + vec2(1.0, 0.0));
            float c = hash(i + vec2(0.0, 1.0));
            float d = hash(i + vec2(1.0, 1.0));
            return mix(mix(a, b, f.x), mix(c, d, f.x), f.y);
        }

        // Fractal Brownian Motion
        float fbm(vec2 x) {
            float v = 0.0;
            float a = 0.5;
            vec2 shift = vec2(100.0);
            mat2 rot = mat2(cos(0.5), sin(0.5), -sin(0.5), cos(0.50));
            for (int i = 0; i < 5; ++i) {
                v += a * noise(x);
                x = rot * x * 2.0 + shift;
                a *= 0.5;
            }
            return v;
        }

        void main() {
            vec2 st = gl_FragCoord.xy / u_resolution.xy;
            st.x *= u_resolution.x / u_resolution.y;

            // Mouse interaction
            vec2 mousePos = u_mouse;
            float distToMouse = length(st - mousePos);
            float interaction = exp(-distToMouse * 3.0); // Intense localized field

            // Grid coordinates
            vec2 pos = st * 12.0; 
            pos.y -= u_time * 1.5; // Flowing downwards

            // Topographical elevation based on FBM
            float elevation = fbm(pos * 0.5 + u_time * 0.1);
            
            // Distort grid based on elevation & mouse
            pos += elevation * 1.5;
            pos += interaction * 0.5;

            // Create contour lines
            float contour = fract(elevation * 10.0);
            float lineThickness = 0.05 + interaction * 0.1; // Thicker lines near mouse
            float lines = smoothstep(lineThickness, 0.0, contour) + smoothstep(1.0 - lineThickness, 1.0, contour);

            // Create vertical binary/data streaks
            float streak = step(0.98, hash(vec2(floor(pos.x * 5.0), floor(pos.y + u_time * 5.0))));
            
            // Glitch horizontal bands
            float glitch = step(0.99, hash(vec2(floor(st.y * 30.0), u_time)));

            // Color palette (Edge Mind system)
            vec3 bgColor = vec3(0.04, 0.04, 0.04);
            vec3 contourColor = vec3(0.16, 0.16, 0.2); // Steel grey
            vec3 accentColor = vec3(1.0, 0.24, 0.0); // Accent #FF3D00
            
            vec3 color = bgColor;
            
            // Apply contours
            color = mix(color, contourColor, lines * 0.5);
            
            // Apply data streaks
            color = mix(color, accentColor, streak * 0.8);
            
            // Apply glitch
            color = mix(color, accentColor, glitch * 0.6);
            
            // Mouse glow
            color += accentColor * interaction * 0.3;
            
            // Vignette
            float vignette = length(gl_FragCoord.xy / u_resolution.xy - 0.5);
            color *= smoothstep(0.8, 0.2, vignette);

            gl_FragColor = vec4(color, 1.0);
        }
    `;

    // Compile Shader
    function compileShader(gl, source, type) {
        const shader = gl.createShader(type);
        gl.shaderSource(shader, source);
        gl.compileShader(shader);
        if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
            console.error('Shader compile error:', gl.getShaderInfoLog(shader));
            gl.deleteShader(shader);
            return null;
        }
        return shader;
    }

    const vertexShader = compileShader(gl, vsSource, gl.VERTEX_SHADER);
    const fragmentShader = compileShader(gl, fsSource, gl.FRAGMENT_SHADER);

    // Create Program
    const program = gl.createProgram();
    gl.attachShader(program, vertexShader);
    gl.attachShader(program, fragmentShader);
    gl.linkProgram(program);
    gl.useProgram(program);

    // Geometry
    const vertices = new Float32Array([
        -1.0, -1.0,
         1.0, -1.0,
        -1.0,  1.0,
        -1.0,  1.0,
         1.0, -1.0,
         1.0,  1.0
    ]);

    const buffer = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
    gl.bufferData(gl.ARRAY_BUFFER, vertices, gl.STATIC_DRAW);

    const positionLoc = gl.getAttribLocation(program, 'position');
    gl.enableVertexAttribArray(positionLoc);
    gl.vertexAttribPointer(positionLoc, 2, gl.FLOAT, false, 0, 0);

    // Uniforms
    const uResolution = gl.getUniformLocation(program, 'u_resolution');
    const uTime = gl.getUniformLocation(program, 'u_time');
    const uMouse = gl.getUniformLocation(program, 'u_mouse');

    let mouseX = 0.5;
    let mouseY = 0.5;
    let targetMouseX = 0.5;
    let targetMouseY = 0.5;

    // Resize handler
    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        gl.viewport(0, 0, canvas.width, canvas.height);
        gl.uniform2f(uResolution, canvas.width, canvas.height);
    }
    window.addEventListener('resize', resize);
    resize();

    // Mouse movement
    window.addEventListener('mousemove', (e) => {
        targetMouseX = e.clientX / window.innerWidth;
        targetMouseY = 1.0 - (e.clientY / window.innerHeight); 
        targetMouseX *= window.innerWidth / window.innerHeight;
    });

    const parallaxGlow = document.querySelector('.parallax-glow');

    // Render loop
    let startTime = Date.now();
    function render() {
        mouseX += (targetMouseX - mouseX) * 0.05;
        mouseY += (targetMouseY - mouseY) * 0.05;

        gl.uniform1f(uTime, (Date.now() - startTime) / 1000.0);
        gl.uniform2f(uMouse, mouseX, mouseY);

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
