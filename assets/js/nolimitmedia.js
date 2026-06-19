/* No Limit Media — nolimitmedia.js */

(function () {
    'use strict';

    // ── Sticky header ──────────────────────────────────────────
    var header = document.getElementById('nlmHeader');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 40);
        }, { passive: true });
    }

    // ── Mobile nav toggle ──────────────────────────────────────
    var hamburger = document.getElementById('nlmHamburger');
    var mobileNav = document.getElementById('nlmMobileNav');
    var overlay   = document.getElementById('nlmNavOverlay');

    function openNav() {
        hamburger.classList.add('open');
        mobileNav.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeNav() {
        hamburger.classList.remove('open');
        mobileNav.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (hamburger) hamburger.addEventListener('click', function () {
        mobileNav.classList.contains('open') ? closeNav() : openNav();
    });
    if (overlay) overlay.addEventListener('click', closeNav);

    document.querySelectorAll('.nlm-mobile-link, .nlm-mobile-cta').forEach(function (link) {
        link.addEventListener('click', closeNav);
    });

    // ── Active nav link ────────────────────────────────────────
    var path = window.location.pathname;
    document.querySelectorAll('.nlm-nav-link').forEach(function (link) {
        var href = link.getAttribute('href');
        if (href && (path === href || (href !== '/' && path.startsWith(href)))) {
            link.classList.add('active');
        }
    });

    // ── Back to top ────────────────────────────────────────────
    var backToTop = document.getElementById('nlm-back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function () {
            backToTop.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

}());
