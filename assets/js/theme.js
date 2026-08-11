(function () {
  'use strict';

  const body = document.body;
  const toggle = document.querySelector('.fyfaen-menu-toggle');
  const mobileNav = document.getElementById('fyfaen-mobile-nav');

  if (!toggle || !mobileNav) return;

  const closeMenu = () => {
    body.classList.remove('menu-open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Åpne meny');
  };

  toggle.addEventListener('click', () => {
    const open = body.classList.toggle('menu-open');
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Lukk meny' : 'Åpne meny');
  });

  mobileNav.addEventListener('click', (event) => {
    if (event.target.closest('a')) closeMenu();
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeMenu();
  });
})();
