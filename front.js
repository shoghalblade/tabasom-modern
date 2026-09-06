// Tabasom Clinic — front interactions (vanilla, IIFE)
(function () {
  'use strict';

  // Sticky nav
  var nav = document.querySelector('.site-nav');
  if (nav) {
    var onScroll = function () {
      nav.classList.toggle('scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- همبرگری موبایل (فیکس: بستن با کلیک بیرون/لینک + aria) ----
  var toggle = document.querySelector('.nav-toggle');
  var menu = document.querySelector('.nav-items');
  if (toggle && menu) {
    var closeMenu = function () {
      menu.classList.remove('open');
      toggle.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    };
    toggle.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = menu.classList.toggle('open');
      toggle.classList.toggle('open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    // کلیک روی لینک‌ها منو رو می‌بنده
    menu.addEventListener('click', function (e) {
      if (e.target.closest('a')) closeMenu();
    });
    // کلیک بیرون منو
    document.addEventListener('click', function (e) {
      if (menu.classList.contains('open') && !menu.contains(e.target) && !toggle.contains(e.target)) closeMenu();
    });
    // ESC
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeMenu();
    });
    // تغییر سایز به دسکتاپ = ریست
    window.addEventListener('resize', function () {
      if (window.innerWidth > 900) closeMenu();
    });
  }

  // Scroll reveal
  var revs = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revs.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in-view'); io.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    revs.forEach(function (el) { io.observe(el); });
  } else {
    revs.forEach(function (el) { el.classList.add('in-view'); });
  }

  // Stats counter
  var nums = document.querySelectorAll('.num[data-target]');
  var animateNum = function (el) {
    var target = parseFloat(el.getAttribute('data-target'));
    var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var dur = 1600, t0 = null;
    var step = function (ts) {
      if (!t0) t0 = ts;
      var p = Math.min((ts - t0) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = (target * eased).toFixed(decimals) + suffix;
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };
  if ('IntersectionObserver' in window && nums.length) {
    var io2 = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { animateNum(e.target); io2.unobserve(e.target); }
      });
    }, { threshold: 0.4 });
    nums.forEach(function (el) { io2.observe(el); });
  }

  // Blog arrows
  var cards = document.getElementById('blog-cards');
  var prev = document.getElementById('blog-prev');
  var next = document.getElementById('blog-next');
  if (cards && prev && next) {
    var stepSize = function () { return Math.min(cards.clientWidth, 402); };
    prev.addEventListener('click', function () { cards.scrollBy({ left: stepSize(), behavior: 'smooth' }); });
    next.addEventListener('click', function () { cards.scrollBy({ left: -stepSize(), behavior: 'smooth' }); });
    cards.style.overflowX = 'auto';
  }
})();
