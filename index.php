<?php
// Detección de aplicaciones instaladas
$adm_installed    = is_dir(__DIR__ . '/sae')    && (file_exists(__DIR__ . '/sae/index.php')    || file_exists(__DIR__ . '/sae/index.html'));
$insure_installed = is_dir(__DIR__ . '/insure') && (file_exists(__DIR__ . '/insure/index.php') || file_exists(__DIR__ . '/insure/index.html'));
?>
<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV-BYTE — Software Profesional para Chile</title>

    <!-- SEO -->
    <meta name="description" content="DEV-BYTE desarrolla plataformas digitales especializadas para la administración de condominios y corredoras de seguros en Chile. Tecnología hecha en Chile, para Chile.">
    <meta name="keywords" content="software administración condominios Chile, gestión edificios, Ley 21442, corredoras seguros software, ADM-BYTE, INSURE-BYTE, DEV-BYTE, gastos comunes, pólizas seguros, SII, CMF">
    <meta name="author" content="DEV-BYTE Web Development">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
    <meta name="geo.region" content="CL">
    <meta name="geo.country" content="Chile">
    <link rel="canonical" href="https://dev-byte.lat/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CL">
    <meta property="og:site_name" content="DEV-BYTE">
    <meta property="og:title" content="DEV-BYTE — Software Profesional para Chile">
    <meta property="og:description" content="Plataformas digitales especializadas para administración de propiedades y servicios de seguros. Tecnología hecha en Chile, para Chile.">
    <meta property="og:image" content="https://dev-byte.lat/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://dev-byte.lat/">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DEV-BYTE — Software Profesional para Chile">
    <meta name="twitter:description" content="Plataformas digitales especializadas para la gestión de condominios y corredoras de seguros en Chile.">
    <meta name="twitter:image" content="https://dev-byte.lat/og-image.png">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "DEV-BYTE",
      "description": "Desarrollo de software especializado para gestión de condominios y corredoras de seguros en Chile",
      "url": "https://dev-byte.lat",
      "logo": "https://dev-byte.lat/dev-byte_logo.svg",
      "areaServed": { "@type": "Country", "name": "Chile" },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Software Empresarial",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "ADM-BYTE",
            "description": "Sistema de administración de condominios y edificios conforme a Ley 21.442"
          },
          {
            "@type": "Offer",
            "name": "INSURE-BYTE",
            "description": "Plataforma de gestión para corredoras de seguros registradas en la CMF"
          }
        ]
      }
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="dev-byte_logo.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Inter:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:           #0b132b;
            --bg2:          #0f1a38;
            --surface:      #111b38;
            --surface2:     #18224a;
            --border:       rgba(92, 122, 255, 0.14);
            --border-hover: rgba(92, 122, 255, 0.35);
            --text:         #f0f4ff;
            --text-muted:   #7a90c8;
            --text-dim:     #3e5080;
            --red:          #ff4d6d;
            --blue:         #5c7aff;
            --teal:         #00f5d4;
            --gold:         #ffb703;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ── NAV ──────────────────────────────── */
        nav {
            position: fixed;
            inset: 0 0 auto 0;
            z-index: 100;
            height: 68px;
            padding: 0 2.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(11, 19, 43, 0.88);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--border);
        }

        .nav-logo { height: 38px; width: auto; display: block; }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            letter-spacing: 0.03em;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: var(--text); }

        .nav-contact {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.5rem 1.125rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            color: var(--text-muted) !important;
            font-size: 0.8125rem !important;
            transition: border-color 0.2s, color 0.2s !important;
        }
        .nav-contact:hover { border-color: var(--border-hover); color: var(--text) !important; }

        /* ── HERO ─────────────────────────────── */
        .hero {
            min-height: 100vh;
            padding: 110px 2.5rem 80px;
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            align-items: center;
            gap: 4rem;
            max-width: 1280px;
            margin: 0 auto;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.625rem;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 1.5rem;
        }
        .hero-eyebrow::before {
            content: '';
            width: 22px; height: 2px;
            background: var(--red);
            border-radius: 1px;
            display: inline-block;
        }

        .hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(2.4rem, 3.8vw, 3.75rem);
            font-weight: 800;
            line-height: 1.08;
            letter-spacing: -0.025em;
            margin-bottom: 1.5rem;
        }

        .hero h1 em {
            font-style: normal;
            color: var(--blue);
        }

        .hero-desc {
            font-size: 1.0625rem;
            color: var(--text-muted);
            line-height: 1.72;
            max-width: 500px;
            margin-bottom: 2.5rem;
            font-weight: 300;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-red {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.75rem;
            background: var(--red);
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            border-radius: 8px;
            transition: background 0.2s, transform 0.15s;
            letter-spacing: 0.01em;
        }
        .btn-red:hover { background: #e6304a; transform: translateY(-1px); }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.25rem;
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: color 0.2s;
        }
        .btn-ghost:hover { color: var(--text); }

        /* code block */
        .hero-visual {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .code-card {
            width: 100%;
            max-width: 460px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
        }

        .code-titlebar {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.25rem;
            border-bottom: 1px solid var(--border);
            background: var(--surface2);
        }

        .dot { width: 10px; height: 10px; border-radius: 50%; flex-shrink: 0; }
        .d-r { background: #ff5f57; }
        .d-y { background: #febc2e; }
        .d-g { background: #28c840; }

        .code-fname {
            margin-left: 0.5rem;
            font-size: 0.72rem;
            color: var(--text-dim);
            font-family: 'Courier New', monospace;
        }

        .code-body {
            padding: 1.5rem;
            font-family: 'Courier New', monospace;
            font-size: 0.8125rem;
            line-height: 1.9;
        }

        .cl { display: flex; gap: 1rem; }
        .ln { color: var(--text-dim); min-width: 1.4rem; text-align: right; user-select: none; }
        .kw { color: var(--blue); }
        .st { color: var(--teal); }
        .fn { color: var(--red); }
        .cm { color: var(--text-dim); font-style: italic; }
        .vr { color: var(--gold); }

        /* ── STATS BAR ────────────────────────── */
        .stats-bar {
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            background: var(--surface);
        }

        .stats-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1.5rem 2.5rem;
            display: flex;
            justify-content: space-around;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .stat { text-align: center; }

        .stat-n {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.625rem;
            font-weight: 800;
            line-height: 1;
            color: var(--text);
        }
        .stat-n b { color: var(--red); font-weight: 900; }

        .stat-l {
            font-size: 0.775rem;
            color: var(--text-muted);
            margin-top: 0.3rem;
            letter-spacing: 0.03em;
        }

        /* ── PRODUCTS ─────────────────────────── */
        .products {
            padding: 100px 2.5rem;
            max-width: 1280px;
            margin: 0 auto;
        }

        .sec-tag {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--blue);
            margin-bottom: 0.875rem;
        }

        .sec-title {
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(1.625rem, 2.8vw, 2.375rem);
            font-weight: 800;
            letter-spacing: -0.02em;
            line-height: 1.12;
            margin-bottom: 0.875rem;
        }

        .sec-sub {
            color: var(--text-muted);
            font-size: 1rem;
            max-width: 540px;
            line-height: 1.65;
            margin-bottom: 3.5rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        /* product card */
        .pcard {
            border-radius: 16px;
            border: 1px solid var(--border);
            background: var(--surface);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: border-color 0.28s, transform 0.28s;
        }
        .pcard:hover { transform: translateY(-4px); }
        .pcard.adm:hover  { border-color: rgba(0, 245, 212, 0.3); }
        .pcard.ins:hover  { border-color: rgba(255, 183, 3, 0.3); }

        .pcard-head {
            padding: 1.875rem 1.875rem 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 1rem;
        }

        .pcard-logo { height: 48px; width: auto; }

        .pcard-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-top: 0.625rem;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.28rem 0.75rem;
            border-radius: 100px;
            font-size: 0.67rem;
            font-weight: 700;
            letter-spacing: 0.09em;
            text-transform: uppercase;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .badge-dot { width: 6px; height: 6px; border-radius: 50%; background: currentColor; }

        .b-live  { background: rgba(0,245,212,.08); color: var(--teal); border: 1px solid rgba(0,245,212,.22); }
        .b-live  .badge-dot { animation: blink 1.6s infinite; }
        .b-soon  { background: rgba(255,183,3,.08); color: var(--gold); border: 1px solid rgba(255,183,3,.22); }

        @keyframes blink { 0%,100%{opacity:1} 50%{opacity:.25} }

        .pcard-body {
            padding: 1.75rem 1.875rem;
            flex: 1;
        }

        .soon-note {
            padding: 0.875rem 1.125rem;
            border-left: 2.5px solid var(--gold);
            background: rgba(255,183,3,.05);
            border-radius: 0 6px 6px 0;
            margin-bottom: 1.5rem;
        }
        .soon-note p {
            font-size: 0.8rem;
            color: rgba(255,183,3,.8);
            line-height: 1.55;
        }

        .soon-note.adm-note { border-left-color: var(--teal); background: rgba(0,245,212,.04); }
        .soon-note.adm-note p { color: rgba(0,245,212,.75); }

        .pdesc {
            font-size: 0.9375rem;
            color: var(--text-muted);
            line-height: 1.68;
            margin-bottom: 1.75rem;
        }
        .pdesc strong { color: var(--text); font-weight: 600; }

        .feat-grid {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.55rem;
            margin-bottom: 0;
        }

        .feat-grid li {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            font-size: 0.8125rem;
            color: var(--text-muted);
            line-height: 1.4;
        }

        .fi {
            width: 15px; height: 15px;
            border-radius: 3px;
            flex-shrink: 0;
            margin-top: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 7px;
            font-weight: 900;
        }
        .adm .fi { background: rgba(0,245,212,.12); color: var(--teal); }
        .ins .fi  { background: rgba(255,183,3,.12); color: var(--gold); }

        .pcard-foot {
            padding: 1.125rem 1.875rem;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.65rem 1.375rem;
            border-radius: 7px;
            font-weight: 700;
            font-size: 0.845rem;
            text-decoration: none;
            letter-spacing: 0.01em;
            transition: opacity 0.2s, transform 0.15s;
        }
        .cta:hover { opacity: 0.88; transform: translateX(2px); }

        .cta-adm  { background: var(--teal); color: #0b132b; }
        .cta-ins  { background: var(--gold); color: #0b132b; }

        .cta-soon {
            padding: 0.65rem 1.375rem;
            border-radius: 7px;
            font-size: 0.845rem;
            font-weight: 500;
            background: var(--surface2);
            color: var(--text-dim);
            cursor: default;
        }

        .foot-meta {
            font-size: 0.75rem;
            color: var(--text-dim);
            text-align: right;
        }

        /* ── TECH SECTION ─────────────────────── */
        .tech {
            background: var(--surface);
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            padding: 90px 2.5rem;
        }

        .tech-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: start;
        }

        .tech-left h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(1.5rem, 2.4vw, 2rem);
            font-weight: 800;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }

        .tech-left p {
            color: var(--text-muted);
            font-size: 0.9375rem;
            line-height: 1.72;
            margin-bottom: 1.25rem;
        }

        .pillars {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.875rem;
            margin-top: 2rem;
        }

        .pillar {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 1.125rem 1.25rem;
            transition: border-color 0.2s;
        }
        .pillar:hover { border-color: var(--border-hover); }

        .pillar-ico {
            font-size: 1.25rem;
            display: block;
            margin-bottom: 0.5rem;
        }

        .pillar h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.8125rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
            color: var(--text);
        }

        .pillar p {
            font-size: 0.76rem !important;
            color: var(--text-dim) !important;
            line-height: 1.5 !important;
            margin-bottom: 0 !important;
        }

        .stack-list {
            display: flex;
            flex-direction: column;
            gap: 0.625rem;
        }

        .stack-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.8rem 1.125rem;
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: border-color 0.2s;
        }
        .stack-row:hover { border-color: var(--border-hover); }

        .sl { font-size: 0.8rem; color: var(--text-muted); font-weight: 500; }
        .sr { font-size: 0.75rem; color: var(--blue); font-weight: 600; letter-spacing: 0.03em; }

        /* ── FOOTER ───────────────────────────── */
        footer {
            padding: 2.75rem 2.5rem;
            border-top: 1px solid var(--border);
        }

        .footer-inner {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .footer-logo { height: 30px; width: auto; }

        .footer-copy { font-size: 0.785rem; color: var(--text-dim); }

        .footer-nav {
            list-style: none;
            display: flex;
            gap: 1.75rem;
        }
        .footer-nav a {
            font-size: 0.785rem;
            color: var(--text-dim);
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-nav a:hover { color: var(--text-muted); }

        /* ── RESPONSIVE ───────────────────────── */
        @media (max-width: 1024px) {
            .hero { gap: 2.5rem; }
        }

        @media (max-width: 860px) {
            nav { padding: 0 1.25rem; }
            .nav-links { display: none; }

            .hero {
                grid-template-columns: 1fr;
                padding: 100px 1.25rem 60px;
            }
            .hero-visual { display: none; }

            .stats-inner { padding: 1.25rem; justify-content: space-between; }

            .products { padding: 64px 1.25rem; }
            .products-grid { grid-template-columns: 1fr; }

            .tech { padding: 64px 1.25rem; }
            .tech-inner { grid-template-columns: 1fr; gap: 2.5rem; }

            .pillars { grid-template-columns: 1fr 1fr; }

            footer { padding: 2rem 1.25rem; }
            .footer-inner { flex-direction: column; align-items: flex-start; gap: 0.875rem; }
        }

        @media (max-width: 540px) {
            .hero h1 { font-size: 2.1rem; }
            .feat-grid { grid-template-columns: 1fr; }
            .pillars { grid-template-columns: 1fr; }
            .pcard-head { flex-direction: column; gap: 0.75rem; }
        }
    </style>
</head>
<body>

<!-- ═══════════════════════════════════
     NAVIGATION
════════════════════════════════════ -->
<nav role="navigation" aria-label="Navegación principal">
    <a href="/" aria-label="DEV-BYTE — inicio">
        <img src="dev-byte_logo.svg" alt="DEV-BYTE" class="nav-logo">
    </a>
    <ul class="nav-links">
        <li><a href="#plataformas">Plataformas</a></li>
        <li><a href="#tecnologia">Tecnología</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="mailto:contacto@dev-byte.lat" class="nav-contact">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Contacto
        </a></li>
    </ul>
</nav>


<!-- ═══════════════════════════════════
     HERO
════════════════════════════════════ -->
<section class="hero" aria-labelledby="hero-title">
    <div class="hero-content">
        <div class="hero-eyebrow">Software hecho en Chile</div>
        <h1 id="hero-title">Soluciones digitales para <em>industrias que Chile necesita</em></h1>
        <p class="hero-desc">
            Desarrollamos plataformas especializadas para la administración de condominios
            y corredoras de seguros. Software pensado para el mercado chileno, con cumplimiento
            normativo desde el diseño y sin dependencias externas innecesarias.
        </p>
        <div class="hero-actions">
            <a href="#plataformas" class="btn-red">
                Explorar plataformas
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="mailto:contacto@dev-byte.lat" class="btn-ghost">
                Hablar con el equipo
            </a>
        </div>
    </div>

    <div class="hero-visual" aria-hidden="true">
        <div class="code-card">
            <div class="code-titlebar">
                <span class="dot d-r"></span>
                <span class="dot d-y"></span>
                <span class="dot d-g"></span>
                <span class="code-fname">platform.bootstrap.php</span>
            </div>
            <div class="code-body">
                <div class="cl"><span class="ln">1</span><span class="cm">// DEV-BYTE — Platform Bootstrap</span></div>
                <div class="cl"><span class="ln">2</span><span></span></div>
                <div class="cl"><span class="ln">3</span><span><span class="kw">$apps</span> = [</span></div>
                <div class="cl"><span class="ln">4</span><span>&nbsp;&nbsp;<span class="st">'sae'</span>    =&gt; <span class="st">'ADM-BYTE'</span>,</span></div>
                <div class="cl"><span class="ln">5</span><span>&nbsp;&nbsp;<span class="st">'insure'</span> =&gt; <span class="st">'INSURE-BYTE'</span>,</span></div>
                <div class="cl"><span class="ln">6</span><span>];</span></div>
                <div class="cl"><span class="ln">7</span><span></span></div>
                <div class="cl"><span class="ln">8</span><span><span class="kw">foreach</span> (<span class="vr">$apps</span> <span class="kw">as</span> <span class="vr">$path</span> =&gt; <span class="vr">$name</span>) {</span></div>
                <div class="cl"><span class="ln">9</span><span>&nbsp;&nbsp;<span class="fn">deploy</span>(<span class="vr">$name</span>, <span class="vr">$path</span>);</span></div>
                <div class="cl"><span class="ln">10</span><span>}</span></div>
                <div class="cl"><span class="ln">11</span><span></span></div>
                <div class="cl"><span class="ln">12</span><span><span class="cm">// Building Chile's digital future</span></span></div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════
     STATS BAR
════════════════════════════════════ -->
<div class="stats-bar" aria-hidden="true">
    <div class="stats-inner">
        <div class="stat">
            <div class="stat-n">2<b>+</b></div>
            <div class="stat-l">Plataformas especializadas</div>
        </div>
        <div class="stat">
            <div class="stat-n">100<b>%</b></div>
            <div class="stat-l">Normativa chilena</div>
        </div>
        <div class="stat">
            <div class="stat-n">OWASP</div>
            <div class="stat-l">Seguridad de referencia</div>
        </div>
        <div class="stat">
            <div class="stat-n">PHP<b>+</b>MVC</div>
            <div class="stat-l">Arquitectura probada</div>
        </div>
    </div>
</div>


<!-- ═══════════════════════════════════
     PLATFORMS
════════════════════════════════════ -->
<section class="products" id="plataformas" aria-labelledby="prod-title">
    <div class="sec-tag">Ecosistema DEV-BYTE</div>
    <h2 class="sec-title" id="prod-title">Dos plataformas.<br>Un solo estándar de calidad.</h2>
    <p class="sec-sub">
        Cada producto está construido para el contexto regulatorio y operativo de Chile,
        con flujos de trabajo validados por profesionales del sector.
    </p>

    <div class="products-grid">

        <!-- ╔══════════════ ADM-BYTE ══════════════╗ -->
        <article class="pcard adm" aria-label="ADM-BYTE — Administración de condominios">
            <div class="pcard-head">
                <div>
                    <img src="adm-byte_logo.svg" alt="ADM-BYTE Property Management" class="pcard-logo">
                    <h3 class="pcard-name">ADM-BYTE</h3>
                </div>
                <?php if ($adm_installed): ?>
                    <span class="badge b-live"><span class="badge-dot"></span>Operativo</span>
                <?php else: ?>
                    <span class="badge b-soon"><span class="badge-dot"></span>Próximamente</span>
                <?php endif; ?>
            </div>

            <div class="pcard-body">
                <?php if (!$adm_installed): ?>
                <div class="soon-note adm-note">
                    <p>Esta plataforma está en preparación final. Las funcionalidades descritas a continuación representan el alcance completo del sistema al momento del lanzamiento.</p>
                </div>
                <?php endif; ?>

                <p class="pdesc">
                    Sistema integral de administración de condominios y edificios residenciales,
                    diseñado conforme a la <strong>Ley 21.442</strong> de Copropiedad Inmobiliaria.
                    Digitaliza la operación completa: desde la gestión de cuotas hasta la rendición
                    de cuentas ante la Asamblea de Copropietarios, con una app móvil complementaria
                    para residentes y conserjes.
                </p>

                <ul class="feat-grid" aria-label="Funcionalidades ADM-BYTE">
                    <li><span class="fi">✦</span>Gastos comunes y prorrateo</li>
                    <li><span class="fi">✦</span>Conciliación bancaria CSV/XLSX</li>
                    <li><span class="fi">✦</span>App móvil iOS/Android + push</li>
                    <li><span class="fi">✦</span>Asamblea de copropietarios</li>
                    <li><span class="fi">✦</span>Remuneraciones — Previred y BHE</li>
                    <li><span class="fi">✦</span>Multi-torre por condominio</li>
                    <li><span class="fi">✦</span>Chatbot IA (Gemini)</li>
                    <li><span class="fi">✦</span>Auditoría y bitácora completa</li>
                </ul>
            </div>

            <div class="pcard-foot">
                <?php if ($adm_installed): ?>
                    <a href="./sae/" class="cta cta-adm" aria-label="Acceder a ADM-BYTE">
                        Ingresar al sistema
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <span class="foot-meta">Condominios · Edificios</span>
                <?php else: ?>
                    <span class="cta-soon">En desarrollo</span>
                    <span class="foot-meta">Disponible muy pronto</span>
                <?php endif; ?>
            </div>
        </article>
        <!-- ╚══════════════════════════════════════╝ -->


        <!-- ╔════════════ INSURE-BYTE ═════════════╗ -->
        <article class="pcard ins" aria-label="INSURE-BYTE — Corredoras de seguros">
            <div class="pcard-head">
                <div>
                    <img src="insure-byte_logo.svg" alt="INSURE-BYTE Insurance Services" class="pcard-logo">
                    <h3 class="pcard-name">INSURE-BYTE</h3>
                </div>
                <?php if ($insure_installed): ?>
                    <span class="badge b-live"><span class="badge-dot"></span>Operativo</span>
                <?php else: ?>
                    <span class="badge b-soon"><span class="badge-dot"></span>Próximamente</span>
                <?php endif; ?>
            </div>

            <div class="pcard-body">
                <?php if (!$insure_installed): ?>
                <div class="soon-note">
                    <p>Plataforma en desarrollo. La descripción y módulos presentados corresponden al alcance funcional completo previsto para el lanzamiento.</p>
                </div>
                <?php endif; ?>

                <p class="pdesc">
                    Plataforma de gestión operacional para <strong>corredoras de seguros</strong>
                    registradas en la CMF. Centraliza cartera de clientes, pólizas vigentes,
                    renovaciones y siniestros en un único entorno seguro, con arquitectura
                    multi-tenant que opera varias corredoras sobre la misma instalación.
                </p>

                <ul class="feat-grid" aria-label="Funcionalidades INSURE-BYTE">
                    <li><span class="fi">✦</span>Carga masiva CSV todo-o-nada</li>
                    <li><span class="fi">✦</span>Endosos con historial inmutable</li>
                    <li><span class="fi">✦</span>Comisión split corredora/vendedor</li>
                    <li><span class="fi">✦</span>Expediente de siniestro CMF</li>
                    <li><span class="fi">✦</span>Multi-tenant · varias corredoras</li>
                    <li><span class="fi">✦</span>Portal cliente + chatbot IA</li>
                    <li><span class="fi">✦</span>Portal aseguradora — API REST</li>
                    <li><span class="fi">✦</span>Cifrado PII (AES-256-GCM)</li>
                </ul>
            </div>

            <div class="pcard-foot">
                <?php if ($insure_installed): ?>
                    <a href="./insure/" class="cta cta-ins" aria-label="Acceder a INSURE-BYTE">
                        Ingresar al sistema
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <span class="foot-meta">Corredoras · Seguros</span>
                <?php else: ?>
                    <span class="cta-soon">En desarrollo</span>
                    <span class="foot-meta">Disponible muy pronto</span>
                <?php endif; ?>
            </div>
        </article>
        <!-- ╚══════════════════════════════════════╝ -->

    </div>
</section>


<!-- ═══════════════════════════════════
     TECH
════════════════════════════════════ -->
<section class="tech" id="tecnologia" aria-labelledby="tech-title">
    <div class="tech-inner">
        <div class="tech-left">
            <div class="sec-tag">Arquitectura técnica</div>
            <h3 id="tech-title">Construido para durar,<br>diseñado para escalar</h3>
            <p>
                Cada plataforma DEV-BYTE está desarrollada en PHP nativo sobre arquitectura MVC,
                con base de datos MySQL optimizada y capa de seguridad que sigue los estándares
                OWASP Top 10. Sin frameworks pesados, sin bloatware, sin abstracciones ocultas.
            </p>
            <p>
                La infraestructura es multi-entorno: soporta despliegues en servidores propios,
                hosting compartido y nubes privadas, con control total sobre los datos del cliente.
                El cumplimiento de la normativa SII y CMF está integrado en los módulos centrales,
                no como un add-on de última hora.
            </p>

            <div class="pillars">
                <div class="pillar">
                    <span class="pillar-ico">⚿</span>
                    <h4>Seguridad OWASP</h4>
                    <p>Protección contra SQLi, XSS, CSRF y el resto de las 10 vulnerabilidades críticas de referencia.</p>
                </div>
                <div class="pillar">
                    <span class="pillar-ico">⊕</span>
                    <h4>Multi-tenant</h4>
                    <p>Aislamiento de datos por comunidad o corredora, con control de acceso granular por rol.</p>
                </div>
                <div class="pillar">
                    <span class="pillar-ico">↻</span>
                    <h4>Auditoría total</h4>
                    <p>Registro de cada operación sensible con timestamp, usuario IP y contexto de la acción.</p>
                </div>
                <div class="pillar">
                    <span class="pillar-ico">◎</span>
                    <h4>Sin frameworks pesados</h4>
                    <p>PHP nativo + MVC propio: rendimiento máximo, control total, cero dependencias ocultas.</p>
                </div>
            </div>
        </div>

        <div class="stack-list">
            <div class="stack-row"><span class="sl">Backend</span><span class="sr">PHP · MVC · REST API</span></div>
            <div class="stack-row"><span class="sl">Base de datos</span><span class="sr">MySQL 8 · InnoDB</span></div>
            <div class="stack-row"><span class="sl">Servidor web</span><span class="sr">Apache / Nginx · Linux</span></div>
            <div class="stack-row"><span class="sl">Autenticación</span><span class="sr">JWT · Session segura · 2FA</span></div>
            <div class="stack-row"><span class="sl">Integración SII</span><span class="sr">DTE · Boletas · Facturas</span></div>
            <div class="stack-row"><span class="sl">Integración CMF</span><span class="sr">Reportes regulatorios</span></div>
            <div class="stack-row"><span class="sl">Frontend</span><span class="sr">HTML5 · CSS3 · JS vanilla</span></div>
            <div class="stack-row"><span class="sl">Deployment</span><span class="sr">SSH · Git · CI/CD propio</span></div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════
     FOOTER
════════════════════════════════════ -->
<footer>
    <div class="footer-inner">
        <img src="dev-byte_logo.svg" alt="DEV-BYTE" class="footer-logo">
        <p class="footer-copy">&copy; <?= date('Y') ?> DEV-BYTE. Todos los derechos reservados. Santiago, Chile.</p>
        <ul class="footer-nav">
            <li><a href="#plataformas">Plataformas</a></li>
            <li><a href="#tecnologia">Tecnología</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="mailto:contacto@dev-byte.lat">contacto@dev-byte.lat</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
