<nav class="nav" data-nav>
    <div class="container">
        <div class="nav__inner">
            <a href="{{ route('home') }}" class="nav__brand" aria-label="Treemix Profesional - Inicio">
                <img src="{{ asset('logo.png') }}" alt="" class="nav__brand-logo">
                <span class="nav__brand-text">
                    <span>Treemix</span>
                    <small>Profesional</small>
                </span>
            </a>

            <ul class="nav__menu" data-nav-menu>
                <li><a href="{{ route('home') }}" class="nav__link {{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a></li>
                <li><a href="{{ route('products.index') }}" class="nav__link {{ request()->routeIs('products.*') ? 'active' : '' }}">Productos</a></li>
                <li><a href="{{ route('tecnologia') }}" class="nav__link {{ request()->routeIs('tecnologia') ? 'active' : '' }}">Tecnología</a></li>
                <li><a href="{{ route('resultados') }}" class="nav__link {{ request()->routeIs('resultados') ? 'active' : '' }}">Resultados</a></li>
                <li><a href="{{ route('faq') }}" class="nav__link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a></li>
                <li><a href="{{ route('calculator.index') }}" class="nav__link {{ request()->routeIs('calculator.*') ? 'active' : '' }}">Calculadora</a></li>
                <li><a href="{{ route('contact.show') }}" class="nav__link {{ request()->routeIs('contact.*') ? 'active' : '' }}">Contacto</a></li>
            </ul>

            <a href="https://www.tiendatreemix.com.ar/" target="_blank" rel="noopener" class="nav__cta nav__cta--desktop">
                Tienda
            </a>

            <a href="https://www.tiendatreemix.com.ar/" target="_blank" rel="noopener" class="nav__cta nav__cta--mobile" style="display:none;">
                Ingresar a Tienda
            </a>

            <button type="button" class="nav__toggle" data-nav-toggle aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>