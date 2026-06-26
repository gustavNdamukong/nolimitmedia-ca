<?php

namespace Dorguzen\Views;

class about extends \Dorguzen\Core\DGZ_HtmlView
{
    public function show(array $viewModel = []): void
    {
        $base = $this->controller->config->getFileRootPath();
        $this->addMetadata([
            '<title>About Us — Nolimit Media | Canadian Digital Agency</title>',
            '<meta name="description" content="Learn who we are, what drives us, and why businesses across Canada trust Nolimit Media for web design, development, and digital marketing.">',
            '<meta name="keywords" content="about Nolimit Media, Canadian digital agency team, web design company Canada, who we are">',
            '<meta property="og:title" content="About Nolimit Media — Canadian Digital Agency">',
            '<meta property="og:description" content="Learn who we are, what drives us, and why businesses across Canada trust Nolimit Media for web design, development, and digital marketing.">',
            '<meta property="og:type" content="website">',
        ]);
    ?>

    <!-- ══ PAGE HERO ══════════════════════════════════════════════ -->
    <section class="nlm-page-hero" style="padding-top: calc(var(--nlm-header-h) + 50px);">
        <div class="nlm-page-hero-content container">
            <span class="nlm-label" style="color:rgba(255,255,255,.7);">Who We Are</span>
            <h1>About Nolimit Media</h1>
            <p>A passionate team of designers, developers, and strategists building digital experiences that matter.</p>
            <div class="nlm-breadcrumb">
                <a href="<?= $base ?>">Home</a>
                <span>/</span>
                <span style="color:#fff;">About</span>
            </div>
        </div>
    </section>

    <!-- ══ OUR STORY ══════════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="nlm-label">Our Story</span>
                    <h2 class="nlm-heading">Built on Passion,<br><span class="nlm-gradient-text">Driven by Results</span></h2>
                    <p style="color:var(--nlm-text); margin-bottom:1.25rem;">
                        Nolimit Media was founded with a single purpose: to give businesses of every size access to world-class digital expertise. What started as a small web design studio has grown into a full-service digital agency serving clients across Canada and internationally.
                    </p>
                    <p style="color:var(--nlm-text); margin-bottom:1.75rem;">
                        We believe great digital work starts with genuinely understanding our clients — their goals, their audience, and the problems they need solved. That philosophy guides every project we take on, from a single landing page to a complex e-commerce platform.
                    </p>
                    <a href="<?= $base ?>feedback" class="nlm-btn nlm-btn-red">
                        <i class="fas fa-paper-plane"></i> Start a Conversation
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="nlm-stat-card">
                                <div class="nlm-stat-num">8+</div>
                                <div class="nlm-stat-label">Years of Experience</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="nlm-stat-card">
                                <div class="nlm-stat-num">100+</div>
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

    <!-- ══ MISSION & VALUES ═══════════════════════════════════════ -->
    <section class="nlm-section nlm-why">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label">What We Stand For</span>
                <h2 class="nlm-heading">Our Mission &amp; <span class="nlm-gradient-text">Core Values</span></h2>
                <p class="nlm-subheading">Everything we build is guided by these principles — from the first discovery call to final delivery and beyond.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem;">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-bullseye" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Results First</h5>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.7;">We measure success by the outcomes we achieve for our clients — traffic, conversions, revenue, and growth — not just by how things look.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; border-color:var(--nlm-red);">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-red),var(--nlm-red-dark));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-handshake" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Radical Transparency</h5>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.7;">No jargon, no hidden fees, no surprises. We communicate clearly at every stage so you always know exactly where your project stands.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem;">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-infinity" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">No Limits Thinking</h5>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.7;">We challenge the boundaries of what's possible. If you can dream it, we'll find a way to build it — beautifully, on time, and within budget.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem;">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-rocket" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Speed &amp; Quality</h5>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.7;">We respect your time. Fast turnarounds are not an excuse for cutting corners — we deliver both speed and craft on every engagement.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem; border-color:var(--nlm-red);">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-red),var(--nlm-red-dark));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-users" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Client Partnership</h5>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.7;">We don't take briefs and disappear. We work alongside you as a true partner, involving you at every key decision point throughout your project.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-stat-card" style="text-align:left; padding:2rem;">
                        <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;">
                            <i class="fas fa-leaf" style="color:#fff;font-size:1.4rem;"></i>
                        </div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.75rem;">Long-term Growth</h5>
                        <p style="color:var(--nlm-text);font-size:.95rem;line-height:1.7;">We build for the future. Every decision — from code architecture to SEO strategy — is made with your long-term growth in mind, not just the launch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ TEAM ════════════════════════════════════════════════════ -->
    <section class="nlm-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label red">The People Behind the Work</span>
                <h2 class="nlm-heading">Meet <span class="nlm-gradient-text">Our Team</span></h2>
                <p class="nlm-subheading">A tight-knit group of specialists who care deeply about the work they produce and the clients they serve.</p>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:center; padding:2rem 1.5rem;">
                        <div style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;font-size:2rem;font-weight:900;color:#fff;">G</div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.25rem;">Gustav N.</h5>
                        <div style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--nlm-blue);margin-bottom:.75rem;">Founder &amp; Lead Developer</div>
                        <p style="color:var(--nlm-text);font-size:.88rem;line-height:1.65;">Full-stack software engineer and digital strategist with 15+ years building web products for clients across industries.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:center; padding:2rem 1.5rem; border-color:var(--nlm-red);">
                        <div style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--nlm-red),var(--nlm-red-dark));display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;font-size:2rem;font-weight:900;color:#fff;">S</div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.25rem;">Sarah K.</h5>
                        <div style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--nlm-red);margin-bottom:.75rem;">Creative Director</div>
                        <p style="color:var(--nlm-text);font-size:.88rem;line-height:1.65;">Brand identity specialist and UI/UX designer who transforms complex ideas into beautiful, intuitive experiences.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:center; padding:2rem 1.5rem;">
                        <div style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-blue-dark));display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;font-size:2rem;font-weight:900;color:#fff;">M</div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.25rem;">Marcus T.</h5>
                        <div style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--nlm-blue);margin-bottom:.75rem;">SEO &amp; Growth Lead</div>
                        <p style="color:var(--nlm-text);font-size:.88rem;line-height:1.65;">Data-driven SEO and paid-media specialist who turns organic and paid channels into measurable revenue streams.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="nlm-stat-card" style="text-align:center; padding:2rem 1.5rem; border-color:var(--nlm-red);">
                        <div style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--nlm-blue),var(--nlm-red));display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;font-size:2rem;font-weight:900;color:#fff;">A</div>
                        <h5 style="color:var(--nlm-white);margin-bottom:.25rem;">Aisha D.</h5>
                        <div style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--nlm-red);margin-bottom:.75rem;">Social Media Manager</div>
                        <p style="color:var(--nlm-text);font-size:.88rem;line-height:1.65;">Content strategist and community builder who creates social campaigns that grow audiences and drive engagement.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ══ CTA ════════════════════════════════════════════════════ -->
    <section class="nlm-section-sm" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border); border-bottom:1px solid var(--nlm-border);">
        <div class="container text-center">
            <span class="nlm-label">Ready to Work Together?</span>
            <h2 class="nlm-heading" style="margin-bottom:1rem;">Let's Build Something <span class="nlm-gradient-text">Exceptional</span></h2>
            <p style="color:var(--nlm-text); max-width:520px; margin:0 auto 2rem;">Tell us about your project and we'll get back to you within one business day with ideas and a no-obligation quote.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?= $base ?>feedback" class="nlm-btn nlm-btn-red">
                    <i class="fas fa-paper-plane"></i> Get In Touch
                </a>
                <a href="<?= $base ?>portfolio" class="nlm-btn nlm-btn-outline">
                    <i class="fas fa-eye"></i> See Our Work
                </a>
            </div>
        </div>
    </section>

    <?php
    }
}
