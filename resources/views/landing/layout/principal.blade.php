<!DOCTYPE html>
<html lang="es">
<head>
    @include('landing.includes.head')
    @yield('custom_css')
    <style>
        :root {
            --tla-red: #C0392B;
            --tla-red-dark: #8E2C1F;
            --tla-orange: #E67E22;
            --tla-orange-soft: #F39C12;
            --tla-green: #6A994E;
            --tla-green-dark: #386641;
            --tla-green-light: #A7C957;
            --tla-gold: #D4A373;
            --tla-yellow: #E9C46A;
            --tla-yellow-soft: #F4E1B5;
            --tla-beige: #F5E6D3;
            --tla-beige-mid: #EAD7C5;
            --tla-cream: #FFF8F0;
            --tla-text: #4A2C2A;
            --tla-text-soft: #6D4C41;
            --tla-gray: #BCAAA4;
            --tla-shadow: 0 8px 24px rgba(74, 44, 42, 0.08);
            --tla-radius: 2px;
        }

        body {
            color: var(--tla-text);
            background: #f3eadf;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1, h2, h3, h4, h5, h6, .sitename {
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            color: inherit;
        }

        .tla-header {
            background: #2c1b19;
            padding: 20px 0;
            border-bottom: 0;
            box-shadow: none;
        }

        .tla-navbar-shell {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
            padding: 26px 28px;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.55), rgba(255, 248, 240, 0.92)),
                radial-gradient(circle at top right, rgba(212, 163, 115, 0.18), transparent 34%),
                repeating-linear-gradient(135deg, rgba(142, 44, 31, 0.03) 0 6px, rgba(212, 163, 115, 0.03) 6px 12px),
                #fff8f0;
            border: 7px solid #f9efe5;
            box-shadow: 0 16px 26px rgba(27, 11, 8, 0.22);
            overflow: visible;
        }

        .tla-navbar-shell::before,
        .tla-navbar-shell::after {
            content: "";
            position: absolute;
            left: 18px;
            right: 18px;
            height: 16px;
            background:
                linear-gradient(90deg, #8e2c1f, #c94e23 28%, #f1b561 50%, #c94e23 72%, #8e2c1f),
                repeating-linear-gradient(45deg, rgba(255, 240, 214, 0.28) 0 7px, rgba(255, 240, 214, 0) 7px 14px);
            border-top: 2px solid #772116;
            border-bottom: 2px solid #772116;
            box-shadow: inset 0 0 0 2px rgba(255, 224, 180, 0.28);
        }

        .tla-navbar-shell::before {
            top: 12px;
        }

        .tla-navbar-shell::after {
            bottom: 12px;
        }

        .tla-brand {
            position: relative;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
        }

        .tla-brand-mark {
            width: 68px;
            height: 68px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
            background: linear-gradient(180deg, #fff4df, #efd8b3);
            border: 2px solid #bb7b38;
            box-shadow: 4px 4px 0 rgba(142, 44, 31, 0.14);
        }

        .tla-brand-mark img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .tla-brand-copy {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .tla-brand-copy .sitename {
            font-size: clamp(1.8rem, 2.6vw, 2.5rem);
            line-height: 1;
            color: #8e2c1f;
            font-weight: 900;
            text-transform: none;
        }

        .tla-brand-copy small {
            color: #7f574f;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .tla-navmenu {
            position: relative;
            z-index: 2;
            flex: 1 1 auto;
            display: flex;
            justify-content: center;
        }

        .tla-navmenu ul {
            gap: 12px;
        }

        .tla-navmenu a,
        .tla-navmenu a:focus {
            position: relative;
            padding: 18px 10px;
            color: #4a2c2a;
            font-size: 1.1rem;
            font-weight: 700;
        }

        .tla-navmenu a::after {
            content: "";
            position: absolute;
            left: 10px;
            right: 10px;
            bottom: 10px;
            height: 3px;
            background: linear-gradient(90deg, #8e2c1f, #d97e2e);
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.25s ease;
        }

        .tla-navmenu a:hover,
        .tla-navmenu .active,
        .tla-navmenu .active:focus {
            color: #8e2c1f;
        }

        .tla-navmenu a:hover::after,
        .tla-navmenu .active::after {
            transform: scaleX(1);
        }

        .tla-header-actions {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 14px;
            flex-shrink: 0;
        }

        .tla-user-pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 14px 8px 8px;
            background: rgba(255, 249, 242, 0.92);
            border: 1px solid #e2c8ab;
            border-radius: 999px;
            color: #4a2c2a;
            font-weight: 800;
            box-shadow: 0 6px 14px rgba(74, 44, 42, 0.08);
        }

        .tla-user-avatar {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: linear-gradient(180deg, #ffd38f, #d89d2a);
            color: #6f2b15;
            font-weight: 900;
            font-size: 1rem;
            overflow: hidden;
        }

        .tla-user-name {
            white-space: nowrap;
        }

        .tla-icon-btn {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 237, 207, 0.96);
            color: #dc8b19;
            border: 1px solid #efcf92;
            box-shadow: 0 6px 14px rgba(74, 44, 42, 0.08);
        }

        .tla-register-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 13px 24px;
            background: linear-gradient(180deg, #c93b22, #982515);
            color: #fff8f0;
            border: 2px solid #b43a1e;
            border-radius: 10px;
            font-weight: 800;
            letter-spacing: 0.02em;
            box-shadow: 0 8px 16px rgba(120, 28, 16, 0.2);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .tla-register-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 18px rgba(120, 28, 16, 0.24);
            color: #fff8f0;
        }

        .site-main {
            position: relative;
            overflow: hidden;
        }

        .page-section {
            position: relative;
            z-index: 1;
            padding: 96px 0;
        }

        .page-section.compact {
            padding: 72px 0;
        }

        .section-shell {
            background: #fffaf4;
            border: 1px solid #d9c4b2;
            border-top: 5px solid var(--tla-red);
            border-radius: var(--tla-radius);
            box-shadow: var(--tla-shadow);
        }

        .section-heading {
            margin-bottom: 18px;
            color: var(--tla-red-dark);
            font-size: clamp(2rem, 4vw, 3rem);
            line-height: 1.1;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .section-subtitle {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            background: #fff2df;
            color: var(--tla-red);
            border-left: 4px solid var(--tla-orange);
            border-radius: 0;
            font-weight: 800;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-size: 0.78rem;
        }

        .section-copy,
        .lead-copy {
            color: var(--tla-text-soft);
            font-size: 1.05rem;
            line-height: 1.75;
        }

        .hero-panel {
            position: relative;
            min-height: 78vh;
            display: flex;
            align-items: center;
            background:
                linear-gradient(90deg, #f3eadf 0 72%, #386641 72% 100%);
            border-bottom: 8px solid var(--tla-red);
            overflow: hidden;
        }

        .hero-panel::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(192, 57, 43, 0.08) 0 18%, transparent 18% 100%),
                linear-gradient(0deg, rgba(230, 126, 34, 0.08) 0 12%, transparent 12% 100%);
            pointer-events: none;
        }

        .hero-panel::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 34%;
            height: 100%;
            background:
                linear-gradient(180deg, rgba(56, 102, 65, 0.92), rgba(106, 153, 78, 0.82)),
                url('{{ asset('landing/img/about.jpg') }}') center/cover no-repeat;
            mix-blend-mode: multiply;
            opacity: 0.88;
            pointer-events: none;
        }

        .hero-content,
        .banner-content {
            position: relative;
            z-index: 1;
        }

        .hero-copy-box {
            max-width: 760px;
            padding: 32px;
            background: rgba(255, 248, 240, 0.9);
            border-left: 8px solid var(--tla-red);
            box-shadow: 14px 14px 0 rgba(212, 163, 115, 0.22);
        }

        .hero-title {
            color: var(--tla-red-dark);
            font-size: clamp(3rem, 7vw, 5rem);
            line-height: 0.95;
            margin: 18px 0;
            text-transform: uppercase;
            text-shadow: 2px 2px 0 rgba(255, 248, 240, 0.8);
        }

        .hero-title span {
            display: block;
            color: var(--tla-green-dark);
            text-shadow: 2px 2px 0 rgba(244, 225, 181, 0.8);
        }

        .hero-kicker {
            display: inline-block;
            padding: 8px 14px;
            background: var(--tla-red);
            color: #fff;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            border-left: 6px solid var(--tla-yellow);
        }

        .hero-badge-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 22px;
        }

        .hero-badge {
            padding: 12px 14px;
            background: #fff;
            border-left: 4px solid var(--tla-green);
            color: var(--tla-text);
            font-weight: 700;
            box-shadow: 8px 8px 0 rgba(188, 170, 164, 0.18);
        }

        .hero-actions,
        .stack-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 28px;
        }

        .tla-btn-primary,
        .tla-btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 26px;
            border-radius: 0;
            font-weight: 800;
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .tla-btn-primary {
            background: var(--tla-red);
            color: var(--tla-cream);
            box-shadow: none;
            border: 2px solid var(--tla-red);
        }

        .tla-btn-secondary {
            background: transparent;
            border: 2px solid var(--tla-green-dark);
            color: var(--tla-green-dark);
        }

        .tla-btn-primary:hover,
        .tla-btn-secondary:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0 rgba(74, 44, 42, 0.15);
        }

        .metric-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .metric-card,
        .tla-card {
            background: #fffdf9;
            border: 1px solid #ceb6a0;
            border-radius: 6px;
            box-shadow: var(--tla-shadow);
        }

        .metric-card {
            padding: 22px;
        }

        .metric-card strong {
            display: block;
            font-size: 2rem;
            color: var(--tla-green-dark);
            font-family: Arial, Helvetica, sans-serif;
        }

        .metric-card span {
            color: var(--tla-text-soft);
            font-weight: 700;
        }

        .tla-card {
            padding: 28px;
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .tla-card:hover {
            transform: translate(-4px, -4px);
            box-shadow: 10px 10px 0 rgba(142, 44, 31, 0.12);
        }

        .tla-icon {
            width: 64px;
            height: 64px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0;
            margin-bottom: 18px;
            font-size: 1.55rem;
            color: var(--tla-cream);
            background: var(--tla-red);
        }

        .tla-icon.green {
            background: var(--tla-green-dark);
        }

        .tla-icon.gold {
            background: var(--tla-gold);
            color: #fff;
        }

        .page-banner {
            position: relative;
            padding: 128px 0 88px;
            background: linear-gradient(180deg, #386641 0%, #2e5336 100%);
            border-bottom: 8px solid var(--tla-red);
        }

        .page-banner .section-heading {
            color: #fff8f0;
            text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.15);
        }

        .page-banner .lead-copy {
            color: rgba(255, 248, 240, 0.9);
            font-weight: 700;
        }

        .page-pill {
            display: inline-flex;
            padding: 8px 16px;
            border-radius: 0;
            background: rgba(255, 248, 240, 0.12);
            color: #fff;
            font-weight: 800;
            border-left: 4px solid var(--tla-yellow);
        }

        .list-check {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-check li {
            display: flex;
            gap: 12px;
            margin-bottom: 14px;
            color: var(--tla-text-soft);
            line-height: 1.65;
        }

        .list-check i {
            color: var(--tla-green-dark);
            margin-top: 5px;
        }

        .feature-band {
            padding: 32px;
            border-radius: 0;
            background: #2f3d34;
            color: var(--tla-cream);
            box-shadow: var(--tla-shadow);
            border-left: 6px solid var(--tla-yellow);
        }

        .feature-band p {
            color: rgba(255, 248, 240, 0.82);
            margin-bottom: 0;
        }

        .media-card {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            min-height: 360px;
            box-shadow: var(--tla-shadow);
            background: #d8c0aa;
            border: 1px solid #bfa189;
        }

        .media-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.96;
        }

        .info-strip {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .info-chip {
            padding: 20px;
            border-radius: 0;
            background: #fff7ee;
            border: 1px solid #cfb29a;
            text-align: center;
        }

        .info-chip strong {
            display: block;
            font-size: 1.8rem;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--tla-red-dark);
        }

        .cta-block {
            padding: 40px;
            border-radius: 0;
            background: #8E2C1F;
            color: var(--tla-cream);
            box-shadow: var(--tla-shadow);
            border-left: 8px solid var(--tla-yellow);
        }

        .cta-block p {
            color: rgba(255, 248, 240, 0.86);
        }

        .notice-card img,
        .resource-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 0;
            margin-bottom: 18px;
        }

        .form-shell {
            padding: 34px;
            background: #fffaf4;
            border: 1px solid #d9c4b2;
            border-top: 5px solid var(--tla-green-dark);
            border-radius: 0;
            box-shadow: var(--tla-shadow);
        }

        .form-shell .form-control {
            border-radius: 0;
            border: 1px solid #c7afa0;
            min-height: 52px;
            background: #fff;
        }

        .form-shell .form-control:focus {
            border-color: var(--tla-orange);
            box-shadow: 0 0 0 0.2rem rgba(230, 126, 34, 0.12);
        }

        .form-shell textarea.form-control {
            min-height: 160px;
        }

        .table-like {
            display: grid;
            gap: 14px;
        }

        .table-like .row-item {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            padding: 18px 22px;
            border-radius: 0;
            background: #fffaf4;
            border-left: 4px solid var(--tla-orange);
            border-top: 1px solid #d8c0aa;
            border-right: 1px solid #d8c0aa;
            border-bottom: 1px solid #d8c0aa;
        }

        .table-like .row-item span:last-child {
            color: var(--tla-text-soft);
        }

        [data-aos] {
            opacity: 1 !important;
            transform: none !important;
        }

        @media (max-width: 991px) {
            .tla-header {
                padding: 14px 0;
            }

            .tla-navbar-shell {
                gap: 18px;
                padding: 24px 20px;
            }

            .tla-brand-copy small,
            .tla-user-name {
                display: none;
            }

            .hero-panel {
                min-height: auto;
                padding: 120px 0 88px;
                background: linear-gradient(180deg, #f3eadf 0%, #efe2d1 100%);
            }

            .hero-panel::after {
                display: none;
            }

            .hero-copy-box {
                padding: 24px;
                box-shadow: 10px 10px 0 rgba(212, 163, 115, 0.2);
            }

            .metric-grid,
            .info-strip,
            .hero-badge-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 767px) {
            .tla-navbar-shell {
                padding: 22px 16px;
            }

            .tla-navbar-shell::before,
            .tla-navbar-shell::after {
                left: 10px;
                right: 10px;
            }

            .tla-brand-mark {
                width: 58px;
                height: 58px;
            }

            .tla-brand-copy .sitename {
                font-size: 1.55rem;
            }

            .tla-header-actions {
                gap: 10px;
            }

            .tla-register-btn {
                padding: 11px 16px;
                font-size: 0.95rem;
            }

            .page-section {
                padding: 72px 0;
            }

            .page-banner {
                padding: 112px 0 72px;
            }

            .tla-card,
            .form-shell,
            .cta-block,
            .feature-band {
                padding: 24px;
            }

            .hero-title {
                font-size: 3.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid position-relative p-0">
        @include('landing.includes.menu')
        @yield('carrusel')
    </div>

    <main class="site-main">
        @yield('contenido')
    </main>

    @include('landing.includes.footer')
    @include('landing.includes.scripts')
    @yield('custom_js')
</body>
</html>
