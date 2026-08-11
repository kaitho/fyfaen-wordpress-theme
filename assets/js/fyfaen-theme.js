(function () {
  const toggle = document.querySelector('.fyfaen-menu-toggle');
  const mobileNav = document.getElementById('fyfaen-mobile-nav');
  if (!toggle || !mobileNav) return;

  toggle.addEventListener('click', function () {
    const open = document.body.classList.toggle('fyfaen-menu-open');
    toggle.setAttribute('aria-expanded', String(open));
  });

  mobileNav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      document.body.classList.remove('fyfaen-menu-open');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });
})();
