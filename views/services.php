<?php

namespace Dorguzen\Views;

class services extends \Dorguzen\Core\DGZ_HtmlView
{
    public function show(array $viewModel = []): void
    {
        $base = $this->controller->config->getFileRootPath();
        $this->addMetadata([
            '<title>Services — No Limit Media | Canadian Digital Agency</title>',
            '<meta name="description" content="From branding and web development to AI consulting, SEO, mobile apps, and coding lessons — No Limit Media covers every layer of your digital presence.">',
            '<meta property="og:title" content="Services — No Limit Media">',
            '<meta property="og:type" content="website">',
        ]);
    ?>

    <!-- ══ PAGE HERO ══════════════════════════════════════════════ -->
    <section class="nlm-page-hero" style="padding-top: calc(var(--nlm-header-h) + 50px);">
        <div class="nlm-page-hero-content container">
            <span class="nlm-label" style="color:rgba(255,255,255,.7);">What We Do</span>
            <h1>Our Services</h1>
            <p>Everything your business needs to succeed online — under one roof, delivered by one team.</p>
            <div class="nlm-breadcrumb">
                <a href="<?= $base ?>">Home</a>
                <span>/</span>
                <span style="color:#fff;">Services</span>
            </div>
        </div>
    </section>

    <?php
    $groups = [
        [
            'label'    => 'Design & Branding',
            'heading'  => 'Make Your Brand <span class="nlm-gradient-text">Impossible to Ignore</span>',
            'sub'      => 'First impressions are everything. We craft visual identities that stop the scroll and stick in the memory.',
            'red'      => false,
            'services' => [
                [
                    'icon'  => 'fas fa-paint-brush',
                    'title' => 'Logo Design',
                    'desc'  => 'Custom logo concepts built around your brand personality, industry, and audience — delivered in all formats you\'ll ever need.',
                    'red'   => false,
                ],
                [
                    'icon'  => 'fas fa-image',
                    'title' => 'Banner & Ad Design',
                    'desc'  => 'Eye-catching banners for web, social media, and digital advertising that communicate your message in an instant.',
                    'red'   => true,
                ],
                [
                    'icon'  => 'fas fa-palette',
                    'title' => 'Brand Identity',
                    'desc'  => 'Complete brand packages — colour palettes, typography systems, brand guidelines, and visual language that keeps your identity consistent everywhere.',
                    'red'   => false,
                ],
            ],
        ],
        [
            'label'    => 'Web & App Development',
            'heading'  => 'Digital Products Built to <span class="nlm-gradient-text">Perform & Scale</span>',
            'sub'      => 'From a single landing page to a fully custom platform — we build fast, secure, and future-proof digital products.',
            'red'      => true,
            'services' => [
                [
                    'icon'  => 'fas fa-code',
                    'title' => 'Web Application Development',
                    'desc'  => 'Bespoke web applications built on modern, robust architecture. Whether it\'s a SaaS platform, a client portal, or a complex business tool — we build it properly.',
                    'red'   => false,
                ],
                [
                    'icon'  => 'fas fa-shopping-cart',
                    'title' => 'E-commerce Solutions',
                    'desc'  => 'Shopify store setup and customisation, or a fully custom e-commerce platform built from scratch — with payment integration, inventory management, and optimised checkout flows.',
                    'red'   => true,
                ],
                [
                    'icon'  => 'fas fa-mobile-alt',
                    'title' => 'Mobile App Development',
                    'desc'  => 'Native and cross-platform mobile applications for iOS and Android, designed to delight users and built to handle real-world traffic.',
                    'red'   => false,
                ],
                [
                    'icon'  => 'fas fa-file-alt',
                    'title' => 'Landing Pages',
                    'desc'  => 'High-converting landing pages for campaigns, product launches, or businesses whose main site is still in development — live fast, look great, convert better.',
                    'red'   => true,
                ],
                [
                    'icon'  => 'fas fa-map-marker-alt',
                    'title' => '\'Shop Near Me\' App',
                    'desc'  => 'A custom location-aware application that helps customers find your nearest outlet or service point — ideal for franchises, chains, and any multi-location business.',
                    'red'   => false,
                ],
            ],
        ],
        [
            'label'    => 'Integrations & Payments',
            'heading'  => 'Connect Your Systems, <span class="nlm-gradient-text">Automate Your Flow</span>',
            'sub'      => 'We wire up the plumbing so your tools talk to each other and your customers can pay without friction.',
            'red'      => false,
            'services' => [
                [
                    'icon'  => 'fas fa-credit-card',
                    'title' => 'Payment Systems',
                    'desc'  => 'Secure payment gateway integration for your website or app — Stripe, PayPal, and other major providers — with full testing and PCI-compliant implementation.',
                    'red'   => false,
                ],
                [
                    'icon'  => 'fas fa-plug',
                    'title' => 'API Development & Integration',
                    'desc'  => 'Build a public or private API so your system can share data with other services, or integrate third-party APIs to extend what your platform can do — cleanly and reliably.',
                    'red'   => true,
                ],
            ],
        ],
        [
            'label'    => 'Consulting & Strategy',
            'heading'  => 'Smarter Decisions, <span class="nlm-gradient-text">Better Outcomes</span>',
            'sub'      => 'Not every problem needs more code. Sometimes it needs sharper thinking. We bring both.',
            'red'      => true,
            'services' => [
                [
                    'icon'  => 'fas fa-chess',
                    'title' => 'Software Consulting',
                    'desc'  => 'Independent advice on your technology stack, architecture decisions, vendor choices, and development roadmap — from engineers who have built and scaled real products.',
                    'red'   => false,
                ],
                [
                    'icon'  => 'fas fa-robot',
                    'title' => 'AI Consulting',
                    'desc'  => 'We assess your business processes and identify where AI can genuinely save time, reduce cost, or unlock new revenue — then help you implement it in a way that actually works.',
                    'red'   => true,
                ],
                [
                    'icon'  => 'fas fa-search',
                    'title' => 'SEO',
                    'desc'  => 'Technical SEO audits, keyword strategy, on-page optimisation, and link building that move you up the rankings and keep you there — with reporting you can actually understand.',
                    'red'   => false,
                ],
            ],
        ],
        [
            'label'    => 'Other Services',
            'heading'  => 'Supporting You <span class="nlm-gradient-text">Every Step of the Way</span>',
            'sub'      => 'From keeping your site live to teaching you how to build the next one yourself — we\'ve got you covered.',
            'red'      => false,
            'services' => [
                [
                    'icon'  => 'fas fa-server',
                    'title' => 'Web Hosting',
                    'desc'  => 'Reliable, managed hosting for your website or web application — with monitoring, regular backups, SSL certificates, and a team that actually responds when something goes wrong.',
                    'red'   => false,
                ],
                [
                    'icon'  => 'fas fa-graduation-cap',
                    'title' => 'Coding Lessons',
                    'desc'  => 'One-on-one or small group coding sessions tailored to your level — whether you\'re a complete beginner, a business owner who wants to understand their tech, or a developer levelling up.',
                    'red'   => true,
                    'link'  => 'coding-lessons',
                ],
            ],
        ],
    ];

    foreach ($groups as $i => $group):
        $bg = ($i % 2 === 1) ? 'background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border); border-bottom:1px solid var(--nlm-border);' : '';
    ?>

    <!-- ══ GROUP: <?= strtoupper($group['label']) ?> ══ -->
    <section class="nlm-section" style="<?= $bg ?>">
        <div class="container">
            <div class="text-center mb-5">
                <span class="nlm-label nlm-label-lg <?= $group['red'] ? 'red' : '' ?>">
                    <?= $group['label'] ?>
                    <span class="nlm-sceptre-line"></span>
                </span>
                <h2 class="nlm-heading"><?= $group['heading'] ?></h2>
                <p class="nlm-subheading"><?= $group['sub'] ?></p>
            </div>
            <div class="row g-4 <?= count($group['services']) < 3 ? 'justify-content-center' : '' ?>">
                <?php foreach ($group['services'] as $svc): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="nlm-service-card <?= $svc['red'] ? 'red' : '' ?>">
                        <div class="nlm-service-icon"><i class="<?= $svc['icon'] ?>"></i></div>
                        <h5 class="nlm-service-title"><?= $svc['title'] ?></h5>
                        <p class="nlm-service-desc"><?= $svc['desc'] ?></p>
                        <?php if (!empty($svc['link'])): ?>
                        <a href="<?= $base . $svc['link'] ?>" class="nlm-btn nlm-btn-outline" style="margin-top:.5rem; font-size:.85rem; padding:.45rem 1.1rem;">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php endforeach; ?>

    <!-- ══ CTA ════════════════════════════════════════════════════ -->
    <section class="nlm-section-sm" style="background:var(--nlm-dark-2); border-top:1px solid var(--nlm-border);">
        <div class="container text-center">
            <span class="nlm-label">Not Sure Where to Start?</span>
            <h2 class="nlm-heading" style="margin-bottom:1rem;">Let's Talk About <span class="nlm-gradient-text">Your Project</span></h2>
            <p style="color:var(--nlm-text-muted); max-width:540px; margin:0 auto 2rem;">Every project starts with a conversation. Tell us what you need and we'll come back with a clear plan and honest pricing — no obligation.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?= $base ?>feedback" class="nlm-btn nlm-btn-red">
                    <i class="fas fa-paper-plane"></i> Get In Touch
                </a>
                <a href="<?= $base ?>about" class="nlm-btn nlm-btn-outline">
                    <i class="fas fa-users"></i> Meet the Team
                </a>
            </div>
        </div>
    </section>

    <?php
    }
}
