// Navigation: scroll styling + smooth anchor links + mobile menu
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

// About section: animated stat counters
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

// Gallery lightbox
(function() {
    var lightbox = document.getElementById('gallery-lightbox');
    if (!lightbox) return;
    var lbImg = lightbox.querySelector('.lightbox-img');
    var lbCaption = lightbox.querySelector('.lightbox-caption');
    var cards = document.querySelectorAll('.gallery-card');
    var currentIndex = 0;

    function open(index) {
        currentIndex = index;
        var card = cards[index];
        var img = card.querySelector('.gallery-card-img');
        var title = card.querySelector('.gallery-card-title');
        lbImg.src = img.src;
        lbImg.alt = img.alt;
        lbCaption.textContent = title ? title.textContent : '';
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function close() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    function navigate(dir) {
        currentIndex = (currentIndex + dir + cards.length) % cards.length;
        var card = cards[currentIndex];
        var img = card.querySelector('.gallery-card-img');
        var title = card.querySelector('.gallery-card-title');
        lbImg.src = img.src;
        lbImg.alt = img.alt;
        lbCaption.textContent = title ? title.textContent : '';
    }

    cards.forEach(function(card, i) {
        card.addEventListener('click', function() { open(i); });
    });

    lightbox.querySelector('.lightbox-close').addEventListener('click', close);
    lightbox.querySelector('.lightbox-backdrop').addEventListener('click', close);
    lightbox.querySelector('.lightbox-prev').addEventListener('click', function(e) { e.stopPropagation(); navigate(-1); });
    lightbox.querySelector('.lightbox-next').addEventListener('click', function(e) { e.stopPropagation(); navigate(1); });

    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') navigate(-1);
        if (e.key === 'ArrowRight') navigate(1);
    });
})();

// Google Analytics: event tracking
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
    document.querySelectorAll('.gallery-card').forEach(function(el, i) {
        el.addEventListener('click', function() {
            var title = this.querySelector('.gallery-card-title');
            trackEvent('gallery_item_click', { event_label: title ? title.textContent.trim() : 'item_' + (i + 1), item_index: i + 1 });
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
