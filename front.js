// Tabasom Clinic — interactions v6
(function () {
  'use strict';

  // ---- HAMBURGER ----
  var toggle = document.querySelector('.nav-toggle');
  var menu = document.querySelector('.nav-items');
  if (toggle && menu) {
    var close = function () {
      menu.classList.remove('open'); toggle.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false'); document.body.classList.remove('menu-open');
    };
    var openMenu = function () {
      menu.classList.add('open'); toggle.classList.add('open');
      toggle.setAttribute('aria-expanded', 'true'); document.body.classList.add('menu-open');
    };
    toggle.onclick = function (e) { if (e) e.preventDefault(); menu.classList.contains('open') ? close() : openMenu(); };
    var links = menu.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) links[i].onclick = close;
    document.addEventListener('touchstart', function (e) {
      if (menu.classList.contains('open') && !menu.contains(e.target) && !toggle.contains(e.target)) close();
    }, { passive: true });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });
    var rt; window.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(function () { if (window.innerWidth > 900) close(); }, 100); });
  }

  // ---- Sticky nav ----
  var nav = document.querySelector('.site-nav');
  if (nav) {
    var onScroll = function () { nav.classList.toggle('scrolled', window.scrollY > 40); };
    window.addEventListener('scroll', onScroll, { passive: true }); onScroll();
  }

  // ---- Scroll reveal ----
  var revs = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revs.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('in-view'); io.unobserve(e.target); } });
    }, { threshold: 0.1 });
    revs.forEach(function (el) { io.observe(el); });
  } else { for (var j = 0; j < revs.length; j++) revs[j].classList.add('in-view'); }

  // ---- Stats counter ----
  var nums = document.querySelectorAll('.num[data-target]');
  var animateNum = function (el) {
    var target = parseFloat(el.getAttribute('data-target'));
    var dec = parseInt(el.getAttribute('data-decimals') || '0', 10);
    var suf = el.getAttribute('data-suffix') || '';
    var dur = 1400, t0 = null;
    var step = function (ts) {
      if (!t0) t0 = ts; var p = Math.min((ts - t0) / dur, 1);
      el.textContent = (target * (1 - Math.pow(1 - p, 3))).toFixed(dec) + suf;
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };
  if ('IntersectionObserver' in window && nums.length) {
    var io2 = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { animateNum(e.target); io2.unobserve(e.target); } });
    }, { threshold: 0.4 });
    for (var k = 0; k < nums.length; k++) io2.observe(nums[k]);
  }

  // ---- Blog arrows ----
  var cards = document.getElementById('blog-cards');
  var prev = document.getElementById('blog-prev');
  var next = document.getElementById('blog-next');
  if (cards && prev && next) {
    prev.onclick = function () { cards.scrollBy({ left: 360, behavior: 'smooth' }); };
    next.onclick = function () { cards.scrollBy({ left: -360, behavior: 'smooth' }); };
  }

  // ---- Seamless testimonial marquee — pixel-precise JS ----
  var track = document.getElementById('testi-track');
  if (track) {
    var SET = 5;
    var GAP = 16;
    var SPEED = 50; // px/s

    // measure one set width (items + gaps)
    var oneSetW = 0;
    for (var m = 0; m < SET; m++) {
      oneSetW += track.children[m].offsetWidth;
      if (m < SET - 1) oneSetW += GAP;
    }

    // duplicate content 2x more (total 3 sets) for buffer
    track.innerHTML = track.innerHTML + track.innerHTML;

    var pos = 0;
    var paused = false;
    var lastTime = null;
    var wrap = track.parentElement;

    var animate = function (ts) {
      if (!lastTime) lastTime = ts;
      var dt = (ts - lastTime) / 1000;
      lastTime = ts;
      if (!paused) {
        pos -= SPEED * dt;
        // when scrolled past one full set, snap back (invisible because content repeats)
        if (pos <= -oneSetW) pos += oneSetW;
      }
      track.style.transform = 'translateX(' + pos + 'px)';
      requestAnimationFrame(animate);
    };
    requestAnimationFrame(animate);

    if (wrap) {
      wrap.addEventListener('mouseenter', function () { paused = true; });
      wrap.addEventListener('mouseleave', function () { paused = false; });
      wrap.addEventListener('touchstart', function () { paused = true; }, { passive: true });
      wrap.addEventListener('touchend', function () { setTimeout(function () { paused = false; }, 500); });
    }
  }
})();
