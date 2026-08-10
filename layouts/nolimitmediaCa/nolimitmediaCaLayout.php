<?php

namespace Dorguzen\layouts\nolimitmediaCa;

class nolimitmediaCaLayout extends \Dorguzen\Core\DGZ_Layout {

    public function display() {
        $rootPath = $this->config->getFileRootPath();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Search Console domain-ownership verification -->
        <meta name="google-site-verification" content="MO4gJT6IgIYJ8ErceXq2H3tMp06CeJN1y-xF5Xtz3PM">

        <?php
        $pageMetadata = $this->getMetadata();
        echo ($pageMetadata != '') ? $pageMetadata : '<title>Nolimit Media — Digital Agency</title>';

        // Canonical URL — skipped when a view already supplied its own (e.g. views/voicewren.php),
        // so we never emit two competing canonical tags on one page.
        if (stripos($pageMetadata, 'rel="canonical"') === false) {
            echo "\n        " . '<link rel="canonical" href="' . htmlspecialchars(canonicalUrl($rootPath), ENT_QUOTES, 'UTF-8') . '">';
        }
        ?>

        <?php
        // ------------------------------------------------------------------
        // Organization structured data.
        //
        // Several unrelated businesses trade under variants of "Nolimit Media",
        // so Google needs help deciding which entity this site belongs to. The
        // sameAs links are what does that work: each one is a profile we control
        // that names the same business, and together they disambiguate us from
        // the others. The stable @id lets any future markup (Service, Article,
        // BreadcrumbList) point back at this one entity instead of re-declaring it.
        //
        // Contact details are read from config so they cannot drift out of step
        // with the footer, which reads the same keys.
        // ------------------------------------------------------------------
        $nlmSite  = rtrim((string) (config('app.appURL') ?: 'https://nolimitmedia.ca'), '/');
        $nlmEmail = trim((string) config('app.appEmail'));
        $nlmTel   = trim((string) config('app.site_contact_tel'));

        $nlmOrg = [
            '@context'    => 'https://schema.org',
            '@type'       => 'Organization',
            '@id'         => $nlmSite . '/#organization',
            'name'        => 'Nolimit Media',
            'url'         => $nlmSite . '/',
            'description' => 'Canadian digital agency building websites, web apps, mobile apps and AI automation for businesses across the Greater Toronto Area.',
            'logo'        => [
                '@type'  => 'ImageObject',
                'url'    => $nlmSite . '/assets/images/nolimit-logo-square.png',
                'width'  => 720,
                'height' => 720,
            ],
            // Service-area business: the Google Business Profile hides the street
            // address, so declaring one here would contradict it. Region and
            // country are enough to place the entity.
            'address' => [
                '@type'          => 'PostalAddress',
                'addressRegion'  => 'ON',
                'addressCountry' => 'CA',
            ],
            'areaServed' => [
                '@type' => 'AdministrativeArea',
                'name'  => 'Greater Toronto Area, Ontario, Canada',
            ],
            // VoiceWren is our product, not another name for us — a Brand, not a
            // sameAs. This ties voicewren.com to this entity without claiming the
            // two sites are the same thing.
            'brand' => [
                '@type' => 'Brand',
                'name'  => 'VoiceWren',
                'url'   => 'https://voicewren.com/',
            ],
            'sameAs' => [
                'https://www.linkedin.com/company/nolimit-media/',
                // TODO: add the Google Business Profile URL once verification
                // clears — Google Maps "Share" gives the permanent maps.app.goo.gl link.
            ],
        ];

        if ($nlmEmail !== '' || $nlmTel !== '') {
            $nlmPoint = [
                '@type'             => 'ContactPoint',
                'contactType'       => 'customer service',
                'areaServed'        => 'CA',
                'availableLanguage' => 'English',
            ];
            if ($nlmEmail !== '') { $nlmPoint['email'] = $nlmEmail; }
            if ($nlmTel !== '') {
                // Config stores the number as typed (bare digits). Schema.org wants
                // full international format, and it has to match the Google Business
                // Profile number character-for-character to count as the same business.
                $digits = preg_replace('/[^0-9+]/', '', $nlmTel);
                if (!str_starts_with($digits, '+')) {
                    $digits = (strlen($digits) === 10) ? '+1' . $digits : '+' . $digits;
                }
                $nlmPoint['telephone'] = $digits;
            }
            $nlmOrg['contactPoint'] = [$nlmPoint];
        }
        ?>
        <script type="application/ld+json">
<?= json_encode($nlmOrg, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_HEX_TAG) ?>

        </script>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?= $rootPath ?>apple-touch-icon.png">
        <link rel="icon" type="image/svg+xml" href="<?= $rootPath ?>favicon.svg">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= $rootPath ?>favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= $rootPath ?>favicon-16x16.png">
        <link rel="manifest" href="<?= $rootPath ?>site.webmanifest">
        <link rel="shortcut icon" href="<?= $rootPath ?>favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="<?= $rootPath ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Dorguzen base theme (sets --site-theme for all built-in views) -->
        <link href="<?= assetVer('assets/css/style.css') ?>" rel="stylesheet">

        <!-- Site stylesheet -->
        <link href="<?= assetVer('assets/css/nolimitmedia.css') ?>" rel="stylesheet">

        <?= $this->getCssHtml() ?>
    </head>
    <body>

        <?php include('nlm_header.inc.php'); ?>

        <main id="nlm-main">

            <?php if (!empty($this->exceptions)): ?>
                <div class="container mt-4"><div class="alert alert-danger"><?= $this->exceptions ?></div></div>
            <?php endif; ?>
            <?php if (!empty($this->errors)): ?>
                <div class="container mt-4"><div class="alert alert-danger"><?= $this->errors ?></div></div>
            <?php endif; ?>
            <?php if (!empty($this->notices)): ?>
                <div class="container mt-4"><div class="alert alert-info"><?= $this->notices ?></div></div>
            <?php endif; ?>
            <?php if (!empty($this->successes)): ?>
                <div class="container mt-4"><div class="alert alert-success"><?= $this->successes ?></div></div>
            <?php endif; ?>

            <?= $this->content ?>

        </main>

        <?php include('nlm_footer.inc.php'); ?>

        <!-- Back to top -->
        <button id="nlm-back-to-top" title="Back to top" aria-label="Back to top">
            <i class="fas fa-chevron-up"></i>
        </button>

        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
        <!-- Site JS -->
        <script src="<?= $rootPath ?>assets/js/nolimitmedia.js"></script>

        <?= $this->getJavascriptHtml() ?>

    </body>
    </html>
    <?php
    }
}
