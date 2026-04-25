{{-- Edge Mind Footer: Terminal Closing Statement --}}
<footer class="footer-terminal">
    <div class="container-edge">
        {{-- Massive Typography Block --}}
        <div class="footer-statement-wrapper">
            <h2 class="footer-statement" id="footer-statement">
                THE SYSTEM DOESN'T WAIT<span class="statement-dot">.</span>
            </h2>
        </div>

        {{-- Dynamic Divider --}}
        <div class="footer-divider-container">
            <div class="footer-divider line-draw-center"></div>
        </div>

        {{-- Terminal Grid --}}
        <div class="terminal-grid" id="terminal-grid">
            {{-- Navigation --}}
            <div class="terminal-col col-nav">
                <ul class="terminal-links">
                    <li><a href="{{ route('home') }}" class="terminal-link"><span class="link-index">[01]</span> <span class="link-text">HOME</span></a></li>
                    <li><a href="{{ route('about') }}" class="terminal-link"><span class="link-index">[02]</span> <span class="link-text">ABOUT</span></a></li>
                    <li><a href="{{ route('evolve') }}" class="terminal-link"><span class="link-index">[03]</span> <span class="link-text">CATALOG</span></a></li>
                    <li><a href="{{ route('contact') }}" class="terminal-link"><span class="link-index">[04]</span> <span class="link-text">CONTACT</span></a></li>
                </ul>
            </div>

            {{-- Brand --}}
            <div class="terminal-col col-brand">
                <div class="brand-name">EDGE<span class="brand-dot">·</span>MIND</div>
                <div class="brand-tagline">Clarity Through<br/>Pressure.</div>
            </div>

            {{-- Contact & Status --}}
            <div class="terminal-col col-status">
                <a href="mailto:hello@edgemind.com" class="terminal-email glitch-hover" data-text="hello@edgemind.com">hello@edgemind.com</a>
                <div class="status-divider"></div>
                <div class="status-label">SYSTEM STATUS:</div>
                <div class="status-value">
                    <span class="status-bars">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                        <span class="bar bar-4"></span>
                        <span class="bar bar-5"></span>
                        <span class="bar bar-6"></span>
                        <span class="bar bar-7"></span>
                    </span>
                    ACTIVE
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="terminal-bottom" id="terminal-bottom">
            <div class="copyright">&copy; {{ date('Y') }} EDGE MIND</div>
            <div class="final-warning">YOU WERE WARNED. // TRANSMISSION END</div>
        </div>
    </div>
</footer>
