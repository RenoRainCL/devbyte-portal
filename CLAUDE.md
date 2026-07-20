# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

Landing page portal for the DEV-BYTE software suite. This is a pure PHP entry point that auto-detects which downstream applications are installed and routes users to them.

**Brand:** DEV-BYTE (web development house)
**Applications managed by this portal:**

| App slug | Folder | Brand | Domain |
|----------|--------|-------|--------|
| Property management | `sae/` | ADM-BYTE | Condominios, Ley 21.442 |
| Insurance brokerage | `insure/` | INSURE-BYTE | Corredoras, CMF |

## How the portal works

`index.php` is the only entry point. It runs two `is_dir()` + `file_exists()` checks at the top to determine installation state:

```php
$adm_installed    = is_dir(__DIR__ . '/sae')    && (file_exists('.../sae/index.php')    || ...);
$insure_installed = is_dir(__DIR__ . '/insure') && (file_exists('.../insure/index.php') || ...);
```

These booleans drive every conditional in the template: product card badge (`Operativo` vs `Próximamente`), CTA button (live link vs disabled state), and "coming soon" info panel. No database, no config file — state is derived entirely from directory presence.

## Serving locally

No build step. Serve the directory with PHP's built-in server:

```bash
php -S localhost:8080 -t /var/www/html/proyectos/public
```

Or configure Apache/Nginx to point `DocumentRoot` at this folder. The portal is a single file — `index.php`.

## Design system

All colors are defined as CSS custom properties in `index.php` (`<style>` block, `:root`):

| Variable | Value | Used for |
|----------|-------|---------|
| `--bg` | `#0b132b` | Page background — matches all three SVG logos |
| `--red` | `#ff4d6d` | DEV-BYTE accent |
| `--blue` | `#5c7aff` | DEV-BYTE secondary |
| `--teal` | `#00f5d4` | ADM-BYTE accent |
| `--gold` | `#ffb703` | INSURE-BYTE accent |

Typography: Montserrat (headings, brand) + Inter (body). Both loaded from Google Fonts.

## Assets

All three SVG logos are inline SVG files in the project root — keep them here so the portal and future sub-apps can reference them with relative paths:

- `dev-byte_logo.svg` — master brand
- `adm-byte_logo.svg` — ADM-BYTE product
- `insure-byte_logo.svg` — INSURE-BYTE product

## Adding a new app to the portal

1. Add a detection variable at the top of `index.php`.
2. Add a new `<article class="pcard ...">` block inside `.products-grid`.
3. Place the app in a subfolder matching the detection path.

## SEO notes

- `index.php` includes JSON-LD `Organization` schema with `hasOfferCatalog` for both products.
- Canonical URL is hardcoded to `https://dev-byte.lat/` — this is the live production domain (the `.cl` domain does not resolve yet). Update if `.cl` goes live and becomes canonical.
- `contacto@dev-byte.lat` is the contact email used across nav, hero and footer.
