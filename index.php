<?php
/**
 * Wayuuglish - Coming Soon Landing Page
 * Style: Wayuuglish visual identity with Medium Sky Blue (#009DF8) as primary color
 * Mascot: Pink Flamingo (Flamenco Rosado de La Guajira) with Wayuu Hat (Katsu)
 * Multilingual: MediaWiki style i18n JSON files
 * Team: Daniel Yepez Garces & Yanilis Romero
 * App: Google Play Store Teaser (Coming Soon)
 */
include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="section-white">
    <div class="container hero">
        <div class="hero-content">
            <div class="hero-tag">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L1 21h22L12 2zm0 3.83L19.17 19H4.83L12 5.83zM11 16h2v2h-2zm0-6h2v4h-2z"/>
                </svg>
                <span><?= htmlspecialchars(__t('wayuuglish-hero-tag')) ?></span>
            </div>
            
            <h1 class="hero-title">
                <?= __t('wayuuglish-hero-title') ?>
            </h1>
            
            <p class="hero-subtitle">
                <?= __t('wayuuglish-hero-subtitle') ?>
            </p>

            <div class="hero-cta-group">
                <a href="#demosection" class="btn-primary">
                    <?= htmlspecialchars(__t('wayuuglish-btn-try-lesson')) ?>
                </a>
                
                <a href="#appsection" class="btn-playstore" title="Google Play Store (Coming Soon)">
                    <svg class="playstore-icon" viewBox="0 0 24 24">
                        <path d="M3.609 1.814L13.792 12 3.61 22.186a2.38 2.38 0 0 1-.61-1.64V3.454c0-.62.22-1.2.61-1.64z" fill="#00C2CF"/>
                        <path d="M17.18 8.613L13.792 12l3.388 3.387 3.835-2.176c1.096-.622 1.096-1.636 0-2.258L17.18 8.613z" fill="#FFC800"/>
                        <path d="M13.792 12L3.61 1.814A2.08 2.08 0 0 1 4.793 1.5c.448 0 .897.124 1.298.352l11.089 6.761L13.792 12z" fill="#009DF8"/>
                        <path d="M13.792 12l3.388 3.387-11.09 6.76c-.4.229-.85.353-1.297.353a2.08 2.08 0 0 1-1.184-.314L13.792 12z" fill="#FF4B4B"/>
                    </svg>
                    <div class="playstore-text-group">
                        <span class="playstore-top"><?= htmlspecialchars(__t('wayuuglish-playstore-title')) ?></span>
                        <span class="playstore-brand"><?= htmlspecialchars(__t('wayuuglish-playstore-sub')) ?></span>
                    </div>
                    <span class="playstore-soon-badge"><?= htmlspecialchars(__t('wayuuglish-playstore-soon')) ?></span>
                </a>
            </div>
        </div>

        <div class="hero-illustration">
            <div class="mascot-container">
                <div class="floating-badge badge-top">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 23c-4.97 0-9-3.58-9-8 0-4.42 4.03-7.58 7.5-12.82.26-.39.84-.39 1.1 0C15.07 7.42 19 10.58 19 15c0 4.42-4.03 8-9 8zm0-18.06C8.89 9.87 5 12.44 5 15c0 3.31 3.13 6 7 6s7-2.69 7-6c0-2.56-3.89-5.13-7-10.06z"/>
                    </svg>
                    <span><?= htmlspecialchars(__t('wayuuglish-badge-streak')) ?></span>
                </div>
                
                <img src="assets/images/mascot.svg" alt="Flamenco Guajiro Mascot Wayuuglish" class="mascot-svg">
                
                <div class="floating-badge badge-bottom">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                    </svg>
                    <span><?= htmlspecialchars(__t('wayuuglish-badge-audio')) ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Method & Features Section (3D Chunky Cards) -->
