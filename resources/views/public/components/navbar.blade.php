{{-- Edge Mind Navigation --}}
<nav class="nav-edge" id="main-nav">
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">Edge<span>Mind</span></a>

        <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-links" id="nav-links">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('evolve') }}" class="{{ request()->routeIs('catalog.*') ? 'active' : '' }}">Catalog</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </div>
</nav>
