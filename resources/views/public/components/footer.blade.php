{{-- Edge Mind Footer --}}
<footer class="footer-edge">
    <div class="container-edge">
        <div class="footer-grid">
            {{-- Brand --}}
            <div>
                <div class="footer-brand">Edge<span>Mind</span></div>
                <p class="footer-desc">Books that don't motivate. They confront. Curated for the intellectually aggressive.</p>
            </div>

            {{-- Navigation --}}
            <div>
                <div class="footer-heading">Navigate</div>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('evolve') }}">Catalog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            {{-- Connect --}}
            <div>
                <div class="footer-heading">Connect</div>
                <ul class="footer-links">
                    <li><a href="mailto:hello@edgemind.com">hello@edgemind.com</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span class="footer-copy">&copy; {{ date('Y') }} Edge Mind. All rights reserved.</span>
            <span class="footer-copy" style="font-family: var(--font-mono); font-size: 0.65rem;">CLARITY THROUGH PRESSURE</span>
        </div>
    </div>
</footer>
