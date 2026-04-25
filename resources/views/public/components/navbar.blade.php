{{-- Edge Mind Navigation: Command Interface --}}
<nav class="nav-edge" id="main-nav">
    {{-- Dynamic Scroll Border --}}
    <div class="nav-border"></div>

    <div class="nav-inner">
        {{-- Logo & Status --}}
        <div class="nav-brand">
            <a href="{{ route('home') }}" class="nav-logo">EDGE<span class="logo-dot">·</span>MIND</a>
            <div class="sys-status">
                <span class="status-dot"></span>
                <span class="status-text">SYS.ONLINE</span>
            </div>
        </div>

        {{-- Desktop Navigation --}}
        <ul class="nav-links" id="nav-links">
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} nav-link">
                    <span class="nav-index">01_</span><span class="nav-text" data-text="HOME">HOME</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }} nav-link">
                    <span class="nav-index">02_</span><span class="nav-text" data-text="ABOUT">ABOUT</span>
                </a>
            </li>
            <li>
                <a href="{{ route('evolve') }}" class="{{ request()->routeIs('catalog.*') ? 'active' : '' }} nav-link">
                    <span class="nav-index">03_</span><span class="nav-text" data-text="CATALOG">CATALOG</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }} nav-link">
                    <span class="nav-index">04_</span><span class="nav-text" data-text="CONTACT">CONTACT</span>
                </a>
            </li>
        </ul>

        {{-- Action & Mobile Toggle --}}
        <div class="nav-actions">
            <a href="{{ route('evolve') }}" class="btn-initiate hidden md:flex">
                <span class="initiate-icon">▰</span> <span class="initiate-text">INITIATE</span>
            </a>

            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation">
                <span class="line-1"></span>
                <span class="line-2"></span>
            </button>
        </div>
    </div>

    {{-- Mobile Fullscreen Menu --}}
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-inner">
            <div class="mobile-sys-status">
                <span class="status-dot"></span>
                <span class="status-text">SYSTEM.OVERRIDE.ACTIVE</span>
            </div>
            
            <ul class="mobile-links">
                <li style="--stagger: 1"><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><span class="nav-index">01_</span> HOME</a></li>
                <li style="--stagger: 2"><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}"><span class="nav-index">02_</span> ABOUT</a></li>
                <li style="--stagger: 3"><a href="{{ route('evolve') }}" class="{{ request()->routeIs('catalog.*') ? 'active' : '' }}"><span class="nav-index">03_</span> CATALOG</a></li>
                <li style="--stagger: 4"><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}"><span class="nav-index">04_</span> CONTACT</a></li>
            </ul>
            
            <div class="mobile-footer" style="--stagger: 5">
                <a href="{{ route('evolve') }}" class="btn-initiate w-full justify-center">
                    <span class="initiate-icon">▰</span> <span class="initiate-text">INITIATE PROTOCOL</span>
                </a>
            </div>
        </div>
    </div>
</nav>
