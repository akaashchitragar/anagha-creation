<footer class="footer-simple">
    <div class="container text-center py-4">
        <div class="footer-brand d-inline-flex align-items-center gap-2 mb-3">
            <img src="https://res.cloudinary.com/dsn3mtgjf/image/upload/v1770278050/anagha-logo-core_ealfj1.png" alt="Anagha Creation" class="footer-logo"/>
            <span class="font-serif fw-bold text-gold footer-name">Anagha Creation</span>
        </div>
        <p class="footer-copy small mb-2">&copy; <?php echo date('Y'); ?> Anagha Creation</p>
        <p class="footer-credit small mb-0">
            Designed &amp; Developed by <a class="footer-credit-link" href="http://webart4u.com/" target="_blank" rel="noopener noreferrer">WebArt4U</a>
        </p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function() {
    var nav = document.getElementById('main-nav');
    if (nav) {
        function onScroll() {
            nav.classList.toggle('nav-scrolled', window.scrollY > 30);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }
    document.querySelectorAll('#main-nav a[href^="#"]').forEach(function(link) {
        link.addEventListener('click', function(e) {
            var id = this.getAttribute('href');
            if (id === '#') return;
            var el = document.querySelector(id);
            if (el) {
                e.preventDefault();
                el.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            closeMobileMenu();
        });
    });
    document.querySelectorAll('#nav-mobile-menu .btn, #nav-mobile-menu a[href^="tel"]').forEach(function(btn) {
        btn.addEventListener('click', closeMobileMenu);
    });
    function closeMobileMenu() {
        var mobileMenu = document.getElementById('nav-mobile-menu');
        if (mobileMenu && mobileMenu.classList.contains('show')) {
            var bsCollapse = bootstrap.Collapse.getInstance(mobileMenu) || new bootstrap.Collapse(mobileMenu, { toggle: false });
            bsCollapse.hide();
        }
    }
})();
(function() {
    var aboutSection = document.getElementById('about');
    var statCounts = document.querySelectorAll('.stat-count');
    if (!aboutSection || !statCounts.length) return;

    function animateCount(el) {
        var target = parseInt(el.getAttribute('data-target'), 10);
        var suffix = el.getAttribute('data-suffix') || '';
        var duration = 1800;
        var start = performance.now();
        var startVal = 0;

        function step(now) {
            var elapsed = now - start;
            var progress = Math.min(elapsed / duration, 1);
            progress = 1 - Math.pow(1 - progress, 2);
            var current = Math.round(startVal + (target - startVal) * progress);
            el.textContent = current + suffix;
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target + suffix;
        }
        requestAnimationFrame(step);
    }

    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (!entry.isIntersecting) return;
            var section = entry.target;
            section.querySelectorAll('.stat-count').forEach(function(el) {
                if (el.hasAttribute('data-count-done')) return;
                el.setAttribute('data-count-done', '1');
                animateCount(el);
            });
        });
    }, { threshold: 0.3, rootMargin: '0px' });

    observer.observe(aboutSection);
})();
(function() {
    if (typeof gtag !== 'function') return;

    function trackEvent(eventName, params) {
        params = params || {};
        gtag('event', eventName, Object.assign({ event_category: 'engagement' }, params));
    }

    document.querySelectorAll('#main-nav a[href^="tel:"]').forEach(function(el) {
        el.addEventListener('click', function() { trackEvent('call_now_click', { event_label: 'navbar', link_url: el.getAttribute('href') }); });
    });
    document.querySelectorAll('#main-nav a[href^="#"]').forEach(function(el) {
        el.addEventListener('click', function() {
            var h = el.getAttribute('href');
            if (h && h !== '#') trackEvent('nav_section_click', { event_label: h.replace('#',''), link_url: h });
        });
    });
    document.querySelectorAll('.btn-hero-outline').forEach(function(el) {
        el.addEventListener('click', function() { trackEvent('explore_gallery_click', { event_label: 'hero_cta', link_url: '#gallery' }); });
    });
    document.querySelectorAll('.btn-hero-solid').forEach(function(el) {
        el.addEventListener('click', function() { trackEvent('whatsapp_click', { event_label: 'hero', link_url: el.getAttribute('href') || '#' }); });
    });
    document.querySelectorAll('a[href*="wa.me"]').forEach(function(el) {
        if (el.classList.contains('btn-hero-solid')) return;
        el.addEventListener('click', function() { trackEvent('whatsapp_click', { event_label: 'contact_section', link_url: el.getAttribute('href') }); });
    });
    document.querySelectorAll('.gallery-item').forEach(function(el, i) {
        el.addEventListener('click', function() {
            var cap = this.querySelector('.gallery-caption');
            trackEvent('gallery_item_click', { event_label: cap ? cap.textContent.trim() : 'item_' + (i + 1), item_index: i + 1 });
        });
    });
    document.querySelectorAll('.footer-credit-link').forEach(function(el) {
        el.addEventListener('click', function() { trackEvent('outbound_click', { event_label: 'WebArt4U', link_url: el.getAttribute('href') }); });
    });

    var scrollMilestones = [25, 50, 75, 100];
    var scrollDone = {};
    window.addEventListener('scroll', function() {
        var h = document.documentElement.scrollHeight - window.innerHeight;
        if (h <= 0) return;
        var pct = Math.round((window.scrollY / h) * 100);
        scrollMilestones.forEach(function(m) {
            if (pct >= m && !scrollDone[m]) {
                scrollDone[m] = true;
                trackEvent('scroll_depth', { event_label: m + '_percent', value: m });
            }
        });
    }, { passive: true });
})();
</script>
</body>
</html>
