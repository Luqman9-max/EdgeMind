{{-- Edge Mind Home Hero WebGL Background --}}
<div class="absolute inset-0 z-0 overflow-hidden bg-em-black pointer-events-none">
    {{-- WebGL Canvas --}}
    <canvas id="hero-noise-canvas" class="absolute inset-0 w-full h-full opacity-60"></canvas>
    
    {{-- Ambient Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-em-accent/10 rounded-full blur-[140px] mix-blend-screen opacity-50 parallax-glow" data-speed="0.05"></div>

    {{-- Scanline overlay (CSS) --}}
    <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%)] bg-[length:100%_4px] opacity-30 z-10"></div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('hero-noise-canvas');
    if (!canvas) return;

    const gl = canvas.getContext('webgl');
    if (!gl) {
        // Fallback if WebGL isn't supported
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

    // Fragment Shader: procedural noise and distortion based on mouse
    const fsSource = `
        precision mediump float;
        uniform vec2 u_resolution;
        uniform float u_time;
        uniform vec2 u_mouse;

        // Random function
        float random(vec2 st) {
            return fract(sin(dot(st.xy, vec2(12.9898,78.233))) * 43758.5453123);
        }

        // 2D Noise based on Morgan McGuire @morgan3d
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

        void main() {
            vec2 st = gl_FragCoord.xy/u_resolution.xy;
            st.x *= u_resolution.x/u_resolution.y;
            
            // Mouse distortion
            vec2 mouse_dist = st - u_mouse;
            float dist = length(mouse_dist);
            float influence = smoothstep(0.8, 0.0, dist);
            
            // Add movement and distortion
            vec2 pos = st * 3.0;
            pos.y += u_time * 0.1;
            pos += mouse_dist * influence * 0.5;
            
            // Generate noise
            float n = noise(pos * 5.0 + u_time * 0.5);
            n += noise(pos * 10.0 - u_time * 0.2) * 0.5;
            
            // Add high-frequency grain
            float grain = random(st * u_time) * 0.15;
            
            // Color grading (Red / Orange / Dark)
            vec3 color1 = vec3(0.04, 0.04, 0.04); // Dark background
            vec3 color2 = vec3(1.0, 0.2, 0.0);    // Accent Red/Orange
            vec3 color3 = vec3(0.1, 0.1, 0.15);   // Slightly blueish dark
            
            vec3 finalColor = mix(color1, color3, n);
            // Add accent color based on noise intensity and mouse proximity
            float accentVal = smoothstep(0.7, 1.0, n + influence * 0.5);
            finalColor = mix(finalColor, color2, accentVal * 0.4);
            
            // Apply grain
            finalColor += grain;
            
            // Vignette
            float vignette = length(st - vec2(0.5));
            finalColor *= smoothstep(1.2, 0.4, vignette);

            gl_FragColor = vec4(finalColor, 1.0);
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

    // Geometry (Full screen quad)
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

    // Mouse movement tracking
    window.addEventListener('mousemove', (e) => {
        // Normalize mouse coordinates based on canvas ratio
        targetMouseX = e.clientX / window.innerWidth;
        targetMouseY = 1.0 - (e.clientY / window.innerHeight); // Invert Y for WebGL
        
        // Adjust for aspect ratio
        targetMouseX *= window.innerWidth / window.innerHeight;
    });

    // Parallax elements
    const parallaxGlow = document.querySelector('.parallax-glow');

    // Render loop
    let startTime = Date.now();
    function render() {
        // Smooth mouse interpolation
        mouseX += (targetMouseX - mouseX) * 0.05;
        mouseY += (targetMouseY - mouseY) * 0.05;

        gl.uniform1f(uTime, (Date.now() - startTime) / 1000.0);
        gl.uniform2f(uMouse, mouseX, mouseY);

        gl.drawArrays(gl.TRIANGLES, 0, 6);

        // Parallax updates
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
