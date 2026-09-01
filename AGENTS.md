# AGENTS.md — Development Guidelines for Wayuuglish

Welcome AI agents and developers to the **Wayuuglish** codebase.

## 🎯 Mission & Identity
Wayuuglish is an interactive, gamified English learning platform tailored for indigenous communities, originating with the Wayuu people of La Guajira.

### Core Pillars
1. **Indigenous Cultural Respect:** Bridge indigenous languages (Wayuunaiki) directly to English without erasing native heritage.
2. **Accessible & Offline-First:** Must be lightweight and work in areas with low or no connectivity.
3. **Gamified & Cheerful:** Soft, tactile 3D interactions, friendly mascot (Flamenco Rosado with Wayuu Katsu hat), and daily streak mechanics.
4. **Clean Vector Icons:** Strict use of inline SVG vector graphics (no emojis in production UI).
5. **No 3rd-party Brand Mentions:** Follow `DESIGN.md` tokens exclusively without referencing external proprietary brand names.

---

## 🏗️ Architecture & Code Conventions

### Project Layout
```text
wayuuglishbackend/
├── index.php                 # Landing page & core sections
├── includes/
│   ├── header.php            # HTML head, favicon & responsive navbar
│   ├── footer.php            # Multi-column footer & copyright
│   ├── lang.php              # Multilingual dictionary & switcher logic (EN, ES, WAY)
│   └── preview-widget.php    # Interactive vocabulary module (Anaayawatchi)
├── assets/
│   ├── css/style.css         # Strict token-based styling & fluid responsive layout
│   ├── js/main.js            # TTS speech synthesis, quiz interaction & FAQ toggles
│   └── images/               # Vector SVG assets (mascot.svg, logo.svg)
├── DESIGN.md                 # Design tokens & component specifications
├── AGENTS.md                 # Agent guidelines
├── SKILLS.md                 # Project capabilities & specialized workflows
├── LICENSE                   # GNU GPLv3 + CC BY-SA 4.0
└── README.md                 # Quick start & documentation
```

### Guidelines for Agents Modifying Code
- **PHP Standards:** Pure, modern PHP 8.x with strict type hints, HTML escaping (`htmlspecialchars()`), and localized strings (`__t('key')`).
- **CSS Standards:** Use CSS Custom Properties defined in `:root` (`--color-primary`, `--radius-pill`, `--shadow-button`, etc.). Never hardcode random colors.
- **Multilingual Support:** Always add new copy keys to both `en` (default) and `es` in `includes/lang.php`.
- **Streaks & Progress:** Express streaks as consecutive daily achievements (e.g. *7-Day Streak* / *Racha de 7 días*).
- **Audio & Pronunciation:** Maintain Web Speech Synthesis API fallback in `main.js`.
