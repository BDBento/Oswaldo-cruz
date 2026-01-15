document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.convenios-image-slider.is-marquee');
    if (!slider) return;

    // pega as imagens atuais
    const imgs = Array.from(slider.querySelectorAll('img'));
    if (!imgs.length) return;

    // cria a track
    const track = document.createElement('div');
    track.className = 'marquee-track';

    // move as imagens para dentro da track
    imgs.forEach(img => track.appendChild(img));

    // duplica para dar loop perfeito (50% no keyframes)
    imgs.forEach(img => track.appendChild(img.cloneNode(true)));

    slider.appendChild(track);

    // velocidade automática baseada em quantidade (opcional)
    // quanto mais logos, mais tempo para não ficar rápido demais
    const count = imgs.length;
    const duration = Math.min(80, Math.max(40, count * 4)); // 18s..40s
    slider.style.setProperty('--marquee-duration', `${duration}s`);
});




document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.menu-principal .menu-nav');
    const btn = document.querySelector('.menu-toggle');
    const overlay = document.querySelector('.menu-overlay');

    if (!nav || !btn || !overlay) return;

    const openMenu = () => {
        nav.classList.add('is-open');
        overlay.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
    };

    const closeMenu = () => {
        nav.classList.remove('is-open');
        overlay.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
    };

    btn.addEventListener('click', () => {
        nav.classList.contains('is-open') ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
    });
});






document.addEventListener('DOMContentLoaded', () => {
    /* ========= 1) Reveal on scroll ========= */
    const selectorsToReveal = [
        'section',
        '.contatos-main-card',
        '.conv-card',
        '.exames-main-lista li',
        '.legal-card',
        '.contatos-form-card',
        '.cert-item'
    ];

    const elements = [];
    selectorsToReveal.forEach(sel => {
        document.querySelectorAll(sel).forEach(el => elements.push(el));
    });

    // marca elementos como "reveal" (sem precisar editar HTML)
    elements.forEach(el => el.classList.add('reveal'));

    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -10% 0px' });

    elements.forEach(el => io.observe(el));

    /* ========= 2) Smooth scroll para âncoras ========= */
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', (e) => {
            const id = a.getAttribute('href');
            if (!id || id === '#') return;

            const target = document.querySelector(id);
            if (!target) return;

            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    /* ========= 3) Feedback visual no formulário ========= */
    const form = document.querySelector('.contatos-form');
    const btn = form ? form.querySelector('button[type="submit"]') : null;

    if (form && btn) {
        form.addEventListener('submit', () => {
            btn.disabled = true;
            btn.dataset.originalText = btn.textContent;
            btn.textContent = 'Enviando...';
            btn.style.opacity = '0.9';
        });

        // se voltar com ?enviado=sucesso, reabilita (caso navegue para mesma página)
        if (new URLSearchParams(window.location.search).get('enviado') === 'sucesso') {
            btn.disabled = false;
            if (btn.dataset.originalText) btn.textContent = btn.dataset.originalText;
        }
    }
});