<section class="section-snow" id="features">
    <div class="container">
        <h2 class="section-title"><?= htmlspecialchars(__t('wayuuglish-why-title')) ?></h2>
        <p class="section-subtitle">
            <?= htmlspecialchars(__t('wayuuglish-why-subtitle')) ?>
        </p>

        <div class="features-grid">
            <!-- Card 1: Blue Theme -->
            <div class="card card-theme-blue">
                <div class="card-header-row">
                    <div class="card-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
                            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
                        </svg>
                    </div>
                    <span class="card-tag-pill"><?= htmlspecialchars(__t('wayuuglish-feature1-tag')) ?></span>
                </div>

                <h3 class="card-title"><?= htmlspecialchars(__t('wayuuglish-feature1-title')) ?></h3>
                <p class="card-text"><?= htmlspecialchars(__t('wayuuglish-feature1-desc')) ?></p>
                
                <div class="card-pills-row">
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature1-pill1')) ?>
                    </span>
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature1-pill2')) ?>
                    </span>
                </div>
            </div>

            <!-- Card 2: Yellow Theme -->
            <div class="card card-theme-yellow">
                <div class="card-header-row">
                    <div class="card-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="3" ry="3"/>
                            <line x1="12" y1="18" x2="12.01" y2="18"/>
                        </svg>
                    </div>
                    <span class="card-tag-pill"><?= htmlspecialchars(__t('wayuuglish-feature2-tag')) ?></span>
                </div>

                <h3 class="card-title"><?= htmlspecialchars(__t('wayuuglish-feature2-title')) ?></h3>
                <p class="card-text"><?= htmlspecialchars(__t('wayuuglish-feature2-desc')) ?></p>
                
                <div class="card-pills-row">
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature2-pill1')) ?>
                    </span>
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature2-pill2')) ?>
                    </span>
                </div>
            </div>

            <!-- Card 3: Orange Theme -->
            <div class="card card-theme-orange">
                <div class="card-header-row">
                    <div class="card-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 11h4M8 9v4M15 12h.01M18 10h.01"/>
                            <rect x="2" y="6" width="20" height="12" rx="6"/>
                        </svg>
                    </div>
                    <span class="card-tag-pill"><?= htmlspecialchars(__t('wayuuglish-feature3-tag')) ?></span>
                </div>

                <h3 class="card-title"><?= htmlspecialchars(__t('wayuuglish-feature3-title')) ?></h3>
                <p class="card-text"><?= htmlspecialchars(__t('wayuuglish-feature3-desc')) ?></p>
                
                <div class="card-pills-row">
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature3-pill1')) ?>
                    </span>
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature3-pill2')) ?>
                    </span>
                </div>
            </div>

            <!-- Card 4: Purple Theme -->
            <div class="card card-theme-purple">
                <div class="card-header-row">
                    <div class="card-icon-box">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        </svg>
                    </div>
                    <span class="card-tag-pill"><?= htmlspecialchars(__t('wayuuglish-feature4-tag')) ?></span>
                </div>

                <h3 class="card-title"><?= htmlspecialchars(__t('wayuuglish-feature4-title')) ?></h3>
                <p class="card-text"><?= htmlspecialchars(__t('wayuuglish-feature4-desc')) ?></p>
                
                <div class="card-pills-row">
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature4-pill1')) ?>
                    </span>
                    <span class="card-micro-pill">
                        <span class="card-micro-dot"></span>
                        <?= htmlspecialchars(__t('wayuuglish-feature4-pill2')) ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Preview Section -->
<section class="section-white" id="demosection">
    <div class="container">
        <h2 class="section-title"><?= htmlspecialchars(__t('wayuuglish-demo-title')) ?></h2>
        <p class="section-subtitle">
            <?= htmlspecialchars(__t('wayuuglish-demo-subtitle')) ?>
        </p>

        <?php include_once __DIR__ . '/includes/preview-widget.php'; ?>
    </div>
</section>

