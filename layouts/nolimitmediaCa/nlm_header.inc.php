<header class="nlm-header" id="nlmHeader">
    <div class="nlm-header-inner">

        <!-- Logo -->
        <a href="<?= $this->config->getFileRootPath() ?>" class="nlm-logo">
            <img src="<?= $this->config->getFileRootPath() ?>assets/images/logo2.png" alt="Nolimit Media" height="38">
        </a>

        <!-- Desktop nav -->
        <nav class="nlm-nav" id="nlmNav">
            <a href="<?= $this->config->getFileRootPath() ?>" class="nlm-nav-link">Home</a>
            <!-- Services dropdown -->
            <div class="nlm-dropdown">
                <a href="<?= $this->config->getFileRootPath() ?>services" class="nlm-nav-link" style="display:inline-flex; align-items:center; gap:5px;">
                    Services <i class="fas fa-chevron-down" style="font-size:.65rem; opacity:.7;"></i>
                </a>
                <div class="nlm-dropdown-menu">
                    <a href="<?= $this->config->getFileRootPath() ?>coding-lessons" class="nlm-dropdown-item">
                        <i class="fas fa-graduation-cap"></i> Coding Lessons
                    </a>
                </div>
            </div>

            <!-- Content dropdown -->
            <div class="nlm-dropdown">
                <button class="nlm-nav-link nlm-dropdown-toggle" aria-expanded="false">
                    Content <i class="fas fa-chevron-down" style="font-size:.7rem; margin-left:4px;"></i>
                </button>
                <div class="nlm-dropdown-menu">
                    <a href="<?= $this->config->getFileRootPath() ?>portfolio" class="nlm-dropdown-item">
                        <i class="fas fa-briefcase"></i> Portfolio
                    </a>
                    <?php if (config('app.modules.blog') === 'on'): ?>
                    <a href="<?= $this->config->getFileRootPath() ?>blog" class="nlm-dropdown-item">
                        <i class="fas fa-pen-square"></i> Blog
                    </a>
                    <?php endif; ?>
                    <a href="<?= $this->config->getFileRootPath() ?>news" class="nlm-dropdown-item">
                        <i class="fas fa-newspaper"></i> News
                    </a>
                    <?php if (config('app.modules.gallery') === 'on'): ?>
                    <a href="<?= $this->config->getFileRootPath() ?>gallery" class="nlm-dropdown-item">
                        <i class="fas fa-images"></i> Gallery
                    </a>
                    <?php endif; ?>
                    <?php if (config('app.modules.videos') === 'on'): ?>
                    <a href="<?= $this->config->getFileRootPath() ?>videos" class="nlm-dropdown-item">
                        <i class="fas fa-film"></i> Videos
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <a href="<?= $this->config->getFileRootPath() ?>about" class="nlm-nav-link">About</a>

            <!-- Contact dropdown -->
            <div class="nlm-dropdown">
                <button class="nlm-nav-link nlm-dropdown-toggle" aria-expanded="false">
                    Contact <i class="fas fa-chevron-down" style="font-size:.7rem; margin-left:4px;"></i>
                </button>
                <div class="nlm-dropdown-menu">
                    <?php if (config('app.modules.testimonials') === 'on'): ?>
                    <a href="<?= $this->config->getFileRootPath() ?>testimonials" class="nlm-dropdown-item">
                        <i class="fas fa-star"></i> Review
                    </a>
                    <?php endif; ?>
                    <a href="<?= $this->config->getFileRootPath() ?>feedback" class="nlm-dropdown-item">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
            <a href="<?= $this->config->getFileRootPath() ?>auth/login" class="nlm-nav-link nlm-nav-login" title="Client Login">
                <i class="fas fa-user-circle"></i>
            </a>
            <?php if (config('app.allow_registration') === true): ?>
            <a href="<?= $this->config->getFileRootPath() ?>auth/signup" class="nlm-nav-link nlm-nav-login" title="Register">
                <i class="fas fa-user-plus"></i>
            </a>
            <?php endif; ?>
            <a href="<?= $this->config->getFileRootPath() ?>feedback" class="nlm-nav-cta">
                <i class="fas fa-paper-plane"></i> Get In Touch
            </a>
        </nav>

        <!-- Hamburger -->
        <button class="nlm-hamburger" id="nlmHamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>

    </div>

    <!-- Mobile nav drawer -->
    <div class="nlm-mobile-nav" id="nlmMobileNav">
        <a href="<?= $this->config->getFileRootPath() ?>" class="nlm-mobile-link">Home</a>
        <div class="nlm-mobile-section-label">Services</div>
        <a href="<?= $this->config->getFileRootPath() ?>services" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-th-list"></i> All Services
        </a>
        <a href="<?= $this->config->getFileRootPath() ?>coding-lessons" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-graduation-cap"></i> Coding Lessons
        </a>
        <div class="nlm-mobile-section-label">Content</div>
        <a href="<?= $this->config->getFileRootPath() ?>portfolio" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-briefcase"></i> Portfolio
        </a>
        <?php if (config('app.modules.blog') === 'on'): ?>
        <a href="<?= $this->config->getFileRootPath() ?>blog" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-pen-square"></i> Blog
        </a>
        <?php endif; ?>
        <a href="<?= $this->config->getFileRootPath() ?>news" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-newspaper"></i> News
        </a>
        <?php if (config('app.modules.gallery') === 'on'): ?>
        <a href="<?= $this->config->getFileRootPath() ?>gallery" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-images"></i> Gallery
        </a>
        <?php endif; ?>
        <?php if (config('app.modules.videos') === 'on'): ?>
        <a href="<?= $this->config->getFileRootPath() ?>videos" class="nlm-mobile-link nlm-mobile-sub">
            <i class="fas fa-film"></i> Videos
        </a>
        <?php endif; ?>
        <a href="<?= $this->config->getFileRootPath() ?>about" class="nlm-mobile-link">About</a>
        <?php if (config('app.modules.testimonials') === 'on'): ?>
        <a href="<?= $this->config->getFileRootPath() ?>testimonials" class="nlm-mobile-link">
            <i class="fas fa-star"></i> Review
        </a>
        <?php endif; ?>
        <a href="<?= $this->config->getFileRootPath() ?>feedback" class="nlm-mobile-link"><i class="fas fa-envelope"></i> Contact Us</a>
        <a href="<?= $this->config->getFileRootPath() ?>auth/login" class="nlm-mobile-link"><i class="fas fa-user-circle"></i> Client Login</a>
        <?php if (config('app.allow_registration') === true): ?>
        <a href="<?= $this->config->getFileRootPath() ?>auth/signup" class="nlm-mobile-link"><i class="fas fa-user-plus"></i> Register</a>
        <?php endif; ?>
        <a href="<?= $this->config->getFileRootPath() ?>feedback" class="nlm-mobile-cta">Get In Touch</a>
    </div>
</header>

<!-- Overlay for mobile nav -->
<div class="nlm-nav-overlay" id="nlmNavOverlay"></div>
