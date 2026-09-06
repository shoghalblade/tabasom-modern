// Tabasom Clinic — interactions (vanilla, no dependencies)
// ponytail: simple enough; upgrade to Alpine/htmx only if form handling gets complex
(function () {
  'use strict';

  // ---- HAMBURGER — bulletproof onclick (addEventListener + stopPropagation has bugs on mobile/synthetic) ----
  var toggle = document.querySelector('.nav-toggle');
  var menu = document.querySelector('.nav-items');
  if (toggle && menu) {
    var closeMenu = function () {
      menu.classList.remove('open');
      toggle.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('menu-open');
    };
    var openMenu = function () {
      menu.classList.add('open');
      toggle.classList.add('open');
      toggle.setAttribute('aria-expanded', 'true');
      document.body.classList.add('menu-open');
    };

    // Use onclick = one handler, no addEventListener, no propagation issues
    toggle.onclick = function (e) {
      if (e) e.preventDefault();
      var isOpen = menu.classList.contains('open');
      if (isOpen) closeMenu(); else openMenu();
    };

    // Close on link click
    var links = menu.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) {
      links[i].onclick = function () { closeMenu(); };
    }

    // Close on outside tap (using touchstart for immediate mobile response)
    document.addEventListener('touchstart', function (e) {
      if (menu.classList.contains('open') && !menu.contains(e.target) && !toggle.contains(e.target)) {
        closeMenu();
      }
    }, { passive: true });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && menu.classList.contains('open')) closeMenu();
    });

    // Reset on resize to desktop
    var resizeTimer;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        if (window.innerWidth > 900) closeMenu();
      }, 100);
    });
  }

  // ---- Sticky nav ----
  var nav = document.querySelector('.site-nav');
  if (nav) {
    var onScroll = function () { nav.classList.toggle('scrolled', window.scrollY > 40); };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- Scroll reveal ----
  var revs = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revs.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in-view'); io.unobserve(e.target); }
      });
    }, { threshold: 0.1 });
    revs.forEach(function (el) { io.observe(el); });
  } else {
    for (var i = 0; i < revs.length; i++) revs[i].classList.add('in-view');
  }

  // ---- Stats counter ----
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
    for (var j = 0; j < nums.length; j++) io2.observe(nums[j]);
  }

  // ---- Blog arrows ----
  var cards = document.getElementById('blog-cards');
  var prev = document.getElementById('blog-prev');
  var next = document.getElementById('blog-next');
  if (cards && prev && next) {
    var stepSize = function () { return Math.min(cards.clientWidth, 402); };
    prev.onclick = function () { cards.scrollBy({ left: stepSize(), behavior: 'smooth' }); };
    next.onclick = function () { cards.scrollBy({ left: -stepSize(), behavior: 'smooth' }); };
    cards.style.overflowX = 'auto';
  }
})();
