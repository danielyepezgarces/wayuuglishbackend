# Wayuuglish — Style Reference
> A cheerful indigenous language learning platform wrapped in playful geometry and cultural pride.

**Theme:** light

Wayuuglish's visual identity radiates approachable warmth from a clean white canvas, punctuated by its vibrant medium sky blue (#009DF8) — a color symbolizing the open skies of La Guajira and clear communication. The typeface, Nunito (a rounded sans-serif with generous weight), projects friendly authority without intimidation. Surface depth is tactile and gamified: chunky cards float with physical 3D borders on Snow (#F7F7F7), while the primary blue pill buttons command interaction through sheer chromatic confidence. The palette extends into a vivid spectrum of warm and cool accents — Bee yellow, Fox orange, Cardinal red, Regalia purple — each tied to a gamification mechanic (daily streaks, XP, achievements). This is a design system that treats education as play: every component, from the rounded inputs to the progress indicators, carries a subtle softness that lowers the psychological barrier to engagement. The signature mascot is the Pink Flamingo of La Guajira wearing a traditional Wayuu woven hat (*Katsu*), anchoring the brand's personality in cultural delight.

## Tokens — Colors

| Name | Value | Token | Role |
|------|-------|-------|------|
| White | `#FFFFFF` | `--color-white` | Primary page background, card surfaces, button text on primary blue |
| Snow | `#F7F7F7` | `--color-snow` | Secondary background, section fills, inactive states |
| Eel | `#3C3C3C` | `--color-eel` | Primary text, headings, body copy |
| Eel Light | `#4B4B4B` | `--color-eel-light` | Slightly lighter body text variant |
| Slug | `#777777` | `--color-slug` | Secondary text, placeholder text, muted labels |
| Swan | `#E5E5E5` | `--color-swan` | Borders, dividers, disabled state backgrounds |
| Swan Dark | `#CECECE` | `--color-swan-dark` | Inactive 3D borders |
| Primary Blue | `#009DF8` | `--color-primary` | Primary action buttons, active states, progress, links |
| Primary Hover | `#0088DE` | `--color-primary-hover` | Hover state for primary blue elements |
| Primary Dark | `#006CB3` | `--color-primary-dark` | Pressed/active state & 3D bottom depth for primary elements |
| Primary Soft | `#E6F4FF` | `--color-primary-soft` | Soft blue containers, badge backgrounds |
| Bee | `#FFC800` | `--color-bee` | Streak indicators, XP badges, yellow accent, warning |
| Bee Dark | `#D4A300` | `--color-bee-dark` | 3D depth for yellow elements |
| Fox | `#FF9600` | `--color-fox` | Streak fire, orange accent, animated highlights |
| Cardinal | `#FF4B4B` | `--color-cardinal` | Error states, heart indicators, destructive actions |
| Macaw | `#00C2CF` | `--color-macaw` | Info indicators, links, teal accent |
| Regalia | `#CE82FF` | `--color-regalia` | Super badges, premium highlights, purple accents |

### Decorative / Gradients

| Name | Value | Token | Role |
|------|-------|-------|------|
| Primary Gradient | `linear-gradient(180deg, #009DF8 0%, #006CB3 100%)` | `--gradient-primary` | Primary button gradient, progress fills |
| Super Gradient | `linear-gradient(135deg, #CE82FF 0%, #009DF8 100%)` | `--gradient-super` | Super/Premium badges and accents |
| Warm Gradient | `linear-gradient(135deg, #FF9600 0%, #FFC800 100%)` | `--gradient-warm` | Streak fire, warm decorative backgrounds |

## Tokens — Typography

### Primary Display & Heading Typeface · Nunito Bold
- **Font Family:** 'Nunito', sans-serif
- **Weights:** 700, 800
- **Sizes:** 22px, 28px, 32px, 40px
- **Line height:** 1.15 to 1.2
- **Letter spacing:** -0.02em at large sizes
- **Role:** Primary headings, section titles, hero text. Rounded letterforms reinforce the approachable personality.

### Body & UI Typeface · Nunito Regular / SemiBold
- **Font Family:** 'Nunito', sans-serif
- **Weights:** 400, 600, 700
- **Sizes:** 12px, 13px, 14px, 15px, 16px, 19px
- **Line height:** 1.5 to 1.6
- **Letter spacing:** -0.01em
- **Role:** Body text, buttons, navigation, labels, descriptions.

### Type Scale

