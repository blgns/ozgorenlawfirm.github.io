class OzgorenFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <footer>
            <p>© 2026 Özgören Law Firm. All rights reserved.</p>
            <p>
                <a href="/en/arbitration-lawyer-izmir.html">Arbitration Lawyer Izmir</a>
                &nbsp;·&nbsp; İzmir, Türkiye
            </p>
        </footer>
        `;
        
        this.initLogic();
    }

    initLogic() {
        // --- 1. SMART LANGUAGE REDIRECT ---
        const path = window.location.pathname;
        const isRoot = path === '/' || path === '/index.html' || path === '';
        if (isRoot && !sessionStorage.getItem('languageRedirected')) {
            const userLang = (navigator.language || '').slice(0, 2).toLowerCase();
            const languageMap = {
                'tr': '/tr/index-tr.html',
                'ar': '/ar/index-ar.html',
                'de': '/de/index-de.html',
                'es': '/es/index-es.html',
                'fr': '/fr/index-fr.html',
                'it': '/it/index-it.html',
                'ru': '/ru/index-ru.html',
                'zh': '/zh/index-zh.html',
                'zh-hk': '/zh-hk/index-zh-hk.html'
            };
            if (languageMap[userLang]) {
                sessionStorage.setItem('languageRedirected', 'true');
                window.location.href = languageMap[userLang];
            }
        }

        // --- 2. SCROLL REVEAL ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // --- 3. NAV DRAWER (Hamburger & Overlay) ---
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        const overlay = document.getElementById('navOverlay');

        if(hamburger && navLinks) {
            const openMenu = () => {
                hamburger.classList.add('open');
                navLinks.classList.add('open');
                if(overlay) overlay.classList.add('open');
                document.body.style.overflow = 'hidden';
            };
            const closeMenu = () => {
                hamburger.classList.remove('open');
                navLinks.classList.remove('open');
                if(overlay) overlay.classList.remove('open');
                document.body.style.overflow = '';
            };

            hamburger.addEventListener('click', () => navLinks.classList.contains('open') ? closeMenu() : openMenu());
            if(overlay) overlay.addEventListener('click', closeMenu);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && navLinks.classList.contains('open')) closeMenu();
            });
        }

        // --- 4. LANGUAGE DROPDOWN ---
        const langBtn = document.getElementById('langBtn');
        const langMenu = document.getElementById('langMenu');
        if(langBtn && langMenu) {
            langBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                langMenu.classList.toggle('open');
            });
            document.addEventListener('click', () => langMenu.classList.remove('open'));
        }

        // --- 5. TALLY WIDGET ---
        if (!document.querySelector('script[src*="tally.so"]')) {
            const tallyScript = document.createElement('script');
            tallyScript.src = "https://tally.so/widgets/embed.js";
            tallyScript.async = true;
            document.body.appendChild(tallyScript);
        }
    }
}

customElements.define('ozgoren-footer', OzgorenFooter);
