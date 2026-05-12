/* ============================================================
   DURABOND — main.js
   Mobile nav · Stats counter · Scroll reveal · Contact tabs
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Mobile Nav ──────────────────────────────────────── */
  const hamburger = document.getElementById('hamburger');
  const nav       = document.getElementById('nav');

  if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      nav.classList.toggle('open');
    });
    nav.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        nav.classList.remove('open');
      });
    });
  }

  /* ── Active Nav Link ─────────────────────────────────── */
  const page = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link').forEach(link => {
    if (link.getAttribute('href') === page) link.classList.add('active');
  });

  /* ── Stats Counter ───────────────────────────────────── */
  function animateCount(el) {
    const target   = parseInt(el.dataset.target, 10);
    const from     = parseInt(el.dataset.from   || '0', 10);
    const suffix   = el.dataset.suffix || '';
    const duration = parseInt(el.dataset.dur    || '2000', 10);
    const start    = performance.now();

    function tick(now) {
      const pct    = Math.min((now - start) / duration, 1);
      const eased  = 1 - Math.pow(1 - pct, 3);        // ease-out cubic
      const value  = Math.round(from + eased * (target - from));
      const fmt    = el.dataset.noformat ? String(value) : value.toLocaleString();
      el.textContent = fmt + suffix;
      if (pct < 1) requestAnimationFrame(tick);
      else {
        const finalFmt = el.dataset.noformat ? String(target) : target.toLocaleString();
        el.textContent = finalFmt + suffix;
      }
    }
    requestAnimationFrame(tick);
  }

  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCount(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });

  document.querySelectorAll('.stat-count').forEach(el => counterObserver.observe(el));

  /* ── Scroll Reveal ───────────────────────────────────── */
  const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

  /* Auto-add reveal to common cards ---------------------- */
  const autoReveal = [
    '.feature-card', '.svc-card', '.clean-card',
    '.team-card', '.spec-item', '.loc-card',
    '.sector-row', '.mv-card'
  ];
  autoReveal.forEach(selector => {
    document.querySelectorAll(selector).forEach((el, i) => {
      if (!el.classList.contains('reveal')) {
        el.classList.add('reveal', `reveal-delay-${(i % 4) + 1}`);
        revealObserver.observe(el);
      }
    });
  });

  /* ── Contact Form Tabs ───────────────────────────────── */
  const tabs   = document.querySelectorAll('.form-tab');
  const panels = document.querySelectorAll('.form-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      const target = document.getElementById(tab.dataset.target);
      if (target) target.classList.add('active');
    });
  });

  /* ── Smooth Scroll for anchor links ─────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href').slice(1);
      const el = document.getElementById(id);
      if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  /* ── Contact form "submit" (prototype only) ──────────── */
  document.querySelectorAll('.contact-form').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const btn = form.querySelector('button[type="submit"]');
      if (!btn) return;
      btn.textContent = 'Message Sent!';
      btn.style.background = '#2e7d32';
      btn.disabled = true;
      setTimeout(() => {
        btn.textContent = 'Request Response';
        btn.style.background = '';
        btn.disabled = false;
        form.reset();
      }, 3500);
    });
  });

});
