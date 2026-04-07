<!-- ══ FOOTER ═════════════════════════════════════════════════════════════ -->
<footer>
  <p>© 2026 Özgören Law Firm. All rights reserved.</p>
  <p>
    <a href="/en/arbitration-lawyer-izmir.php">Arbitration Lawyer Izmir</a>
    &nbsp;·&nbsp; İzmir, Türkiye
  </p>
</footer>

<!-- ══ SCRIPTS ════════════════════════════════════════════════════════════ -->
<script>
  // Smart language redirect
  (function() {
    const path = window.location.pathname;
    const isRoot = path === '/' || path === '/index.php' || path === '';
    if (isRoot && !sessionStorage.getItem('languageRedirected')) {
      const userLang = (navigator.language || navigator.userLanguage || '').slice(0, 2).toLowerCase();
      const languageMap = {
        'tr': '/tr/index-tr.php',
        'ar': '/ar/index-ar.php',
        'de': '/de/index-de.php',
        'es': '/es/index-es.php',
        'fr': '/fr/index-fr.php',
        'it': '/it/index-it.php',
        'ru': '/ru/index-ru.php',
        'zh': '/zh/index-zh.php',
        'zh-hk': '/zh-hk/index-zh-hk.php'
      };
      if (languageMap[userLang]) {
        sessionStorage.setItem('languageRedirected', 'true');
        window.location.href = languageMap[userLang];
      }
    }
  })();

  // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Nav drawer
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');
  const overlay   = document.getElementById('navOverlay');

  function openMenu() {
    hamburger.classList.add('open');
    navLinks.classList.add('open');
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.setAttribute('aria-label', 'Close navigation menu');
  }
  function closeMenu() {
    hamburger.classList.remove('open');
    navLinks.classList.remove('open');
    overlay.classList.remove('open');
    document.body.style.overflow = '';
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.setAttribute('aria-label', 'Open navigation menu');
  }
  if(hamburger) {
    hamburger.addEventListener('click', () => navLinks.classList.contains('open') ? closeMenu() : openMenu());
  }
  if(overlay) {
    overlay.addEventListener('click', closeMenu);
  }
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && navLinks && navLinks.classList.contains('open')) closeMenu();
  });

  // Language dropdown
  const langBtn  = document.getElementById('langBtn');
  const langMenu = document.getElementById('langMenu');

  if(langBtn) {
    langBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = langMenu.classList.toggle('open');
      langBtn.classList.toggle('open', isOpen);
      langBtn.setAttribute('aria-expanded', String(isOpen));
    });
  }
  document.addEventListener('click', () => {
    if(langMenu) langMenu.classList.remove('open');
    if(langBtn) {
      langBtn.classList.remove('open');
      langBtn.setAttribute('aria-expanded', 'false');
    }
  });
  if(langMenu) {
    langMenu.addEventListener('click', (e) => e.stopPropagation());
  }
</script>
<script async src="https://tally.so/widgets/embed.js"></script>
