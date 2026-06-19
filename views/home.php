<?php

namespace Dorguzen\Views;

class home extends \Dorguzen\Core\DGZ_HtmlView
{
    public function show(array $viewModel = []): void
    {
        extract($viewModel);
        // $testimonials (optional) — injected when testimonials module is on
        $base = $this->controller->config->getFileRootPath();
        $this->addMetadata([
            '<title>No Limit Media — Digital Agency Canada</title>',
            '<meta name="description" content="No Limit Media is a Canadian digital agency specialising in web design, web development, SEO, branding, and social media management. We build digital experiences that deliver results.">',
            '<meta property="og:title" content="No Limit Media — Digital Agency Canada">',
            '<meta property="og:description" content="Bold design. Clean code. Real growth. No Limit Media builds digital experiences that deliver results.">',
            '<meta property="og:type" content="website">',
        ]);
    ?>

    <!-- ══ HERO ══════════════════════════════════════════════════ -->
    <section class="nlm-hero">
        <div class="nlm-hero-bg"></div>
        <div class="container">
            <div class="nlm-hero-content">

                <div class="nlm-hero-badge">
                    <i class="fas fa-bolt"></i> Digital Agency — Canada
                </div>

                <h1 class="nlm-hero-title">
                    We Build Digital<br><em>Experiences That<br>Deliver Results</em>
                </h1>

                <p class="nlm-hero-sub">
                    Your vision, our expertise. No Limit Media creates stunning websites,
                    powerful digital marketing strategies, and unforgettable brands for
                    businesses across Canada and beyond.
                </p>

                <div class="nlm-hero-cta">
                    <a href="<?= $base ?>feedback" class="nlm-btn nlm-btn-red">
                        <i class="fas fa-paper-plane"></i> Start Your Project
                    </a>
                    <a href="<?= $base ?>portfolio" class="nlm-btn nlm-btn-outline">
                        <i class="fas fa-eye"></i> View Our Work
                    </a>
                </div>

                <div class="nlm-hero-stats">
                    <div>
                        <div class="nlm-hero-stat-num">10+</div>
                        <div class="nlm-hero-stat-label">Years of Experience</div>
                    </div>
                    <div>
                        <div class="nlm-hero-stat-num">200+</div>
                        <div class="nlm-hero-stat-label">Projects Delivered</div>
                    </div>
                    <div>
                        <div class="nlm-hero-stat-num">50+</div>
                        <div class="nlm-hero-stat-label">Happy Clients</div>
                    </div>
                    <div>
                        <div class="nlm-hero-stat-num">99%</div>
                        <div class="nlm-hero-stat-label">Satisfaction Rate</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ══ SERVICES ══════════════════════════════════════════════ -->
    <section class="nlm-section nlm-services">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label">What We Do</span>
                <h2 class="nlm-heading">Services Built to <span class="nlm-gradient-text">Grow Your Business</span></h2>
                <p class="nlm-subheading">From concept to launch and beyond — we cover every layer of your digital presence.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-paint-brush"></i></div>
                        <h5 class="nlm-service-title">Web Design</h5>
                        <p class="nlm-service-desc">Visually stunning, conversion-focused designs that captivate your audience and reflect your brand's unique identity.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-code"></i></div>
                        <h5 class="nlm-service-title">Web Development</h5>
                        <p class="nlm-service-desc">Fast, secure, scalable websites and web applications built on modern PHP, robust MVC architecture, and clean code.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-search"></i></div>
                        <h5 class="nlm-service-title">SEO &amp; Digital Marketing</h5>
                        <p class="nlm-service-desc">Data-driven SEO strategies, Google Ads, content marketing, and analytics that drive organic traffic and real leads.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-palette"></i></div>
                        <h5 class="nlm-service-title">Branding &amp; Identity</h5>
                        <p class="nlm-service-desc">Logo design, brand guidelines, colour palettes, and typography systems that make your business instantly recognisable.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card">
                        <div class="nlm-service-icon"><i class="fas fa-hashtag"></i></div>
                        <h5 class="nlm-service-title">Social Media Management</h5>
                        <p class="nlm-service-desc">Content creation, scheduling, community management, and paid social campaigns that build and engage your audience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card red">
                        <div class="nlm-service-icon"><i class="fas fa-shopping-cart"></i></div>
                        <h5 class="nlm-service-title">E-commerce Solutions</h5>
                        <p class="nlm-service-desc">Full-featured online stores with secure payment integration, inventory management, and optimised conversion funnels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ PORTFOLIO PREVIEW ══════════════════════════════════════ -->
    <section class="nlm-section nlm-portfolio">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label red">Our Work</span>
                <h2 class="nlm-heading">Projects We're <span class="nlm-gradient-text">Proud Of</span></h2>
                <p class="nlm-subheading">A glimpse at some of the digital experiences we've crafted for our clients.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-portfolio-card">
                        <img src="<?= $base ?>assets/images/portfolio-1.jpg" alt="Project 1">
                        <div class="nlm-portfolio-overlay">
                            <div class="nlm-portfolio-tag">Web Design &amp; Development</div>
                            <div class="nlm-portfolio-name">Corporate Rebrand &amp; Website</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-portfolio-card">
                        <img src="<?= $base ?>assets/images/portfolio-2.jpg" alt="Project 2">
                        <div class="nlm-portfolio-overlay">
                            <div class="nlm-portfolio-tag">E-commerce</div>
                            <div class="nlm-portfolio-name">Online Store — Fashion Brand</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-portfolio-card">
                        <img src="<?= $base ?>assets/images/portfolio-3.jpg" alt="Project 3">
                        <div class="nlm-portfolio-overlay">
                            <div class="nlm-portfolio-tag">SEO &amp; Marketing</div>
                            <div class="nlm-portfolio-name">Lead Generation Campaign</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="<?= $base ?>portfolio" class="nlm-btn nlm-btn-outline">
                    <i class="fas fa-th-large"></i> See All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- ══ WHY US ═════════════════════════════════════════════════ -->
    <section class="nlm-section nlm-why">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6">
                    <span class="nlm-label">Why Choose Us</span>
                    <h2 class="nlm-heading">No Limits on What We Can <span class="nlm-gradient-text">Build For You</span></h2>
                    <p style="color:var(--nlm-text-muted); margin-bottom:2rem;">We don't just build websites — we build growth engines. Every project is approached with strategy, creativity, and a relentless focus on results.</p>

                    <div class="nlm-why-point">
                        <div class="nlm-why-point-icon"><i class="fas fa-bolt"></i></div>
                        <div>
                            <h6>Fast Delivery, Zero Compromise</h6>
                            <p>We meet deadlines without cutting corners on quality. Your launch date is our commitment.</p>
                        </div>
                    </div>
                    <div class="nlm-why-point">
                        <div class="nlm-why-point-icon"><i class="fas fa-shield-halved"></i></div>
                        <div>
                            <h6>Security-First Development</h6>
                            <p>Every site we build follows best-practice security standards — CSRF protection, input validation, and HTTPS by default.</p>
                        </div>
                    </div>
                    <div class="nlm-why-point">
                        <div class="nlm-why-point-icon"><i class="fas fa-headset"></i></div>
                        <div>
                            <h6>Ongoing Support &amp; Maintenance</h6>
                            <p>We don't disappear after launch. Our clients get priority support and proactive maintenance.</p>
                        </div>
                    </div>
                    <div class="nlm-why-point">
                        <div class="nlm-why-point-icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <h6>Results You Can Measure</h6>
                            <p>We track, report, and optimise. Every campaign and project is tied to real metrics that matter to your business.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="nlm-stat-card">
                                <div class="nlm-stat-num">10+</div>
                                <div class="nlm-stat-label">Years Experience</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="nlm-stat-card">
                                <div class="nlm-stat-num">200+</div>
                                <div class="nlm-stat-label">Projects Delivered</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="nlm-stat-card">
                                <div class="nlm-stat-num">50+</div>
                                <div class="nlm-stat-label">Happy Clients</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="nlm-stat-card">
                                <div class="nlm-stat-num">99%</div>
                                <div class="nlm-stat-label">Satisfaction Rate</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ══ TESTIMONIALS ══════════════════════════════════════════════════════ -->
    <?php
    $moduleEnabled   = (config('app')['modules']['testimonials'] ?? 'off') === 'on';
    $hasTestimonials = !empty($testimonials ?? []);
    if ($moduleEnabled && $hasTestimonials): ?>
    <section class="nlm-section nlm-testimonials">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label">Client Love</span>
                <h2 class="nlm-heading">What Our Clients <span class="nlm-gradient-text">Say About Us</span></h2>
            </div>

            <!-- Testimonials carousel -->
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <?php foreach ($testimonials as $i => $t): ?>
                    <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                        <div class="d-flex justify-content-center px-2 px-md-5">
                            <div class="nlm-testimonial-card" style="max-width:680px; width:100%;">
                                <div class="nlm-testimonial-stars" style="color:#ffc107; font-size:1.3rem; margin-bottom:14px;"><?= $t['stars_html'] ?></div>
                                <p class="nlm-testimonial-quote" style="font-size:1.05rem; line-height:1.8;">"<?= htmlspecialchars(mb_substr($t['testimonial_comment'], 0, 250)) ?><?= mb_strlen($t['testimonial_comment']) > 250 ? '&hellip;' : '' ?>"</p>
                                <div class="nlm-testimonial-author">
                                    <div class="nlm-testimonial-avatar" style="background:var(--site-theme,#0d47a1);color:#fff;width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:1.15rem;flex-shrink:0;">
                                        <?= strtoupper(mb_substr($t['testimonial_name'], 0, 1)) ?>
                                    </div>
                                    <div>
                                        <div class="nlm-testimonial-name"><?= htmlspecialchars($t['testimonial_name']) ?></div>
                                        <?php $meta = implode(', ', array_filter([$t['testimonial_role'] ?? '', $t['testimonial_company'] ?? ''])); ?>
                                        <?php if ($meta): ?>
                                            <div class="nlm-testimonial-role"><?= htmlspecialchars($meta) ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <?php if (count($testimonials) > 1): ?>
                <!-- Prev / Next controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev"
                        style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,.12); border:1px solid rgba(255,255,255,.2); position:relative; align-self:center; left:0; top:auto; bottom:auto; margin-right:auto;">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next"
                        style="width:48px; height:48px; border-radius:50%; background:rgba(255,255,255,.12); border:1px solid rgba(255,255,255,.2); position:relative; align-self:center; right:0; top:auto; bottom:auto; margin-left:auto;">
                    <span class="carousel-control-next-icon"></span>
                </button>

