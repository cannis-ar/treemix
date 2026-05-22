import './bootstrap';

/* ============================================
   TREEMIX PRO — interacciones premium
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {
    initNav();
    initReveal();
    initFaq();
    initProductCardGlow();
    initMarqueeDuplicate();
});

/* --- Navbar scroll state + mobile toggle --- */
function initNav() {
    const nav = document.querySelector('[data-nav]');
    if (!nav) return;

    const toggle  = nav.querySelector('[data-nav-toggle]');
    const menu    = nav.querySelector('[data-nav-menu]');
    const brand   = nav.querySelector('.nav__brand');

    const overlay = document.createElement('div');
    overlay.classList.add('nav__overlay');
    document.body.appendChild(overlay);

    const onScroll = () => {
        nav.classList.toggle('scrolled', window.scrollY > 30);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    if (!toggle || !menu) return;

    const openMenu = () => {
        toggle.classList.add('open');
        menu.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        toggle.setAttribute('aria-label', 'Cerrar menú');
        if (window.innerWidth <= 960 && brand) {
            brand.style.opacity = '0';
            brand.style.pointerEvents = 'none';
        }
    };

    const closeMenu = () => {
        toggle.classList.remove('open');
        menu.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = '';
        toggle.setAttribute('aria-label', 'Abrir menú');
        if (brand) {
            brand.style.opacity = '';
            brand.style.pointerEvents = '';
        }
    };

    toggle.addEventListener('click', () => {
        menu.classList.contains('open') ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });
}

/* --- Reveal on scroll con IntersectionObserver --- */
function initReveal() {
    const els = document.querySelectorAll('.reveal');
    if (!els.length || !('IntersectionObserver' in window)) {
        els.forEach(el => el.classList.add('in-view'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -60px 0px',
    });

    els.forEach(el => observer.observe(el));
}

/* --- FAQ acordeón --- */
function initFaq() {
    const items = document.querySelectorAll('[data-faq-item]');
    items.forEach(item => {
        const q = item.querySelector('[data-faq-q]');
        if (!q) return;
        q.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            // Cerrar otros (acordeón clásico)
            items.forEach(other => other.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });
}

/* --- Glow del mouse en product cards --- */
function initProductCardGlow() {
    const cards = document.querySelectorAll('[data-product-card]');
    cards.forEach(card => {
        const glow = card.querySelector('.product-card__glow');
        if (!glow) return;

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            glow.style.left = `${x - 100}px`;
            glow.style.top = `${y - 100}px`;
        });
    });
}

/* --- Duplicar contenido del marquee para loop infinito --- */
function initMarqueeDuplicate() {
    const tracks = document.querySelectorAll('[data-marquee-track]');
    tracks.forEach(track => {
        const html = track.innerHTML;
        track.innerHTML = html + html;
    });
}
