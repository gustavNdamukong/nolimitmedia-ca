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

        <?= ($this->getMetadata() != '') ? $this->getMetadata() : '<title>Nolimit Media — Digital Agency</title>' ?>

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

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