                <!-- Dot indicators -->
                <div class="carousel-indicators" style="position:static; margin-top:24px;">
                    <?php foreach ($testimonials as $i => $t): ?>
                        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="<?= $i ?>"
                                <?= $i === 0 ? 'class="active" aria-current="true"' : '' ?>
                                style="width:10px; height:10px; border-radius:50%; background:rgba(255,255,255,.4); border:none; margin:0 4px; transition:background .2s;"
                                aria-label="Testimonial <?= $i + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="text-center mt-4">
                <a href="<?= $base ?>testimonials" class="nlm-btn nlm-btn-outline">
                    <i class="fas fa-comments"></i> View All Testimonials &amp; Leave a Review
                </a>
            </div>
        </div>
    </section>
    <?php elseif (!$moduleEnabled): ?>
    <!-- Static placeholder testimonials when module is off -->
    <section class="nlm-section nlm-testimonials">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label">Client Love</span>
                <h2 class="nlm-heading">What Our Clients <span class="nlm-gradient-text">Say About Us</span></h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-testimonial-card">
                        <div class="nlm-testimonial-stars">★★★★★</div>
                        <p class="nlm-testimonial-quote">"No Limit Media transformed our online presence completely. Our website traffic tripled in three months and the design is exactly what we envisioned — actually better."</p>
                        <div class="nlm-testimonial-author">
                            <img src="<?= $base ?>assets/images/testimonial-1.jpg" alt="Client" class="nlm-testimonial-avatar">
                            <div>
                                <div class="nlm-testimonial-name">Sarah Mitchell</div>
                                <div class="nlm-testimonial-role">CEO, Bright Path Agency</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-testimonial-card">
                        <div class="nlm-testimonial-stars">★★★★★</div>
                        <p class="nlm-testimonial-quote">"The team is responsive, creative, and genuinely invested in the success of your project. Our e-commerce store launched on time and our sales doubled in the first quarter."</p>
                        <div class="nlm-testimonial-author">
                            <img src="<?= $base ?>assets/images/testimonial-2.jpg" alt="Client" class="nlm-testimonial-avatar">
                            <div>
                                <div class="nlm-testimonial-name">James Okafor</div>
                                <div class="nlm-testimonial-role">Founder, Verdant Store</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-testimonial-card">
                        <div class="nlm-testimonial-stars">★★★★★</div>
                        <p class="nlm-testimonial-quote">"Best investment we've made for our business. The SEO results speak for themselves — we went from page 4 to position 2 on Google for our main keyword within 4 months."</p>
                        <div class="nlm-testimonial-author">
                            <img src="<?= $base ?>assets/images/testimonial-3.jpg" alt="Client" class="nlm-testimonial-avatar">
                            <div>
                                <div class="nlm-testimonial-name">Priya Sharma</div>
                                <div class="nlm-testimonial-role">Director, NovaTech Solutions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ══ CTA BANNER ════════════════════════════════════════════ -->
    <section class="nlm-cta-banner">
        <div class="container">
            <div class="nlm-cta-banner-content">
                <h2>Ready to <span class="nlm-gradient-text">Grow Your Business?</span></h2>
                <p>Let's talk about your project. No obligation — just a conversation about what's possible.</p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <a href="<?= $base ?>feedback" class="nlm-btn nlm-btn-red">
                        <i class="fas fa-comments"></i> Let's Talk
                    </a>
                    <a href="<?= $base ?>services" class="nlm-btn nlm-btn-outline">
                        <i class="fas fa-list"></i> Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
    }
}
