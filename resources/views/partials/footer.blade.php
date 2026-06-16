<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div>
                <img src="{{ asset('treemix.webp') }}" alt="" class="footer__brand-logo">
                <p class="footer__tagline">Biotecnología <em style="font-family: var(--font-display); font-style: italic; font-weight:300;">premium</em> para cultivos de alto rendimiento.</p>
                <address class="footer__address">
                    Elaborado en Buenos Aires, Argentina.<br>
                    info@treemix.pro
                </address>
            </div>

            <div>
                <p class="footer__col-title">Producto</p>
                <ul class="footer__list">
                    <li><a href="{{ route('products.index') }}">Catálogo</a></li>
                    <li><a href="{{ route('tecnologia') }}">Tecnología</a></li>
                    <li><a href="{{ route('resultados') }}">Resultados</a></li>
                    <li><a href="https://www.tiendatreemix.com.ar/" target="_blank" rel="noopener">Tienda online</a></li>
                </ul>
            </div>

            <div>
                <p class="footer__col-title">Compañía</p>
                <ul class="footer__list">
                    <li><a href="{{ route('faq') }}">Preguntas frecuentes</a></li>
                    <li><a href="{{ route('contact.show') }}">Contacto</a></li>
                    <li><a href="https://treemix.pro" target="_blank" rel="noopener">Web principal</a></li>
                </ul>
            </div>

            <div>
                <p class="footer__col-title">Seguinos</p>
                <ul class="footer__list">
                    <li><a href="https://www.instagram.com/treemixpro" target="_blank" rel="noopener">Instagram</a></li>
                </ul>
            </div>
        </div>

        <div class="footer__bottom">
            <div style="display: flex; flex-direction: column">
                <span>© {{ date('Y') }} Treemix Profesional. Todos los derechos reservados.</span>
                <span>Developed by <a href="https://cannis.org" target="_blank">cannis.org</a></span>
            </div>
            <div class="footer__socials">
                <a href="https://www.instagram.com/treemixpro" target="_blank" rel="noopener" class="footer__social" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
                </a>
                <a href="https://www.facebook.com/treemixpro" target="_blank" rel="noopener" class="footer__social" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h3l1-4h-4V7.5c0-1.1.4-2 2-2h2V2.2C16.4 2 15 2 13.7 2 11 2 9 3.7 9 6.7V10H6v4h3v8h4z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
