<?php
/**
 * Header Template - Wayuuglish
 * Multilingual Navbar (EN default, ES, Wayuunaiki coming soon)
 * MediaWiki-style i18n
 */
require_once __DIR__ . '/lang.php';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?= htmlspecialchars(__t('wayuuglish-meta-title')) ?></title>
    <meta name="description" content="<?= htmlspecialchars(__t('wayuuglish-meta-desc')) ?>">
    
    <!-- Google Fonts: Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/logo.svg">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Top Navigation Bar -->
    <header class="navbar">
        <div class="container navbar-inner">
            <a href="index.php" class="brand-logo">
                <img src="assets/images/logo.svg" alt="Wayuuglish Logo" class="brand-icon">
                <span>Wayuuglish</span>
            </a>
            
            <div class="navbar-right">
                <!-- Language Selector -->
                <nav class="lang-selector" aria-label="Language selection">
                    <a href="?lang=en" class="lang-btn <?= $lang === 'en' ? 'active' : '' ?>">EN</a>
                    <a href="?lang=es" class="lang-btn <?= $lang === 'es' ? 'active' : '' ?>">ES</a>
                    <button class="lang-btn disabled" title="Wayuunaiki - Soon / Próximamente" disabled>
                        WAY <span style="font-size: 9px; opacity: 0.8; margin-left: 2px;">(Soon)</span>
                    </button>
                </nav>

                <div class="badge-coming-soon">
                    <span class="dot-live"></span>
                    <span><?= htmlspecialchars(__t('wayuuglish-badge-coming-soon')) ?></span>
                </div>
            </div>
        </div>
    </header>
