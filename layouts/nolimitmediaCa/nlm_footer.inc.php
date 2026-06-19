<footer class="nlm-footer">
    <div class="nlm-footer-top">
        <div class="container">
            <div class="row g-5">

                <!-- Brand col -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= $this->config->getFileRootPath() ?>" class="nlm-footer-logo">
                        <img src="<?= $this->config->getFileRootPath() ?>assets/images/logo1.png" alt="No Limit Media" height="36">
                    </a>
                    <p class="nlm-footer-tagline">We build digital experiences that deliver results. Bold design. Clean code. Real growth.</p>
                    <div class="nlm-footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <!-- Quick links -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="nlm-footer-heading">Quick Links</h6>
                    <ul class="nlm-footer-links">
                        <li><a href="<?= $this->config->getFileRootPath() ?>">Home</a></li>
                        <li><a href="<?= $this->config->getFileRootPath() ?>services">Services</a></li>
                        <li><a href="<?= $this->config->getFileRootPath() ?>portfolio">Portfolio</a></li>
                        <?php if (config('app.modules.blog') === 'on'): ?>
                        <li><a href="<?= $this->config->getFileRootPath() ?>blog">Blog</a></li>
                        <?php endif; ?>
                        <li><a href="<?= $this->config->getFileRootPath() ?>about">About</a></li>
                        <li><a href="<?= $this->config->getFileRootPath() ?>feedback">Contact</a></li>
                        <?php if (config('app.modules.testimonials') === 'on'): ?>
                        <li><a href="<?= $this->config->getFileRootPath() ?>testimonials">Leave review</a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="nlm-footer-heading">Services</h6>
                    <ul class="nlm-footer-links">
                        <li><a href="#">Web Design &amp; Development</a></li>
                        <li><a href="#">SEO &amp; Digital Marketing</a></li>
                        <li><a href="#">Branding &amp; Identity</a></li>
                        <li><a href="#">Social Media Management</a></li>
                        <li><a href="#">E-commerce Solutions</a></li>
                        <li><a href="#">Mobile App Development</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="nlm-footer-heading">Contact</h6>
                    <ul class="nlm-footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Canada</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:hello@nolimitmedia.ca">hello@nolimitmedia.ca</a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+1">+1 (000) 000-0000</a>
                        </li>
                    </ul>

                    <!-- Newsletter -->
                    <div class="mt-4">
                        <p style="font-size:.85rem; color:var(--nlm-text-muted); margin-bottom:.75rem;">Stay updated with our latest news and projects.</p>
                        <button type="button"
                                class="nlm-btn nlm-btn-outline"
                                style="padding:.55rem 1.4rem; font-size:.88rem;"
                                data-bs-toggle="modal"
                                data-bs-target="#subscribeModal">
                            <i class="fas fa-envelope"></i> Subscribe Now
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="nlm-footer-bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <span class="nlm-blue">No Limit</span><span class="nlm-red">Media</span>. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> &nbsp;·&nbsp; <a href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>

<!-- Subscribe Modal -->
<?php $_base = $this->config->getFileRootPath(); ?>
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius:14px; overflow:hidden;">
            <div class="modal-header border-0 py-4 px-4" style="background: var(--site-theme);">
                <h5 class="modal-title fw-bold text-white" id="subscribeModalLabel">
                    <i class="fas fa-envelope me-2"></i> Subscribe to Our Newsletter
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 py-4">
                <p class="mb-4" style="color:var(--nlm-text-muted);">Stay updated with our latest news and projects. Enter your details below.</p>
                <form action="<?= $_base ?>subscribe" method="post" id="subscribeForm">
                    <input type="hidden" name="_csrf_token" value="<?= getCsrfToken() ?>">
                    <div class="mb-3">
                        <label for="sub_email" class="form-label fw-semibold">
                            Email address <span class="text-danger">*</span>
                        </label>
                        <input type="email" id="sub_email" name="subscriber_email"
                               class="form-control" placeholder="you@example.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="sub_firstname" class="form-label fw-semibold">
                            First name <span style="color:var(--nlm-text-muted); font-weight:400;">(optional)</span>
                        </label>
                        <input type="text" id="sub_firstname" name="subscriber_firstname"
                               class="form-control" placeholder="Your first name">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg fw-semibold">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0 px-4 pb-4 pt-0">
                <small style="color:var(--nlm-text-muted);">We respect your privacy. Unsubscribe at any time.</small>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Modal -->
