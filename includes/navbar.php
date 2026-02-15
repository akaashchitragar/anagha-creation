<nav id="main-nav" class="fixed-top glass-panel-dark border-bottom border-white-10 main-nav">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between main-nav-inner">
            <div class="d-flex align-items-center">
                <div>
                    <span class="font-serif fw-bold text-white mb-0 lh-1 main-nav-brand" style="font-size: 1.25rem;">Anagha Creation</span>
                </div>
            </div>
            <div class="d-none d-md-flex align-items-center gap-4">
                <a class="nav-link-custom" href="#home">Home</a>
                <a class="nav-link-custom" href="#about">About</a>
                <a class="nav-link-custom" href="#services">Services</a>
                <a class="nav-link-custom" href="#gallery">Gallery</a>
                <a class="btn btn-outline-gold rounded-pill px-4 py-2 fw-bold" href="tel:<?php echo PHONE_NUMBER; ?>">Call Now</a>
            </div>
            <button class="d-md-none btn btn-link text-gold p-0 nav-mobile-toggle" type="button" aria-label="Menu" aria-expanded="false" aria-controls="nav-mobile-menu" data-bs-toggle="collapse" data-bs-target="#nav-mobile-menu">
                <i class="bi bi-list fs-1 nav-mobile-icon"></i>
            </button>
        </div>
        <div class="collapse d-md-none" id="nav-mobile-menu">
            <div class="nav-mobile-dropdown py-3">
                <a class="nav-mobile-link d-block py-2 text-white text-decoration-none" href="#home">Home</a>
                <a class="nav-mobile-link d-block py-2 text-white text-decoration-none" href="#about">About</a>
                <a class="nav-mobile-link d-block py-2 text-white text-decoration-none" href="#services">Services</a>
                <a class="nav-mobile-link d-block py-2 text-white text-decoration-none" href="#gallery">Gallery</a>
                <a class="btn btn-outline-gold rounded-pill mt-2 w-100 text-center" href="tel:<?php echo PHONE_NUMBER; ?>">Call Now</a>
            </div>
        </div>
    </div>
</nav>
