<?php
/**
 * Footer Template - Wayuuglish
 * Multi-column structured footer
 * MediaWiki-style i18n
 */
?>
    <!-- Multi-column Footer -->
    <footer class="footer">
        <div class="container">
            
            <!-- 4-Column Footer Navigation Grid -->
            <div class="footer-grid">
                
                <!-- Column 1: Brand & Status -->
                <div class="footer-col footer-col-brand">
                    <a href="index.php" class="brand-logo" style="margin-bottom: 12px;">
                        <img src="assets/images/logo.svg" alt="Wayuuglish" class="brand-icon">
                        <span>Wayuuglish</span>
                    </a>
                    <p><?= htmlspecialchars(__t('wayuuglish-footer-mission')) ?></p>
                    <div class="footer-status-pill">
                        <span class="dot-live" style="background-color: #4CAF00; box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.3);"></span>
                        <span><?= htmlspecialchars(__t('wayuuglish-footer-status')) ?></span>
                    </div>
                </div>

                <!-- Column 2: Program Modules -->
                <div class="footer-col">
                    <h5 class="footer-col-title"><?= htmlspecialchars(__t('wayuuglish-footer-col-prog')) ?></h5>
                    <ul class="footer-links-list">
                        <li><a href="#demosection" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-prog-1')) ?></a></li>
                        <li><a href="#demosection" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-prog-2')) ?></a></li>
                        <li><a href="#features" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-prog-3')) ?></a></li>
                        <li><a href="#appsection" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-prog-4')) ?></a></li>
                    </ul>
                </div>

                <!-- Column 3: Community & Culture -->
                <div class="footer-col">
                    <h5 class="footer-col-title"><?= htmlspecialchars(__t('wayuuglish-footer-col-comm')) ?></h5>
                    <ul class="footer-links-list">
                        <li><a href="#team" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-team-title')) ?></a></li>
                        <li><a href="#features" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-comm-1')) ?></a></li>
                        <li><a href="#features" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-comm-2')) ?></a></li>
                        <li><a href="#features" class="footer-link">&bull; <?= htmlspecialchars(__t('wayuuglish-footer-comm-3')) ?></a></li>
                    </ul>
                </div>

                <!-- Column 4: Languages & Switcher -->
                <div class="footer-col">
                    <h5 class="footer-col-title"><?= htmlspecialchars(__t('wayuuglish-footer-col-lang')) ?></h5>
                    <ul class="footer-links-list">
                        <li>
                            <a href="?lang=en" class="footer-link" style="<?= $lang === 'en' ? 'color: var(--color-primary); font-weight: 800;' : '' ?>">
                                🇬🇧 English <?= $lang === 'en' ? '✓' : '' ?>
                            </a>
                        </li>
                        <li>
                            <a href="?lang=es" class="footer-link" style="<?= $lang === 'es' ? 'color: var(--color-primary); font-weight: 800;' : '' ?>">
                                🇨🇴 Español <?= $lang === 'es' ? '✓' : '' ?>
                            </a>
                        </li>
                        <li>
                            <span class="footer-link" style="opacity: 0.6; cursor: default;">
                                ☀️ Wayuunaiki (Soon)
                            </span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Sub-Footer Bar -->
            <div class="sub-footer">
                <div class="sub-footer-text">
                    &copy; <?= date('Y') ?> <strong>Wayuuglish</strong>. <?= htmlspecialchars(__t('wayuuglish-rights')) ?>
                </div>

                <div class="sub-footer-text" style="display: flex; align-items: center; gap: 6px;">
                    <span><?= htmlspecialchars(__t('wayuuglish-footer-made-with')) ?></span>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" style="color: var(--color-cardinal);">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>

                <div class="sub-footer-socials">
                    <a href="https://github.com/danielyepezgarces/wayuuglishbackend" target="_blank" rel="noopener" class="social-pill" title="GitHub" aria-label="GitHub">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
