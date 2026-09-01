# SKILLS.md — Wayuuglish Specialized Skills & Capabilities

This document lists the technical capabilities, domain expertise, and tools used across the **Wayuuglish** platform.

---

## 1. 🎨 Design System & Frontend UI (Tokens & 3D Tactile Layout)
- **Primary Aesthetic:** Playful, rounded geometric interfaces with physical 3D button depths.
- **Palette Management:** Medium Sky Blue (`#009DF8`), Bee Yellow (`#FFC800`), Fox Orange (`#FF9600`), Cardinal Red (`#FF4B4B`), Regalia Purple (`#CE82FF`).
- **Fluid Responsiveness:** Modern `clamp()` typography, mobile-first flexbox/grid layout, touch targets >= 48px.
- **Vector Iconography:** Inline SVG paths for resolution independence and high performance on low-end devices.

---

## 2. 🌐 Multilingual & Ethno-linguistic Localization
- **Supported Languages:**
  - `EN`: English (Default international lingua franca)
  - `ES`: Spanish (Regional language)
  - `WAY`: Wayuunaiki (Indigenous maternal language of the Wayuu people — *Coming Soon*)
- **Dictionary Architecture:** Centralized PHP associative array schema in `includes/lang.php` with fallback translation helpers `__t($key)`.

---

## 3. 🔊 Audio & Speech Synthesis
- **Web Speech Synthesis API:** Pronunciation playback with localized voice rate tuning (`rate: 0.9` for language learners).
- **Phonetic Bridge:** Connecting indigenous vocabularies (*Anaayawatchi* -> *Thank you*) with audio-visual reinforcement.

---

## 4. 📴 Offline-First Architecture & App Readiness
- **Zero Heavy Dependencies:** Vanilla JavaScript, pure CSS, no bloated JS frameworks.
- **Lightweight Assets:** Pure vector SVGs, minimal network footprint.
- **App Store Preparation:** Google Play Store integration teaser with dedicated Android offline learning showcase.

---

## 5. ⚖️ Open Source & IP Compliance
- **Code Licensing:** GNU General Public License v3.0 (GPLv3) preserving author copyright while guaranteeing community software freedom.
- **Media & Cultural Materials:** Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0).