<!-- Mobile App Teaser Section (Google Play Store) -->
<section class="section-snow" id="appsection">
    <div class="container">
        <div class="app-showcase-card">
            <div class="app-showcase-content">
                <span class="app-showcase-tag">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="5" y="2" width="14" height="20" rx="3" ry="3"/>
                        <line x1="12" y1="18" x2="12.01" y2="18"/>
                    </svg>
                    <span><?= htmlspecialchars(__t('wayuuglish-app-banner-tag')) ?></span>
                </span>
                
                <h3 class="app-showcase-title"><?= htmlspecialchars(__t('wayuuglish-app-banner-title')) ?></h3>
                <p class="app-showcase-desc"><?= htmlspecialchars(__t('wayuuglish-app-banner-desc')) ?></p>

                <div class="app-showcase-actions">
                    <a href="#appsection" class="btn-playstore" style="border-color: rgba(255,255,255,0.3); border-bottom-color: #000;">
                        <svg class="playstore-icon" viewBox="0 0 24 24">
                            <path d="M3.609 1.814L13.792 12 3.61 22.186a2.38 2.38 0 0 1-.61-1.64V3.454c0-.62.22-1.2.61-1.64z" fill="#00C2CF"/>
                            <path d="M17.18 8.613L13.792 12l3.388 3.387 3.835-2.176c1.096-.622 1.096-1.636 0-2.258L17.18 8.613z" fill="#FFC800"/>
                            <path d="M13.792 12L3.61 1.814A2.08 2.08 0 0 1 4.793 1.5c.448 0 .897.124 1.298.352l11.089 6.761L13.792 12z" fill="#009DF8"/>
                            <path d="M13.792 12l3.388 3.387-11.09 6.76c-.4.229-.85.353-1.297.353a2.08 2.08 0 0 1-1.184-.314L13.792 12z" fill="#FF4B4B"/>
                        </svg>
                        <div class="playstore-text-group">
                            <span class="playstore-top"><?= htmlspecialchars(__t('wayuuglish-playstore-title')) ?></span>
                            <span class="playstore-brand"><?= htmlspecialchars(__t('wayuuglish-playstore-sub')) ?></span>
                        </div>
                        <span class="playstore-soon-badge"><?= htmlspecialchars(__t('wayuuglish-playstore-soon')) ?></span>
                    </a>
                </div>
            </div>

            <div class="app-showcase-visual">
                <div class="phone-mockup-pill">
                    <img src="assets/images/mascot.svg" alt="Wayuuglish App Mascot" style="max-height: 140px; margin: 0 auto 12px auto;">
                    <div style="font-weight: 800; font-size: 16px; color: var(--color-primary);">Wayuuglish Android</div>
                    <div style="font-size: 12px; color: var(--color-slug); font-weight: 700; margin-top: 4px;">100% Offline Mode</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section (Placed seamlessly before FAQ) -->
<section class="section-white" id="team">
    <div class="container">
        <h2 class="section-title"><?= htmlspecialchars(__t('wayuuglish-team-title')) ?></h2>
        <p class="section-subtitle">
            <?= htmlspecialchars(__t('wayuuglish-team-subtitle')) ?>
        </p>

        <div class="team-grid">
            <!-- Team Member 1: Daniel Yepez Garces -->
            <div class="team-card">
                <div class="team-avatar-box team-avatar-blue">
                    DY
                </div>
                <span class="team-tag-pill" style="background: var(--color-primary-soft); color: var(--color-primary-dark);">
                    DEVELOPER
                </span>
                <h3 class="team-name">Daniel Yepez Garces</h3>
                <div class="team-role"><?= htmlspecialchars(__t('wayuuglish-team-role-dev')) ?></div>
                <p class="team-bio"><?= htmlspecialchars(__t('wayuuglish-team-bio-dev')) ?></p>
            </div>

            <!-- Team Member 2: Yanilis Romero -->
            <div class="team-card">
                <div class="team-avatar-box team-avatar-purple">
                    YR
                </div>
                <span class="team-tag-pill" style="background: var(--color-regalia-soft); color: var(--color-regalia-dark);">
                    PROJECT MANAGER
                </span>
                <h3 class="team-name">Yanilis Romero</h3>
                <div class="team-role"><?= htmlspecialchars(__t('wayuuglish-team-role-pm')) ?></div>
                <p class="team-bio"><?= htmlspecialchars(__t('wayuuglish-team-bio-pm')) ?></p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-snow">
    <div class="container">
        <h2 class="section-title"><?= htmlspecialchars(__t('wayuuglish-faq-title')) ?></h2>
        <p class="section-subtitle"><?= htmlspecialchars(__t('wayuuglish-faq-subtitle')) ?></p>

        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-question">
                    <span><?= htmlspecialchars(__t('wayuuglish-faq-q1')) ?></span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="faq-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <?= htmlspecialchars(__t('wayuuglish-faq-a1')) ?>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span><?= htmlspecialchars(__t('wayuuglish-faq-q2')) ?></span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="faq-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <?= htmlspecialchars(__t('wayuuglish-faq-a2')) ?>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span><?= htmlspecialchars(__t('wayuuglish-faq-q3')) ?></span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="faq-icon">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <?= htmlspecialchars(__t('wayuuglish-faq-a3')) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