| Role | Size (Fluid) | Line Height | Letter Spacing | Token |
|------|--------------|-------------|----------------|-------|
| display | `clamp(26px, 4.5vw, 40px)` | 1.18 | -0.02em | `--text-display` |
| heading-lg | `clamp(22px, 3.5vw, 30px)` | 1.2 | -0.02em | `--text-heading-lg` |
| heading | `clamp(19px, 2.5vw, 22px)` | 1.25 | -0.01em | `--text-heading` |
| body-lg | `clamp(16px, 2.2vw, 19px)` | 1.5 | — | `--text-body-lg` |
| body | 16px | 1.5 | -0.01em | `--text-body` |
| body-sm | 15px | 1.6 | -0.01em | `--text-body-sm` |
| body-xs | 13px | 1.5 | -0.01em | `--text-body-xs` |
| caption | 12px | 1.5 | — | `--text-caption` |

## Tokens — Spacing & Shapes

**Density:** comfortable, playful & touch-optimized

### Spacing Scale

| Name | Value | Token |
|------|-------|-------|
| 4 | 4px | `--spacing-4` |
| 8 | 8px | `--spacing-8` |
| 12 | 12px | `--spacing-12` |
| 16 | 16px | `--spacing-16` |
| 20 | 20px | `--spacing-20` |
| 24 | 24px | `--spacing-24` |
| 32 | 32px | `--spacing-32` |
| 48 | 48px | `--spacing-48` |
| 64 | 64px | `--spacing-64` |
| 80 | 80px | `--spacing-80` |

### Border Radius

| Name | Value | Token |
|------|-------|-------|
| sm | 8px | `--radius-sm` |
| md | 12px | `--radius-md` |
| lg | 16px | `--radius-lg` |
| xl | 20px | `--radius-xl` |
| 2xl | 24px | `--radius-2xl` |
| pill | 9999px | `--radius-pill` |

### Shadows & Physical 3D Depths

| Name | Value | Token |
|------|-------|-------|
| shadow-sm | `0 2px 4px rgba(0, 0, 0, 0.04)` | `--shadow-sm` |
| shadow-md | `0 4px 12px rgba(0, 0, 0, 0.06)` | `--shadow-md` |
| shadow-lg | `0 8px 24px rgba(0, 0, 0, 0.08)` | `--shadow-lg` |
| shadow-button | `0 4px 0 #006CB3` | `--shadow-button` |
| shadow-button-pressed | `0 2px 0 #006CB3` | `--shadow-button-pressed` |

## Components

### 1. Primary Action Button
- **Role:** Main Call to Action (CTA)
- **Background:** Medium Sky Blue (`#009DF8`), Text: White (`#FFFFFF`).
- **Shape:** Full pill radius (`9999px`).
- **3D Bottom Depth:** `0 4px 0 #006CB3`.
- **Hover:** Background shifts to `#0088DE`, `transform: translateY(2px)`, shadow shifts to `0 2px 0 #006CB3`.
- **Active:** `transform: translateY(4px)`, shadow flattens.

### 2. Secondary Action Button
- **Role:** Outlined action
- **Background:** Transparent, Text: `#009DF8`, Border: `2px solid #E5E5E5`, Bottom border: `4px solid #E5E5E5`.
- **Hover:** Background `#E6F4FF`, Border color `#009DF8`, Bottom border `#006CB3`.

### 3. Google Play Store 3D Button
- **Role:** App Store download teaser
- **Background:** Dark slate (`#18181B`), Border-bottom: `4px solid #09090B`, Border-radius: `20px`.
- **Contains:** Google Play vector logo + "GET IT ON / DISPONIBLE PRONTO EN" + "Coming Soon / Próximamente" pill badge.

### 4. Chunky 3D Cards
- **Role:** Feature and modular educational presentation
- **Background:** White (`#FFFFFF`).
- **Borders:** `2.5px solid #E5E5E5` with `border-bottom: 6px solid #E5E5E5`.
- **Border-radius:** `24px`.
- **Features:** 64px rounded squircle icon container with themed pastel fills + Category pill badge + Micro feature pills with theme dots.
- **Hover:** `transform: translateY(-4px)`, `border-bottom: 10px solid var(--card-border-dark)`.

### 5. Interactive Flashcard & Quiz Widget
- **Role:** Vocabulary preview component
- **Contains:** Wayuu word header (`Anaayawatchi`), audio TTS trigger button, Spanish translation, English question, and 3D selectable option pills.

## Mascot & Iconography

- **Mascot:** El Flamenco Rosado de La Guajira (*Phoenicopterus ruber*), wearing a traditional Wayuu woven hat (*Katsu*) with a colorful geometric band and tassel.
- **Icons:** 100% clean SVG vector icons (no emojis).
- **Streaks:** Expressed as daily consecutive counts (e.g. *7-Day Streak* / *Racha de 7 días*).
