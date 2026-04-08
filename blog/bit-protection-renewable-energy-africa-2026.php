<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Beyond the PPA: How BITs Protect Renewable Energy Investments in Africa (2026) | Özgören Law Firm</title>
    <meta name="description"
        content="When a state utility stops taking power or regulators cut feed-in tariffs, your PPA alone may not be enough. A practitioner's guide to BIT protection, FET claims, and the PPA-to-treaty translation layer for renewable energy projects in Africa — 2026.">
    <meta name="author" content="Selin Özgören">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #F7F3EE;
            --fg: #1A1A18;
            --fg-muted: #6B6558;
            --border: rgba(184, 149, 90, 0.25);
            --accent: #EBE1CE;
            --gold: #B8955A;
            --font-serif: 'Instrument Serif', serif;
            --font-sans: 'Inter', sans-serif;
        }

        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        body {
            background: var(--bg);
            color: var(--fg);
            font-family: var(--font-sans);
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* ── NAV ── */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem clamp(1.5rem, 4vw, 4rem);
            background: rgba(247, 243, 238, 0.95);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            transition: transform 0.4s ease;
        }

        .nav-logo img {
            height: 80px;
            width: auto;
            display: block;
        }

        .hamburger {
            display: flex;
            flex-direction: column;
            gap: 4px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            z-index: 1200;
        }

        .hamburger span {
            display: block;
            width: 24px;
            height: 1.5px;
            background: var(--fg);
            transition: 0.3s;
            transform-origin: center;
        }

        .hamburger.open span:nth-child(1) {
            transform: translateY(2.75px) rotate(45deg);
        }

        .hamburger.open span:nth-child(2) {
            transform: translateY(-2.75px) rotate(-45deg);
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--bg);
            z-index: 900;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem clamp(1.5rem, 4vw, 4rem);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
        }

        .menu-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }

        .menu-links {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .menu-links a {
            font-family: var(--font-serif);
            font-size: clamp(3rem, 6vw, 5rem);
            color: var(--fg);
            text-decoration: none;
            line-height: 1;
            transform: translateY(20px);
            transition: transform 0.4s ease, opacity 0.4s ease, color 0.3s ease;
            opacity: 0;
        }

        .menu-overlay.open .menu-links a {
            transform: translateY(0);
            opacity: 1;
        }

        .menu-links a:hover {
            color: var(--gold);
        }

        /* ── HERO ── */
        .hero {
            padding: 10rem clamp(1.5rem, 4vw, 4rem) 4rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--fg-muted);
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .breadcrumb a {
            color: var(--fg-muted);
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb a:hover {
            color: var(--fg);
        }

        .breadcrumb span {
            color: var(--gold);
        }

        .post-category {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--gold);
            margin-bottom: 2rem;
            font-weight: 500;
        }

        .post-category::before {
            content: '';
            display: block;
            width: 40px;
            height: 1px;
            background: var(--gold);
        }

        .hero-h1 {
            font-family: var(--font-serif);
            font-size: clamp(3rem, 6vw, 6rem);
            line-height: 0.95;
            letter-spacing: -0.02em;
            color: var(--fg);
            margin-bottom: 4rem;
            max-width: 1100px;
        }

        .hero-h1 em {
            font-style: italic;
            color: var(--fg-muted);
        }

        .post-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 1rem;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--fg-muted);
            border-top: 1px solid var(--border);
            padding-top: 2rem;
        }

        .post-meta strong {
            color: var(--fg);
            font-weight: 500;
        }

        .meta-dot {
            width: 4px;
            height: 4px;
            background: var(--gold);
            border-radius: 50%;
            opacity: 0.5;
        }

        /* ── LAYOUT ── */
        .post-layout {
            padding: 6rem clamp(1.5rem, 4vw, 4rem);
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 6rem;
            align-items: start;
        }

        /* ── ARTICLE CONTENT ── */
        .post-body {
            max-width: 800px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--gold);
            text-decoration: none;
            margin-bottom: 4rem;
            transition: gap 0.3s;
        }

        .back-link:hover {
            gap: 1rem;
        }

        /* Key Takeaways */
        .key-takeaways {
            border: 1px solid var(--border);
            margin-bottom: 4rem;
            background: var(--bg);
        }

        .kt-head {
            padding: 1.5rem 2rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .kt-head::before {
            content: '';
            display: block;
            width: 30px;
            height: 1px;
            background: var(--gold);
        }

        .kt-head span {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--gold);
            font-weight: 500;
        }

        .kt-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .kt-item {
            padding: 2rem;
            border-right: 1px solid var(--border);
        }

        .kt-item:last-child {
            border-right: none;
        }

        .kt-num {
            font-family: var(--font-serif);
            font-size: 3rem;
            color: var(--border);
            line-height: 1;
            margin-bottom: 1rem;
        }

        .kt-label {
            font-size: 0.95rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--fg);
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .kt-text {
            font-size: 0.95rem;
            color: var(--fg-muted);
            line-height: 1.6;
        }

        /* Intro box */
        .intro-box {
            border-left: 2px solid var(--gold);
            padding: 2rem 0 2rem 3rem;
            margin-bottom: 4rem;
            font-family: var(--font-serif);
            font-size: 1.8rem;
            font-style: italic;
            color: var(--fg);
            line-height: 1.5;
        }

        .intro-box strong {
            font-style: normal;
            color: var(--gold);
            font-weight: 400;
        }

        /* Sections */
        .post-body section {
            margin-bottom: 4rem;
        }

        .post-body h2 {
            font-family: var(--font-serif);
            font-size: 2.8rem;
            color: var(--fg);
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border);
            line-height: 1.1;
        }

        .post-body h3 {
            font-family: var(--font-serif);
            font-size: 1.8rem;
            color: var(--fg);
            margin: 3rem 0 1.5rem;
            line-height: 1.2;
        }

        .post-body p {
            margin-bottom: 1.5rem;
            font-size: 1.15rem;
            color: var(--fg-muted);
            line-height: 1.8;
        }

        .post-body p strong {
            color: var(--fg);
            font-weight: 600;
        }

        /* Practitioner Note */
        .takeaway {
            background: var(--accent);
            padding: 2.5rem;
            margin: 3rem 0;
            border-left: 2px solid var(--fg);
        }

        .takeaway::before {
            content: '▸ PRACTITIONER NOTE';
            display: block;
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            color: var(--fg);
            margin-bottom: 1.5rem;
        }

        .takeaway p {
            margin-bottom: 0;
            font-size: 1.05rem;
            color: var(--fg);
            line-height: 1.7;
        }

        /* Pull quote */
        .pullquote {
            padding: 3rem 0;
            margin: 4rem 0;
            font-family: var(--font-serif);
            font-size: 2.5rem;
            font-style: italic;
            color: var(--gold);
            line-height: 1.3;
            text-align: center;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        /* Comparison table */
        .comp-table {
            width: 100%;
            border-collapse: collapse;
            margin: 3rem 0;
            font-size: 1.05rem;
        }

        .comp-table th {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 1.5rem;
            text-align: left;
            border-bottom: 1px solid var(--fg);
            color: var(--fg);
        }

        .comp-table td {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border);
            color: var(--fg-muted);
            vertical-align: top;
        }

        .comp-table td:first-child {
            color: var(--fg);
            font-weight: 500;
        }

        /* BIT provision audit grid */
        .audit-grid {
            display: grid;
            gap: 2rem;
            margin: 3rem 0;
            grid-template-columns: 1fr 1fr;
        }

        .audit-card {
            border: 1px solid var(--border);
            padding: 2.5rem;
            transition: background 0.3s;
        }

        .audit-card:hover {
            background: var(--accent);
        }

        .audit-tag {
            font-family: var(--font-serif);
            font-size: 2.5rem;
            color: var(--gold);
            margin-bottom: 1.5rem;
            line-height: 1;
        }

        .audit-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--fg);
            margin-bottom: 1.5rem;
            line-height: 1.4;
        }

        .audit-body {
            font-size: 1.05rem;
            color: var(--fg-muted);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .audit-question {
            padding-top: 1.5rem;
            border-top: 1px solid var(--border);
            font-size: 1rem;
            color: var(--fg);
            font-style: italic;
            line-height: 1.6;
        }

        .audit-question::before {
            content: '↳ Key question: ';
            color: var(--gold);
            font-weight: 500;
            font-style: normal;
        }

        /* Checklist */
        .checklist {
            list-style: none;
            margin: 3rem 0;
        }

        .checklist li {
            padding: 1.5rem 0 1.5rem 2rem;
            border-bottom: 1px solid var(--border);
            font-size: 1.15rem;
            color: var(--fg-muted);
            position: relative;
            line-height: 1.8;
        }

        .checklist li:first-child {
            border-top: 1px solid var(--border);
        }

        .checklist li::before {
            content: '—';
            position: absolute;
            left: 0;
            color: var(--gold);
            font-weight: 600;
        }

        .checklist li strong {
            display: block;
            color: var(--fg);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-family: var(--font-serif);
        }

        /* FAQ */
        .faq-list {
            margin-top: 3rem;
        }

        .faq-item {
            border-bottom: 1px solid var(--border);
        }

        .faq-item:first-child {
            border-top: 1px solid var(--border);
        }

        .faq-btn {
            width: 100%;
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 2rem;
            padding: 2rem 0;
            text-align: left;
            font-family: var(--font-sans);
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--fg);
            line-height: 1.5;
            transition: color 0.2s;
        }

        .faq-btn:hover {
            color: var(--gold);
        }

        .faq-icon {
            font-size: 1.5rem;
            color: var(--gold);
            transition: transform 0.3s;
            line-height: 1;
            font-weight: 300;
        }

        .faq-btn[aria-expanded="true"] .faq-icon {
            transform: rotate(45deg);
            color: var(--fg);
        }

        .faq-answer {
            display: none;
            padding: 0 0 2rem;
            font-size: 1.1rem;
            color: var(--fg-muted);
            line-height: 1.8;
        }

        .faq-answer.open {
            display: block;
        }

        .faq-answer strong {
            color: var(--fg);
        }

        .faq-answer em {
            font-style: italic;
            color: var(--fg);
        }

        .disclaimer {
            font-size: 0.95rem;
            color: var(--fg-muted);
            line-height: 1.6;
            border-top: 1px solid var(--border);
            padding-top: 2rem;
            margin-top: 4rem;
        }

        /* SIDEBAR */
        .post-sidebar {
            position: sticky;
            top: 10rem;
            display: flex;
            flex-direction: column;
            gap: 4rem;
        }

        .sb-card {
            border-bottom: 1px solid var(--border);
            padding-bottom: 3rem;
        }

        .sb-card-head {
            margin-bottom: 2rem;
        }

        .sb-card-head h4 {
            font-family: var(--font-serif);
            font-size: 2rem;
            color: var(--fg);
        }

        .toc-list {
            list-style: none;
        }

        .toc-list li {
            margin-bottom: 0.5rem;
        }

        .toc-list a {
            font-size: 1rem;
            color: var(--fg-muted);
            text-decoration: none;
            display: block;
            padding: 0.5rem 0;
            border-left: 2px solid transparent;
            padding-left: 1rem;
            transition: all 0.2s;
        }

        .toc-list a:hover,
        .toc-list a.active {
            color: var(--fg);
            border-left-color: var(--gold);
        }

        .author-row {
            display: flex;
            gap: 1.5rem;
            align-items: center;
            margin-bottom: 2rem;
        }

        .author-initials {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-serif);
            font-size: 1.5rem;
            color: var(--fg);
        }

        .author-name-block strong {
            display: block;
            font-family: var(--font-serif);
            font-size: 1.5rem;
            color: var(--fg);
            margin-bottom: 0.3rem;
        }

        .author-name-block span {
            font-size: 0.8rem;
            color: var(--fg-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .author-bio-text {
            font-size: 1rem;
            color: var(--fg-muted);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .author-link {
            font-size: 0.85rem;
            text-transform: uppercase;
            color: var(--gold);
            text-decoration: none;
            font-weight: 500;
            transition: gap 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .author-link:hover {
            gap: 1rem;
        }

        .related-list {
            list-style: none;
        }

        .related-list li {
            padding: 1.5rem 0;
            border-bottom: 1px solid var(--border);
        }

        .related-list li:last-child {
            border-bottom: none;
        }

        .related-list a {
            font-size: 1.1rem;
            color: var(--fg-muted);
            text-decoration: none;
            display: block;
            line-height: 1.5;
            transition: color 0.2s;
        }

        .related-list a:hover {
            color: var(--gold);
        }

        /* CONTACT SECTION replacement */
        .contact {
            background: var(--bg);
            color: var(--fg);
            text-align: center;
            padding: 6rem 2rem;
            border-top: 1px solid var(--border);
        }

        .contact .section-label {
            justify-content: center;
            color: var(--fg-muted);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact .section-label::before {
            content: '';
            display: block;
            width: 12px;
            height: 12px;
            background: var(--fg);
            border-radius: 50%;
        }

        .contact-title {
            font-family: var(--font-serif);
            font-size: clamp(3rem, 5vw, 4rem);
            margin: 0 0 3rem 0;
            color: var(--fg);
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .contact-link {
            padding: 1rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: 100px;
            color: var(--fg);
            text-decoration: none;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.3s;
        }

        .contact-link:hover {
            background: var(--fg);
            color: var(--bg);
        }

        /* FOOTER */
        footer {
            padding: 2rem clamp(1.5rem, 4vw, 4rem);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: var(--fg-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-top: 1px solid var(--border);
        }

        footer a {
            color: var(--fg-muted);
            text-decoration: none;
        }

        footer a:hover {
            color: var(--fg);
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .post-layout {
                grid-template-columns: 1fr;
            }

            .post-sidebar {
                display: none;
            }

            .kt-grid {
                grid-template-columns: 1fr;
            }

            .audit-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .hero {
                padding-top: 8rem;
            }

            .comp-table {
                font-size: 0.9rem;
            }

            .comp-table th,
            .comp-table td {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="/en/index.html" class="nav-logo">
            <img src="/logo.png" alt="Özgören Law Firm Logo">
        </a>
        <div class="nav-right">
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <div class="menu-overlay" id="menuOverlay">
        <div class="menu-links">
            <a href="/en/index.html">Home</a>
            <a href="/en/index.html#about">Profile</a>
            <a href="/en/index.html#practice">Expertise</a>
            <a href="/en/blog.html">Knowledge Bank</a>
            <a href="/en/index.html#contact">Contact</a>
        </div>
    </div>

    <!-- HERO -->
    <header class="hero">
        <nav aria-label="Breadcrumb" class="breadcrumb">
            <a href="/en/index.html">Home</a>
            <span class="breadcrumb-sep">/</span>
            <a href="/en/blog.html">Knowledge Bank</a>
            <span class="breadcrumb-sep">/</span>
            <span aria-current="page">BIT Protection for African Renewable Energy</span>
        </nav>
        <p class="post-category">Investment Arbitration · African Energy</p>
        <h1 class="hero-h1">Beyond the PPA: How <em>BITs</em> Protect Renewable Energy Investments in Africa</h1>
        <div class="post-meta">
            <strong>Selin Özgören</strong>
            <span class="meta-dot"></span>
            <span>Özgören Law Firm</span>
            <span class="meta-dot"></span>
            <time datetime="2026-04-02">April 2026</time>
            <span class="meta-dot"></span>
            <span>9 min read</span>
        </div>
    </header>

    <!-- LAYOUT -->
    <div class="post-layout">
        <article class="post-body">
            <a href="/en/blog.html" class="back-link">← Back to Knowledge Bank</a>

            <!-- KEY TAKEAWAYS -->
            <div class="key-takeaways">
                <div class="kt-head"><span>Key Takeaways</span></div>
                <div class="kt-grid">
                    <div class="kt-item">
                        <div class="kt-num">01</div>
                        <div class="kt-label">Two layers, two legal orders</div>
                        <p class="kt-text">A PPA operates under domestic contract law. A BIT operates under
                            international law. When local courts fail and the state is the wrongdoer, only the treaty
                            layer provides a remedy — but it requires deliberate structural planning before capital is
                            committed.</p>
                    </div>
                    <div class="kt-item">
                        <div class="kt-num">02</div>
                        <div class="kt-label">FET requires specific assurances</div>
                        <p class="kt-text">Modern tribunals have significantly raised the threshold for legitimate
                            expectations under FET. A general expectation of regulatory stability is rarely enough.
                            Targeted, specific state assurances that induced the investment are required — and they must
                            be documented.</p>
                    </div>
                    <div class="kt-item">
                        <div class="kt-num">03</div>
                        <div class="kt-label">AfCFTA changes the calculus</div>
                        <p class="kt-text">The AfCFTA Investment Protocol restructures investor protection across
                            Africa. Umbrella clauses are narrowed or absent. Investor obligations are affirmative. For
                            new projects, the question of which treaty applies — and whether an older bilateral BIT
                            offers stronger protection — needs analysis before structuring.</p>
                    </div>
                </div>
            </div>

            <!-- INTRO BOX -->
            <div class="intro-box">
                The Power Purchase Agreement is where lawyers spend most of their time. It is also where investors feel
                most protected. In practice, a PPA's enforceability depends entirely on the host state's legal system —
                the very institution that may be the source of the problem. <strong>The BIT is the instrument that
                    operates when the state itself is the counterparty and the domestic legal order offers no
                    independent remedy.</strong> Understanding how the two layers interact — and where one ends and the
                other begins — is the central structural question for any renewable energy project in Africa in 2026.
            </div>

            <!-- SECTION 1 -->
            <section id="two-layers">
                <h2>The Hierarchy of Protection: PPA vs. BIT</h2>
                <p>Every cross-border renewable energy project in Africa sits within two distinct legal frameworks
                    simultaneously. The first is contractual: the Power Purchase Agreement, the EPC contract, the grid
                    connection agreement — all governed by the host state's domestic law, interpreted by domestic
                    courts, and enforced through domestic institutions. The second is the treaty layer: the applicable
                    Bilateral Investment Treaty or multilateral instrument, which operates under public international
                    law and provides access to international arbitration before forums that the host state cannot
                    control.</p>
                <p>These two layers are not alternatives. They address different risks. The PPA protects against
                    non-payment, technical failure, and breach of specific contractual commitments. The BIT protects
                    against state conduct that falls outside the contract — regulatory changes, discriminatory
                    treatment, creeping expropriation, and denial of justice. The distinction matters enormously in
                    practice because the most serious threats to long-term African renewable energy projects are
                    typically not commercial disputes between private parties but regulatory shifts driven by political
                    priorities, currency crises, or energy policy reversals at the state level.</p>

                <table class="comp-table">
                    <thead>
                        <tr>
                            <th>Risk category</th>
                            <th>PPA protection</th>
                            <th>BIT protection</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Non-payment by state utility</td>
                            <td>Take-or-pay clause; contractual damages under local law</td>
                            <td>Potentially via umbrella clause, if BIT covers contractual obligations; or FET if denial
                                of justice by local courts</td>
                        </tr>
                        <tr>
                            <td>Feed-in tariff reduction or elimination</td>
                            <td>Economic equilibrium clause may trigger compensation</td>
                            <td>FET violation if specific assurances were made; indirect expropriation if economic value
                                substantially neutralised</td>
                        </tr>
                        <tr>
                            <td>Grid priority rule changes</td>
                            <td>Not typically addressed in PPA; deemed generation clause partially mitigates</td>
                            <td>FET or expropriation claim depending on severity and discrimination; police powers
                                defence available to state</td>
                        </tr>
                        <tr>
                            <td>Licence revocation or non-renewal</td>
                            <td>No PPA protection for regulatory acts outside the contract</td>
                            <td>Direct expropriation or FET violation; strongest treaty claims in the energy sector</td>
                        </tr>
                        <tr>
                            <td>Currency transfer restriction</td>
                            <td>Force majeure clause may excuse state utility; limited contractual remedy</td>
                            <td>BIT transfer of funds guarantee, if present; ICSID arbitration available in most cases
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="takeaway">
                    <p>The critical structuring question is not whether to have a BIT but which BIT applies and whether
                        the project's corporate structure allows access to it. Many investors discover after a dispute
                        has arisen that their holding entity is incorporated in a jurisdiction with no applicable treaty
                        — or with a treaty that omits the provision they need. This is entirely preventable at the
                        investment structuring stage.</p>
                </div>
            </section>

            <!-- SECTION 2 -->
            <section id="fet-standard">
                <h2>The FET Standard: Where the Dispute Is Won or Lost</h2>
                <p>The Fair and Equitable Treatment clause is the most frequently invoked BIT protection in energy
                    sector disputes — and the most misunderstood. In the early 2000s, FET was interpreted broadly to
                    impose a general obligation of regulatory stability. The wave of Spanish solar cases in the 2010s
                    produced a significant correction: tribunals began requiring much more precision in identifying what
                    specifically the state had done to breach the standard.</p>

                <h3>Legitimate expectations: what tribunals actually require</h3>
                <p>The concept of <strong>legitimate expectations</strong> sits at the heart of most FET claims. An
                    investor argues that the state's regulatory change frustrated expectations that were reasonable at
                    the time of the investment and induced by the state's own conduct. In renewable energy disputes,
                    this typically means a state that promised a fixed twenty-year feed-in tariff and then cut it after
                    the investor had committed capital.</p>
                <p>Modern tribunals — particularly post-<em>Blusun v. Italy</em> (2016) and the subsequent wave of
                    intra-EU arbitration — have significantly narrowed the threshold. The investor must demonstrate not
                    merely that it expected regulatory stability in general, but that the state made <strong>specific,
                        targeted assurances</strong> to this investor — through legislation, individual permits, direct
                    communications, or investment promotion — that were intended to induce the investment and on which
                    the investor actually relied. A general regulatory framework that attracted the investment is
                    ordinarily insufficient without something more specific.</p>

                <div class="takeaway">
                    <p>In an African context, the due diligence question cuts both ways. A tribunal will ask whether the
                        investor examined the host state's regulatory history before committing capital. If a state has
                        a documented history of tariff adjustments or grid access revisions, an investor's claim to have
                        expected a fixed twenty-year tariff to be immutable may be assessed more critically. Regulatory
                        track record analysis is therefore both a diligence exercise and pre-emptive litigation
                        preparation.</p>
                </div>

                <h3>The "take-and-pay" trap</h3>
                <p>A specific variant of FET risk that is underappreciated in African project finance is the distinction
                    between <strong>take-or-pay</strong> and <strong>take-and-pay</strong> obligations in PPAs. A
                    genuine take-or-pay clause obligates the state utility to pay for the contracted energy volume
                    whether or not it is actually dispatched — providing the investor with payment certainty regardless
                    of grid conditions. A take-and-pay clause, by contrast, only triggers payment when the utility
                    actually takes the power. In markets with grid reliability problems — which characterise a
                    significant portion of sub-Saharan Africa — a take-and-pay structure leaves the investor exposed to
                    dispatch risk that the PPA was supposed to eliminate.</p>
                <p>Where a state utility consistently fails to dispatch — either because the grid cannot accommodate the
                    generation or because the utility is deliberately avoiding its payment obligation — the investor may
                    have a viable FET claim if it can establish that the state's failure to maintain grid infrastructure
                    or honour dispatch obligations constitutes a targeted frustration of the investment. The treaty
                    layer does not replace the contractual analysis but may provide the enforcement mechanism when the
                    contractual remedy is nominal.</p>

                <div class="pullquote">
                    The question a tribunal asks is not whether the regulatory change harmed the investment. It is
                    whether the state made a specific commitment that the change would not happen — and whether that
                    commitment was what brought the investor to the table.
                </div>
            </section>

            <!-- SECTION 3 -->
            <section id="expropriation">
                <h2>Indirect Expropriation vs. the Police Powers Doctrine</h2>
                <p>The boundary between a legitimate environmental or energy regulation and an indirect expropriation
                    requiring compensation is where the most consequential African energy disputes will be resolved over
                    the next decade. The stakes are significant on both sides: for investors, the ability to recover
                    capital and projected returns; for states, the ability to pursue the energy transition without every
                    regulatory adjustment triggering an international arbitration.</p>

                <h3>The substantial deprivation threshold</h3>
                <p>To establish indirect expropriation, the investor must generally demonstrate that the state measure
                    has substantially deprived the investment of its economic value — not merely reduced profit margins
                    or increased operating costs. The standard most commonly applied requires near-total neutralisation
                    of the investment's value, though the precise threshold varies by treaty and tribunal. A feed-in
                    tariff reduction that makes a project less profitable does not ordinarily constitute expropriation.
                    A tariff elimination that renders the project economically non-viable, combined with a refusal to
                    permit renegotiation, more plausibly does.</p>

                <h3>How the police powers doctrine is deployed in African disputes</h3>
                <p>African states defending against indirect expropriation claims have increasingly invoked the
                    <strong>police powers doctrine</strong> — the principle that a state's non-discriminatory,
                    proportionate regulation in pursuit of a legitimate public interest does not constitute
                    expropriation requiring compensation, even if it substantially harms the investor. In the energy
                    context, this encompasses new grid balancing requirements, revised carbon tax frameworks,
                    adjustments to renewable energy procurement targets, and environmental licensing changes.
                </p>
                <p>The doctrine creates a genuine analytical difficulty because the Paris Agreement and national NDC
                    commitments give states a strong public interest narrative for almost any energy sector regulation.
                    The critical battleground is therefore not the legitimacy of the regulatory objective but whether
                    the specific measure was <strong>discriminatory</strong> — targeting the foreign investor in ways
                    that domestic operators are not subject to — and whether it was <strong>proportionate</strong> to
                    the stated objective. A grid priority change that applies equally to all generators is significantly
                    harder to challenge than one that specifically disadvantages foreign-owned independent power
                    producers.</p>

                <div class="takeaway">
                    <p>Deemed generation clauses in PPAs address one manifestation of this problem by entitling the
                        investor to payment for contracted capacity even when the grid operator does not dispatch. Their
                        interaction with the treaty layer is underexamined: a state that systematically instructs its
                        utility to invoke deemed generation provisions rather than addressing the underlying grid
                        failure may be accumulating exposure to a broader treaty claim that the contractual mechanism
                        was never designed to absorb.</p>
                </div>
            </section>

            <!-- SECTION 4 -->
            <section id="afcfta">
                <h2>The AfCFTA Investment Protocol: A Structural Shift</h2>
                <p>The AfCFTA Investment Protocol — which entered the implementation phase from 2024 — represents the
                    most significant restructuring of the African investment law framework since the proliferation of
                    bilateral BITs in the 1990s and 2000s. For renewable energy investors, it has four consequences that
                    require analysis before a new project is structured.</p>

                <div class="audit-grid">
                    <div class="audit-card">
                        <div class="audit-tag">01</div>
                        <div class="audit-content">
                            <div class="audit-title">Investor obligations are affirmative</div>
                            <p class="audit-body">Unlike older BITs, which almost exclusively addressed state
                                obligations, the AfCFTA Protocol imposes direct obligations on investors covering
                                environmental compliance, anti-corruption, human rights due diligence, and technology
                                transfer. Breach of these obligations may provide the host state with a counterclaim
                                defence in arbitration — a mechanism that was theoretically available before but rarely
                                used with structured treaty support.</p>
                            <p class="audit-question">Have you mapped your project's supply chain and construction
                                practices against the Protocol's investor obligation framework?</p>
                        </div>
                    </div>
                    <div class="audit-card">
                        <div class="audit-tag">02</div>
                        <div class="audit-content">
                            <div class="audit-title">The umbrella clause is narrowed or absent</div>
                            <p class="audit-body">Many older bilateral BITs contain an umbrella clause that elevates
                                contractual obligations (including PPA commitments) to the treaty level — converting a
                                commercial breach by a state utility into an internationally arbitrable treaty claim.
                                The AfCFTA Protocol does not include a broad umbrella clause. PPA breaches by state
                                utilities in Protocol-governed disputes will ordinarily remain domestic contract
                                disputes unless they rise to the level of a denial of justice or an FET violation in
                                their own right.</p>
                            <p class="audit-question">Does your applicable treaty contain an umbrella clause? Does it
                                cover obligations under "written contracts" only, or any state commitment?</p>
                        </div>
                    </div>
                    <div class="audit-card">
                        <div class="audit-tag">03</div>
                        <div class="audit-content">
                            <div class="audit-title">The right to regulate is explicitly preserved</div>
                            <p class="audit-body">The Protocol explicitly recognises the host state's right to regulate
                                in the public interest — including for environmental protection and the energy
                                transition. This does not eliminate FET or expropriation claims but narrows the space in
                                which they succeed. Measures that are non-discriminatory, proportionate, and directed at
                                a legitimate public interest objective will be harder to challenge under the Protocol
                                than under older BITs with more investor-protective language.</p>
                            <p class="audit-question">If your host state invokes the right-to-regulate defence, which
                                specific aspect of your treaty's FET definition limits that right?</p>
                        </div>
                    </div>
                    <div class="audit-card">
                        <div class="audit-tag">04</div>
                        <div class="audit-content">
                            <div class="audit-title">Older bilateral BITs may still apply</div>
                            <p class="audit-body">The Protocol does not automatically supersede existing bilateral BITs
                                between AfCFTA member states. An investor structured through a jurisdiction with an
                                older, more protective bilateral BIT with the host state may retain access to that
                                instrument. Whether this constitutes impermissible treaty shopping — and how the
                                Protocol's relationship with existing BITs is resolved — will be determined by arbitral
                                tribunals in the coming years. The legal position is genuinely unsettled and must be
                                assessed jurisdiction by jurisdiction.</p>
                            <p class="audit-question">Is there an older BIT between your holding company's jurisdiction
                                and the host state that provides broader protection than the Protocol?</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 5 -->
            <section id="cooling-off">
                <h2>The Cooling-Off Period as a Negotiating Instrument</h2>
                <p>Most BITs require a mandatory negotiation or cooling-off period — typically six months — between the
                    investor's notice of dispute and the filing of a Request for Arbitration. Standard legal practice
                    treats this as a procedural formality: a waiting period before the real proceedings begin. That
                    framing misses the instrument's strategic utility.</p>
                <p>The cooling-off period is the only phase of an investment dispute in which both parties share a
                    strong incentive to avoid the cost and reputational exposure of formal arbitration. For the state,
                    an arbitration notice from a foreign investor creates diplomatic and credit rating exposure —
                    particularly in states that are actively raising project finance for new energy infrastructure. For
                    the investor, the cost and time of formal proceedings are real constraints, particularly for smaller
                    independent power producers.</p>
                <p>A well-deployed cooling-off period can accomplish several things that formal arbitration cannot: it
                    allows the parties to restructure the PPA on commercially sustainable terms without the adjudicative
                    pressure of an ongoing proceeding; it permits the state to introduce a modified regulatory framework
                    that addresses the investor's concern while preserving political flexibility; and it creates a
                    documented record of the state's negotiating position that will be directly relevant if the matter
                    does proceed to a tribunal.</p>

                <ul class="checklist">
                    <li>
                        <strong>File a notice of dispute that is precise and legally complete</strong>
                        The notice serves a dual purpose: it formally triggers the cooling-off period and establishes
                        the legal basis for the treaty claim. A vague notice that fails to identify the specific treaty
                        violations with precision weakens the investor's negotiating position and may create
                        jurisdictional problems later. The notice should be drafted with the same rigour as a Request
                        for Arbitration.
                    </li>
                    <li>
                        <strong>Identify the economic equilibrium mechanism and propose a correction formula</strong>
                        Rather than demanding restoration of the original regulatory framework — which the state may be
                        politically unable to deliver — the investor should identify the economic equilibrium clause,
                        quantify the impact of the regulatory change, and propose a compensation formula or tariff
                        adjustment that restores the project's financial model. This reframes the dispute from a legal
                        confrontation to a commercial negotiation.
                    </li>
                    <li>
                        <strong>Use the period to preserve evidence</strong>
                        Contemporaneous documents — regulatory communications, government statements, grid operator
                        instructions, correspondence with the state utility — are the evidentiary foundation of any FET
                        or expropriation claim. The cooling-off period is the time to secure and organise this evidence
                        before it becomes subject to litigation privilege disputes or practical access difficulties.
                    </li>
                    <li>
                        <strong>Monitor for additional regulatory measures that may widen the claim</strong>
                        States that are under financial pressure in the energy sector frequently introduce a sequence of
                        incremental measures — what practitioners sometimes call regulatory drips — rather than a single
                        decisive change. Each measure individually may fall below the FET or expropriation threshold.
                        Cumulatively, they may not. The cooling-off period is when this pattern crystallises, and the
                        investor should document it systematically.
                    </li>
                </ul>
            </section>

            <!-- SECTION 6 -->
            <section id="bit-audit">
                <h2>Four BIT Provisions That Determine Investment Recovery</h2>
                <p>When reviewing the treaty framework for a project or a dispute, four provisions have the greatest
                    practical impact on the investor's ability to recover.</p>

                <div class="audit-grid">
                    <div class="audit-card">
                        <div class="audit-tag">FET</div>
                        <div class="audit-content">
                            <div class="audit-title">FET definition — autonomous standard or minimum standard?</div>
                            <p class="audit-body">BITs define FET either as an autonomous treaty standard (which
                                tribunals interpret independently) or by reference to the customary international law
                                minimum standard of treatment. The latter is significantly harder to satisfy — it
                                requires conduct so egregious as to shock the conscience of the international community.
                                Modern African BITs vary considerably on this point. The distinction can be
                                outcome-determinative in cases involving regulatory changes that are arguably defensible
                                but commercially harmful.</p>
                            <p class="audit-question">Does the BIT's FET clause reference the minimum standard of
                                treatment, or is it an autonomous standard?</p>
                        </div>
                    </div>
                    <div class="audit-card">
                        <div class="audit-tag">UC</div>
                        <div class="audit-content">
                            <div class="audit-title">Umbrella clause — scope of coverage</div>
                            <p class="audit-body">Where present, an umbrella clause elevates the host state's
                                contractual obligations to the treaty level. The critical drafting question is whether
                                the clause covers "any obligation" the state has assumed toward the investor, or only
                                "written contracts" or "specific commitments." A narrowly drafted clause may not cover
                                grid connection commitments, regulatory approvals, or oral assurances from government
                                officials — the very instruments on which FET legitimate expectations claims are often
                                built.</p>
                            <p class="audit-question">Does the umbrella clause cover the state utility's PPA
                                obligations? Does it extend to regulatory licences and approvals?</p>
                        </div>
                    </div>
                    <div class="audit-card">
                        <div class="audit-tag">SS</div>
                        <div class="audit-content">
                            <div class="audit-title">Survival (sunset) clause — post-termination protection</div>
                            <p class="audit-body">Most BITs include a survival clause providing that investor
                                protections continue for a fixed period — typically ten to twenty years — after the
                                treaty is terminated. The practical relevance has increased as several African states
                                have terminated or failed to renew bilateral BITs in the context of treaty reform
                                processes. An investor whose BIT is terminated after capital has been committed needs to
                                know precisely how long the treaty's protection continues and what that protection
                                covers.</p>
                            <p class="audit-question">If the host state terminated this BIT today, how many years of
                                treaty protection would remain for your existing investment?</p>
                        </div>
                    </div>
                    <div class="audit-card">
                        <div class="audit-tag">TF</div>
                        <div class="audit-content">
                            <div class="audit-title">Transfer of funds — currency and convertibility</div>
                            <p class="audit-body">Renewable energy projects generate revenue in local currency but debt
                                service and dividend payments require foreign exchange. The BIT's transfer of funds
                                provision determines whether the investor can repatriate profits in a freely convertible
                                currency without restriction. In states experiencing foreign exchange crises — a
                                recurring feature of the African energy finance landscape — this provision may be the
                                most immediately commercially relevant treaty protection, preceding any regulatory
                                dispute.</p>
                            <p class="audit-question">Does the BIT guarantee the right to repatriate profits in a freely
                                convertible currency? Are there permitted exceptions for balance of payments
                                emergencies?</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 7: FAQ -->
            <section id="faq">
                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-btn" aria-expanded="false">
                            What is the difference between PPA protection and BIT protection for a renewable energy
                            project in Africa?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            A Power Purchase Agreement is a commercial contract governed by the host state's domestic
                            law. It protects the investor against non-payment, technical failure, and contractual breach
                            — but its enforcement depends on local courts, which may not be independent of the state
                            entity that is the counterparty.<br><br>
                            A Bilateral Investment Treaty operates at the level of public international law. It protects
                            the investor against state <em>conduct</em> that undermines the investment — including
                            regulatory changes, discriminatory treatment, expropriation without compensation, and denial
                            of justice. BIT claims go before international arbitral tribunals under international law,
                            bypassing the host state's domestic legal system. The two instruments address complementary
                            risks; neither substitutes for the other.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-btn" aria-expanded="false">
                            What is the FET standard and how does it apply to renewable energy disputes in Africa?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            The Fair and Equitable Treatment standard requires the host state to treat foreign investors
                            fairly and without arbitrariness. In renewable energy disputes, FET claims most commonly
                            arise when: a state cuts or eliminates a feed-in tariff after the investor has committed
                            capital; regulatory changes increase costs or reduce revenues in ways the investor could not
                            have anticipated; or a state utility refuses to honour its take-or-pay obligation and local
                            courts provide no effective remedy.<br><br>
                            Modern tribunals require <strong>specific, targeted state assurances</strong> — not merely a
                            general expectation of regulatory stability — to establish a legitimate expectation
                            cognisable under FET. Investors must document those assurances at the time they are made,
                            not after the dispute has arisen.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-btn" aria-expanded="false">
                            What is the difference between a freezing clause and an economic equilibrium clause in a
                            PPA?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            A <strong>freezing clause</strong> attempts to lock the legal framework in place at the time
                            of contracting — preventing the host state from applying subsequent laws to the project.
                            These clauses are increasingly unenforceable as courts and tribunals recognise states'
                            regulatory sovereignty.<br><br>
                            An <strong>economic equilibrium clause</strong> (also called an economic stabilisation
                            clause) takes a different approach: it allows the law to change but requires the state to
                            compensate the investor for any cost increase or revenue reduction that results. Economic
                            equilibrium clauses are considered more commercially durable and more likely to be upheld in
                            both domestic courts and international arbitration. They also interact more productively
                            with the treaty layer, because the state's refusal to honour the equilibrium obligation may
                            itself constitute an FET violation or umbrella clause breach.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-btn" aria-expanded="false">
                            Does the AfCFTA Investment Protocol change the protection available to renewable energy
                            investors in Africa?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Yes, significantly. Unlike older bilateral BITs, the AfCFTA Investment Protocol explicitly
                            balances investor protections with investor obligations — including environmental
                            compliance, anti-corruption standards, and human rights due diligence. It preserves a
                            broader right to regulate for host states and omits or narrows several protections found in
                            older BITs, including umbrella clauses and broad definitions of indirect
                            expropriation.<br><br>
                            Investors structuring new projects in AfCFTA member states need to assess whether the
                            Protocol applies, whether an older bilateral BIT provides stronger protection, and whether
                            structuring through a jurisdiction with a more protective bilateral BIT is available and
                            defensible.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-btn" aria-expanded="false">
                            What is the police powers doctrine and how do African states use it to defend against
                            expropriation claims?
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            The police powers doctrine holds that a state's non-discriminatory, proportionate regulatory
                            measures — enacted in good faith to pursue legitimate public interest objectives — do not
                            constitute expropriation requiring compensation, even if they significantly harm an
                            investment's value.<br><br>
                            In African energy disputes, states invoke this doctrine to defend changes in grid priority
                            rules, new carbon taxes, revised licensing requirements, and adjustments to renewable energy
                            procurement targets. The critical questions are whether the measure was
                            <strong>discriminatory</strong> (targeting foreign investors specifically) and whether it
                            was <strong>proportionate</strong> to its stated objective. Discriminatory or
                            disproportionate measures are significantly more vulnerable to expropriation claims even
                            where the underlying regulatory objective is legitimate.
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONCLUSION -->
            <section id="conclusion">
                <h2>The Practitioner's View</h2>
                <p>African renewable energy investment is entering a phase of genuine legal complexity. The first
                    generation of projects was structured when bilateral BITs were relatively uniform, regulatory
                    frameworks for renewables were new, and the Paris Agreement had not yet reshaped how states
                    articulate their energy policy objectives. None of those conditions still apply.</p>
                <p>The disputes that will reach arbitral tribunals over the next five years will be resolved by the
                    intersection of contract drafting, BIT selection, and corporate structuring decisions made years
                    earlier. The practical implication is straightforward: the questions raised in this article are
                    transaction questions. They should be answered before financial close, not after a tariff cut.</p>

                <p class="disclaimer">
                    This article is published for informational purposes only and does not constitute legal advice.
                    References to legal frameworks, treaty provisions, and arbitral awards reflect the position as
                    understood at the date of publication and are subject to legislative, judicial, and arbitral
                    developments. No reader should act or refrain from acting on the basis of this article without
                    obtaining independent legal advice specific to their situation.
                </p>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="post-sidebar" aria-label="Article sidebar">
            <div class="sb-card">
                <div class="sb-card-head">
                    <h4>Contents</h4>
                </div>
                <div class="sb-card-body">
                    <ul class="toc-list">
                        <li><a href="#two-layers">PPA vs. BIT — The Two Layers</a></li>
                        <li><a href="#fet-standard">The FET Standard</a></li>
                        <li><a href="#expropriation">Expropriation vs. Police Powers</a></li>
                        <li><a href="#afcfta">The AfCFTA Investment Protocol</a></li>
                        <li><a href="#cooling-off">The Cooling-Off Period</a></li>
                        <li><a href="#bit-audit">Four BIT Provisions</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#conclusion">The Practitioner's View</a></li>
                    </ul>
                </div>
            </div>

            <div class="sb-card">
                <div class="sb-card-head">
                    <h4>About the Author</h4>
                </div>
                <div class="sb-card-body">
                    <div class="author-row">
                        <div class="author-initials">SÖ</div>
                        <div class="author-name-block">
                            <strong>Selin Özgören</strong>
                            <span>Arbitration Lawyer</span>
                        </div>
                    </div>
                    <p class="author-bio-text">LL.M. Bocconi University. Former UNCITRAL Secretariat, HKIAC, Allen &amp;
                        Overy. Practice focuses on international arbitration and cross-border dispute resolution. Based
                        in İzmir.</p>
                    <a class="author-link" href="/en/index.html#about">Full Profile →</a>
                </div>
            </div>

            <div class="sb-card">
                <div class="sb-card-head">
                    <h4>Related Articles</h4>
                </div>
                <div class="sb-card-body">
                    <ul class="related-list">
                        <li><a href="#">IP Arbitration for Technology Disputes (2026)</a></li>
                        <li><a href="#">Enforcing Foreign Judgments at İzmir Courts</a></li>
                        <li><a href="/en/blog.html">Knowledge Bank</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>

    <section class="contact" id="contact">
        <div class="section-label">Professional Inquiries</div>
        <h2 class="contact-title">Connect with the Firm</h2>
        <div class="contact-links">
            <a href="mailto:info@ozgorenlawfirm.com" class="contact-link">Email Us</a>
            <a href="tel:+905431465266" class="contact-link">+90 543 146 52 66</a>
            <a href="https://tally.so/r/zxZeDE" class="contact-link" target="_blank">Inquiry Form</a>
        </div>
    </section>

    <footer>
        <div class="footer-left">© 2026 Özgören Law Firm</div>
        <div class="footer-right"><a href="/legal-notice">Legal Notice</a></div>
    </footer>

    <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>
    <script>
        const lenis = new Lenis({ duration: 1.2, smooth: true })
        function raf(time) { lenis.raf(time); requestAnimationFrame(raf) }
        requestAnimationFrame(raf)

        const hamburger = document.getElementById('hamburger');
        const menuOverlay = document.getElementById('menuOverlay');
        if (hamburger && menuOverlay) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('open');
                menuOverlay.classList.toggle('open');
                if (menuOverlay.classList.contains('open')) lenis.stop(); else lenis.start();
            });
        }

        const sections = document.querySelectorAll('section[id]');
        const tocLinks = document.querySelectorAll('.toc-list a');
        const tocObs = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    tocLinks.forEach(a => a.classList.remove('active'));
                    const active = document.querySelector(`.toc-list a[href="#${entry.target.id}"]`);
                    if (active) active.classList.add('active');
                }
            });
        }, { rootMargin: '-20% 0px -60% 0px' });
        sections.forEach(s => tocObs.observe(s));

        document.querySelectorAll('.faq-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const answer = btn.nextElementSibling;
                const isOpen = btn.getAttribute('aria-expanded') === 'true';
                document.querySelectorAll('.faq-btn').forEach(b => { b.setAttribute('aria-expanded', 'false'); b.nextElementSibling.classList.remove('open'); });
                if (!isOpen) { btn.setAttribute('aria-expanded', 'true'); answer.classList.add('open'); }
            });
        });
    </script>

</body>

</html>
